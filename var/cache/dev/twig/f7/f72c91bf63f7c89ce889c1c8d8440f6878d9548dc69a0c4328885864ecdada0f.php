<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_85d263fda3536fa210be214f32813fa44d4a758fe5b40f3a43c96bb04cdc6be6 extends Twig_Template
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
        $__internal_0ff045e0ca0be0fbcb16a670bd7b6023148355a369f23fd2e13f593a93ad2dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff045e0ca0be0fbcb16a670bd7b6023148355a369f23fd2e13f593a93ad2dc7->enter($__internal_0ff045e0ca0be0fbcb16a670bd7b6023148355a369f23fd2e13f593a93ad2dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_83b16948b1fbc17c97c635342925a7b78a0aa96a6225bebbd758fc8417524007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b16948b1fbc17c97c635342925a7b78a0aa96a6225bebbd758fc8417524007->enter($__internal_83b16948b1fbc17c97c635342925a7b78a0aa96a6225bebbd758fc8417524007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0ff045e0ca0be0fbcb16a670bd7b6023148355a369f23fd2e13f593a93ad2dc7->leave($__internal_0ff045e0ca0be0fbcb16a670bd7b6023148355a369f23fd2e13f593a93ad2dc7_prof);

        
        $__internal_83b16948b1fbc17c97c635342925a7b78a0aa96a6225bebbd758fc8417524007->leave($__internal_83b16948b1fbc17c97c635342925a7b78a0aa96a6225bebbd758fc8417524007_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/Rachid/SymfonyProjects/uldiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
