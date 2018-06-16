<?php

/* form_table_layout.html.twig */
class __TwigTemplate_14d93923444e4d7602d17a7c9c873a61087089c12d2619d0713a36002886fcb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f700819e15ce5969460594c30399f5fdd5a4b0a141b7089cba125c97db2118b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f700819e15ce5969460594c30399f5fdd5a4b0a141b7089cba125c97db2118b->enter($__internal_3f700819e15ce5969460594c30399f5fdd5a4b0a141b7089cba125c97db2118b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_af6d6ac62553d4561ac0e14506d553c0218e1336402d45459c7ac374275d1d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6d6ac62553d4561ac0e14506d553c0218e1336402d45459c7ac374275d1d39->enter($__internal_af6d6ac62553d4561ac0e14506d553c0218e1336402d45459c7ac374275d1d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3f700819e15ce5969460594c30399f5fdd5a4b0a141b7089cba125c97db2118b->leave($__internal_3f700819e15ce5969460594c30399f5fdd5a4b0a141b7089cba125c97db2118b_prof);

        
        $__internal_af6d6ac62553d4561ac0e14506d553c0218e1336402d45459c7ac374275d1d39->leave($__internal_af6d6ac62553d4561ac0e14506d553c0218e1336402d45459c7ac374275d1d39_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f9f9fa4b6885e37c5c93c1559cf234139f233125bc418789edcd2ae39990bbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f9fa4b6885e37c5c93c1559cf234139f233125bc418789edcd2ae39990bbd4->enter($__internal_f9f9fa4b6885e37c5c93c1559cf234139f233125bc418789edcd2ae39990bbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5382fcc877e99cccc43585867b81d9740e5af872b0986883d535d00f24bff955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5382fcc877e99cccc43585867b81d9740e5af872b0986883d535d00f24bff955->enter($__internal_5382fcc877e99cccc43585867b81d9740e5af872b0986883d535d00f24bff955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_5382fcc877e99cccc43585867b81d9740e5af872b0986883d535d00f24bff955->leave($__internal_5382fcc877e99cccc43585867b81d9740e5af872b0986883d535d00f24bff955_prof);

        
        $__internal_f9f9fa4b6885e37c5c93c1559cf234139f233125bc418789edcd2ae39990bbd4->leave($__internal_f9f9fa4b6885e37c5c93c1559cf234139f233125bc418789edcd2ae39990bbd4_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2059e4f65bc7d05c9f2c3f8dfcfa459baf334642035354993a29730abc176874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2059e4f65bc7d05c9f2c3f8dfcfa459baf334642035354993a29730abc176874->enter($__internal_2059e4f65bc7d05c9f2c3f8dfcfa459baf334642035354993a29730abc176874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0937278add443ec251d011a4cfcc2f3e7c060253d9b4c4bf31160abcc94ad04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0937278add443ec251d011a4cfcc2f3e7c060253d9b4c4bf31160abcc94ad04a->enter($__internal_0937278add443ec251d011a4cfcc2f3e7c060253d9b4c4bf31160abcc94ad04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_0937278add443ec251d011a4cfcc2f3e7c060253d9b4c4bf31160abcc94ad04a->leave($__internal_0937278add443ec251d011a4cfcc2f3e7c060253d9b4c4bf31160abcc94ad04a_prof);

        
        $__internal_2059e4f65bc7d05c9f2c3f8dfcfa459baf334642035354993a29730abc176874->leave($__internal_2059e4f65bc7d05c9f2c3f8dfcfa459baf334642035354993a29730abc176874_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_70581e87df110006957dbdd19c9dc9f8823b5624518e176cae1427b11fc4e529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70581e87df110006957dbdd19c9dc9f8823b5624518e176cae1427b11fc4e529->enter($__internal_70581e87df110006957dbdd19c9dc9f8823b5624518e176cae1427b11fc4e529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_d0d3b08c1074068cb097e1e6dc669b7492a217c4d9805619a114d9b101269c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d3b08c1074068cb097e1e6dc669b7492a217c4d9805619a114d9b101269c94->enter($__internal_d0d3b08c1074068cb097e1e6dc669b7492a217c4d9805619a114d9b101269c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_d0d3b08c1074068cb097e1e6dc669b7492a217c4d9805619a114d9b101269c94->leave($__internal_d0d3b08c1074068cb097e1e6dc669b7492a217c4d9805619a114d9b101269c94_prof);

        
        $__internal_70581e87df110006957dbdd19c9dc9f8823b5624518e176cae1427b11fc4e529->leave($__internal_70581e87df110006957dbdd19c9dc9f8823b5624518e176cae1427b11fc4e529_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_22f28151625ea4ee318aaae478aa04296d381a67802726e0195bd60d64cd1499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f28151625ea4ee318aaae478aa04296d381a67802726e0195bd60d64cd1499->enter($__internal_22f28151625ea4ee318aaae478aa04296d381a67802726e0195bd60d64cd1499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4ffb67b1169ef173c2eae8ca19db9c0cd5f71c5fc16488703fba82e8e63f6893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffb67b1169ef173c2eae8ca19db9c0cd5f71c5fc16488703fba82e8e63f6893->enter($__internal_4ffb67b1169ef173c2eae8ca19db9c0cd5f71c5fc16488703fba82e8e63f6893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_4ffb67b1169ef173c2eae8ca19db9c0cd5f71c5fc16488703fba82e8e63f6893->leave($__internal_4ffb67b1169ef173c2eae8ca19db9c0cd5f71c5fc16488703fba82e8e63f6893_prof);

        
        $__internal_22f28151625ea4ee318aaae478aa04296d381a67802726e0195bd60d64cd1499->leave($__internal_22f28151625ea4ee318aaae478aa04296d381a67802726e0195bd60d64cd1499_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
