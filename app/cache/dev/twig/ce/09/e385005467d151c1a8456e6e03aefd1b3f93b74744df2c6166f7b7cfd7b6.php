<?php

/* GCProjetBundle:Bandeau:index.html.twig */
class __TwigTemplate_ce09e385005467d151c1a8456e6e03aefd1b3f93b74744df2c6166f7b7cfd7b6 extends Twig_Template
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
        echo "    <h1>Bandeau list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Bandnom</th>
                <th>Bandheure</th>
                <th>Bandduree</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "            <tr>
                <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gc_bandeau_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "bandNom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            if ($this->getAttribute($context["entity"], "bandHeure", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "bandHeure", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "bandDuree", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gc_bandeau_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gc_bandeau_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("gc_bandeau_new");
        echo "\">
                Create a new entry
            </a>
        </li>
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
        return "GCProjetBundle:Bandeau:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 32,  161 => 31,  151 => 70,  144 => 65,  132 => 59,  126 => 56,  119 => 52,  113 => 51,  109 => 50,  103 => 49,  100 => 48,  96 => 47,  81 => 34,  79 => 31,  68 => 23,  55 => 12,  52 => 11,  41 => 3,  38 => 2,  11 => 1,);
    }
}
