<?php

/* MyAppUserBundle:Security:loginFB.html.twig */
class __TwigTemplate_e4048a0f66a4f0bc86a05cd9c1ab06e7710de1f29c4be3e5114df8fedb9ab466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<div id=\"fb-root\"></div>
<script src=\"";
        // line 4
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
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery.js"), "html", null, true);
        echo "\"> </script>
<script>
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

</head>
<body>



<div class=\"box\">
    <div id=\"social_networks\">
        <div id=\"facebook_button_box\">
            <fb:login-button show-faces=\"true\" width=\"450\" perms=\"email,user_birthday,read_stream\"></fb:login-button>
        </div>
    </div>
    <div id=\"social_networks\">
        <div id=\"facebook_button_box\">
    <fb:login-button show-faces=\"true\" width=\"450\" perms=\"email,user_birthday,read_stream\"></fb:login-button>
    <input type=\"button\" onclick=href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout", array("" => $this->getAttribute((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")), "username", array()))), "html", null, true);
        echo "\">
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
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Security:loginFB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 121,  36 => 13,  24 => 4,  19 => 1,);
    }
}
