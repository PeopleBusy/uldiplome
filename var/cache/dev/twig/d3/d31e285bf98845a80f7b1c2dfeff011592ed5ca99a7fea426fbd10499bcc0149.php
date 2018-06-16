<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_afcdb8821998075a7745c0abd753644a8f5f83d79c50d27a6ad49ab66ab0d382 extends Twig_Template
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
        $__internal_1d17ad3a9b36b6c4bd3da7e84b7edae2163bf22bc5f30fcf84dd13d7ba0fbcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d17ad3a9b36b6c4bd3da7e84b7edae2163bf22bc5f30fcf84dd13d7ba0fbcbf->enter($__internal_1d17ad3a9b36b6c4bd3da7e84b7edae2163bf22bc5f30fcf84dd13d7ba0fbcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5cac5bae1b42c9fe77b42bddb2be0dbed20e00ebbfdff54c87c592bb79e29f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cac5bae1b42c9fe77b42bddb2be0dbed20e00ebbfdff54c87c592bb79e29f5a->enter($__internal_5cac5bae1b42c9fe77b42bddb2be0dbed20e00ebbfdff54c87c592bb79e29f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1d17ad3a9b36b6c4bd3da7e84b7edae2163bf22bc5f30fcf84dd13d7ba0fbcbf->leave($__internal_1d17ad3a9b36b6c4bd3da7e84b7edae2163bf22bc5f30fcf84dd13d7ba0fbcbf_prof);

        
        $__internal_5cac5bae1b42c9fe77b42bddb2be0dbed20e00ebbfdff54c87c592bb79e29f5a->leave($__internal_5cac5bae1b42c9fe77b42bddb2be0dbed20e00ebbfdff54c87c592bb79e29f5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
