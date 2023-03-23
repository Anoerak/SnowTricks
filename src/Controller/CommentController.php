<?php

namespace App\Controller;

use App\Entity\Comment;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
{
    #[Route('/comment/delete/{id}', name: 'app_comment_delete')]
    public function deleteComment(Comment $comment, EntityManagerInterface $entityManagerInterface): Response
    {
        $entityManagerInterface->remove($comment);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('app_trick', ['id' => $comment->getTrick()->getId()]);
    }
}
