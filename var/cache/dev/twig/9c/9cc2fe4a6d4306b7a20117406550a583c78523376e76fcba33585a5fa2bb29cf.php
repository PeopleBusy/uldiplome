<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0be83783bd07f51e0222b57457fb6075af8c2ad0b2c2f3dd6d6543d91b2f1187 extends Twig_Template
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
        $__internal_e4f6e1ac8504136a634135a5c770a127ab00e70803a1e0f12472bbbd6ba7a8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f6e1ac8504136a634135a5c770a127ab00e70803a1e0f12472bbbd6ba7a8c8->enter($__internal_e4f6e1ac8504136a634135a5c770a127ab00e70803a1e0f12472bbbd6ba7a8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3d3f6ccbe58370da283ffd1c388ddc920172e2f5ee521d24106dfd2c0181fc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3f6ccbe58370da283ffd1c388ddc920172e2f5ee521d24106dfd2c0181fc2d->enter($__internal_3d3f6ccbe58370da283ffd1c388ddc920172e2f5ee521d24106dfd2c0181fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e4f6e1ac8504136a634135a5c770a127ab00e70803a1e0f12472bbbd6ba7a8c8->leave($__internal_e4f6e1ac8504136a634135a5c770a127ab00e70803a1e0f12472bbbd6ba7a8c8_prof);

        
        $__internal_3d3f6ccbe58370da283ffd1c388ddc920172e2f5ee521d24106dfd2c0181fc2d->leave($__internal_3d3f6ccbe58370da283ffd1c388ddc920172e2f5ee521d24106dfd2c0181fc2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
