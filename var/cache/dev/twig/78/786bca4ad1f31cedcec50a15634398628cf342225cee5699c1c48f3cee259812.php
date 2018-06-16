<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c8ea3f8cc595842bc033dd06413db392dfd169decb1573235158ca96d63f9ba5 extends Twig_Template
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
        $__internal_0f2c7e26d375330cdd3a94efad54d3d8ef433ac37f946e91e51b86852c245f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2c7e26d375330cdd3a94efad54d3d8ef433ac37f946e91e51b86852c245f59->enter($__internal_0f2c7e26d375330cdd3a94efad54d3d8ef433ac37f946e91e51b86852c245f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c8ad5b8c58ccd7afe89e3e2ba4a62e9eefaf6f8e2de5c9b3e02d0d875fbcd350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ad5b8c58ccd7afe89e3e2ba4a62e9eefaf6f8e2de5c9b3e02d0d875fbcd350->enter($__internal_c8ad5b8c58ccd7afe89e3e2ba4a62e9eefaf6f8e2de5c9b3e02d0d875fbcd350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0f2c7e26d375330cdd3a94efad54d3d8ef433ac37f946e91e51b86852c245f59->leave($__internal_0f2c7e26d375330cdd3a94efad54d3d8ef433ac37f946e91e51b86852c245f59_prof);

        
        $__internal_c8ad5b8c58ccd7afe89e3e2ba4a62e9eefaf6f8e2de5c9b3e02d0d875fbcd350->leave($__internal_c8ad5b8c58ccd7afe89e3e2ba4a62e9eefaf6f8e2de5c9b3e02d0d875fbcd350_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
