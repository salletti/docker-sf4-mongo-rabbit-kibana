<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ListPostController
 *
 * @Route("/post/list")
 */
class ListPostController extends Controller
{
    public function __invoke()
    {
        die('pippo');
    }

}
