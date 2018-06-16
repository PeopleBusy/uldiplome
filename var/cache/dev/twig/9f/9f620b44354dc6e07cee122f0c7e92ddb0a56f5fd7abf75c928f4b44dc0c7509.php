<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fcffe5d8c8ed1cfa381e3dd3a852bd47bd2a45710ab8e26fa9db2821d5b17f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6533bd567e0952d839ac8630a70707bd6d5cd140ba4f659c3600f84a0badca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6533bd567e0952d839ac8630a70707bd6d5cd140ba4f659c3600f84a0badca9->enter($__internal_b6533bd567e0952d839ac8630a70707bd6d5cd140ba4f659c3600f84a0badca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4694e37c2e68d80730eb13420fd230fd672c5ead11fa51abba5cfd45191fcc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4694e37c2e68d80730eb13420fd230fd672c5ead11fa51abba5cfd45191fcc54->enter($__internal_4694e37c2e68d80730eb13420fd230fd672c5ead11fa51abba5cfd45191fcc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b6533bd567e0952d839ac8630a70707bd6d5cd140ba4f659c3600f84a0badca9->leave($__internal_b6533bd567e0952d839ac8630a70707bd6d5cd140ba4f659c3600f84a0badca9_prof);

        
        $__internal_4694e37c2e68d80730eb13420fd230fd672c5ead11fa51abba5cfd45191fcc54->leave($__internal_4694e37c2e68d80730eb13420fd230fd672c5ead11fa51abba5cfd45191fcc54_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b5c60fabc827ac852f9ea7acacda0e44b1da7dd0d37e7ba3fc69d870249fb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5c60fabc827ac852f9ea7acacda0e44b1da7dd0d37e7ba3fc69d870249fb6c->enter($__internal_7b5c60fabc827ac852f9ea7acacda0e44b1da7dd0d37e7ba3fc69d870249fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a5c5930b22d94193b5c36717ef9d95dbf2b9a5642d3bda5034139abe9cc562c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5c5930b22d94193b5c36717ef9d95dbf2b9a5642d3bda5034139abe9cc562c->enter($__internal_6a5c5930b22d94193b5c36717ef9d95dbf2b9a5642d3bda5034139abe9cc562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a5c5930b22d94193b5c36717ef9d95dbf2b9a5642d3bda5034139abe9cc562c->leave($__internal_6a5c5930b22d94193b5c36717ef9d95dbf2b9a5642d3bda5034139abe9cc562c_prof);

        
        $__internal_7b5c60fabc827ac852f9ea7acacda0e44b1da7dd0d37e7ba3fc69d870249fb6c->leave($__internal_7b5c60fabc827ac852f9ea7acacda0e44b1da7dd0d37e7ba3fc69d870249fb6c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
