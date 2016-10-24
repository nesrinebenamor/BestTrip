<?php

/* MyAppUserBundle::layoutContact.html.twig */
class __TwigTemplate_59a7bef41a95e78a5826034d191282e9f2333ec165be4953b4c886d58145d4db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'contact' => array($this, 'block_contact'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"free-educational-responsive-web-template-webEdu\">
        <meta name=\"author\" content=\"webThemez.com\">
        <title>Free HTML5 School Responsive Web Template Kiddo</title>
        <link rel=\"favicon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Custom styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t
</head>

<body>
\t<!-- Fixed navbar -->
\t<div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    <a class=\"navbar-brand\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Techro HTML5 template\"></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav pull-right mainNav\">
                        <li class=\"c1\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a></li>
                        <li class=\"c2\"><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a></li>
                        <li class=\"c3\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("courses.html"), "html", null, true);
        echo "\">Courses</a></li>
                        <li class=\"c4\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("price.html"), "html", null, true);
        echo "\">Price</a></li>
                        <li class=\"c5\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("videos.html"), "html", null, true);
        echo "\">Videos</a></li>
                        <li class=\"c6 dropdown active\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sidebar-right.html"), "html", null, true);
        echo "\">Right Sidebar</a></li>
                                <li><a href=\"#\">Dummy Link1</a></li>
                                <li><a href=\"#\">Dummy Link2</a></li>
                                <li><a href=\"#\">Dummy Link3</a></li>
                            </ul>
                        </li>
                        <li class=\"c7\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("MyApp_user_contact");
        echo "\">Contact</a></li>

                    </ul>
                </div>
\t\t\t<!--/.nav-collapse -->
\t\t</div>
\t</div>
\t<!-- /.navbar -->

\t\t<header id=\"head\" class=\"secondary\">
           
    </header>


\t<!-- container -->
\t<div class=\"container\">
\t\t";
        // line 62
        $this->displayBlock('contact', $context, $blocks);
        // line 64
        echo "\t\t\t</div>
\t<!-- /container -->

\t <footer id=\"footer\">
 
\t\t<div class=\"container\">
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
            \t<div class=\"footerwidget\"> 
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
\t\t\t<div class=\"social text-center\">
\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fa fa-flickr\"></i></a>
\t\t\t\t<a href=\"#\"><i class=\"fa fa-github\"></i></a>
\t\t\t</div>

\t\t\t<div class=\"clear\"></div>
\t\t\t<!--CLEAR FLOATS-->
\t\t</div>
\t\t<div class=\"footer2\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-6 panel\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<p class=\"simplenav\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Home</a> | 
\t\t\t\t\t\t\t\t<a href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("courses.html"), "html", null, true);
        echo "\">Courses</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("price.html"), "html", null, true);
        echo "\">Price</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("videos.html"), "html", null, true);
        echo "\">Videos</a> |
\t\t\t\t\t\t\t\t<a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 panel\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<p class=\"text-right\">
\t\t\t\t\t\t\t\tCopyright &copy; 2014. Template by <a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://webthemez.com/"), "html", null, true);
        echo "\" rel=\"develop\">WebThemez.com</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /row of panels -->
\t\t\t</div>
\t\t</div>
\t</footer>


\t<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
\t<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

\t<!-- Google Maps -->
\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/google-map.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappuser/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 62
    public function block_contact($context, array $blocks = array())
    {
        // line 63
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle::layoutContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 63,  339 => 62,  332 => 17,  329 => 16,  319 => 216,  315 => 215,  309 => 212,  305 => 211,  301 => 210,  285 => 197,  274 => 189,  270 => 188,  266 => 187,  262 => 186,  258 => 185,  254 => 184,  132 => 64,  130 => 62,  111 => 46,  102 => 40,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  79 => 32,  72 => 28,  68 => 27,  58 => 19,  56 => 16,  52 => 15,  48 => 14,  43 => 12,  39 => 11,  35 => 10,  31 => 9,  21 => 1,);
    }
}
