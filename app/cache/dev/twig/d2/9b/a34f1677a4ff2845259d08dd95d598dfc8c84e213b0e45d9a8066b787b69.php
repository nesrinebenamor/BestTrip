<?php

/* MyAppFrontBundle:NewsletterD:listNewsletter.html.twig */
class __TwigTemplate_d29ba34f1677a4ff2845259d08dd95d598dfc8c84e213b0e45d9a8066b787b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppFrontBundle::layoutBack.html.twig");
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
        return "MyAppFrontBundle::layoutBack.html.twig";
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
    background:-o-linear-gradient(bottom, #3c8dbc 5%, #3c8dbc 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3c8dbc), color-stop(1, #3c8dbc) );
  background:-moz-linear-gradient( center top, #3c8dbc 5%, #3c8dbc 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\"#4c4c4c\", endColorstr=\"#4c4c4c\");  background: -o-linear-gradient(top,#3c8dbc,3c8dbc);

  background-color:#3c8dbc;
  border:0px solid #000000;
  text-align:center;
  border-width:0px 0px 1px 1px;
  font-size:14px;
  font-family:Arial;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #3c8dbc 5%, #3c8dbc 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3c8dbc), color-stop(1, #3c8dbc) );
  background:-moz-linear-gradient( center top, #3c8dbc 5%, #3c8dbc 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\"#3c8dbc\", endColorstr=\"#3c8dbc\");  background: -o-linear-gradient(top,#3c8dbc,3c8dbc);

  background-color:#3c8dbc;
}
.CSSTableGenerator tr:first-child td:first-child{
  border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
  border-width:0px 0px 1px 1px;
}
</style>
    <h1>LA LISTE DES NEWSLETTERS</h1>
    
    
 <td> <button class=\"btn btn-block btn-primary\" style=\"width: 300px;\"><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("recherche_news");
        echo "\"> CHERCHER  </a></button></td>        
    
    
    
    
    
    <div class=\"CSSTableGenerator\" >
        
<table border=\"1\">
    <tr>
        <th>NOM</th>
        <th>contenu</th>
        <th>DATE</th> 
        

    </tr>
        ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newsletter"]) ? $context["newsletter"] : $this->getContext($context, "newsletter")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 122
            echo "        <tr>
    <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    
   
     
   <td><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"> supprimer </a></td>
   <td><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo " \">  modifier </a></td>
   <td>
       <form method=\"POST\"> 
<input type=\"submit\" href=\"";
            // line 133
            echo $this->env->getExtension('routing')->getPath("my_app_mail_form");
            echo "\" onclick=\"self.location.href=('";
            echo $this->env->getExtension('routing')->getPath("my_app_mail_form");
            echo "')\" value=\"envoyer\"/>
</form>
   </td>
    
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "    </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:NewsletterD:listNewsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 139,  194 => 133,  188 => 130,  184 => 129,  177 => 125,  173 => 124,  169 => 123,  166 => 122,  162 => 121,  143 => 105,  39 => 3,  36 => 2,  11 => 1,);
    }
}
