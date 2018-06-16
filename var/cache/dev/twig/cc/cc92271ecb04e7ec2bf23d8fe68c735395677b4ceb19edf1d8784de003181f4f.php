<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dd7144d71c9113c0d7502bc393816e5493eae9d9489021428907dc7189fa399a extends Twig_Template
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
        $__internal_02d8e86ea18de9efa4044e276be05c3819dd32c2fb16b531dae8168484ebcddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d8e86ea18de9efa4044e276be05c3819dd32c2fb16b531dae8168484ebcddc->enter($__internal_02d8e86ea18de9efa4044e276be05c3819dd32c2fb16b531dae8168484ebcddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6e7292d6736317f81db61285c9feaef13e43f0a3206dfed543be98b8d913b52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7292d6736317f81db61285c9feaef13e43f0a3206dfed543be98b8d913b52e->enter($__internal_6e7292d6736317f81db61285c9feaef13e43f0a3206dfed543be98b8d913b52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_02d8e86ea18de9efa4044e276be05c3819dd32c2fb16b531dae8168484ebcddc->leave($__internal_02d8e86ea18de9efa4044e276be05c3819dd32c2fb16b531dae8168484ebcddc_prof);

        
        $__internal_6e7292d6736317f81db61285c9feaef13e43f0a3206dfed543be98b8d913b52e->leave($__internal_6e7292d6736317f81db61285c9feaef13e43f0a3206dfed543be98b8d913b52e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
