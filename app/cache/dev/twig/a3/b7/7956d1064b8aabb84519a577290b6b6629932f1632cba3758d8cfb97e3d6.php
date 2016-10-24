<?php

/* MyAppFrontBundle:SujetD:Ajouter.html.twig */
class __TwigTemplate_a3b77956d1064b8aabb84519a577290b6b6629932f1632cba3758d8cfb97e3d6 extends Twig_Template
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
        echo "    <style type=\"text/css\">
        #moncadre {
        width:800px;
        margin:0 auto;
        padding:10px;
        background:#DDD;
        border:1px solid #DDD;
        border-radius:5px;
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        }
    </style>
    <h2 align=\"center\">Ajouter un Sujet</h2>
<form method=\"POST\">  
    <div id=\"moncadre\">

    <br>
<div style=\"margin-right: 100 px;\">
    <label>Titre</label>
 ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
    <br>

<div class=\"form-group\">
 <label>Text</label>
 ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div class=\"form-group\">
 <label>Catégorie</label>
 ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
<div>
<input type=\"submit\" value=\"Ajouter\" style=\"width: 300px;padding-left: 39px;margin-left: 250px;\" class=\"btn btn-block btn-primary\" >
</div>
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:SujetD:Ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  76 => 32,  69 => 28,  60 => 22,  39 => 3,  36 => 2,  11 => 1,);
    }
}
