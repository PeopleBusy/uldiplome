<?php

/* AppBundle:Default/configuration:list.html.twig */
class __TwigTemplate_72351afe5535e82380cb326e43ce40dbb547f0776a73cd1b415ff4080a0d4150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/configuration:list.html.twig", 1);
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
        $__internal_7ecd82162a19adc73f7179a9169c5d5f83397b6f8fa6044db67895ddee9dffcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecd82162a19adc73f7179a9169c5d5f83397b6f8fa6044db67895ddee9dffcb->enter($__internal_7ecd82162a19adc73f7179a9169c5d5f83397b6f8fa6044db67895ddee9dffcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/configuration:list.html.twig"));

        $__internal_0567a18288741e317bcde7840fb3cec5c4b37c0244fce384fdc90f40e93a08bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0567a18288741e317bcde7840fb3cec5c4b37c0244fce384fdc90f40e93a08bb->enter($__internal_0567a18288741e317bcde7840fb3cec5c4b37c0244fce384fdc90f40e93a08bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/configuration:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ecd82162a19adc73f7179a9169c5d5f83397b6f8fa6044db67895ddee9dffcb->leave($__internal_7ecd82162a19adc73f7179a9169c5d5f83397b6f8fa6044db67895ddee9dffcb_prof);

        
        $__internal_0567a18288741e317bcde7840fb3cec5c4b37c0244fce384fdc90f40e93a08bb->leave($__internal_0567a18288741e317bcde7840fb3cec5c4b37c0244fce384fdc90f40e93a08bb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c40b18a80411693cefe3d87b8956ab6fa97bdf88843fabd755ca7c582052f30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40b18a80411693cefe3d87b8956ab6fa97bdf88843fabd755ca7c582052f30e->enter($__internal_c40b18a80411693cefe3d87b8956ab6fa97bdf88843fabd755ca7c582052f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64732ff4221a3ceeb55253204bb74e85c766e4ef42a3ce1422bc6d2e75931ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64732ff4221a3ceeb55253204bb74e85c766e4ef42a3ce1422bc6d2e75931ecc->enter($__internal_64732ff4221a3ceeb55253204bb74e85c766e4ef42a3ce1422bc6d2e75931ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Demandes ";
        
        $__internal_64732ff4221a3ceeb55253204bb74e85c766e4ef42a3ce1422bc6d2e75931ecc->leave($__internal_64732ff4221a3ceeb55253204bb74e85c766e4ef42a3ce1422bc6d2e75931ecc_prof);

        
        $__internal_c40b18a80411693cefe3d87b8956ab6fa97bdf88843fabd755ca7c582052f30e->leave($__internal_c40b18a80411693cefe3d87b8956ab6fa97bdf88843fabd755ca7c582052f30e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2db06bda763d9c90fec2c52e881dde06003891702e02df1e6c6eba47824aaf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2db06bda763d9c90fec2c52e881dde06003891702e02df1e6c6eba47824aaf3->enter($__internal_f2db06bda763d9c90fec2c52e881dde06003891702e02df1e6c6eba47824aaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32e7becff7053cf61b1680636250cb19a11b9fb135612264a321f250eac636b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e7becff7053cf61b1680636250cb19a11b9fb135612264a321f250eac636b5->enter($__internal_32e7becff7053cf61b1680636250cb19a11b9fb135612264a321f250eac636b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
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
                                <form>
                                    <div class=\"col-md-2\">
                                        <div>
                                            <label for=\"annee\" class=\"required\">Année:</label>
                                            <select id=\"annee\" name=\"annee\" required=\"required\" class=\"form-control\">
                                                <option value=\"2018\">2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-2\">
                                        <label>Matricule:</label>
                                        <input type=\"text\" name=\"matricule\" placeholder=\"Saisir un matricule\" class=\"form-control pull-right\" id=\"matricule\">
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
        // line 103
        if (twig_test_empty(($context["demandes"] ?? $this->getContext($context, "demandes")))) {
            // line 104
            echo "                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                ";
        } else {
            // line 106
            echo "
                    <div class=\"col-md-12 table-responsive\">
                        <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"hide\"><input type=\"checkbox\"/></th>
                                <th class=\"hide\">N° Enreg.</th>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Date naiss.</th>
                                <th>Lieu naiss.</th>
                                <th>Diplôme</th>
                                <th>Option</th>
                                <th>Type</th>
                                <th>Etat</th>
                                <th class=\"center\">Action(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 127
                echo "                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"badge bg-defaul matricule\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"nom\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"prenom\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"datenaiss\">";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"lieunaiss\">";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "lieunaissance", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"diplome\">";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "etatDemande", array()), "html", null, true);
                echo "</span></td>

                                    <td class=\"center\">
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-pencil\"></i> Modifier</a>

                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "
                            </tbody>
                        </table>
                    </div>

                ";
        }
        // line 152
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 158
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_32e7becff7053cf61b1680636250cb19a11b9fb135612264a321f250eac636b5->leave($__internal_32e7becff7053cf61b1680636250cb19a11b9fb135612264a321f250eac636b5_prof);

        
        $__internal_f2db06bda763d9c90fec2c52e881dde06003891702e02df1e6c6eba47824aaf3->leave($__internal_f2db06bda763d9c90fec2c52e881dde06003891702e02df1e6c6eba47824aaf3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/configuration:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 158,  270 => 152,  262 => 146,  248 => 138,  244 => 137,  240 => 136,  236 => 135,  232 => 134,  228 => 133,  224 => 132,  220 => 131,  216 => 130,  212 => 129,  208 => 127,  204 => 126,  182 => 106,  178 => 104,  176 => 103,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
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
                                <form>
                                    <div class=\"col-md-2\">
                                        <div>
                                            <label for=\"annee\" class=\"required\">Année:</label>
                                            <select id=\"annee\" name=\"annee\" required=\"required\" class=\"form-control\">
                                                <option value=\"2018\">2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-2\">
                                        <label>Matricule:</label>
                                        <input type=\"text\" name=\"matricule\" placeholder=\"Saisir un matricule\" class=\"form-control pull-right\" id=\"matricule\">
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
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Date naiss.</th>
                                <th>Lieu naiss.</th>
                                <th>Diplôme</th>
                                <th>Option</th>
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
                                    <td><span class=\"badge bg-defaul matricule\">{{ i.etudiant.mention }}</span></td>
                                    <td><span class=\"nom\">{{ i.etudiant.nom }}</span></td>
                                    <td><span class=\"prenom\">{{ i.etudiant.prenom }}</span></td>
                                    <td><span class=\"datenaiss\">{{ i.etudiant.dateExamen }}</span></td>
                                    <td><span class=\"lieunaiss\">{{ i.etudiant.lieunaissance }}</span></td>
                                    <td><span class=\"diplome\">{{ i.etudiant.specialite }}</span></td>
                                    <td><span class=\"option\">{{ i.etudiant.optionEtud }}</span></td>
                                    <td><span class=\"\">{{ i.typeDemande }}</span></td>
                                    <td><span class=\"\">{{ i.etatDemande }}</span></td>

                                    <td class=\"center\">
                                        <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-pencil\"></i> Modifier</a>

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

{% endblock %}", "AppBundle:Default/configuration:list.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/src/AppBundle/Resources/views/Default/configuration/list.html.twig");
    }
}
