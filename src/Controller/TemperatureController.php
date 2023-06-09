<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;




class TemperatureController {

    #[Route('/temp')]
    public function temperature(
        Request $request) { 
    $temp =  $request->query->get('temperature');
    if (!is_numeric($temp)) {

    // Return an error if the temperature is invalid
        
    return new Response("Error: Temperature must be a number", 400);
        
        }
    else {$fahrenheit = ($temp * 9 / 5) + 32;
        // $celsius =($temp -32) * 5 /9;
    
    return new Response("The temperature in Fahrenheit: " . $fahrenheit . " and Celsius is " . $temp);
}
}
}
