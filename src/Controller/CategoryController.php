<?php

namespace App\Controller;

use App\Entity\Category;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/addCategory",name="addCategoryForm")
     */
    public function Show()
    {
        return $this->render('categories/add.html.twig');
    }

    /**
     * @Route("addCategoryAction",name="addCategoryAction")
     */
    public function AddCategory(Request $r)
    {
        $manager = $this->getDoctrine()->getManager();
        $c = new Category();
        $c->setName($r->request->get('name'));
        $manager->persist($c);
        $manager->flush();
        return $this->redirect($this->generateUrl('admin'));
    }


    /**
     * @Route("/deleteCategory/{id}" , name="deleteCategory")
     */
    public function deleteCategory($id)
    {
        $manager = $this->getDoctrine()->getManager();
        $c = $manager->getRepository(Category::class)->find($id);
        $manager->remove($c);
        $manager->flush();
        return $this->redirect($this->generateUrl('admin'));
    }

    /**
     * @Route("/updateCategory/{id}" ,name="updateCategoryForm")
     */
    public function ShowForm($id)
    {
        $manager = $this->getDoctrine()->getManager();
        $c = $manager->getRepository(Category::class)->find($id);
        return $this->render('categories/update.html.twig',['c' => $c]);
    }

    /**
     * @Route("/uplodeAction/{id}",name="updateCategory")
     */
    public function UpdateCategory($id,Request $r)
    {
        $manager = $this->getDoctrine()->getManager();
        $c = $manager->getRepository(Category::class)->find($id);
        $c->setName($r->request->get('name'));
        $manager->persist($c);
        $manager->flush();
        return $this->redirect($this->generateUrl('admin'));
    }
}
