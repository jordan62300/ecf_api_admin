<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_security_logout', '_controller' => 'App\\Controller\\SecurityController::logoutAction'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:72)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:107)'
                            .'|promotions(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:146)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:184)'
                                .')'
                            .')'
                            .'|students(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:223)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:261)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:304)'
                        .'|wdt/([^/]++)(*:324)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:370)'
                                .'|router(*:384)'
                                .'|exception(?'
                                    .'|(*:404)'
                                    .'|\\.css(*:417)'
                                .')'
                            .')'
                            .'|(*:427)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''], ['_format'], null, null, false, true, null]],
            107 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'], ['shortName', '_format'], null, null, false, true, null]],
            146 => [
                [['_route' => 'api_promotions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_promotions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            184 => [
                [['_route' => 'api_promotions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_promotions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_promotions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            223 => [
                [['_route' => 'api_students_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Student', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_students_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Student', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            261 => [
                [['_route' => 'api_students_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Student', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_students_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Student', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_students_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Student', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            304 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            324 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            370 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            384 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            404 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            417 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            427 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
