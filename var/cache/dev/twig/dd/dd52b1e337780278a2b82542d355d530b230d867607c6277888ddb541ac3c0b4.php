<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9ceef27dc18ac87fe136c7e9d7c6b36a87b03c4675d1f0b3f0886028a7dd969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ceef27dc18ac87fe136c7e9d7c6b36a87b03c4675d1f0b3f0886028a7dd969->enter($__internal_e9ceef27dc18ac87fe136c7e9d7c6b36a87b03c4675d1f0b3f0886028a7dd969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2a5e9534e74042899f9ce4f4c5663e17fdcf317fafc522d072fa9e397ac32e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5e9534e74042899f9ce4f4c5663e17fdcf317fafc522d072fa9e397ac32e0f->enter($__internal_2a5e9534e74042899f9ce4f4c5663e17fdcf317fafc522d072fa9e397ac32e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e9ceef27dc18ac87fe136c7e9d7c6b36a87b03c4675d1f0b3f0886028a7dd969->leave($__internal_e9ceef27dc18ac87fe136c7e9d7c6b36a87b03c4675d1f0b3f0886028a7dd969_prof);

        
        $__internal_2a5e9534e74042899f9ce4f4c5663e17fdcf317fafc522d072fa9e397ac32e0f->leave($__internal_2a5e9534e74042899f9ce4f4c5663e17fdcf317fafc522d072fa9e397ac32e0f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e742d8dc06ccb3269392079c9b04d7f7dba8405d2a56f705ffd1ce25fa59e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e742d8dc06ccb3269392079c9b04d7f7dba8405d2a56f705ffd1ce25fa59e03->enter($__internal_3e742d8dc06ccb3269392079c9b04d7f7dba8405d2a56f705ffd1ce25fa59e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7789eb840176447025af1b30f6e55ab0fb12e7f2f92284c51556f692dd48354e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7789eb840176447025af1b30f6e55ab0fb12e7f2f92284c51556f692dd48354e->enter($__internal_7789eb840176447025af1b30f6e55ab0fb12e7f2f92284c51556f692dd48354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7789eb840176447025af1b30f6e55ab0fb12e7f2f92284c51556f692dd48354e->leave($__internal_7789eb840176447025af1b30f6e55ab0fb12e7f2f92284c51556f692dd48354e_prof);

        
        $__internal_3e742d8dc06ccb3269392079c9b04d7f7dba8405d2a56f705ffd1ce25fa59e03->leave($__internal_3e742d8dc06ccb3269392079c9b04d7f7dba8405d2a56f705ffd1ce25fa59e03_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_54bccbf7eda15af54ff3e5e5686818ffeb710a08b9a5e1ae79022dbe81758523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bccbf7eda15af54ff3e5e5686818ffeb710a08b9a5e1ae79022dbe81758523->enter($__internal_54bccbf7eda15af54ff3e5e5686818ffeb710a08b9a5e1ae79022dbe81758523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6bd248708dc3fec9ff6d19950bd09635952129fd4fbd3190416542a9a7a08bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bd248708dc3fec9ff6d19950bd09635952129fd4fbd3190416542a9a7a08bb->enter($__internal_d6bd248708dc3fec9ff6d19950bd09635952129fd4fbd3190416542a9a7a08bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d6bd248708dc3fec9ff6d19950bd09635952129fd4fbd3190416542a9a7a08bb->leave($__internal_d6bd248708dc3fec9ff6d19950bd09635952129fd4fbd3190416542a9a7a08bb_prof);

        
        $__internal_54bccbf7eda15af54ff3e5e5686818ffeb710a08b9a5e1ae79022dbe81758523->leave($__internal_54bccbf7eda15af54ff3e5e5686818ffeb710a08b9a5e1ae79022dbe81758523_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d17edf8fc18c7fd3765109d6ffe22db69d651cb0e569c4c2ef50604be104985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d17edf8fc18c7fd3765109d6ffe22db69d651cb0e569c4c2ef50604be104985->enter($__internal_7d17edf8fc18c7fd3765109d6ffe22db69d651cb0e569c4c2ef50604be104985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8fd04f360e498760ae9d8c8b1f6c58e652f4123f4fd3dd3740459956a832a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fd04f360e498760ae9d8c8b1f6c58e652f4123f4fd3dd3740459956a832a4d->enter($__internal_e8fd04f360e498760ae9d8c8b1f6c58e652f4123f4fd3dd3740459956a832a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8fd04f360e498760ae9d8c8b1f6c58e652f4123f4fd3dd3740459956a832a4d->leave($__internal_e8fd04f360e498760ae9d8c8b1f6c58e652f4123f4fd3dd3740459956a832a4d_prof);

        
        $__internal_7d17edf8fc18c7fd3765109d6ffe22db69d651cb0e569c4c2ef50604be104985->leave($__internal_7d17edf8fc18c7fd3765109d6ffe22db69d651cb0e569c4c2ef50604be104985_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
