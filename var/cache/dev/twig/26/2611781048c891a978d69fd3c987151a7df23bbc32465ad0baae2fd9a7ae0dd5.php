<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_349e2de801df98270fecfa0898cbf7019486a3b3a05b2d17750b577b74666353 extends Twig_Template
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
        $__internal_f40c9de5b4f2753de8028740ebdbd7d09f124c421aab52cd384b98ea82f190c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40c9de5b4f2753de8028740ebdbd7d09f124c421aab52cd384b98ea82f190c0->enter($__internal_f40c9de5b4f2753de8028740ebdbd7d09f124c421aab52cd384b98ea82f190c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_64235625edb0974da3e9db1ab32a51df2976a01024d84d4f5812d71f5b79e79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64235625edb0974da3e9db1ab32a51df2976a01024d84d4f5812d71f5b79e79b->enter($__internal_64235625edb0974da3e9db1ab32a51df2976a01024d84d4f5812d71f5b79e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f40c9de5b4f2753de8028740ebdbd7d09f124c421aab52cd384b98ea82f190c0->leave($__internal_f40c9de5b4f2753de8028740ebdbd7d09f124c421aab52cd384b98ea82f190c0_prof);

        
        $__internal_64235625edb0974da3e9db1ab32a51df2976a01024d84d4f5812d71f5b79e79b->leave($__internal_64235625edb0974da3e9db1ab32a51df2976a01024d84d4f5812d71f5b79e79b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
