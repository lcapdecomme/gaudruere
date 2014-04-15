<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_7b9cbe4' => true,
       '_assetic_7b9cbe4_0' => true,
       '_assetic_7b9cbe4_1' => true,
       '_assetic_7b9cbe4_2' => true,
       '_assetic_7b9cbe4_3' => true,
       '_assetic_7b9cbe4_4' => true,
       '_assetic_7b9cbe4_5' => true,
       '_assetic_7b9cbe4_6' => true,
       '_assetic_7b9cbe4_7' => true,
       '_assetic_a7f888f' => true,
       '_assetic_a7f888f_0' => true,
       '_assetic_a7f888f_1' => true,
       '_assetic_a7f888f_2' => true,
       '_assetic_a7f888f_3' => true,
       '_assetic_a7f888f_4' => true,
       '_assetic_a7f888f_5' => true,
       '_assetic_a7f888f_6' => true,
       '_assetic_a7f888f_7' => true,
       '_assetic_a7f888f_8' => true,
       '_assetic_a7f888f_9' => true,
       '_assetic_a7f888f_10' => true,
       '_assetic_a7f888f_11' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'console' => true,
       'console_exec' => true,
       'accesGaudruere' => true,
       'accueilGaudruere' => true,
       'gaudruere_gite_accueil_index' => true,
       'adminGaudruere' => true,
       'loginGaudruere' => true,
       'loginCheckAdmin' => true,
       'logoutAdmin' => true,
       'articleGaudruere' => true,
       'adminArticle' => true,
       'adminArticle_show' => true,
       'adminArticle_new' => true,
       'adminArticle_create' => true,
       'adminArticle_edit' => true,
       'adminArticle_update' => true,
       'adminArticle_delete' => true,
       'gaudruere_gite_articles_index' => true,
       'contactGaudruere' => true,
       'adminContact' => true,
       'adminContact_show' => true,
       'adminContact_delete' => true,
       'adminMenu' => true,
       'adminSousMenu_show' => true,
       'adminSousMenu_new' => true,
       'adminSousMenu_create' => true,
       'adminSousMenu_edit' => true,
       'adminSousMenu_update' => true,
       'adminSousMenu_delete' => true,
       'adminMenu_show' => true,
       'adminMenu_new' => true,
       'adminMenu_create' => true,
       'adminMenu_edit' => true,
       'adminMenu_update' => true,
       'adminMenu_delete' => true,
       'adminArticleContact_edit' => true,
       'adminArticleContact_update' => true,
       'adminArticleAcces_edit' => true,
       'adminArticleAcces_update' => true,
       'adminParametreGeneral_edit' => true,
       'adminParametreGeneral_update' => true,
       'adminPhotosAccueil' => true,
       'adminPhotosAccueil_update' => true,
       'gaudruere_gite_reservation_ajouterreservation' => true,
       'gaudruere_gite_reservation_majcalendriers' => true,
       'gaudruere_gite_reservation_index' => true,
       'adminReservation' => true,
       'adminReservation_show' => true,
       'adminReservation_new' => true,
       'adminReservation_create' => true,
       'adminReservation_edit' => true,
       'adminReservation_update' => true,
       'adminReservation_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_7b9cbe4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4.js',  ),));
    }

    private function get_assetic_7b9cbe4_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_jquery.min_1.js',  ),));
    }

    private function get_assetic_7b9cbe4_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_jquery.easing_2.js',  ),));
    }

    private function get_assetic_7b9cbe4_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 2,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_jquery.cross-slide.min_3.js',  ),));
    }

    private function get_assetic_7b9cbe4_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 3,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_reservation_4.js',  ),));
    }

    private function get_assetic_7b9cbe4_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 4,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_jquery.form_5.js',  ),));
    }

    private function get_assetic_7b9cbe4_5RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 5,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_jquery.validate.min_6.js',  ),));
    }

    private function get_assetic_7b9cbe4_6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 6,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_jquery.jquery-ui.min_7.js',  ),));
    }

    private function get_assetic_7b9cbe4_7RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7b9cbe4',  'pos' => 7,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/7b9cbe4_scriptsLocal_9.js',  ),));
    }

    private function get_assetic_a7f888fRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f.css',  ),));
    }

    private function get_assetic_a7f888f_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_acces_1.css',  ),));
    }

    private function get_assetic_a7f888f_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_admin_2.css',  ),));
    }

    private function get_assetic_a7f888f_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 2,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_article_3.css',  ),));
    }

    private function get_assetic_a7f888f_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 3,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_articles_4.css',  ),));
    }

    private function get_assetic_a7f888f_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 4,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_calendrier_5.css',  ),));
    }

    private function get_assetic_a7f888f_5RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 5,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_contact_6.css',  ),));
    }

    private function get_assetic_a7f888f_6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 6,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_gaudruere_7.css',  ),));
    }

    private function get_assetic_a7f888f_7RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 7,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_ie7_8.css',  ),));
    }

    private function get_assetic_a7f888f_8RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 8,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_jquery.jquery-ui_9.css',  ),));
    }

    private function get_assetic_a7f888f_9RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 9,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_menu_10.css',  ),));
    }

    private function get_assetic_a7f888f_10RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 10,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_reservation_11.css',  ),));
    }

    private function get_assetic_a7f888f_11RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'a7f888f',  'pos' => 11,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/a7f888f_part_1_slideshow_12.css',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getconsoleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/console/',  ),));
    }

    private function getconsole_execRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',), array (  '_method' => 'POST',  '_format' => 'json|html',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'json|html',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/console',  ),));
    }

    private function getaccesGaudruereRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AccesController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/acces',  ),));
    }

    private function getaccueilGaudruereRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AccueilController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getgaudruere_gite_accueil_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AccueilController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/accueil',  ),));
    }

    private function getadminGaudruereRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getloginGaudruereRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getloginCheckAdminRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::loginCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getlogoutAdminRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\AdminController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getarticleGaudruereRouteInfo()
    {
        return array(array (  0 => 'titreArticle',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'titreArticle',  ),  1 =>   array (    0 => 'text',    1 => '/article',  ),));
    }

    private function getadminArticleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::listeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminArticle',  ),));
    }

    private function getadminArticle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminArticle',  ),));
    }

    private function getadminArticle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminArticle/new',  ),));
    }

    private function getadminArticle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminArticle/create',  ),));
    }

    private function getadminArticle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminArticle',  ),));
    }

    private function getadminArticle_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminArticle',  ),));
    }

    private function getadminArticle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminArticle',  ),));
    }

    private function getgaudruere_gite_articles_indexRouteInfo()
    {
        return array(array (  0 => 'titreMenu',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ArticlesController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'titreMenu',  ),  1 =>   array (    0 => 'text',    1 => '/articles',  ),));
    }

    private function getcontactGaudruereRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getadminContactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::listeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminContact',  ),));
    }

    private function getadminContact_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminContact',  ),));
    }

    private function getadminContact_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ContactController::deletecontactAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/deletecontact',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function getadminMenuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminMenu/',  ),));
    }

    private function getadminSousMenu_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::showsousmenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/showsousmenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminSousMenu_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::newsousmenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminMenu/newsousmenu',  ),));
    }

    private function getadminSousMenu_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::createsousmenuAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminMenu/createsousmenu',  ),));
    }

    private function getadminSousMenu_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::editsousmenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/editsousmenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminSousMenu_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::updatesousmenuAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/updatesousmenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminSousMenu_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::deletesousmenuAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/deletesousmenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminMenu_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::showmenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/showmenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminMenu_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::newmenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminMenu/newmenu',  ),));
    }

    private function getadminMenu_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::createmenuAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminMenu/createmenu',  ),));
    }

    private function getadminMenu_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::editmenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/editmenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminMenu_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::updatemenuAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/updatemenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminMenu_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\MenuController::deletemenuAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/deletemenu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminMenu',  ),));
    }

    private function getadminArticleContact_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editContactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminArticleContact/edit',  ),));
    }

    private function getadminArticleContact_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updateContactAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminArticleContact/update',  ),));
    }

    private function getadminArticleAcces_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editAccesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminArticleAcces/edit',  ),));
    }

    private function getadminArticleAcces_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updateAccesAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminArticleAcces/update',  ),));
    }

    private function getadminParametreGeneral_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editParametreGeneralAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminParametreGeneral/edit',  ),));
    }

    private function getadminParametreGeneral_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updateParametreGeneralAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminParametreGeneral/update',  ),));
    }

    private function getadminPhotosAccueilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::editPhotosAccueilAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminPhotosAccueil/edit',  ),));
    }

    private function getadminPhotosAccueil_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ParametresController::updatePhotosAccueilAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminPhotosAccueil/update',  ),));
    }

    private function getgaudruere_gite_reservation_ajouterreservationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::ajouterReservationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/reservation/ajouterReservation',  ),));
    }

    private function getgaudruere_gite_reservation_majcalendriersRouteInfo()
    {
        return array(array (  0 => 'dateDebut',  1 => 'dateFin',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::majCalendriersAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'dateFin',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'dateDebut',  ),  2 =>   array (    0 => 'text',    1 => '/reservation/majCalendriers',  ),));
    }

    private function getgaudruere_gite_reservation_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/reservation',  ),));
    }

    private function getadminReservationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::listeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminReservation',  ),));
    }

    private function getadminReservation_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminReservation',  ),));
    }

    private function getadminReservation_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adminReservation/new',  ),));
    }

    private function getadminReservation_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/adminReservation/create',  ),));
    }

    private function getadminReservation_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminReservation',  ),));
    }

    private function getadminReservation_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminReservation',  ),));
    }

    private function getadminReservation_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Gaudruere\\GiteBundle\\Controller\\ReservationController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/adminReservation',  ),));
    }
}
