<?php

/* AppBundle:Default/impression:tout_imprimer.html.twig */
class __TwigTemplate_993c21841bdfb17e036d617f2dfc6d2b0f75e58e71a1b599e9d930b2d3f73953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/impression:tout_imprimer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_287a2ff07e78d8003adb29be850efb4f9f9e32f9c9e019489eeadeccebcc31f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287a2ff07e78d8003adb29be850efb4f9f9e32f9c9e019489eeadeccebcc31f5->enter($__internal_287a2ff07e78d8003adb29be850efb4f9f9e32f9c9e019489eeadeccebcc31f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer.html.twig"));

        $__internal_c9f6d1408e2e1f3590826048a5c76103b7fb41364dcb9159fc989f7b43f5e18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f6d1408e2e1f3590826048a5c76103b7fb41364dcb9159fc989f7b43f5e18f->enter($__internal_c9f6d1408e2e1f3590826048a5c76103b7fb41364dcb9159fc989f7b43f5e18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287a2ff07e78d8003adb29be850efb4f9f9e32f9c9e019489eeadeccebcc31f5->leave($__internal_287a2ff07e78d8003adb29be850efb4f9f9e32f9c9e019489eeadeccebcc31f5_prof);

        
        $__internal_c9f6d1408e2e1f3590826048a5c76103b7fb41364dcb9159fc989f7b43f5e18f->leave($__internal_c9f6d1408e2e1f3590826048a5c76103b7fb41364dcb9159fc989f7b43f5e18f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_875563a2dff6d5d600f3ed1fa2a6054c335d8cec5e1825522335057d3fe9f06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875563a2dff6d5d600f3ed1fa2a6054c335d8cec5e1825522335057d3fe9f06e->enter($__internal_875563a2dff6d5d600f3ed1fa2a6054c335d8cec5e1825522335057d3fe9f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67c94cc54972ca96cf81156146b5ba29dd2eff78c4d869740c5eca1e7c9f11e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c94cc54972ca96cf81156146b5ba29dd2eff78c4d869740c5eca1e7c9f11e8->enter($__internal_67c94cc54972ca96cf81156146b5ba29dd2eff78c4d869740c5eca1e7c9f11e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Impression ";
        
        $__internal_67c94cc54972ca96cf81156146b5ba29dd2eff78c4d869740c5eca1e7c9f11e8->leave($__internal_67c94cc54972ca96cf81156146b5ba29dd2eff78c4d869740c5eca1e7c9f11e8_prof);

        
        $__internal_875563a2dff6d5d600f3ed1fa2a6054c335d8cec5e1825522335057d3fe9f06e->leave($__internal_875563a2dff6d5d600f3ed1fa2a6054c335d8cec5e1825522335057d3fe9f06e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1ec41a9a1ae344335f93e2b3e25bb834186dc88a0c0ff1f58992db11976678e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ec41a9a1ae344335f93e2b3e25bb834186dc88a0c0ff1f58992db11976678e->enter($__internal_c1ec41a9a1ae344335f93e2b3e25bb834186dc88a0c0ff1f58992db11976678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbc1ac762f29f460fa647e1b55fedf4c4b5916fc6125a9e81ba0bdfff27d2e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc1ac762f29f460fa647e1b55fedf4c4b5916fc6125a9e81ba0bdfff27d2e3c->enter($__internal_bbc1ac762f29f460fa647e1b55fedf4c4b5916fc6125a9e81ba0bdfff27d2e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-eye\"></i> Impression</a></li>
            <li class=\"active\">Aperçu</li>
        </ol>

        ";
        // line 19
        if (array_key_exists("success", $context)) {
            // line 20
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 35
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 43
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-eye\"></i>
                   ";
        // line 54
        echo twig_escape_filter($this->env, ($context["libelle"] ?? $this->getContext($context, "libelle")), "html", null, true);
        echo "

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\" id=\"box-container\">

                ";
        // line 67
        if (twig_test_empty(($context["demandes"] ?? $this->getContext($context, "demandes")))) {
            // line 68
            echo "                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                ";
        } else {
            // line 70
            echo "
                    <div class=\"col-md-12\">
                        <button type=\"button\" class=\"btn btn-primary avoid-this\" id=\"btn_print\">
                            <i class=\"fa fa-print\"></i>
                            Imprimer
                        </button>
                    </div>

                    <div id=\"html-2-pdfwrapper\" class=\"col-md-12\">

                        ";
            // line 80
            if ((($context["id"] ?? $this->getContext($context, "id")) == 0)) {
                // line 81
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 82
                    echo "
                                <div class=\"impression\" style=\"font-size: 25px;padding: 110px 70px 10px 85px;\">
                                    ";
                    // line 84
                    if (($this->getAttribute($context["i"], "typeDemande", array()) == "Duplicata")) {
                        // line 85
                        echo "                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important; margin-right: 30px !important;margin-top: 8px !important;font-family: 'Alfa Slab One'\">
                                            ";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                        echo "</p>
                                        <div style=\"margin-top: 72px;\"></div>
                                    ";
                    } else {
                        // line 89
                        echo "                                        <p class=\"text-white\" style='margin-top:50px; margin-bottom: 50px;'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                        echo "</p>
                                        <div style=\"margin-top: 53px;\"></div>
                                    ";
                    }
                    // line 92
                    echo "
                                    <p class=\"pull-right\">
                                        <span style=\"margin-right: 170px!important;font-size: 20px !important;\" class=\"text-bold\">";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                    echo " </span>
                                    </p>

                                    <p style=\"padding-bottom: 60px !important;\"></p>

                                    <p class=\"demande\" data-id=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                    echo "\">
                                        <span class=\"text-bold\" style=\"margin-left:170px!important;font-size: 35px !important;font-family: 'Italianno';\">
                                            ";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                    echo "&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                    echo "</span>
                                    </p>

                                    <p style=\"padding-bottom: 43px !important;\"></p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:50px!important;\">";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                    echo "</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:7px!important;\">";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                    echo "</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:11px!important;\">";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                    echo " </span>
                                    </p>

                                    <p class=\"pull-right\" style=\"font-size: 13px !important; margin-right: 100px!important;margin-top:45px!important;\">";
                    // line 118
                    echo twig_escape_filter($this->env, ($context["current_date"] ?? $this->getContext($context, "current_date")), "html", null, true);
                    echo "</p>
                                    <p style=\"margin-top: 150px !important;\">
                                        <span style=\"margin-left: 40px;font-size: 15px !important;text-decoration: underline;margin-right: 350px !important;\">
                                        ";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurAcademique"] ?? $this->getContext($context, "directeurAcademique")), "valeur", array()), "html", null, true);
                    echo "
                                        </span>
                                        <span class=\"\" style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">
                                            ";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurGenerale"] ?? $this->getContext($context, "directeurGenerale")), "valeur", array()), "html", null, true);
                    echo " </span>
                                    </p>
                                </div>


                                <div style=\"page-break-after:always\"></div>


                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "
                            ";
            } else {
                // line 135
                echo "
                                <div class=\"impression\" style=\"font-size: 25px;padding: 110px 70px 10px 85px;\">
                                    ";
                // line 137
                if (($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()) == "Duplicata")) {
                    // line 138
                    echo "                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important; margin-right: 30px !important;margin-top: 8px !important;font-family: 'Alfa Slab One'\">
                                            ";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()), "html", null, true);
                    echo "</p>
                                        <div style=\"margin-top: 72px;\"></div>
                                    ";
                } else {
                    // line 142
                    echo "                                        <p class=\"text-white\" style='margin-top:50px; margin-bottom: 50px;'>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()), "html", null, true);
                    echo "</p>
                                        <div style=\"margin-top: 53px;\"></div>
                                    ";
                }
                // line 145
                echo "
                                    <p class=\"pull-right\">
                                        <span style=\"margin-right: 170px!important;font-size: 20px !important;\" class=\"text-bold\">";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo " </span>
                                    </p>

                                    <p style=\"padding-bottom: 60px !important;\"></p>

                                    <p class=\"demande\" data-id=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "id", array()), "html", null, true);
                echo "\">
                                        <span class=\"text-bold\" style=\"margin-left:170px!important;font-size: 35px !important;font-family: 'Italianno';\">
                                            ";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "nom", array()), "html", null, true);
                echo "&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span>
                                    </p>

                                    <p style=\"padding-bottom: 43px !important;\"></p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:50px!important;\">";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:7px!important;\">";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:11px!important;\">";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "mention", array()), "html", null, true);
                echo " </span>
                                    </p>

                                    <p class=\"pull-right\" style=\"font-size: 13px !important; margin-right: 100px!important;margin-top:45px!important;\">";
                // line 171
                echo twig_escape_filter($this->env, ($context["current_date"] ?? $this->getContext($context, "current_date")), "html", null, true);
                echo "</p>
                                    <p style=\"margin-top: 150px !important;\">
                                        <span style=\"margin-left: 40px;font-size: 15px !important;text-decoration: underline;margin-right: 350px !important;\">
                                        ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurAcademique"] ?? $this->getContext($context, "directeurAcademique")), "valeur", array()), "html", null, true);
                echo "
                                        </span>
                                        <span class=\"\" style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">
                                            ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurGenerale"] ?? $this->getContext($context, "directeurGenerale")), "valeur", array()), "html", null, true);
                echo " </span>
                                    </p>
                                </div>


                        ";
            }
            // line 183
            echo "
                    </div>

                ";
        }
        // line 187
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 193
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_bbc1ac762f29f460fa647e1b55fedf4c4b5916fc6125a9e81ba0bdfff27d2e3c->leave($__internal_bbc1ac762f29f460fa647e1b55fedf4c4b5916fc6125a9e81ba0bdfff27d2e3c_prof);

        
        $__internal_c1ec41a9a1ae344335f93e2b3e25bb834186dc88a0c0ff1f58992db11976678e->leave($__internal_c1ec41a9a1ae344335f93e2b3e25bb834186dc88a0c0ff1f58992db11976678e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/impression:tout_imprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 193,  363 => 187,  357 => 183,  348 => 177,  342 => 174,  336 => 171,  330 => 168,  323 => 164,  316 => 160,  305 => 154,  300 => 152,  292 => 147,  288 => 145,  281 => 142,  275 => 139,  272 => 138,  270 => 137,  266 => 135,  262 => 133,  247 => 124,  241 => 121,  235 => 118,  229 => 115,  222 => 111,  215 => 107,  204 => 101,  199 => 99,  191 => 94,  187 => 92,  180 => 89,  174 => 86,  171 => 85,  169 => 84,  165 => 82,  160 => 81,  158 => 80,  146 => 70,  142 => 68,  140 => 67,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}


{% block title %} Impression {% endblock %}


{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-eye\"></i> Impression</a></li>
            <li class=\"active\">Aperçu</li>
        </ol>

        {% if success is defined  %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ success }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-eye\"></i>
                   {{ libelle }}

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\" id=\"box-container\">

                {% if demandes is empty  %}
                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                {% else %}

                    <div class=\"col-md-12\">
                        <button type=\"button\" class=\"btn btn-primary avoid-this\" id=\"btn_print\">
                            <i class=\"fa fa-print\"></i>
                            Imprimer
                        </button>
                    </div>

                    <div id=\"html-2-pdfwrapper\" class=\"col-md-12\">

                        {% if id == 0 %}
                            {% for i in demandes %}

                                <div class=\"impression\" style=\"font-size: 25px;padding: 110px 70px 10px 85px;\">
                                    {% if i.typeDemande == 'Duplicata' %}
                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important; margin-right: 30px !important;margin-top: 8px !important;font-family: 'Alfa Slab One'\">
                                            {{ i.typeDemande }}</p>
                                        <div style=\"margin-top: 72px;\"></div>
                                    {% else %}
                                        <p class=\"text-white\" style='margin-top:50px; margin-bottom: 50px;'>{{ i.typeDemande }}</p>
                                        <div style=\"margin-top: 53px;\"></div>
                                    {% endif %}

                                    <p class=\"pull-right\">
                                        <span style=\"margin-right: 170px!important;font-size: 20px !important;\" class=\"text-bold\">{{ i.etudiant.dateExamen }} </span>
                                    </p>

                                    <p style=\"padding-bottom: 60px !important;\"></p>

                                    <p class=\"demande\" data-id=\"{{ i.id }}\">
                                        <span class=\"text-bold\" style=\"margin-left:170px!important;font-size: 35px !important;font-family: 'Italianno';\">
                                            {{ i.etudiant.nom }}&nbsp;&nbsp;{{ i.etudiant.prenom }}</span>
                                    </p>

                                    <p style=\"padding-bottom: 43px !important;\"></p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:50px!important;\">{{ i.etudiant.optionEtud }}</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:7px!important;\">{{ i.etudiant.specialite }}</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:11px!important;\">{{ i.etudiant.mention }} </span>
                                    </p>

                                    <p class=\"pull-right\" style=\"font-size: 13px !important; margin-right: 100px!important;margin-top:45px!important;\">{{ current_date }}</p>
                                    <p style=\"margin-top: 150px !important;\">
                                        <span style=\"margin-left: 40px;font-size: 15px !important;text-decoration: underline;margin-right: 350px !important;\">
                                        {{ directeurAcademique.valeur }}
                                        </span>
                                        <span class=\"\" style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">
                                            {{ directeurGenerale.valeur }} </span>
                                    </p>
                                </div>


                                <div style=\"page-break-after:always\"></div>


                            {% endfor %}

                            {% else %}

                                <div class=\"impression\" style=\"font-size: 25px;padding: 110px 70px 10px 85px;\">
                                    {% if demandes.typeDemande == 'Duplicata' %}
                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important; margin-right: 30px !important;margin-top: 8px !important;font-family: 'Alfa Slab One'\">
                                            {{ demandes.typeDemande }}</p>
                                        <div style=\"margin-top: 72px;\"></div>
                                    {% else %}
                                        <p class=\"text-white\" style='margin-top:50px; margin-bottom: 50px;'>{{ demandes.typeDemande }}</p>
                                        <div style=\"margin-top: 53px;\"></div>
                                    {% endif %}

                                    <p class=\"pull-right\">
                                        <span style=\"margin-right: 170px!important;font-size: 20px !important;\" class=\"text-bold\">{{ demandes.etudiant.dateExamen }} </span>
                                    </p>

                                    <p style=\"padding-bottom: 60px !important;\"></p>

                                    <p class=\"demande\" data-id=\"{{ demandes.id }}\">
                                        <span class=\"text-bold\" style=\"margin-left:170px!important;font-size: 35px !important;font-family: 'Italianno';\">
                                            {{ demandes.etudiant.nom }}&nbsp;&nbsp;{{ demandes.etudiant.prenom }}</span>
                                    </p>

                                    <p style=\"padding-bottom: 43px !important;\"></p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:50px!important;\">{{ demandes.etudiant.optionEtud }}</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:7px!important;\">{{ demandes.etudiant.specialite }}</span>
                                    </p>

                                    <p class=\"\">
                                        <span class=\"text-bold\" style=\"margin-left:150px!important;margin-top:11px!important;\">{{ demandes.etudiant.mention }} </span>
                                    </p>

                                    <p class=\"pull-right\" style=\"font-size: 13px !important; margin-right: 100px!important;margin-top:45px!important;\">{{ current_date }}</p>
                                    <p style=\"margin-top: 150px !important;\">
                                        <span style=\"margin-left: 40px;font-size: 15px !important;text-decoration: underline;margin-right: 350px !important;\">
                                        {{ directeurAcademique.valeur }}
                                        </span>
                                        <span class=\"\" style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">
                                            {{ directeurGenerale.valeur }} </span>
                                    </p>
                                </div>


                        {% endif %}

                    </div>

                {% endif %}


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AppBundle:Default/impression:tout_imprimer.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/src/AppBundle/Resources/views/Default/impression/tout_imprimer.html.twig");
    }
}
