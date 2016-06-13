<?php

namespace Ecommerce\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
	public function indexAction(Request $request)
	{
		$session = $request->getSession();
		$user = $session->get('user');



		return $this->render('::index.html.twig', array(
		                                                                  'session' => $user,
		                                                                  ));
	}
}
