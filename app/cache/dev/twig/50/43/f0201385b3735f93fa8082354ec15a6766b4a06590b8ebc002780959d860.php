<?php

/* MyAppFrontBundle:Recommandation:modifier.html.twig */
class __TwigTemplate_5043f0201385b3735f93fa8082354ec15a6766b4a06590b8ebc002780959d860 extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "<h1>Modifier la recommandation </h1>
<form action=\"\" method=\"post\" ";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
            echo ">
  <table>
    <tr> 
    <td>   Nom:</td>
    <td>";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'widget');
            echo "</td>
    </tr>
    <tr>
    <td>   Adresse:</td>
    <td>";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse", array()), 'widget');
            echo "</td>
    </tr>   
    <tr>  
    <td>   Contenu:</td>
    <td>";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "contenu", array()), 'widget');
            echo "</td>
    </tr>
     <tr>  
    <td>   EstCompagnie:</td>
    <td>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "estCompagnie", array()), 'widget');
            echo "</td>
    </tr>
    <tr>  
    <td> </td>
    <td><input type=\"submit\" value=\"Modifier\" class=\"btn btn-action\"/></td>
    </tr>
   </table>    
   ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
            echo "
</form>
";
        } else {
            // line 31
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
";
        }
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  82 => 28,  72 => 21,  65 => 17,  58 => 13,  51 => 9,  44 => 5,  41 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
