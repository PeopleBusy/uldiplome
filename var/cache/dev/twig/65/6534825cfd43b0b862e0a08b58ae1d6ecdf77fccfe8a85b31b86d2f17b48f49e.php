<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ebd332e3a254704278c400cbf5ee4b34bed56e5da51e300078366e241c542af extends Twig_Template
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
        $__internal_80eaff8e2a9cdb21d6e20730e48f8f555a28854f0f8d5ac18f49b1a7aa6de542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80eaff8e2a9cdb21d6e20730e48f8f555a28854f0f8d5ac18f49b1a7aa6de542->enter($__internal_80eaff8e2a9cdb21d6e20730e48f8f555a28854f0f8d5ac18f49b1a7aa6de542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0b54383c716e0f995bc467c2b8f500a133bcbc0c3a9c56c9bddd80c5a8983727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b54383c716e0f995bc467c2b8f500a133bcbc0c3a9c56c9bddd80c5a8983727->enter($__internal_0b54383c716e0f995bc467c2b8f500a133bcbc0c3a9c56c9bddd80c5a8983727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_80eaff8e2a9cdb21d6e20730e48f8f555a28854f0f8d5ac18f49b1a7aa6de542->leave($__internal_80eaff8e2a9cdb21d6e20730e48f8f555a28854f0f8d5ac18f49b1a7aa6de542_prof);

        
        $__internal_0b54383c716e0f995bc467c2b8f500a133bcbc0c3a9c56c9bddd80c5a8983727->leave($__internal_0b54383c716e0f995bc467c2b8f500a133bcbc0c3a9c56c9bddd80c5a8983727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
