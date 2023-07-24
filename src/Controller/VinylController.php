<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{

    #[Route('/')]
    public function homepage(): Response //return type
    {

        //die('Vinyl: not a fancy-looking frisbee');
        return new Response('Title:PB and Jams');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response //return type
    {
        if ($slug) {
            $title = 'Genre:' . u(str_replace('-', ' ', $slug))->title(true);
        }else{
            $title = 'All genres';
        }

        return new Response($title);
    }
}
