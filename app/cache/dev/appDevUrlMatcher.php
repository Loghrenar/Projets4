<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/ba5c73d')) {
            // _assetic_ba5c73d
            if ($pathinfo === '/css/ba5c73d.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba5c73d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ba5c73d',);
            }

            if (0 === strpos($pathinfo, '/css/ba5c73d_')) {
                // _assetic_ba5c73d_0
                if ($pathinfo === '/css/ba5c73d_animate_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba5c73d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ba5c73d_0',);
                }

                // _assetic_ba5c73d_1
                if ($pathinfo === '/css/ba5c73d_theme_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba5c73d',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ba5c73d_1',);
                }

                // _assetic_ba5c73d_2
                if ($pathinfo === '/css/ba5c73d_font-awesome_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba5c73d',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_ba5c73d_2',);
                }

                // _assetic_ba5c73d_3
                if ($pathinfo === '/css/ba5c73d_bootstrap_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba5c73d',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_ba5c73d_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/a761f61')) {
            // _assetic_a761f61
            if ($pathinfo === '/js/a761f61.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a761f61',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a761f61',);
            }

            if (0 === strpos($pathinfo, '/js/a761f61_')) {
                // _assetic_a761f61_0
                if ($pathinfo === '/js/a761f61_date_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a761f61',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a761f61_0',);
                }

                // _assetic_a761f61_1
                if ($pathinfo === '/js/a761f61_heure_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a761f61',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a761f61_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/d15100c')) {
            // _assetic_d15100c
            if ($pathinfo === '/css/d15100c.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd15100c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d15100c',);
            }

            if (0 === strpos($pathinfo, '/css/d15100c_')) {
                // _assetic_d15100c_0
                if ($pathinfo === '/css/d15100c_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd15100c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d15100c_0',);
                }

                // _assetic_d15100c_1
                if ($pathinfo === '/css/d15100c_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd15100c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_d15100c_1',);
                }

                // _assetic_d15100c_2
                if ($pathinfo === '/css/d15100c_animate_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd15100c',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_d15100c_2',);
                }

                // _assetic_d15100c_3
                if ($pathinfo === '/css/d15100c_theme_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd15100c',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_d15100c_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/d3cce5e')) {
            // _assetic_d3cce5e
            if ($pathinfo === '/js/d3cce5e.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d3cce5e',);
            }

            if (0 === strpos($pathinfo, '/js/d3cce5e_')) {
                // _assetic_d3cce5e_0
                if ($pathinfo === '/js/d3cce5e_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_0',);
                }

                // _assetic_d3cce5e_1
                if ($pathinfo === '/js/d3cce5e_modernizr_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_1',);
                }

                // _assetic_d3cce5e_2
                if ($pathinfo === '/js/d3cce5e_bootstrap_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_2',);
                }

                // _assetic_d3cce5e_3
                if ($pathinfo === '/js/d3cce5e_menustick_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_3',);
                }

                // _assetic_d3cce5e_4
                if ($pathinfo === '/js/d3cce5e_parallax_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_4',);
                }

                // _assetic_d3cce5e_5
                if ($pathinfo === '/js/d3cce5e_easing_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_5',);
                }

                // _assetic_d3cce5e_6
                if ($pathinfo === '/js/d3cce5e_wow_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_6',);
                }

                // _assetic_d3cce5e_7
                if ($pathinfo === '/js/d3cce5e_smoothscroll_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_7',);
                }

                // _assetic_d3cce5e_8
                if ($pathinfo === '/js/d3cce5e_masonry_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_8',);
                }

                // _assetic_d3cce5e_9
                if ($pathinfo === '/js/d3cce5e_imgloaded_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_9',);
                }

                if (0 === strpos($pathinfo, '/js/d3cce5e_c')) {
                    // _assetic_d3cce5e_10
                    if ($pathinfo === '/js/d3cce5e_classie_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_10',);
                    }

                    // _assetic_d3cce5e_11
                    if ($pathinfo === '/js/d3cce5e_colorfinder_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_11',);
                    }

                }

                // _assetic_d3cce5e_12
                if ($pathinfo === '/js/d3cce5e_gridscroll_13.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_12',);
                }

                if (0 === strpos($pathinfo, '/js/d3cce5e_co')) {
                    // _assetic_d3cce5e_13
                    if ($pathinfo === '/js/d3cce5e_contact_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_13',);
                    }

                    // _assetic_d3cce5e_14
                    if ($pathinfo === '/js/d3cce5e_common_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd3cce5e',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_d3cce5e_14',);
                    }

                }

            }

        }

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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // gc_projet
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gc_projet');
            }

            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gc_projet',);
        }

        // gc_projet_site
        if ($pathinfo === '/site') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\SiteController::indexAction',  '_route' => 'gc_projet_site',);
        }

        // gc_projet_tableau
        if ($pathinfo === '/tableau') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\TableauController::indexAction',  '_route' => 'gc_projet_tableau',);
        }

        // gc_projet_programme
        if ($pathinfo === '/programme') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammeController::indexAction',  '_route' => 'gc_projet_programme',);
        }

        // gc_projet_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ContactController::indexAction',  '_route' => 'gc_projet_contact',);
        }

        // gc_programmes
        if ($pathinfo === '/programmes') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammesController::indexAction',  '_route' => 'gc_programmes',);
        }

        // gc_programmes_show
        if (preg_match('#^/(?P<id>[^/]++)/programmes_show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_programmes_show')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammesController::showAction',));
        }

        // gc_programmes_edit
        if (preg_match('#^/(?P<id>[^/]++)/programmes_edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_programmes_edit')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammesController::editAction',));
        }

        // gc_programmes_new
        if ($pathinfo === '/programmes_new') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammesController::newAction',  '_route' => 'gc_programmes_new',);
        }

        // gc_programmes_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_gc_programmes_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_programmes_update')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammesController::updateAction',));
        }
        not_gc_programmes_update:

        // gc_programmes_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_gc_programmes_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_programmes_delete')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammesController::deleteAction',));
        }
        not_gc_programmes_delete:

        // gc_programmes_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gc_programmes_create;
            }

            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\ProgrammesController::createAction',  '_route' => 'gc_programmes_create',);
        }
        not_gc_programmes_create:

        // gc_informations
        if ($pathinfo === '/informations') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\InformationsController::indexAction',  '_route' => 'gc_informations',);
        }

        // gc_informations_show
        if (preg_match('#^/(?P<id>[^/]++)/informations_show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_informations_show')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\InformationsController::showAction',));
        }

        // gc_informations_edit
        if (preg_match('#^/(?P<id>[^/]++)/informations_edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_informations_edit')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\InformationsController::editAction',));
        }

        // gc_informations_new
        if ($pathinfo === '/informations_new') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\InformationsController::newAction',  '_route' => 'gc_informations_new',);
        }

        // gc_informations_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_gc_informations_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_informations_update')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\InformationsController::updateAction',));
        }
        not_gc_informations_update:

        // gc_informations_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_gc_informations_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_informations_delete')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\InformationsController::deleteAction',));
        }
        not_gc_informations_delete:

        // gc_informations_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gc_informations_create;
            }

            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\InformationsController::createAction',  '_route' => 'gc_informations_create',);
        }
        not_gc_informations_create:

        // gc_bandeau
        if ($pathinfo === '/bandeau') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\BandeauController::indexAction',  '_route' => 'gc_bandeau',);
        }

        // gc_bandeau_show
        if (preg_match('#^/(?P<id>[^/]++)/bandeau_show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_bandeau_show')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\BandeauController::showAction',));
        }

        // gc_bandeau_edit
        if (preg_match('#^/(?P<id>[^/]++)/bandeau_edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_bandeau_edit')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\BandeauController::editAction',));
        }

        // gc_bandeau_new
        if ($pathinfo === '/bandeau_new') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\BandeauController::newAction',  '_route' => 'gc_bandeau_new',);
        }

        // gc_bandeau_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_gc_bandeau_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_bandeau_update')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\BandeauController::updateAction',));
        }
        not_gc_bandeau_update:

        // gc_bandeau_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_gc_bandeau_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_bandeau_delete')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\BandeauController::deleteAction',));
        }
        not_gc_bandeau_delete:

        // gc_bandeau_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gc_bandeau_create;
            }

            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\BandeauController::createAction',  '_route' => 'gc_bandeau_create',);
        }
        not_gc_bandeau_create:

        if (0 === strpos($pathinfo, '/u')) {
            // gc_projet_utilisateurs
            if ($pathinfo === '/uilisateurs') {
                return array (  '_controller' => 'GCProjetBundle:Utilisateurs:afficheUsers',  '_route' => 'gc_projet_utilisateurs',);
            }

            // gc_project_supUsers
            if (0 === strpos($pathinfo, '/utilisateurs/suppression') && preg_match('#^/utilisateurs/suppression/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_project_supUsers')), array (  '_controller' => 'GCProjetBundle:Utilisateurs:supUsers',));
            }

        }

        // gc_playlist
        if ($pathinfo === '/playlist') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\PlaylistController::indexAction',  '_route' => 'gc_playlist',);
        }

        // gc_playlist_show
        if (preg_match('#^/(?P<id>[^/]++)/playlist_show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_playlist_show')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\PlaylistController::showAction',));
        }

        // gc_playlist_edit
        if (preg_match('#^/(?P<id>[^/]++)/playlist_edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_playlist_edit')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\PlaylistController::editAction',));
        }

        // gc_playlist_new
        if ($pathinfo === '/playlist_new') {
            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\PlaylistController::newAction',  '_route' => 'gc_playlist_new',);
        }

        // gc_playlist_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_gc_playlist_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_playlist_update')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\PlaylistController::updateAction',));
        }
        not_gc_playlist_update:

        // gc_playlist_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_gc_playlist_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gc_playlist_delete')), array (  '_controller' => 'GC\\ProjetBundle\\Controller\\PlaylistController::deleteAction',));
        }
        not_gc_playlist_delete:

        // gc_playlist_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_gc_playlist_create;
            }

            return array (  '_controller' => 'GC\\ProjetBundle\\Controller\\PlaylistController::createAction',  '_route' => 'gc_playlist_create',);
        }
        not_gc_playlist_create:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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
