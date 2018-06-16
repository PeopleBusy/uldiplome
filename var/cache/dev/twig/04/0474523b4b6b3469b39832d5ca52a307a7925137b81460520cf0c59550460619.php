<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f7c439d73aeea9cf66b0f64ae6ea47c1c1e8e566ad8d5f062b25432dce9386bd extends Twig_Template
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
        $__internal_025bebff720c862cc4f8576c5f0982b03a7872897ca6e87221e7333d3519b140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025bebff720c862cc4f8576c5f0982b03a7872897ca6e87221e7333d3519b140->enter($__internal_025bebff720c862cc4f8576c5f0982b03a7872897ca6e87221e7333d3519b140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9158b4d3aa33e0bd95cdc24cb8a63d76d885d6f6c7cfdc3bebd194d811c8042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9158b4d3aa33e0bd95cdc24cb8a63d76d885d6f6c7cfdc3bebd194d811c8042d->enter($__internal_9158b4d3aa33e0bd95cdc24cb8a63d76d885d6f6c7cfdc3bebd194d811c8042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_025bebff720c862cc4f8576c5f0982b03a7872897ca6e87221e7333d3519b140->leave($__internal_025bebff720c862cc4f8576c5f0982b03a7872897ca6e87221e7333d3519b140_prof);

        
        $__internal_9158b4d3aa33e0bd95cdc24cb8a63d76d885d6f6c7cfdc3bebd194d811c8042d->leave($__internal_9158b4d3aa33e0bd95cdc24cb8a63d76d885d6f6c7cfdc3bebd194d811c8042d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
