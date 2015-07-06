<?php

/* ::layoutBase.html.twig */
class __TwigTemplate_c0de0b24229054a15c2ea9ba0ebe9447b4729a4dd938f33e5914ea7458c6cee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
 <meta charset=\"UTF-8\" />
<title>Yatch Club Dahouet</title>
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
\t<header> </header>
\t<nav id=\"navigation\">
            <ul>
                <li><a href=\"#\">Accueil</a>
                    <ul><li><a href=\"#\">Présentation des régates</a></li></ul>
                </li>
                <li><a href=\"#\">Challenges et régates</a>
                    <ul>
                    <li><a href=\"#\">Inscription</a></li>
                    <li><a href=\"#\">Résultats</a></li>
                    <li><a href=\"#\">Archives</a></li>
                    </ul>
                </li>   
            </ul>
        </nav>
\t<div class=\"content\">placeholder</div>
\t<footer>
\t\t<div id = \"copyright\"><a class=\"infooter\">Copyright &copy 2015 DL</a></div> 
\t\t<div id=\"return\"><a class=\"infooter\" href=\"#\">Retour en haut</a></div>
\t\t<div> <a class=\"infooter\">-Mentions legales-Contact-Accessiblité</a></div>


\t</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "::layoutBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
