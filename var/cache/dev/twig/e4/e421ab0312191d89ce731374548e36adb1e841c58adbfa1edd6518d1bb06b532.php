<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_922dc58b5e036833353390392f226bf0d4df94581cd9f1e0e50d13d5ca7f808f extends Twig_Template
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
        $__internal_d2160d8ab7143c12cc0f6159f08f713f33f3b3d27ebab4f00d3f8fe4a0cb0b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2160d8ab7143c12cc0f6159f08f713f33f3b3d27ebab4f00d3f8fe4a0cb0b4a->enter($__internal_d2160d8ab7143c12cc0f6159f08f713f33f3b3d27ebab4f00d3f8fe4a0cb0b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_bd6bc3531f40cc4cab43cb2ff19615f8fedf9aadaa16b755d4ae91f330d59d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6bc3531f40cc4cab43cb2ff19615f8fedf9aadaa16b755d4ae91f330d59d1c->enter($__internal_bd6bc3531f40cc4cab43cb2ff19615f8fedf9aadaa16b755d4ae91f330d59d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d2160d8ab7143c12cc0f6159f08f713f33f3b3d27ebab4f00d3f8fe4a0cb0b4a->leave($__internal_d2160d8ab7143c12cc0f6159f08f713f33f3b3d27ebab4f00d3f8fe4a0cb0b4a_prof);

        
        $__internal_bd6bc3531f40cc4cab43cb2ff19615f8fedf9aadaa16b755d4ae91f330d59d1c->leave($__internal_bd6bc3531f40cc4cab43cb2ff19615f8fedf9aadaa16b755d4ae91f330d59d1c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
