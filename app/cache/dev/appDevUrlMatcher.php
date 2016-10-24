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

        }

        // facebook_login
        if ($pathinfo === '/login/check-facebook') {
            return array('_route' => 'facebook_login');
        }

        if (0 === strpos($pathinfo, '/Front')) {
            // my_app_front_homepage
            if (0 === strpos($pathinfo, '/Front/hello') && preg_match('#^/Front/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_front_homepage')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/Front/Front')) {
                // recommandation
                if ($pathinfo === '/Front/Front/admin/recommandation') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::indexAction',  '_route' => 'recommandation',);
                }

                if (0 === strpos($pathinfo, '/Front/Front/recommandation')) {
                    // recommandation_show
                    if (preg_match('#^/Front/Front/recommandation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommandation_show')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::showAction',));
                    }

                    // recommandation_new
                    if ($pathinfo === '/Front/Front/recommandation/new') {
                        return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::newAction',  '_route' => 'recommandation_new',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/Front/recommandation')) {
                // recommandation_create
                if ($pathinfo === '/Front/recommandation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_recommandation_create;
                    }

                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::createAction',  '_route' => 'recommandation_create',);
                }
                not_recommandation_create:

                // recommandation_edit
                if (preg_match('#^/Front/recommandation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommandation_edit')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::editAction',));
                }

                // recommandation_update
                if (preg_match('#^/Front/recommandation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_recommandation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommandation_update')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::updateAction',));
                }
                not_recommandation_update:

            }

            // recommandation_delete
            if (0 === strpos($pathinfo, '/Front/Front/recommandation') && preg_match('#^/Front/Front/recommandation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_recommandation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recommandation_delete')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::deleteAction',));
            }
            not_recommandation_delete:

            if (0 === strpos($pathinfo, '/Front/a')) {
                if (0 === strpos($pathinfo, '/Front/admin/recommandation')) {
                    // supprimer_recommandation
                    if (0 === strpos($pathinfo, '/Front/admin/recommandation/delete') && preg_match('#^/Front/admin/recommandation/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_recommandation')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::supprimerAction',));
                    }

                    // affichage_recommandation
                    if ($pathinfo === '/Front/admin/recommandation/afficher') {
                        return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::afficherAction',  '_route' => 'affichage_recommandation',);
                    }

                }

                // ajout_recommandation
                if ($pathinfo === '/Front/ajout') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::ajoutAction',  '_route' => 'ajout_recommandation',);
                }

            }

            // inc_recommandation
            if (0 === strpos($pathinfo, '/Front/incrementer') && preg_match('#^/Front/incrementer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inc_recommandation')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::incrementerAction',));
            }

            // supp_recommandation
            if (0 === strpos($pathinfo, '/Front/supprimer') && preg_match('#^/Front/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_recommandation')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::supprimeAction',));
            }

            // modif_recommandation
            if (0 === strpos($pathinfo, '/Front/modifier') && preg_match('#^/Front/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modif_recommandation')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::modifierAction',));
            }

            // affichage
            if ($pathinfo === '/Front/affiche') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::afficheAction',  '_route' => 'affichage',);
            }

            // search
            if ($pathinfo === '/Front/search') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::searchAction',  '_route' => 'search',);
            }

            if (0 === strpos($pathinfo, '/Front/piechart')) {
                // chart
                if ($pathinfo === '/Front/piechart') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::chartPieAction',  '_route' => 'chart',);
                }

                // chart_compagnie
                if ($pathinfo === '/Front/piechart2') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::chartPieCompagnieAction',  '_route' => 'chart_compagnie',);
                }

                // chart_compagnie_user
                if ($pathinfo === '/Front/piechartusercomp') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::chartPieCompagnieuserAction',  '_route' => 'chart_compagnie_user',);
                }

                // chart_lieu
                if ($pathinfo === '/Front/piechart1') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::chartPieLieuAction',  '_route' => 'chart_lieu',);
                }

                // chart_lieu_user
                if ($pathinfo === '/Front/piechartuserlieu') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\RecommandationController::chartPieLieuuserAction',  '_route' => 'chart_lieu_user',);
                }

            }

            if (0 === strpos($pathinfo, '/Front/create')) {
                // experience_create
                if ($pathinfo === '/Front/createExp') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::createAction',  '_route' => 'experience_create',);
                }

                // photo_create
                if ($pathinfo === '/Front/createphoto') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\PhotoController::createAction',  '_route' => 'photo_create',);
                }

            }

            // experience_show
            if ($pathinfo === '/Front/show') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::showAction',  '_route' => 'experience_show',);
            }

            // detail_experience
            if (0 === strpos($pathinfo, '/Front/detailexp') && preg_match('#^/Front/detailexp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_experience')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::detailAction',));
            }

            if (0 === strpos($pathinfo, '/Front/s')) {
                // my_experiences
                if (0 === strpos($pathinfo, '/Front/showMyExperience') && preg_match('#^/Front/showMyExperience/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_experiences')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::showMyExperienceAction',));
                }

                // supprimer_experiences
                if (0 === strpos($pathinfo, '/Front/suppExp') && preg_match('#^/Front/suppExp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_experiences')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::supprimerAction',));
                }

            }

            // modifier_experiences
            if (0 === strpos($pathinfo, '/Front/modExp') && preg_match('#^/Front/modExp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_experiences')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::modifierAction',));
            }

            if (0 === strpos($pathinfo, '/Front/c')) {
                // commenter_experiences
                if (0 === strpos($pathinfo, '/Front/commenter') && preg_match('#^/Front/commenter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commenter_experiences')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::commenterAction',));
                }

                // cherche_experiences
                if ($pathinfo === '/Front/cherche') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::RechercheAction',  '_route' => 'cherche_experiences',);
                }

            }

            // acceul_front
            if ($pathinfo === '/Front/acceuil') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::RechercheAction',  '_route' => 'acceul_front',);
            }

            // show_chercher_experiences
            if (0 === strpos($pathinfo, '/Front/cherche') && preg_match('#^/Front/cherche/(?P<pays>[^/]++)/(?P<categorie>[^/]++)/(?P<min>[^/]++)/(?P<max>[^/]++)/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_chercher_experiences')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ExperienceController::RechercheShowAction',));
            }

            // supprimer_images
            if (0 === strpos($pathinfo, '/Front/suppExp') && preg_match('#^/Front/suppExp/(?P<id>[^/]++)/(?P<id_exp>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_images')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\PhotoController::supprimerAction',));
            }

            // ajouter_sujet
            if ($pathinfo === '/Front/ajout_sujet') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\SujetController::AjouterAction',  '_route' => 'ajouter_sujet',);
            }

            // liste_sujet_User
            if ($pathinfo === '/Front/liste_sujets_User') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\SujetUserController::listeSujetUserAction',  '_route' => 'liste_sujet_User',);
            }

            // supprimer
            if (0 === strpos($pathinfo, '/Front/supp') && preg_match('#^/Front/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\SujetUserController::supprimerAction',));
            }

            // liste_reponse_User
            if (0 === strpos($pathinfo, '/Front/liste_reponse_User') && preg_match('#^/Front/liste_reponse_User/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_reponse_User')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ReponseUserController::listeReponseUserAction',));
            }

            // supprimerRep
            if (0 === strpos($pathinfo, '/Front/suppUser') && preg_match('#^/Front/suppUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerRep')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ReponseUserController::supprimerRepAction',));
            }

            // liste_sujets
            if ($pathinfo === '/Front/liste_sujets') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\SujetController::ListeSujetsAction',  '_route' => 'liste_sujets',);
            }

            // ajouter_reponse
            if (0 === strpos($pathinfo, '/Front/ajout_reponse') && preg_match('#^/Front/ajout_reponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_reponse')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ReponseController::AjouterAction',));
            }

            // liste_reponses
            if (0 === strpos($pathinfo, '/Front/liste_reponses') && preg_match('#^/Front/liste_reponses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_reponses')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\ReponseController::listeReponseAction',));
            }

            // recherche
            if ($pathinfo === '/Front/recherche') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\SujetController::rechercheAction',  '_route' => 'recherche',);
            }

            // Guide
            if ($pathinfo === '/Front/listGuide') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\GuideController::indexAction',  '_route' => 'Guide',);
            }

            // Guide_show
            if (preg_match('#^/Front/(?P<id>[^/]++)/showGuide$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Guide_show')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\GuideController::showAction',));
            }

            // Guide_new
            if ($pathinfo === '/Front/newGuide') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\GuideController::newAction',  '_route' => 'Guide_new',);
            }

            // Guide_create
            if ($pathinfo === '/Front/createGuide') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\GuideController::createAction',  '_route' => 'Guide_create',);
            }

            // Guide_edit
            if (preg_match('#^/Front/(?P<id>[^/]++)/editGuide$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Guide_edit')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\GuideController::modifierAction',));
            }

            // Guide_update
            if (preg_match('#^/Front/(?P<id>[^/]++)/updateGuide$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_Guide_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Guide_update')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\GuideController::updateAction',));
            }
            not_Guide_update:

            // Guide_delete
            if (preg_match('#^/Front/(?P<id>[^/]++)/deleteGuide$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_Guide_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Guide_delete')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\GuideController::deleteAction',));
            }
            not_Guide_delete:

            // my_app_front_pdf
            if ($pathinfo === '/Front/pdf') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\DefaultController::pdfAction',  '_route' => 'my_app_front_pdf',);
            }

            if (0 === strpos($pathinfo, '/Front/a')) {
                // Ajout
                if ($pathinfo === '/Front/ajouterNews') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\NewsletterController::AjoutAction',  '_route' => 'Ajout',);
                }

                // affich
                if ($pathinfo === '/Front/afficherNews') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\MailController::newAction',  '_route' => 'affich',);
                }

            }

            // modifier
            if (0 === strpos($pathinfo, '/Front/modifierNews') && preg_match('#^/Front/modifierNews(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\NewsletterController::ModifierAction',));
            }

            // recherche_news
            if ($pathinfo === '/Front/rechercherNews') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\NewsletterController::RechercheAction',  '_route' => 'recherche_news',);
            }

            if (0 === strpos($pathinfo, '/Front/a')) {
                // AjoutF
                if ($pathinfo === '/Front/ajouterflux') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\FluxController::AjoutAction',  '_route' => 'AjoutF',);
                }

                // affichF
                if ($pathinfo === '/Front/afficherflux') {
                    return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\FluxController::AffichageAction',  '_route' => 'affichF',);
                }

            }

            // supprimerF
            if (0 === strpos($pathinfo, '/Front/supprimerflux') && preg_match('#^/Front/supprimerflux/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerF')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\FluxController::supprimerAction',));
            }

            // modifierF
            if (0 === strpos($pathinfo, '/Front/modifierflux') && preg_match('#^/Front/modifierflux/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierF')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\FluxController::ModifierAction',));
            }

            // new
            if ($pathinfo === '/Front/newsletter') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\FluxController::newsAction',  '_route' => 'new',);
            }

            // my_app_mail_succ
            if ($pathinfo === '/Front/succ') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\MailController::indexAction',  '_route' => 'my_app_mail_succ',);
            }

            // my_app_mail_form
            if ($pathinfo === '/Front/mail') {
                return array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\MailController::newAction',  '_route' => 'my_app_mail_form',);
            }

            // my_app_mail_sendpage
            if (0 === strpos($pathinfo, '/Front/sendmail') && preg_match('#^/Front/sendmail/(?P<personne>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_mail_sendpage')), array (  '_controller' => 'MyApp\\FrontBundle\\Controller\\MailController::sendMailAction',));
            }

        }

        // utilisateur
        if ($pathinfo === '/admin/index') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur',);
        }

        // utilisateur_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::showAction',));
        }

        // utilisateur_show_admin
        if (0 === strpos($pathinfo, '/admin') && preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show_admin')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::showAction',));
        }

        // utilisateur_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
        }

        // utilisateur_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_utilisateur_create;
            }

            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::createAction',  '_route' => 'utilisateur_create',);
        }
        not_utilisateur_create:

        // utilisateur_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_utilisateur_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::editAction',));
        }
        not_utilisateur_edit:

        if (0 === strpos($pathinfo, '/admin')) {
            // utilisateur_update_admin
            if (preg_match('#^/admin/(?P<id>[^/]++)/edite$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_update_admin')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::editeAction',));
            }

            // utilisateur_update_admin1
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_update_admin1')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::ModifierAction',));
            }

            // utilisateur_delete_admin
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete_admin')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::deleteAction',));
            }

            // utilisateur_delete_admin1
            if (preg_match('#^/admin/(?P<id>[^/]++)/supprimer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete_admin1')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::SupprimerAction',));
            }

        }

        // MyApp_user_contact
        if ($pathinfo === '/contacteznous') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_MyApp_user_contact;
            }

            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\PageController::contactAction',  '_route' => 'MyApp_user_contact',);
        }
        not_MyApp_user_contact:

        if (0 === strpos($pathinfo, '/accueil')) {
            // MyApp_user_accueil
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\PageController::accueilAction',  '_route' => 'MyApp_user_accueil',);
            }

            // home_admin
            if ($pathinfo === '/accueiladmin') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\PageController::accueilAdminAction',  '_route' => 'home_admin',);
            }

        }

        // MyAppUserBundle_profile
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::preferencesAction',  '_route' => 'MyAppUserBundle_profile',);
        }

        // myapp_user_profile_edit
        if ($pathinfo === '/edit') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'myapp_user_profile_edit',);
        }

        // myapp_user_profile_show
        if ($pathinfo === '/show') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_myapp_user_profile_show;
            }

            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'myapp_user_profile_show',);
        }
        not_myapp_user_profile_show:

        // myapp_utilisateur_rechercher
        if ($pathinfo === '/admin/rechercher') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UtilisateurController::rechercherUtilisateurAction',  '_route' => 'myapp_utilisateur_rechercher',);
        }

        if (0 === strpos($pathinfo, '/secure_area/login')) {
            // hwi_oauth_service_redirect
            if (preg_match('#^/secure_area/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/secure_area/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/secure_area/login/service') && preg_match('#^/secure_area/login/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/secure_area/login/registration') && preg_match('#^/secure_area/login/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

        }

        // redirect_path
        if ($pathinfo === '/redirect') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RedirectController::redirectAction',  '_route' => 'redirect_path',);
        }

        // connect_facebook
        if ($pathinfo === '/connectFB') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\FacebookController::loginFBAction',  '_route' => 'connect_facebook',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // myapp_user_security_redirect
        if ($pathinfo === '/show') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'myapp_user_security_redirect',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResettingController::resetAction',));
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

        // test_facebook
        if (0 === strpos($pathinfo, '/logFacebook') && preg_match('#^/logFacebook/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_facebook')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\FacebookController::loginAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
