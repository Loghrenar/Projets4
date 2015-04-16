<?php

/* GCProjetBundle:Programmes:show.html.twig */
class __TwigTemplate_c1338aeb7eff3e5f9491247091b120dcdf79ef630fa6a074d56ac00d5b0ae962 extends Twig_Template
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
        echo "    <h1>Programmes</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "progDesc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "progName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "progDuree", array()), "H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "progType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fichier</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "progFichier", array()), "html", null, true);
        echo "</td>
            </tr>
        <tr>
            <th>Playlist</th>
            <td><td>";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "playlist", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 65
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["playlist"], "playDesc", array()), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </td></td>
        </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("gc_programmes");
        echo "\">
            Retour à la liste
        </a>
    </li>
    <li>
        <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gc_programmes_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Modifier
        </a>
    </li>
    <li>";
        // line 83
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
        return "GCProjetBundle:Programmes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 32,  175 => 31,  168 => 83,  161 => 79,  153 => 74,  144 => 67,  135 => 65,  131 => 64,  124 => 60,  117 => 56,  110 => 52,  103 => 48,  96 => 44,  89 => 40,  81 => 34,  79 => 31,  68 => 23,  55 => 12,  52 => 11,  41 => 3,  38 => 2,  11 => 1,);
    }
}
