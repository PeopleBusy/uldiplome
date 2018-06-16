<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_926fbb00248281e39f564c1f0f3685e3462ec1858d60d486dd7366fd7e2a204c extends Twig_Template
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
        $__internal_44d9b8a69d9f7bda504e00804f4745ff2595e1ddd8722e89effbfade705ef9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d9b8a69d9f7bda504e00804f4745ff2595e1ddd8722e89effbfade705ef9f6->enter($__internal_44d9b8a69d9f7bda504e00804f4745ff2595e1ddd8722e89effbfade705ef9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ac23f93d8023772b208fcf3125673cecd830797c6377a3cca124f8218dd07fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac23f93d8023772b208fcf3125673cecd830797c6377a3cca124f8218dd07fc6->enter($__internal_ac23f93d8023772b208fcf3125673cecd830797c6377a3cca124f8218dd07fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_44d9b8a69d9f7bda504e00804f4745ff2595e1ddd8722e89effbfade705ef9f6->leave($__internal_44d9b8a69d9f7bda504e00804f4745ff2595e1ddd8722e89effbfade705ef9f6_prof);

        
        $__internal_ac23f93d8023772b208fcf3125673cecd830797c6377a3cca124f8218dd07fc6->leave($__internal_ac23f93d8023772b208fcf3125673cecd830797c6377a3cca124f8218dd07fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
