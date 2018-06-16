<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6800a6840dc43dc6d4ff9f128a3911935bc27e3942ae8de2491a4846539ceb8c extends Twig_Template
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
        $__internal_a5c6b2af28ed802ef7df39feead8e2b6fd504d84efe43746c8d9d14a4150ca3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c6b2af28ed802ef7df39feead8e2b6fd504d84efe43746c8d9d14a4150ca3c->enter($__internal_a5c6b2af28ed802ef7df39feead8e2b6fd504d84efe43746c8d9d14a4150ca3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d706787bbc57e1bce6f3e71d3cd4f8d33575018354c68178881aa09d6cd43564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d706787bbc57e1bce6f3e71d3cd4f8d33575018354c68178881aa09d6cd43564->enter($__internal_d706787bbc57e1bce6f3e71d3cd4f8d33575018354c68178881aa09d6cd43564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a5c6b2af28ed802ef7df39feead8e2b6fd504d84efe43746c8d9d14a4150ca3c->leave($__internal_a5c6b2af28ed802ef7df39feead8e2b6fd504d84efe43746c8d9d14a4150ca3c_prof);

        
        $__internal_d706787bbc57e1bce6f3e71d3cd4f8d33575018354c68178881aa09d6cd43564->leave($__internal_d706787bbc57e1bce6f3e71d3cd4f8d33575018354c68178881aa09d6cd43564_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
