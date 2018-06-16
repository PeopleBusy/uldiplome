<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9867fd41d7fb74166c596192f250fcb9bbd04f1b21b5974cd52d2caeee7a977d extends Twig_Template
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
        $__internal_7553429eb91a617bef58f609edb7eb560157e6c188a1bee94d2e2c9ea8b09db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7553429eb91a617bef58f609edb7eb560157e6c188a1bee94d2e2c9ea8b09db5->enter($__internal_7553429eb91a617bef58f609edb7eb560157e6c188a1bee94d2e2c9ea8b09db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c2f853e82d2c70b3d5e06e374d42e25f328aea4d46e9add36e642e4ce04112ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f853e82d2c70b3d5e06e374d42e25f328aea4d46e9add36e642e4ce04112ff->enter($__internal_c2f853e82d2c70b3d5e06e374d42e25f328aea4d46e9add36e642e4ce04112ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7553429eb91a617bef58f609edb7eb560157e6c188a1bee94d2e2c9ea8b09db5->leave($__internal_7553429eb91a617bef58f609edb7eb560157e6c188a1bee94d2e2c9ea8b09db5_prof);

        
        $__internal_c2f853e82d2c70b3d5e06e374d42e25f328aea4d46e9add36e642e4ce04112ff->leave($__internal_c2f853e82d2c70b3d5e06e374d42e25f328aea4d46e9add36e642e4ce04112ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
