<?php

/* MyAppFrontBundle::layout.html.twig */
class __TwigTemplate_ea01a74d879e2f8cd60e7a22c912851b102e5947099cb476a367bbf9e86587b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nomPage' => array($this, 'block_nomPage'),
            'disPage' => array($this, 'block_disPage'),
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
        <link rel=\"favicon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Custom styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"assets/js/html5shiv.js\"></script>
        <script src=\"assets/js/respond.min.js\"></script>
        <![endif]-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    </head>

    <body>
        
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-inverse\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("acceul_front");
        echo "\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" style=\"margin-top: -50px;padding-top:-1px;\"/></a>
                </div>
<div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav pull-right mainNav\">
                        <li class=\"c1\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("acceul_front");
        echo "\">Accueil</a></li>
                        <li class=\"c2 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Expérience <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("experience_create");
        echo "\">Partager Expérience</a></li>
                                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("experience_show");
        echo "\">Afficher Expériences</a></li>
                            </ul>
                        </li>
                        <li class=\"c3 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Guide <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("Guide_create");
        echo "\">Creer Guide</a></li>
                                <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("Guide");
        echo "\">Afficher Les Guides</a></li>

                           </ul>
                        </li>
                        <li class=\"c4 dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Recommandation <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("recommandation_create");
        echo "\">Proposer Recommandation</a></li>
                                <li><a  href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("affichage");
        echo "\">Afficher Recommandations</a></li>

                            </ul>
                        </li>
                        
                        
                        <li class=\"c2\"><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("MyApp_user_contact");
        echo "\">Contact</a></li>
                        <li class=\"c5\"><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("liste_sujets");
        echo "\">Forum</a></li>
                        
                        <li class=\"c6\">                            
                              <ul class=\"nav navbar-nav pull-right mainNav\" >
                             ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 77
            echo "                           
                           <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                               <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_show");
            echo "\">Consulter Profile</a></li>   
                                <li><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_edit");
            echo "\">Editer Profile</a></li>
                                <li><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_experiences", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mes Expériences</a></li>
                                <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer Mot de passe</a></li>
                                <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                
                               </ul>
                            <li><img src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/photos/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "image", array()), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></li>   
                            ";
        } else {
            // line 89
            echo "                            <ul class=\"nav navbar-nav pull-left mainNav\">
                             <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                             <li><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            </ul> 
                            ";
        }
        // line 94
        echo "                             </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <!-- /.navbar -->

        <header  style=\"margin-top: 56px;\" id=\"head\" class=\"secondary\">
            <div class=\"container\">
                <h1>";
        // line 105
        $this->displayBlock('nomPage', $context, $blocks);
        // line 106
        echo "</h1>
                    <p>";
        // line 107
        $this->displayBlock('disPage', $context, $blocks);
        // line 108
        echo "</p>
                    </div>
                </header>

                <!-- container -->
                <section class=\"container\">

                    <div class=\"row\">
                        
                          <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyAua-Fi-g8TEGnPeIlytnqGY0vaH5SXs20\"></script>
<script>
function initialize() {

  var mapProp = {
    center:new google.maps.LatLng(10 ,10),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
                        
                        

                        <!-- Article main content -->
                        <article class=\"col-md-8 maincontent\">
                            ";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "                        </article>
                        <!-- /Article -->

                        <!-- Sidebar -->
                        <aside class=\"col-md-4 sidebar sidebar-right\">

                            <div class=\"row panel\">
                                <div class=\"col-xs-12\">
                                    
                                </div>
                            </div>
                            <div class=\"row panel\">
                                <div class=\"col-xs-12\">
                                    
                                </div>
                            </div>

                        </aside>
                        <!-- /Sidebar -->

                    </div>
                </section>
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
                <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
                <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
                <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

            </body>
        </html>
";
    }

    // line 105
    public function block_nomPage($context, array $blocks = array())
    {
        echo " 
                    ";
    }

    // line 107
    public function block_disPage($context, array $blocks = array())
    {
        echo " 
                        ";
    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        echo " 
                            ";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 135,  439 => 107,  432 => 105,  423 => 305,  253 => 137,  251 => 135,  222 => 108,  220 => 107,  217 => 106,  215 => 105,  202 => 94,  196 => 91,  192 => 90,  189 => 89,  182 => 87,  176 => 84,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  155 => 78,  152 => 77,  150 => 76,  143 => 72,  139 => 71,  130 => 65,  126 => 64,  116 => 57,  112 => 56,  103 => 50,  99 => 49,  92 => 45,  85 => 41,  81 => 40,  67 => 29,  57 => 22,  53 => 21,  48 => 19,  44 => 18,  39 => 16,  22 => 1,);
    }
}
