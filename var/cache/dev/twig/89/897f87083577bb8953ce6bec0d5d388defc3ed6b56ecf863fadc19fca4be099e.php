<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2def8fb200b4ce5441b1dcf1fa9c30401d222546f7c1850ed4735a3444aa93f6 extends Twig_Template
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
        $__internal_6d38dae6e11ff1697c0e912cf1c2ab5efcfa67763922fc2d3d261447dfe7c784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d38dae6e11ff1697c0e912cf1c2ab5efcfa67763922fc2d3d261447dfe7c784->enter($__internal_6d38dae6e11ff1697c0e912cf1c2ab5efcfa67763922fc2d3d261447dfe7c784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e26fe7e49b1261a852043ad942fcb44edd10575ff9e74b06d9abce3bed06d235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26fe7e49b1261a852043ad942fcb44edd10575ff9e74b06d9abce3bed06d235->enter($__internal_e26fe7e49b1261a852043ad942fcb44edd10575ff9e74b06d9abce3bed06d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6d38dae6e11ff1697c0e912cf1c2ab5efcfa67763922fc2d3d261447dfe7c784->leave($__internal_6d38dae6e11ff1697c0e912cf1c2ab5efcfa67763922fc2d3d261447dfe7c784_prof);

        
        $__internal_e26fe7e49b1261a852043ad942fcb44edd10575ff9e74b06d9abce3bed06d235->leave($__internal_e26fe7e49b1261a852043ad942fcb44edd10575ff9e74b06d9abce3bed06d235_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
