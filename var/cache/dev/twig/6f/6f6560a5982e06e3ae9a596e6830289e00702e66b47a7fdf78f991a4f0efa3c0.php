<?php

/* AppBundle:Default/etudiant:list.html.twig */
class __TwigTemplate_f31bc6b2dd5f2bf2c93555b8721a733b33eb790cd306b5d53245a6e8c405c0c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/etudiant:list.html.twig", 1);
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
        $__internal_6112314cf09db58b790f21d36b72ae25f4c87beb5d4c042f431dfea9bd64cbfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6112314cf09db58b790f21d36b72ae25f4c87beb5d4c042f431dfea9bd64cbfa->enter($__internal_6112314cf09db58b790f21d36b72ae25f4c87beb5d4c042f431dfea9bd64cbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:list.html.twig"));

        $__internal_caaffd143ed03d790f16f408b9d86b979e58db98f1cd7a26c05306c9652e6dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaffd143ed03d790f16f408b9d86b979e58db98f1cd7a26c05306c9652e6dc2->enter($__internal_caaffd143ed03d790f16f408b9d86b979e58db98f1cd7a26c05306c9652e6dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6112314cf09db58b790f21d36b72ae25f4c87beb5d4c042f431dfea9bd64cbfa->leave($__internal_6112314cf09db58b790f21d36b72ae25f4c87beb5d4c042f431dfea9bd64cbfa_prof);

        
        $__internal_caaffd143ed03d790f16f408b9d86b979e58db98f1cd7a26c05306c9652e6dc2->leave($__internal_caaffd143ed03d790f16f408b9d86b979e58db98f1cd7a26c05306c9652e6dc2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b294cd85eb3e9348cdc20c0327f49348071e309dc8cec1cc52b5a73b3b41ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b294cd85eb3e9348cdc20c0327f49348071e309dc8cec1cc52b5a73b3b41ba8->enter($__internal_3b294cd85eb3e9348cdc20c0327f49348071e309dc8cec1cc52b5a73b3b41ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d2e4e5ffe02a128b69dfa9e20d4e25a3f7b0e7c09809f5d676408d555757bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2e4e5ffe02a128b69dfa9e20d4e25a3f7b0e7c09809f5d676408d555757bff->enter($__internal_3d2e4e5ffe02a128b69dfa9e20d4e25a3f7b0e7c09809f5d676408d555757bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Demandes ";
        
        $__internal_3d2e4e5ffe02a128b69dfa9e20d4e25a3f7b0e7c09809f5d676408d555757bff->leave($__internal_3d2e4e5ffe02a128b69dfa9e20d4e25a3f7b0e7c09809f5d676408d555757bff_prof);

        
        $__internal_3b294cd85eb3e9348cdc20c0327f49348071e309dc8cec1cc52b5a73b3b41ba8->leave($__internal_3b294cd85eb3e9348cdc20c0327f49348071e309dc8cec1cc52b5a73b3b41ba8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f39d1583a553628d469c51723097365967283ae64b7e7e35b116b8e70f1c22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f39d1583a553628d469c51723097365967283ae64b7e7e35b116b8e70f1c22f->enter($__internal_9f39d1583a553628d469c51723097365967283ae64b7e7e35b116b8e70f1c22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60b2bfd18010547daab7c4722a9aea5343e3446846905508c1a1c9be76cdd67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b2bfd18010547daab7c4722a9aea5343e3446846905508c1a1c9be76cdd67b->enter($__internal_60b2bfd18010547daab7c4722a9aea5343e3446846905508c1a1c9be76cdd67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-list-ol\"></i> Demandes</a></li>
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
                    <i class=\"fa fa-list-ol\"></i>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_demande_filter", array("formId" => 1));
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
                    <div class=\"col-md-12 table-responsive\">
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
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 118
                echo "                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"nom\">";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"prenom\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"datenaiss\">";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"diplome\">";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"mention\">";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "etatDemande", array()), "html", null, true);
                echo "</span></td>

                                    <td class=\"center\">
                                        <a href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_edit", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-pencil\"></i> Modifier</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "
                            </tbody>
                        </table>
                    </div>

                ";
        }
        // line 141
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 147
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_60b2bfd18010547daab7c4722a9aea5343e3446846905508c1a1c9be76cdd67b->leave($__internal_60b2bfd18010547daab7c4722a9aea5343e3446846905508c1a1c9be76cdd67b_prof);

        
        $__internal_9f39d1583a553628d469c51723097365967283ae64b7e7e35b116b8e70f1c22f->leave($__internal_9f39d1583a553628d469c51723097365967283ae64b7e7e35b116b8e70f1c22f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/etudiant:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 147,  262 => 141,  254 => 135,  244 => 131,  238 => 128,  234 => 127,  230 => 126,  226 => 125,  222 => 124,  218 => 123,  214 => 122,  210 => 121,  206 => 120,  202 => 118,  198 => 117,  177 => 98,  173 => 96,  171 => 95,  153 => 80,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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
            <li><a href=\"#\"><i class=\"fa fa-list-ol\"></i> Demandes</a></li>
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
                    <i class=\"fa fa-list-ol\"></i>
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
                                <form action=\"{{ path('liste_demande_filter', {'formId': 1}) }}\">
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

                    <div class=\"col-md-12 table-responsive\">
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
                                        <a href=\"{{ path('demande_edit', {'id': i.id}) }}\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-pencil\"></i> Modifier</a>
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

{% endblock %}", "AppBundle:Default/etudiant:list.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/src/AppBundle/Resources/views/Default/etudiant/list.html.twig");
    }
}
