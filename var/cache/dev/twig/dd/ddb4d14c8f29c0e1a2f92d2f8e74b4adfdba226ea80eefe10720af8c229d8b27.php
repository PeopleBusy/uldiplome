<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5c2e3e34ba69b993b9120b13741509502ac9547ff8b1c64c34053ae847af5eea extends Twig_Template
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
        $__internal_042bf89db867147e9ae8dd7c830062e7a59f7777ed748a56e666550154638888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042bf89db867147e9ae8dd7c830062e7a59f7777ed748a56e666550154638888->enter($__internal_042bf89db867147e9ae8dd7c830062e7a59f7777ed748a56e666550154638888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9bc44fc5ff10c8e8e8f806d0cde4d784b7eefebc727c8d17caef1e84b01df8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc44fc5ff10c8e8e8f806d0cde4d784b7eefebc727c8d17caef1e84b01df8b8->enter($__internal_9bc44fc5ff10c8e8e8f806d0cde4d784b7eefebc727c8d17caef1e84b01df8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_042bf89db867147e9ae8dd7c830062e7a59f7777ed748a56e666550154638888->leave($__internal_042bf89db867147e9ae8dd7c830062e7a59f7777ed748a56e666550154638888_prof);

        
        $__internal_9bc44fc5ff10c8e8e8f806d0cde4d784b7eefebc727c8d17caef1e84b01df8b8->leave($__internal_9bc44fc5ff10c8e8e8f806d0cde4d784b7eefebc727c8d17caef1e84b01df8b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
