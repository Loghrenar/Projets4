<?php

/* GCProjetBundle:Site:index.html.twig */
class __TwigTemplate_5a224dadd6dab6d4071b723cffb9dbc79e3539d5f0af67cde10bd952e0da62f0 extends Twig_Template
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
                     style=\"background-image: url(http://wowthemes.net/demo/leroy/img/dummy1.jpg); height:500px;\">
                    <div class=\"parallax-pattern-overlay\">
                        <div class=\"container text-center\" style=\"padding-top:170px; height:500px;\">
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
        </header>

        <!--about us-->

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-mg-6\">
                    <div class=\"item text-center\">

                        <video controls src=\"video.ogv\" style=\"width:590px; height:360px;\">Ici la description
                            alternative
                        </video>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"text item text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id metus orci. Phasellus
                            venenatis, quam vitae bibendum sagittis,
                            purus diam varius eros, eu vulputate ante purus sed ligula. Maecenas id condimentum neque.
                            Ut ut accumsan nulla, sit amet consequat
                            felis. Donec eget ullamcorper ipsum.</p>

                    </div>
                </div>
            </div>
        </div>


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

    </div><!--wrapper end-->
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

    // line 85
    public function block_js($context, array $blocks = array())
    {
        // line 86
        echo "    <script type=\"text/javascript\">
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

    public function getTemplateName()
    {
        return "GCProjetBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 86,  146 => 85,  139 => 31,  136 => 30,  81 => 33,  79 => 30,  69 => 23,  56 => 12,  53 => 11,  42 => 3,  39 => 2,  11 => 1,);
    }
}
