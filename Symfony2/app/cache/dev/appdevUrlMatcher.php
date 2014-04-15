<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_7b9cbe4
        if ($pathinfo === '/js/7b9cbe4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4',);
        }

        // _assetic_7b9cbe4_0
        if ($pathinfo === '/js/7b9cbe4_jquery.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_0',);
        }

        // _assetic_7b9cbe4_1
        if ($pathinfo === '/js/7b9cbe4_jquery.easing_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_1',);
        }

        // _assetic_7b9cbe4_2
        if ($pathinfo === '/js/7b9cbe4_jquery.cross-slide.min_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_2',);
        }

        // _assetic_7b9cbe4_3
        if ($pathinfo === '/js/7b9cbe4_reservation_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_3',);
        }

        // _assetic_7b9cbe4_4
        if ($pathinfo === '/js/7b9cbe4_jquery.form_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_4',);
        }

        // _assetic_7b9cbe4_5
        if ($pathinfo === '/js/7b9cbe4_jquery.validate.min_6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_5',);
        }

        // _assetic_7b9cbe4_6
        if ($pathinfo === '/js/7b9cbe4_jquery.jquery-ui.min_7.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_6',);
        }

        // _assetic_7b9cbe4_7
        if ($pathinfo === '/js/7b9cbe4_scriptsLocal_9.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_7b9cbe4_7',);
        }

        // _assetic_a7f888f
        if ($pathinfo === '/css/a7f888f.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a7f888f',);
        }

        // _assetic_a7f888f_0
        if ($pathinfo === '/css/a7f888f_part_1_acces_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a7f888f_0',);
        }

        // _assetic_a7f888f_1
        if ($pathinfo === '/css/a7f888f_part_1_admin_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a7f888f_1',);
        }

        // _assetic_a7f888f_2
        if ($pathinfo === '/css/a7f888f_part_1_article_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a7f888f_2',);
        }

        // _assetic_a7f888f_3
        if ($pathinfo === '/css/a7f888f_part_1_articles_4.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_a7f888f_3',);
        }

        // _assetic_a7f888f_4
        if ($pathinfo === '/css/a7f888f_part_1_calendrier_5.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_a7f888f_4',);
        }

        // _assetic_a7f888f_5
        if ($pathinfo === '/css/a7f888f_part_1_contact_6.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_a7f888f_5',);
        }

        // _assetic_a7f888f_6
        if ($pathinfo === '/css/a7f888f_part_1_gaudruere_7.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_a7f888f_6',);
        }

        // _assetic_a7f888f_7
        if ($pathinfo === '/css/a7f888f_part_1_ie7_8.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_a7f888f_7',);
        }

        // _assetic_a7f888f_8
        if ($pathinfo === '/css/a7f888f_part_1_jquery.jquery-ui_9.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_a7f888f_8',);
        }

        // _assetic_a7f888f_9
        if ($pathinfo === '/css/a7f888f_part_1_menu_10.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_a7f888f_9',);
        }

        // _assetic_a7f888f_10
        if ($pathinfo === '/css/a7f888f_part_1_reservation_11.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_a7f888f_10',);
        }

        // _assetic_a7f888f_11
        if ($pathinfo === '/css/a7f888f_part_1_slideshow_12.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_a7f888f_11',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // console
        if (rtrim($pathinfo, '/') === '/console') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_console;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'console');
            }
            return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::indexAction',  '_route' => 'console',);
        }
        not_console:

        // console_exec
        if (0 === strpos($pathinfo, '/console') && preg_match('#^/console(?:\\.(?P<_format>json|html))?$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_console_exec;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',)), array('_route' => 'console_exec'));
        }
        not_console_exec:

        // accesGaudruere
        if ($pathinfo === '/acces') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AccesController::indexAction',  '_route' => 'accesGaudruere',);
        }

        // accueilGaudruere
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accueilGaudruere');
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AccueilController::indexAction',  '_route' => 'accueilGaudruere',);
        }

        // gaudruere_gite_accueil_index
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AccueilController::indexAction',  '_route' => 'gaudruere_gite_accueil_index',);
        }

        // adminGaudruere
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::indexAction',  '_route' => 'adminGaudruere',);
        }

        // loginGaudruere
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::loginAction',  '_route' => 'loginGaudruere',);
        }

        // loginCheckAdmin
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::loginCheckAction',  '_route' => 'loginCheckAdmin',);
        }

        // logoutAdmin
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::logoutAction',  '_route' => 'logoutAdmin',);
        }

        // articleGaudruere
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<titreArticle>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::indexAction',)), array('_route' => 'articleGaudruere'));
        }

        // adminArticle
        if ($pathinfo === '/adminArticle') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::listeAction',  '_route' => 'adminArticle',);
        }

        // adminArticle_show
        if (0 === strpos($pathinfo, '/adminArticle') && preg_match('#^/adminArticle/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::showAction',)), array('_route' => 'adminArticle_show'));
        }

        // adminArticle_new
        if ($pathinfo === '/adminArticle/new') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::newAction',  '_route' => 'adminArticle_new',);
        }

        // adminArticle_create
        if ($pathinfo === '/adminArticle/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminArticle_create;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::createAction',  '_route' => 'adminArticle_create',);
        }
        not_adminArticle_create:

        // adminArticle_edit
        if (0 === strpos($pathinfo, '/adminArticle') && preg_match('#^/adminArticle/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::editAction',)), array('_route' => 'adminArticle_edit'));
        }

        // adminArticle_update
        if (0 === strpos($pathinfo, '/adminArticle') && preg_match('#^/adminArticle/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminArticle_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::updateAction',)), array('_route' => 'adminArticle_update'));
        }
        not_adminArticle_update:

        // adminArticle_delete
        if (0 === strpos($pathinfo, '/adminArticle') && preg_match('#^/adminArticle/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminArticle_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::deleteAction',)), array('_route' => 'adminArticle_delete'));
        }
        not_adminArticle_delete:

        // gaudruere_gite_articles_index
        if (0 === strpos($pathinfo, '/articles') && preg_match('#^/articles/(?P<titreMenu>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticlesController::indexAction',)), array('_route' => 'gaudruere_gite_articles_index'));
        }

        // contactGaudruere
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::indexAction',  '_route' => 'contactGaudruere',);
        }

        // adminContact
        if ($pathinfo === '/adminContact') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::listeAction',  '_route' => 'adminContact',);
        }

        // adminContact_show
        if (0 === strpos($pathinfo, '/adminContact') && preg_match('#^/adminContact/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::showAction',)), array('_route' => 'adminContact_show'));
        }

        // adminContact_delete
        if (preg_match('#^/(?P<id>[^/]+?)/deletecontact$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminContact_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::deletecontactAction',)), array('_route' => 'adminContact_delete'));
        }
        not_adminContact_delete:

        // adminMenu
        if (rtrim($pathinfo, '/') === '/adminMenu') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'adminMenu');
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::indexAction',  '_route' => 'adminMenu',);
        }

        // adminSousMenu_show
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/showsousmenu$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::showsousmenuAction',)), array('_route' => 'adminSousMenu_show'));
        }

        // adminSousMenu_new
        if ($pathinfo === '/adminMenu/newsousmenu') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::newsousmenuAction',  '_route' => 'adminSousMenu_new',);
        }

        // adminSousMenu_create
        if ($pathinfo === '/adminMenu/createsousmenu') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminSousMenu_create;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::createsousmenuAction',  '_route' => 'adminSousMenu_create',);
        }
        not_adminSousMenu_create:

        // adminSousMenu_edit
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/editsousmenu$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::editsousmenuAction',)), array('_route' => 'adminSousMenu_edit'));
        }

        // adminSousMenu_update
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/updatesousmenu$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminSousMenu_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::updatesousmenuAction',)), array('_route' => 'adminSousMenu_update'));
        }
        not_adminSousMenu_update:

        // adminSousMenu_delete
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/deletesousmenu$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminSousMenu_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::deletesousmenuAction',)), array('_route' => 'adminSousMenu_delete'));
        }
        not_adminSousMenu_delete:

        // adminMenu_show
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/showmenu$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::showmenuAction',)), array('_route' => 'adminMenu_show'));
        }

        // adminMenu_new
        if ($pathinfo === '/adminMenu/newmenu') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::newmenuAction',  '_route' => 'adminMenu_new',);
        }

        // adminMenu_create
        if ($pathinfo === '/adminMenu/createmenu') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminMenu_create;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::createmenuAction',  '_route' => 'adminMenu_create',);
        }
        not_adminMenu_create:

        // adminMenu_edit
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/editmenu$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::editmenuAction',)), array('_route' => 'adminMenu_edit'));
        }

        // adminMenu_update
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/updatemenu$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminMenu_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::updatemenuAction',)), array('_route' => 'adminMenu_update'));
        }
        not_adminMenu_update:

        // adminMenu_delete
        if (0 === strpos($pathinfo, '/adminMenu') && preg_match('#^/adminMenu/(?P<id>[^/]+?)/deletemenu$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminMenu_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::deletemenuAction',)), array('_route' => 'adminMenu_delete'));
        }
        not_adminMenu_delete:

        // adminArticleContact_edit
        if ($pathinfo === '/adminArticleContact/edit') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editContactAction',  '_route' => 'adminArticleContact_edit',);
        }

        // adminArticleContact_update
        if ($pathinfo === '/adminArticleContact/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminArticleContact_update;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updateContactAction',  '_route' => 'adminArticleContact_update',);
        }
        not_adminArticleContact_update:

        // adminArticleAcces_edit
        if ($pathinfo === '/adminArticleAcces/edit') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editAccesAction',  '_route' => 'adminArticleAcces_edit',);
        }

        // adminArticleAcces_update
        if ($pathinfo === '/adminArticleAcces/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminArticleAcces_update;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updateAccesAction',  '_route' => 'adminArticleAcces_update',);
        }
        not_adminArticleAcces_update:

        // adminParametreGeneral_edit
        if ($pathinfo === '/adminParametreGeneral/edit') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editParametreGeneralAction',  '_route' => 'adminParametreGeneral_edit',);
        }

        // adminParametreGeneral_update
        if ($pathinfo === '/adminParametreGeneral/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminParametreGeneral_update;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updateParametreGeneralAction',  '_route' => 'adminParametreGeneral_update',);
        }
        not_adminParametreGeneral_update:

        // adminPhotosAccueil
        if ($pathinfo === '/adminPhotosAccueil/edit') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editPhotosAccueilAction',  '_route' => 'adminPhotosAccueil',);
        }

        // adminPhotosAccueil_update
        if ($pathinfo === '/adminPhotosAccueil/update') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminPhotosAccueil_update;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updatePhotosAccueilAction',  '_route' => 'adminPhotosAccueil_update',);
        }
        not_adminPhotosAccueil_update:

        // gaudruere_gite_reservation_ajouterreservation
        if ($pathinfo === '/reservation/ajouterReservation') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::ajouterReservationAction',  '_route' => 'gaudruere_gite_reservation_ajouterreservation',);
        }

        // gaudruere_gite_reservation_majcalendriers
        if (0 === strpos($pathinfo, '/reservation/majCalendriers') && preg_match('#^/reservation/majCalendriers/(?P<dateDebut>[^/]+?)/(?P<dateFin>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::majCalendriersAction',)), array('_route' => 'gaudruere_gite_reservation_majcalendriers'));
        }

        // gaudruere_gite_reservation_index
        if ($pathinfo === '/reservation') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::indexAction',  '_route' => 'gaudruere_gite_reservation_index',);
        }

        // adminReservation
        if ($pathinfo === '/adminReservation') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::listeAction',  '_route' => 'adminReservation',);
        }

        // adminReservation_show
        if (0 === strpos($pathinfo, '/adminReservation') && preg_match('#^/adminReservation/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::showAction',)), array('_route' => 'adminReservation_show'));
        }

        // adminReservation_new
        if ($pathinfo === '/adminReservation/new') {
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::newAction',  '_route' => 'adminReservation_new',);
        }

        // adminReservation_create
        if ($pathinfo === '/adminReservation/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminReservation_create;
            }
            return array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::createAction',  '_route' => 'adminReservation_create',);
        }
        not_adminReservation_create:

        // adminReservation_edit
        if (0 === strpos($pathinfo, '/adminReservation') && preg_match('#^/adminReservation/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::editAction',)), array('_route' => 'adminReservation_edit'));
        }

        // adminReservation_update
        if (0 === strpos($pathinfo, '/adminReservation') && preg_match('#^/adminReservation/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminReservation_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::updateAction',)), array('_route' => 'adminReservation_update'));
        }
        not_adminReservation_update:

        // adminReservation_delete
        if (0 === strpos($pathinfo, '/adminReservation') && preg_match('#^/adminReservation/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_adminReservation_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::deleteAction',)), array('_route' => 'adminReservation_delete'));
        }
        not_adminReservation_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
