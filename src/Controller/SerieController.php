<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\SerieType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Serie;
use App\Entity\Purchase;
use App\Entity\User;

class SerieController extends AbstractController
{
    public $u;

    /**
     * @Route("/", name="home")
     */
    public function index(Request $r, PaginatorInterface $paginator)
    {
        $session = $r->getSession();

        $manager = $this->getDoctrine()->getManager();
        $categories = $manager->getRepository(Category::class)->findAll();
        $series = $manager->getRepository(Serie::class)->findAll();
        if($session->has('user_id'))
            $u= $manager->getRepository(User::class)->find($session->get('user_id'));
        else
            $u=null;
        $appointments = $paginator->paginate(
            $series,
            $r->query->getInt('page', 1),
            6
        );


        return $this->render('serie/index.html.twig', [
            'series' => $appointments,'u'=>$u,'categories'=>$categories,'banner'=>$manager->getRepository(Serie::class)->findAll()
        ]);
    }

    /**
     * @Route("/{id}", requirements={"id"="\d+"})
     */
    public function showSerie($id,Request $r)
    {
        $session = $r->getSession();
        $manager = $this->getDoctrine()->getManager();
        $serie = $manager->getRepository(Serie::class)->find($id);
        if($session->has('user_id'))
            $u= $manager->getRepository(User::class)->find($session->get('user_id'));
        else
            $u=null;
        if(is_null($serie))
            return $this->render('404.html.twig',['user'=>$u]);
        return $this->render('serie/show.html.twig',['serie'=>$serie,'user'=>$u]);
    }

    /**
     * @Route("/addcart/{id}",name="add_cart")
     */
    public function addCart(Request $r,$id)
    {
        $session = $r->getSession();
        $cart=[];
        if($session->has('cart'))
        {
            $cart = $session->get('cart');
        }
        else
        {
            $session->set('cart',[]);
        }
        if(array_key_exists($id,$cart))
        {
            $cart[$id]+=1;
        }
        else
            $cart[$id]=1;

        $session->set('cart',$cart);
        $this->addFlash('success', 'Serie added to cart');
        return $this->redirect('/');
    }

    /**
     * @Route("/cart/show",name="cart")
     */
    public function showCart(Request $r, PaginatorInterface $paginator)
    {
        $session = $r->getSession();
        $cart = $session->get('cart');
        $manager = $this->getDoctrine()->getManager();
        $series=[];
        if(!is_null($cart))
        {

            $series = $manager->getRepository(Serie::class)
            ->findBy(['id'=>array_keys($cart)]);
        }
        if($session->has('user_id'))
            $u= $manager->getRepository(User::class)->find($session->get('user_id'));
        else
            $u=null;

        return $this->render('cart/index.html.twig',['series'=>$series,'cart'=>$cart,'user'=>$u]);
    }

    /**
     * @Route("/check_out",name="check_out")
     */
    public function checkOut(Request $r)
    {
        $session = $r->getSession();
        
            $manager= $this->getDoctrine()->getManager();
            $u=$this->container->get('security.token_storage')->getToken()->getUser();

            if ($u != "anon.")
            {
                $series = $manager->getRepository(Serie::class)->findBy(['id'=>array_keys($session->get('cart'))]);
                foreach($series as $s)
                {
                    $p = new Purchase();
                    $p->setIdUser($u);
                    $p->setCreatedAt(new \DateTime());
                    $p->setIdSerie($s);
                    $manager->persist($p);
                    $manager->flush();
                }
                $session->set('cart',[]);
                return $this->redirect($this->generateURL('home'));
            }else return $this->redirect($this->generateUrl('notLogged'));
    }

    /**
     * @Route("/about" , name="about")
     */
    public function about()
    {

        return $this->render('about.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/newserie")
     */
    public function newSerie(Request $r)
    {
        if(( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_USER' ) )&&(!$this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
        $s = new Serie();
        $form = $this->createForm(SerieType::class, $s);
        $form->handleRequest($r);
        $manager = $this->getDoctrine()->getManager();
        $session = $r->getSession();
        $u=$manager->getRepository(User::class)->find($session->has('user_id'));

            /** @var UploadedFile $brochureFile */
            $brochureFile = $form['image']->getData();
            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();
                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );

                    $s->setImage($newFilename);
                    $s->getPrice($form['price']);


                    $s->setCreatedAt(new \DateTime());
                    $c = $manager->getRepository(Category::class)->find($r->request->get("serie")["category"]);
                    $s->setCategory($c);
                    $s->setIdUser($this->container->get('security.token_storage')->getToken()->getUser());
                    $manager->persist($s);
                    $manager->flush();
                    return $this->redirect($this->generateUrl('vendeur'));
                } catch (FileException $e) {
                    return $this->render('404.html.twig');
            }
        }
        return $this->render('serie/add.html.twig', [
            'form' => $form->createView(),'user'=>$u
        ]);
        }
        else return $this->redirect($this->generateUrl('error'));
    }

    /**
     * @Route("/delete/{id}")
     */
    public function delete($id)
    {
        if(( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_USER' ) )&&(!$this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            $manager = $this->getDoctrine()->getManager();
            $s = $manager->getRepository(Serie::class)->find($id);
            $manager->remove($s);
            $manager->flush();
            return $this->redirect($this->generateUrl('vendeur'));
        }
        else return $this->render('404.html.twig');
    }

    /**
     * @Route("/update/{id}")
     */
    public function update($id)
    {
        if(( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_USER' ) )&&(!$this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            $manager = $this->getDoctrine()->getManager();
            $s = $manager->getRepository(Serie::class)->find($id);
            return $this->render('serie/update.html.twig', ['serie' => $s]);
        }
        else return $this->render('404.html.twig');
    }

    /**
     * @Route("/save/{id}")
     */
    public function Save(Request $r,$id)
    {

        if(( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_USER' ) )&&(!$this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            $manager = $this->getDoctrine()->getManager();
            $s = $manager->getRepository(Serie::class)->find($id);
            $s->setTitle($r->request->get('title'));
            $s->setPrice($r->request->get('price'));
            $s->setDescription($r->request->get('description'));
            $manager->persist($s);
            $manager->flush();
            return $this->redirect($this->generateUrl('vendeur'));
        }
        else $this->render('404.html.twig');
    }

    /**
     * @Route("/search")
     */
    public function search(Request $r,PaginatorInterface $paginator)
    {
        $manager = $this->getDoctrine()->getManager();
        if($r->request->get('price')>0)
            $series = $manager->getRepository(Serie::class)->searchByPrice($r->request->get('price'));
        else
            $series = $manager->getRepository(Serie::class)->findAll();

        $title = $manager->getRepository(Serie::class)->searchByName($r->request->get('title'));

        if(is_null($r->request->get('category')))
            $category = $manager->getRepository(Serie::class)->findAll();
        else
        {

            $category = $manager->getRepository(Serie::class)->searchByCategory($r->request->get('category'));
        }

        $result = [];
        $categories = $manager->getRepository(Category::class)->findAll();
        $session = $r->getSession();
        if($session->has('user_id'))
            $u= $manager->getRepository(User::class)->find($session->get('user_id'));
        else
            $u=null;
        for($i=0;$i < count($title);$i++)
        {
           if((in_array($title[$i],$series))&&(in_array($title[$i],$category)))
           {
             $result[count($result)] = $title[$i];
           }
        }


        $appointments = $paginator->paginate(
            $result,
            $r->query->getInt('page', 1),
            6
        );
        return $this->render('serie/index.html.twig', [
            'series' => $appointments,'user'=>$u,'categories'=>$categories,'banner'=>$manager->getRepository(Serie::class)->findAll()
        ]);
    }

    /**
     * @Route("/send")
     */
    public function send(Request $r,\Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Message from '.$r->request->get('email')))
        ->setFrom('khaledsahli36@gmail.com')
        ->setTo('khaledsahli36@gmail.com')
        ->setBody(
            $r->request->get('message')    
        );

    $mailer->send($message);
    $this->addFlash('success', 'Message sent');
    return $this->redirect($this->generateURL('home'));
    }

    /**
     * @Route("/register/confirmed")
     */
    public function Confirmed()
    {
        return $this->redirect($this->generateURL('home'));
    }

    /**
     * @Route("/serie/delete/{id}",name="deleteFromCart")
     */
    public function DeleteFromCart($id,Request $r)
    {
        $session = $r->getSession();
        $cart=$session->get('cart');
        unset($cart[$id]);
        $session->set('cart',$cart);
        return $this->redirect($this->generateURL('cart'));
    }

    /**
     * @Route("/deletecart",name="deleteCart")
     */
    public function deleteCart(Request $r)
    {
        $session = $r->getSession();
        $session->set('cart',[]);
        return $this->redirect($this->generateURL('cart'));
    }
}
