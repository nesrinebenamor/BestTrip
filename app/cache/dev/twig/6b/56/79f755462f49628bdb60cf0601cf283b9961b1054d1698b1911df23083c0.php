<?php

/* MyAppFrontBundle:Experience:accueil.html.twig */
class __TwigTemplate_6b5679f755462f49628bdb60cf0601cf283b9961b1054d1698b1911df23083c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppFrontBundle::layoutIndex.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'avance' => array($this, 'block_avance'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppFrontBundle::layoutIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_avance($context, array $blocks = array())
    {
        echo " 

    <div class=\"top_bg\" style=\"padding-top: 0px;margin-top: 150px;\">
        <div class=\"wrap\">
            <div class=\"top_grids1\">
                <div class=\"top_grids_text\">
                    <h2>N'importe où, n'importe quand, on est là pour vous aider.</h2>
                    <p>Rechercher Les expériences Selon votre choix</p>
                </div>
                <form method=\"POST\">
                    <div class=\"res-form\">
                        <div class=\"reservation\" style=\"width: 573.21875px;\">
                            <h3 style=\"color : #EACFFF;\">Pays :</h3>
                            <div class=\"reservation_form\">\t
                                <select class=\"reservation_form select\" name=\"pays\">
                                    <option> Choisir </option> 
                                    <option value=\"Afghanistan\"> Afghanistan </option> 
                                    <option value=\"Afrique du Sud\"> Afrique du Sud </option>
                                    <option value=\"Albanie\"> Albanie </option>
                                    <option value=\"Algérie\"> Algérie </option>
                                    <option value=\"Allemagne\"> Allemagne </option> 
                                    <option value=\"Andorre\"> Andorre </option>
                                    <option value=\"Angola\"> Angola </option>
                                    <option value=\"Antigua-et-Barbuda\"> Antigua-et-Barbuda </option>
                                    <option value=\"Arabie saoudite\"> Arabie saoudite </option> 
                                    <option value=\"Argentine\"> Argentine</option>
                                    <option value=\"Arménie\"> Arménie </option>
                                    <option value=\"Australie\"> Australie </option>
                                    <option value=\"Autriche\"> Autriche </option> 
                                    <option value=\"Azerbaïdjan\"> Azerbaïdjan </option>
                                    <option value=\"Bahamas\"> Bahamas </option>
                                    <option value=\"Bahreïn\"> Bahreïn </option>
                                    <option value=\"Bangladesh\"> Bangladesh </option>
                                    <option value=\"Barbade\"> Barbade </option>
                                    <option value=\"Belgique\"> Belgique </option>
                                    <option value=\"Belize\"> Belize </option>
                                    <option value=\"Bénin\"> Bénin </option>
                                    <option value=\"Bhoutan\"> Bhoutan </option>
                                    <option value=\"Belarus\"> Belarus </option>
                                    <option value=\"Birmanie\"> Birmanie </option>
                                    <option value=\"Bolivie\"> Bolivie </option>
                                    <option value=\"Bosnie-Herzégovine\"> Bosnie-Herzégovine </option>
                                    <option value=\"Botswana\"> Botswana </option>
                                    <option value=\"Brésil\"> Brésil </option>
                                    <option value=\"Brunei\"> Brunei </option>
                                    <option value=\"Bulgarie\"> Bulgarie </option>
                                    <option value=\"Burkina\"> Burkina </option>
                                    <option value=\"Burundi\"> Burundi </option>
                                    <option value=\"Cambodge\"> Cambodge</option>
                                    <option value=\"Cameroun\"> Cameroun </option>
                                    <option value=\"Canada\"> Canada </option>
                                    <option value=\" îles du Cap-Vert\"> îles du Cap-Vert </option>
                                    <option value=\"République centrafricaine\"> République centrafricaine </option>
                                    <option value=\"Chine\"> Chine </option>
                                    <option value=\"Chypre\"> Chypre </option>
                                    <option value=\"Colombie\"> Colombie </option>
                                    <option value=\"Comores\"> Comores </option>
                                    <option value=\"Congo\"> Congo </option>
                                    <option value=\"République démocratique du Congo\"> République démocratique du Congo </option>
                                    <option value=\"Îles Cook\"> Îles Cook </option>
                                    <option value=\"Corée du Nord \">Corée du Nord </option>
                                    <option value=\"Corée du Sud\"> Corée du Sud </option>
                                    <option value=\" Costa Rica\"> Costa Rica </option>
                                    <option value=\"Côte d'Ivoire\"> Côte d'Ivoire </option>
                                    <option value=\"Croatie\"> Croatie </option>
                                    <option value=\"Cuba\"> Cuba </option>
                                    <option value=\"Danemark\"> Danemark </option>
                                    <option value=\"Djibouti\"> Djibouti </option>
                                    <option value=\"République dominicaine\"> République dominicaine </option>
                                    <option value=\"Dominique\"> Dominique </option>
                                    <option value=\"Égypte\"> Égypte </option>
                                    <option value=\"Émirats arabes unis\"> Émirats arabes unis </option>
                                    <option value=\"Équateur\"> Équateur </option>
                                    <option value=\"Érythrée\"> Érythrée </option>
                                    <option value=\"Espagne\"> Espagne </option>
                                    <option value=\"Estonie\"> Estonie </option>
                                    <option value=\"États-Unis\"> États-Unis </option>
                                    <option value=\"Éthiopie\"> Éthiopie </option>
                                    <option value=\"îles Fidji\"> îles Fidji </option>
                                    <option value=\"Finlande\"> Finlande </option>
                                    <option value=\"France\"> France </option>
                                    <option value=\"Gabon\"> Gabon </option>
                                    <option value=\"Gambie\"> Gambie </option>
                                    <option value=\"Géorgie\"> Géorgie </option>
                                    <option value=\"Ghana\"> Ghana </option>
                                    <option value=\"Grèce\"> Grèce </option>
                                    <option value=\"Grenade\"> Grenade </option>
                                    <option value=\"Guatemala\"> Guatemala </option>                                   
                                    <option value=\"Guinée\"> Guinée </option>
                                    <option value=\"Guinée-Bissau\"> Guinée-Bissau </option>
                                    <option value=\"Guinée équatoriale\"> Guinée équatoriale </option>
                                    <option value=\"Guyana\"> Guyana </option>
                                    <option value=\"Haïti\"> Haïti </option>
                                    <option value=\"Honduras\"> Honduras </option>
                                    <option value=\"Hongrie\"> Hongrie </option>
                                    <option value=\"Indonésie\"> Indonésie </option>                                       
                                    <option value=\"Irak\"> Irak </option>
                                    <option value=\"Iran\"> Iran </option>
                                    <option value=\"Irlande\"> Irlande </option>
                                    <option value=\"Islande\"> Islande </option>
                                    <option value=\"Italie\"> Italie </option>
                                    <option value=\"Jamaïque\"> Jamaïque </option>
                                    <option value=\"Japon\"> Japon </option>                                   
                                    <option value=\"Jordanie\"> Jordanie </option>
                                    <option value=\"Kazakhstan\"> Kazakhstan </option>
                                    <option value=\"Kenya\"> Kenya </option>
                                    <option value=\"Kirghizie\"> Kirghizie </option>
                                    <option value=\"Kiribati\"> Kiribati </option>                                       
                                    <option value=\"Koweït\"> Koweït </option>
                                    <option value=\"Laos\"> Laos </option>
                                    <option value=\"Lesotho\"> Lesotho </option>
                                    <option value=\"Lettonie\"> Lettonie </option>
                                    <option value=\"Liban\"> Liban </option>
                                    <option value=\"Liberia\"> Liberia </option>
                                    <option value=\"Libye\"> Libye </option>                                    
                                    <option value=\"Liechtenstein\"> Liechtenstein </option>
                                    <option value=\"Lituanie\"> Lituanie </option>
                                    <option value=\"Luxembourg\"> Luxembourg </option>
                                    <option value=\"Macédoine\"> Macédoine </option>
                                    <option value=\"Madagascar\"> Madagascar </option>                                       
                                    <option value=\"Malaisie\"> Malaisie </option>
                                    <option value=\"Malawi\"> Malawi </option>
                                    <option value=\"îles Maldives\"> îles Maldives </option>
                                    <option value=\"Mali\"> Mali </option>
                                    <option value=\"Malte\"> Malte </option>
                                    <option value=\"Îles Marshall\"> Îles Marshall </option>
                                    <option value=\"Maurice\"> Maurice </option>                                 
                                    <option value=\"Mauritanie\"> Mauritanie </option>
                                    <option value=\"Mexique\"> Mexique </option>
                                    <option value=\"Micronésie\"> Micronésie </option>
                                    <option value=\"Micronésie\"> Micronésie </option>
                                    <option value=\"Moldavie\"> Moldavie </option>                                       
                                    <option value=\"Monaco\"> Monaco </option>
                                    <option value=\"Mongolie\"> Mongolie </option>
                                    <option value=\"Monténégro\"> Monténégro </option>
                                    <option value=\"Mozambique\"> Mozambique </option>
                                    <option value=\"Namibie\"> Namibie </option>
                                    <option value=\"Nauru\"> Nauru </option>
                                    <option value=\"Népal\"> Népal </option>
                                    <option value=\"Nicaragua\"> Nicaragua </option>                                       
                                    <option value=\"Niger\"> Niger </option>
                                    <option value=\"Nigeria\"> Nigeria </option>
                                    <option value=\"Niue\"> Niue </option>
                                    <option value=\"Nouvelle-Zélande\"> Nouvelle-Zélande </option>
                                    <option value=\"Oman\"> Oman </option>
                                    <option value=\"Ouganda\"> Ouganda </option>
                                    <option value=\"Ouzbékistan\"> Ouzbékistan </option>                                       
                                    <option value=\"Pakistan\"> Pakistan </option>
                                    <option value=\"NigeriPalaos\"> NigeriPalaos </option>                                   
                                    <option value=\"État de Palestine\"> État de Palestine </option>
                                    <option value=\"Panama\"> Panama </option>
                                    <option value=\"Papouasie-Nouvelle-Guinée\"> Papouasie-Nouvelle-Guinée </option>
                                    <option value=\"Paraguay\"> Paraguay </option>
                                    <option value=\"Pays-Bas\"> Pays-Bas </option>                                       
                                    <option value=\"Pérou\"> Pérou </option>
                                    <option value=\"Philippines\"> Philippines </option>                                   
                                    <option value=\"Pologne\"> Pologne </option>
                                    <option value=\"Portugal\"> Portugal </option>                                       
                                    <option value=\"Qatar\"> Qatar </option>
                                    <option value=\"Grande-Bretagne\"> Grande-Bretagne </option>
                                    <option value=\"Russie\"> Russie </option>
                                    <option value=\"Rwanda\"> Rwanda </option>                                       
                                    <option value=\"Saint-Christophe-et-Niévès\"> Saint-Christophe-et-Niévès </option>
                                    <option value=\"Sainte-Lucie\"> Sainte-Lucie </option>                                  
                                    <option value=\" Saint-Marin\"> Saint-Marin </option>
                                    <option value=\"Saint-Vincent-et-les Grenadines\"> Saint-Vincent-et-les Grenadines </option>
                                    <option value=\"Îles Salomon\"> Îles Salomon </option>
                                    <option value=\"Salvador\"> Salvador </option>
                                    <option value=\"Sao Tomé-et-Principe\"> Sao Tomé-et-Principe </option>                                       
                                    <option value=\"Sénégal\"> Sénégal </option>
                                    <option value=\"Serbie\"> Serbie </option>
                                    <option value=\"Seychelles\"> Seychelles </option>
                                    <option value=\"Sierra Leone\"> Sierra Leone </option>
                                    <option value=\"Luxembourg\"> Luxembourg </option>
                                    <option value=\"Singapour\"> Singapour </option>
                                    <option value=\"Slovaquie\"> Slovaquie </option>                                       
                                    <option value=\"Slovénie\"> Slovénie </option>
                                    <option value=\"Somalie\"> Somalie </option>                                  
                                    <option value=\"Soudan\"> Soudan </option>
                                    <option value=\"Soudan du Sud\"> Soudan du Sud </option>
                                    <option value=\"Sri Lanka\"> Sri Lanka </option>                                       
                                    <option value=\"Suède\"> Suède </option>
                                    <option value=\"Suisse\"> Suisse </option>                                   
                                    <option value=\"Suriname\"> Suriname </option>
                                    <option value=\"Swaziland\"> Swaziland </option>
                                    <option value=\"Syrie\"> Syrie </option>                                       
                                    <option value=\"Tadjikistan\"> Tadjikistan </option>
                                    <option value=\"Tchad\"> Tchad </option>
                                    <option value=\"Thaïlande\"> Thaïlande </option>
                                    <option value=\"Timor oriental\"> Timor oriental </option>
                                    <option value=\"Togo\"> Togo </option>                                       
                                    <option value=\"Tonga\"> Tonga </option>
                                    <option value=\"Trinité-et-Tobago\"> Trinité-et-Tobago </option>                                   
                                    <option value=\"Tunisie\"> Tunisie </option>
                                    <option value=\"Turkménistan\"> Turkménistan </option>
                                    <option value=\"Turquie\"> Turquie </option>                                       
                                    <option value=\"Tuvalu\"> Tuvalu </option>
                                    <option value=\"Ukraine\"> Ukraine </option>
                                    <option value=\"Uruguay\"> Uruguay </option>
                                    <option value=\"Vatican\"> Vatican </option>
                                    <option value=\"Venezuela\"> Venezuela </option>                                       
                                    <option value=\"Viêt Nam\"> Viêt Nam </option>
                                    <option value=\"Yémen\"> Yémen </option>                                   
                                    <option value=\"Zambie\"> Zambie </option>
                                    <option value=\"Zimbabwe\"> Zimbabwe </option>
                                </select>

                            </div>
                            <h3 style=\"color : #EACFFF;margin-left: 0px;width: 400px;\">Catégorie :</h3>
                            <div class=\"reservation_form\">
                                <select class=\"reservation_form select\" name=\"categorie\">
                                    <option> Choisir </option> 
                                    <option value=\"Vacance\"> Vacances </option>
                                    <option value=\"Expatriation\"> Expatriation </option>
                                    <option value=\"Déplacement professionel\"> Déplacement professionel </option>
                                    <option value=\"Week end\"> Week end </option>
                                    <option value=\"Journée découverte\"> Journée découverte </option>                                    
                                    <option value=\"Chez moi\"> Chez moi </option>
                                    <option value=\"Voyage de noce\"> Voyage de noce </option>
                                    <option value=\"Au pair, étude et stage\"> Au pair, étude et stage </option>
                                    <option value=\"Humanitaire \"> Humanitaire </option>
                                    <option value=\"Croisière\"> Croisière </option>                                       
                                    <option value=\"Trek\"> Trek </option>
                                    <option value=\"Tour du monde\"> Tour du monde </option>
                                    <option value=\"Voyage scolaire\"> Voyage scolaire </option>
                                    <option value=\"Journée découverte\"> Journée découverte </option>
                                    <option value=\"Chez moi\"> Chez moi </option>
                                    <option value=\"Trip sac a dos\"> Trip sac a dos </option>
                                    <option value=\"Gros budget\"> Gros budget </option>                                 
                                    <option value=\"Classique\"> Classique </option>
                                    <option value=\"Ptit budget\"> Ptit budget </option>
                                    <option value=\"Total impro\"> Total impro </option>
                                    <option value=\"Hôtel Club\"> Hôtel Club </option>
                                    <option value=\"Vacances en famille\"> Vacances en famille </option>                                       
                                    <option value=\"Séjours de golf\"> Séjours de golf </option>
                                    <option value=\"Vacances de luxe\"> Vacances de luxe </option>
                                    <option value=\"Voyage expérimental\"> Voyage expérimental </option>
                                    <option value=\"aventure\"> aventure </option>                                  
                                </select>                                

                            </div>

                            <h3 style=\"color : #EACFFF;margin-left: 0px;width: 400px;\">Budget :</h3>
                            <div class=\"reservation_form\">\t

                                <input type=\"text\"  name=\"min\" placeholder=\"min\" />
                                <input type=\"text\"  name=\"max\" placeholder=\"max\" />                                     

                            </div>


                            <!---strat-date-piker---->
                            <script src=\"http://code.jquery.com/ui/1.9.2/jquery-ui.js\"></script>
                            <script>
                                \$(function () {
                                    \$(\"#datepicker\").datepicker({
                                        
                                        buttonImageOnly: true,
                                        changeMonth: true,
                                        changeYear: true,
                                        dateFormat: 'yy-mm-dd',
                                        yearRange: \"-2:+2\"});
                                });
                            </script>
                            <!---/End-date-piker---->
                            <br>
                            <h3 style=\"color : #EACFFF;margin-left: 0px;width: 400px;\">Date :</h3>
                            <div class=\"reservation_date\">  

                                <input class=\"text-box-light\"  type=\"text\" name=\"date\" id=\"datepicker\" value=\"Join Date\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {
                                            this.value = 'Join Date';
                                        }\">


                            </div>

                            <button class=\"buttonCherche\" href=\"";
        // line 278
        echo $this->env->getExtension('routing')->getPath("cherche_experiences");
        echo "\" onclick=\"self.location.href = (";
        echo "cherche_experiences";
        echo ")\" >CHERCHER</button>

                        </div>

                    </div>

                </form>     
                <div class=\"clear\"></div>
            </div>\t
        </div>
    </div> 
";
    }

    // line 291
    public function block_content($context, array $blocks = array())
    {
        // line 292
        echo "

";
    }

    public function getTemplateName()
    {
        return "MyAppFrontBundle:Experience:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 292,  335 => 291,  317 => 278,  37 => 2,  11 => 1,);
    }
}
