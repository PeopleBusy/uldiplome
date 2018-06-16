<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_4f31d987113d9b97e43087e9883a313c22242810452a303f19e99699cbafbcc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5407ceb4201bbcb1b3a02474ed389c95613dde19186c5ea35f7b287979017082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5407ceb4201bbcb1b3a02474ed389c95613dde19186c5ea35f7b287979017082->enter($__internal_5407ceb4201bbcb1b3a02474ed389c95613dde19186c5ea35f7b287979017082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_4b1f2157a58073c9c0487adb66c88944c21e466848f1802aaea38f71ffd56ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1f2157a58073c9c0487adb66c88944c21e466848f1802aaea38f71ffd56ac1->enter($__internal_4b1f2157a58073c9c0487adb66c88944c21e466848f1802aaea38f71ffd56ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5407ceb4201bbcb1b3a02474ed389c95613dde19186c5ea35f7b287979017082->leave($__internal_5407ceb4201bbcb1b3a02474ed389c95613dde19186c5ea35f7b287979017082_prof);

        
        $__internal_4b1f2157a58073c9c0487adb66c88944c21e466848f1802aaea38f71ffd56ac1->leave($__internal_4b1f2157a58073c9c0487adb66c88944c21e466848f1802aaea38f71ffd56ac1_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ebe1e1b68a37c4d1d977bd443eb1003e6a383df56804eb35c3fc19028d5610a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe1e1b68a37c4d1d977bd443eb1003e6a383df56804eb35c3fc19028d5610a1->enter($__internal_ebe1e1b68a37c4d1d977bd443eb1003e6a383df56804eb35c3fc19028d5610a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_06c6903f11b510f20917bb6dc4549a03e502b62ed4ed25e1e2ccd3251103a6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c6903f11b510f20917bb6dc4549a03e502b62ed4ed25e1e2ccd3251103a6c8->enter($__internal_06c6903f11b510f20917bb6dc4549a03e502b62ed4ed25e1e2ccd3251103a6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_06c6903f11b510f20917bb6dc4549a03e502b62ed4ed25e1e2ccd3251103a6c8->leave($__internal_06c6903f11b510f20917bb6dc4549a03e502b62ed4ed25e1e2ccd3251103a6c8_prof);

        
        $__internal_ebe1e1b68a37c4d1d977bd443eb1003e6a383df56804eb35c3fc19028d5610a1->leave($__internal_ebe1e1b68a37c4d1d977bd443eb1003e6a383df56804eb35c3fc19028d5610a1_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f604b9057dc55c0e5a59129bd48e4d0c0f68646ade05396c70fbdeb68523bb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f604b9057dc55c0e5a59129bd48e4d0c0f68646ade05396c70fbdeb68523bb89->enter($__internal_f604b9057dc55c0e5a59129bd48e4d0c0f68646ade05396c70fbdeb68523bb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_77db03414bb3598ab119038660dbd5f9adf49e46cecb0745cc812fcf8b6dc36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77db03414bb3598ab119038660dbd5f9adf49e46cecb0745cc812fcf8b6dc36d->enter($__internal_77db03414bb3598ab119038660dbd5f9adf49e46cecb0745cc812fcf8b6dc36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_77db03414bb3598ab119038660dbd5f9adf49e46cecb0745cc812fcf8b6dc36d->leave($__internal_77db03414bb3598ab119038660dbd5f9adf49e46cecb0745cc812fcf8b6dc36d_prof);

        
        $__internal_f604b9057dc55c0e5a59129bd48e4d0c0f68646ade05396c70fbdeb68523bb89->leave($__internal_f604b9057dc55c0e5a59129bd48e4d0c0f68646ade05396c70fbdeb68523bb89_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_721205fdc8c7e7ac7dc8a5e2751f732b1bbc858472bd80125aace03bcb6e84da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721205fdc8c7e7ac7dc8a5e2751f732b1bbc858472bd80125aace03bcb6e84da->enter($__internal_721205fdc8c7e7ac7dc8a5e2751f732b1bbc858472bd80125aace03bcb6e84da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_34bf88031105ffcfcf30672003a0b37862424200e4b3d5a2690c59ad6fcc6dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bf88031105ffcfcf30672003a0b37862424200e4b3d5a2690c59ad6fcc6dba->enter($__internal_34bf88031105ffcfcf30672003a0b37862424200e4b3d5a2690c59ad6fcc6dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_34bf88031105ffcfcf30672003a0b37862424200e4b3d5a2690c59ad6fcc6dba->leave($__internal_34bf88031105ffcfcf30672003a0b37862424200e4b3d5a2690c59ad6fcc6dba_prof);

        
        $__internal_721205fdc8c7e7ac7dc8a5e2751f732b1bbc858472bd80125aace03bcb6e84da->leave($__internal_721205fdc8c7e7ac7dc8a5e2751f732b1bbc858472bd80125aace03bcb6e84da_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b07233a33935f114181105039e41e1159942799b99e9aecd143b6836ec4e38ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07233a33935f114181105039e41e1159942799b99e9aecd143b6836ec4e38ae->enter($__internal_b07233a33935f114181105039e41e1159942799b99e9aecd143b6836ec4e38ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f6be3ba568b9d555f27b4dd0a5a1553a5252e5af1ff5d3edda04034e8af7e5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6be3ba568b9d555f27b4dd0a5a1553a5252e5af1ff5d3edda04034e8af7e5d7->enter($__internal_f6be3ba568b9d555f27b4dd0a5a1553a5252e5af1ff5d3edda04034e8af7e5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_2bd90f866b5a9c6c3d47f94b855c7cec9a6858e6a7c0cb08f2c49d9d5271f00e = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_8f0783dd36b8900385fdd41d6ec2181f90dd4fa18b30eadc7ec34f477f285a7f = "{{") && ('' === $__internal_8f0783dd36b8900385fdd41d6ec2181f90dd4fa18b30eadc7ec34f477f285a7f || 0 === strpos($__internal_2bd90f866b5a9c6c3d47f94b855c7cec9a6858e6a7c0cb08f2c49d9d5271f00e, $__internal_8f0783dd36b8900385fdd41d6ec2181f90dd4fa18b30eadc7ec34f477f285a7f)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_8110255716c8d09485d1b9b17ee01b5c75ec347a71a7e97b0161f1ac204906f2 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_4fcde830d40a1170f9a8e6cb869d9425cac93e3395078f35a647e173dbdb088c = "}}") && ('' === $__internal_4fcde830d40a1170f9a8e6cb869d9425cac93e3395078f35a647e173dbdb088c || $__internal_4fcde830d40a1170f9a8e6cb869d9425cac93e3395078f35a647e173dbdb088c === substr($__internal_8110255716c8d09485d1b9b17ee01b5c75ec347a71a7e97b0161f1ac204906f2, -strlen($__internal_4fcde830d40a1170f9a8e6cb869d9425cac93e3395078f35a647e173dbdb088c))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_f6be3ba568b9d555f27b4dd0a5a1553a5252e5af1ff5d3edda04034e8af7e5d7->leave($__internal_f6be3ba568b9d555f27b4dd0a5a1553a5252e5af1ff5d3edda04034e8af7e5d7_prof);

        
        $__internal_b07233a33935f114181105039e41e1159942799b99e9aecd143b6836ec4e38ae->leave($__internal_b07233a33935f114181105039e41e1159942799b99e9aecd143b6836ec4e38ae_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ff58786763ca4e9d61916a9361ee332aaccb56500db41ebde6f9e67038a614b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff58786763ca4e9d61916a9361ee332aaccb56500db41ebde6f9e67038a614b2->enter($__internal_ff58786763ca4e9d61916a9361ee332aaccb56500db41ebde6f9e67038a614b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5428f6845b3c2bfeabbf4aff7435afc3341f9a0500343f58022ba4038c9878c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5428f6845b3c2bfeabbf4aff7435afc3341f9a0500343f58022ba4038c9878c9->enter($__internal_5428f6845b3c2bfeabbf4aff7435afc3341f9a0500343f58022ba4038c9878c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_5428f6845b3c2bfeabbf4aff7435afc3341f9a0500343f58022ba4038c9878c9->leave($__internal_5428f6845b3c2bfeabbf4aff7435afc3341f9a0500343f58022ba4038c9878c9_prof);

        
        $__internal_ff58786763ca4e9d61916a9361ee332aaccb56500db41ebde6f9e67038a614b2->leave($__internal_ff58786763ca4e9d61916a9361ee332aaccb56500db41ebde6f9e67038a614b2_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8ec36b5c4eb16d6245dce4eaed3a1b953a7b02084ee86b6e9d91247ceaea556a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec36b5c4eb16d6245dce4eaed3a1b953a7b02084ee86b6e9d91247ceaea556a->enter($__internal_8ec36b5c4eb16d6245dce4eaed3a1b953a7b02084ee86b6e9d91247ceaea556a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_7984176816ab02016b31f51c46b70724c707639612a4a442781b842bf6c1eecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7984176816ab02016b31f51c46b70724c707639612a4a442781b842bf6c1eecc->enter($__internal_7984176816ab02016b31f51c46b70724c707639612a4a442781b842bf6c1eecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_7984176816ab02016b31f51c46b70724c707639612a4a442781b842bf6c1eecc->leave($__internal_7984176816ab02016b31f51c46b70724c707639612a4a442781b842bf6c1eecc_prof);

        
        $__internal_8ec36b5c4eb16d6245dce4eaed3a1b953a7b02084ee86b6e9d91247ceaea556a->leave($__internal_8ec36b5c4eb16d6245dce4eaed3a1b953a7b02084ee86b6e9d91247ceaea556a_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6514c2db80cf5902466abd489d49aa9809e774cf79f742a1214b69875e027fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6514c2db80cf5902466abd489d49aa9809e774cf79f742a1214b69875e027fbf->enter($__internal_6514c2db80cf5902466abd489d49aa9809e774cf79f742a1214b69875e027fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_76db8fbea31696c7d26e4838da5207568649c651343792459b581af59fdca195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76db8fbea31696c7d26e4838da5207568649c651343792459b581af59fdca195->enter($__internal_76db8fbea31696c7d26e4838da5207568649c651343792459b581af59fdca195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_76db8fbea31696c7d26e4838da5207568649c651343792459b581af59fdca195->leave($__internal_76db8fbea31696c7d26e4838da5207568649c651343792459b581af59fdca195_prof);

        
        $__internal_6514c2db80cf5902466abd489d49aa9809e774cf79f742a1214b69875e027fbf->leave($__internal_6514c2db80cf5902466abd489d49aa9809e774cf79f742a1214b69875e027fbf_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f636e5b273a47359d9abd409b30ee2c2493d3639a0fa605afa9602bfd7da3f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f636e5b273a47359d9abd409b30ee2c2493d3639a0fa605afa9602bfd7da3f2e->enter($__internal_f636e5b273a47359d9abd409b30ee2c2493d3639a0fa605afa9602bfd7da3f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_652945d4a985e006b14310bb88b49f979bb9a42a8fa685ec5829dfccf2a3d3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652945d4a985e006b14310bb88b49f979bb9a42a8fa685ec5829dfccf2a3d3ba->enter($__internal_652945d4a985e006b14310bb88b49f979bb9a42a8fa685ec5829dfccf2a3d3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_652945d4a985e006b14310bb88b49f979bb9a42a8fa685ec5829dfccf2a3d3ba->leave($__internal_652945d4a985e006b14310bb88b49f979bb9a42a8fa685ec5829dfccf2a3d3ba_prof);

        
        $__internal_f636e5b273a47359d9abd409b30ee2c2493d3639a0fa605afa9602bfd7da3f2e->leave($__internal_f636e5b273a47359d9abd409b30ee2c2493d3639a0fa605afa9602bfd7da3f2e_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c8bf7acb56d4c90e70339c4fa800c8c03c5839f9dc41eabb49468a03dc5144bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bf7acb56d4c90e70339c4fa800c8c03c5839f9dc41eabb49468a03dc5144bf->enter($__internal_c8bf7acb56d4c90e70339c4fa800c8c03c5839f9dc41eabb49468a03dc5144bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a49244ed3fbfd9a6c33ab53881ac485c1aa06f2c9df5f7926006e4845bfc7c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49244ed3fbfd9a6c33ab53881ac485c1aa06f2c9df5f7926006e4845bfc7c6e->enter($__internal_a49244ed3fbfd9a6c33ab53881ac485c1aa06f2c9df5f7926006e4845bfc7c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_a49244ed3fbfd9a6c33ab53881ac485c1aa06f2c9df5f7926006e4845bfc7c6e->leave($__internal_a49244ed3fbfd9a6c33ab53881ac485c1aa06f2c9df5f7926006e4845bfc7c6e_prof);

        
        $__internal_c8bf7acb56d4c90e70339c4fa800c8c03c5839f9dc41eabb49468a03dc5144bf->leave($__internal_c8bf7acb56d4c90e70339c4fa800c8c03c5839f9dc41eabb49468a03dc5144bf_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_89032eb64c7958b8c689f1e152449ccd8c53dd4f1e26739cea55d15308e2f5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89032eb64c7958b8c689f1e152449ccd8c53dd4f1e26739cea55d15308e2f5c5->enter($__internal_89032eb64c7958b8c689f1e152449ccd8c53dd4f1e26739cea55d15308e2f5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8e3a2cfb32f7465755ddcab3b59e294d8a33ff5b1e2bd5ef58d2b3c9b6010c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3a2cfb32f7465755ddcab3b59e294d8a33ff5b1e2bd5ef58d2b3c9b6010c1d->enter($__internal_8e3a2cfb32f7465755ddcab3b59e294d8a33ff5b1e2bd5ef58d2b3c9b6010c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_8e3a2cfb32f7465755ddcab3b59e294d8a33ff5b1e2bd5ef58d2b3c9b6010c1d->leave($__internal_8e3a2cfb32f7465755ddcab3b59e294d8a33ff5b1e2bd5ef58d2b3c9b6010c1d_prof);

        
        $__internal_89032eb64c7958b8c689f1e152449ccd8c53dd4f1e26739cea55d15308e2f5c5->leave($__internal_89032eb64c7958b8c689f1e152449ccd8c53dd4f1e26739cea55d15308e2f5c5_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ee34038c8eb39f5aaa8c33914fdaa1ed30969a09c54609b02d98a045506e2a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee34038c8eb39f5aaa8c33914fdaa1ed30969a09c54609b02d98a045506e2a9e->enter($__internal_ee34038c8eb39f5aaa8c33914fdaa1ed30969a09c54609b02d98a045506e2a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3f2c31297b7c9619ecf3b9a1150f6687010128b100927d8ed623d14f2dd5a4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2c31297b7c9619ecf3b9a1150f6687010128b100927d8ed623d14f2dd5a4cf->enter($__internal_3f2c31297b7c9619ecf3b9a1150f6687010128b100927d8ed623d14f2dd5a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_3f2c31297b7c9619ecf3b9a1150f6687010128b100927d8ed623d14f2dd5a4cf->leave($__internal_3f2c31297b7c9619ecf3b9a1150f6687010128b100927d8ed623d14f2dd5a4cf_prof);

        
        $__internal_ee34038c8eb39f5aaa8c33914fdaa1ed30969a09c54609b02d98a045506e2a9e->leave($__internal_ee34038c8eb39f5aaa8c33914fdaa1ed30969a09c54609b02d98a045506e2a9e_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_517328a5fc35db1c92ba493b47bc72841bb361c62dbf3e38b20e059fd0cf0c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517328a5fc35db1c92ba493b47bc72841bb361c62dbf3e38b20e059fd0cf0c0e->enter($__internal_517328a5fc35db1c92ba493b47bc72841bb361c62dbf3e38b20e059fd0cf0c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9152d560021632c1631abcd20e63663250663b4e7b18f5e2d688613e2105be4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9152d560021632c1631abcd20e63663250663b4e7b18f5e2d688613e2105be4b->enter($__internal_9152d560021632c1631abcd20e63663250663b4e7b18f5e2d688613e2105be4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_9152d560021632c1631abcd20e63663250663b4e7b18f5e2d688613e2105be4b->leave($__internal_9152d560021632c1631abcd20e63663250663b4e7b18f5e2d688613e2105be4b_prof);

        
        $__internal_517328a5fc35db1c92ba493b47bc72841bb361c62dbf3e38b20e059fd0cf0c0e->leave($__internal_517328a5fc35db1c92ba493b47bc72841bb361c62dbf3e38b20e059fd0cf0c0e_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9999690baa3dae5d8be62447b479baf424137b721eea0556dad39549c1721f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9999690baa3dae5d8be62447b479baf424137b721eea0556dad39549c1721f4a->enter($__internal_9999690baa3dae5d8be62447b479baf424137b721eea0556dad39549c1721f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0567009f5f06e06818fb9b2c80eeec0296e682a2e684278b0ecf9918420ba23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0567009f5f06e06818fb9b2c80eeec0296e682a2e684278b0ecf9918420ba23a->enter($__internal_0567009f5f06e06818fb9b2c80eeec0296e682a2e684278b0ecf9918420ba23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_0567009f5f06e06818fb9b2c80eeec0296e682a2e684278b0ecf9918420ba23a->leave($__internal_0567009f5f06e06818fb9b2c80eeec0296e682a2e684278b0ecf9918420ba23a_prof);

        
        $__internal_9999690baa3dae5d8be62447b479baf424137b721eea0556dad39549c1721f4a->leave($__internal_9999690baa3dae5d8be62447b479baf424137b721eea0556dad39549c1721f4a_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0dda843dd82bde0a093414a4a081eb59baad9189eb9db1a21ea245be591de77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dda843dd82bde0a093414a4a081eb59baad9189eb9db1a21ea245be591de77a->enter($__internal_0dda843dd82bde0a093414a4a081eb59baad9189eb9db1a21ea245be591de77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_16d1c83f7e643bd461bbc7b6e4d5ed30b463e07992e62169432d950ca7ffa085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d1c83f7e643bd461bbc7b6e4d5ed30b463e07992e62169432d950ca7ffa085->enter($__internal_16d1c83f7e643bd461bbc7b6e4d5ed30b463e07992e62169432d950ca7ffa085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_16d1c83f7e643bd461bbc7b6e4d5ed30b463e07992e62169432d950ca7ffa085->leave($__internal_16d1c83f7e643bd461bbc7b6e4d5ed30b463e07992e62169432d950ca7ffa085_prof);

        
        $__internal_0dda843dd82bde0a093414a4a081eb59baad9189eb9db1a21ea245be591de77a->leave($__internal_0dda843dd82bde0a093414a4a081eb59baad9189eb9db1a21ea245be591de77a_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0156bc7873ac69861ff24280ad0d1b273ac26fae1d8e9cdc5f1d9c02ef74a08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0156bc7873ac69861ff24280ad0d1b273ac26fae1d8e9cdc5f1d9c02ef74a08b->enter($__internal_0156bc7873ac69861ff24280ad0d1b273ac26fae1d8e9cdc5f1d9c02ef74a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e10cef88fb050f5b62184b87272cdd51f54bf1ac71f022cac110e66298d7dcde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10cef88fb050f5b62184b87272cdd51f54bf1ac71f022cac110e66298d7dcde->enter($__internal_e10cef88fb050f5b62184b87272cdd51f54bf1ac71f022cac110e66298d7dcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e10cef88fb050f5b62184b87272cdd51f54bf1ac71f022cac110e66298d7dcde->leave($__internal_e10cef88fb050f5b62184b87272cdd51f54bf1ac71f022cac110e66298d7dcde_prof);

        
        $__internal_0156bc7873ac69861ff24280ad0d1b273ac26fae1d8e9cdc5f1d9c02ef74a08b->leave($__internal_0156bc7873ac69861ff24280ad0d1b273ac26fae1d8e9cdc5f1d9c02ef74a08b_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_402727645792208e8b47ba663a4e1936b046eac617e41e816be29aa6919fb40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402727645792208e8b47ba663a4e1936b046eac617e41e816be29aa6919fb40d->enter($__internal_402727645792208e8b47ba663a4e1936b046eac617e41e816be29aa6919fb40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_be9f24e16d5da9824902894ac48f99544ee81bb945092164e0036e206351679b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9f24e16d5da9824902894ac48f99544ee81bb945092164e0036e206351679b->enter($__internal_be9f24e16d5da9824902894ac48f99544ee81bb945092164e0036e206351679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_be9f24e16d5da9824902894ac48f99544ee81bb945092164e0036e206351679b->leave($__internal_be9f24e16d5da9824902894ac48f99544ee81bb945092164e0036e206351679b_prof);

        
        $__internal_402727645792208e8b47ba663a4e1936b046eac617e41e816be29aa6919fb40d->leave($__internal_402727645792208e8b47ba663a4e1936b046eac617e41e816be29aa6919fb40d_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d3a6b150fb2d3b8ae4d7d5b5cde10db92b12262bfde06623a20cf94f61c496c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a6b150fb2d3b8ae4d7d5b5cde10db92b12262bfde06623a20cf94f61c496c0->enter($__internal_d3a6b150fb2d3b8ae4d7d5b5cde10db92b12262bfde06623a20cf94f61c496c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_bf8d0da1c4f39d5e7ad67055a57dafbbcbe779c57020f71d6f8596b1a5517f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8d0da1c4f39d5e7ad67055a57dafbbcbe779c57020f71d6f8596b1a5517f3c->enter($__internal_bf8d0da1c4f39d5e7ad67055a57dafbbcbe779c57020f71d6f8596b1a5517f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bf8d0da1c4f39d5e7ad67055a57dafbbcbe779c57020f71d6f8596b1a5517f3c->leave($__internal_bf8d0da1c4f39d5e7ad67055a57dafbbcbe779c57020f71d6f8596b1a5517f3c_prof);

        
        $__internal_d3a6b150fb2d3b8ae4d7d5b5cde10db92b12262bfde06623a20cf94f61c496c0->leave($__internal_d3a6b150fb2d3b8ae4d7d5b5cde10db92b12262bfde06623a20cf94f61c496c0_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3f3a276578031f27b1858ddea02bc899403a86d8cb865aaabd6054cbe1c5e35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3a276578031f27b1858ddea02bc899403a86d8cb865aaabd6054cbe1c5e35c->enter($__internal_3f3a276578031f27b1858ddea02bc899403a86d8cb865aaabd6054cbe1c5e35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_cc26904a61169a44ee3a321601fb421feed9ebe05c116a667c0990b0795d4032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc26904a61169a44ee3a321601fb421feed9ebe05c116a667c0990b0795d4032->enter($__internal_cc26904a61169a44ee3a321601fb421feed9ebe05c116a667c0990b0795d4032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
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
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_cc26904a61169a44ee3a321601fb421feed9ebe05c116a667c0990b0795d4032->leave($__internal_cc26904a61169a44ee3a321601fb421feed9ebe05c116a667c0990b0795d4032_prof);

        
        $__internal_3f3a276578031f27b1858ddea02bc899403a86d8cb865aaabd6054cbe1c5e35c->leave($__internal_3f3a276578031f27b1858ddea02bc899403a86d8cb865aaabd6054cbe1c5e35c_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_efaafbed2dd3763e8781a89cac3c822176c7966a518272dc2472685ad317f65f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efaafbed2dd3763e8781a89cac3c822176c7966a518272dc2472685ad317f65f->enter($__internal_efaafbed2dd3763e8781a89cac3c822176c7966a518272dc2472685ad317f65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f1bf026122b66d01e933793ed254bee4438d394ea091dd0778ced0acea992330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bf026122b66d01e933793ed254bee4438d394ea091dd0778ced0acea992330->enter($__internal_f1bf026122b66d01e933793ed254bee4438d394ea091dd0778ced0acea992330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_f1bf026122b66d01e933793ed254bee4438d394ea091dd0778ced0acea992330->leave($__internal_f1bf026122b66d01e933793ed254bee4438d394ea091dd0778ced0acea992330_prof);

        
        $__internal_efaafbed2dd3763e8781a89cac3c822176c7966a518272dc2472685ad317f65f->leave($__internal_efaafbed2dd3763e8781a89cac3c822176c7966a518272dc2472685ad317f65f_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_13e87411d06c2edc188b3b177bd52c57a50b05902fc7d9b9ca950fcfb1cdabe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e87411d06c2edc188b3b177bd52c57a50b05902fc7d9b9ca950fcfb1cdabe1->enter($__internal_13e87411d06c2edc188b3b177bd52c57a50b05902fc7d9b9ca950fcfb1cdabe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ca7b59e6a682e0d637e4d66cf4594bbccab7d13a3fd451a127f668b6aab1fc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7b59e6a682e0d637e4d66cf4594bbccab7d13a3fd451a127f668b6aab1fc82->enter($__internal_ca7b59e6a682e0d637e4d66cf4594bbccab7d13a3fd451a127f668b6aab1fc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_ca7b59e6a682e0d637e4d66cf4594bbccab7d13a3fd451a127f668b6aab1fc82->leave($__internal_ca7b59e6a682e0d637e4d66cf4594bbccab7d13a3fd451a127f668b6aab1fc82_prof);

        
        $__internal_13e87411d06c2edc188b3b177bd52c57a50b05902fc7d9b9ca950fcfb1cdabe1->leave($__internal_13e87411d06c2edc188b3b177bd52c57a50b05902fc7d9b9ca950fcfb1cdabe1_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1586c393722b55599e7f66029999cd5f3f89e1fdc71fc4b8546cc0004f924cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1586c393722b55599e7f66029999cd5f3f89e1fdc71fc4b8546cc0004f924cf2->enter($__internal_1586c393722b55599e7f66029999cd5f3f89e1fdc71fc4b8546cc0004f924cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a55d43a7844800c278fa7218fca2f42c4f4fc431140c0863a89b68fc379f42b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55d43a7844800c278fa7218fca2f42c4f4fc431140c0863a89b68fc379f42b3->enter($__internal_a55d43a7844800c278fa7218fca2f42c4f4fc431140c0863a89b68fc379f42b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a55d43a7844800c278fa7218fca2f42c4f4fc431140c0863a89b68fc379f42b3->leave($__internal_a55d43a7844800c278fa7218fca2f42c4f4fc431140c0863a89b68fc379f42b3_prof);

        
        $__internal_1586c393722b55599e7f66029999cd5f3f89e1fdc71fc4b8546cc0004f924cf2->leave($__internal_1586c393722b55599e7f66029999cd5f3f89e1fdc71fc4b8546cc0004f924cf2_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_50bd845329ff95eb2554b7e29b24bcf90a4ceb8274a47d2c3a09ae4c743b5c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bd845329ff95eb2554b7e29b24bcf90a4ceb8274a47d2c3a09ae4c743b5c5c->enter($__internal_50bd845329ff95eb2554b7e29b24bcf90a4ceb8274a47d2c3a09ae4c743b5c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0a30c101ba2a4321604e186e0af0ef9983645ae7dc864ceca4c309af78693c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a30c101ba2a4321604e186e0af0ef9983645ae7dc864ceca4c309af78693c9e->enter($__internal_0a30c101ba2a4321604e186e0af0ef9983645ae7dc864ceca4c309af78693c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0a30c101ba2a4321604e186e0af0ef9983645ae7dc864ceca4c309af78693c9e->leave($__internal_0a30c101ba2a4321604e186e0af0ef9983645ae7dc864ceca4c309af78693c9e_prof);

        
        $__internal_50bd845329ff95eb2554b7e29b24bcf90a4ceb8274a47d2c3a09ae4c743b5c5c->leave($__internal_50bd845329ff95eb2554b7e29b24bcf90a4ceb8274a47d2c3a09ae4c743b5c5c_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0582697c2440d5804569b41463e337f01c3c092623a8805bab398a6c707a2162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0582697c2440d5804569b41463e337f01c3c092623a8805bab398a6c707a2162->enter($__internal_0582697c2440d5804569b41463e337f01c3c092623a8805bab398a6c707a2162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9c095dade8c854407d59aa4669e1bddd039f01c8f13d65e3819230207a0d50f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c095dade8c854407d59aa4669e1bddd039f01c8f13d65e3819230207a0d50f4->enter($__internal_9c095dade8c854407d59aa4669e1bddd039f01c8f13d65e3819230207a0d50f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9c095dade8c854407d59aa4669e1bddd039f01c8f13d65e3819230207a0d50f4->leave($__internal_9c095dade8c854407d59aa4669e1bddd039f01c8f13d65e3819230207a0d50f4_prof);

        
        $__internal_0582697c2440d5804569b41463e337f01c3c092623a8805bab398a6c707a2162->leave($__internal_0582697c2440d5804569b41463e337f01c3c092623a8805bab398a6c707a2162_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d50c838c84c383ab9d188d0975f81ab3918d5b490d87900faafb9828331adfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50c838c84c383ab9d188d0975f81ab3918d5b490d87900faafb9828331adfdc->enter($__internal_d50c838c84c383ab9d188d0975f81ab3918d5b490d87900faafb9828331adfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_818df6368e814e89ad4f9f97c1ff7f4f16e401b893363e9acf7e489185f37dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818df6368e814e89ad4f9f97c1ff7f4f16e401b893363e9acf7e489185f37dd7->enter($__internal_818df6368e814e89ad4f9f97c1ff7f4f16e401b893363e9acf7e489185f37dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_818df6368e814e89ad4f9f97c1ff7f4f16e401b893363e9acf7e489185f37dd7->leave($__internal_818df6368e814e89ad4f9f97c1ff7f4f16e401b893363e9acf7e489185f37dd7_prof);

        
        $__internal_d50c838c84c383ab9d188d0975f81ab3918d5b490d87900faafb9828331adfdc->leave($__internal_d50c838c84c383ab9d188d0975f81ab3918d5b490d87900faafb9828331adfdc_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_53bf70be5a964085f90fab78a9f0dd698cb9f8a734ab6778c011f1172841a31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bf70be5a964085f90fab78a9f0dd698cb9f8a734ab6778c011f1172841a31b->enter($__internal_53bf70be5a964085f90fab78a9f0dd698cb9f8a734ab6778c011f1172841a31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2bedd302c8b7404d1467c63e0596d1ff42bd3ce8f9c9a06659fd1e18e0013110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bedd302c8b7404d1467c63e0596d1ff42bd3ce8f9c9a06659fd1e18e0013110->enter($__internal_2bedd302c8b7404d1467c63e0596d1ff42bd3ce8f9c9a06659fd1e18e0013110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_2bedd302c8b7404d1467c63e0596d1ff42bd3ce8f9c9a06659fd1e18e0013110->leave($__internal_2bedd302c8b7404d1467c63e0596d1ff42bd3ce8f9c9a06659fd1e18e0013110_prof);

        
        $__internal_53bf70be5a964085f90fab78a9f0dd698cb9f8a734ab6778c011f1172841a31b->leave($__internal_53bf70be5a964085f90fab78a9f0dd698cb9f8a734ab6778c011f1172841a31b_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1b38c9b4e2ead1a1ad54acb06ad642fc87cb439859d7817e3967de01cc2806ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b38c9b4e2ead1a1ad54acb06ad642fc87cb439859d7817e3967de01cc2806ac->enter($__internal_1b38c9b4e2ead1a1ad54acb06ad642fc87cb439859d7817e3967de01cc2806ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c18461cc3c4cfcac737e9dcdab8c15d852048aefcb5fa7ee5aca73f443710444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18461cc3c4cfcac737e9dcdab8c15d852048aefcb5fa7ee5aca73f443710444->enter($__internal_c18461cc3c4cfcac737e9dcdab8c15d852048aefcb5fa7ee5aca73f443710444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_c18461cc3c4cfcac737e9dcdab8c15d852048aefcb5fa7ee5aca73f443710444->leave($__internal_c18461cc3c4cfcac737e9dcdab8c15d852048aefcb5fa7ee5aca73f443710444_prof);

        
        $__internal_1b38c9b4e2ead1a1ad54acb06ad642fc87cb439859d7817e3967de01cc2806ac->leave($__internal_1b38c9b4e2ead1a1ad54acb06ad642fc87cb439859d7817e3967de01cc2806ac_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_79e18d0172b5cf2749c2ec4cf058d18dd0317fa97535fb75a7c53724447fce7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e18d0172b5cf2749c2ec4cf058d18dd0317fa97535fb75a7c53724447fce7b->enter($__internal_79e18d0172b5cf2749c2ec4cf058d18dd0317fa97535fb75a7c53724447fce7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e29c845293ae8fcd95309dfcbc798cae9a6d77cd73363faa3d1983c2e48d8f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29c845293ae8fcd95309dfcbc798cae9a6d77cd73363faa3d1983c2e48d8f88->enter($__internal_e29c845293ae8fcd95309dfcbc798cae9a6d77cd73363faa3d1983c2e48d8f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_e29c845293ae8fcd95309dfcbc798cae9a6d77cd73363faa3d1983c2e48d8f88->leave($__internal_e29c845293ae8fcd95309dfcbc798cae9a6d77cd73363faa3d1983c2e48d8f88_prof);

        
        $__internal_79e18d0172b5cf2749c2ec4cf058d18dd0317fa97535fb75a7c53724447fce7b->leave($__internal_79e18d0172b5cf2749c2ec4cf058d18dd0317fa97535fb75a7c53724447fce7b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
