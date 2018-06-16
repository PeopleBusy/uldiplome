<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_af889d545eabaee974ca97a2921d7f1f5f87d85e2abaaa2900458f1a5129844b extends Twig_Template
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
        $__internal_b6206e8a9d5772e4caed8a56dacc3b626d3a243c8f8460c23ef706bbd452d782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6206e8a9d5772e4caed8a56dacc3b626d3a243c8f8460c23ef706bbd452d782->enter($__internal_b6206e8a9d5772e4caed8a56dacc3b626d3a243c8f8460c23ef706bbd452d782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_28460de26b940ce8693433c2b911e8d26bfe6a8fae49678d98ef27c9ed5e3aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28460de26b940ce8693433c2b911e8d26bfe6a8fae49678d98ef27c9ed5e3aac->enter($__internal_28460de26b940ce8693433c2b911e8d26bfe6a8fae49678d98ef27c9ed5e3aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b6206e8a9d5772e4caed8a56dacc3b626d3a243c8f8460c23ef706bbd452d782->leave($__internal_b6206e8a9d5772e4caed8a56dacc3b626d3a243c8f8460c23ef706bbd452d782_prof);

        
        $__internal_28460de26b940ce8693433c2b911e8d26bfe6a8fae49678d98ef27c9ed5e3aac->leave($__internal_28460de26b940ce8693433c2b911e8d26bfe6a8fae49678d98ef27c9ed5e3aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
