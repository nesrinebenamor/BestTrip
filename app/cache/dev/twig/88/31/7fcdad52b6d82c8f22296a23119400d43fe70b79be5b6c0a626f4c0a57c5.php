<?php

/* MyAppUserBundle:Registration:email.txt.twig */
class __TwigTemplate_88317fcdad52b6d82c8f22296a23119400d43fe70b79be5b6c0a626f4c0a57c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 28
        echo "
Best Trip Admin
";
        // line 30
        $this->displayBlock('body_html', $context, $blocks);
        // line 31
        echo "
";
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration Email confirm", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "MyAppUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo "    Welcome to Our Site Best Trip , ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo "!                                                

To confirm your email, please follow this link:                                                                    
";
        // line 11
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

You will be able to log-in using the username or email you given:                                        

Username : ";
        // line 15
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo "                                                                                                         
Email    : ";
        // line 16
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array());
        echo "                                                                                                 

If you received this e-mail in error just ignore this message. No further actions are required from you.                  



                                                     *****                                                           

                                                 See you soon!
    ";
    }

    // line 30
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Registration:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  67 => 16,  63 => 15,  56 => 11,  49 => 8,  46 => 7,  40 => 4,  37 => 2,  32 => 31,  30 => 30,  26 => 28,  24 => 7,  22 => 2,);
    }
}
