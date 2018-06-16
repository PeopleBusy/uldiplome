<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3d8a03a1f444dd2eecae034b7d3394a80be29ccf07747649e8f7890c4b9beedf extends Twig_Template
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
        $__internal_643a0480dcb369133ad63a74631300be25ea7f828706a9e490f9bd3c55a5dd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643a0480dcb369133ad63a74631300be25ea7f828706a9e490f9bd3c55a5dd6d->enter($__internal_643a0480dcb369133ad63a74631300be25ea7f828706a9e490f9bd3c55a5dd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_44816b9c83e0e898fe1989510d687753e463f65f56aaec46aad509086cfd6199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44816b9c83e0e898fe1989510d687753e463f65f56aaec46aad509086cfd6199->enter($__internal_44816b9c83e0e898fe1989510d687753e463f65f56aaec46aad509086cfd6199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_643a0480dcb369133ad63a74631300be25ea7f828706a9e490f9bd3c55a5dd6d->leave($__internal_643a0480dcb369133ad63a74631300be25ea7f828706a9e490f9bd3c55a5dd6d_prof);

        
        $__internal_44816b9c83e0e898fe1989510d687753e463f65f56aaec46aad509086cfd6199->leave($__internal_44816b9c83e0e898fe1989510d687753e463f65f56aaec46aad509086cfd6199_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
