<?php

/* MyAppFrontBundle::layoutIndex.html.twig */
class __TwigTemplate_2a02074e55f12c61e822808f4f795ca1ddf7011f17c49adbc2ebacb5eb34a8eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'exp1' => array($this, 'block_exp1'),
            'exp2' => array($this, 'block_exp2'),
            'exp3' => array($this, 'block_exp3'),
            'exp4' => array($this, 'block_exp4'),
            'avance' => array($this, 'block_avance'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"free-educational-responsive-web-template-webEdu\">
        <meta name=\"author\" content=\"webThemez.com\">
        <title>Best Trip</title>
        <link rel=\"favicon\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
        <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "> 
        <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo " media=\"screen\"> 
        <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo ">
        <link rel='stylesheet' id='camera-css'  href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/camera.css"), "html", null, true);
        echo " type='text/css' media='all'> 
        <script src=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "></script> 
        <script src=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easydropdown.js"), "html", null, true);
        echo "></script> 
        <script src=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "></script>
        <link rel=\"stylesheet\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo " />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"assets/js/html5shiv.js\"></script>
        <script src=\"assets/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>

        <div class=\"navbar navbar-inverse\">
            <div class=\"container\">

                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Best Trip\" style=\"
                             width: 250px;
                             margin-left: -100px;
                             \"></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav pull-right mainNav\">
                        <li class=\"c1\"><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("acceul_front");
        echo "\">Accueil</a></li>
                        <li class=\"c2 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Expérience <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("experience_create");
        echo "\">Partager Expérience</a></li>
                                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("experience_show");
        echo "\">Afficher Expériences</a></li>
                            </ul>
                        </li>
                        <li class=\"c3 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Guide <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("Guide_create");
        echo "\">Creer Guide</a></li>
                                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("Guide");
        echo "\">Afficher Les Guides</a></li>

                           </ul>
                        </li>
                        <li class=\"c4 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Recommandation <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("recommandation_create");
        echo "\">Proposer Recommandation</a></li>
                                <li><a  href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("affichage");
        echo "\">Afficher Recommandations</a></li>

                            </ul>
                        </li>
                        
                        
                        <li class=\"c2\"><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("MyApp_user_contact");
        echo "\">Contact</a></li>
                        <li class=\"c5\"><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("liste_sujets");
        echo "\">Forum</a></li>
                        
                        <li class=\"c6\">                            
                              <ul class=\"nav navbar-nav pull-right mainNav\" >
                             ";
        // line 80
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 81
            echo "                           
                           <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                               <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_show");
            echo "\">Consulter Profile</a></li>   
                                <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_edit");
            echo "\">Editer Profile</a></li>
                                <li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_experiences", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mes Expériences</a></li>
                                <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer Mot de passe</a></li>
                                <li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                
                               </ul>
                            <li><img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/photos/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "image", array()), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></li>   
                            ";
        } else {
            // line 93
            echo "                            <ul class=\"nav navbar-nav pull-left mainNav\">
                             <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                             <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            </ul> 
                            ";
        }
        // line 98
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
                    <h1 class=\"animated flipInY delay1\">Rejoignez Notre Site</h1> <br/>
                    <p>Les meilleurs Destinations et Expériences</p>
                </div>

                <div class=\"fluid_container\">                       
                    <div class=\"camera_wrap camera_emboss pattern_1\" id=\"camera_wrap_4\" style=\"display: block; margin-bottom: 61px; height: 600px; margin-top: 44px;\">
                        <div data-thumb=";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img1.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img1.jpg"), "html", null, true);
        echo ">                       
                        </div> 
                        <div data-thumb=";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img2.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img2.jpg"), "html", null, true);
        echo ">
                        </div>
                        <div data-thumb=";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img3.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img3.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img4.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img4.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img5.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img5.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img6.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img6.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img7.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img7.jpg"), "html", null, true);
        echo ">
                        </div> 
                        <div data-thumb=";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/thumbs/img8.jpg"), "html", null, true);
        echo " data-src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/slides/img8.jpg"), "html", null, true);
        echo ">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
            </div>
        </header>
        <!-- /Header -->

        <div class=\"container\">
            <div class=\"row\" style=\"margin-top: 68px;\">
                <div class=\"col-md-3\">
                    <div class=\"grey-box-icon b1\">
                        ";
        // line 143
        $this->displayBlock('exp1', $context, $blocks);
        // line 149
        echo "                    </div><!--grey box -->
                </div><!--/span3-->
                <div class=\"col-md-3\">
                    <div class=\"grey-box-icon b2\"> 
                        ";
        // line 153
        $this->displayBlock('exp2', $context, $blocks);
        // line 159
        echo "                    </div><!--grey box -->
                </div><!--/span3-->
                <div class=\"col-md-3\">
                    <div class=\"grey-box-icon b3\"> 
                        ";
        // line 163
        $this->displayBlock('exp3', $context, $blocks);
        // line 170
        echo "                    </div><!--grey box -->
                </div><!--/span3-->
                <div class=\"col-md-3\">
                    <div class=\"grey-box-icon b4\">  
                        ";
        // line 174
        $this->displayBlock('exp4', $context, $blocks);
        // line 180
        echo "                    </div><!--grey box -->
                </div><!--/span3-->
            </div>
        </div>

        ";
        // line 185
        $this->displayBlock('avance', $context, $blocks);
        // line 186
        echo "  
        ";
        // line 187
        $this->displayBlock('content', $context, $blocks);
        // line 188
        echo "  
        <section class=\"news-box top-margin\">
            <div class=\"container\">
                <h2><span>Nouvelles Expériences</span></h2>
                <div class=\"row\">

                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <div class=\"newsBox\">
                            <div class=\"thumbnail\">
                                <figure><img src=\"assets/images/news2.jpg\" alt=\"\"></figure>
                                <div class=\"caption maxheight2\">
                                    <div class=\"box_inner\">
                                        <div class=\"box\">
                                            <p class=\"title\"><h5>Developer</h5></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <div class=\"newsBox\">
                            <div class=\"thumbnail\">
                                <figure><img src=\"assets/images/news3.jpg\" alt=\"\"></figure>
                                <div class=\"caption maxheight2\">
                                    <div class=\"box_inner\">
                                        <div class=\"box\">
                                            <p class=\"title\"><h5>Photography   </h5></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <div class=\"newsBox\">
                            <div class=\"thumbnail\">
                                <figure><img src=\"assets/images/news4.jpg\" alt=\"\"></figure>
                                <div class=\"caption maxheight2\">
                                    <div class=\"box_inner\">
                                        <div class=\"box\">
                                            <p class=\"title\"><h5>Audio Editing</h5></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\"><div class=\"title-box clearfix \"><h2 class=\"title-box_primary\">About Us</h2></div> 
                    <p><span>Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui.</span></p>
                    <p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p><p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p>
                    <a href=\"#\" title=\"read more\" class=\"btn-inline \" target=\"_self\">read more</a> </div>


                <div class=\"col-md-4\"><div class=\"title-box clearfix \"><h2 class=\"title-box_primary\">Up Coming Courses</h2></div> 
                    <div class=\"list styled custom-list\">
                        <ul>
                            <li><a title=\"Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus.\" href=\"#\">Mathematics and Computer Science</a></li>
                            <li><a title=\"Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus.\" href=\"#\">Mathematics and Philosophy</a></li>
                            <li><a title=\"Penatibus et magnis dis parturient montes ascetur ridiculus mus.\" href=\"#\">Philosophy and Modern Languages</a></li>
                            <li><a title=\"Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci.\" href=\"#\">History (Ancient and Modern)</a></li>
                            <li><a title=\"Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus.\" href=\"#\">Classical Archaeology and Ancient History</a></li>
                            <li><a title=\"Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus.\" href=\"#\">Physics and Philosophy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


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
                                    <a href=\"index.html\">Home</a> | 
                                    <a href=\"about.html\">About</a> |
                                    <a href=\"courses.html\">Courses</a> |
                                    <a href=\"price.html\">Price</a> |
                                    <a href=\"videos.html\">Videos</a> |
                                    <a href=\"contact.html\">Contact</a>
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-6 panel\">
                            <div class=\"panel-body\">
                                <p class=\"text-right\">
                                    Copyright &copy; 2014. Template by <a href=\"http://webthemez.com/\" rel=\"develop\">WebThemez.com</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- /row of panels -->
                </div>
            </div>
        </footer>

        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src=";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr-latest.js"), "html", null, true);
        echo "></script> 
        <script type='text/javascript' src=";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "></script>
        <script type='text/javascript' src=";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "></script>

        <script type='text/javascript' src=";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "></script>
        <script type='text/javascript' src=";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "></script> 
        <script type='text/javascript' src=";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/camera.min.js"), "html", null, true);
        echo "></script> 
        <script src=";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "></script> 
        <script src=";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
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

    </body>
</html>
";
    }

    // line 143
    public function block_exp1($context, array $blocks = array())
    {
        echo " 
                            <h4>Online Courses</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue
                                eset nec lacus elit dor broma.</p>
                            <p><a href=\"#\"><em>Read More</em></a></p>
                        ";
    }

    // line 153
    public function block_exp2($context, array $blocks = array())
    {
        echo "                             
                            <h4>Meet our Staff</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue
                                eset nec lacus elit dor broma.</p>
                            <p><a href=\"#\"><em>Read More</em></a></p>
                        ";
    }

    // line 163
    public function block_exp3($context, array $blocks = array())
    {
        echo " 

                            <h4>Latest Updates</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue
                                eset nec lacus elit dor broma.</p>
                            <p><a href=\"#\"><em>Read More</em></a></p>
                        ";
    }

    // line 174
    public function block_exp4($context, array $blocks = array())
    {
        echo "                              
                            <h4>Placements</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue
                                eset nec lacus elit dor broma.</p>
                            <p><a href=\"#\"><em>Read More →</em></a></p>
                        ";
    }

    // line 185
    public function block_avance($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 187
    public function block_content($context, array $blocks = array())
    {
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle::layoutIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 187,  673 => 185,  662 => 174,  650 => 163,  639 => 153,  628 => 143,  599 => 419,  595 => 418,  591 => 417,  587 => 416,  583 => 415,  578 => 413,  574 => 412,  570 => 411,  345 => 188,  343 => 187,  340 => 186,  338 => 185,  331 => 180,  329 => 174,  323 => 170,  321 => 163,  315 => 159,  313 => 153,  307 => 149,  305 => 143,  288 => 131,  281 => 129,  274 => 127,  267 => 125,  260 => 123,  253 => 121,  246 => 119,  239 => 117,  218 => 98,  212 => 95,  208 => 94,  205 => 93,  198 => 91,  192 => 88,  188 => 87,  184 => 86,  180 => 85,  176 => 84,  171 => 82,  168 => 81,  166 => 80,  159 => 76,  155 => 75,  146 => 69,  142 => 68,  132 => 61,  128 => 60,  119 => 54,  115 => 53,  108 => 49,  98 => 42,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  41 => 15,  25 => 1,);
    }
}
