<?php

/* MyAppFrontBundle:Experience:showMyExperience.html.twig */
class __TwigTemplate_28524e465e32328a838ef7fd92a8830596dc289aca22fef1702e3a9a9b557314 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Experience</h1>

    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "       <br><br>
        <div id=\"experience\" href=\"#\" class=\"expression  story-expression  is-link\" onclick=\"self.location.href = ('";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_experience", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "')\">
            <div>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" style=\"padding-left: 627px;\"><i class=\"fa fa-edit\"></i> Modifier</a>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" style=\"padding-left: 627px;\"><i class=\"fa fa-trash-o\"></i> Supprimer</a>
            </div>
            <div class=\"expression-content\">
                <div class=\"title\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "titre", array()), "html", null, true);
            echo "</div> 
                <div class=\"content\"> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "
                    <div> Date : ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</div>
                    <div> Date Fin : ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "datefin", array()), "Y-m-d"), "html", null, true);
            echo "</div>
                    <div> Dépense : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "depense", array()), "html", null, true);
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
                        <button class=\"icon-btn\" title=\"Heart\">
                        </button>
                    </div>
                    <div class=\"form-actions\">
                    </div>
                </form>
                <form id=\"respond-form-Story-5659210\" class=\"respond-form indicate-loading \" action=\"http://www.experienceproject.com/ajax/respond\" method=\"post\" enctype=\"\">
                    <input type=\"hidden\" id=\"\" name=\"_csrf\" value=\"20374722a725921e04da0e3dea8dea66\" />
                    <h3 class=\"respond-form-title\">Your Response</h3>
                    <span class=\"ep-form-status-msg \"></span>
                    <div class=\"form-content\">
                        <textarea id=\"respond-form-Story-5659210-textarea\" name=\"text\" placeholder=\"Add a response...\"></textarea>
                    </div>
                    <div class=\"form-actions\">
                        <div class=\"reply-guidelines\">
                            Please respond with 
                            <a href=\"\" target=\"_blank\">authenticity, support, and respect</a>
                        </div>
                        <div class=\"cancel-or-submit\">
                            <span class=\"cancel-btn toggle-respond-form\">Cancel</span>
                            <div class=\"form-input-container -input-container submit-input-container\" id=\"respond-form-Story-5659210\">
                                <label for=\"respond-form-Story-5659210--input\"></label>
                                <input type=\"submit\" id=\"respond-form-Story-5659210--input\" class=\"ep-button ep-button-strong -input\" name=\"\" value=\"Post\" sfu=\"\" />
                                <div class=\"loading-indicator\"></div>
                                <span class=\"description\"></span>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"modelId\" value=\"5659210\" />
                        <input type=\"hidden\" name=\"modelType\" value=\"Story\" />
                        <div class=\"clear\"></div>
                    </div>
                </form>
            </div>
        </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Experience:showMyExperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 69,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  60 => 12,  56 => 11,  51 => 9,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
