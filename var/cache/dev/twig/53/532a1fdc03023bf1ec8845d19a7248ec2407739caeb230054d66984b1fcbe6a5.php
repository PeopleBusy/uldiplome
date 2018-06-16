<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_2f8f2499aa3c855571913f9d8c0d2a7ae1ebd5ad7e2fc89af69b2e5e95fb02b0 extends Twig_Template
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
        $__internal_96c9ce1327c78e517f34c2fc2dc4b1791d67733b0a3ac45b1073cad316967c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c9ce1327c78e517f34c2fc2dc4b1791d67733b0a3ac45b1073cad316967c91->enter($__internal_96c9ce1327c78e517f34c2fc2dc4b1791d67733b0a3ac45b1073cad316967c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_86be7d36a8d5f2631aa7dafed0fe1c895ffa35052482bad94cecafea2d01ebd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86be7d36a8d5f2631aa7dafed0fe1c895ffa35052482bad94cecafea2d01ebd6->enter($__internal_86be7d36a8d5f2631aa7dafed0fe1c895ffa35052482bad94cecafea2d01ebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_96c9ce1327c78e517f34c2fc2dc4b1791d67733b0a3ac45b1073cad316967c91->leave($__internal_96c9ce1327c78e517f34c2fc2dc4b1791d67733b0a3ac45b1073cad316967c91_prof);

        
        $__internal_86be7d36a8d5f2631aa7dafed0fe1c895ffa35052482bad94cecafea2d01ebd6->leave($__internal_86be7d36a8d5f2631aa7dafed0fe1c895ffa35052482bad94cecafea2d01ebd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
