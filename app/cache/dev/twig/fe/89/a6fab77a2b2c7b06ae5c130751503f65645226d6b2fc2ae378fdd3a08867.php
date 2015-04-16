<?php

/* GCProjetBundle::layoutt.html.twig */
class __TwigTemplate_fe89a6fab77a2b2c7b06ae5c130751503f65645226d6b2fc2ae378fdd3a08867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::basee.html.twig");
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
        return "::basee.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"menu\">
        <div class=\"navbar-wrapper\">
            <div class=\"container\">
                <div class=\"navwrapper\">
                    <div class=\"navbar navbar-inverse navbar-static-top\">
                        <div class=\"container\">
                            <div class=\"navArea\">
                                <div class=\"navbar-collapse collapse\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"menuItem active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gc_projet_site");
        echo "\">ACCUEIL</a></li>
                                        <li class=\"menuItem\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("gc_projet_programme");
        echo "\"> PROGRAMMES</a></li>
        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "                                        <li class=\"menuItem\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gc_projet_utilisateurs");
            echo "\">UTILISATEURS</a></li>
                                       ";
        }
        // line 21
        echo "                                        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "                                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gc_bandeau");
            echo "\">BANDEAU</a></li>

                                        ";
        }
        // line 25
        echo "                                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("gc_playlist");
        echo "\">PLAYLIST</a></li>
                                        ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 27
            echo "                                            <li class=\"menuItem\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">DÉCONNEXION</a></li>
                                        ";
        } else {
            // line 29
            echo "
                                            <li class=\"menuItem\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">CONNEXION</a></li>
                                        ";
        }
        // line 32
        echo "                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
    }

    // line 43
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GCProjetBundle::layoutt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  115 => 32,  110 => 30,  107 => 29,  101 => 27,  99 => 26,  94 => 25,  87 => 22,  84 => 21,  78 => 19,  76 => 18,  72 => 17,  68 => 16,  57 => 7,  50 => 6,  47 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
