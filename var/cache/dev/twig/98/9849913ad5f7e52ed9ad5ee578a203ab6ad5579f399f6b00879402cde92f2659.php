<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_67210b46eb6ea29047a65b9b0be637713427b54db75c36dff6e9e82ed4165885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eccb2d2ebcedba5b3713e46ffc67441dc14ec7d76f8843f49ca1157407e878b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eccb2d2ebcedba5b3713e46ffc67441dc14ec7d76f8843f49ca1157407e878b->enter($__internal_3eccb2d2ebcedba5b3713e46ffc67441dc14ec7d76f8843f49ca1157407e878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7fdcd96a6021e52994eac50ac1a39e214ca8b7f3b45fb048a2c6fbfd7236ddbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdcd96a6021e52994eac50ac1a39e214ca8b7f3b45fb048a2c6fbfd7236ddbe->enter($__internal_7fdcd96a6021e52994eac50ac1a39e214ca8b7f3b45fb048a2c6fbfd7236ddbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eccb2d2ebcedba5b3713e46ffc67441dc14ec7d76f8843f49ca1157407e878b->leave($__internal_3eccb2d2ebcedba5b3713e46ffc67441dc14ec7d76f8843f49ca1157407e878b_prof);

        
        $__internal_7fdcd96a6021e52994eac50ac1a39e214ca8b7f3b45fb048a2c6fbfd7236ddbe->leave($__internal_7fdcd96a6021e52994eac50ac1a39e214ca8b7f3b45fb048a2c6fbfd7236ddbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f22b7b27a4f82927bb540a2a59d34b4b1c0ef7d73cad6f564cb4b0890f0823a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f22b7b27a4f82927bb540a2a59d34b4b1c0ef7d73cad6f564cb4b0890f0823a->enter($__internal_4f22b7b27a4f82927bb540a2a59d34b4b1c0ef7d73cad6f564cb4b0890f0823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_897c004c54008b210cf1c038557276f9fd42b093c849d00c8a41bf8306467969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897c004c54008b210cf1c038557276f9fd42b093c849d00c8a41bf8306467969->enter($__internal_897c004c54008b210cf1c038557276f9fd42b093c849d00c8a41bf8306467969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_897c004c54008b210cf1c038557276f9fd42b093c849d00c8a41bf8306467969->leave($__internal_897c004c54008b210cf1c038557276f9fd42b093c849d00c8a41bf8306467969_prof);

        
        $__internal_4f22b7b27a4f82927bb540a2a59d34b4b1c0ef7d73cad6f564cb4b0890f0823a->leave($__internal_4f22b7b27a4f82927bb540a2a59d34b4b1c0ef7d73cad6f564cb4b0890f0823a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b08205d424cac92c166be55148c3cb70574c14b22c8263483753cc2c7e87273a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08205d424cac92c166be55148c3cb70574c14b22c8263483753cc2c7e87273a->enter($__internal_b08205d424cac92c166be55148c3cb70574c14b22c8263483753cc2c7e87273a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d7150a915e13c548e69a754448b8f293978abd90d6a559286d30d516c8f7e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7150a915e13c548e69a754448b8f293978abd90d6a559286d30d516c8f7e8c->enter($__internal_8d7150a915e13c548e69a754448b8f293978abd90d6a559286d30d516c8f7e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8d7150a915e13c548e69a754448b8f293978abd90d6a559286d30d516c8f7e8c->leave($__internal_8d7150a915e13c548e69a754448b8f293978abd90d6a559286d30d516c8f7e8c_prof);

        
        $__internal_b08205d424cac92c166be55148c3cb70574c14b22c8263483753cc2c7e87273a->leave($__internal_b08205d424cac92c166be55148c3cb70574c14b22c8263483753cc2c7e87273a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
