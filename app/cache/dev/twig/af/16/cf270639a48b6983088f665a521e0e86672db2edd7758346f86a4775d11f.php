<?php

/* MyAppFrontBundle:Recommandation:new.html.twig */
class __TwigTemplate_af16cf270639a48b6983088f665a521e0e86672db2edd7758346f86a4775d11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppUserBundle::layoutBack.html.twig");
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
        return "MyAppUserBundle::layoutBack.html.twig";
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
            echo "    <h1>Que voulez vous recommander?</h1>

    ";
            // line 6
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        } else {
            // line 16
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
";
        }
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  52 => 10,  45 => 6,  41 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
