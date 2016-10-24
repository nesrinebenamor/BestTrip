<?php

/* MyAppUserBundle:Page:accueil.html.twig */
class __TwigTemplate_68d2460f39bdf789225e8398f82897c05fc9df78df6696b3488c2a4b5d35097d extends Twig_Template
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
        <title>Free HTML5 School Responsive Web Template Kiddo</title>
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
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<!--<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/images/logo.png"), "html", null, true);
        echo "\" alt=\"Filmothèque\" width=\"128\" height=\"128\" />-->
     <!-- -->
         <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo " media=\"screen\"> 
        <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo ">
        <link rel='stylesheet' id='camera-css'  href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/camera.css"), "html", null, true);
        echo " type='text/css' media='all'> 
        <script src=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "></script> 
      <script src=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easydropdown.js"), "html", null, true);
        echo "></script> 
      <script src=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "></script>
      <link rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo " />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"assets/js/html5shiv.js\"></script>
        <script src=\"assets/js/respond.min.js\"></script>
        <![endif]-->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<!--<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmotheque/images/logo.png"), "html", null, true);
        echo "\" alt=\"Filmothèque\" width=\"128\" height=\"128\" />-->

      <!--  -->
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 37
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Techro HTML5 template\"></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav pull-right mainNav\">
                        <li class=\"c1\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("MyApp_user_accueil");
        echo "\">Home</a></li>
                        <li class=\"c2\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a></li>
                        <li class=\"c3\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("courses.html"), "html", null, true);
        echo "\">Courses</a></li>
                        <li class=\"c4\"><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("price.html"), "html", null, true);
        echo "\">Price</a></li>
                        <li class=\"c5\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("affichage");
        echo "\">Recommandations</a></li>
                        <li class=\"c7\"><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("MyApp_user_contact");
        echo "\">Contact</a></li>
                        <li class=\"c6\">                            
                              <ul class=\"nav navbar-nav pull-right mainNav\" >
                             ";
        // line 61
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                           <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_show");
            echo "\">Consulter Profile</a></li>
                           <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                               <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_edit");
            echo "\">Editer Profile</a></li>
                                <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer Mot de passe</a></li>
                                <li><a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                               </ul>
                            <li><img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/photos/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></li>   
                            ";
        } else {
            // line 71
            echo "                            <ul class=\"nav navbar-nav pull-left mainNav\">
                             <li><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                             <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            </ul>   
                            ";
        }
        // line 76
        echo "                             </ul>
                        </li>
                    </ul>
                </div>
                    <ul class=\"nav navbar-nav navbar-right \">
                    
                    </ul>
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
                    <div class=\"camera_wrap camera_emboss pattern_1\" id=\"camera_wrap_4\">
                        <div data-thumb=";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img1.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img1.jpg"), "html", null, true);
        echo ">                       
                        </div> 
                        <div data-thumb=";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img2.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img2.jpg"), "html", null, true);
        echo ">
                        </div>
                        <div data-thumb=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img3.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img3.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img4.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img4.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img5.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img5.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img6.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img6.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img7.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img7.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 114
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
        // line 121
        $this->displayBlock('contact', $context, $blocks);
        // line 123
        echo "    
         <div class=\"container\">
            ";
        // line 125
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 126
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 131
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 133
        echo "        </div>
        <div class=\"container\">
         ";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 136
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 137
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert alert-success \">
                    ";
                // line 138
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "        </div>

        ";
        // line 144
        $this->displayBlock('sidebar', $context, $blocks);
        // line 146
        echo "
        <!-- container -->
        <section class=\"container\">

            <div class=\"row\">
                <br> <br>
                 <div class=\"container\">  
                      ";
        // line 153
        $this->displayBlock('body', $context, $blocks);
        // line 155
        echo "                     
                     ";
        // line 156
        $this->displayBlock('bodyshow', $context, $blocks);
        // line 158
        echo "                     ";
        $this->displayBlock('contentuser', $context, $blocks);
        // line 160
        echo "                ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 162
        echo "                
                </div>
                <div class=\"container\">    
            ";
        // line 165
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 167
        echo "                <!-- Article main content -->
                </div>

            </div>
        </section>
                <br><br>
                  <div>";
        // line 173
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
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a> | 
\t\t\t\t\t\t\t\t<a href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("courses.html"), "html", null, true);
        echo "\">Courses</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("price.html"), "html", null, true);
        echo "\">Price</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("videos.html"), "html", null, true);
        echo "\">Videos</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a>
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-6 panel\">
                            <div class=\"panel-body\">
                                <p class=\"text-right\">
                                    Copyright &copy; 2014. Template by <a href=\"";
        // line 306
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
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
          <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr-latest.js"), "html", null, true);
        echo "></script> 
        <script type='text/javascript' src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "></script>
        <script type='text/javascript' src=";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "></script>

        <script type='text/javascript' src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "></script>
        <script type='text/javascript' src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "></script> 
        <script type='text/javascript' src=";
        // line 329
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

    // line 121
    public function block_contact($context, array $blocks = array())
    {
        // line 122
        echo "                    ";
    }

    // line 144
    public function block_sidebar($context, array $blocks = array())
    {
        // line 145
        echo "        ";
    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
    }

    // line 156
    public function block_bodyshow($context, array $blocks = array())
    {
    }

    // line 158
    public function block_contentuser($context, array $blocks = array())
    {
        // line 159
        echo "                         ";
    }

    // line 160
    public function block_contenu($context, array $blocks = array())
    {
        echo "\t
                ";
    }

    // line 165
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 166
        echo "            ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Page:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 166,  681 => 165,  674 => 160,  670 => 159,  667 => 158,  662 => 156,  657 => 153,  653 => 145,  650 => 144,  646 => 122,  643 => 121,  609 => 329,  605 => 328,  601 => 327,  596 => 325,  592 => 324,  588 => 323,  583 => 321,  579 => 320,  575 => 319,  559 => 306,  548 => 298,  544 => 297,  540 => 296,  536 => 295,  532 => 294,  528 => 293,  405 => 173,  397 => 167,  395 => 165,  390 => 162,  387 => 160,  384 => 158,  382 => 156,  379 => 155,  377 => 153,  368 => 146,  366 => 144,  362 => 142,  356 => 141,  347 => 138,  342 => 137,  337 => 136,  333 => 135,  329 => 133,  321 => 131,  315 => 128,  311 => 127,  306 => 126,  304 => 125,  300 => 123,  298 => 121,  286 => 114,  279 => 112,  272 => 110,  265 => 108,  258 => 106,  251 => 104,  244 => 102,  237 => 100,  211 => 76,  205 => 73,  201 => 72,  198 => 71,  191 => 69,  186 => 67,  182 => 66,  178 => 65,  173 => 63,  168 => 62,  166 => 61,  160 => 58,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  140 => 53,  133 => 49,  129 => 48,  115 => 37,  111 => 36,  107 => 35,  101 => 32,  97 => 31,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  26 => 1,);
    }
}
