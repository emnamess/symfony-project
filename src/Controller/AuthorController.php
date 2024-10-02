<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/author')]
class AuthorController extends AbstractController
{
    #[Route('/showauthor', name: 'app_author_show')]
    public function showAuthor(): Response
    {
        $authorName='VictorHugo';
        $authorEmail='@gmail.com';

        return $this->render('author/showAuthor.html.twig',
    array(
        'authorName'=>$authorName,
        'authorEmail'=>$authorEmail
        )
    );
    }
    #[Route('/listauthors', name: 'app_author_list')]
    public function listAuthors():Response {
        $authors = [
            ["authorName" => "Victor Hugo", "email" => "victorhugo@gmail.com", "picture" => "victorhugo.png"],
            ["authorName" => "George Sand", "email" => "georgesand@gmail.com", "picture" => "goergesand.png"],
            ["authorName" => "Émile Zola", "email" => "emilezola@gmail.com", "picture" => "emilezola.png"],
            ["authorName" => "Marcel Proust", "email" => "marcelproust@gmail.com", "picture" => "marcelproust.png"],
            ["authorName" => "Honoré de Balzac", "email" => "honorebalzac@gmail.com", "picture" => "Honoré de Balzac.png"],
        ];

        return $this->render('author/listAuthors.html.twig', [
            
            'authors' => $authors,
        ]);
    }
}
