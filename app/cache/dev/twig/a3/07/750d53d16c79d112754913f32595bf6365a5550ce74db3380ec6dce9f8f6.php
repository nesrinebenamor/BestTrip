<?php

/* MyAppUserBundle::layout.html.twig */
class __TwigTemplate_a307750d53d16c79d112754913f32595bf6365a5550ce74db3380ec6dce9f8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contact' => array($this, 'block_contact'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'bodyshow' => array($this, 'block_bodyshow'),
            'contentuser' => array($this, 'block_contentuser'),
            'contenu' => array($this, 'block_contenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"free-educational-responsive-web-template-webEdu\">
        <meta name=\"author\" content=\"webThemez.com\">
        <title>Best Trip</title>
        <link rel=\"favicon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- -->
         <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo " media=\"screen\"> 
        <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo ">
        <link rel='stylesheet' id='camera-css'  href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/camera.css"), "html", null, true);
        echo " type='text/css' media='all'> 
        <script src=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "></script> 
      <script src=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easydropdown.js"), "html", null, true);
        echo "></script> 
      <script src=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "></script>
      <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo " />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"assets/js/html5shiv.js\"></script>
        <script src=\"assets/js/respond.min.js\"></script>
        <![endif]-->
<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<!--<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/images/logo.png"), "html", null, true);
        echo "\" alt=\"Filmothèque\" width=\"128\" height=\"128\" />-->

      <!--  -->
        <!-- Custom styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
   
 
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-inverse\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    <a class=\"navbar-brand\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Techro HTML5 template\" style=\"
                             width: 250px;
                             margin-left: -100px;
                             \"></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav pull-right mainNav\">
                        <li class=\"c1\"><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("acceul_front");
        echo "\">Accueil</a></li>
                        <li class=\"c2 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Expérience <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("experience_create");
        echo "\">Partager Expérience</a></li>
                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("experience_show");
        echo "\">Afficher Expériences</a></li>
                            </ul>
                        </li>
                        <li class=\"c3 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Guide <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("Guide_create");
        echo "\">Creer Guide</a></li>
                                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("Guide");
        echo "\">Afficher Les Guides</a></li>

                           </ul>
                        </li>
                        <li class=\"c4 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Recommandation <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("recommandation_create");
        echo "\">Proposer Recommandation</a></li>
                                <li><a  href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("affichage");
        echo "\">Afficher Recommandations</a></li>

                            </ul>
                        </li>
                        
                        
                        <li class=\"c2\"><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("MyApp_user_contact");
        echo "\">Contact</a></li>
                        <li class=\"c5\"><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("liste_sujets");
        echo "\">Forum</a></li>
                        
                        <li class=\"c6\">                            
                              <ul class=\"nav navbar-nav pull-right mainNav\" >
                             ";
        // line 85
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "                           
                           <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                               <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_show");
            echo "\">Consulter Profile</a></li>   
                                <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_edit");
            echo "\">Editer Profile</a></li>
                                <li><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_experiences", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mes Expériences</a></li>
                                <li><a href=\"";
            // line 92
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer Mot de passe</a></li>
                                <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                
                               </ul>
                            <li><img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/photos/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "image", array()), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></li>   
                            ";
        } else {
            // line 98
            echo "                            <ul class=\"nav navbar-nav pull-left mainNav\">
                             <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                             <li><a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            </ul> 
                            ";
        }
        // line 103
        echo "                             </ul>
                        </li>
                    </ul>
                </div>
                    
                <!--/.nav-collapse -->
                
                
            </div>
        </div>
        <!-- /.navbar -->

        <!-- Header -->
        <header id=\"head\">
            <div class=\"container\">
                <div class=\"heading-text\">\t\t\t\t\t\t\t
                    <h1 class=\"animated flipInY delay1\">Rejoindre Notre Site</h1> <br/>
                    <p>Les meuileurs Destination et Expériences</p>
                </div>

                <div class=\"fluid_container\">                       
                    <div class=\"camera_wrap camera_emboss pattern_1\" id=\"camera_wrap_4\" style=\"display: block; margin-bottom: 61px; height: 600px; margin-top: 44px;\">
                        <div data-thumb=";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img1.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img1.jpg"), "html", null, true);
        echo ">                       
                        </div> 
                        <div data-thumb=";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img2.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img2.jpg"), "html", null, true);
        echo ">
                        </div>
                        <div data-thumb=";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img3.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img3.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img4.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img4.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img5.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img5.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img6.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img6.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img7.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img7.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img8.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img8.jpg"), "html", null, true);
        echo ">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
            </div>
        </header>
            
";
        // line 146
        $this->displayBlock('contact', $context, $blocks);
        // line 148
        echo "    
         <div class=\"container\">
            ";
        // line 150
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 151
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 152
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 156
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 158
        echo "        </div>
        <div class=\"container\">
         ";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 161
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 162
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert alert-success \">
                    ";
                // line 163
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        </div>

        ";
        // line 169
        $this->displayBlock('sidebar', $context, $blocks);
        // line 171
        echo "
        <!-- container -->
        <section class=\"container\">

            <div class=\"row\">
                <br> <br>
                 <div class=\"container\">  
                      ";
        // line 178
        $this->displayBlock('body', $context, $blocks);
        // line 180
        echo "                     
                     ";
        // line 181
        $this->displayBlock('bodyshow', $context, $blocks);
        // line 183
        echo "                     ";
        $this->displayBlock('contentuser', $context, $blocks);
        // line 185
        echo "                ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 187
        echo "                
                </div>
                <div class=\"container\">    
            ";
        // line 190
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 192
        echo "                <!-- Article main content -->
                </div>

            </div>
        </section>
                <br><br>
                  <div>";
        // line 198
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
        <!-- /container -->
        <footer id=\"footer\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footerbottom\">
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"footerwidget\">
                                <h4>
                                    Course Categories
                                </h4>
                                <div class=\"menu-course\">
                                    <ul class=\"menu\">
                                        <li><a href=\"#\">
                                                List of Technology 
                                            </a>
                                        </li>
                                        <li><a href=\"#\">
                                                List of Business
                                            </a>
                                        </li>
                                        <li><a href=\"#\">
                                                List of Photography
                                            </a>
                                        </li>
                                        <li><a href=\"#\">
                                                List of Language
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            
                            <div class=\"footerwidget\">
                                <h4>
                                    Products Categories
                                </h4>
                                <div class=\"menu-course\">
                                    <ul class=\"menu\">
                                        <li> <a href=\"#\">
                                                Individual Plans  </a>
                                        </li>
                                        <li><a href=\"#\">
                                                Business Plans
                                            </a>
                                        </li>
                                        <li><a href=\"#\">
                                                Free Trial
                                            </a>
                                        </li>
                                        <li><a href=\"#\">
                                                Academic
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"footerwidget\">
                                <h4>
                                    Browse by Categories
                                </h4>
                                <div class=\"menu-course\">
                                    <ul class=\"menu\">
                                        <li><a href=\"#\">
                                                All Courses
                                            </a>
                                        </li>
                                        <li> <a href=\"#\">
                                                All Instructors
                                            </a>
                                        </li>
                                        <li><a href=\"#\">
                                                All Members
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                All Groups
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\"> 
                            <div class=\"footerwidget\"> 
                                <h4>Contact</h4> 
                                <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
                                <div class=\"contact-info\"> 
                                    <i class=\"fa fa-map-marker\"></i> Kerniles 416  - United Kingdom<br>
                                    <i class=\"fa fa-phone\"></i>+00 123 156 711 <br>
                                    <i class=\"fa fa-envelope-o\"></i> youremail@email.com
                                </div> 
                            </div><!-- end widget --> 
                        </div>
                    </div>
                </div>
                <div class=\"social text-center\">
                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-flickr\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                </div>

                <div class=\"clear\"></div>
                <!--CLEAR FLOATS-->
            </div>
            <div class=\"footer2\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-md-6 panel\">
                            <div class=\"panel-body\">
                                <p class=\"simplenav\">
                                    <a href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a> | 
\t\t\t\t\t\t\t\t<a href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("courses.html"), "html", null, true);
        echo "\">Courses</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("price.html"), "html", null, true);
        echo "\">Price</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("videos.html"), "html", null, true);
        echo "\">Videos</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a>
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-6 panel\">
                            <div class=\"panel-body\">
                                <p class=\"text-right\">
                                    Copyright &copy; 2014. Template by <a href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://webthemez.com/"), "html", null, true);
        echo "\" rel=\"develop\">WebThemez.com</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- /row of panels -->
                </div>
            </div>
        </footer>


        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
         <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src=";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr-latest.js"), "html", null, true);
        echo "></script> 
        <script type='text/javascript' src=";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "></script>
        <script type='text/javascript' src=";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "></script>

        <script type='text/javascript' src=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "></script>
        <script type='text/javascript' src=";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "></script> 
        <script type='text/javascript' src=";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/camera.min.js"), "html", null, true);
        echo "></script> 
 
        <script>
            jQuery(function () {

                jQuery('#camera_wrap_4').camera({
                    transPeriod: 500,
                    time: 3000,
                    height: '600',
                    loader: 'false',
                    pagination: true,
                    thumbnails: false,
                    hover: false,
                    playPause: false,
                    navigation: false,
                    opacityOnGrid: false,
                    imagePath: 'assets/images/'
                });

            });

        </script>
       
        
        <div>
            
        </div>
        
    </body>
</html>
";
    }

    // line 146
    public function block_contact($context, array $blocks = array())
    {
        // line 147
        echo "                    ";
    }

    // line 169
    public function block_sidebar($context, array $blocks = array())
    {
        // line 170
        echo "        ";
    }

    // line 178
    public function block_body($context, array $blocks = array())
    {
    }

    // line 181
    public function block_bodyshow($context, array $blocks = array())
    {
    }

    // line 183
    public function block_contentuser($context, array $blocks = array())
    {
        // line 184
        echo "                         ";
    }

    // line 185
    public function block_contenu($context, array $blocks = array())
    {
        echo "\t
                ";
    }

    // line 190
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 191
        echo "            ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 191,  714 => 190,  707 => 185,  703 => 184,  700 => 183,  695 => 181,  690 => 178,  686 => 170,  683 => 169,  679 => 147,  676 => 146,  641 => 354,  637 => 353,  633 => 352,  628 => 350,  624 => 349,  620 => 348,  615 => 346,  611 => 345,  607 => 344,  591 => 331,  580 => 323,  576 => 322,  572 => 321,  568 => 320,  564 => 319,  560 => 318,  437 => 198,  429 => 192,  427 => 190,  422 => 187,  419 => 185,  416 => 183,  414 => 181,  411 => 180,  409 => 178,  400 => 171,  398 => 169,  394 => 167,  388 => 166,  379 => 163,  374 => 162,  369 => 161,  365 => 160,  361 => 158,  353 => 156,  347 => 153,  343 => 152,  338 => 151,  336 => 150,  332 => 148,  330 => 146,  318 => 139,  311 => 137,  304 => 135,  297 => 133,  290 => 131,  283 => 129,  276 => 127,  269 => 125,  245 => 103,  239 => 100,  235 => 99,  232 => 98,  225 => 96,  219 => 93,  215 => 92,  211 => 91,  207 => 90,  203 => 89,  198 => 87,  195 => 86,  193 => 85,  186 => 81,  182 => 80,  173 => 74,  169 => 73,  159 => 66,  155 => 65,  146 => 59,  142 => 58,  135 => 54,  125 => 47,  121 => 46,  107 => 35,  103 => 34,  99 => 33,  92 => 29,  88 => 28,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  26 => 1,);
    }
}
