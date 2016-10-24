<?php

/* MyAppUserBundle:Page:accueilAdmin.html.twig */
class __TwigTemplate_57f5eebc0d1aa5f24804dab87362b2eaf373a5c4930c43598171a50c8fa38be8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2' => array($this, 'block_a2'),
            'a3' => array($this, 'block_a3'),
            'a4' => array($this, 'block_a4'),
            'content' => array($this, 'block_content'),
            'bodyshow' => array($this, 'block_bodyshow'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Best Trip Administrateur Tableau de Bord</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />
        <!-- Font Awesome Icons -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Ionicons -->
        <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Theme style -->
        <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the 
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |  
    |---------------------------------------------------------|
    
    -->
    <body class=\"skin-blue\">
        <div class=\"wrapper\">

            <!-- Main Header -->
            <header class=\"main-header\">

                <!-- Logo -->
                <a href=\"index2.html\" class=\"logo\"><b>Best</b>Trip</a>

                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class=\"dropdown messages-menu\">
                                <!-- Menu toggle button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    <span class=\"label label-success\">4</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class=\"menu\">
                                            <li><!-- start message -->
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <!-- User Image -->
                                                        <img src=";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo " class=\"img-circle\" alt=\"User Image\"/>
                                                    </div>
                                                    <!-- Message title and timestamp -->
                                                    <h4>                            
                                                        Support Team
                                                        <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                    </h4>
                                                    <!-- The message -->
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->                      
                                        </ul><!-- /.menu -->
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                                </ul>
                            </li><!-- /.messages-menu -->

                            <!-- Notifications Menu -->
                            <li class=\"dropdown notifications-menu\">
                                <!-- Menu toggle button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell-o\"></i>
                                    <span class=\"label label-warning\">10</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 10 notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class=\"menu\">
                                            <li><!-- start notification -->
                                                <a href=\"#\">
                                                    <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                                </a>
                                            </li><!-- end notification -->                      
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks Menu -->
                            <li class=\"dropdown tasks-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-flag-o\"></i>
                                    <span class=\"label label-danger\">9</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 9 tasks</li>
                                    <li>
                                        <!-- Inner menu: contains the tasks -->
                                        <ul class=\"menu\">
                                            <li><!-- Task item -->
                                                <a href=\"#\">
                                                    <!-- Task title and progress text -->
                                                    <h3>
                                                        Design some buttons
                                                        <small class=\"pull-right\">20%</small>
                                                    </h3>
                                                    <!-- The progress bar -->
                                                    <div class=\"progress xs\">
                                                        <!-- Change the css width attribute to simulate progress -->
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->                      
                                        </ul>
                                    </li>
                                    <li class=\"footer\">
                                        <a href=\"#\">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account Menu -->
                            <li class=\"dropdown user user-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <!-- The user image in the navbar-->
                                    <img src=";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/photos/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
        echo " class=\"user-image\" alt=\"User Image\"/>
                                         <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                         <span class=\"hidden-xs\">

                                        ";
        // line 169
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 170
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                            <a href=\"";
            // line 171
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 175
            echo "                                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        ";
        }
        // line 177
        echo "                                    </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- The user image in the menu -->
                                    <li class=\"user-header\">
                                        <img src=";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/photos/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
        echo " class=\"img-circle\" alt=\"User Image\" />
                                             <p>
                                            ";
        // line 184
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 185
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                                <a href=\"";
            // line 186
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                                    ";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                                </a>
                                            ";
        } else {
            // line 190
            echo "                                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                            ";
        }
        // line 192
        echo "                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"";
        // line 209
        echo $this->env->getExtension('routing')->getPath("myapp_user_profile_show");
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">

                    <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/photos/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "html", null, true);
        echo " class=\"img-circle\" alt=\"User Image\" />
                        </div>
                        <div class=\"pull-left info\">
                            <p>

                                ";
        // line 235
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 236
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                    <a href=\"";
            // line 237
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                        ";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </a>
                                ";
        } else {
            // line 241
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 243
        echo "
                            </p>
                            <!-- Status -->
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">HEADER</li>
                        <!-- Optionally, you can add icons to the links -->

                        <li class=\"";
        // line 266
        $this->displayBlock('a2', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("recommandation");
        echo "\"><span>Recommandation</span></a></li>
                        <li class=\"";
        // line 267
        $this->displayBlock('a3', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("utilisateur");
        echo "\"><span>Espace utilisateur</span></a></li>
                        <li class=\"";
        // line 268
        $this->displayBlock('a4', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("liste_sujet_User");
        echo "\"><span>Forum</span></a></li>

                        <li class=\"treeview\">
                            <a ><span>NewsLetter</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"";
        // line 273
        echo $this->env->getExtension('routing')->getPath("Ajout");
        echo "\">Ajouter Newsletter</a></li>
                                <li><a href=\"";
        // line 274
        echo $this->env->getExtension('routing')->getPath("affich");
        echo "\">Lister Newsletter</a></li>
                            </ul>
                        </li>
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        Accueil Administrateur
                        <small>Optional description</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                        <li class=\"active\">Here</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">
                    ";
        // line 298
        $this->displayBlock('content', $context, $blocks);
        // line 300
        echo " 
                    ";
        // line 301
        $this->displayBlock('bodyshow', $context, $blocks);
        // line 304
        echo "                    <div>";
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
                    ";
        // line 305
        $this->displayBlock('body', $context, $blocks);
        // line 308
        echo "  

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class=\"main-footer\">
                <!-- To the right -->
                <div class=\"pull-right hidden-xs\">
                    Anything you want
                </div>
                <!-- Default to the left --> 
                <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
            </footer>

        </div><!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.3 -->
        <script src=";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
        <!-- AdminLTE App -->
        <script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins. 
              Both of these plugins are recommended to enhance the 
              user experience -->
    </body>
</html>
";
    }

    // line 266
    public function block_a2($context, array $blocks = array())
    {
    }

    // line 267
    public function block_a3($context, array $blocks = array())
    {
    }

    // line 268
    public function block_a4($context, array $blocks = array())
    {
    }

    // line 298
    public function block_content($context, array $blocks = array())
    {
        echo " 
                        <!-- Your Page Content Here -->
                    ";
    }

    // line 301
    public function block_bodyshow($context, array $blocks = array())
    {
        echo " 
                        <!-- Your Page Content Here -->
                    ";
    }

    // line 305
    public function block_body($context, array $blocks = array())
    {
        echo " 
                        <!-- Your Page Content Here -->

                    ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Page:accueilAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 305,  516 => 301,  508 => 298,  503 => 268,  498 => 267,  493 => 266,  481 => 332,  476 => 330,  471 => 328,  449 => 308,  447 => 305,  442 => 304,  440 => 301,  437 => 300,  435 => 298,  408 => 274,  404 => 273,  394 => 268,  388 => 267,  382 => 266,  357 => 243,  349 => 241,  343 => 238,  339 => 237,  334 => 236,  332 => 235,  322 => 230,  301 => 212,  295 => 209,  276 => 192,  268 => 190,  262 => 187,  258 => 186,  253 => 185,  251 => 184,  244 => 182,  237 => 177,  229 => 175,  223 => 172,  219 => 171,  214 => 170,  212 => 169,  203 => 165,  121 => 86,  55 => 23,  47 => 18,  38 => 12,  25 => 1,);
    }
}
