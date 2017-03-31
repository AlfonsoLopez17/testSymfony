<?php
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($firstName, $lastName, $color)
	{
    	$response = $this->forward('AcmeHelloBundle:Hello:fancy', array(
    		'firstName' => $firstName,
    		'lastName' => $lastName,
    		'color' => $color 
		));

		return $response;
	}

	public function fancyAction($firstName, $lastName, $color) {
		return new Response('<html><body>Hello ' . $firstName . ' ' . $lastName . ', color: ' . $color . '</body></html>');
	}
}