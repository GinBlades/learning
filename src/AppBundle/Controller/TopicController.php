<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopicController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Topic:index.html.twig', array(
            // ...
        ));
    }

    public function showAction($id)
    {
        return $this->render('AppBundle:Topic:show.html.twig', array(
            // ...
        ));
    }

    public function newAction()
    {
        return $this->render('AppBundle:Topic:new.html.twig', array(
            // ...
        ));
    }

    public function editAction($id)
    {
        return $this->render('AppBundle:Topic:edit.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('AppBundle:Topic:create.html.twig', array(
            // ...
        ));
    }

    public function updateAction()
    {
        return $this->render('AppBundle:Topic:update.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('AppBundle:Topic:delete.html.twig', array(
            // ...
        ));
    }

}
