<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f6f0452f9db8aeb3b08a49d84b8e668abf58d9f5205b38d8faf888dffe174f74 extends Twig_Template
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
        $__internal_a8b0fc184d8c89454769a549279cbdfd84cad53854138fcd969fa8baab0a95ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b0fc184d8c89454769a549279cbdfd84cad53854138fcd969fa8baab0a95ea->enter($__internal_a8b0fc184d8c89454769a549279cbdfd84cad53854138fcd969fa8baab0a95ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c1e2cf3f9e034b9558f2b62b8b621b3f7d791ae7f3fafbd1c86772492a68bf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e2cf3f9e034b9558f2b62b8b621b3f7d791ae7f3fafbd1c86772492a68bf7c->enter($__internal_c1e2cf3f9e034b9558f2b62b8b621b3f7d791ae7f3fafbd1c86772492a68bf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a8b0fc184d8c89454769a549279cbdfd84cad53854138fcd969fa8baab0a95ea->leave($__internal_a8b0fc184d8c89454769a549279cbdfd84cad53854138fcd969fa8baab0a95ea_prof);

        
        $__internal_c1e2cf3f9e034b9558f2b62b8b621b3f7d791ae7f3fafbd1c86772492a68bf7c->leave($__internal_c1e2cf3f9e034b9558f2b62b8b621b3f7d791ae7f3fafbd1c86772492a68bf7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
