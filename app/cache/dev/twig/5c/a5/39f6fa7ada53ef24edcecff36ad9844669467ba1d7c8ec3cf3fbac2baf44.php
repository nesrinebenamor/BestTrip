<?php

/* MyAppUserBundle:Profile:preferences.html.twig */
class __TwigTemplate_5ca539f6fa7ada53ef24edcecff36ad9844669467ba1d7c8ec3cf3fbac2baf44 extends Twig_Template
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
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array())) {
            // line 2
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getWebPath", array(), "method")), "html", null, true);
            echo "\" />
";
        } else {
            // line 4
            echo "    Pas d'image de profil chargée !
";
        }
        // line 6
        echo "
<h1>Charger une image de profil</h1>

<form action=\"#\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"Uploader\" />
</form>";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Profile:preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  36 => 9,  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
