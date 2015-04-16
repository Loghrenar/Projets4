<?php

/* GCProjetBundle:Default:index.html.twig */
class __TwigTemplate_4d1ae8d59f86a98ab8279c8f225ce7dfe505210d1f4a72694d555ff66ba8fdf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GCProjetBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GCProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<!--wrapper start-->
<div class=\"wrapper\" id=\"wrapper\">

\t<div class=\"television\">
\t\t<div class=\"header_2\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gc_projet_site");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gcprojet/img/logo_mmitv3.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t</div>
\t\t\t\t<span id=\"date_\"></span>


\t\t\t\t<span id=\"heure_\"></span>


\t\t\t\t<p>Votre chaîne étudiante !</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"contenu\">
\t\t\t<div class=\"video\">
\t\t\t\t<h2>Intégration MMI</h2>
\t\t\t\t<div class=\"iframe\">
\t\t\t\t\t<iframe width=\"1000\" height=\"550\" src=\"https://www.youtube.com/embed/DjIum0YmVD0?rel=0&amp;showinfo=0&autoplay=1&loop=1\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"after\">
\t\t\t\t<h2>a suivre</h2>
\t\t\t\t<table>
\t\t\t\t\t<li style=\"border-top: solid 4px #688dab;\"></li>
\t\t\t\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) ? $context["programmes"] : $this->getContext($context, "programmes")));
        foreach ($context['_seq'] as $context["_key"] => $context["prog"]) {
            // line 40
            echo "\t\t\t\t\t<li><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prog"], "progDesc", array()), "html", null, true);
            echo "</p><span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prog"], "progDuree", array()), "H:i:s"), "html", null, true);
            echo "</span><hr></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer\">
\t\t\t<div class=\"info\">
\t\t\t\t<p>INFO 24/7</p>
\t\t\t</div>

\t\t\t<div id=\"boxe_defil\">
\t\t\t\t<div id=\"defile\">
\t\t\t\t<p>
\t\t\t\t";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bandeau"]) ? $context["bandeau"] : $this->getContext($context, "bandeau")));
        foreach ($context['_seq'] as $context["_key"] => $context["band"]) {
            // line 55
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["band"], "bandNom", array()), "html", null, true);
            echo " ----
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['band'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

</div><!--wrapper end-->

<script type=\"text/javascript\">
\tvar defile;// l'element a deplacer
\tvar psinit = 2000; // position horizontale de depart
\tvar pscrnt = psinit;

\tfunction texteDefile() {
\t\tif (!defile) defile = document.getElementById('defile');
\t\tif (defile) {
\t\t\tif(pscrnt < ( - defile.offsetWidth) ){
\t\t\t\tpscrnt = psinit;
\t\t\t} else {
\t\t\t\tpscrnt+= -1; // pixel par deplacement
\t\t\t}
\t\t\tdefile.style.left = pscrnt+\"px\";
\t\t}
\t}
\tsetInterval(\"texteDefile()\",5); // delai de deplacement

</script>

";
    }

    // line 87
    public function block_js($context, array $blocks = array())
    {
        // line 88
        echo "<script type=\"text/javascript\">window.onload = date('date_');</script>
<script type=\"text/javascript\">window.onload = heure('heure_');</script>
";
    }

    public function getTemplateName()
    {
        return "GCProjetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 88,  166 => 87,  133 => 57,  124 => 55,  120 => 54,  106 => 42,  95 => 40,  91 => 39,  63 => 16,  54 => 9,  51 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
