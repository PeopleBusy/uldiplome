<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bcacbd06ab1a4d61c3f944a0aa04ff4574e47e46a50102e1229b69e4d6ff4177 extends Twig_Template
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
        $__internal_c6db519bb9e94d1fcbcb8c2ab55514918e8c5c9c963a1df59c239e436fbd6e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6db519bb9e94d1fcbcb8c2ab55514918e8c5c9c963a1df59c239e436fbd6e60->enter($__internal_c6db519bb9e94d1fcbcb8c2ab55514918e8c5c9c963a1df59c239e436fbd6e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8c3fa18734b40fb66196141411a937caa144956c4bc87ce935c603d70ab38f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3fa18734b40fb66196141411a937caa144956c4bc87ce935c603d70ab38f75->enter($__internal_8c3fa18734b40fb66196141411a937caa144956c4bc87ce935c603d70ab38f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c6db519bb9e94d1fcbcb8c2ab55514918e8c5c9c963a1df59c239e436fbd6e60->leave($__internal_c6db519bb9e94d1fcbcb8c2ab55514918e8c5c9c963a1df59c239e436fbd6e60_prof);

        
        $__internal_8c3fa18734b40fb66196141411a937caa144956c4bc87ce935c603d70ab38f75->leave($__internal_8c3fa18734b40fb66196141411a937caa144956c4bc87ce935c603d70ab38f75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
