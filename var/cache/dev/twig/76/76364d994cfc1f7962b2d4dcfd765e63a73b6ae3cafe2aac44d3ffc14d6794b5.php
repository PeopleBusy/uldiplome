<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_638ca8c133e197214d1315e9fe73a87e9b2174eb7d93cb270ede3b8fa0fdffb4 extends Twig_Template
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
        $__internal_cdb4c1d5e474eb0ad45cb87d9c755b09ad95753bf6c0cd6dfad5d2d84f7dbe04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb4c1d5e474eb0ad45cb87d9c755b09ad95753bf6c0cd6dfad5d2d84f7dbe04->enter($__internal_cdb4c1d5e474eb0ad45cb87d9c755b09ad95753bf6c0cd6dfad5d2d84f7dbe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_41cdb72c39baf0ce1857959a2d2069953122e8a1c03b13bf010a29dc4418c643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cdb72c39baf0ce1857959a2d2069953122e8a1c03b13bf010a29dc4418c643->enter($__internal_41cdb72c39baf0ce1857959a2d2069953122e8a1c03b13bf010a29dc4418c643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cdb4c1d5e474eb0ad45cb87d9c755b09ad95753bf6c0cd6dfad5d2d84f7dbe04->leave($__internal_cdb4c1d5e474eb0ad45cb87d9c755b09ad95753bf6c0cd6dfad5d2d84f7dbe04_prof);

        
        $__internal_41cdb72c39baf0ce1857959a2d2069953122e8a1c03b13bf010a29dc4418c643->leave($__internal_41cdb72c39baf0ce1857959a2d2069953122e8a1c03b13bf010a29dc4418c643_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
