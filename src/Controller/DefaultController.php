<?php
/**
 * Created by PhpStorm.
 * User: mindaugas
 * Date: 18.4.20
 * Time: 17.11
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * @Route ("/")
     */
    public function index(){
        return $this->render('base.html.twig');
    }

}