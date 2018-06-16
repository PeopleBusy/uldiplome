<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d8a072e0c5a3bf8bf49b144272bbd0338501d7ac4427ef2df0fec672434660f0 extends Twig_Template
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
        $__internal_3d94abfedcd85f7bab9e78fc72c9fbc549f4ebf8deb1f9ee5da558871608f870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d94abfedcd85f7bab9e78fc72c9fbc549f4ebf8deb1f9ee5da558871608f870->enter($__internal_3d94abfedcd85f7bab9e78fc72c9fbc549f4ebf8deb1f9ee5da558871608f870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6baf8480d8c9be73299743d40884564dd1613dddac4078ccb9a32485a475fcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6baf8480d8c9be73299743d40884564dd1613dddac4078ccb9a32485a475fcf2->enter($__internal_6baf8480d8c9be73299743d40884564dd1613dddac4078ccb9a32485a475fcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3d94abfedcd85f7bab9e78fc72c9fbc549f4ebf8deb1f9ee5da558871608f870->leave($__internal_3d94abfedcd85f7bab9e78fc72c9fbc549f4ebf8deb1f9ee5da558871608f870_prof);

        
        $__internal_6baf8480d8c9be73299743d40884564dd1613dddac4078ccb9a32485a475fcf2->leave($__internal_6baf8480d8c9be73299743d40884564dd1613dddac4078ccb9a32485a475fcf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
