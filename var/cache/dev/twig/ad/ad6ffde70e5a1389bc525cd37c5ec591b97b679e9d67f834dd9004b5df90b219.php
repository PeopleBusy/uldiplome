<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_cabc05a51f4adde61756c081b45d2ebe99cb6996522d64cbd1c1f51947768601 extends Twig_Template
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
        $__internal_47ad7ca1baedd37d718a1fdf75bbe8c8e3ad71a18bbf0d3987223cf9929b9c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ad7ca1baedd37d718a1fdf75bbe8c8e3ad71a18bbf0d3987223cf9929b9c53->enter($__internal_47ad7ca1baedd37d718a1fdf75bbe8c8e3ad71a18bbf0d3987223cf9929b9c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ed38b5444dd8dc4a59c43d361d800245044da2cae7a8db2f17a1d7fe6d7e0f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed38b5444dd8dc4a59c43d361d800245044da2cae7a8db2f17a1d7fe6d7e0f4d->enter($__internal_ed38b5444dd8dc4a59c43d361d800245044da2cae7a8db2f17a1d7fe6d7e0f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_47ad7ca1baedd37d718a1fdf75bbe8c8e3ad71a18bbf0d3987223cf9929b9c53->leave($__internal_47ad7ca1baedd37d718a1fdf75bbe8c8e3ad71a18bbf0d3987223cf9929b9c53_prof);

        
        $__internal_ed38b5444dd8dc4a59c43d361d800245044da2cae7a8db2f17a1d7fe6d7e0f4d->leave($__internal_ed38b5444dd8dc4a59c43d361d800245044da2cae7a8db2f17a1d7fe6d7e0f4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
