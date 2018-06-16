<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d2707ee3304d9145bc05c33462dc650cf0433754c685845192ec1b1620fce78f extends Twig_Template
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
        $__internal_1a393c867c43bc31a5e445879e62f09fcfcf2e9885b12e681b8bf0d6dd154f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a393c867c43bc31a5e445879e62f09fcfcf2e9885b12e681b8bf0d6dd154f3d->enter($__internal_1a393c867c43bc31a5e445879e62f09fcfcf2e9885b12e681b8bf0d6dd154f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f71f65080ff3edb2b0edbe1b1b4bc41a66e307c18326791fad7ffd03e2cff76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71f65080ff3edb2b0edbe1b1b4bc41a66e307c18326791fad7ffd03e2cff76c->enter($__internal_f71f65080ff3edb2b0edbe1b1b4bc41a66e307c18326791fad7ffd03e2cff76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1a393c867c43bc31a5e445879e62f09fcfcf2e9885b12e681b8bf0d6dd154f3d->leave($__internal_1a393c867c43bc31a5e445879e62f09fcfcf2e9885b12e681b8bf0d6dd154f3d_prof);

        
        $__internal_f71f65080ff3edb2b0edbe1b1b4bc41a66e307c18326791fad7ffd03e2cff76c->leave($__internal_f71f65080ff3edb2b0edbe1b1b4bc41a66e307c18326791fad7ffd03e2cff76c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
