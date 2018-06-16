<?php

/* AppBundle:Default/login:login.html.twig */
class __TwigTemplate_ecb9129b7bef2e8bc31b4037dd47e319cf485a4396c8715e3be6beaa388fe290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default/login:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c9c791fe9bd3422df1b77e889938706f7c553553a66d37099bd2c7bf156173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c9c791fe9bd3422df1b77e889938706f7c553553a66d37099bd2c7bf156173->enter($__internal_c4c9c791fe9bd3422df1b77e889938706f7c553553a66d37099bd2c7bf156173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/login:login.html.twig"));

        $__internal_4eeb4584aa6f86995cb3b5d4c7d88dbaddefbf01e785c6bd9ab233d89326e4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eeb4584aa6f86995cb3b5d4c7d88dbaddefbf01e785c6bd9ab233d89326e4fe->enter($__internal_4eeb4584aa6f86995cb3b5d4c7d88dbaddefbf01e785c6bd9ab233d89326e4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c9c791fe9bd3422df1b77e889938706f7c553553a66d37099bd2c7bf156173->leave($__internal_c4c9c791fe9bd3422df1b77e889938706f7c553553a66d37099bd2c7bf156173_prof);

        
        $__internal_4eeb4584aa6f86995cb3b5d4c7d88dbaddefbf01e785c6bd9ab233d89326e4fe->leave($__internal_4eeb4584aa6f86995cb3b5d4c7d88dbaddefbf01e785c6bd9ab233d89326e4fe_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e2f260ab802a684804d55f70aef5030cf60c79dc777620aeb49b7b44e364082e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f260ab802a684804d55f70aef5030cf60c79dc777620aeb49b7b44e364082e->enter($__internal_e2f260ab802a684804d55f70aef5030cf60c79dc777620aeb49b7b44e364082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b72935b376749d7a82f08d6eef3c697338217a92b9025e9e8efef73faaeb7e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72935b376749d7a82f08d6eef3c697338217a92b9025e9e8efef73faaeb7e26->enter($__internal_b72935b376749d7a82f08d6eef3c697338217a92b9025e9e8efef73faaeb7e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    ";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"box box-danger box-solid\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Erreur</h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                ";
            // line 18
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
            </div>
            <!-- /.box-body -->
        </div>
    ";
        }
        // line 23
        echo "
    <div class=\"login-box-body\">
        <h4 class=\"login-box-msg text-blue\">Veuillez vous authentifier!</h4>

        <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

            <div class=\"form-group has-feedback\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Nom d'utilisateur\">
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de passe\">
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> Se souvenir de moi
                        </label>
                    </div>
                </div>
                <input type=\"hidden\" name=\"_target_path\" value=\"/home\" />
                <!-- /.col -->
                <div class=\"col-xs-5\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Se connecter</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class=\"hide row text-center img-responsive\" style=\"margin-bottom: 20px; margin-top: 20px;\">
            <img class=\"\" style=\"width: 30%;height: 30%;\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\">
        </div>

        <a class=\"hide\" href=\"#\">Mot de passe oublié?</a><br>
        <a href=\"#\" class=\" hide text-center\">Créer un compte</a>

    </div>

";
        
        $__internal_b72935b376749d7a82f08d6eef3c697338217a92b9025e9e8efef73faaeb7e26->leave($__internal_b72935b376749d7a82f08d6eef3c697338217a92b9025e9e8efef73faaeb7e26_prof);

        
        $__internal_e2f260ab802a684804d55f70aef5030cf60c79dc777620aeb49b7b44e364082e->leave($__internal_e2f260ab802a684804d55f70aef5030cf60c79dc777620aeb49b7b44e364082e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 55,  87 => 30,  81 => 27,  75 => 23,  67 => 18,  54 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}


{% block content %}

    {% if error %}
        <div class=\"box box-danger box-solid\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Erreur</h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                {{ error }}
            </div>
            <!-- /.box-body -->
        </div>
    {% endif %}

    <div class=\"login-box-body\">
        <h4 class=\"login-box-msg text-blue\">Veuillez vous authentifier!</h4>

        <form action=\"{{ path(\"login\") }}\" method=\"post\">

            <div class=\"form-group has-feedback\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"Nom d'utilisateur\">
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de passe\">
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> Se souvenir de moi
                        </label>
                    </div>
                </div>
                <input type=\"hidden\" name=\"_target_path\" value=\"/home\" />
                <!-- /.col -->
                <div class=\"col-xs-5\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Se connecter</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class=\"hide row text-center img-responsive\" style=\"margin-bottom: 20px; margin-top: 20px;\">
            <img class=\"\" style=\"width: 30%;height: 30%;\" src=\"{{ asset('img/logo1.png') }}\">
        </div>

        <a class=\"hide\" href=\"#\">Mot de passe oublié?</a><br>
        <a href=\"#\" class=\" hide text-center\">Créer un compte</a>

    </div>

{% endblock content %}
", "AppBundle:Default/login:login.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/src/AppBundle/Resources/views/Default/login/login.html.twig");
    }
}
