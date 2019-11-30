<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render(
            'home/index.html.twig',
            [
                'controller_name' => 'HomeController',
            ]
        );
    }

    /**
     * @Route("/alert", name="alert")
     */
    public function alert()
    {
        return $this->render(
            'alert/index.html.twig',
            [
                'controller_name' => 'Alert',
            ]
        );
    }

    /**
     * @Route("/timer", name="timer")
     */
    public function timer()
    {
        return $this->render(
            'timer/index.html.twig',
            [
                'controller_name' => 'Timer',
            ]
        );
    }

    /**
     * @Route("/calendar", name="calendar")
     */
    public function calendar()
    {
        return $this->render(
            'calendar/index.html.twig',
            [
                'controller_name' => 'Calendar',
            ]
        );
    }
    /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        return $this->render(
            'profile/index.html.twig',
            [
                'controller_name' => 'Profile',
            ]
        );
    }

}
