<?php

/* MyAppFrontBundle:Recommandation:rechercher.html.twig */
class __TwigTemplate_f5d15eec03bb6a0ecf5c111bc41cbc69dc00363a1503e0653ca4ceccba61ae22 extends Twig_Template
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
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "<html>
    <head><h1>Rechercher une Recommandation </h1></head><br>
    <body>
        <form method=\"POST\" action=\"\">
    Entrer une adresse<input type=\"text\" name=\"search\" class=\"form-group\"/>
    <input type=\"submit\" value=\"rechercher\" />
        </form>
      <form method=\"POST\" action=\"\">
    Entrer une compagnie<input type=\"text\" name=\"search1\" class=\"form-group\"/>
    <input type=\"submit\" value=\"rechercher\" />
        </form>   
        
    <br><br>

<ul>
    ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recommandation"]) ? $context["recommandation"] : $this->getContext($context, "recommandation")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 20
                echo "    
    <ul> 
        <li><b>Nom :</b> ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
                echo " </li>
        <li><b>Adresse :</b> ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " </li>
        <li><b>Contenu:</b> ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "contenu", array()), "html", null, true);
                echo " </li>
        <li><b>Nombre de recommandation:</b> ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombre", array()), "html", null, true);
                echo " </li>
        <li><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_recommandation", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a></li>
        <li><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inc_recommandation", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">Recommanderer</a></li>
    </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "</ul>
    </body>
</html>
";
        } else {
            // line 34
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
";
        }
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:rechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  96 => 30,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  63 => 20,  59 => 19,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
