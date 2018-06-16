<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c1f0757f2c8086917b9c1371f1cf88af9658397bab73f2365f12d1a5293833ef extends Twig_Template
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
        $__internal_3279fb062178c73389ecdf7553a8002664bd5f60761e87b46eb1be5cea6ae228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3279fb062178c73389ecdf7553a8002664bd5f60761e87b46eb1be5cea6ae228->enter($__internal_3279fb062178c73389ecdf7553a8002664bd5f60761e87b46eb1be5cea6ae228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_71ab892f7bc17a6ffdf1032d907f8338aacba2fa5884167c7f4f4e1a249affb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ab892f7bc17a6ffdf1032d907f8338aacba2fa5884167c7f4f4e1a249affb5->enter($__internal_71ab892f7bc17a6ffdf1032d907f8338aacba2fa5884167c7f4f4e1a249affb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3279fb062178c73389ecdf7553a8002664bd5f60761e87b46eb1be5cea6ae228->leave($__internal_3279fb062178c73389ecdf7553a8002664bd5f60761e87b46eb1be5cea6ae228_prof);

        
        $__internal_71ab892f7bc17a6ffdf1032d907f8338aacba2fa5884167c7f4f4e1a249affb5->leave($__internal_71ab892f7bc17a6ffdf1032d907f8338aacba2fa5884167c7f4f4e1a249affb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
