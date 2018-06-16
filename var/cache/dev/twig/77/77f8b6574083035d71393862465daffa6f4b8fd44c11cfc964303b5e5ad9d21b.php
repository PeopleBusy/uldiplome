<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_338371db4c27cfa19c34090014fde2aa4ca37e38064aca39dc8ea9d8ac6159db extends Twig_Template
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
        $__internal_d056c4b7e0aa6d2404c11fee379054c3150cfd422d8db148d734fa9d095d6a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d056c4b7e0aa6d2404c11fee379054c3150cfd422d8db148d734fa9d095d6a67->enter($__internal_d056c4b7e0aa6d2404c11fee379054c3150cfd422d8db148d734fa9d095d6a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_eaf32962352c37d48f5f3cee47c9a856871fea19b463786d003aba78d802d416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf32962352c37d48f5f3cee47c9a856871fea19b463786d003aba78d802d416->enter($__internal_eaf32962352c37d48f5f3cee47c9a856871fea19b463786d003aba78d802d416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d056c4b7e0aa6d2404c11fee379054c3150cfd422d8db148d734fa9d095d6a67->leave($__internal_d056c4b7e0aa6d2404c11fee379054c3150cfd422d8db148d734fa9d095d6a67_prof);

        
        $__internal_eaf32962352c37d48f5f3cee47c9a856871fea19b463786d003aba78d802d416->leave($__internal_eaf32962352c37d48f5f3cee47c9a856871fea19b463786d003aba78d802d416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
