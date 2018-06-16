<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_62b5f07a84b2f46ebe4d4f975dc098357105d6285dbbc1f605b3b8c40d59836e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5ebea44f3451d2d6ca45747ede2b675295f02efabc57cb2641f3b7669cda1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ebea44f3451d2d6ca45747ede2b675295f02efabc57cb2641f3b7669cda1d8->enter($__internal_f5ebea44f3451d2d6ca45747ede2b675295f02efabc57cb2641f3b7669cda1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_07420c0e674747596de4664a5bc51f40e9dbdcf3b859c30c9798520709f02e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07420c0e674747596de4664a5bc51f40e9dbdcf3b859c30c9798520709f02e7d->enter($__internal_07420c0e674747596de4664a5bc51f40e9dbdcf3b859c30c9798520709f02e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ebea44f3451d2d6ca45747ede2b675295f02efabc57cb2641f3b7669cda1d8->leave($__internal_f5ebea44f3451d2d6ca45747ede2b675295f02efabc57cb2641f3b7669cda1d8_prof);

        
        $__internal_07420c0e674747596de4664a5bc51f40e9dbdcf3b859c30c9798520709f02e7d->leave($__internal_07420c0e674747596de4664a5bc51f40e9dbdcf3b859c30c9798520709f02e7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c30012369c94089efda002855548313ee21a2a339b3f7af02f389c6be4894f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30012369c94089efda002855548313ee21a2a339b3f7af02f389c6be4894f0d->enter($__internal_c30012369c94089efda002855548313ee21a2a339b3f7af02f389c6be4894f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_540534e74b53ab2ee92e8c2aa31383ebd87b3de8b2dc34002cedbf0819030452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540534e74b53ab2ee92e8c2aa31383ebd87b3de8b2dc34002cedbf0819030452->enter($__internal_540534e74b53ab2ee92e8c2aa31383ebd87b3de8b2dc34002cedbf0819030452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_540534e74b53ab2ee92e8c2aa31383ebd87b3de8b2dc34002cedbf0819030452->leave($__internal_540534e74b53ab2ee92e8c2aa31383ebd87b3de8b2dc34002cedbf0819030452_prof);

        
        $__internal_c30012369c94089efda002855548313ee21a2a339b3f7af02f389c6be4894f0d->leave($__internal_c30012369c94089efda002855548313ee21a2a339b3f7af02f389c6be4894f0d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_204a2f3eb57d5a57975ea518356bd0571743d426ac5e89bf22d7fccc4cd66eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204a2f3eb57d5a57975ea518356bd0571743d426ac5e89bf22d7fccc4cd66eb4->enter($__internal_204a2f3eb57d5a57975ea518356bd0571743d426ac5e89bf22d7fccc4cd66eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_128bbeecdf16714a520bd6c6b0660c5ee576102ad3117d3a19ada31b81596f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128bbeecdf16714a520bd6c6b0660c5ee576102ad3117d3a19ada31b81596f93->enter($__internal_128bbeecdf16714a520bd6c6b0660c5ee576102ad3117d3a19ada31b81596f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_128bbeecdf16714a520bd6c6b0660c5ee576102ad3117d3a19ada31b81596f93->leave($__internal_128bbeecdf16714a520bd6c6b0660c5ee576102ad3117d3a19ada31b81596f93_prof);

        
        $__internal_204a2f3eb57d5a57975ea518356bd0571743d426ac5e89bf22d7fccc4cd66eb4->leave($__internal_204a2f3eb57d5a57975ea518356bd0571743d426ac5e89bf22d7fccc4cd66eb4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
