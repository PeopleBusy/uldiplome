<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_261df07bbb8dcdd636f54e93cef60ea090261cdb18de732a98807b6749b17c80 extends Twig_Template
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
        $__internal_6b72e07c61934aea7e104e6295766e897e50373da8ca19d1414c2dd8ec8cb0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b72e07c61934aea7e104e6295766e897e50373da8ca19d1414c2dd8ec8cb0f9->enter($__internal_6b72e07c61934aea7e104e6295766e897e50373da8ca19d1414c2dd8ec8cb0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0a634b4e5f84b2be06508f3c0cdb9230b9059a7fa563fe510b1b0510af049e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a634b4e5f84b2be06508f3c0cdb9230b9059a7fa563fe510b1b0510af049e7c->enter($__internal_0a634b4e5f84b2be06508f3c0cdb9230b9059a7fa563fe510b1b0510af049e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6b72e07c61934aea7e104e6295766e897e50373da8ca19d1414c2dd8ec8cb0f9->leave($__internal_6b72e07c61934aea7e104e6295766e897e50373da8ca19d1414c2dd8ec8cb0f9_prof);

        
        $__internal_0a634b4e5f84b2be06508f3c0cdb9230b9059a7fa563fe510b1b0510af049e7c->leave($__internal_0a634b4e5f84b2be06508f3c0cdb9230b9059a7fa563fe510b1b0510af049e7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
