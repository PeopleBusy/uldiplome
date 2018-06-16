<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4d7fd10f69a1bfb994ca0ca60b4f238ec8a278e96d5d9c1a10477f7bc2da8789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58510a64b00631ec8ffe90a48760df20fe6223a45bd9e2a80d3713c2aeb58967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58510a64b00631ec8ffe90a48760df20fe6223a45bd9e2a80d3713c2aeb58967->enter($__internal_58510a64b00631ec8ffe90a48760df20fe6223a45bd9e2a80d3713c2aeb58967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_511ec5bc1f2e07850044b39ade49d25605b9d33f39b5529e1dda4d4ca0e7f986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511ec5bc1f2e07850044b39ade49d25605b9d33f39b5529e1dda4d4ca0e7f986->enter($__internal_511ec5bc1f2e07850044b39ade49d25605b9d33f39b5529e1dda4d4ca0e7f986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_58510a64b00631ec8ffe90a48760df20fe6223a45bd9e2a80d3713c2aeb58967->leave($__internal_58510a64b00631ec8ffe90a48760df20fe6223a45bd9e2a80d3713c2aeb58967_prof);

        
        $__internal_511ec5bc1f2e07850044b39ade49d25605b9d33f39b5529e1dda4d4ca0e7f986->leave($__internal_511ec5bc1f2e07850044b39ade49d25605b9d33f39b5529e1dda4d4ca0e7f986_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
