<?php

namespace MyApp\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExperienceType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('contenu', 'textarea')
                
                ->add('date', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'choice','days'=>range(1,31),'years'=>range(date('Y')-10, date('Y')),'months'=>range(1,12)))
                
                 ->add('datefin', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'choice','days'=>range(1,31),'years'=>range(date('Y')-10, date('Y')),'months'=>range(1,12)))
                
                
                
                ->add('pays', 'choice', array('choices' => array('Afghanistan' => 'Afghanistan', 'Afrique du Sud' => 'Afrique du Sud', 'Albanie' => 'Albanie'
                        , 'Algérie' => 'Algérie', 'Allemagne' => 'Allemagne', 'Andorre' => 'Andorre'
                        , 'Angola' => 'Angola', 'Antigua-et-Barbuda' => 'Antigua-et-Barbuda', 'Arabie saoudite' => 'Arabie saoudite'
                        , 'Argentine' => 'Argentine', 'Arménie' => 'Arménie', 'Australie' => 'Australie'
                        , 'Autriche' => 'Autriche', 'Azerbaïdjan' => 'Azerbaïdjan', 'Bahamas' => 'Bahamas'
                        , 'Bahreïn' => 'Bahreïn', 'Bangladesh' => 'Bangladesh', 'Barbade' => 'Barbade', 'Belgique' => 'Belgique'
                        , 'Belize' => 'Belize', 'Bénin' => 'Bénin', 'Bhoutan' => 'Bhoutan', 'Belarus' => 'Belarus'
                        , 'Birmanie' => 'Birmanie', 'Bolivie' => 'Bolivie', ' Bosnie-Herzégovine' => ' Bosnie-Herzégovine', 'Botswana' => 'Botswana', 'Brésil' => 'Brésil'
                        , 'Brunei' => 'Brunei', 'Bulgarie' => 'Bulgarie', 'Burkina' => 'Burkina', 'Burundi' => 'Burundi'
                        , 'Cambodge' => 'Cambodge', 'Cameroun' => 'Cameroun', 'Canada' => 'Canada', 'îles du Cap-Vert ' => ' îles du Cap-Vert ', 'République centrafricaine' => 'République centrafricaine', 'Chili' => 'Chili'
                        , 'Chine' => 'Chine', 'Chypre' => 'Chypre', 'Colombie' => 'Colombie'
                        , 'Comores' => 'Comores', 'Congo' => 'Congo', 'République démocratique du Congo' => 'République démocratique du Congo'
                        , 'Îles Cook' => 'Îles Cook', 'Corée du Nord ' => 'Corée du Nord ', 'Corée du Sud' => 'Corée du Sud'
                        , 'Costa Rica' => 'Costa Rica', 'Côte d"Ivoire' => 'Côte d"Ivoire', 'Croatie' => 'Croatie'
                        , 'Cuba' => 'Cuba', 'Danemark' => 'Danemark', 'Djibouti' => 'Djibouti', 'République dominicaine' => 'République dominicaine'
                        , 'Dominique' => 'Dominique', 'Égypte' => 'Égypte', 'Émirats arabes unis' => 'Émirats arabes unis', 'Équateur' => 'Équateur'
                        , 'Érythrée' => 'Érythrée', 'Espagne' => 'Espagne', ' Estonie' => 'Estonie', 'États-Unis' => 'États-Unis', 'Éthiopie' => 'Éthiopie'
                        , 'îles Fidji' => 'îles Fidji', 'Finlande' => 'Finlande', 'France' => 'France', 'Gabon' => 'Gabon'
                        , 'Gambie' => 'Gambie', 'Géorgie' => 'Géorgie', 'Ghana' => 'Ghana', 'Grèce' => 'Grèce', 'Grenade' => 'Grenade', 'Guatemala' => 'Guatemala'
                        , 'Guinée' => 'Guinée', 'Guinée-Bissau' => 'Guinée-Bissau', 'Guinée équatoriale' => 'Guinée équatoriale'
                        , 'Guyana' => 'Guyana', 'Haïti' => 'Haïti', 'Honduras' => 'Honduras'
                        , 'Hongrie' => 'Hongrie', 'Hongrie' => 'Hongrie', 'Hongrie' => 'Indonésie'
                        , 'Irak ' => 'Irak ', 'Iran' => 'Iran', 'Irlande' => 'Irlande'
                        , 'Islande' => 'Islande', 'Italie' => 'Italie', 'Jamaïque' => 'Jamaïque', 'Japon' => 'Japon'
                        , 'Jordanie' => 'Jordanie', 'Kazakhstan' => 'Kazakhstan', 'Kenya' => 'Kenya', ' Kirghizie' => ' Kirghizie'
                        , 'Kiribati' => 'Kiribati', 'Koweït' => 'Koweït', 'Laos' => 'Laos', 'Lesotho' => 'Lesotho', 'Lettonie' => 'Lettonie'
                        , 'Liban' => 'Liban', 'Liberia' => 'Liberia', 'Libye' => 'Libye', 'Liechtenstein' => 'Liechtenstein'
                        , 'Lituanie' => 'Lituanie', 'Luxembourg' => 'Luxembourg', 'Macédoine' => 'Macédoine', 'Madagascar' => 'Madagascar', 'Malaisie' => 'Malaisie', 'Malawi' => 'Malawi'
                        , ' îles Maldives' => ' îles Maldives', 'Mali' => 'Mali', 'Malte' => 'Malte'
                        , ' Îles Marshall' => ' Îles Marshall', 'Maurice' => 'Maurice', 'Mauritanie' => 'Mauritanie'
                        , 'Mexique' => 'Mexique', 'Micronésie' => 'Micronésie', 'Moldavie' => 'Moldavie'
                        , 'Monaco' => 'Monaco', 'Mongolie' => 'Mongolie', 'Monténégro' => 'Monténégro'
                        , 'Mozambique' => 'Mozambique', 'Namibie' => 'Namibie', 'Nauru' => 'Nauru', 'Népal' => 'Népal'
                        , 'Nicaragua' => 'Nicaragua', 'Niger' => 'Niger', 'Nigeria' => 'Nigeria', 'Niue' => 'Niue'
                        , 'Niue' => 'Niue', 'Nouvelle-Zélande' => 'Nouvelle-Zélande', 'Oman' => 'Oman', 'Ouganda' => 'Ouganda', 'Ouzbékistan' => 'Ouzbékistan'
                        , 'Pakistan' => 'Pakistan', 'Palaos' => 'Palaos', 'État de Palestine' => 'État de Palestine', 'Panama' => 'Panama'
                        , 'Papouasie-Nouvelle-Guinée' => 'Papouasie-Nouvelle-Guinée', 'Paraguay' => 'Paraguay', 'Pays-Bas' => 'Pays-Bas', 'Pérou' => 'Pérou', 'Philippines' => 'Philippines', 'Pologne' => 'Pologne'
                        , 'Portugal' => 'Portugal', 'Qatar' => 'Qatar', 'Grande-Bretagne' => 'Grande-Bretagne'
                        , 'Russie' => 'Russie', 'Rwanda' => 'Rwanda', 'Saint-Christophe-et-Niévès' => 'Saint-Christophe-et-Niévès'
                        , 'Sainte-Lucie' => 'Sainte-Lucie', 'Saint-Marin' => 'Saint-Marin', 'Saint-Vincent-et-les Grenadines' => 'Saint-Vincent-et-les Grenadines'
                        , 'Îles Salomon ' => 'Îles Salomon ', 'Salvador' => 'Salvador', 'Sao Tomé-et-Principe' => 'Sao Tomé-et-Principe'
                        , 'Sénégal' => 'Sénégal', 'Serbie' => 'Serbie', 'Seychelles' => 'Seychelles', 'Sierra Leone' => 'Sierra Leone'
                        , 'Singapour' => 'Singapour', 'Slovaquie' => 'Slovaquie', 'Slovénie' => 'Slovénie', 'Somalie' => 'Somalie', 'Soudan' => 'Soudan', 'Soudan du Sud' => 'Soudan du Sud', 'Sri Lanka' => 'Sri Lanka'
                        , 'Suède' => 'Suède', 'Suisse' => 'Suisse', 'Suriname' => 'Suriname'
                        , 'Swaziland' => 'Swaziland', 'Syrie' => 'Syrie', 'Tadjikistan' => 'Tadjikistan'
                        , 'Tadjikistan' => 'Tadjikistan', 'Tchad' => 'Tchad', 'Tchad' => 'Tchad'
                        , 'Thaïlande' => 'Thaïlande', 'Timor oriental' => 'Timor oriental', 'Togo' => 'Togo'
                        , 'Tonga' => 'Tonga', 'Trinité-et-Tobago' => 'Trinité-et-Tobago', 'Tunisie' => 'Tunisie', 'Turkménistan' => 'Turkménistan', 'Turquie' => 'Turquie', 'Tuvalu' => 'Tuvalu', 'Ukraine' => 'Ukraine'
                        , 'Uruguay' => 'Uruguay', 'Vatican ' => 'Vatican ', 'Venezuela ' => 'Venezuela '
                        , 'Viêt Nam' => 'Viêt Nam', 'Yémen' => 'Yémen', 'Zambie' => 'Zambie'
                        , 'Zimbabwe' => 'Zimbabwe')))
                ->add('type', 'choice', array('choices' => array('Vacance' => 'Vacances', 'Expatriation' => 'Expatriation', 'Déplacement professionel' => 'Déplacement professionel'
                        , 'Week end' => 'Week end', 'Journée découverte' => 'Journée découverte', 'Chez moi' => 'Chez moi'
                        , 'Voyage de noce' => 'Voyage de noce', 'Au pair, étude et stage' => 'Au pair, étude et stage', 'Humanitaire' => 'Humanitaire', 'Croisière' => 'Croisière', 'Trek' => 'Trek', 'Tour du monde' => 'Tour du monde'
                        , 'Voyage scolaire' => 'Voyage scolaire', 'Journée découverte' => 'Journée découverte', 'Chez moi' => 'Chez moi'
                        , 'Trip sac a dos' => 'Trip sac a dos', 'Gros budget' => 'Gros budget', 'Classique' => 'Classique', 'Ptit budget' => 'Ptit budget', 'Total impro' => 'Total impro', 'Hôtel Club' => 'Hôtel Club', 'Vacances en famille' => 'Vacances en famille', 'Séjours de golf' => 'Séjours de golf', 'Vacances de luxe' => 'Vacances de luxe', 'Voyage expérimental' => 'Voyage expérimental', 'aventure' => 'aventure')))
                ->add('climat', 'choice', array('choices' => array('Polaire' => 'Polaire', 'froid' => 'froid', 'tempéré' => 'tempéré'
                        , 'douce' => 'douce', 'océanique' => 'océanique', 'humide' => 'humide'
                        , 'tres humide' => 'tres humide', 'sec' => 'sec', 'frais' => 'frais', 'océanique dégradé' => 'océanique dégradé', 'continental' => 'continental', 'neige' => 'neige'
                        , 'méditerranéen' => 'méditerranéen', 'tres chaude' => 'tres chaude', 'montagnard' => 'montagnard'
                        , 'équatoriaux' => 'équatoriaux', 'tropical' => 'tropical', 'subtropical' => 'subtropical')))
                ->add('depense', 'number')
            ;
        
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\FrontBundle\Entity\Experience'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'myapp_frontbundle_experience';
    }

}
