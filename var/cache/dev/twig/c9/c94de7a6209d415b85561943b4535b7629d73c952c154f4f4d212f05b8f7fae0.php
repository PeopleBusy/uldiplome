<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9433201755788dd11962cf779cbda83058b6dbda5344320ea26f256aa85ca550 extends Twig_Template
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
        $__internal_58aa4d3535ff5d13b9e380bfb327b5af07ad90d5500a0a4658a291dee8e1e3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58aa4d3535ff5d13b9e380bfb327b5af07ad90d5500a0a4658a291dee8e1e3b1->enter($__internal_58aa4d3535ff5d13b9e380bfb327b5af07ad90d5500a0a4658a291dee8e1e3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6cc298e95e4d805d3d01c7834e2b6c213fd290fcb8d52de67e6ff527ffc78444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc298e95e4d805d3d01c7834e2b6c213fd290fcb8d52de67e6ff527ffc78444->enter($__internal_6cc298e95e4d805d3d01c7834e2b6c213fd290fcb8d52de67e6ff527ffc78444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_58aa4d3535ff5d13b9e380bfb327b5af07ad90d5500a0a4658a291dee8e1e3b1->leave($__internal_58aa4d3535ff5d13b9e380bfb327b5af07ad90d5500a0a4658a291dee8e1e3b1_prof);

        
        $__internal_6cc298e95e4d805d3d01c7834e2b6c213fd290fcb8d52de67e6ff527ffc78444->leave($__internal_6cc298e95e4d805d3d01c7834e2b6c213fd290fcb8d52de67e6ff527ffc78444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
