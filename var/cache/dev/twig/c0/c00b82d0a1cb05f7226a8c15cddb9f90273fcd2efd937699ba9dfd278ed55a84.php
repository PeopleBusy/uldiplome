<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4513df380544d002e3af11879e71043417aa023ca4a4f1a660cd5ca38d03a4e9 extends Twig_Template
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
        $__internal_fd718b3f5b9d6bc159b5316d8893ab97e8596ad8a10afd93c0e4d76b5538e707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd718b3f5b9d6bc159b5316d8893ab97e8596ad8a10afd93c0e4d76b5538e707->enter($__internal_fd718b3f5b9d6bc159b5316d8893ab97e8596ad8a10afd93c0e4d76b5538e707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_96a62a0a0b17a6d980b8d7226352416727d1604a0ce44288c86600b3f8ebbd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a62a0a0b17a6d980b8d7226352416727d1604a0ce44288c86600b3f8ebbd7a->enter($__internal_96a62a0a0b17a6d980b8d7226352416727d1604a0ce44288c86600b3f8ebbd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fd718b3f5b9d6bc159b5316d8893ab97e8596ad8a10afd93c0e4d76b5538e707->leave($__internal_fd718b3f5b9d6bc159b5316d8893ab97e8596ad8a10afd93c0e4d76b5538e707_prof);

        
        $__internal_96a62a0a0b17a6d980b8d7226352416727d1604a0ce44288c86600b3f8ebbd7a->leave($__internal_96a62a0a0b17a6d980b8d7226352416727d1604a0ce44288c86600b3f8ebbd7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
