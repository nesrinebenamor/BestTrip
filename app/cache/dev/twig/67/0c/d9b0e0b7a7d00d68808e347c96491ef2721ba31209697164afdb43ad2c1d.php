<?php

/* MyAppFrontBundle:Recommandation:index.html.twig */
class __TwigTemplate_670cd9b0e0b7a7d00d68808e347c96491ef2721ba31209697164afdb43ad2c1d extends Twig_Template
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
            'a2' => array($this, 'block_a2'),
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
    public function block_a2($context, array $blocks = array())
    {
        // line 3
        echo "    active
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "        <div class=\"box\" >
            <div class=\"box-header\" >
                 <h3>La liste des recommandations</h3>
            </div>
            <div class=\"box-body\">
       <table id=\"example1_wrapper\" class=\"table table-bordered table-striped\"> 
        <thead>
            <tr>
                <th>Contenu de la recommandation</th>
                <th>Nom de la compagnie</th>
                <th>Adresse du lieu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 23
                echo "            <tr>
                <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "contenu", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
                echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recommandation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Voir de prés</a>
                    </li>
                     <li>
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_recommandation", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a>
                    </li>
                     <li>
                        <a href=\"";
                // line 36
                echo $this->env->getExtension('routing')->getPath("chart_compagnie");
                echo "\">Consulter les statistiques des recommandations compagnies</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 39
                echo $this->env->getExtension('routing')->getPath("chart_lieu");
                echo "\">Consulter les statistiques des recommandations lieux</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </tbody>
    </table>
            </div>
     </div>
   ";
        }
        // line 50
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  119 => 45,  107 => 39,  101 => 36,  95 => 33,  89 => 30,  82 => 26,  78 => 25,  74 => 24,  71 => 23,  67 => 22,  50 => 7,  48 => 6,  45 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
