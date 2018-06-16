<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e9a2f8da40e319aee86a8b78cb8dddc95f97fe67a2045f1bb7e811209ece971a extends Twig_Template
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
        $__internal_0ba0b3db8655b477cec73c0b46b4b1c228c55ae32f0d0937b17d31776400efda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba0b3db8655b477cec73c0b46b4b1c228c55ae32f0d0937b17d31776400efda->enter($__internal_0ba0b3db8655b477cec73c0b46b4b1c228c55ae32f0d0937b17d31776400efda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7e2eb9d5e7645f9854c1c741797d3fde36b1cd784a6ab07ffaaeca5d97298992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2eb9d5e7645f9854c1c741797d3fde36b1cd784a6ab07ffaaeca5d97298992->enter($__internal_7e2eb9d5e7645f9854c1c741797d3fde36b1cd784a6ab07ffaaeca5d97298992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0ba0b3db8655b477cec73c0b46b4b1c228c55ae32f0d0937b17d31776400efda->leave($__internal_0ba0b3db8655b477cec73c0b46b4b1c228c55ae32f0d0937b17d31776400efda_prof);

        
        $__internal_7e2eb9d5e7645f9854c1c741797d3fde36b1cd784a6ab07ffaaeca5d97298992->leave($__internal_7e2eb9d5e7645f9854c1c741797d3fde36b1cd784a6ab07ffaaeca5d97298992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
