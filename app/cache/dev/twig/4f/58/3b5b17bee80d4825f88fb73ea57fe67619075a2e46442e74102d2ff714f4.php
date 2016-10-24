<?php

/* MyAppFrontBundle:Guide:show.html.twig */
class __TwigTemplate_4f583b5b17bee80d4825f88fb73ea57fe67619075a2e46442e74102d2ff714f4 extends Twig_Template
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
    width:60%;
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
    <h1>Guide</h1>

    
      
    <ul>
         
        
                    <div class=\"forum\"  >  
              <li>  Nom :
                ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "
                </li>
            </div>
                <div class=\"forum\"  > 
               <li> Resume :
                ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume", array()), "html", null, true);
        echo "
                </li>
                </div>
                    
                    
            <div class=\"forum\"  > 
               <li> Prix :
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "
                </li>
                </div>
            <div class=\"forum\"  > 
                <li>Date :
                ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                </li>
                </div>
    </ul>  
     </div>

     <table>
         <tr>
             <td>
        
            <button class=\"btn btn-block btn-primary\"   href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("Guide");
        echo "\" onclick=\"self.location.href=('";
        echo $this->env->getExtension('routing')->getPath("Guide");
        echo "')\" style=\"width: 300px;\">Retour a la Liste</button>
             </td>
             <td>
        
            <button class=\"btn btn-block btn-primary\"   href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" onclick=\"self.location.href=('";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Guide_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "')\" style=\"width: 300px;\">Modifier</button>
             </td>
     </tr>
            
    

     </table>
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
<a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("my_app_front_pdf");
        echo "\" >pdf</a>

    <div>";
        // line 68
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Guide:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 68,  129 => 66,  125 => 65,  113 => 58,  104 => 54,  91 => 44,  83 => 39,  73 => 32,  65 => 27,  39 => 3,  36 => 2,  11 => 1,);
    }
}
