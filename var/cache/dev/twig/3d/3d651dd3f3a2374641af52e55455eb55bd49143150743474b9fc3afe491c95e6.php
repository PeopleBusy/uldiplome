<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_89c3c979abaa84907bcd18a5fd044abc4e041f4ee091b4b35527607c7a2e2733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a3b07ac41be59050c28882fc34071115444587eb40cccd628e5d5dc7ceed7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3b07ac41be59050c28882fc34071115444587eb40cccd628e5d5dc7ceed7df->enter($__internal_2a3b07ac41be59050c28882fc34071115444587eb40cccd628e5d5dc7ceed7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_adbb1aa093c3d5e701884289dafd1ece63883a6c2d56de574947c5fd04d376eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbb1aa093c3d5e701884289dafd1ece63883a6c2d56de574947c5fd04d376eb->enter($__internal_adbb1aa093c3d5e701884289dafd1ece63883a6c2d56de574947c5fd04d376eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3b07ac41be59050c28882fc34071115444587eb40cccd628e5d5dc7ceed7df->leave($__internal_2a3b07ac41be59050c28882fc34071115444587eb40cccd628e5d5dc7ceed7df_prof);

        
        $__internal_adbb1aa093c3d5e701884289dafd1ece63883a6c2d56de574947c5fd04d376eb->leave($__internal_adbb1aa093c3d5e701884289dafd1ece63883a6c2d56de574947c5fd04d376eb_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_363980c675c5d9fc6265557c54085451e873ad1e19eea068ada3091efa3ebf57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363980c675c5d9fc6265557c54085451e873ad1e19eea068ada3091efa3ebf57->enter($__internal_363980c675c5d9fc6265557c54085451e873ad1e19eea068ada3091efa3ebf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_fda2cc9adbebc36aad602b659736eb75574ec1de758aa58e7e1227b5f674aa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda2cc9adbebc36aad602b659736eb75574ec1de758aa58e7e1227b5f674aa1e->enter($__internal_fda2cc9adbebc36aad602b659736eb75574ec1de758aa58e7e1227b5f674aa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fda2cc9adbebc36aad602b659736eb75574ec1de758aa58e7e1227b5f674aa1e->leave($__internal_fda2cc9adbebc36aad602b659736eb75574ec1de758aa58e7e1227b5f674aa1e_prof);

        
        $__internal_363980c675c5d9fc6265557c54085451e873ad1e19eea068ada3091efa3ebf57->leave($__internal_363980c675c5d9fc6265557c54085451e873ad1e19eea068ada3091efa3ebf57_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_5d7d657bfc7631eb3fe115f90bc5c67ab5c4e5f6a5ba28eb377bbf4b948c088d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7d657bfc7631eb3fe115f90bc5c67ab5c4e5f6a5ba28eb377bbf4b948c088d->enter($__internal_5d7d657bfc7631eb3fe115f90bc5c67ab5c4e5f6a5ba28eb377bbf4b948c088d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d585316fde7ee730079715a242a4b465c729570e19ffc8ec2706340d5f275cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d585316fde7ee730079715a242a4b465c729570e19ffc8ec2706340d5f275cc3->enter($__internal_d585316fde7ee730079715a242a4b465c729570e19ffc8ec2706340d5f275cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d585316fde7ee730079715a242a4b465c729570e19ffc8ec2706340d5f275cc3->leave($__internal_d585316fde7ee730079715a242a4b465c729570e19ffc8ec2706340d5f275cc3_prof);

        
        $__internal_5d7d657bfc7631eb3fe115f90bc5c67ab5c4e5f6a5ba28eb377bbf4b948c088d->leave($__internal_5d7d657bfc7631eb3fe115f90bc5c67ab5c4e5f6a5ba28eb377bbf4b948c088d_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d0f9d4a8ec5c7b9809d7fde4d1bdeea129a4827aa19aa50e1af6b6075111bd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f9d4a8ec5c7b9809d7fde4d1bdeea129a4827aa19aa50e1af6b6075111bd36->enter($__internal_d0f9d4a8ec5c7b9809d7fde4d1bdeea129a4827aa19aa50e1af6b6075111bd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_53d26e0622f4785ae7b4aeb24c60be46221b26f431e6c38d500a4cd9bd39b783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d26e0622f4785ae7b4aeb24c60be46221b26f431e6c38d500a4cd9bd39b783->enter($__internal_53d26e0622f4785ae7b4aeb24c60be46221b26f431e6c38d500a4cd9bd39b783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_53d26e0622f4785ae7b4aeb24c60be46221b26f431e6c38d500a4cd9bd39b783->leave($__internal_53d26e0622f4785ae7b4aeb24c60be46221b26f431e6c38d500a4cd9bd39b783_prof);

        
        $__internal_d0f9d4a8ec5c7b9809d7fde4d1bdeea129a4827aa19aa50e1af6b6075111bd36->leave($__internal_d0f9d4a8ec5c7b9809d7fde4d1bdeea129a4827aa19aa50e1af6b6075111bd36_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_632eecd24b9ba181623739204cb10b7564350c46ec96569246981a1e42095eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632eecd24b9ba181623739204cb10b7564350c46ec96569246981a1e42095eb4->enter($__internal_632eecd24b9ba181623739204cb10b7564350c46ec96569246981a1e42095eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_46d47a07bdbda3b475670dd4a05d456753224ad47c2b527e6144ee79f09e0bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d47a07bdbda3b475670dd4a05d456753224ad47c2b527e6144ee79f09e0bbb->enter($__internal_46d47a07bdbda3b475670dd4a05d456753224ad47c2b527e6144ee79f09e0bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_46d47a07bdbda3b475670dd4a05d456753224ad47c2b527e6144ee79f09e0bbb->leave($__internal_46d47a07bdbda3b475670dd4a05d456753224ad47c2b527e6144ee79f09e0bbb_prof);

        
        $__internal_632eecd24b9ba181623739204cb10b7564350c46ec96569246981a1e42095eb4->leave($__internal_632eecd24b9ba181623739204cb10b7564350c46ec96569246981a1e42095eb4_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_655fe2ae9039b662f9ddb4586af2a1edfe42afdf9087e8b8003f478b69ccafab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655fe2ae9039b662f9ddb4586af2a1edfe42afdf9087e8b8003f478b69ccafab->enter($__internal_655fe2ae9039b662f9ddb4586af2a1edfe42afdf9087e8b8003f478b69ccafab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d0267c0549843a267a329b400ffa9d8b1b74df1ebf07f5677f32c72028d276bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0267c0549843a267a329b400ffa9d8b1b74df1ebf07f5677f32c72028d276bf->enter($__internal_d0267c0549843a267a329b400ffa9d8b1b74df1ebf07f5677f32c72028d276bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_d0267c0549843a267a329b400ffa9d8b1b74df1ebf07f5677f32c72028d276bf->leave($__internal_d0267c0549843a267a329b400ffa9d8b1b74df1ebf07f5677f32c72028d276bf_prof);

        
        $__internal_655fe2ae9039b662f9ddb4586af2a1edfe42afdf9087e8b8003f478b69ccafab->leave($__internal_655fe2ae9039b662f9ddb4586af2a1edfe42afdf9087e8b8003f478b69ccafab_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_776b810dfcdc14b7fc321aecb6d5cd1fd72ba6acd987e77b54f1317c85c2a8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776b810dfcdc14b7fc321aecb6d5cd1fd72ba6acd987e77b54f1317c85c2a8ea->enter($__internal_776b810dfcdc14b7fc321aecb6d5cd1fd72ba6acd987e77b54f1317c85c2a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_aecab892a6dca3c030902bbe7fabe1f8ff67c9b3598d2679d0e7788117109b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecab892a6dca3c030902bbe7fabe1f8ff67c9b3598d2679d0e7788117109b28->enter($__internal_aecab892a6dca3c030902bbe7fabe1f8ff67c9b3598d2679d0e7788117109b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_aecab892a6dca3c030902bbe7fabe1f8ff67c9b3598d2679d0e7788117109b28->leave($__internal_aecab892a6dca3c030902bbe7fabe1f8ff67c9b3598d2679d0e7788117109b28_prof);

        
        $__internal_776b810dfcdc14b7fc321aecb6d5cd1fd72ba6acd987e77b54f1317c85c2a8ea->leave($__internal_776b810dfcdc14b7fc321aecb6d5cd1fd72ba6acd987e77b54f1317c85c2a8ea_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_29a5f6e19d352445687d1d3d472b8069922dd6f50924ebf93d4e24f1acebba52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a5f6e19d352445687d1d3d472b8069922dd6f50924ebf93d4e24f1acebba52->enter($__internal_29a5f6e19d352445687d1d3d472b8069922dd6f50924ebf93d4e24f1acebba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3b4eddd43e1893df1c9da1ff286f10bbeec01103f4a02b33ca29734960f856c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4eddd43e1893df1c9da1ff286f10bbeec01103f4a02b33ca29734960f856c9->enter($__internal_3b4eddd43e1893df1c9da1ff286f10bbeec01103f4a02b33ca29734960f856c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_3b4eddd43e1893df1c9da1ff286f10bbeec01103f4a02b33ca29734960f856c9->leave($__internal_3b4eddd43e1893df1c9da1ff286f10bbeec01103f4a02b33ca29734960f856c9_prof);

        
        $__internal_29a5f6e19d352445687d1d3d472b8069922dd6f50924ebf93d4e24f1acebba52->leave($__internal_29a5f6e19d352445687d1d3d472b8069922dd6f50924ebf93d4e24f1acebba52_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4d47fe841bba1f4bac5c540d9fa999dd09d3c17e7232ccf9e505a534cebbdc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d47fe841bba1f4bac5c540d9fa999dd09d3c17e7232ccf9e505a534cebbdc0d->enter($__internal_4d47fe841bba1f4bac5c540d9fa999dd09d3c17e7232ccf9e505a534cebbdc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_50bc7a0b99fe63870dfc18da108423a3d7e6c9177152c38e1c0c92fa6e705f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bc7a0b99fe63870dfc18da108423a3d7e6c9177152c38e1c0c92fa6e705f14->enter($__internal_50bc7a0b99fe63870dfc18da108423a3d7e6c9177152c38e1c0c92fa6e705f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_50bc7a0b99fe63870dfc18da108423a3d7e6c9177152c38e1c0c92fa6e705f14->leave($__internal_50bc7a0b99fe63870dfc18da108423a3d7e6c9177152c38e1c0c92fa6e705f14_prof);

        
        $__internal_4d47fe841bba1f4bac5c540d9fa999dd09d3c17e7232ccf9e505a534cebbdc0d->leave($__internal_4d47fe841bba1f4bac5c540d9fa999dd09d3c17e7232ccf9e505a534cebbdc0d_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_076a55d09ed4e5664a5e9dd3fb6552a329a97ae6c57fecee66ae1d43ee0cd9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076a55d09ed4e5664a5e9dd3fb6552a329a97ae6c57fecee66ae1d43ee0cd9bf->enter($__internal_076a55d09ed4e5664a5e9dd3fb6552a329a97ae6c57fecee66ae1d43ee0cd9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_14f6b7f723e69cba0b4c999f756838091177ed443159d3670e857a5c72bc0b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f6b7f723e69cba0b4c999f756838091177ed443159d3670e857a5c72bc0b06->enter($__internal_14f6b7f723e69cba0b4c999f756838091177ed443159d3670e857a5c72bc0b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_14f6b7f723e69cba0b4c999f756838091177ed443159d3670e857a5c72bc0b06->leave($__internal_14f6b7f723e69cba0b4c999f756838091177ed443159d3670e857a5c72bc0b06_prof);

        
        $__internal_076a55d09ed4e5664a5e9dd3fb6552a329a97ae6c57fecee66ae1d43ee0cd9bf->leave($__internal_076a55d09ed4e5664a5e9dd3fb6552a329a97ae6c57fecee66ae1d43ee0cd9bf_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e58d498e2783fc55ac19cf849e6ec7b3c7de8a0d321b63a77fe30f2257ac09b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58d498e2783fc55ac19cf849e6ec7b3c7de8a0d321b63a77fe30f2257ac09b8->enter($__internal_e58d498e2783fc55ac19cf849e6ec7b3c7de8a0d321b63a77fe30f2257ac09b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0bb154449ab07557ce6ac2689ad4b39055667aaef916c439e240d35f91f75454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb154449ab07557ce6ac2689ad4b39055667aaef916c439e240d35f91f75454->enter($__internal_0bb154449ab07557ce6ac2689ad4b39055667aaef916c439e240d35f91f75454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_0bb154449ab07557ce6ac2689ad4b39055667aaef916c439e240d35f91f75454->leave($__internal_0bb154449ab07557ce6ac2689ad4b39055667aaef916c439e240d35f91f75454_prof);

        
        $__internal_e58d498e2783fc55ac19cf849e6ec7b3c7de8a0d321b63a77fe30f2257ac09b8->leave($__internal_e58d498e2783fc55ac19cf849e6ec7b3c7de8a0d321b63a77fe30f2257ac09b8_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ca3a1839a1dc54462b2c4ebbb0c4a5073dbff5d43c115261819ae17a74d526c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3a1839a1dc54462b2c4ebbb0c4a5073dbff5d43c115261819ae17a74d526c0->enter($__internal_ca3a1839a1dc54462b2c4ebbb0c4a5073dbff5d43c115261819ae17a74d526c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2555cf8823da1c5033ab3a13ee950e55924df6e15d30809e2cd2746656a4da3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2555cf8823da1c5033ab3a13ee950e55924df6e15d30809e2cd2746656a4da3e->enter($__internal_2555cf8823da1c5033ab3a13ee950e55924df6e15d30809e2cd2746656a4da3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_2555cf8823da1c5033ab3a13ee950e55924df6e15d30809e2cd2746656a4da3e->leave($__internal_2555cf8823da1c5033ab3a13ee950e55924df6e15d30809e2cd2746656a4da3e_prof);

        
        $__internal_ca3a1839a1dc54462b2c4ebbb0c4a5073dbff5d43c115261819ae17a74d526c0->leave($__internal_ca3a1839a1dc54462b2c4ebbb0c4a5073dbff5d43c115261819ae17a74d526c0_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_340895506e8b1274b5b4c5d08070bd69259e44575141f2ae6e88839d495c1d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340895506e8b1274b5b4c5d08070bd69259e44575141f2ae6e88839d495c1d62->enter($__internal_340895506e8b1274b5b4c5d08070bd69259e44575141f2ae6e88839d495c1d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_bc8e01bf772d5b67ca8b1da76a7f832412ed71c96ed26aaf84d5abadacf070b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8e01bf772d5b67ca8b1da76a7f832412ed71c96ed26aaf84d5abadacf070b0->enter($__internal_bc8e01bf772d5b67ca8b1da76a7f832412ed71c96ed26aaf84d5abadacf070b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_bc8e01bf772d5b67ca8b1da76a7f832412ed71c96ed26aaf84d5abadacf070b0->leave($__internal_bc8e01bf772d5b67ca8b1da76a7f832412ed71c96ed26aaf84d5abadacf070b0_prof);

        
        $__internal_340895506e8b1274b5b4c5d08070bd69259e44575141f2ae6e88839d495c1d62->leave($__internal_340895506e8b1274b5b4c5d08070bd69259e44575141f2ae6e88839d495c1d62_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2edd69fad8590f3da6616465d60465ee5b65110b94ba8baf8133527fe19ff7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edd69fad8590f3da6616465d60465ee5b65110b94ba8baf8133527fe19ff7eb->enter($__internal_2edd69fad8590f3da6616465d60465ee5b65110b94ba8baf8133527fe19ff7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dc4a80ec7b2289c28a76a2f3bf66c27db63c22637287af7fe04b8ccd06c276a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4a80ec7b2289c28a76a2f3bf66c27db63c22637287af7fe04b8ccd06c276a3->enter($__internal_dc4a80ec7b2289c28a76a2f3bf66c27db63c22637287af7fe04b8ccd06c276a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_dc4a80ec7b2289c28a76a2f3bf66c27db63c22637287af7fe04b8ccd06c276a3->leave($__internal_dc4a80ec7b2289c28a76a2f3bf66c27db63c22637287af7fe04b8ccd06c276a3_prof);

        
        $__internal_2edd69fad8590f3da6616465d60465ee5b65110b94ba8baf8133527fe19ff7eb->leave($__internal_2edd69fad8590f3da6616465d60465ee5b65110b94ba8baf8133527fe19ff7eb_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5aab013eee63200749b8c9eff0991bab6b31e7d0b7f8f60ab4b5cec9ee206666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aab013eee63200749b8c9eff0991bab6b31e7d0b7f8f60ab4b5cec9ee206666->enter($__internal_5aab013eee63200749b8c9eff0991bab6b31e7d0b7f8f60ab4b5cec9ee206666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d2a5aaa8f992113bdddf5745dbaa464da20009eb7c1df79e4f9d117c19dbce14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a5aaa8f992113bdddf5745dbaa464da20009eb7c1df79e4f9d117c19dbce14->enter($__internal_d2a5aaa8f992113bdddf5745dbaa464da20009eb7c1df79e4f9d117c19dbce14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d2a5aaa8f992113bdddf5745dbaa464da20009eb7c1df79e4f9d117c19dbce14->leave($__internal_d2a5aaa8f992113bdddf5745dbaa464da20009eb7c1df79e4f9d117c19dbce14_prof);

        
        $__internal_5aab013eee63200749b8c9eff0991bab6b31e7d0b7f8f60ab4b5cec9ee206666->leave($__internal_5aab013eee63200749b8c9eff0991bab6b31e7d0b7f8f60ab4b5cec9ee206666_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_780296601e7c4c844c960648337a87644c51adffb48b0018917375a7318cc9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780296601e7c4c844c960648337a87644c51adffb48b0018917375a7318cc9e3->enter($__internal_780296601e7c4c844c960648337a87644c51adffb48b0018917375a7318cc9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_570d47a4126ffb7d668667158f5c0cfb3198c3747b0399fe6137450343f62e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570d47a4126ffb7d668667158f5c0cfb3198c3747b0399fe6137450343f62e07->enter($__internal_570d47a4126ffb7d668667158f5c0cfb3198c3747b0399fe6137450343f62e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_570d47a4126ffb7d668667158f5c0cfb3198c3747b0399fe6137450343f62e07->leave($__internal_570d47a4126ffb7d668667158f5c0cfb3198c3747b0399fe6137450343f62e07_prof);

        
        $__internal_780296601e7c4c844c960648337a87644c51adffb48b0018917375a7318cc9e3->leave($__internal_780296601e7c4c844c960648337a87644c51adffb48b0018917375a7318cc9e3_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9f2d70ceb2fdbbcb6a46e29e433dfb04aaa1737e768f796ec6ac3273a8b1179d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2d70ceb2fdbbcb6a46e29e433dfb04aaa1737e768f796ec6ac3273a8b1179d->enter($__internal_9f2d70ceb2fdbbcb6a46e29e433dfb04aaa1737e768f796ec6ac3273a8b1179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_85161910b55f01ed6777ee5541169e2c5e192cd9c176407471991728a77f8c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85161910b55f01ed6777ee5541169e2c5e192cd9c176407471991728a77f8c40->enter($__internal_85161910b55f01ed6777ee5541169e2c5e192cd9c176407471991728a77f8c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_85161910b55f01ed6777ee5541169e2c5e192cd9c176407471991728a77f8c40->leave($__internal_85161910b55f01ed6777ee5541169e2c5e192cd9c176407471991728a77f8c40_prof);

        
        $__internal_9f2d70ceb2fdbbcb6a46e29e433dfb04aaa1737e768f796ec6ac3273a8b1179d->leave($__internal_9f2d70ceb2fdbbcb6a46e29e433dfb04aaa1737e768f796ec6ac3273a8b1179d_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_67454a7a89409960e964c0fa4b6405bf32a37f6178ba69f9879010e8a184a267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67454a7a89409960e964c0fa4b6405bf32a37f6178ba69f9879010e8a184a267->enter($__internal_67454a7a89409960e964c0fa4b6405bf32a37f6178ba69f9879010e8a184a267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a31009b2a55f2a0baf0e03e188c7ae9277ad797bea4b45b5578a2351a9c2bee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31009b2a55f2a0baf0e03e188c7ae9277ad797bea4b45b5578a2351a9c2bee9->enter($__internal_a31009b2a55f2a0baf0e03e188c7ae9277ad797bea4b45b5578a2351a9c2bee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_a31009b2a55f2a0baf0e03e188c7ae9277ad797bea4b45b5578a2351a9c2bee9->leave($__internal_a31009b2a55f2a0baf0e03e188c7ae9277ad797bea4b45b5578a2351a9c2bee9_prof);

        
        $__internal_67454a7a89409960e964c0fa4b6405bf32a37f6178ba69f9879010e8a184a267->leave($__internal_67454a7a89409960e964c0fa4b6405bf32a37f6178ba69f9879010e8a184a267_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5706a7ac0c11ba1cfcd616024e78d5334ca66d1b501ea804a999acb83493ba42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5706a7ac0c11ba1cfcd616024e78d5334ca66d1b501ea804a999acb83493ba42->enter($__internal_5706a7ac0c11ba1cfcd616024e78d5334ca66d1b501ea804a999acb83493ba42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0e6bcb1a003527fac4f49a97fbfb85d410aae26cf7b92dbcd7e115a947361dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6bcb1a003527fac4f49a97fbfb85d410aae26cf7b92dbcd7e115a947361dc1->enter($__internal_0e6bcb1a003527fac4f49a97fbfb85d410aae26cf7b92dbcd7e115a947361dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0e6bcb1a003527fac4f49a97fbfb85d410aae26cf7b92dbcd7e115a947361dc1->leave($__internal_0e6bcb1a003527fac4f49a97fbfb85d410aae26cf7b92dbcd7e115a947361dc1_prof);

        
        $__internal_5706a7ac0c11ba1cfcd616024e78d5334ca66d1b501ea804a999acb83493ba42->leave($__internal_5706a7ac0c11ba1cfcd616024e78d5334ca66d1b501ea804a999acb83493ba42_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a02256003497593753545338bcdef0afdde3e48e58d165b9e5fc8636d3102a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02256003497593753545338bcdef0afdde3e48e58d165b9e5fc8636d3102a87->enter($__internal_a02256003497593753545338bcdef0afdde3e48e58d165b9e5fc8636d3102a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b39bf262f0b36e22f894b44c03c4ea2034a483fdf2958a4b4d790fe8b3b60670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39bf262f0b36e22f894b44c03c4ea2034a483fdf2958a4b4d790fe8b3b60670->enter($__internal_b39bf262f0b36e22f894b44c03c4ea2034a483fdf2958a4b4d790fe8b3b60670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b39bf262f0b36e22f894b44c03c4ea2034a483fdf2958a4b4d790fe8b3b60670->leave($__internal_b39bf262f0b36e22f894b44c03c4ea2034a483fdf2958a4b4d790fe8b3b60670_prof);

        
        $__internal_a02256003497593753545338bcdef0afdde3e48e58d165b9e5fc8636d3102a87->leave($__internal_a02256003497593753545338bcdef0afdde3e48e58d165b9e5fc8636d3102a87_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d4a057c15630e226d45a64f7a81be8d230aba11ebfa4eaa34f4722f767337f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a057c15630e226d45a64f7a81be8d230aba11ebfa4eaa34f4722f767337f9d->enter($__internal_d4a057c15630e226d45a64f7a81be8d230aba11ebfa4eaa34f4722f767337f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_bd4faca826796a633c8d7f1841c858ab57e3fde34497742504bebca1c1c4160a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4faca826796a633c8d7f1841c858ab57e3fde34497742504bebca1c1c4160a->enter($__internal_bd4faca826796a633c8d7f1841c858ab57e3fde34497742504bebca1c1c4160a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bd4faca826796a633c8d7f1841c858ab57e3fde34497742504bebca1c1c4160a->leave($__internal_bd4faca826796a633c8d7f1841c858ab57e3fde34497742504bebca1c1c4160a_prof);

        
        $__internal_d4a057c15630e226d45a64f7a81be8d230aba11ebfa4eaa34f4722f767337f9d->leave($__internal_d4a057c15630e226d45a64f7a81be8d230aba11ebfa4eaa34f4722f767337f9d_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7a070fc9517635cd2868e6c6b6ab154dca3b299f3c65c816cc876b6b71934c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a070fc9517635cd2868e6c6b6ab154dca3b299f3c65c816cc876b6b71934c09->enter($__internal_7a070fc9517635cd2868e6c6b6ab154dca3b299f3c65c816cc876b6b71934c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_32cb3f1da7814758cbdb787eb7a67a5f0244116a81487ffb9c15e04323b9afd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cb3f1da7814758cbdb787eb7a67a5f0244116a81487ffb9c15e04323b9afd4->enter($__internal_32cb3f1da7814758cbdb787eb7a67a5f0244116a81487ffb9c15e04323b9afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_32cb3f1da7814758cbdb787eb7a67a5f0244116a81487ffb9c15e04323b9afd4->leave($__internal_32cb3f1da7814758cbdb787eb7a67a5f0244116a81487ffb9c15e04323b9afd4_prof);

        
        $__internal_7a070fc9517635cd2868e6c6b6ab154dca3b299f3c65c816cc876b6b71934c09->leave($__internal_7a070fc9517635cd2868e6c6b6ab154dca3b299f3c65c816cc876b6b71934c09_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b06efc4f2f088dff3ac8f42ef13fb011e7ffba1d8752a8d56643d093cf54d95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06efc4f2f088dff3ac8f42ef13fb011e7ffba1d8752a8d56643d093cf54d95f->enter($__internal_b06efc4f2f088dff3ac8f42ef13fb011e7ffba1d8752a8d56643d093cf54d95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c5ec3bcf2d6a50decbb5ce807adf649204bd528c8e4513d820c7e2903f53659c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ec3bcf2d6a50decbb5ce807adf649204bd528c8e4513d820c7e2903f53659c->enter($__internal_c5ec3bcf2d6a50decbb5ce807adf649204bd528c8e4513d820c7e2903f53659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c5ec3bcf2d6a50decbb5ce807adf649204bd528c8e4513d820c7e2903f53659c->leave($__internal_c5ec3bcf2d6a50decbb5ce807adf649204bd528c8e4513d820c7e2903f53659c_prof);

        
        $__internal_b06efc4f2f088dff3ac8f42ef13fb011e7ffba1d8752a8d56643d093cf54d95f->leave($__internal_b06efc4f2f088dff3ac8f42ef13fb011e7ffba1d8752a8d56643d093cf54d95f_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_27286e167358b7a5aa2e59c4d3f39ef1d88a9ffd12c8d8bbaa81f058d3a9636f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27286e167358b7a5aa2e59c4d3f39ef1d88a9ffd12c8d8bbaa81f058d3a9636f->enter($__internal_27286e167358b7a5aa2e59c4d3f39ef1d88a9ffd12c8d8bbaa81f058d3a9636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4d3d4722fc919da97a202847e394ab82b94d2262c1537ffe8e877349db59c64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3d4722fc919da97a202847e394ab82b94d2262c1537ffe8e877349db59c64e->enter($__internal_4d3d4722fc919da97a202847e394ab82b94d2262c1537ffe8e877349db59c64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_4d3d4722fc919da97a202847e394ab82b94d2262c1537ffe8e877349db59c64e->leave($__internal_4d3d4722fc919da97a202847e394ab82b94d2262c1537ffe8e877349db59c64e_prof);

        
        $__internal_27286e167358b7a5aa2e59c4d3f39ef1d88a9ffd12c8d8bbaa81f058d3a9636f->leave($__internal_27286e167358b7a5aa2e59c4d3f39ef1d88a9ffd12c8d8bbaa81f058d3a9636f_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_eaddb2091b2716646c967678b492934348ddc499f9fe8ccb8d59db2f6e75089c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaddb2091b2716646c967678b492934348ddc499f9fe8ccb8d59db2f6e75089c->enter($__internal_eaddb2091b2716646c967678b492934348ddc499f9fe8ccb8d59db2f6e75089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_920e7dca6cc671ad548c838f1fdd3ed4ae1039d4e63c0621505f23625c3b7576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920e7dca6cc671ad548c838f1fdd3ed4ae1039d4e63c0621505f23625c3b7576->enter($__internal_920e7dca6cc671ad548c838f1fdd3ed4ae1039d4e63c0621505f23625c3b7576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_920e7dca6cc671ad548c838f1fdd3ed4ae1039d4e63c0621505f23625c3b7576->leave($__internal_920e7dca6cc671ad548c838f1fdd3ed4ae1039d4e63c0621505f23625c3b7576_prof);

        
        $__internal_eaddb2091b2716646c967678b492934348ddc499f9fe8ccb8d59db2f6e75089c->leave($__internal_eaddb2091b2716646c967678b492934348ddc499f9fe8ccb8d59db2f6e75089c_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fec339b143d74b716e7108ac6603583760e51326d313d044684286126ddee09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec339b143d74b716e7108ac6603583760e51326d313d044684286126ddee09a->enter($__internal_fec339b143d74b716e7108ac6603583760e51326d313d044684286126ddee09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_60d9d5909113c33db5b9e34b3af81e5a42eb3d5deacbebf7149664ca92737989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d9d5909113c33db5b9e34b3af81e5a42eb3d5deacbebf7149664ca92737989->enter($__internal_60d9d5909113c33db5b9e34b3af81e5a42eb3d5deacbebf7149664ca92737989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_60d9d5909113c33db5b9e34b3af81e5a42eb3d5deacbebf7149664ca92737989->leave($__internal_60d9d5909113c33db5b9e34b3af81e5a42eb3d5deacbebf7149664ca92737989_prof);

        
        $__internal_fec339b143d74b716e7108ac6603583760e51326d313d044684286126ddee09a->leave($__internal_fec339b143d74b716e7108ac6603583760e51326d313d044684286126ddee09a_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
