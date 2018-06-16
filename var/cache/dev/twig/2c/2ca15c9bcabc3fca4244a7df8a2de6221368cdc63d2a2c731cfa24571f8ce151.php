<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_934f849bae8209bbd0529a11a780ea461470cc6e49ceb03f8c024f987b368e5b extends Twig_Template
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
        $__internal_083d707159aaa87b386429bd60027a570c92d484e7b29ea4f1239a3d7d86d9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083d707159aaa87b386429bd60027a570c92d484e7b29ea4f1239a3d7d86d9bf->enter($__internal_083d707159aaa87b386429bd60027a570c92d484e7b29ea4f1239a3d7d86d9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_8b771bbcadd3a8a9c3d785c532171a7acbcf8eb03d7cf6d1457f161a5664529d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b771bbcadd3a8a9c3d785c532171a7acbcf8eb03d7cf6d1457f161a5664529d->enter($__internal_8b771bbcadd3a8a9c3d785c532171a7acbcf8eb03d7cf6d1457f161a5664529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_083d707159aaa87b386429bd60027a570c92d484e7b29ea4f1239a3d7d86d9bf->leave($__internal_083d707159aaa87b386429bd60027a570c92d484e7b29ea4f1239a3d7d86d9bf_prof);

        
        $__internal_8b771bbcadd3a8a9c3d785c532171a7acbcf8eb03d7cf6d1457f161a5664529d->leave($__internal_8b771bbcadd3a8a9c3d785c532171a7acbcf8eb03d7cf6d1457f161a5664529d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
