<?php

/* MyAppUserBundle:Utilisateur:listerUtilisateur.html.twig */
class __TwigTemplate_b78adb89ba462063cdfd06e027694eef982276bf3ccba67b2a0a1ed3bf78ada4 extends Twig_Template
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
            'contentuser' => array($this, 'block_contentuser'),
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
    public function block_contentuser($context, array $blocks = array())
    {
        // line 3
        echo "
<form id=\"form_recherche\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("myapp_utilisateur_rechercher");
        echo "\" method=\"POST\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Rechercher\" id=\"utilisateurrecherche_motcle\" />
</form>
<div class=\"loading\"></div>
<div id=\"resultats_recherche\"> 
";
        // line 10
        $this->env->loadTemplate("MyAppUserBundle:Utilisateur:listUtilisateur.html.twig")->display(array_merge($context, array("utilisateurs" => (isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")))));
        // line 11
        echo "</div>

<p><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("utilisateur_create");
        echo "\">Ajouter un utilisateur</a><p>

<script>
\$(\".loading\").hide();
\$(\"#form_recherche\").submit(function(){ 
    \$(\".loading\").show();
    var motcle = \$(\"#utilisateurrecherche_motcle\").val();
    var DATA = 'motcle=' + motcle;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("myapp_utilisateur_rechercher");
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
           \$('#resultats_recherche').html(data);
           \$(\".loading\").hide();
        }
    });    
    return false;
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Utilisateur:listerUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  60 => 13,  56 => 11,  54 => 10,  46 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
