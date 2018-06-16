<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c763e67be7fccde35334e51315fa2877b78ce320cfaa5dd01ba453cc8c185ced extends Twig_Template
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
        $__internal_3506ae981965248faf0aa8b8e4f1e77d297ff7425b4b4b45e918380a543a361b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3506ae981965248faf0aa8b8e4f1e77d297ff7425b4b4b45e918380a543a361b->enter($__internal_3506ae981965248faf0aa8b8e4f1e77d297ff7425b4b4b45e918380a543a361b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d982aff3dcaaeb4fecce3009f00f48d848cafa5772d9dfecfe391381728cf142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d982aff3dcaaeb4fecce3009f00f48d848cafa5772d9dfecfe391381728cf142->enter($__internal_d982aff3dcaaeb4fecce3009f00f48d848cafa5772d9dfecfe391381728cf142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3506ae981965248faf0aa8b8e4f1e77d297ff7425b4b4b45e918380a543a361b->leave($__internal_3506ae981965248faf0aa8b8e4f1e77d297ff7425b4b4b45e918380a543a361b_prof);

        
        $__internal_d982aff3dcaaeb4fecce3009f00f48d848cafa5772d9dfecfe391381728cf142->leave($__internal_d982aff3dcaaeb4fecce3009f00f48d848cafa5772d9dfecfe391381728cf142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
