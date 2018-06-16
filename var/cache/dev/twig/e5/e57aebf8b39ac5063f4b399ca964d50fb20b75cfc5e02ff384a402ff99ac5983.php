<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_910efb06435b074bf90198d80975cbe32016c983cc9d7c74c1aed6bc596fb9d2 extends Twig_Template
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
        $__internal_916a6469466759a492b7c3978b56b469e738733bed19dd28f6fedd57db5d8f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916a6469466759a492b7c3978b56b469e738733bed19dd28f6fedd57db5d8f00->enter($__internal_916a6469466759a492b7c3978b56b469e738733bed19dd28f6fedd57db5d8f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ce8f34f461a6a4f06115e60710415be9a39ac822f60aa8c7443e858f8294050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8f34f461a6a4f06115e60710415be9a39ac822f60aa8c7443e858f8294050d->enter($__internal_ce8f34f461a6a4f06115e60710415be9a39ac822f60aa8c7443e858f8294050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_916a6469466759a492b7c3978b56b469e738733bed19dd28f6fedd57db5d8f00->leave($__internal_916a6469466759a492b7c3978b56b469e738733bed19dd28f6fedd57db5d8f00_prof);

        
        $__internal_ce8f34f461a6a4f06115e60710415be9a39ac822f60aa8c7443e858f8294050d->leave($__internal_ce8f34f461a6a4f06115e60710415be9a39ac822f60aa8c7443e858f8294050d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
