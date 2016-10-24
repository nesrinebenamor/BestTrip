<?php

/* MyAppUserBundle:Page:index.html.twig */
class __TwigTemplate_5d2fb92aaaf083b529ea31acb4d559cbe7ef21b740ac316171f7d8248db92edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contact' => array($this, 'block_contact'),
            'sidebar' => array($this, 'block_sidebar'),
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

      <!--  -->
        <!-- Custom styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 22
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Techro HTML5 template\"></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav pull-right mainNav\">
                        <li class=\"c1\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a></li>
                        <li class=\"c2\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a></li>
                        <li class=\"c3\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("courses.html"), "html", null, true);
        echo "\">Courses</a></li>
                        <li class=\"c4\"><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("price.html"), "html", null, true);
        echo "\">Price</a></li>
                        <li class=\"c5\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("affichage_recommandation");
        echo "\">Recommandations</a></li>
                        <li class=\"c7\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("MyApp_user_contact");
        echo "\">Contact</a></li>
                        <li class=\"c6\">                            
                              <ul class=\"nav navbar-nav pull-right mainNav\" >
                             ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 47
            echo "                           <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_show");
            echo "\">Consulter Profile</a></li>
                           <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                               <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("myapp_user_profile_edit");
            echo "\">Editer Profile</a></li>
                                <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                               </ul>
                            <li><img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/photos/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
            echo "\" alt=\"monimg2\" width=\"100\" height=\"100\"/></li>   
                            ";
        } else {
            // line 55
            echo "                            <ul class=\"nav navbar-nav pull-left mainNav\">
                             <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                             <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            </ul>   
                            ";
        }
        // line 60
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

        <header id=\"head\" class=\"secondary\">
            <div class=\"container\">
                <h1>Sidebar Heading</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
            </div>
        </header>
            
";
        // line 81
        $this->displayBlock('contact', $context, $blocks);
        // line 83
        echo "    
         <div class=\"container\">
            ";
        // line 85
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 91
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 93
        echo "        </div>
        <div class=\"container\">
         ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 96
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 97
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert alert-success \">
                    ";
                // line 98
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </div>

        ";
        // line 104
        $this->displayBlock('sidebar', $context, $blocks);
        // line 106
        echo "
        <!-- container -->
        <section class=\"container\">

            <div class=\"row\">
                <br> <br>
                 <div class=\"container\">  
                     ";
        // line 113
        $this->displayBlock('bodyshow', $context, $blocks);
        // line 115
        echo "                     ";
        $this->displayBlock('contentuser', $context, $blocks);
        // line 117
        echo "                ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 119
        echo "                
                </div>
                <div class=\"container\">    
            ";
        // line 122
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 124
        echo "                <!-- Article main content -->
                </div>

            </div>
        </section>
                <br><br>
                  <div>";
        // line 130
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
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a> | 
\t\t\t\t\t\t\t\t<a href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("courses.html"), "html", null, true);
        echo "\">Courses</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("price.html"), "html", null, true);
        echo "\">Price</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("videos.html"), "html", null, true);
        echo "\">Videos</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a>
                                </p>
                            </div>
                        </div>

                        <div class=\"col-md-6 panel\">
                            <div class=\"panel-body\">
                                <p class=\"text-right\">
                                    Copyright &copy; 2014. Template by <a href=\"";
        // line 263
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
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
       
       
        
        <div>
            
        </div>
        
    </body>
</html>
";
    }

    // line 81
    public function block_contact($context, array $blocks = array())
    {
        // line 82
        echo "                    ";
    }

    // line 104
    public function block_sidebar($context, array $blocks = array())
    {
        // line 105
        echo "        ";
    }

    // line 113
    public function block_bodyshow($context, array $blocks = array())
    {
    }

    // line 115
    public function block_contentuser($context, array $blocks = array())
    {
        // line 116
        echo "                         ";
    }

    // line 117
    public function block_contenu($context, array $blocks = array())
    {
        echo "\t
                ";
    }

    // line 122
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 123
        echo "            ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 123,  515 => 122,  508 => 117,  504 => 116,  501 => 115,  496 => 113,  492 => 105,  489 => 104,  485 => 82,  482 => 81,  467 => 278,  463 => 277,  459 => 276,  443 => 263,  432 => 255,  428 => 254,  424 => 253,  420 => 252,  416 => 251,  412 => 250,  289 => 130,  281 => 124,  279 => 122,  274 => 119,  271 => 117,  268 => 115,  266 => 113,  257 => 106,  255 => 104,  251 => 102,  245 => 101,  236 => 98,  231 => 97,  226 => 96,  222 => 95,  218 => 93,  210 => 91,  204 => 88,  200 => 87,  195 => 86,  193 => 85,  189 => 83,  187 => 81,  164 => 60,  158 => 57,  154 => 56,  151 => 55,  144 => 53,  139 => 51,  135 => 50,  130 => 48,  125 => 47,  123 => 46,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  90 => 34,  86 => 33,  72 => 22,  68 => 21,  64 => 20,  57 => 16,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  25 => 1,);
    }
}
