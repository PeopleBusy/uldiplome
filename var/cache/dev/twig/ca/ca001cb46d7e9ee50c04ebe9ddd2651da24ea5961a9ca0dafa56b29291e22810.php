<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8340980ad37ed9874611702bd023534db5bdc7d5a1543540a08c576126476d1d extends Twig_Template
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
        $__internal_bb738eb62affc8aa84d322ee1f9ac23c9ae3ad8d424ee9bef05f87a8d991b766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb738eb62affc8aa84d322ee1f9ac23c9ae3ad8d424ee9bef05f87a8d991b766->enter($__internal_bb738eb62affc8aa84d322ee1f9ac23c9ae3ad8d424ee9bef05f87a8d991b766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2a930cd77949351487a270624cfdebb0c84ce4dbec5d0cb60bb104d1f4008221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a930cd77949351487a270624cfdebb0c84ce4dbec5d0cb60bb104d1f4008221->enter($__internal_2a930cd77949351487a270624cfdebb0c84ce4dbec5d0cb60bb104d1f4008221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bb738eb62affc8aa84d322ee1f9ac23c9ae3ad8d424ee9bef05f87a8d991b766->leave($__internal_bb738eb62affc8aa84d322ee1f9ac23c9ae3ad8d424ee9bef05f87a8d991b766_prof);

        
        $__internal_2a930cd77949351487a270624cfdebb0c84ce4dbec5d0cb60bb104d1f4008221->leave($__internal_2a930cd77949351487a270624cfdebb0c84ce4dbec5d0cb60bb104d1f4008221_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
