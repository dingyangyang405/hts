<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                }

                // admin_user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\UserController::updateAction',));
                }

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\UserController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/admin/user/service')) {
                    // admin_service
                    if ($pathinfo === '/admin/user/service/list') {
                        return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\UserController::serviceListAction',  '_route' => 'admin_service',);
                    }

                    // admin_service_detail
                    if (preg_match('#^/admin/user/service/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_service_detail')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\UserController::serviceDetailAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/ticket')) {
                // admin_ticket_list
                if ($pathinfo === '/admin/ticket') {
                    return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\TicketController::indexAction',  '_route' => 'admin_ticket_list',);
                }

                // admin_ticket_priority_change
                if (0 === strpos($pathinfo, '/admin/ticket/priority') && preg_match('#^/admin/ticket/priority/(?P<id>[^/]++)/change$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ticket_priority_change')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\TicketController::changePriorityAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/faq')) {
                // admin_faq_list
                if ($pathinfo === '/admin/faq/list') {
                    return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\FaqController::listAction',  '_route' => 'admin_faq_list',);
                }

                if (0 === strpos($pathinfo, '/admin/faq/create')) {
                    // admin_faq_create
                    if ($pathinfo === '/admin/faq/create') {
                        return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\FaqController::createAction',  '_route' => 'admin_faq_create',);
                    }

                    // admin_faq_create_fields_check
                    if ($pathinfo === '/admin/faq/create/fields/check') {
                        return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\FaqController::createFieldsCheckAction',  '_route' => 'admin_faq_create_fields_check',);
                    }

                }

                // admin_faq_update
                if (preg_match('#^/admin/faq/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq_update')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\FaqController::updateAction',));
                }

                // admin_faq_update_fields_check
                if ($pathinfo === '/admin/faq/update/fields/check') {
                    return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\FaqController::updateFieldsCheckAction',  '_route' => 'admin_faq_update_fields_check',);
                }

                // admin_faq_delete
                if (preg_match('#^/admin/faq/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq_delete')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\FaqController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // admin_category_list
                if ($pathinfo === '/admin/category/list') {
                    return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\CategoryController::listAction',  '_route' => 'admin_category_list',);
                }

                if (0 === strpos($pathinfo, '/admin/category/create')) {
                    // admin_category_create
                    if ($pathinfo === '/admin/category/create') {
                        return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                    }

                    // admin_category_create_fields_check
                    if ($pathinfo === '/admin/category/create/fields/check') {
                        return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\CategoryController::createFieldsCheckAction',  '_route' => 'admin_category_create_fields_check',);
                    }

                }

                // admin_category_update
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_update')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\CategoryController::updateAction',));
                }

                // admin_category_update_fields_check
                if ($pathinfo === '/admin/category/update/fields/check') {
                    return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\CategoryController::updateFieldsCheckAction',  '_route' => 'admin_category_update_fields_check',);
                }

                // admin_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                }

            }

            // admin_ticket_distribute
            if ($pathinfo === '/admin/ticket/distribute') {
                return array (  '_controller' => 'Hermes\\AdminBundle\\Controller\\TicketController::distributeAction',  '_route' => 'admin_ticket_distribute',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\LoginController::registerAction',  '_route' => 'register',);
        }

        // customer_ticket_list
        if (0 === strpos($pathinfo, '/customer/ticket') && preg_match('#^/customer/ticket/(?P<userId>[^/]++)/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_list')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::listAction',));
        }

        // ticket_add
        if (0 === strpos($pathinfo, '/ticket') && preg_match('#^/ticket/(?P<userId>[^/]++)/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_add')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::addAction',));
        }

        // customer_ticket_detail
        if (0 === strpos($pathinfo, '/customer/ticket') && preg_match('#^/customer/ticket/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_detail')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::customerDetailAction',));
        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // customer_ticket_complaint
            if (preg_match('#^/ticket/(?P<id>[^/]++)/complaint$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_complaint')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::complaintAction',));
            }

            // customer_ticket_review
            if (preg_match('#^/ticket/(?P<id>[^/]++)/evaluate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_review')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::reviewAction',));
            }

            // customer_ticket_supplement
            if (preg_match('#^/ticket/(?P<id>[^/]++)/supplement$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_supplement')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::supplementAction',));
            }

            // customer_ticket_asked
            if (preg_match('#^/ticket/(?P<id>[^/]++)/asked$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_asked')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::askedAction',));
            }

            // customer_ticket_confirm
            if (preg_match('#^/ticket/(?P<id>[^/]++)/confirm$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_confirm')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::confirmAction',));
            }

            // customer_ticket_urge
            if (preg_match('#^/ticket/(?P<id>[^/]++)/urge$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_urge')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::reminderAction',));
            }

            // customer_ticket_close
            if (preg_match('#^/ticket/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_ticket_close')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::closeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/operator/ticket')) {
            // operator_ticket_detail
            if (preg_match('#^/operator/ticket/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_ticket_detail')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::operatorDetailAction',));
            }

            // operator_ticket_reply
            if (preg_match('#^/operator/ticket/(?P<id>[^/]++)/reply$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_ticket_reply')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::replyAction',));
            }

            // operator_ticket_autoReply
            if (preg_match('#^/operator/ticket/(?P<ticketId>[^/]++)/faq/(?P<faqId>[^/]++)/autoReply$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_ticket_autoReply')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::autoReplyAction',));
            }

        }

        // workspace
        if (preg_match('#^/(?P<userId>[^/]++)/workspace$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'workspace')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/workspace')) {
            // workspace_assigned_ticket
            if (preg_match('#^/workspace/(?P<userId>[^/]++)/assigned/ticket$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workspace_assigned_ticket')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::renderAssignedTicketAction',));
            }

            // workspace_unassigned_ticket
            if ($pathinfo === '/workspace/unassigned/ticket') {
                return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::renderUnassignedTicketAction',  '_route' => 'workspace_unassigned_ticket',);
            }

            // workspace_delayed_ticket
            if ($pathinfo === '/workspace/delayed/ticket') {
                return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::renderDelayedTicketAction',  '_route' => 'workspace_delayed_ticket',);
            }

            if (0 === strpos($pathinfo, '/workspace/ticket')) {
                if (0 === strpos($pathinfo, '/workspace/ticket/transfer')) {
                    // ticket_transfer
                    if ($pathinfo === '/workspace/ticket/transfer') {
                        return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::transferTicketsAction',  '_route' => 'ticket_transfer',);
                    }

                    // ticket_transfer_operatorNo_check
                    if ($pathinfo === '/workspace/ticket/transfer/operatorNo/check') {
                        return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::checkOperatorNoAction',  '_route' => 'ticket_transfer_operatorNo_check',);
                    }

                }

                // ticket_assigned_list
                if (preg_match('#^/workspace/ticket/(?P<userId>[^/]++)/assigned/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_assigned_list')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::assignedListAction',));
                }

                // ticket_unassigned_list
                if ($pathinfo === '/workspace/ticket/unassigned/list') {
                    return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::unassignedListAction',  '_route' => 'ticket_unassigned_list',);
                }

                // ticket_receive
                if (preg_match('#^/workspace/ticket/(?P<id>[^/]++)/receive$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_receive')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::receiveTicketAction',));
                }

                // ticket_delayed_list
                if ($pathinfo === '/workspace/ticket/delayed/list') {
                    return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::delayedListAction',  '_route' => 'ticket_delayed_list',);
                }

                // ticket_list
                if (preg_match('#^/workspace/ticket/(?P<userId>[^/]++)/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_list')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::listAction',));
                }

            }

        }

        // same_category_ticket
        if (0 === strpos($pathinfo, '/ticket') && preg_match('#^/ticket/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'same_category_ticket')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::sameCategoryListAction',));
        }

        // other_ticket
        if (0 === strpos($pathinfo, '/other/ticket') && preg_match('#^/other/ticket/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'other_ticket')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\TicketController::otherListAction',));
        }

        // operator_status_update
        if (0 === strpos($pathinfo, '/workspace/status') && preg_match('#^/workspace/status/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'operator_status_update')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::updateStatusAction',));
        }

        // file_upload
        if ($pathinfo === '/file/upload') {
            return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\FileController::uploadAction',  '_route' => 'file_upload',);
        }

        if (0 === strpos($pathinfo, '/notificati')) {
            // notification
            if ($pathinfo === '/notification') {
                return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification',);
            }

            if (0 === strpos($pathinfo, '/notificatin')) {
                // notification_list
                if ($pathinfo === '/notificatin/list') {
                    return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\NotificationController::listAction',  '_route' => 'notification_list',);
                }

                // notifiction_show
                if ($pathinfo === '/notificatin/show') {
                    return array (  '_controller' => 'Hermes\\WebBundle\\Controller\\NotificationController::showAction',  '_route' => 'notifiction_show',);
                }

            }

        }

        // ticket_processed_list
        if (0 === strpos($pathinfo, '/ticket') && preg_match('#^/ticket/(?P<id>[^/]++)/processed/list$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_processed_list')), array (  '_controller' => 'Hermes\\WebBundle\\Controller\\WorkSpaceController::processedListAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
