<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_454420bf5d207588adcc7d50ccb775ad1f0570ccd67d68e083c1ad0df1fb7c29 extends Twig_Template
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
        $__internal_24457c85965a2b8da004e2c6cde12d34c2020979acf1f9bd69a5d3c057cf34ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24457c85965a2b8da004e2c6cde12d34c2020979acf1f9bd69a5d3c057cf34ed->enter($__internal_24457c85965a2b8da004e2c6cde12d34c2020979acf1f9bd69a5d3c057cf34ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_733691f6053636fe9698baa505af28f13037787a0dec78771c1506720db17282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733691f6053636fe9698baa505af28f13037787a0dec78771c1506720db17282->enter($__internal_733691f6053636fe9698baa505af28f13037787a0dec78771c1506720db17282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_24457c85965a2b8da004e2c6cde12d34c2020979acf1f9bd69a5d3c057cf34ed->leave($__internal_24457c85965a2b8da004e2c6cde12d34c2020979acf1f9bd69a5d3c057cf34ed_prof);

        
        $__internal_733691f6053636fe9698baa505af28f13037787a0dec78771c1506720db17282->leave($__internal_733691f6053636fe9698baa505af28f13037787a0dec78771c1506720db17282_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
