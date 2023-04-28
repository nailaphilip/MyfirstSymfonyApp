<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HelloSymfonyController {

    #[Route('/i-study-symfony')]
    public function hellosymfony(){
        return new Response("Hello Symfony!");
    }
}
