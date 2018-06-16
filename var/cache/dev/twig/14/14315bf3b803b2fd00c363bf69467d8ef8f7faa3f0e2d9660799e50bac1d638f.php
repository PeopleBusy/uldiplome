<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_433a0e3680e62b94df4dfe5afe81fc00f90e47ec8ca3f3ecc0c08a53cfdb9dcd extends Twig_Template
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
        $__internal_51bd071be017a3b4c66bbf648fa8b6ba47ff0c9a00051a0cc5c5a9a2bb7a1a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bd071be017a3b4c66bbf648fa8b6ba47ff0c9a00051a0cc5c5a9a2bb7a1a04->enter($__internal_51bd071be017a3b4c66bbf648fa8b6ba47ff0c9a00051a0cc5c5a9a2bb7a1a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bd246917d73f1e1ff2e2468528d7535977642f88af008e86d6ac1e1aafff081c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd246917d73f1e1ff2e2468528d7535977642f88af008e86d6ac1e1aafff081c->enter($__internal_bd246917d73f1e1ff2e2468528d7535977642f88af008e86d6ac1e1aafff081c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_51bd071be017a3b4c66bbf648fa8b6ba47ff0c9a00051a0cc5c5a9a2bb7a1a04->leave($__internal_51bd071be017a3b4c66bbf648fa8b6ba47ff0c9a00051a0cc5c5a9a2bb7a1a04_prof);

        
        $__internal_bd246917d73f1e1ff2e2468528d7535977642f88af008e86d6ac1e1aafff081c->leave($__internal_bd246917d73f1e1ff2e2468528d7535977642f88af008e86d6ac1e1aafff081c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
