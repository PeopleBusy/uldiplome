<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_620259892cdf4616032400796981a5fd7efb6db87751b89cc0177c20843a32ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620259892cdf4616032400796981a5fd7efb6db87751b89cc0177c20843a32ee->enter($__internal_620259892cdf4616032400796981a5fd7efb6db87751b89cc0177c20843a32ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_430a465324dc02d2b177c01898c6bc87f999047b2b948ec744f9d00690d43472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430a465324dc02d2b177c01898c6bc87f999047b2b948ec744f9d00690d43472->enter($__internal_430a465324dc02d2b177c01898c6bc87f999047b2b948ec744f9d00690d43472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620259892cdf4616032400796981a5fd7efb6db87751b89cc0177c20843a32ee->leave($__internal_620259892cdf4616032400796981a5fd7efb6db87751b89cc0177c20843a32ee_prof);

        
        $__internal_430a465324dc02d2b177c01898c6bc87f999047b2b948ec744f9d00690d43472->leave($__internal_430a465324dc02d2b177c01898c6bc87f999047b2b948ec744f9d00690d43472_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e3c0e91114f5cf2cf9855faecc3dd0a73d8c6590324b7af9ae03a0378f06744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3c0e91114f5cf2cf9855faecc3dd0a73d8c6590324b7af9ae03a0378f06744->enter($__internal_9e3c0e91114f5cf2cf9855faecc3dd0a73d8c6590324b7af9ae03a0378f06744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d6ad1eb3c5ebc11a258d99d6fbf5d81610294759bdaa9f71ff7ce4506eaf97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6ad1eb3c5ebc11a258d99d6fbf5d81610294759bdaa9f71ff7ce4506eaf97a->enter($__internal_6d6ad1eb3c5ebc11a258d99d6fbf5d81610294759bdaa9f71ff7ce4506eaf97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6d6ad1eb3c5ebc11a258d99d6fbf5d81610294759bdaa9f71ff7ce4506eaf97a->leave($__internal_6d6ad1eb3c5ebc11a258d99d6fbf5d81610294759bdaa9f71ff7ce4506eaf97a_prof);

        
        $__internal_9e3c0e91114f5cf2cf9855faecc3dd0a73d8c6590324b7af9ae03a0378f06744->leave($__internal_9e3c0e91114f5cf2cf9855faecc3dd0a73d8c6590324b7af9ae03a0378f06744_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb5acda05d25f33c9a2e97b683e4f277cd272584071e39ac92e23e7aa46dfb40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5acda05d25f33c9a2e97b683e4f277cd272584071e39ac92e23e7aa46dfb40->enter($__internal_cb5acda05d25f33c9a2e97b683e4f277cd272584071e39ac92e23e7aa46dfb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b01b032ca1ea1ef62abf4e98c53c9f2ec0e82e1e01b21440f275626e2fb2ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b01b032ca1ea1ef62abf4e98c53c9f2ec0e82e1e01b21440f275626e2fb2ea9->enter($__internal_6b01b032ca1ea1ef62abf4e98c53c9f2ec0e82e1e01b21440f275626e2fb2ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6b01b032ca1ea1ef62abf4e98c53c9f2ec0e82e1e01b21440f275626e2fb2ea9->leave($__internal_6b01b032ca1ea1ef62abf4e98c53c9f2ec0e82e1e01b21440f275626e2fb2ea9_prof);

        
        $__internal_cb5acda05d25f33c9a2e97b683e4f277cd272584071e39ac92e23e7aa46dfb40->leave($__internal_cb5acda05d25f33c9a2e97b683e4f277cd272584071e39ac92e23e7aa46dfb40_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e629f02d937b7717d08a257071b119afccb55734d341f0c52d36b32520956b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e629f02d937b7717d08a257071b119afccb55734d341f0c52d36b32520956b1->enter($__internal_6e629f02d937b7717d08a257071b119afccb55734d341f0c52d36b32520956b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53d772827fe45ebfa092cd2948ca047c06b8d201f8019c830d48cc6aa92c498e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d772827fe45ebfa092cd2948ca047c06b8d201f8019c830d48cc6aa92c498e->enter($__internal_53d772827fe45ebfa092cd2948ca047c06b8d201f8019c830d48cc6aa92c498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_53d772827fe45ebfa092cd2948ca047c06b8d201f8019c830d48cc6aa92c498e->leave($__internal_53d772827fe45ebfa092cd2948ca047c06b8d201f8019c830d48cc6aa92c498e_prof);

        
        $__internal_6e629f02d937b7717d08a257071b119afccb55734d341f0c52d36b32520956b1->leave($__internal_6e629f02d937b7717d08a257071b119afccb55734d341f0c52d36b32520956b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
