<?php

/* MyAppFrontBundle:SujetU:ListeSujetUser.html.twig */
class __TwigTemplate_e3412802d698bbeba6f3d006a9ec642ecd73f484fe66677f897b13e8540064fe extends Twig_Template
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
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<style type=\"text/css\">
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
    background:-o-linear-gradient(bottom, #4c4c4c 5%, #4c4c4c 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4c4c4c), color-stop(1, #4c4c4c) );
  background:-moz-linear-gradient( center top, #4c4c4c 5%, #4c4c4c 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\"#4c4c4c\", endColorstr=\"#4c4c4c\");  background: -o-linear-gradient(top,#4c4c4c,4c4c4c);

  background-color:#4c4c4c;
  border:0px solid #000000;
  text-align:center;
  border-width:0px 0px 1px 1px;
  font-size:14px;
  font-family:Arial;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #4c4c4c 5%, #4c4c4c 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4c4c4c), color-stop(1, #4c4c4c) );
  background:-moz-linear-gradient( center top, #4c4c4c 5%, #4c4c4c 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\"#4c4c4c\", endColorstr=\"#4c4c4c\");  background: -o-linear-gradient(top,#4c4c4c,4c4c4c);

  background-color:#4c4c4c;
}
.CSSTableGenerator tr:first-child td:first-child{
  border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
  border-width:0px 0px 1px 1px;
}
</style>
<br>
<div class=\"CSSTableGenerator\" >

<table>
    <tr>
        <td>Titre</td>
        <td>Text</td>
        <td>Catégorie</td> 
        <td>Supprimer</td> 
        <td>Réponse</td> 
        
    
    </tr>
        ";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sujets"]) ? $context["sujets"] : $this->getContext($context, "sujets")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 117
            echo "        <tr>
    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "titre", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "text", array()), "html", null, true);
            echo "</td>
    
    <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "categorie", array()), "html", null, true);
            echo "</td>
    
    <td><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \">supprimer </a></td>
    <td><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_reponse_User", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \"> Réponse </a></td>
    

        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "    </table>
    </div>
    
    ";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:SujetU:ListeSujetUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 129,  179 => 124,  175 => 123,  170 => 121,  165 => 119,  161 => 118,  158 => 117,  154 => 116,  39 => 3,  36 => 2,  11 => 1,);
    }
}
