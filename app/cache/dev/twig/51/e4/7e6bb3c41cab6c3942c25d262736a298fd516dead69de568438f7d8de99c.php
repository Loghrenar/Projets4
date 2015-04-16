<?php

/* GCProjetBundle:Site:contact.html.twig */
class __TwigTemplate_51e47e6bb3c41cab6c3942c25d262736a298fd516dead69de568438f7d8de99c extends Twig_Template
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
        echo "        </header>

        <!--about us-->
        <div class=\"container\">
            <div class=\"row\">
                <form method=\"post\" action=\"formulaire.php\" style=\"float:left; margin-left:20%;\">
                    <input style=\"text-align:center;padding:10px;width:40%;float:left;margin:10px\" type=\"text\"
                           name=\"nom\" placeholder=\"Nom Prénom...\"/>
                    <input style=\"text-align:center;padding:10px;width:40%;margin:10px; margin-left:40px;\" type=\"text\"
                           name=\"email\" placeholder=\"Votre Adresse Email...\"/>
                    <input style=\"text-align:center;padding:10px;width:40%;margin:10px;\" type=\"text\" name=\"objet\"
                           placeholder=\"Objet du mail...\"/>
                    <textarea style=\"padding:10px;width:85%;height:300px;margin:10px;\" name=\"message\"
                              placeholder=\"Message\"></textarea>
                    <center><input style=\"text-align:center;padding:10px;width:30%;margin:10px\" type=\"submit\"
                                   name=\"envoi\" value=\"Envoyer\"/></center>
                </form>
            </div>

            <div>
                <h1>Notre adresse</h1>

                <p>9, rue du Quebec, 10000 Troyes</p>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2681.4361699651654!2d4.0796749999999875!3d48.268322007023784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee990d0530cd7d%3A0xdecabd3109be2c43!2sI.U.T.+de+Troyes!5e1!3m2!1sfr!2sfr!4v1426759551809\"
                        width=\"100%\" frameborder=\"0\" style=\"border:0\"></iframe>
            </div>
        </div>

        <!--specialties-->

        <!--footer-->
        <section class=\"footer\" id=\"footer\">
            <p class=\"text-center\">
                <a href=\"#wrapper\" class=\"gototop\"><i class=\"fa fa-angle-double-up fa-2x\"></i></a>
            </p>

            <div class=\"container\">
                <p>&copy; netyx agency 2015<br></p>
            </div>
        </section>

    </div><!--wrapper end-->

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
        echo "                ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
            ";
    }

    // line 97
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GCProjetBundle:Site:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 97,  151 => 31,  148 => 30,  81 => 33,  79 => 30,  69 => 23,  56 => 12,  53 => 11,  42 => 3,  39 => 2,  11 => 1,);
    }
}
