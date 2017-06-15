<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopicController extends Controller
{
    public function indexAction()
    {
        return $this->json([
            ["name" => "Test"],
            ["name" => "Second Test"]
        ]);
    }

    public function newAction()
    {
        return $this->json([
            ["validations" => ["one", "two", "three"]],
            ["defaults" => ["one", "two", "three"]]
        ]);
    }

    public function showAction($id)
    {
        return $this->json([
            "name" => "test"
        ]);
    }

    public function editAction($id)
    {
        return $this->json([
            ["validations" => ["one", "two", "three"]],
            ["defaults" => ["one", "two", "three"]],
            ["item" => ["name" => "Test"]]
        ]);
    }
}
