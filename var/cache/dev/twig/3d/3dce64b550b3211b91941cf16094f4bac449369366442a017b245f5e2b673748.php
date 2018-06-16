<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d2ebeea06f9ea78d73626b805eafd7d59ef1cc6ca35e68f7470a147fa29720ba extends Twig_Template
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
        $__internal_b0f54f955527cd703c913b354bc0d591cf196f8f1d7d865758e04d90a3eab106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f54f955527cd703c913b354bc0d591cf196f8f1d7d865758e04d90a3eab106->enter($__internal_b0f54f955527cd703c913b354bc0d591cf196f8f1d7d865758e04d90a3eab106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_883868cff865d01a69a082cb968780ad2b0930664a8237347c96faa57c7c7f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883868cff865d01a69a082cb968780ad2b0930664a8237347c96faa57c7c7f37->enter($__internal_883868cff865d01a69a082cb968780ad2b0930664a8237347c96faa57c7c7f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0f54f955527cd703c913b354bc0d591cf196f8f1d7d865758e04d90a3eab106->leave($__internal_b0f54f955527cd703c913b354bc0d591cf196f8f1d7d865758e04d90a3eab106_prof);

        
        $__internal_883868cff865d01a69a082cb968780ad2b0930664a8237347c96faa57c7c7f37->leave($__internal_883868cff865d01a69a082cb968780ad2b0930664a8237347c96faa57c7c7f37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
