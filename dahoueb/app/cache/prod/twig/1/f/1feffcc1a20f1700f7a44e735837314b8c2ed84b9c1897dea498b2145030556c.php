<?php

/* DL2015IndexBundle:Default:index.html.twig */
class __TwigTemplate_1feffcc1a20f1700f7a44e735837314b8c2ed84b9c1897dea498b2145030556c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DL2015IndexBundle::indexLayout.html.twig", "DL2015IndexBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "DL2015IndexBundle::indexLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "DL2015IndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
