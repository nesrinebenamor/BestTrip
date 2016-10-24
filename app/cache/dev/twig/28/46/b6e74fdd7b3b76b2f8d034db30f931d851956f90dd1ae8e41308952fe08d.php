<?php

/* MyAppFrontBundle:Experience:show.html.twig */
class __TwigTemplate_2846b6e74fdd7b3b76b2f8d034db30f931d851956f90dd1ae8e41308952fe08d extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
    <h1>Experiences</h1>

    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "     
        <br><br><br>
        <div id=\"experience\"  class=\"expression  story-expression  is-link\">
            <div href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_experience", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" class=\"expression-content\" onclick=\"self.location.href=('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_experience", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "')\">
                <div class=\"title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "titre", array()), "html", null, true);
            echo "</div> 
                <div class=\"content\"> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "
                    <div> Date : ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</div>
                    <div> Date Fin : ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "datefin", array()), "Y-m-d"), "html", null, true);
            echo "</div>
                    <div> Dépense : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "depense", array()), "html", null, true);
            echo "</div>
 <div> Pays : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "pays", array()), "html", null, true);
            echo "</div>
                </div>
                <div class=\"foot\">
                    <span class=\"member\"></span>
                </div>
            </div>

            <div class=\"interactions ep-button-bar \">
                <form id=\"like-story-5659210-button-form\" class=\"like-button-form like-story-form\" action=\"\" method=\"post\" enctype=\"\">
                    <input id=\"\" name=\"_csrf\" value=\"20374722a725921e04da0e3dea8dea66\" type=\"hidden\">
                    <span class=\"ep-form-status-msg \"></span>
                    <div class=\"form-content\">
                        <input name=\"modelType\" value=\"Story\" type=\"hidden\">
                        <input name=\"modelId\" value=\"5659210\" type=\"hidden\">
                        <input class=\"action\" name=\"action\" value=\"like\" type=\"hidden\">
                        
                    </div>
                    <div class=\"form-actions\">
                    </div>
                </form>
                <form id=\"respond-form-Story-5659210\" class=\"respond-form indicate-loading \" action=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commenter_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" enctype=\"\">
                    <input type=\"hidden\" id=\"\" name=\"_csrf\" value=\"20374722a725921e04da0e3dea8dea66\" />
                    <h3 class=\"respond-form-title\">Commentaire</h3>
                    <span class=\"ep-form-status-msg \"></span>
                    <div class=\"form-content\">
                        <textarea id=\"respond-form-Story-5659210-textarea\" name=\"com\" placeholder=\"Votre Commentaire\"></textarea>
                        <button type=\"submit\" onclick=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commenter_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">commenter</button>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("facebook-php-sdk-master/src/envoyer.php"), "html", null, true);
            echo "\" action=\"\">Partager</a>
                    </div>
                </form>
            </div>
                 
        </div> 
                   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "     
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Experience:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  115 => 45,  111 => 44,  102 => 38,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  53 => 12,  48 => 9,  44 => 8,  39 => 5,  36 => 4,  11 => 1,);
    }
}
