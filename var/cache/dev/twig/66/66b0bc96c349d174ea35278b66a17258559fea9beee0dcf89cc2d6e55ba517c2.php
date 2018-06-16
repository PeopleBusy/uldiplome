<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_126d6f108d564b9d9b8cdd700afd57f9c002cda8220541c4ceb44537068e5775 extends Twig_Template
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
        $__internal_98296c6133bf1c794368f73504b99f681524823c19459863378e203acc573f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98296c6133bf1c794368f73504b99f681524823c19459863378e203acc573f48->enter($__internal_98296c6133bf1c794368f73504b99f681524823c19459863378e203acc573f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3f54782e1e44b35c6bb7d19837914dc0ac9f67384f8b6b19c5384547dc3fc0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f54782e1e44b35c6bb7d19837914dc0ac9f67384f8b6b19c5384547dc3fc0ef->enter($__internal_3f54782e1e44b35c6bb7d19837914dc0ac9f67384f8b6b19c5384547dc3fc0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_98296c6133bf1c794368f73504b99f681524823c19459863378e203acc573f48->leave($__internal_98296c6133bf1c794368f73504b99f681524823c19459863378e203acc573f48_prof);

        
        $__internal_3f54782e1e44b35c6bb7d19837914dc0ac9f67384f8b6b19c5384547dc3fc0ef->leave($__internal_3f54782e1e44b35c6bb7d19837914dc0ac9f67384f8b6b19c5384547dc3fc0ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
