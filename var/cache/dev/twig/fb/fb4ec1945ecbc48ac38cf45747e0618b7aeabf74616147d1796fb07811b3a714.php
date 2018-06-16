<?php

/* AppBundle:Default/etudiant:list_a_imprimer.html.twig */
class __TwigTemplate_7a09f195b3fb9066b24af2721556b7673facdae45b887bd47af062618a122648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/etudiant:list_a_imprimer.html.twig", 1);
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
        $__internal_28ce3f5fba954b29fb31903ded92734190ee4986ad99fb325f7f8b85d65eca04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ce3f5fba954b29fb31903ded92734190ee4986ad99fb325f7f8b85d65eca04->enter($__internal_28ce3f5fba954b29fb31903ded92734190ee4986ad99fb325f7f8b85d65eca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:list_a_imprimer.html.twig"));

        $__internal_5d3e35c5731bbb0dd75de88a5ae7bf95da2001ed3d90e2e410a733590ffb2472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3e35c5731bbb0dd75de88a5ae7bf95da2001ed3d90e2e410a733590ffb2472->enter($__internal_5d3e35c5731bbb0dd75de88a5ae7bf95da2001ed3d90e2e410a733590ffb2472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:list_a_imprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ce3f5fba954b29fb31903ded92734190ee4986ad99fb325f7f8b85d65eca04->leave($__internal_28ce3f5fba954b29fb31903ded92734190ee4986ad99fb325f7f8b85d65eca04_prof);

        
        $__internal_5d3e35c5731bbb0dd75de88a5ae7bf95da2001ed3d90e2e410a733590ffb2472->leave($__internal_5d3e35c5731bbb0dd75de88a5ae7bf95da2001ed3d90e2e410a733590ffb2472_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_01f66c1282a8fc196532efd9531340230476c8f91138ef807820b8bc12cf640e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f66c1282a8fc196532efd9531340230476c8f91138ef807820b8bc12cf640e->enter($__internal_01f66c1282a8fc196532efd9531340230476c8f91138ef807820b8bc12cf640e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_349a6c2423fd50d66d1b811c9ce551baed5177935e92324494fbd0305c193499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349a6c2423fd50d66d1b811c9ce551baed5177935e92324494fbd0305c193499->enter($__internal_349a6c2423fd50d66d1b811c9ce551baed5177935e92324494fbd0305c193499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Demandes ";
        
        $__internal_349a6c2423fd50d66d1b811c9ce551baed5177935e92324494fbd0305c193499->leave($__internal_349a6c2423fd50d66d1b811c9ce551baed5177935e92324494fbd0305c193499_prof);

        
        $__internal_01f66c1282a8fc196532efd9531340230476c8f91138ef807820b8bc12cf640e->leave($__internal_01f66c1282a8fc196532efd9531340230476c8f91138ef807820b8bc12cf640e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ac5c9d3db46e6292e926c4a37a1994a4e0245fc6a57c42afab90253503e3f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac5c9d3db46e6292e926c4a37a1994a4e0245fc6a57c42afab90253503e3f87->enter($__internal_6ac5c9d3db46e6292e926c4a37a1994a4e0245fc6a57c42afab90253503e3f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_509aafd7108495bc0bbb4e4c995a4e3a4ec4e061596bf58ba4071f451d1546e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509aafd7108495bc0bbb4e4c995a4e3a4ec4e061596bf58ba4071f451d1546e4->enter($__internal_509aafd7108495bc0bbb4e4c995a4e3a4ec4e061596bf58ba4071f451d1546e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-print\"></i> Demandes à imprimer</a></li>
            <li class=\"active\">Liste</li>
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
                    <i class=\"fa fa-print\"></i>
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
            <div class=\"box-body\">
                <div class=\"panel-group hide\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    <span class=\"\">
                                        <i class=\"fa fa-filter\"></i>
                                        Filtres
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                <form action=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_demande_filter", array("formId" => 2));
        echo "\">
                                    <div class=\"col-md-2\">
                                        <label>Matricule:</label>
                                        <input type=\"text\" name=\"matricule\" required=\"true\" placeholder=\"Saisir un matricule\" class=\"form-control pull-right\" id=\"matricule\">
                                    </div>
                                    <div class=\"form-group col-md-1\">
                                        <button type=\"submit\" class=\"btn btn-success marTop25px\"><i class=\"fa fa-filter\"></i> Filtrer</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 95
        if (twig_test_empty(($context["demandes"] ?? $this->getContext($context, "demandes")))) {
            // line 96
            echo "                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                ";
        } else {
            // line 98
            echo "
                    <div class=\"col-md-12\">
                        <a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_tout_imprimer", array("id" => 0));
            echo "\" class=\"btn btn-primary\">
                            <i class=\"fa fa-print\"></i>
                            Tout imprimer
                        </a>
                    </div>

                    <div class=\"col-md-12 table-responsive marTop25px\">
                        <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"hide\"><input type=\"checkbox\"/></th>
                                <th class=\"hide\">N° Enreg.</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Date examen</th>
                                <th>Option</th>
                                <th>Spécialité</th>
                                <th>Mention</th>
                                <th>Type</th>
                                <th>Etat</th>
                                <th class=\"center\">Action(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 125
                echo "                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"nom\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"prenom\">";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"datenaiss\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"diplome\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"mention\">";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "etatDemande", array()), "html", null, true);
                echo "</span></td>

                                    <td class=\"center\">
                                        <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_tout_imprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-print\"></i> Imprimer</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "
                            </tbody>
                        </table>
                    </div>

                ";
        }
        // line 148
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 154
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_509aafd7108495bc0bbb4e4c995a4e3a4ec4e061596bf58ba4071f451d1546e4->leave($__internal_509aafd7108495bc0bbb4e4c995a4e3a4ec4e061596bf58ba4071f451d1546e4_prof);

        
        $__internal_6ac5c9d3db46e6292e926c4a37a1994a4e0245fc6a57c42afab90253503e3f87->leave($__internal_6ac5c9d3db46e6292e926c4a37a1994a4e0245fc6a57c42afab90253503e3f87_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/etudiant:list_a_imprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 154,  272 => 148,  264 => 142,  254 => 138,  248 => 135,  244 => 134,  240 => 133,  236 => 132,  232 => 131,  228 => 130,  224 => 129,  220 => 128,  216 => 127,  212 => 125,  208 => 124,  181 => 100,  177 => 98,  173 => 96,  171 => 95,  153 => 80,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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


{% block title %} Demandes {% endblock %}


{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-print\"></i> Demandes à imprimer</a></li>
            <li class=\"active\">Liste</li>
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
                    <i class=\"fa fa-print\"></i>
                   {{ libelle }}

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"panel-group hide\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    <span class=\"\">
                                        <i class=\"fa fa-filter\"></i>
                                        Filtres
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                <form action=\"{{ path('liste_demande_filter', {'formId': 2}) }}\">
                                    <div class=\"col-md-2\">
                                        <label>Matricule:</label>
                                        <input type=\"text\" name=\"matricule\" required=\"true\" placeholder=\"Saisir un matricule\" class=\"form-control pull-right\" id=\"matricule\">
                                    </div>
                                    <div class=\"form-group col-md-1\">
                                        <button type=\"submit\" class=\"btn btn-success marTop25px\"><i class=\"fa fa-filter\"></i> Filtrer</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                {% if demandes is empty  %}
                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                {% else %}

                    <div class=\"col-md-12\">
                        <a href=\"{{ path('demande_tout_imprimer', {'id' : 0}) }}\" class=\"btn btn-primary\">
                            <i class=\"fa fa-print\"></i>
                            Tout imprimer
                        </a>
                    </div>

                    <div class=\"col-md-12 table-responsive marTop25px\">
                        <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"hide\"><input type=\"checkbox\"/></th>
                                <th class=\"hide\">N° Enreg.</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Date examen</th>
                                <th>Option</th>
                                <th>Spécialité</th>
                                <th>Mention</th>
                                <th>Type</th>
                                <th>Etat</th>
                                <th class=\"center\">Action(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for i in demandes %}
                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">{{ i.id }}</span></td>
                                    <td><span class=\"nom\">{{ i.etudiant.nom }}</span></td>
                                    <td><span class=\"prenom\">{{ i.etudiant.prenom }}</span></td>
                                    <td><span class=\"datenaiss\">{{ i.etudiant.dateExamen }}</span></td>
                                    <td><span class=\"diplome\">{{ i.etudiant.optionEtud }}</span></td>
                                    <td><span class=\"option\">{{ i.etudiant.specialite }}</span></td>
                                    <td><span class=\"mention\">{{ i.etudiant.mention }}</span></td>
                                    <td><span class=\"\">{{ i.typeDemande }}</span></td>
                                    <td><span class=\"\">{{ i.etatDemande }}</span></td>

                                    <td class=\"center\">
                                        <a href=\"{{ path('demande_tout_imprimer', {'id' : i.id}) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-print\"></i> Imprimer</a>
                                    </td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
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

{% endblock %}", "AppBundle:Default/etudiant:list_a_imprimer.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/src/AppBundle/Resources/views/Default/etudiant/list_a_imprimer.html.twig");
    }
}
