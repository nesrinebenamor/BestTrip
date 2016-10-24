<?php

/* MyAppUserBundle:Utilisateur:show.html.twig */
class __TwigTemplate_c3536a4a9e94ff2aa77fdada03a783fb4625c11ac3a708b40b571659fdb669de extends Twig_Template
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
            'bodyshow' => array($this, 'block_bodyshow'),
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

    // line 3
    public function block_bodyshow($context, array $blocks = array())
    {
        // line 4
        echo "<body>
    <h2 class=\"indent-left margin-bot\">Les informations de l'Utilisateur</h2>
             <ul>Nom d'utilisateur : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "
            <li>Nom: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</li>
            <li>Prenom: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</li>
            <li>Age: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "age", array()), "html", null, true);
        echo "</li>
            <li>Email: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</li>
            </ul>
     

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("utilisateur");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_delete_admin", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Delete
        </a>
    </li>
</ul>
</body>
";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Utilisateur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  68 => 16,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
