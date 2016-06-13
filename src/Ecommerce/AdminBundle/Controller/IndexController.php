<?php

namespace Ecommerce\AdminBundle\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/admin")
     */
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $auth = $session->get('user');
        if(!$auth || $auth->getRoles() != 'ROLE_ADMIN') {
            return $this->redirectToRoute('ecommerce_homepage');
        }

        return $this->render('AdminBundle:Default:index.html.twig');
    }

}
