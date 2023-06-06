<?php
namespace App\Controller;
use App\Entity\Annonce;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
   /**
     * @Route("/list", name="list")
     */
  
    public function add(User $user)

    {
        // $user = $this->getUser();
        // dd($user);
        
        // $annonces= $this->getDoctrine()->getRepository(Annonce::class)->findByUserId($id);
        // dd($annonces);
        // return $this->render('includes/listannonce.html.twig',
        // ['annonces' => $annonces]);
        
    }

}