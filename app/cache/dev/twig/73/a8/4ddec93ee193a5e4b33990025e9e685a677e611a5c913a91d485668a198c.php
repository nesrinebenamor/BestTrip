<?php

/* MyAppFrontBundle:Default:index.html.twig */
class __TwigTemplate_73a84ddec93ee193a5e4b33990025e9e685a677e611a5c913a91d485668a198c extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "    
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "
    ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "resume", array()), "html", null, true);
            echo "
    ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "
    
    ";
            // line 7
            if ($this->getAttribute($context["i"], "date", array())) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
                echo " ";
            }
            // line 8
            echo "    
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  39 => 7,  34 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
