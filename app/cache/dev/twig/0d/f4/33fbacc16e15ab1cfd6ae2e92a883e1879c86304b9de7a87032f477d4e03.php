<?php

/* MyAppFrontBundle:Experience:newPhoto.html.twig */
class __TwigTemplate_0df433fbacc16e15ab1cfd6ae2e92a883e1879c86304b9de7a87032f477d4e03 extends Twig_Template
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
        echo "
    <form method=\"POST\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("experience_create");
        echo "\" class=\"form-light mt-20\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'enctype');
        echo ">
<input type=\"hidden\" name=\"MAX_SIZE\" value=\"350000\"/>
        
        <div>
            <label>Image</label>
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "source", array()), 'widget');
        echo "
            
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        

        <button type=\"submit\" class=\"btn btn-two\">Envoyer Photo</button>

        
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'rest');
        echo "
       
    </form>
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Experience:newPhoto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  57 => 11,  52 => 9,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
