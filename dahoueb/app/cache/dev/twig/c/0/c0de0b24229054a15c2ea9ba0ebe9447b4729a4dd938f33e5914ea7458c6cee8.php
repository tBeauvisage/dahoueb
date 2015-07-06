<?php

/* ::layoutBase.html.twig */
class __TwigTemplate_c0de0b24229054a15c2ea9ba0ebe9447b4729a4dd938f33e5914ea7458c6cee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9583d8b6afe8f8117baf3f68e017cf9b2df3e67266687e7594d240e7b54919bb = $this->env->getExtension("native_profiler");
        $__internal_9583d8b6afe8f8117baf3f68e017cf9b2df3e67266687e7594d240e7b54919bb->enter($__internal_9583d8b6afe8f8117baf3f68e017cf9b2df3e67266687e7594d240e7b54919bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutBase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
 <meta charset=\"UTF-8\" />
 <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "Yatch Club Dahouet</title>
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
        <div id=\"header\">
            
        </div>
        
        <nav id=\"navigation\">
            <ul>
                <li><a href=\"#\"><span class=\"chevron bottom\"></span>Accueil</a>
                    <ul><li><a href=\"#\">Présentation des régates</a></li></ul>
                </li>
                <li><a href=\"#\"><span class=\"chevron bottom\"></span>Challenges et régates</a>
                    <ul>
                    <li><a href=\"#\">Inscription</a></li>
                    <li><a href=\"#\">Résultats</a></li>
                    <li><a href=\"#\">Archives</a></li>
                    </ul>
                </li>   
            </ul>
        </nav>
       ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "       
        
            
        
       
        <div id=\"footer\">
            <div>
                <h3>Copyright &copy; 2014 DL</h3>
                <p>- Mentions légales - Contact - Acessibilité -</p>
                <p id=\"retour\"><a href=\"#header\">Retour en haut</a></p>
            </div>
            
        </div>
    </body>
</html>

";
        
        $__internal_9583d8b6afe8f8117baf3f68e017cf9b2df3e67266687e7594d240e7b54919bb->leave($__internal_9583d8b6afe8f8117baf3f68e017cf9b2df3e67266687e7594d240e7b54919bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_186941c4429f65ef326db31b1da05a15aa552b18a5319eac443039bc7588d2d4 = $this->env->getExtension("native_profiler");
        $__internal_186941c4429f65ef326db31b1da05a15aa552b18a5319eac443039bc7588d2d4->enter($__internal_186941c4429f65ef326db31b1da05a15aa552b18a5319eac443039bc7588d2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_186941c4429f65ef326db31b1da05a15aa552b18a5319eac443039bc7588d2d4->leave($__internal_186941c4429f65ef326db31b1da05a15aa552b18a5319eac443039bc7588d2d4_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_04b7b910d5c677f2bbdcab8dcc8297eda20805c95249524d555829c54f1b64f7 = $this->env->getExtension("native_profiler");
        $__internal_04b7b910d5c677f2bbdcab8dcc8297eda20805c95249524d555829c54f1b64f7->enter($__internal_04b7b910d5c677f2bbdcab8dcc8297eda20805c95249524d555829c54f1b64f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "       ";
        
        $__internal_04b7b910d5c677f2bbdcab8dcc8297eda20805c95249524d555829c54f1b64f7->leave($__internal_04b7b910d5c677f2bbdcab8dcc8297eda20805c95249524d555829c54f1b64f7_prof);

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
        return array (  100 => 28,  94 => 27,  83 => 5,  60 => 29,  58 => 27,  34 => 6,  30 => 5,  24 => 1,);
    }
}
