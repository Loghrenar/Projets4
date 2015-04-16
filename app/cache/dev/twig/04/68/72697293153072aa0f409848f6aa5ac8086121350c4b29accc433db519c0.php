<?php

/* GCProjetBundle:Site:programme.html.twig */
class __TwigTemplate_046872697293153072aa0f409848f6aa5ac8086121350c4b29accc433db519c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GCProjetBundle::layoutt.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GCProjetBundle::layoutt.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <!--wrapper start-->
<div class=\"wrapper\" id=\"wrapper\">

    <!--header-->
    <header>
        <div class=\"banner row\" id=\"banner\">
            <div class=\"parallax text-center\"
                 style=\"background-image: url(http://wowthemes.net/demo/leroy/img/dummy1.jpg);\">
                <div class=\"parallax-pattern-overlay\">
                    <div class=\"container text-center\" style=\"padding-top:170px;\">
                        <a href=\"#\"><img id=\"site-title\" class=\" wow fadeInDown\" wow-data-delay=\"0.0s\"
                                         wow-data-duration=\"0.9s\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcprojet/img/logo_mmitv3.png"), "html", null, true);
        echo "\" alt=\"logo\"/></a>

                        <h2 class=\"intro wow zoomIn\" wow-data-delay=\"0.4s\" wow-data-duration=\"0.9s\">welcome !</h2>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 30
        $this->displayBlock('menu', $context, $blocks);
        // line 33
        echo "
    <!--about us-->

    <div class=\"entry-content\" style=\"font-family:Open Sans;\">
        <table class=\"table table-striped table-bordered\" style=\"font-family: Open Sans;\">
            <tbody>
            <h1 class=\"title-table text-center\"> Grille des programmes </h1>
            <tr class=\"text-center ro1\">
                <td class=\"text ce2 co1\">Horaires</td>
                <td class=\"text ce3 co2\">Lundi</td>
                <td class=\"text ce4 co3\">Mardi</td>
                <td class=\"text ce4 co4\">Mercredi</td>
                <td class=\"text ce4 co5\">Jeudi</td>
                <td class=\"text ce4 co6\">Vendredi</td>
            </tr>

            <tr class=\"s0r0 text-center ro2\">
                <td class=\"text ce2 co1\">In/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            <tr class=\"s0r0 text-center ro3\">
                <td class=\"text ce2 co1\">8h</td>
                <td class=\"text ce3 co2\">Information </br> importantes</td>
                <td class=\"text ce4 co3\">Information </br> importantes</td>
                <td class=\"text ce4 co4\">Information </br> importantes</td>
                <td class=\"text ce4 co5\">Information </br> importantes</td>
                <td class=\"text ce4 co6\">Information </br> importantes</td>
            </tr>

            <tr class=\"s0r0 text-center ro4\">
                <td class=\"text ce2 co1\">8h30</td>
                <td class=\"text ce3 co2\">Actualités semaine </br> préc.</td>
                <td class=\"text ce4 co3\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co4\">Offres de</br> stages/projets</td>
                <td class=\"text ce4 co5\" rowspan=\"2\">Clips musicaux</td>
                <td class=\"text ce4 co6\">Offres de </br> stages/projets</td>
            </tr>

            <tr class=\"s0r0 text-center ro5\">
                <td class=\"text ce2 co1\">9h</td>
                <td class=\"text ce3 co2\">Vidéos Vsauce2 en </br> anglais</td>
                <td class=\"text ce4 co3\">Courts métrages 2ème </br> années</td>
                <td class=\"text ce4 co4\">Courts métrages 1ères </br> années</td>

            </tr>

            <tr class=\"s0r0 text-center ro6\">
                <td class=\"text ce2 co1\">In/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            <tr class=\"s0r0 text-center ro7\">
                <td class=\"text ce2 co1\">9h30</td>
                <td class=\"text ce3 co2\">Evénements à venir</td>
                <td class=\"text ce4 co3\">Vidéos Vsauce en </br> anglais</td>
                <td class=\"text ce4 co4\">Courts métrages 1ères </br> années</td>
                <td class=\"text ce4 co5\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co6\" rowspan=\"3\">Dernière émission </br> de la Web TV</td>
            </tr>

            <tr class=\"s0r0 text-center ro8\">
                <td class=\"text ce2 co1\">10h</td>
                <td class=\"text ce3 co2\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co3\">Evènements à venir</td>
                <td class=\"text ce4 co4\">Vidéo Vsauce2</td>

            </tr>

            <tr class=\"s0r0 text-center ro9\">
                <td class=\"text ce2 co1\">10h30</td>
                <td class=\"text ce3 co2\">Courts métrages 1ères </br> années</td>
                <td class=\"text ce4 co3\">Evénements à venir</td>
                <td class=\"text ce4 co4\">Vidéos Vsauce en anglais</td>

            </tr>

            <tr class=\"s0r0 text-center ro10\">
                <td class=\"text ce2 co1\">In/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            <tr class=\"s0r0 text-center ro11\">
                <td class=\"text ce2 co1\">11h</td>
                <td class=\"text ce3 co2\">Travaux à rendre</td>
                <td class=\"text ce4 co3\">Travaux à rendre</td>
                <td class=\"text ce4 co4\">Travaux à rendre</td>
                <td class=\"text ce4 co5\">Travaux à rendre</td>
                <td class=\"text ce4 co6\">Travaux à rendre</td>
            </tr>

            <tr class=\"s0r0 text-center ro12\">
                <td class=\"text ce2 co1\">11h30</td>
                <td class=\"text ce3 co2\">Courts métrages 1ères</br>années</td>
                <td class=\"text ce4 co3\">Courts métrages 2èmes</br>années</td>
                <td class=\"text ce4 co4\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co5\">Evénements à venir</td>
                <td class=\"text ce4 co6\">Vidéos Vsauce2</td>
            </tr>

            <tr class=\"s0r0 text-center ro13\">
                <td class=\"text ce2 co1\">12h</td>
                <td class=\"text ce3 co2\">Clips musicaux</td>
                <td class=\"text ce4 co3\">Vidéos Vsauce2 </br> en anglais</td>
                <td class=\"text ce4 co4\">Turoriel adobe</td>
                <td class=\"text ce4 co5\">Evénements à venir</td>
            </tr>

            <tr class=\"s0r0 text-center ro14\">
                <td class=\"text ce2 co1\">In/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            <tr class=\"s0r0 text-center ro15\">
                <td class=\"text ce2 co1\">12h30</td>
                <td class=\"text ce3 co2\" rowspan=\"3\">Dernière émission </br> de la Web TV</td>
                <td class=\"text ce4 co3\" rowspan=\"2\">Dernière émission </br> de la Web TV</td>
                <td class=\"text ce4 co4\">Clips musicaux</td>
                <td class=\"text ce4 co5\">Création ESM et </br> ou école animation</td>
                <td class=\"text ce4 co6\" rowspan=\"2\">Zap de Spion</td>
            </tr>

            <tr class=\"s0r0 text-center ro16\">
                <td class=\"text ce2 co1\">13h</td>
                <td class=\"text ce3 co2\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co3\" rowspan=\"2\">Courts métrages 1ères </br> années</td>
            </tr>

            <tr class=\"s0r0 text-center ro17\">
                <td class=\"text ce2 co1\">13h30</td>
                <td class=\"text ce3 co2\">Tutoriel Adobe</td>
                <td class=\"text ce4 co3\">Clips musicaux</td>
            </tr>

            <tr class=\"s0r0 text-center ro18\">
                <td class=\"text ce2 co1\">In/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            <tr class=\"s0r0 text-center ro19\">
                <td class=\"text ce2 co1\">14h</td>
                <td class=\"text ce3 co2\">information </br> importantes</td>
                <td class=\"text ce4 co3\">information </br> importantes</td>
                <td class=\"text ce4 co4\">information </br> importantes</td>
                <td class=\"text ce4 co5\">information </br> importantes</td>
                <td class=\"text ce4 co6\">information </br> importantes</td>
            </tr>

            <tr class=\"s0r0 text-center ro20\">
                <td class=\"text ce2 co1\">14h30</td>
                <td class=\"text ce3 co2\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co3\">Création ESMA et </br> école animation</td>
                <td class=\"text ce4 co4\">Tutoriel Adobe</td>
                <td class=\"text ce4 co5\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co6\">Courts métrages 2ème</br> années</td>
            </tr>

            <tr class=\"s0r0 text-center ro21\">
                <td class=\"text ce2 co1\">15h</td>
                <td class=\"text ce3 co2\">Evénements à venir</td>
                <td class=\"text ce4 co3\">Clips musicaux</td>
                <td class=\"text ce4 co4\">Evénements à venir</td>
            </tr>

            <tr class=\"s0r0 text-center ro22\">
                <td class=\"text ce2 co1\">In/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            <tr class=\"s0r0 text-center ro23\">
                <td class=\"text ce2 co1\">15h30</td>
                <td class=\"text ce3 co2\">Evénements à venir</td>
                <td class=\"text ce4 co3\">Offres de stage</td>
                <td class=\"text ce4 co4\" rowspan=\"3\">Dernière émission </br> de la Web TV</td>
                <td class=\"text ce4 co5\">Evénements à venir</td>
                <td class=\"text ce4 co6\">Vidéos Vsauce2 </br> en anglais</td>
            </tr>

            <tr class=\"s0r0 text-center ro24\">
                <td class=\"text ce2 co1\">16h</td>
                <td class=\"text ce3 co2\">Courts métrages 2èmes</br>années</td>
                <td class=\"text ce4 co3\" rowspan=\"2\">Zap de Spion</td>
                <td class=\"text ce4 co4\">Evénements à venir</td>
                <td class=\"text ce4 co4\">Clips musicaux</td>
            </tr>

            <tr class=\"s0r0 text-center ro25\">
                <td class=\"text ce2 co1\">16h30</td>
                <td class=\"text ce3 co2\">Clips musicaux</td>
                <td class=\"text ce4 co3\">Courts métrages 2èmes</br>années</td>
                <td class=\"text ce4 co4\">Clips musicaux</td>
            </tr>

            <tr class=\"s0r0 text-center ro26\">
                <td class=\"text ce2 co1\">Int/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            <tr class=\"s0r0 text-center ro27\">
                <td class=\"text ce2 co1\">17h</td>
                <td class=\"text ce3 co2\">Travaux à rendre</td>
                <td class=\"text ce4 co3\">Travaux à rendre</td>
                <td class=\"text ce4 co4\">Travaux à rendre</td>
                <td class=\"text ce4 co5\" rowspan=\"3\">Emission Web TV</br> en direct ou </br> dernière émission</td>
                <td class=\"text ce4 co6\">Travaux à rendre</td>
            </tr>

            <tr class=\"s0r0 text-center ro28\">
                <td class=\"text ce2 co1\">17h30</td>
                <td class=\"text ce3 co2\" rowspan=\"2\">Tutoriel Adobe</td>
                <td class=\"text ce4 co3\" rowspan=\"2\">Clips musicaux</td>
                <td class=\"text ce4 co4\">Evénements à venir</td>
                <td class=\"text ce4 co5\" rowspan=\"2\">Zap de Spion</td>
            </tr>

            <tr class=\"s0r0 text-center ro29\">
                <td class=\"text ce2 co1\">18h</td>
                <td class=\"text ce3 co2\">Création ESMA et </br> ou école animation</td>
            </tr>

            <tr class=\"s0r0 text-center ro30\">
                <td class=\"text ce2 co1\">In/out</td>
                <td class=\"text ce3 co2\">Emploi du temps</td>
                <td class=\"text ce4 co3\">Emploi du temps</td>
                <td class=\"text ce4 co4\">Emploi du temps</td>
                <td class=\"text ce4 co5\">Emploi du temps</td>
                <td class=\"text ce4 co6\">Emploi du temps</td>
            </tr>

            </tbody>
        </table>

        ";
        // line 293
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 294
            echo "            <button> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("gc_programmes");
            echo "\">Modifier</a></button>
        ";
        }
        // line 296
        echo "

        <!--specialties-->


        <!--footer-->
        <section class=\"footer\" id=\"footer\">
            <p class=\"text-center\">
                <a href=\"#wrapper\" class=\"gototop\"><i class=\"fa fa-angle-double-up fa-2x\"></i></a>
            </p>

            <div class=\"container\">
                <ul>

                </ul>
                <p>
                    &copy; netyx agency 2015<br>

                </p>
            </div>
        </section>

    </div>
    <!--wrapper end-->

    <script type=\"text/javascript\">
        jQuery(function (\$) {
            \$(document).ready(function () {
                //enabling stickUp on the '.navbar-wrapper' class
                \$('.navbar-wrapper').stickUp({
                    parts: {
                        0: 'banner',
                        1: 'aboutus',
                        2: 'specialties',
                        3: 'gallery',
                        4: 'feedback',
                        5: 'contact'
                    },
                    itemClass: 'menuItem',
                    itemHover: 'active',
                    topMargin: 'auto'
                });
            });
        });
    </script>
    ";
    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 342
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GCProjetBundle:Site:programme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 342,  403 => 31,  400 => 30,  351 => 296,  345 => 294,  343 => 293,  81 => 33,  79 => 30,  69 => 23,  56 => 12,  53 => 11,  42 => 3,  39 => 2,  11 => 1,);
    }
}
