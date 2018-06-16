<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_52ad76c648a9958bdc7653adca52cc45ccc18f3cbc293e8bccfbfa4bfdf24e16 extends Twig_Template
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
        $__internal_21d24f699080a47f37ca47863d072078518b8b3da37993c2ac26dc61cce690a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d24f699080a47f37ca47863d072078518b8b3da37993c2ac26dc61cce690a9->enter($__internal_21d24f699080a47f37ca47863d072078518b8b3da37993c2ac26dc61cce690a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ede640e54ee241438812a4d3f21efdde39ebf3e045370659a46045dfd0f291a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede640e54ee241438812a4d3f21efdde39ebf3e045370659a46045dfd0f291a7->enter($__internal_ede640e54ee241438812a4d3f21efdde39ebf3e045370659a46045dfd0f291a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_21d24f699080a47f37ca47863d072078518b8b3da37993c2ac26dc61cce690a9->leave($__internal_21d24f699080a47f37ca47863d072078518b8b3da37993c2ac26dc61cce690a9_prof);

        
        $__internal_ede640e54ee241438812a4d3f21efdde39ebf3e045370659a46045dfd0f291a7->leave($__internal_ede640e54ee241438812a4d3f21efdde39ebf3e045370659a46045dfd0f291a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
