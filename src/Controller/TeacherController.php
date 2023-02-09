<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}')]
    public function showTeacher(string $name ){ 
        return new Response('Bonjour '.$name);
    }
    #[Route('question5')]
    public function goToIndex()
    {
        return $this->forward('App\Controller\StudentController::index');
        
    }
}
