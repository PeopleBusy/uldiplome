<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_03ab82daf6987a52864eb3527cd2eb3cfbaaae570d0afc2e608858f68e62eb10 extends Twig_Template
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
        $__internal_32c2e0c266de4c2f92da46b4fb716473a8e9b30c6eba8bcb8f470768ed2354de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c2e0c266de4c2f92da46b4fb716473a8e9b30c6eba8bcb8f470768ed2354de->enter($__internal_32c2e0c266de4c2f92da46b4fb716473a8e9b30c6eba8bcb8f470768ed2354de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_001dae721609c25e34c2705cd13e4b128d39b7a72757cb6844911590a672682a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001dae721609c25e34c2705cd13e4b128d39b7a72757cb6844911590a672682a->enter($__internal_001dae721609c25e34c2705cd13e4b128d39b7a72757cb6844911590a672682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_32c2e0c266de4c2f92da46b4fb716473a8e9b30c6eba8bcb8f470768ed2354de->leave($__internal_32c2e0c266de4c2f92da46b4fb716473a8e9b30c6eba8bcb8f470768ed2354de_prof);

        
        $__internal_001dae721609c25e34c2705cd13e4b128d39b7a72757cb6844911590a672682a->leave($__internal_001dae721609c25e34c2705cd13e4b128d39b7a72757cb6844911590a672682a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
