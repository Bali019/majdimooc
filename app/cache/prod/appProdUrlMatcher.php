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

        // moo_ccommentaire_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moo_ccommentaire_homepage')), array (  '_controller' => 'MOOC\\commentaireBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/Commentaire')) {
            // COMMENTAIRE
            if ($pathinfo === '/Commentaire') {
                return array (  '_controller' => 'MOOC\\commentaireBundle\\Controller\\CommentaireController::commenterAction',  '_route' => 'COMMENTAIRE',);
            }

            // COMMENTAIRE2
            if ($pathinfo === '/Commentaireaff') {
                return array (  '_controller' => 'MOOC\\commentaireBundle\\Controller\\CommentaireController::ajoutAction',  '_route' => 'COMMENTAIRE2',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
