<?php

/* MyAppFrontBundle:Experience:showDetail.html.twig */
class __TwigTemplate_fdcbc566f01e7a7ca80b53e4e01f6e76ed0dbeadec2096311f2df78124e491d8 extends Twig_Template
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
        echo "    <h1>Experience</h1>


    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "        <br><br>
        <div class=\"expression  story-expression\">
            <div class=\"expression-content\">
                <div>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" style=\"padding-left: 627px;\"><i class=\"fa fa-edit\"></i> Modifier</a>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" style=\"padding-left: 627px;\"><i class=\"fa fa-trash-o\"></i> Supprimer</a>
            </div>
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
                    
                    <label>Images</label>
                    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                echo "                       
                        <div>                            
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" style=\"padding-left: 2px;left: 623px;\"><i class=\"fa fa-edit\"></i></a>
                            <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_images", array("id" => $this->getAttribute($context["j"], "id", array()), "id_exp" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" style=\"padding-left: 3px;left: 627px;\"><i class=\"fa fa-trash-o\"></i></a>
                            <br>
                            <label>Discription</label>
                            <div>
                                ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "description", array()), "html", null, true);
                echo "
                            </div>
                            <img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                echo "/upload/experience/images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "source", array()), "html", null, true);
                echo "\"/>
                        </div>
                        <br><br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  
                    ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 34
                echo "                        <video src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                echo "/upload/experience/video/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "source", array()), "html", null, true);
                echo "\" controls></video>
                        
                        <div>
                            <label>Discription</label>
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "extension", array()), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " 
                </div>
                <div class=\"foot\">
                    <span class=\"member\"></span>
                </div>
            </div>           
        </div> 
                <div>
           ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 49
                echo "                                             
                        <div class=\"commentaire\">
                            
                            ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "contenu", array()), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  
                </div>
                    
                    <form id=\"respond-form-Story-5659210\" class=\"respond-form indicate-loading \" action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commenter_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" enctype=\"\">
                    <input type=\"hidden\" id=\"\" name=\"_csrf\" value=\"20374722a725921e04da0e3dea8dea66\" />
                   
                    <span class=\"ep-form-status-msg \"></span>
                    <div class=\"form-content\">
                        <textarea id=\"respond-form-Story-5659210-textarea\" name=\"com\" placeholder=\"Votre Commentaire\" style=\"width: 100%;
\theight: 145px;
\toutline: none;
\tresize: none;
\tpadding: .5em;
\tcolor: #000;
\tfont-size: 15px;
\tbox-shadow: 1px 1px rgb(219, 219, 214);
\tbackground: rgb(244, 245, 245);
\tborder-radius: 3px;
\tborder: none;
\tfont-family: 'Karma', serif;\"></textarea>
                        <button type=\"submit\" onclick=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commenter_experiences", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">commenter</button>
                    </div>
                </form>
                    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Experience:showDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 74,  171 => 57,  166 => 54,  157 => 52,  152 => 49,  148 => 48,  138 => 40,  129 => 38,  119 => 34,  115 => 33,  112 => 32,  100 => 29,  95 => 27,  88 => 23,  84 => 22,  77 => 20,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  54 => 12,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
