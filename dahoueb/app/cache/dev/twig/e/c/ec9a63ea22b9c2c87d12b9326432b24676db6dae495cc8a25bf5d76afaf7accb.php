<?php

/* DL2015IndexBundle::message.html.twig */
class __TwigTemplate_ec9a63ea22b9c2c87d12b9326432b24676db6dae495cc8a25bf5d76afaf7accb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DL2015IndexBundle::aside.html.twig", "DL2015IndexBundle::message.html.twig", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DL2015IndexBundle::aside.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e38203871c02d508b8ad393cdc155acae5bd98ca1cf538f6ee49283429cd5646 = $this->env->getExtension("native_profiler");
        $__internal_e38203871c02d508b8ad393cdc155acae5bd98ca1cf538f6ee49283429cd5646->enter($__internal_e38203871c02d508b8ad393cdc155acae5bd98ca1cf538f6ee49283429cd5646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DL2015IndexBundle::message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38203871c02d508b8ad393cdc155acae5bd98ca1cf538f6ee49283429cd5646->leave($__internal_e38203871c02d508b8ad393cdc155acae5bd98ca1cf538f6ee49283429cd5646_prof);

    }

    // line 2
    public function block_message($context, array $blocks = array())
    {
        $__internal_3d820a1cf511028bedf20e138e6617b8c9cd1322a3e559a5d2be5b5334854732 = $this->env->getExtension("native_profiler");
        $__internal_3d820a1cf511028bedf20e138e6617b8c9cd1322a3e559a5d2be5b5334854732->enter($__internal_3d820a1cf511028bedf20e138e6617b8c9cd1322a3e559a5d2be5b5334854732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        // line 3
        echo "
    <p id=\"error\"> Les identifiants que vous avez saisi sont incorrects <p>
    
    
    ";
        
        $__internal_3d820a1cf511028bedf20e138e6617b8c9cd1322a3e559a5d2be5b5334854732->leave($__internal_3d820a1cf511028bedf20e138e6617b8c9cd1322a3e559a5d2be5b5334854732_prof);

    }

    public function getTemplateName()
    {
        return "DL2015IndexBundle::message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
