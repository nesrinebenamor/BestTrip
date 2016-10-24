<?php

/* MyAppFrontBundle:Guide:edit.html.twig */
class __TwigTemplate_c9904a7ae6af0663cdd00fdfe4fd44ac12f234a48809547609c39e7fb2d7f9c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppFrontBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Guide edit</h1>

    <form method=\"post\" action=\"\">
    <div style=\"margin-right: 100 px;\">
    <label>Nom</label>
 ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div style=\"margin-right: 100 px;\">
    <label>Resume</label>
 ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "resume", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div style=\"margin-right: 100 px;\">
    <label>Prix</label>
 ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div style=\"margin-right: 100 px;\">
    <label>Date</label>
 ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
 <input type=\"submit\" value=\"Modifier\" 
    style=\"
        padding-top: 6px;
    margin-top: 32px;\"
>
";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "

    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("Guide");
        echo "\">
            Back to the list
        </a>
    </li>
    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
</ul>

";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Guide:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  89 => 36,  80 => 30,  70 => 23,  62 => 18,  54 => 13,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
