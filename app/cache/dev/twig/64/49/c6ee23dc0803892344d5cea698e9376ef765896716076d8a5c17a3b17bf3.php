<?php

/* MyAppFrontBundle:Guide:index.html.twig */
class __TwigTemplate_6449c6ee23dc0803892344d5cea698e9376ef765896716076d8a5c17a3b17bf3 extends Twig_Template
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
    <h1>Guide list</h1>
    <div class=\"CSSTableGenerator\">
    <table>
    
            <tr>                
                <td>Nom</td>
                <td>Resume</td>
                <td>Prix</td>
                <td>Date</td>
                <td>Actions</td>
            </tr>
        
        
        ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 116
            echo "            <tr>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 120
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li> 
            <button class=\"btn btn-block btn-primary\"   href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" onclick=\"self.location.href=('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "')\" style=\"width: 300px;\">Afficher</button>

                      
                    </li>
                    <br>
                    
                    <li>
           <button class=\"btn btn-block btn-primary\"   href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" onclick=\"self.location.href=('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "')\" style=\"width: 300px;\">Modifier</button>

                        
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        
    </table>

       </div>   
        <br>
            
                <button class=\"btn btn-block btn-primary\"   href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("Guide_new");
        echo "\" onclick=\"self.location.href=('";
        echo $this->env->getExtension('routing')->getPath("Guide_new");
        echo "')\" style=\"width: 300px;\">Ajouter un Guide</button>
        
     
    ";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Guide:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 145,  209 => 139,  193 => 131,  181 => 124,  172 => 120,  168 => 119,  164 => 118,  160 => 117,  157 => 116,  153 => 115,  39 => 3,  36 => 2,  11 => 1,);
    }
}
