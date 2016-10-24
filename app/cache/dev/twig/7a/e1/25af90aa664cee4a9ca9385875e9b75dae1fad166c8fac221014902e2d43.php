<?php

/* MyAppUserBundle:Security:login.html.twig */
class __TwigTemplate_7ae125af90aa664cee4a9ca9385875e9b75dae1fad166c8fac221014902e2d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<div id=\"fb-root\"></div>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://connect.facebook.net/fr_FR/all.js"), "html", null, true);
        echo "\"></script>
<script>
    FB.init({
        appId  : '672757779502648',
        status : true, // verifie le statut de la connexion
        cookie : true, // active les cookies pour que le serveur puisse accéder à la session
        xfbml  : true  // active le XFBML (HTML de Facebook)
    });
</script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery.js"), "html", null, true);
        echo "\"> </script>
<script>
\t
\t\$(document).ready(function() {

    FB.Event.subscribe('auth.login', function(response) {

        FB.api('/me', function(response) { 

            var url = 'http://graph.facebook.com/' + response.id + '/picture';

            \$('#facebook_profile_image').html('<img src=\"' + url + '\" alt=\"#\" />');
            \$('#facebook_profile_text').html('<p><a href=\"' + response.link + '\"><strong>' + response.name + '</strong></a><br /><a href=\"#\" id=\"facebook_logout\">Deconnexion</a>');

            var user_data = '<ul><li>Votre date de naissance : ' + response.birthday + '</li><li>Votre adresse email : ' + response.email + '</li><li>Votre bio : ' + response.bio + '</li>';
            \$('#facebook_user_data').html(user_data);

            FB.api('/me/posts', function(response) {

                var messages = '<li>Vos 3 derniers statuts : <ul>';

                \$.each(response.data, function(key, value) {

                    messages += '<li>' + value.message + '</li>';                           
                    return (key != 2);

                }); 

                messages += '</ul></li></ul>';

                \$('#facebook_user_data').append(messages);

            });

        });

        \$('#facebook_button_box').hide();
        \$('#facebook_profile').show();

    });

    FB.getLoginStatus(function(response) {

        if (response.session) {

            FB.api('/me', function(response) { 

                var url = 'http://graph.facebook.com/' + response.id + '/picture';

                \$('#facebook_profile_image').html('<img src=\"' + url + '\" alt=\"#\" />');
                \$('#facebook_profile_text').html('<p><a href=\"' + response.link + '\"><strong>' + response.name + '</strong></a><br /><a href=\"#\" id=\"facebook_logout\">Deconnexion</a>');

                var user_data = '<li>Votre date de naissance : ' + response.birthday + '</li><li>Votre adresse email : ' + response.email + '</li><li>Votre bio : ' + response.bio + '</li>';
                \$('#facebook_user_data').html(user_data);

                FB.api('/me/posts', function(response) {

                    var messages = '<li>Vos 3 derniers statuts : <ul>';

                    \$.each(response.data, function(key, value) {

                        messages += '<li>' + value.message + '</li>';                           
                        return (key != 2);

                    }); 

                    messages += '</ul></li>';

                    \$('#facebook_user_data').append(messages);

                });

            });

            \$('#facebook_button_box').hide();
            \$('#facebook_profile').show();

        }
    });

    \$('#facebook_logout').live('click', function() {

        FB.logout(function(response) {

            \$('#facebook_button_box').show();
            \$('#facebook_profile').hide();

        });

        return false;

    });         
});
</script>
<form action=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
     <label for=\"username\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>    <br>
    <div class=\"input-group\">
     <span class=\"input-group\" ><i class=\"fa fa-user\" ></i></span>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <br>
    <label for=\"password\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"input-group\">
     <span class=\"input-group\" ><i class=\"fa fa-key\" ></i></span>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <br>
    <label for=\"remember_me\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"input-group\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
   
    <input class=\"btn btn-block btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
 </div>
 <br>

      <div class=\"box\">
    <div id=\"social_networks\">
        <div id=\"facebook_button_box\">
            <fb:login-button show-faces=\"true\" width=\"450\" perms=\"email,user_birthday,read_stream\"></fb:login-button>
        </div>
    </div>
   
    <div id=\"social_networks_profiles\">
        <div id=\"facebook_profile\" style=\"display:none;\">
            <div id=\"facebook_profile_image\" style=\"width:50px;height:50px;margin-left:20px;float:left;\">

            </div>
            <div id=\"facebook_profile_text\" style=\"height:50px;margin-top:-3px;margin-left:5px;float:left\">

            </div>
            <div class=\"clear\"></div>
            <ul id=\"facebook_user_data\">

            </ul>
\t\t\t
        </div>
        <div class=\"clear\"></div>
    </div>
</div>      
 
 <!-- 
 
  <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\" alt=\"Sign in with Facebook\">Sign in with Facebook</a>
  <div class=\"login-social-link\">
            <a href=\"http://localhost/ProjetBestTrip/web/app_dev.php/secure_area/login\" class=\"facebook\">
                 <span class=\"fb-login-button\" ><i class=\"facebookButton\" ></i></span>
                 <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/fbconnect.png"), "html", null, true);
        echo "\"  />             
            </a>
        </div>   
 -->
            
            
            
            <br>
</form>
";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 164,  229 => 160,  195 => 129,  188 => 125,  179 => 119,  173 => 116,  167 => 113,  163 => 112,  159 => 111,  62 => 17,  50 => 8,  47 => 7,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
