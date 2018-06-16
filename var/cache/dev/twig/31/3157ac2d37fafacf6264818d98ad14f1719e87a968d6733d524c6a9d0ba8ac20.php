<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_15fa605dca1f8dfa058cbb0f42d0d0f799bc7f1b13471a84c75cd0b5ffc6e565 extends Twig_Template
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
        $__internal_3a129961ae8b04279c8ad77a69e22c10cf139b52696caf25656ba8b8c3b45bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a129961ae8b04279c8ad77a69e22c10cf139b52696caf25656ba8b8c3b45bac->enter($__internal_3a129961ae8b04279c8ad77a69e22c10cf139b52696caf25656ba8b8c3b45bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f49294d61039a0c608ba4515952e1f0644b88f02aa96785463df7bf154d0ce62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49294d61039a0c608ba4515952e1f0644b88f02aa96785463df7bf154d0ce62->enter($__internal_f49294d61039a0c608ba4515952e1f0644b88f02aa96785463df7bf154d0ce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3a129961ae8b04279c8ad77a69e22c10cf139b52696caf25656ba8b8c3b45bac->leave($__internal_3a129961ae8b04279c8ad77a69e22c10cf139b52696caf25656ba8b8c3b45bac_prof);

        
        $__internal_f49294d61039a0c608ba4515952e1f0644b88f02aa96785463df7bf154d0ce62->leave($__internal_f49294d61039a0c608ba4515952e1f0644b88f02aa96785463df7bf154d0ce62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
