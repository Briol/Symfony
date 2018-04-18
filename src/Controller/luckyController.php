<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 16/04/2018
 * Time: 15:35
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class luckyController extends Controller
{
    /**
* @Route("/lucky/number")
     */

    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,

        ));
    }
}