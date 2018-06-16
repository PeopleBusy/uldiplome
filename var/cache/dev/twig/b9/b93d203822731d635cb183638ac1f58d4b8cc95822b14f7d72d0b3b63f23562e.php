<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b5546d210ace54589f76e104271cd2ded7b60294d28c41bb652e33ae5a0ba20b extends Twig_Template
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
        $__internal_cdf6a87c14cfaf9b8c878708dc0914ad552c78e289db7c6abcd4b83818ce5eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf6a87c14cfaf9b8c878708dc0914ad552c78e289db7c6abcd4b83818ce5eb4->enter($__internal_cdf6a87c14cfaf9b8c878708dc0914ad552c78e289db7c6abcd4b83818ce5eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1383e4fe35430429ce41c7e7384f4910101582ef5e8dd7820835aff0498e2cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1383e4fe35430429ce41c7e7384f4910101582ef5e8dd7820835aff0498e2cc9->enter($__internal_1383e4fe35430429ce41c7e7384f4910101582ef5e8dd7820835aff0498e2cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_cdf6a87c14cfaf9b8c878708dc0914ad552c78e289db7c6abcd4b83818ce5eb4->leave($__internal_cdf6a87c14cfaf9b8c878708dc0914ad552c78e289db7c6abcd4b83818ce5eb4_prof);

        
        $__internal_1383e4fe35430429ce41c7e7384f4910101582ef5e8dd7820835aff0498e2cc9->leave($__internal_1383e4fe35430429ce41c7e7384f4910101582ef5e8dd7820835aff0498e2cc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
