<?php

namespace Shop\AnticariatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
	 * @Route("/")
	 */
    public function indexAction()
    {
        return $this->render('ShopAnticariatBundle:Default:index.html.twig');
    }
}
