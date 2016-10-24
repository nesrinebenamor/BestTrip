<?php

/* MyAppFrontBundle:Recommandation:ajout.html.twig */
class __TwigTemplate_a1155c4ffdd544b709150750f747099b6a9353a6ee7de0d25957a24d403a0c3a extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "<h3><strong><center>Ajouter une nouvelle recommandation</center></strong></h3>
<form action=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("ajout_recommandation");
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " method=\"POST\"  enctype=\"multipart/form-data\">
    <div class=\"input-group\">
   ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
            echo "
   ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
            echo "
    </div>
    <div class=\"input-group\">
   ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
            echo "
   ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
            echo "
    </div>
    <div class=\"input-group\">
   ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contenu")));
            echo "
   ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
            echo "
    </div>
     <div class=\"input-group\">
   ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estCompagnie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
   ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estCompagnie", array()), 'errors');
            echo "
    </div>
    <br>
    <div><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-action\"/></div>
    ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
</form>
";
        } else {
            // line 28
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
";
        }
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Recommandation:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  93 => 25,  86 => 21,  82 => 20,  76 => 17,  72 => 16,  66 => 13,  62 => 12,  56 => 9,  52 => 8,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
