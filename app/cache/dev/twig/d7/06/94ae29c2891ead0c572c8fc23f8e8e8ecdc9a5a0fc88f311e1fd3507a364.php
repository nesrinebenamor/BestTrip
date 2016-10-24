<?php

/* MyAppFrontBundle:Recommandation:affichage.html.twig */
class __TwigTemplate_d70694ae29c2891ead0c572c8fc23f8e8e8ecdc9a5a0fc88f311e1fd3507a364 extends Twig_Template
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
        echo "<style type=\"text/css\">
.CSSTableGenerator {
  margin:0px;padding:0px;
  width:100%;
  box-shadow: 10px 10px 5px #888888;
  border:1px solid #000000;
  
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
  
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
  
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
  
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
  width:100%;
  height:100%;
  margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
  background-color:#ffffff;
    

}
.CSSTableGenerator td{
  vertical-align:middle;
  
  background-color:#e5e5e5;

  border:1px solid #000000;
  border-width:0px 1px 1px 0px;
  text-align:left;
  padding:7px;
  font-size:12px;
  font-family:Arial;
  font-weight:normal;
  color:#000000;
}.CSSTableGenerator tr:last-child td{
  border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
  border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
  border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
    background:-o-linear-gradient(bottom, #01B0F0 5%, #01B0F0 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #01B0F0), color-stop(1, #01B0F0) );
  background:-moz-linear-gradient( center top, #01B0F0 5%, #01B0F0 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\"#4c4c4c\", endColorstr=\"#4c4c4c\");  background: -o-linear-gradient(top,#01B0F0,01B0F0);

  background-color:#01B0F0;
  border:0px solid #000000;
  text-align:center;
  border-width:0px 0px 1px 1px;
  font-size:14px;
  font-family:Arial;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #01B0F0 5%, #01B0F0 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #01B0F0), color-stop(1, #01B0F0) );
  background:-moz-linear-gradient( center top, #4c4c4c 5%, #4c4c4c 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\"#01B0F0\", endColorstr=\"#01B0F0\");  background: -o-linear-gradient(top,#01B0F0,01B0F0);

  background-color:#01B0F0;
}
.CSSTableGenerator tr:first-child td:first-child{
  border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
  border-width:0px 0px 1px 1px;
}
</style>


     ";
        // line 104
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 105
            echo "    
         <div>
     <table class=\"CSSTableGenerator\">
         <tr>
             <td>Nom</td> 
             <td>Adresse</td>
             <td>Contenu</td>
             <td>Nombre de recommandation</td>
             <td>Modification</td>
             <td>Suppression</td>
             <td>Recommander</td>
        </tr>    
              ";
            // line 117
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "recommandations"));
            foreach ($context['_seq'] as $context["_key"] => $context["recommandation"]) {
                // line 118
                echo "        <tr>
            <td>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["recommandation"], "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["recommandation"], "adresse", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["recommandation"], "contenu", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["recommandation"], "nombre", array()), "html", null, true);
                echo "</td>

            <td><button class=\"btn btn-block btn-primary\"   href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modif_recommandation", array("id" => $this->getAttribute($context["recommandation"], "id", array()))), "html", null, true);
                echo "\" onclick=\"self.location.href=('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modif_recommandation", array("id" => $this->getAttribute($context["recommandation"], "id", array()))), "html", null, true);
                echo "')\" style=\"width: 300px;\">Modifier</button></td>
            <td><button class=\"btn btn-block btn-primary\"   href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_recommandation", array("id" => $this->getAttribute($context["recommandation"], "id", array()))), "html", null, true);
                echo "\" onclick=\"self.location.href=('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_recommandation", array("id" => $this->getAttribute($context["recommandation"], "id", array()))), "html", null, true);
                echo "')\" nstyle=\"width: 300pationx;\">Supprimer</button></td>
            <td><button class=\"btn btn-block btn-primary\"   href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inc_recommandation", array("id" => $this->getAttribute($context["recommandation"], "id", array()))), "html", null, true);
                echo "\" onclick=\"self.location.href=('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inc_recommandation", array("id" => $this->getAttribute($context["recommandation"], "id", array()))), "html", null, true);
                echo "')\" nstyle=\"width: 300pationx;\">Recommanderer</button></td>
        </tr>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommandation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "     </table>
         </div>
     <br><br>
     <table>
         <td><button class=\"btn btn-block btn-primary\" href=\"";
            // line 133
            echo $this->env->getExtension('routing')->getPath("ajout_recommandation");
            echo "\" onclick=\"self.location.href=('";
            echo $this->env->getExtension('routing')->getPath("ajout_recommandation");
            echo "')\" style=\"width: 300px;\">Deposer une recommandation</button></td>
         <td></td>
         <td></td>
         <td><button class=\"btn btn-block btn-primary\" href=\"";
            // line 136
            echo $this->env->getExtension('routing')->getPath("chart_compagnie_user");
            echo "\" onclick=\"self.location.href=('";
            echo $this->env->getExtension('routing')->getPath("chart_compagnie_user");
            echo "')\" style=\"width: 300px;\">Consulter les compagnies</button></td>
         <td></td>
         <td></td>
         <td><button class=\"btn btn-block btn-primary\" href=\"";
            // line 139
            echo $this->env->getExtension('routing')->getPath("chart_lieu_user");
            echo "\" onclick=\"self.location.href=('";
            echo $this->env->getExtension('routing')->getPath("chart_lieu_user");
            echo "')\" style=\"width: 300px;\">Consulter les lieux</button></td>
     </table>
    ";
        } else {
            // line 142
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
    ";
        }
        // line 144
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 144,  235 => 142,  227 => 139,  219 => 136,  211 => 133,  205 => 129,  194 => 126,  188 => 125,  182 => 124,  177 => 122,  173 => 121,  169 => 120,  165 => 119,  162 => 118,  158 => 117,  144 => 105,  142 => 104,  39 => 3,  36 => 2,  11 => 1,);
    }
}
