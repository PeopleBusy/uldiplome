<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c9056d7ba80b00e16e439fb9b466919d26626ae12533817bf52e69791e2df749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9056d7ba80b00e16e439fb9b466919d26626ae12533817bf52e69791e2df749->enter($__internal_c9056d7ba80b00e16e439fb9b466919d26626ae12533817bf52e69791e2df749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b6eb065e778b3dfed390dd466a84406cac23754dc9b68a5961440209b4643f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6eb065e778b3dfed390dd466a84406cac23754dc9b68a5961440209b4643f15->enter($__internal_b6eb065e778b3dfed390dd466a84406cac23754dc9b68a5961440209b4643f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9056d7ba80b00e16e439fb9b466919d26626ae12533817bf52e69791e2df749->leave($__internal_c9056d7ba80b00e16e439fb9b466919d26626ae12533817bf52e69791e2df749_prof);

        
        $__internal_b6eb065e778b3dfed390dd466a84406cac23754dc9b68a5961440209b4643f15->leave($__internal_b6eb065e778b3dfed390dd466a84406cac23754dc9b68a5961440209b4643f15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acb5a15442d24a34e5561d8f0ecd5fc6444999fe6170f9c2872e3ded1662cae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb5a15442d24a34e5561d8f0ecd5fc6444999fe6170f9c2872e3ded1662cae0->enter($__internal_acb5a15442d24a34e5561d8f0ecd5fc6444999fe6170f9c2872e3ded1662cae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_746c939721948f366022a5b3ca1175d363035c23d38b66340ff02550c9e6ac4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746c939721948f366022a5b3ca1175d363035c23d38b66340ff02550c9e6ac4c->enter($__internal_746c939721948f366022a5b3ca1175d363035c23d38b66340ff02550c9e6ac4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_746c939721948f366022a5b3ca1175d363035c23d38b66340ff02550c9e6ac4c->leave($__internal_746c939721948f366022a5b3ca1175d363035c23d38b66340ff02550c9e6ac4c_prof);

        
        $__internal_acb5a15442d24a34e5561d8f0ecd5fc6444999fe6170f9c2872e3ded1662cae0->leave($__internal_acb5a15442d24a34e5561d8f0ecd5fc6444999fe6170f9c2872e3ded1662cae0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7481b7fc58067b532345a33b41af48545b74f29c2fe4e85aceda76352fcc9deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7481b7fc58067b532345a33b41af48545b74f29c2fe4e85aceda76352fcc9deb->enter($__internal_7481b7fc58067b532345a33b41af48545b74f29c2fe4e85aceda76352fcc9deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66437d13b5c2f9b186294d43da221f155cabe1c5001debc39726c776f6910ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66437d13b5c2f9b186294d43da221f155cabe1c5001debc39726c776f6910ec4->enter($__internal_66437d13b5c2f9b186294d43da221f155cabe1c5001debc39726c776f6910ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66437d13b5c2f9b186294d43da221f155cabe1c5001debc39726c776f6910ec4->leave($__internal_66437d13b5c2f9b186294d43da221f155cabe1c5001debc39726c776f6910ec4_prof);

        
        $__internal_7481b7fc58067b532345a33b41af48545b74f29c2fe4e85aceda76352fcc9deb->leave($__internal_7481b7fc58067b532345a33b41af48545b74f29c2fe4e85aceda76352fcc9deb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a05eb2f664d513811f48dcf50f6d8a01c3be4371224e6c24840c6082c5f24955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05eb2f664d513811f48dcf50f6d8a01c3be4371224e6c24840c6082c5f24955->enter($__internal_a05eb2f664d513811f48dcf50f6d8a01c3be4371224e6c24840c6082c5f24955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a98180123562d914bfcada5a0a8a0eeaa06b5b92c3a9f2248c54af230da2e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a98180123562d914bfcada5a0a8a0eeaa06b5b92c3a9f2248c54af230da2e02->enter($__internal_2a98180123562d914bfcada5a0a8a0eeaa06b5b92c3a9f2248c54af230da2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_2a98180123562d914bfcada5a0a8a0eeaa06b5b92c3a9f2248c54af230da2e02->leave($__internal_2a98180123562d914bfcada5a0a8a0eeaa06b5b92c3a9f2248c54af230da2e02_prof);

        
        $__internal_a05eb2f664d513811f48dcf50f6d8a01c3be4371224e6c24840c6082c5f24955->leave($__internal_a05eb2f664d513811f48dcf50f6d8a01c3be4371224e6c24840c6082c5f24955_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
