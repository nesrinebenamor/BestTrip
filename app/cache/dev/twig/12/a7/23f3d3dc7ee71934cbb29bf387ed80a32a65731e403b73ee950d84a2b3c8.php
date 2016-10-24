<?php

/* MyAppUserBundle:Page:contact.html.twig */
class __TwigTemplate_12a723f3d3dc7ee71934cbb29bf387ed80a32a65731e403b73ee950d84a2b3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppUserBundle::layoutC.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contact' => array($this, 'block_contact'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle::layoutC.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contact($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "      ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "    <header>
        <center><h1>Contactez Nous</h1><center>
    </header>
    
 ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 11
                echo "         <div class=\"blogger-notice\">
  ";
                // line 12
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
    <form action=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("MyApp_user_contact");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " class=\"fos_user_registration_register\">
        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        
    <div class=\"input-group-addon\">
     <span class=\"input-group\" ><i class=\"fa fa-user\" ></i></span>
   ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
            echo "
    </div>
    <br>
    <div class=\"input-group-addon\">
     <span class=\"input-group\" ><i class=\"fa fa-mail-forward\" ></i></span>
   ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Adresse Email")));
            echo "
    </div>
     <br>
    <div class=\"input-group-addon\">
     <span class=\"input-group\" ><i class=\"fa fa-envelope\" ></i></span>
   ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Subject")));
            echo "
    </div>
     <br>
    <div class=\"input-group-addon\">
     <span class=\"input-group\" ><i class=\"fa fa-book\" ></i></span>
   ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Body")));
            echo "
    </div>
     <br>
        <input type=\"submit\" value=\"Submit\" class=\"btn btn-block btn-success \"/>
         ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
    </form>
           ";
        } else {
            // line 43
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=http://localhost/ProjetBestTrip/web/app_dev.php/login\" />
    ";
        }
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  121 => 40,  114 => 36,  106 => 31,  98 => 26,  90 => 21,  83 => 17,  77 => 16,  74 => 15,  65 => 12,  62 => 11,  58 => 10,  52 => 6,  49 => 5,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
