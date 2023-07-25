<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{

    #[Route('/')]
    public function homepage(): Response //return type
    {

        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        //die('Vinyl: not a fancy-looking frisbee');
        //return new Response('Title:PB and Jams');
        return $this->render('vinyl/homepage.html.twig', ['title' => 'PB & Jams', 'tracks' => $tracks,]);
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response //return type
    {
        // if ($slug) {
        //     $title = 'Genre:' . u(str_replace('-', ' ', $slug))->title(true);
        // } else {
        //     $title = 'All genres';
        // }

        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;

        //return new Response($title);
        return $this->render('vinyl/browse.html.twig', ['genre' => $genre,]);
    }
}
