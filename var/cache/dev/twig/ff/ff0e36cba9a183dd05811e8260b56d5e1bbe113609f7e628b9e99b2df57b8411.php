<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_304397361907c1b885fe0207c9a1e59995f6f188804aa2ad2b2a5942f2d85a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91f38215c5b1ec7d0d598c02cb6d703af0663dedcd90932b9596327416dd9758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f38215c5b1ec7d0d598c02cb6d703af0663dedcd90932b9596327416dd9758->enter($__internal_91f38215c5b1ec7d0d598c02cb6d703af0663dedcd90932b9596327416dd9758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_abd0aed668333d227736d6c5ea2d8c91cbd3472dff006c72ef2fd7785ce782ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd0aed668333d227736d6c5ea2d8c91cbd3472dff006c72ef2fd7785ce782ca->enter($__internal_abd0aed668333d227736d6c5ea2d8c91cbd3472dff006c72ef2fd7785ce782ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f38215c5b1ec7d0d598c02cb6d703af0663dedcd90932b9596327416dd9758->leave($__internal_91f38215c5b1ec7d0d598c02cb6d703af0663dedcd90932b9596327416dd9758_prof);

        
        $__internal_abd0aed668333d227736d6c5ea2d8c91cbd3472dff006c72ef2fd7785ce782ca->leave($__internal_abd0aed668333d227736d6c5ea2d8c91cbd3472dff006c72ef2fd7785ce782ca_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e5217ac83db0620dbe2baf5d1e4321f38057d8bee7df6ba27c1fbf42a09789ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5217ac83db0620dbe2baf5d1e4321f38057d8bee7df6ba27c1fbf42a09789ba->enter($__internal_e5217ac83db0620dbe2baf5d1e4321f38057d8bee7df6ba27c1fbf42a09789ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_224d5e51d1f5e75b43e663cf36afeace5b77086b1f5dbbd66fe42bdc2c142740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224d5e51d1f5e75b43e663cf36afeace5b77086b1f5dbbd66fe42bdc2c142740->enter($__internal_224d5e51d1f5e75b43e663cf36afeace5b77086b1f5dbbd66fe42bdc2c142740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_224d5e51d1f5e75b43e663cf36afeace5b77086b1f5dbbd66fe42bdc2c142740->leave($__internal_224d5e51d1f5e75b43e663cf36afeace5b77086b1f5dbbd66fe42bdc2c142740_prof);

        
        $__internal_e5217ac83db0620dbe2baf5d1e4321f38057d8bee7df6ba27c1fbf42a09789ba->leave($__internal_e5217ac83db0620dbe2baf5d1e4321f38057d8bee7df6ba27c1fbf42a09789ba_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1353ff20bfd88b579945b4c0abc16822bc4e76c37e415e174550dafe5ff3b42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1353ff20bfd88b579945b4c0abc16822bc4e76c37e415e174550dafe5ff3b42f->enter($__internal_1353ff20bfd88b579945b4c0abc16822bc4e76c37e415e174550dafe5ff3b42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bd169fbaf1594419fce4342579b66bd0b618244dc985e8075574c49414ad95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd169fbaf1594419fce4342579b66bd0b618244dc985e8075574c49414ad95e->enter($__internal_3bd169fbaf1594419fce4342579b66bd0b618244dc985e8075574c49414ad95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3bd169fbaf1594419fce4342579b66bd0b618244dc985e8075574c49414ad95e->leave($__internal_3bd169fbaf1594419fce4342579b66bd0b618244dc985e8075574c49414ad95e_prof);

        
        $__internal_1353ff20bfd88b579945b4c0abc16822bc4e76c37e415e174550dafe5ff3b42f->leave($__internal_1353ff20bfd88b579945b4c0abc16822bc4e76c37e415e174550dafe5ff3b42f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
