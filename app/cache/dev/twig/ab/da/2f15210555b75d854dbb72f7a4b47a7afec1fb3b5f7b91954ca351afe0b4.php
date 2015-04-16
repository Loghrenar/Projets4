<?php

/* GCProjetBundle:Programmes:edit.html.twig */
class __TwigTemplate_abda2f15210555b75d854dbb72f7a4b47a7afec1fb3b5f7b91954ca351afe0b4 extends Twig_Template
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
        echo "<!--wrapper start-->
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
    </header>
    ";
        // line 31
        $this->displayBlock('menu', $context, $blocks);
        // line 34
        echo "    <h1>Modification des programmes</h1>

    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("gc_programmes");
        echo "\">
            Retour à la liste
        </a>
    </li>
    <li>";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "GCProjetBundle:Programmes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  106 => 31,  99 => 44,  92 => 40,  85 => 36,  81 => 34,  79 => 31,  68 => 23,  55 => 12,  52 => 11,  41 => 3,  38 => 2,  11 => 1,);
    }
}
