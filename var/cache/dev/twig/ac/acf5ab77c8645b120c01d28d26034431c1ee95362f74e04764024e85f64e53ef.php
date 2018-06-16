<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4a56297752de907b7cd3c1912aea90cf882f843ca238edc45a2ad4d4c1d11cf7 extends Twig_Template
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
        $__internal_d5979626e38536744274a3a9290193e185a3da465c5020b87b61552dde21ac5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5979626e38536744274a3a9290193e185a3da465c5020b87b61552dde21ac5e->enter($__internal_d5979626e38536744274a3a9290193e185a3da465c5020b87b61552dde21ac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bd2fef28793d1346614d47dc38d2ec0b15cfd71e5b79b9fbea241a6fa0dadd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2fef28793d1346614d47dc38d2ec0b15cfd71e5b79b9fbea241a6fa0dadd92->enter($__internal_bd2fef28793d1346614d47dc38d2ec0b15cfd71e5b79b9fbea241a6fa0dadd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d5979626e38536744274a3a9290193e185a3da465c5020b87b61552dde21ac5e->leave($__internal_d5979626e38536744274a3a9290193e185a3da465c5020b87b61552dde21ac5e_prof);

        
        $__internal_bd2fef28793d1346614d47dc38d2ec0b15cfd71e5b79b9fbea241a6fa0dadd92->leave($__internal_bd2fef28793d1346614d47dc38d2ec0b15cfd71e5b79b9fbea241a6fa0dadd92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
