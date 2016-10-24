<?php

/* MyAppFrontBundle:Recommandation:edit.html.twig */
class __TwigTemplate_7307e75afdd37ae7e0b4d1f53e60e4f8eab1f51e98d7cf78c13bde8190d8226b extends Twig_Template
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
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "    <h1>Modifier la recommandation</h1>

    ";
            // line 6
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
            echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("recommandation");
            echo "\">
           Retour à la liste de toutes les recommandations
        </a>
    </li>
    <li>";
            // line 14
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li>
</ul>
 ";
        } else {
            // line 17
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
";
        }
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  59 => 14,  52 => 10,  45 => 6,  41 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
