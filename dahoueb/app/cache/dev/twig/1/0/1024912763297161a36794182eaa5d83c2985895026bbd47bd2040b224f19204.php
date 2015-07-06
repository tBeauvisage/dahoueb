<?php

/* DL2015IndexBundle::indexLayout.html.twig */
class __TwigTemplate_1024912763297161a36794182eaa5d83c2985895026bbd47bd2040b224f19204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutBase.html.twig", "DL2015IndexBundle::indexLayout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4d4761490a08d355074c62f09a271ae08f09b7d57a75cdfe75cf08d3ac231d6 = $this->env->getExtension("native_profiler");
        $__internal_c4d4761490a08d355074c62f09a271ae08f09b7d57a75cdfe75cf08d3ac231d6->enter($__internal_c4d4761490a08d355074c62f09a271ae08f09b7d57a75cdfe75cf08d3ac231d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DL2015IndexBundle::indexLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d4761490a08d355074c62f09a271ae08f09b7d57a75cdfe75cf08d3ac231d6->leave($__internal_c4d4761490a08d355074c62f09a271ae08f09b7d57a75cdfe75cf08d3ac231d6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f273661a4eb00ee3f00df6aaa16059dfd7431292952372f968eb6de5ae6df6b4 = $this->env->getExtension("native_profiler");
        $__internal_f273661a4eb00ee3f00df6aaa16059dfd7431292952372f968eb6de5ae6df6b4->enter($__internal_f273661a4eb00ee3f00df6aaa16059dfd7431292952372f968eb6de5ae6df6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Index ";
        
        $__internal_f273661a4eb00ee3f00df6aaa16059dfd7431292952372f968eb6de5ae6df6b4->leave($__internal_f273661a4eb00ee3f00df6aaa16059dfd7431292952372f968eb6de5ae6df6b4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_73e7abe6e971b66bc2e1b8c19fca538fadf6a5c65ca53f218793645c69b0282f = $this->env->getExtension("native_profiler");
        $__internal_73e7abe6e971b66bc2e1b8c19fca538fadf6a5c65ca53f218793645c69b0282f->enter($__internal_73e7abe6e971b66bc2e1b8c19fca538fadf6a5c65ca53f218793645c69b0282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"center\">
        <section>
            <article id=\"contenu\">
                ";
        // line 7
        $this->displayBlock('article', $context, $blocks);
        // line 10
        echo "                     
            </article>
            <aside id=\"side\">
                ";
        // line 13
        $this->displayBlock('aside', $context, $blocks);
        // line 16
        echo "            </aside>
            
               
        </section>
    </div>
                 
";
        
        $__internal_73e7abe6e971b66bc2e1b8c19fca538fadf6a5c65ca53f218793645c69b0282f->leave($__internal_73e7abe6e971b66bc2e1b8c19fca538fadf6a5c65ca53f218793645c69b0282f_prof);

    }

    // line 7
    public function block_article($context, array $blocks = array())
    {
        $__internal_e452cf9467332b6d80c539633954706e75fa6cc76f2feb2f2a1ae471d638cc94 = $this->env->getExtension("native_profiler");
        $__internal_e452cf9467332b6d80c539633954706e75fa6cc76f2feb2f2a1ae471d638cc94->enter($__internal_e452cf9467332b6d80c539633954706e75fa6cc76f2feb2f2a1ae471d638cc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 8
        echo "                    ";
        $this->loadTemplate("DL2015IndexBundle::contenuArticle.html.twig", "DL2015IndexBundle::indexLayout.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        
        $__internal_e452cf9467332b6d80c539633954706e75fa6cc76f2feb2f2a1ae471d638cc94->leave($__internal_e452cf9467332b6d80c539633954706e75fa6cc76f2feb2f2a1ae471d638cc94_prof);

    }

    // line 13
    public function block_aside($context, array $blocks = array())
    {
        $__internal_1ee3e2f6cb1b8f0affa757fb277bd0d9af0d6a323ccc8562cf1933a4b272ff46 = $this->env->getExtension("native_profiler");
        $__internal_1ee3e2f6cb1b8f0affa757fb277bd0d9af0d6a323ccc8562cf1933a4b272ff46->enter($__internal_1ee3e2f6cb1b8f0affa757fb277bd0d9af0d6a323ccc8562cf1933a4b272ff46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 14
        echo "                   
                ";
        
        $__internal_1ee3e2f6cb1b8f0affa757fb277bd0d9af0d6a323ccc8562cf1933a4b272ff46->leave($__internal_1ee3e2f6cb1b8f0affa757fb277bd0d9af0d6a323ccc8562cf1933a4b272ff46_prof);

    }

    public function getTemplateName()
    {
        return "DL2015IndexBundle::indexLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 14,  98 => 13,  91 => 9,  88 => 8,  82 => 7,  69 => 16,  67 => 13,  62 => 10,  60 => 7,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
