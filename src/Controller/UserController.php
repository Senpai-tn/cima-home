<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Serie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use Symfony\Component\Security\Core\Role\Role;

class UserController extends AbstractController
{

    /**
     * @Route("/vendeur",name="vendeur")
     */
    public function Vendeur(Request $r)
    {
        if(( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_USER' ) )&&(!$this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $manager = $this->getDoctrine()->getManager();
            $series = $manager->getRepository(Serie::class)->findBy(['id_user'=>$user->getId()]);
            return $this->render('user/dashboard.html.twig',['series'=>$series,'users'=>null]);
        }
        else return $this->redirect($this->generateUrl('error'));

    }

    /**
     * @Route("/admin",name="admin")
     */
    public function Admin(Request $r)
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' ) )
        {
            $manager = $this->getDoctrine()->getManager();
            $users = $manager->getRepository(User::class)->findAll();
            $c = $manager->getRepository(Category::class)->findAll();
            $s = $manager->getRepository(Serie::class)->findAll();
            foreach ($users as $key => $u)
            {
                if (count($u->getRoles()) > 1)
                    unset($users[$key]);
            }
            return $this->render('user/dashboardAdmin.html.twig',['users'=>$users,'categories'=>$c,'series'=>$s]);
        }
        else return $this->redirect($this->generateUrl('error'));
    }

    /**
     * @Route("deleteUser/{id}")
     */
    public function Delete($id)
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' ) ) {
            $manager = $this->getDoctrine()->getManager();
            $u = $manager->getRepository(User::class)->find($id);
            $manager->remove($u);
            $manager->flush();
            return $this->redirect($this->generateUrl('admin'));
        }
        else return $this->redirect('/login');
    }

    /**
     * @Route("/disable/{id}")
     */
    public function Disable(Request $r,$id)
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' ) ) {
            $manager = $this->getDoctrine()->getManager();
            $u = $manager->getRepository(User::class)->find($id);
            $u->setEnabled(0);
            $manager->persist($u);
            $manager->flush();
            return $this->redirect($this->generateUrl('admin'));
        }
        else return $this->redirect($this->generateUrl('error'));
    }

    /**
     *@Route("/enable/{id}")
     */
    public function Enable($id)
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' ) ) {
            $manager = $this->getDoctrine()->getManager();
            $u = $manager->getRepository(User::class)->find($id);
            $u->setEnabled(1);
            $manager->persist($u);
            $manager->flush();
            return $this->redirect($this->generateUrl('admin'));
        }
        else return $this->redirect($this->generateUrl('error'));
    }

    /**
     * @Route("/error",name="error")
     */
    public function accessNotGranted()
    {
        return $this->render('404.html.twig');
    }

    /**
     * @Route("notlogged",name="notLogged")
     */
    public function notLogged()
    {
        return $this->render('notLogged.html.twig');
    }

    /**
     * @Route("logged",name="logged")
     */
    public function Logged()
    {
        return $this->render('logged.html.twig');
    }

    /**
     * @Route("/login_check",name="check")
     */
    public function checkLogin()
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' ) ) {
            return $this->redirect($this->generateUrl('admin'));
        }
        else return $this->redirect($this->generateUrl('vendeur'));
    }

    /**
     * @Route("/profile",name="profile")
     */
    public function profile()
    {
        return $this->render("user/profile.html.twig");
    }

}
