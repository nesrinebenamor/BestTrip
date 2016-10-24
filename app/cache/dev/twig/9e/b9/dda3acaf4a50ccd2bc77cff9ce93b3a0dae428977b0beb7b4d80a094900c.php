<?php

/* MyAppFrontBundle:Recommandation:list.html.twig */
class __TwigTemplate_9eb9dda3acaf4a50ccd2bc77cff9ce93b3a0dae428977b0beb7b4d80a094900c extends Twig_Template
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
        echo "      ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "<h1> Liste des recommandations</h1>
<br>
<ul>
    ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recommandation"]) ? $context["recommandation"] : $this->getContext($context, "recommandation")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 8
                echo "         ";
                if ((null === $this->getAttribute($context["e"], "estcompagnie", array()))) {
                    // line 9
                    echo "    <ul> 
        <li><b>Adresse du lieu</b> ";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                    echo " </li><br>
        <li><b>Contenu:</b> ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "contenu", array()), "html", null, true);
                    echo " </li><br>
        <li><b>Nombre de recommandation:</b> ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombre", array()), "html", null, true);
                    echo " </li><br> 
 <a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_recommandation", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                    echo "\">Supprimer</a> 
 <a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recommandation_show", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                    echo "\">Voir de près</a> <br>
 
 <br><br><br>
 
    </ul> 
  <ul>
        <li>
            <a href=\"";
                    // line 21
                    echo $this->env->getExtension('routing')->getPath("recommandation_new");
                    echo "\">
               Déposer une nouvelle recommandation
            </a>
        </li>
    </ul>
    ";
                } else {
                    // line 27
                    echo "         <ul> 
             <li><b>Nom de la compagnie:</b> ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
                    echo " </li><br>
             <li><b>Contenu:</b> ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "contenu", array()), "html", null, true);
                    echo " </li><br>
             <li><b>Nombre de recommandation:</b> ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombre", array()), "html", null, true);
                    echo " </li><br>
 <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_recommandation", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                    echo "\">Supprimer</a> 
 <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recommandation_show", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                    echo "\">Voir de près</a>
    </ul>  
        
       ";
                }
                // line 35
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "   </ul>
    <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("ajout_recommandation");
            echo "\">Deposer une nouvelle recommandation</a>
      <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("chart_compagnie");
            echo "\">Consulter les compagnies</a>
      <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("chart_lieu");
            echo "\">Consulter les lieux</a>
   ";
        } else {
            // line 42
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
";
        }
        // line 43
        echo " 
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  141 => 42,  136 => 40,  132 => 39,  128 => 38,  125 => 37,  118 => 35,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  92 => 27,  83 => 21,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
