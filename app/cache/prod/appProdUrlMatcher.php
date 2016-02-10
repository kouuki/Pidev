<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pidev_crowd_rise_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_homepage')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::indexAction',));
        }

        // pidev_crowd_rise_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'pidev_crowd_rise_accueil',);
        }

        // pidev_crowd_rise_projet
        if ($pathinfo === '/projet') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::projetAction',  '_route' => 'pidev_crowd_rise_projet',);
        }

        // pidev_crowd_rise_utilisable
        if ($pathinfo === '/utilisable') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::utilisableAction',  '_route' => 'pidev_crowd_rise_utilisable',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
