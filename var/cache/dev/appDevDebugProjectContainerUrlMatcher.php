<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        if (0 === strpos($pathinfo, '/comments')) {
            // comments_index
            if (rtrim($pathinfo, '/') === '/comments') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comments_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'comments_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CommentsController::indexAction',  '_route' => 'comments_index',);
            }
            not_comments_index:

            // comments_new
            if ($pathinfo === '/comments/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comments_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CommentsController::newAction',  '_route' => 'comments_new',);
            }
            not_comments_new:

            // comments_show
            if (preg_match('#^/comments/(?P<idComments>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comments_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_show')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::showAction',));
            }
            not_comments_show:

            // comments_edit
            if (preg_match('#^/comments/(?P<idComments>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comments_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_edit')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::editAction',));
            }
            not_comments_edit:

            // comments_delete
            if (preg_match('#^/comments/(?P<idComments>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_comments_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::deleteAction',));
            }
            not_comments_delete:

            // delete_route_name
            if (preg_match('#^/comments/(?P<id>\\d+)/entity\\-remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_route_name')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::deleteActionName',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/dog')) {
            if (0 === strpos($pathinfo, '/dogtitles')) {
                // dogtitles_index
                if (rtrim($pathinfo, '/') === '/dogtitles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dogtitles_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dogtitles_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DogTitlesController::indexAction',  '_route' => 'dogtitles_index',);
                }
                not_dogtitles_index:

                // dogtitles_new
                if ($pathinfo === '/dogtitles/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dogtitles_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DogTitlesController::newAction',  '_route' => 'dogtitles_new',);
                }
                not_dogtitles_new:

                // dogtitles_show
                if (preg_match('#^/dogtitles/(?P<idDogTit>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dogtitles_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogtitles_show')), array (  '_controller' => 'AppBundle\\Controller\\DogTitlesController::showAction',));
                }
                not_dogtitles_show:

                // dogtitles_edit
                if (preg_match('#^/dogtitles/(?P<idDogTit>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dogtitles_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogtitles_edit')), array (  '_controller' => 'AppBundle\\Controller\\DogTitlesController::editAction',));
                }
                not_dogtitles_edit:

                // dogtitles_delete
                if (preg_match('#^/dogtitles/(?P<idDogTit>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_dogtitles_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogtitles_delete')), array (  '_controller' => 'AppBundle\\Controller\\DogTitlesController::deleteAction',));
                }
                not_dogtitles_delete:

            }

            if (0 === strpos($pathinfo, '/dogvaccinations')) {
                // dogvaccinations_index
                if (rtrim($pathinfo, '/') === '/dogvaccinations') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dogvaccinations_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dogvaccinations_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DogVaccinationsController::indexAction',  '_route' => 'dogvaccinations_index',);
                }
                not_dogvaccinations_index:

                // dogvaccinations_new
                if ($pathinfo === '/dogvaccinations/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dogvaccinations_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DogVaccinationsController::newAction',  '_route' => 'dogvaccinations_new',);
                }
                not_dogvaccinations_new:

                // dogvaccinations_show
                if (preg_match('#^/dogvaccinations/(?P<idDogVac>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dogvaccinations_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogvaccinations_show')), array (  '_controller' => 'AppBundle\\Controller\\DogVaccinationsController::showAction',));
                }
                not_dogvaccinations_show:

                // dogvaccinations_edit
                if (preg_match('#^/dogvaccinations/(?P<idDogVac>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dogvaccinations_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogvaccinations_edit')), array (  '_controller' => 'AppBundle\\Controller\\DogVaccinationsController::editAction',));
                }
                not_dogvaccinations_edit:

                // dogvaccinations_delete
                if (preg_match('#^/dogvaccinations/(?P<idDogVac>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_dogvaccinations_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogvaccinations_delete')), array (  '_controller' => 'AppBundle\\Controller\\DogVaccinationsController::deleteAction',));
                }
                not_dogvaccinations_delete:

            }

            if (0 === strpos($pathinfo, '/dogs')) {
                // dogs_index
                if (rtrim($pathinfo, '/') === '/dogs') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dogs_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dogs_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DogsController::indexAction',  '_route' => 'dogs_index',);
                }
                not_dogs_index:

                // dogs_new
                if ($pathinfo === '/dogs/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dogs_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DogsController::newAction',  '_route' => 'dogs_new',);
                }
                not_dogs_new:

                // dogs_show
                if (preg_match('#^/dogs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dogs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogs_show')), array (  '_controller' => 'AppBundle\\Controller\\DogsController::showAction',));
                }
                not_dogs_show:

                // dogs_edit
                if (preg_match('#^/dogs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dogs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogs_edit')), array (  '_controller' => 'AppBundle\\Controller\\DogsController::editAction',));
                }
                not_dogs_edit:

                // dogs_delete
                if (preg_match('#^/dogs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_dogs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogs_delete')), array (  '_controller' => 'AppBundle\\Controller\\DogsController::deleteAction',));
                }
                not_dogs_delete:

                if (0 === strpos($pathinfo, '/dogsphotos')) {
                    // dogsphotos_index
                    if (rtrim($pathinfo, '/') === '/dogsphotos') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_dogsphotos_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'dogsphotos_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DogsPhotosController::indexAction',  '_route' => 'dogsphotos_index',);
                    }
                    not_dogsphotos_index:

                    // dogsphotos_new
                    if ($pathinfo === '/dogsphotos/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_dogsphotos_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\DogsPhotosController::newAction',  '_route' => 'dogsphotos_new',);
                    }
                    not_dogsphotos_new:

                    // dogsphotos_show
                    if (preg_match('#^/dogsphotos/(?P<idDogPh>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_dogsphotos_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogsphotos_show')), array (  '_controller' => 'AppBundle\\Controller\\DogsPhotosController::showAction',));
                    }
                    not_dogsphotos_show:

                    // dogsphotos_edit
                    if (preg_match('#^/dogsphotos/(?P<idDogPh>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_dogsphotos_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogsphotos_edit')), array (  '_controller' => 'AppBundle\\Controller\\DogsPhotosController::editAction',));
                    }
                    not_dogsphotos_edit:

                    // dogsphotos_delete
                    if (preg_match('#^/dogsphotos/(?P<idDogPh>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_dogsphotos_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dogsphotos_delete')), array (  '_controller' => 'AppBundle\\Controller\\DogsPhotosController::deleteAction',));
                    }
                    not_dogsphotos_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/litters')) {
            // litters_index
            if (rtrim($pathinfo, '/') === '/litters') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_litters_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'litters_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LittersController::indexAction',  '_route' => 'litters_index',);
            }
            not_litters_index:

            // litters_new
            if ($pathinfo === '/litters/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_litters_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LittersController::newAction',  '_route' => 'litters_new',);
            }
            not_litters_new:

            // litters_show
            if (preg_match('#^/litters/(?P<idLitters>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_litters_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'litters_show')), array (  '_controller' => 'AppBundle\\Controller\\LittersController::showAction',));
            }
            not_litters_show:

            // litters_edit
            if (preg_match('#^/litters/(?P<idLitters>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_litters_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'litters_edit')), array (  '_controller' => 'AppBundle\\Controller\\LittersController::editAction',));
            }
            not_litters_edit:

            // litters_delete
            if (preg_match('#^/litters/(?P<idLitters>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_litters_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'litters_delete')), array (  '_controller' => 'AppBundle\\Controller\\LittersController::deleteAction',));
            }
            not_litters_delete:

        }

        if (0 === strpos($pathinfo, '/nursery')) {
            // nursery_index
            if (rtrim($pathinfo, '/') === '/nursery') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nursery_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nursery_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NurseryController::indexAction',  '_route' => 'nursery_index',);
            }
            not_nursery_index:

            // nursery_new
            if ($pathinfo === '/nursery/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nursery_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NurseryController::newAction',  '_route' => 'nursery_new',);
            }
            not_nursery_new:

            // nursery_show
            if (preg_match('#^/nursery/(?P<idNursery>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nursery_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nursery_show')), array (  '_controller' => 'AppBundle\\Controller\\NurseryController::showAction',));
            }
            not_nursery_show:

            // nursery_edit
            if (preg_match('#^/nursery/(?P<idNursery>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nursery_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nursery_edit')), array (  '_controller' => 'AppBundle\\Controller\\NurseryController::editAction',));
            }
            not_nursery_edit:

            // nursery_delete
            if (preg_match('#^/nursery/(?P<idNursery>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_nursery_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nursery_delete')), array (  '_controller' => 'AppBundle\\Controller\\NurseryController::deleteAction',));
            }
            not_nursery_delete:

            // nursery_editPar
            if (preg_match('#^/nursery/(?P<idNursery>[^/]++)/editPar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nursery_editPar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nursery_editPar')), array (  '_controller' => 'AppBundle\\Controller\\NurseryController::editParAction',));
            }
            not_nursery_editPar:

        }

        if (0 === strpos($pathinfo, '/services')) {
            // services_index
            if (rtrim($pathinfo, '/') === '/services') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_services_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'services_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServicesController::indexAction',  '_route' => 'services_index',);
            }
            not_services_index:

            // services_new
            if ($pathinfo === '/services/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_services_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServicesController::newAction',  '_route' => 'services_new',);
            }
            not_services_new:

            // services_show
            if (preg_match('#^/services/(?P<idServices>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_services_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_show')), array (  '_controller' => 'AppBundle\\Controller\\ServicesController::showAction',));
            }
            not_services_show:

            // services_comment
            if (preg_match('#^/services/(?P<idServices>[^/]++)/comment$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_services_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_comment')), array (  '_controller' => 'AppBundle\\Controller\\ServicesController::commentServiceAction',));
            }
            not_services_comment:

            // services_edit
            if (preg_match('#^/services/(?P<idServices>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_services_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_edit')), array (  '_controller' => 'AppBundle\\Controller\\ServicesController::editAction',));
            }
            not_services_edit:

            // services_delete
            if (preg_match('#^/services/(?P<idServices>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_services_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_delete')), array (  '_controller' => 'AppBundle\\Controller\\ServicesController::deleteAction',));
            }
            not_services_delete:

        }

        if (0 === strpos($pathinfo, '/titles')) {
            // titles_index
            if (rtrim($pathinfo, '/') === '/titles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_titles_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'titles_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TitlesController::indexAction',  '_route' => 'titles_index',);
            }
            not_titles_index:

            // titles_new
            if ($pathinfo === '/titles/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_titles_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TitlesController::newAction',  '_route' => 'titles_new',);
            }
            not_titles_new:

            // titles_show
            if (preg_match('#^/titles/(?P<idTitles>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_titles_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'titles_show')), array (  '_controller' => 'AppBundle\\Controller\\TitlesController::showAction',));
            }
            not_titles_show:

            // titles_edit
            if (preg_match('#^/titles/(?P<idTitles>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_titles_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'titles_edit')), array (  '_controller' => 'AppBundle\\Controller\\TitlesController::editAction',));
            }
            not_titles_edit:

            // titles_delete
            if (preg_match('#^/titles/(?P<idTitles>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_titles_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'titles_delete')), array (  '_controller' => 'AppBundle\\Controller\\TitlesController::deleteAction',));
            }
            not_titles_delete:

            // titles_delete_href
            if (preg_match('#^/titles/(?P<idTitles>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'titles_delete_href')), array (  '_controller' => 'AppBundle\\Controller\\TitlesController::deletehrefAction',));
            }

        }

        if (0 === strpos($pathinfo, '/v')) {
            if (0 === strpos($pathinfo, '/vaccinations')) {
                // vaccinations_index
                if (rtrim($pathinfo, '/') === '/vaccinations') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vaccinations_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vaccinations_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VaccinationsController::indexAction',  '_route' => 'vaccinations_index',);
                }
                not_vaccinations_index:

                // vaccinations_new
                if ($pathinfo === '/vaccinations/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_vaccinations_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VaccinationsController::newAction',  '_route' => 'vaccinations_new',);
                }
                not_vaccinations_new:

                // vaccinations_show
                if (preg_match('#^/vaccinations/(?P<idVaccinations>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vaccinations_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vaccinations_show')), array (  '_controller' => 'AppBundle\\Controller\\VaccinationsController::showAction',));
                }
                not_vaccinations_show:

                // vaccinations_edit
                if (preg_match('#^/vaccinations/(?P<idVaccinations>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_vaccinations_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vaccinations_edit')), array (  '_controller' => 'AppBundle\\Controller\\VaccinationsController::editAction',));
                }
                not_vaccinations_edit:

                // vaccinations_delete
                if (preg_match('#^/vaccinations/(?P<idVaccinations>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_vaccinations_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vaccinations_delete')), array (  '_controller' => 'AppBundle\\Controller\\VaccinationsController::deleteAction',));
                }
                not_vaccinations_delete:

                // vaccinations_delete_href
                if (preg_match('#^/vaccinations/(?P<idVaccinations>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vaccinations_delete_href')), array (  '_controller' => 'AppBundle\\Controller\\VaccinationsController::deleteHrefAction',));
                }

            }

            if (0 === strpos($pathinfo, '/videos')) {
                // videos_index
                if (rtrim($pathinfo, '/') === '/videos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_videos_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'videos_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VideosController::indexAction',  '_route' => 'videos_index',);
                }
                not_videos_index:

                // videos_new
                if ($pathinfo === '/videos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_videos_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\VideosController::newAction',  '_route' => 'videos_new',);
                }
                not_videos_new:

                // videos_show
                if (preg_match('#^/videos/(?P<idVideo>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_videos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'videos_show')), array (  '_controller' => 'AppBundle\\Controller\\VideosController::showAction',));
                }
                not_videos_show:

                // videos_edit
                if (preg_match('#^/videos/(?P<idVideo>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_videos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'videos_edit')), array (  '_controller' => 'AppBundle\\Controller\\VideosController::editAction',));
                }
                not_videos_edit:

                // videos_delete
                if (preg_match('#^/videos/(?P<idVideo>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_videos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'videos_delete')), array (  '_controller' => 'AppBundle\\Controller\\VideosController::deleteAction',));
                }
                not_videos_delete:

            }

        }

        if (0 === strpos($pathinfo, '/news')) {
            // news_index
            if (rtrim($pathinfo, '/') === '/news') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_news_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'news_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\newsController::indexAction',  '_route' => 'news_index',);
            }
            not_news_index:

            // news_new
            if ($pathinfo === '/news/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_news_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\newsController::newAction',  '_route' => 'news_new',);
            }
            not_news_new:

            // news_show
            if (preg_match('#^/news/(?P<idNews>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_news_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show')), array (  '_controller' => 'AppBundle\\Controller\\newsController::showAction',));
            }
            not_news_show:

            // news_edit
            if (preg_match('#^/news/(?P<idNews>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_news_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_edit')), array (  '_controller' => 'AppBundle\\Controller\\newsController::editAction',));
            }
            not_news_edit:

            // news_delete
            if (preg_match('#^/news/(?P<idNews>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_news_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_delete')), array (  '_controller' => 'AppBundle\\Controller\\newsController::deleteAction',));
            }
            not_news_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
