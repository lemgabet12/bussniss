<?php
namespace App\Controller;
use App\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/" , name="home")
     */
    public function home()

    {
        $annonces= $this->getDoctrine()->getRepository(Annonce::class) ->findAll();
        return $this->render('index.html.twig',
        ['annonces' => $annonces]);
        //return $this->render('index.html.twig');
    }

   /**
     * @Route("/annonce/{id}", name="annonce_detiel")
     * @param Annonce $annonce
     * @return Response
     */
  
     public function showdeteil($id)

     {
        $annonce = $this->getDoctrine()->getRepository(Annonce::class)->find($id);
         return $this->render("includes/detiel.html.twig", array("annonce" => $annonce));
     }
   
    
  
   

   
}