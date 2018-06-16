<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_546e3417c4245744cdf89eeafd3049914faf151e2d21b951528161a08f472951 extends Twig_Template
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
        $__internal_9944269cd4a4998ad7ce73c0a355ea08d7a77e0a4963e70aa9dcad360d523b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9944269cd4a4998ad7ce73c0a355ea08d7a77e0a4963e70aa9dcad360d523b9b->enter($__internal_9944269cd4a4998ad7ce73c0a355ea08d7a77e0a4963e70aa9dcad360d523b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_29e7f75780e35c5f58ae524a97ecf848be951a9d57161fb61f879b9efc1f7b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e7f75780e35c5f58ae524a97ecf848be951a9d57161fb61f879b9efc1f7b76->enter($__internal_29e7f75780e35c5f58ae524a97ecf848be951a9d57161fb61f879b9efc1f7b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9944269cd4a4998ad7ce73c0a355ea08d7a77e0a4963e70aa9dcad360d523b9b->leave($__internal_9944269cd4a4998ad7ce73c0a355ea08d7a77e0a4963e70aa9dcad360d523b9b_prof);

        
        $__internal_29e7f75780e35c5f58ae524a97ecf848be951a9d57161fb61f879b9efc1f7b76->leave($__internal_29e7f75780e35c5f58ae524a97ecf848be951a9d57161fb61f879b9efc1f7b76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
