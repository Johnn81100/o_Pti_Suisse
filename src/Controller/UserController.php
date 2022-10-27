<?php

    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    class UserController extends AbstractController

{
    /**
     * @Route("/accueil", name="user_dashboard", methods={"GET"})
     */
    function userDashboard()
    {
        return $this->render('base.html.twig', 
        [

        ] );
    }
}


?>