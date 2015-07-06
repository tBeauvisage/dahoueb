<?php

/* DL2015IndexBundle::aside.html.twig */
class __TwigTemplate_d0abc12e22988587509d94a7e90bf61b7682a1383ac790325cbf2aa5a530b578 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DL2015IndexBundle::indexLayout.html.twig", "DL2015IndexBundle::aside.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DL2015IndexBundle::indexLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a0e28b2e2a948af4f14fea387a899f65fc0fac13b9b8fbcd3c65365b373f87 = $this->env->getExtension("native_profiler");
        $__internal_05a0e28b2e2a948af4f14fea387a899f65fc0fac13b9b8fbcd3c65365b373f87->enter($__internal_05a0e28b2e2a948af4f14fea387a899f65fc0fac13b9b8fbcd3c65365b373f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DL2015IndexBundle::aside.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a0e28b2e2a948af4f14fea387a899f65fc0fac13b9b8fbcd3c65365b373f87->leave($__internal_05a0e28b2e2a948af4f14fea387a899f65fc0fac13b9b8fbcd3c65365b373f87_prof);

    }

    // line 2
    public function block_aside($context, array $blocks = array())
    {
        $__internal_326f143bf0a7b22c4aa3cf6378dd5039251ef83a376e498d2ee2ec63fa824494 = $this->env->getExtension("native_profiler");
        $__internal_326f143bf0a7b22c4aa3cf6378dd5039251ef83a376e498d2ee2ec63fa824494->enter($__internal_326f143bf0a7b22c4aa3cf6378dd5039251ef83a376e498d2ee2ec63fa824494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 3
        echo "<div id=\"reseaux\">
    <p>Suivez-nous sur les réseaux sociaux</p>
    <a href=\"https://fr-fr.facebook.com/ycvalandre\"><img src=\"../../web/bundles/index/images/FB.png\"/></a>
    <a href=\"https://twitter.com/ycvalandre\"><img src=\"../../web/bundles/index/images/Tw.png\"/></a>
</div>
<div id=\"connection\">
    <div id=\"bandeauInt\">Connection</div>
    
  ";
        // line 11
        $this->displayBlock('message', $context, $blocks);
        // line 13
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
   
</div>
<div id=\"infChall\">
    <div id=\"bandeauInt\">Challenge</div>
    
</div>
<div id=\"recherche\">
    <div id=\"bandeauInt\">Recherche</div>
    <div id=\"champ\">
        <input type=\"text\" name=\"recherche\" id=\"cherche\" placeholder=\"recherche\">
        <div id=\"rech\"><a id=\"lien\" href=\"#\">Rechercher !</a></div>
    </div>
</div>


";
        
        $__internal_326f143bf0a7b22c4aa3cf6378dd5039251ef83a376e498d2ee2ec63fa824494->leave($__internal_326f143bf0a7b22c4aa3cf6378dd5039251ef83a376e498d2ee2ec63fa824494_prof);

    }

    // line 11
    public function block_message($context, array $blocks = array())
    {
        $__internal_166c0c5c14369d6e88509af10c7a3db8fe326d2c3755b11e65d35734b20a3930 = $this->env->getExtension("native_profiler");
        $__internal_166c0c5c14369d6e88509af10c7a3db8fe326d2c3755b11e65d35734b20a3930->enter($__internal_166c0c5c14369d6e88509af10c7a3db8fe326d2c3755b11e65d35734b20a3930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        // line 12
        echo "      ";
        
        $__internal_166c0c5c14369d6e88509af10c7a3db8fe326d2c3755b11e65d35734b20a3930->leave($__internal_166c0c5c14369d6e88509af10c7a3db8fe326d2c3755b11e65d35734b20a3930_prof);

    }

    public function getTemplateName()
    {
        return "DL2015IndexBundle::aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  78 => 11,  53 => 13,  51 => 11,  41 => 3,  35 => 2,  11 => 1,);
    }
}
