<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_95d45569f269284775ac3ce651b5c9a1a3aed8b575d3ff48dc9e6620c9c2df97 extends Twig_Template
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
        $__internal_a6e04c4d56f787f0f9bf893b69b2fd2c7ac763671aeaabac44cff08b419bf5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e04c4d56f787f0f9bf893b69b2fd2c7ac763671aeaabac44cff08b419bf5a6->enter($__internal_a6e04c4d56f787f0f9bf893b69b2fd2c7ac763671aeaabac44cff08b419bf5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a4267c40873f32c2f71d087e84f445fb46554b64f4b4fc8b8accde82809d117f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4267c40873f32c2f71d087e84f445fb46554b64f4b4fc8b8accde82809d117f->enter($__internal_a4267c40873f32c2f71d087e84f445fb46554b64f4b4fc8b8accde82809d117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a6e04c4d56f787f0f9bf893b69b2fd2c7ac763671aeaabac44cff08b419bf5a6->leave($__internal_a6e04c4d56f787f0f9bf893b69b2fd2c7ac763671aeaabac44cff08b419bf5a6_prof);

        
        $__internal_a4267c40873f32c2f71d087e84f445fb46554b64f4b4fc8b8accde82809d117f->leave($__internal_a4267c40873f32c2f71d087e84f445fb46554b64f4b4fc8b8accde82809d117f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
