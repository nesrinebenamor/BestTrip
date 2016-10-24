<?php

/* MyAppFrontBundle:ReponseD:ListeReponses.html.twig */
class __TwigTemplate_91c68bb12150a6b4eee76abd339fea9beae0e08df29fc4a10e73bc84f623be99 extends Twig_Template
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
        .forum{
            width:100%;
            padding: .8em 0.5em;
            margin: .5em 0 1em 0;
            color: #000;
            font-size: 15px;
            outline: none;
            box-shadow: 1px 1px rgb(219, 219, 214);
            background: rgb(233, 237, 252);
            border-radius: 9px;
            border: none;
            font-family: 'Lato', sans-serif;
        }
    </style>
    <br>
    <div class=\"CSSTableGenerator\" > 
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sujet"]) ? $context["sujet"] : $this->getContext($context, "sujet")));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 21
            echo "            <div class=\"forum\"  >
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "titre", array()), "html", null, true);
            echo "
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "text", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) ? $context["reponses"] : $this->getContext($context, "reponses")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "
            <div class=\"forum\"  >
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <form method=\"POST\">
            <div id=\"moncadre\">
                <div style=\"margin-right: 100 px;\">
                    <label>Contenu</label>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <br>
                <div>
                    <input type=\"submit\" value=\"Ajouter\" style=\"width: 300px;\" class=\"btn btn-block btn-primary\" >
                </div>
            </div>
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:ReponseD:ListeReponses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  104 => 36,  98 => 32,  89 => 29,  85 => 27,  81 => 26,  78 => 25,  69 => 23,  65 => 22,  62 => 21,  58 => 20,  39 => 3,  36 => 2,  11 => 1,);
    }
}
