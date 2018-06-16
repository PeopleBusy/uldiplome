<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_aedff5c97e2987f4f6ba2629524b4684048f7e1741955dec9a0e04af45df3caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedff5c97e2987f4f6ba2629524b4684048f7e1741955dec9a0e04af45df3caf->enter($__internal_aedff5c97e2987f4f6ba2629524b4684048f7e1741955dec9a0e04af45df3caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_bfa9bde4eb742a5e5340b77eed62044eeb91798d50244821d620a07c98925e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa9bde4eb742a5e5340b77eed62044eeb91798d50244821d620a07c98925e5e->enter($__internal_bfa9bde4eb742a5e5340b77eed62044eeb91798d50244821d620a07c98925e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aedff5c97e2987f4f6ba2629524b4684048f7e1741955dec9a0e04af45df3caf->leave($__internal_aedff5c97e2987f4f6ba2629524b4684048f7e1741955dec9a0e04af45df3caf_prof);

        
        $__internal_bfa9bde4eb742a5e5340b77eed62044eeb91798d50244821d620a07c98925e5e->leave($__internal_bfa9bde4eb742a5e5340b77eed62044eeb91798d50244821d620a07c98925e5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_070ff34e92405492274882c367f3108b6d41894329ac4b45eef6b8824b1e6041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070ff34e92405492274882c367f3108b6d41894329ac4b45eef6b8824b1e6041->enter($__internal_070ff34e92405492274882c367f3108b6d41894329ac4b45eef6b8824b1e6041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5411747086caa4df7867d76a9d15e40ba24cea6307f40604efaee8105e8ff7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5411747086caa4df7867d76a9d15e40ba24cea6307f40604efaee8105e8ff7ef->enter($__internal_5411747086caa4df7867d76a9d15e40ba24cea6307f40604efaee8105e8ff7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5411747086caa4df7867d76a9d15e40ba24cea6307f40604efaee8105e8ff7ef->leave($__internal_5411747086caa4df7867d76a9d15e40ba24cea6307f40604efaee8105e8ff7ef_prof);

        
        $__internal_070ff34e92405492274882c367f3108b6d41894329ac4b45eef6b8824b1e6041->leave($__internal_070ff34e92405492274882c367f3108b6d41894329ac4b45eef6b8824b1e6041_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f232b7ab71f3b88c2126900783fde545cda0e83a2cda115e55a9110d53cafc34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f232b7ab71f3b88c2126900783fde545cda0e83a2cda115e55a9110d53cafc34->enter($__internal_f232b7ab71f3b88c2126900783fde545cda0e83a2cda115e55a9110d53cafc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd0496964b5260594542ea080e24fc8534f7a89c96120c1d2fca38c2e426b980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0496964b5260594542ea080e24fc8534f7a89c96120c1d2fca38c2e426b980->enter($__internal_cd0496964b5260594542ea080e24fc8534f7a89c96120c1d2fca38c2e426b980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cd0496964b5260594542ea080e24fc8534f7a89c96120c1d2fca38c2e426b980->leave($__internal_cd0496964b5260594542ea080e24fc8534f7a89c96120c1d2fca38c2e426b980_prof);

        
        $__internal_f232b7ab71f3b88c2126900783fde545cda0e83a2cda115e55a9110d53cafc34->leave($__internal_f232b7ab71f3b88c2126900783fde545cda0e83a2cda115e55a9110d53cafc34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efb82593e09c85f06025fafa79259a8d5eb38194aa0457e6d14a777c0d4f3df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb82593e09c85f06025fafa79259a8d5eb38194aa0457e6d14a777c0d4f3df4->enter($__internal_efb82593e09c85f06025fafa79259a8d5eb38194aa0457e6d14a777c0d4f3df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab55d61070c8b4207aff83e0c6369d096dd1963badc70eafbdff7ec17ed4bdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab55d61070c8b4207aff83e0c6369d096dd1963badc70eafbdff7ec17ed4bdbc->enter($__internal_ab55d61070c8b4207aff83e0c6369d096dd1963badc70eafbdff7ec17ed4bdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab55d61070c8b4207aff83e0c6369d096dd1963badc70eafbdff7ec17ed4bdbc->leave($__internal_ab55d61070c8b4207aff83e0c6369d096dd1963badc70eafbdff7ec17ed4bdbc_prof);

        
        $__internal_efb82593e09c85f06025fafa79259a8d5eb38194aa0457e6d14a777c0d4f3df4->leave($__internal_efb82593e09c85f06025fafa79259a8d5eb38194aa0457e6d14a777c0d4f3df4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
