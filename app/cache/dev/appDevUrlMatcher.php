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

        if (0 === strpos($pathinfo, '/r')) {
            // reports_homepage
            if (rtrim($pathinfo, '/') === '/r') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reports_homepage');
                }

                return array (  '_controller' => 'ReportsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reports_homepage',);
            }

            // reports_delete
            if (rtrim($pathinfo, '/') === '/r/d') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reports_delete');
                }

                return array (  '_controller' => 'ReportsBundle\\Controller\\DefaultController::deleteJSAction',  '_route' => 'reports_delete',);
            }

            // reports_export
            if (rtrim($pathinfo, '/') === '/r/e') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reports_export');
                }

                return array (  '_controller' => 'ReportsBundle\\Controller\\DefaultController::expAction',  '_route' => 'reports_export',);
            }

        }

        // portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }

            return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'portada',);
        }

        // inicio
        if ($pathinfo === '/i') {
            return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::iniAction',  '_route' => 'inicio',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // user_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::loginAction',  '_route' => 'user_login',);
                }

                // user_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'user_login_check');
                }

            }

            // user_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'user_logout');
            }

        }

        // user_add
        if ($pathinfo === '/adduser') {
            return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::adduserAction',  '_route' => 'user_add',);
        }

        if (0 === strpos($pathinfo, '/to')) {
            if (0 === strpos($pathinfo, '/to_')) {
                if (0 === strpos($pathinfo, '/to_d')) {
                    // to_dwork
                    if ($pathinfo === '/to_dwork') {
                        return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::dworkAction',  '_route' => 'to_dwork',);
                    }

                    // to_dawork
                    if ($pathinfo === '/to_dawork') {
                        return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::daworkAction',  '_route' => 'to_dawork',);
                    }

                }

                // to_reportes
                if ($pathinfo === '/to_reportes') {
                    return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::reportesAction',  '_route' => 'to_reportes',);
                }

            }

            // to_register
            if ($pathinfo === '/toR') {
                return array (  '_controller' => 'AutenticationBundle\\Controller\\DefaultController::registerAction',  '_route' => 'to_register',);
            }

        }

        // entity_homepage
        if (0 === strpos($pathinfo, '/e/hello') && preg_match('#^/e/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity_homepage')), array (  '_controller' => 'EntityBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/d_w')) {
            // daily_work_homepage
            if (rtrim($pathinfo, '/') === '/d_w') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'daily_work_homepage');
                }

                return array (  '_controller' => 'DailyWorkBundle\\Controller\\DefaultController::indexAction',  '_route' => 'daily_work_homepage',);
            }

            // daily_work_homepage2
            if (rtrim($pathinfo, '/') === '/d_w/xss') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'daily_work_homepage2');
                }

                return array (  '_controller' => 'DailyWorkBundle\\Controller\\DefaultController::index2Action',  '_route' => 'daily_work_homepage2',);
            }

            if (0 === strpos($pathinfo, '/d_w/dw')) {
                if (0 === strpos($pathinfo, '/d_w/dw/update')) {
                    // actualizar_probsaude
                    if (rtrim($pathinfo, '/') === '/d_w/dw/update') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'actualizar_probsaude');
                        }

                        return array('_route' => 'actualizar_probsaude');
                    }

                    // actualizar_ps
                    if (preg_match('#^/d_w/dw/update/(?P<id_pac_prob>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_ps')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::updateProbSaudeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/d_w/dw/new')) {
                    // new_probsaude_url
                    if (rtrim($pathinfo, '/') === '/d_w/dw/new') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'new_probsaude_url');
                        }

                        return array('_route' => 'new_probsaude_url');
                    }

                    // new_probsaude
                    if (preg_match('#^/d_w/dw/new/(?P<idPaciente>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_probsaude')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::newProbSaudeAction',));
                    }

                }

                // delete_probsaude
                if (rtrim($pathinfo, '/') === '/d_w/dw/delete') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'delete_probsaude');
                    }

                    return array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::deleteProbSaudeAction',  '_route' => 'delete_probsaude',);
                }

                // daily_work
                if (rtrim($pathinfo, '/') === '/d_w/dw') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'daily_work');
                    }

                    return array (  '_controller' => 'DailyWorkBundle\\Controller\\DefaultController::daily_workAction',  '_route' => 'daily_work',);
                }

                // consulta_page
                if (preg_match('#^/d_w/dw/(?P<id_paciente>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulta_page')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::consultaAction',));
                }

                // actualizar_page
                if (0 === strpos($pathinfo, '/d_w/dw/dw_e') && preg_match('#^/d_w/dw/dw_e/(?P<id_paciente>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_page')), array (  '_controller' => 'DailyWorkBundle\\Controller\\DefaultController::actualizarAction',));
                }

            }

            if (0 === strpos($pathinfo, '/d_w/pac')) {
                // actualizar_paciente_url
                if (rtrim($pathinfo, '/') === '/d_w/pac') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'actualizar_paciente_url');
                    }

                    return array('_route' => 'actualizar_paciente_url');
                }

                // actualizar_paciente
                if (preg_match('#^/d_w/pac/(?P<id_paciente>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_paciente')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::updateDadosPacienteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/d_w/resp')) {
                // actualizar_responsavel_url
                if (rtrim($pathinfo, '/') === '/d_w/resp') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'actualizar_responsavel_url');
                    }

                    return array('_route' => 'actualizar_responsavel_url');
                }

                // actualizar_responsavel
                if (preg_match('#^/d_w/resp/(?P<id_paciente>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_responsavel')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::updateResponsavelsAction',));
                }

                if (0 === strpos($pathinfo, '/d_w/resp/cancel')) {
                    // cancel_responsavel_url
                    if (rtrim($pathinfo, '/') === '/d_w/resp/cancel') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cancel_responsavel_url');
                        }

                        return array('_route' => 'cancel_responsavel_url');
                    }

                    // cancel_responsavel
                    if (preg_match('#^/d_w/resp/cancel/(?P<id_paciente>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cancel_responsavel')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::cancelResposavelsAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/d_w/con')) {
                if (0 === strpos($pathinfo, '/d_w/cons')) {
                    // view_consulta_url
                    if (rtrim($pathinfo, '/') === '/d_w/cons') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'view_consulta_url');
                        }

                        return array('_route' => 'view_consulta_url');
                    }

                    // view_consulta
                    if (preg_match('#^/d_w/cons/(?P<id_paciente>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'view_consulta');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_consulta')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::consultasViewAction',));
                    }

                }

                // one_consulta_url
                if (rtrim($pathinfo, '/') === '/d_w/con') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'one_consulta_url');
                    }

                    return array('_route' => 'one_consulta_url');
                }

                // one_consulta
                if (preg_match('#^/d_w/con/(?P<id_consulta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'one_consulta')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::oneConsultaAction',));
                }

            }

            if (0 === strpos($pathinfo, '/d_w/at')) {
                // atendimento
                if (preg_match('#^/d_w/at(?:/(?P<id_paciente>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'atendimento')), array (  '_controller' => 'DailyWorkBundle\\Controller\\DefaultController::atendimentoAction',  'id_paciente' => 'default_id_paciente',));
                }

                // atendimento_seg
                if (rtrim($pathinfo, '/') === '/d_w/atseg') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'atendimento_seg');
                    }

                    return array (  '_controller' => 'DailyWorkBundle\\Controller\\DefaultController::atendimentoSegAction',  '_route' => 'atendimento_seg',);
                }

            }

            // to_reports
            if (rtrim($pathinfo, '/') === '/d_w/torep') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'to_reports');
                }

                return array (  '_controller' => 'DailyWorkBundle\\Controller\\DefaultController::toRepAction',  '_route' => 'to_reports',);
            }

            if (0 === strpos($pathinfo, '/d_w/addps')) {
                // add_prob_saude_url
                if (rtrim($pathinfo, '/') === '/d_w/addps') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'add_prob_saude_url');
                    }

                    return array('_route' => 'add_prob_saude_url');
                }

                // add_prob_saude
                if (preg_match('#^/d_w/addps/(?P<probsaude>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_prob_saude')), array (  '_controller' => 'DailyWorkBundle\\Controller\\MedicalConsultationController::addProbSauAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
