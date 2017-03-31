<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function showAction($slug)
    {
        return new Response('<html><body>Blog selected: ' . $slug . '</body></html>');
    }
}