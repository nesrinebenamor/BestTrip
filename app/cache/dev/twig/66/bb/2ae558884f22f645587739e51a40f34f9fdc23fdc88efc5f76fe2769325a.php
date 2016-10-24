<?php

/* MyAppFrontBundle:Recommandation:show.html.twig */
class __TwigTemplate_66bb2ae558884f22f645587739e51a40f34f9fdc23fdc88efc5f76fe2769325a extends Twig_Template
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
            echo "    <h1>Les détails de la recommandation</h1>
     ";
            // line 5
            if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estcompagnie", array()))) {
                // line 6
                echo "         <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Adresse Du lieu</th>
                <td>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Contenu de la recommandation</th>
                <td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu", array()), "html", null, true);
                echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
                // line 21
                echo $this->env->getExtension('routing')->getPath("recommandation");
                echo "\">
            Back to the list
        </a>
    </li>
    <li>
    </li>
    <li>";
                // line 27
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
                echo "</li>
</ul>
         ";
            } else {
                // line 30
                echo "             
             <table class=\"record_properties\">
        <tbody>
             <tr>
                <th>Nom de la compagnie</th>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Contenu de la recommandation</th>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu", array()), "html", null, true);
                echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
                // line 46
                echo $this->env->getExtension('routing')->getPath("recommandation");
                echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recommandation_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\">
            Edit
        </a>
    </li>
    <li>";
                // line 55
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
                echo "</li>
</ul>
";
                // line 57
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'rest');
                echo "
         ";
            }
        } else {
            // line 60
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
";
        }
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  128 => 57,  123 => 55,  116 => 51,  108 => 46,  98 => 39,  91 => 35,  84 => 30,  78 => 27,  69 => 21,  59 => 14,  52 => 10,  46 => 6,  44 => 5,  41 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
