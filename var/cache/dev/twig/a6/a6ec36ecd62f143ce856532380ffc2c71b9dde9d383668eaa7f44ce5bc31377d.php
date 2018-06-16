<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7469a7b2b60695e7a08300e38d4f4dfed879b63da8282b8d585b084fa96ed697 extends Twig_Template
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
        $__internal_56ac16a5d5130f6f1028201d2efa496182eb0ad4d591f31897cb91bff2be40cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ac16a5d5130f6f1028201d2efa496182eb0ad4d591f31897cb91bff2be40cd->enter($__internal_56ac16a5d5130f6f1028201d2efa496182eb0ad4d591f31897cb91bff2be40cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6ba9d0fbcfa3d99af3ab1b7d4f10186cd8486f7ff61eea3e19f51473cd6d5be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba9d0fbcfa3d99af3ab1b7d4f10186cd8486f7ff61eea3e19f51473cd6d5be7->enter($__internal_6ba9d0fbcfa3d99af3ab1b7d4f10186cd8486f7ff61eea3e19f51473cd6d5be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_56ac16a5d5130f6f1028201d2efa496182eb0ad4d591f31897cb91bff2be40cd->leave($__internal_56ac16a5d5130f6f1028201d2efa496182eb0ad4d591f31897cb91bff2be40cd_prof);

        
        $__internal_6ba9d0fbcfa3d99af3ab1b7d4f10186cd8486f7ff61eea3e19f51473cd6d5be7->leave($__internal_6ba9d0fbcfa3d99af3ab1b7d4f10186cd8486f7ff61eea3e19f51473cd6d5be7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
