<?php

/* MyAppUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_57228e1582cb763202c4c5a1ab49445a50e42166371f75db8830c02a09fb3b10 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    
    <div>
        <ul>
            <div class=\"input-group\"><strong> Nom: </strong>
            <span class=\"input-group\" ><i class=\"fa fa-user\" ></i></span>
            <li>  ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</li>
            </div> 
             <div class=\"input-group\"><strong> Prénom: </strong>
            <span class=\"input-group\" ><i class=\"fa fa-user\" ></i></span>
            <li> ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</li>
             </div>
             <div class=\"input-group\"><strong> Age: </strong>
            <span class=\"input-group\" ><i class=\"fa fa-user\" ></i></span>
            <li> ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "</li>
             </div>
             <div class=\"input-group\"><strong> Nom d'utilisateur: </strong>
            <span class=\"input-group\" ><i class=\"fa fa-user\" ></i></span>
            <li>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</li>
             </div>
             <div class=\"input-group\"><strong> Email: </strong>
            <span class=\"input-group\" ><i class=\"fa fa-mail-forward\" ></i></span>
            <li> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</li>
             </div>
             <div class=\"input-group\"><strong> Image: </strong>
            <span class=\"input-group\" ><i class=\"fa fa-file-image\" ></i></span>
            <li>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "</li>
             </div>
             <div class=\"input-group\"><strong> Mot de passe actuel: </strong>
            <span class=\"input-group\" ><i class=\"fa fa-lock\" ></i></span>
            <li> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget');
        echo "</li>
             </div>
        </ul> 
  
    <input type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-action\"/>
    </div>
     ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  82 => 37,  75 => 33,  68 => 29,  61 => 25,  54 => 21,  47 => 17,  40 => 13,  33 => 9,  22 => 3,  19 => 2,);
    }
}
