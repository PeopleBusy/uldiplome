<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f5cf5198b10aeff219f8ae705c3a4dee7751d68ba75e3282f5858ace22c7fa4 extends Twig_Template
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
        $__internal_86f4573d34c855c747fe96b913b78dec0b17c60378d9e7eac4c2dd85b3c1dcea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f4573d34c855c747fe96b913b78dec0b17c60378d9e7eac4c2dd85b3c1dcea->enter($__internal_86f4573d34c855c747fe96b913b78dec0b17c60378d9e7eac4c2dd85b3c1dcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4bab56bef1c528073684995468a5c6ba5c47522323ea9ecccf8de4d254fc63d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bab56bef1c528073684995468a5c6ba5c47522323ea9ecccf8de4d254fc63d5->enter($__internal_4bab56bef1c528073684995468a5c6ba5c47522323ea9ecccf8de4d254fc63d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_86f4573d34c855c747fe96b913b78dec0b17c60378d9e7eac4c2dd85b3c1dcea->leave($__internal_86f4573d34c855c747fe96b913b78dec0b17c60378d9e7eac4c2dd85b3c1dcea_prof);

        
        $__internal_4bab56bef1c528073684995468a5c6ba5c47522323ea9ecccf8de4d254fc63d5->leave($__internal_4bab56bef1c528073684995468a5c6ba5c47522323ea9ecccf8de4d254fc63d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
