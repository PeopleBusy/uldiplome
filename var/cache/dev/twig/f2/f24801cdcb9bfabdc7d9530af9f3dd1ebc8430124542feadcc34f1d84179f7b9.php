<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_54b4561a3fe1b5f6d91d31c2b8ae5ef4de0ab84b7815cc6243bda4acbb90bf0a extends Twig_Template
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
        $__internal_b3dff4c020e0de3eb2079b810751ffb0809afd1df0ad475cc68d30f4e775611b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dff4c020e0de3eb2079b810751ffb0809afd1df0ad475cc68d30f4e775611b->enter($__internal_b3dff4c020e0de3eb2079b810751ffb0809afd1df0ad475cc68d30f4e775611b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_dcae9ff6f537a0a1bb5393c8366b297e0a797e9b91f99708dae6317b9d36e633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcae9ff6f537a0a1bb5393c8366b297e0a797e9b91f99708dae6317b9d36e633->enter($__internal_dcae9ff6f537a0a1bb5393c8366b297e0a797e9b91f99708dae6317b9d36e633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b3dff4c020e0de3eb2079b810751ffb0809afd1df0ad475cc68d30f4e775611b->leave($__internal_b3dff4c020e0de3eb2079b810751ffb0809afd1df0ad475cc68d30f4e775611b_prof);

        
        $__internal_dcae9ff6f537a0a1bb5393c8366b297e0a797e9b91f99708dae6317b9d36e633->leave($__internal_dcae9ff6f537a0a1bb5393c8366b297e0a797e9b91f99708dae6317b9d36e633_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
