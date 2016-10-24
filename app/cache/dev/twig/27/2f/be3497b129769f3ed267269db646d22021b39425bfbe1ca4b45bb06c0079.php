<?php

/* MyAppFrontBundle:Guide:new.html.twig */
class __TwigTemplate_272fbe3497b129769f3ed267269db646d22021b39425bfbe1ca4b45bb06c0079 extends Twig_Template
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
        echo "<style type=\"text/css\">
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
    
    <h1 align=\"center\">Guide creation</h1>
    <form method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("Guide_create");
        echo "\">
        <div id=\"moncadre\">
    <div style=\"margin-right: 100 px;\">
    <label>Nom</label>
 ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div style=\"margin-right: 100 px;\">
    <label>Resume</label>
 ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "resume", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div style=\"margin-right: 100 px;\">
    <label>Prix</label>
 ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>

<div style=\"margin-right: 100 px;\">
    <label>Date</label>
 ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
 

        </div>
";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    </form>

        <ul class=\"record_actions\">
    <li>
        
<button class=\"btn btn-block btn-primary\"   href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" onclick=\"self.location.href=('";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "')\" style=\"width: 300px;\">Retour à la liste</button>

    </li>
</ul>
        <div  id=\"googleMap\" style=\"width:1200px;height:380px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Guide:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 47,  94 => 41,  86 => 36,  78 => 31,  70 => 26,  62 => 21,  55 => 17,  39 => 3,  36 => 2,  11 => 1,);
    }
}
