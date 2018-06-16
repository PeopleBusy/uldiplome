<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // list_users
        if ('/api/users' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_list_users;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\Api\\UserController::usersList',  '_route' => 'list_users',);
        }
        not_list_users:

        if (0 === strpos($pathinfo, '/configuration')) {
            // configuration
            if ('/configuration' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigurationController::addAction',  '_route' => 'configuration',);
            }

            // configuration_edit
            if (0 === strpos($pathinfo, '/configuration/edit') && preg_match('#^/configuration/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuration_edit')), array (  '_controller' => 'AppBundle\\Controller\\ConfigurationController::editAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/d')) {
            // homepage
            if ('/default/config' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

            if (0 === strpos($pathinfo, '/demande')) {
                // demande_add
                if ('/demande/add' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::addAction',  '_route' => 'demande_add',);
                }

                // demande_edit
                if (0 === strpos($pathinfo, '/demande/edit') && preg_match('#^/demande/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_edit')), array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::editAction',));
                }

                if (0 === strpos($pathinfo, '/demande/list')) {
                    // demande_list
                    if ('/demande/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::listAction',  '_route' => 'demande_list',);
                    }

                    // demande_list_a_imprimer
                    if ('/demande/list_a_imprimer' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::listAImprimerAction',  '_route' => 'demande_list_a_imprimer',);
                    }

                    // demande_list_imprimer
                    if ('/demande/list_imprimer' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::listImprimerAction',  '_route' => 'demande_list_imprimer',);
                    }

                }

                // liste_demande_filter
                if (0 === strpos($pathinfo, '/demande/filter') && preg_match('#^/demande/filter/(?P<formId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_demande_filter')), array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::filterAction',));
                }

                if (0 === strpos($pathinfo, '/demande/imprimer')) {
                    // demande_tout_imprimer
                    if (preg_match('#^/demande/imprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_tout_imprimer')), array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::toutImprimerAction',));
                    }

                    // demande_imprimer_final
                    if ('/demande/imprimer_final' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::imprimerAction',  '_route' => 'demande_imprimer_final',);
                    }

                }

                // demande_duplicata
                if (0 === strpos($pathinfo, '/demande/duplicata') && preg_match('#^/demande/duplicata/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_duplicata')), array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::addDuplicataAction',));
                }

            }

            // diplome_add
            if ('/diplome/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DiplomeController::addAction',  '_route' => 'diplome_add',);
            }

        }

        elseif (0 === strpos($pathinfo, '/i')) {
            // list_impression
            if ('/impression/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::listImpressionAction',  '_route' => 'list_impression',);
            }

            // inscription_autoriser
            if (0 === strpos($pathinfo, '/inscription/autoriser') && preg_match('#^/inscription/autoriser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_autoriser')), array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::autoriserAction',));
            }

            // inscription_delete
            if (0 === strpos($pathinfo, '/inscription/delete') && preg_match('#^/inscription/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_delete')), array (  '_controller' => 'AppBundle\\Controller\\EtudiantController::deleteAction',));
            }

        }

        // ul_homepage
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::indexAction',  '_route' => 'ul_homepage',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::logoutAction',  '_route' => 'logout',);
        }

        // app_user_login
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'app_user_login');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'app_user_login',);
        }

        // user_add
        if ('/user/add' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::addAction',  '_route' => 'user_add',);
        }

        // user_edit
        if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
