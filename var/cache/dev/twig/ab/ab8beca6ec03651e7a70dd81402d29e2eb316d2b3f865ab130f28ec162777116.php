<?php

/* AppBundle:Default/impression:tout_imprimer_backup2.html.twig */
class __TwigTemplate_0806a2aad59373a1c75e57107c70ee2739281b522f9cdeb926964899b339c844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/impression:tout_imprimer_backup2.html.twig", 1);
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
        $__internal_25c697b15cdd4d8c0a40bf2e79a6045b8bb809d1ee1d2410ab3471661bb19fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c697b15cdd4d8c0a40bf2e79a6045b8bb809d1ee1d2410ab3471661bb19fec->enter($__internal_25c697b15cdd4d8c0a40bf2e79a6045b8bb809d1ee1d2410ab3471661bb19fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer_backup2.html.twig"));

        $__internal_cddad62ffc69094ce70452a46fd4214eb66c02933f9c3d56b74a3f7c54848d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddad62ffc69094ce70452a46fd4214eb66c02933f9c3d56b74a3f7c54848d5e->enter($__internal_cddad62ffc69094ce70452a46fd4214eb66c02933f9c3d56b74a3f7c54848d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer_backup2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c697b15cdd4d8c0a40bf2e79a6045b8bb809d1ee1d2410ab3471661bb19fec->leave($__internal_25c697b15cdd4d8c0a40bf2e79a6045b8bb809d1ee1d2410ab3471661bb19fec_prof);

        
        $__internal_cddad62ffc69094ce70452a46fd4214eb66c02933f9c3d56b74a3f7c54848d5e->leave($__internal_cddad62ffc69094ce70452a46fd4214eb66c02933f9c3d56b74a3f7c54848d5e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ff8fc4b7786dcefa13fdeed31717aa1e676db14e9e4cba0d3b54e295b051783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff8fc4b7786dcefa13fdeed31717aa1e676db14e9e4cba0d3b54e295b051783->enter($__internal_0ff8fc4b7786dcefa13fdeed31717aa1e676db14e9e4cba0d3b54e295b051783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9626382d7559d75ad9f672e283d51cedabc912aaec768ee9688797d545a9ba30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9626382d7559d75ad9f672e283d51cedabc912aaec768ee9688797d545a9ba30->enter($__internal_9626382d7559d75ad9f672e283d51cedabc912aaec768ee9688797d545a9ba30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Impression ";
        
        $__internal_9626382d7559d75ad9f672e283d51cedabc912aaec768ee9688797d545a9ba30->leave($__internal_9626382d7559d75ad9f672e283d51cedabc912aaec768ee9688797d545a9ba30_prof);

        
        $__internal_0ff8fc4b7786dcefa13fdeed31717aa1e676db14e9e4cba0d3b54e295b051783->leave($__internal_0ff8fc4b7786dcefa13fdeed31717aa1e676db14e9e4cba0d3b54e295b051783_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e129599a149ff65287c0eb40773169c1951507ec35af251344672593b36b1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e129599a149ff65287c0eb40773169c1951507ec35af251344672593b36b1bf->enter($__internal_7e129599a149ff65287c0eb40773169c1951507ec35af251344672593b36b1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c885f0faaf6f962ecce258cce3e4ccf993d415b067ac37364673610828837791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c885f0faaf6f962ecce258cce3e4ccf993d415b067ac37364673610828837791->enter($__internal_c885f0faaf6f962ecce258cce3e4ccf993d415b067ac37364673610828837791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <button type=\"button\" class=\"btn btn-success\" id=\"btn_print\" onclick=\"generate()\">
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
                                ";
                    // line 83
                    if (($this->getAttribute($context["i"], "typeDemande", array()) == "Duplicata")) {
                        // line 84
                        echo "                                    <p class=\"text-red text-bold\" style='page-break-before: always; margin-top:50px; margin-bottom: 50px; text-transform: uppercase;'>
                                        ";
                        // line 85
                        echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                        echo "</p>
                                ";
                    } else {
                        // line 87
                        echo "                                    <p style='page-break-before: always; margin-top:50px; margin-bottom: 50px; color: transparent;'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                        echo "</p>
                                ";
                    }
                    // line 89
                    echo "

                                <p>délivre à</p>
                                <p class=\"demande\" data-id=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                    echo "\">
                                    <span style=\"margin-right: 100px;\">Mr /Mlle </span>
                                    <span class=\"text-bold\">";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                    echo "</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Né (e) le </span>
                                    <span style=\"margin-right: 50px;\" class=\"text-bold\">";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                    echo " </span>
                                    <span  style=\"margin-right: 40px;\">à </span>
                                    <span class=\"text-bold\">";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "lieunaissance", array()), "html", null, true);
                    echo " </span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 150px;\">N° Matricule </span>
                                    <span class=\"text-bold\">";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                    echo " </span>
                                </p>
                                <p class=\"\">
                                    <span>Le </span><span class=\"text-bold\">DIPLÔME </span><span style=\"margin-right: 10px;\">de LICENCE PROFESSIONNELLE EN </span>
                                    <span class=\"text-bold\">**** ";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                    echo " ****</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Option: </span>
                                    <span class=\"text-bold\">";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                    echo "</span>
                                </p>
                                <p class=\"\">
                                    <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                </p>
                                <p class=\"\">
                                    <span>N° d'enregistrement </span>
                                    <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                </p>


                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "
                            ";
            } else {
                // line 126
                echo "
                                ";
                // line 127
                if (($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()) == "Duplicata")) {
                    // line 128
                    echo "                                    <p class=\"text-red\" style='margin-top:50px; margin-bottom: 50px; text-transform: uppercase;'>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()), "html", null, true);
                    echo "</p>
                                ";
                } else {
                    // line 130
                    echo "                                    <p style='margin-top:50px; margin-bottom: 50px; color: transparent;'>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()), "html", null, true);
                    echo "</p>
                                ";
                }
                // line 132
                echo "

                                <p>délivre à</p>
                                <p class=\"demande\" data-id=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "id", array()), "html", null, true);
                echo "\">
                                    <span style=\"margin-right: 100px;\">Mr /Mlle </span>
                                    <span class=\"text-bold\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Né (e) le </span>
                                    <span style=\"margin-right: 50px;\" class=\"text-bold\">";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo " </span>
                                    <span  style=\"margin-right: 40px;\">à </span>
                                    <span class=\"text-bold\">";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "lieunaissance", array()), "html", null, true);
                echo " </span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 150px;\">N° Matricule </span>
                                    <span class=\"text-bold\">";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "mention", array()), "html", null, true);
                echo " </span>
                                </p>
                                <p class=\"\">
                                    <span>Le </span><span class=\"text-bold\">DIPLÔME </span><span style=\"margin-right: 10px;\">de LICENCE PROFESSIONNELLE EN </span>
                                    <span class=\"text-bold\">**** ";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "specialite", array()), "html", null, true);
                echo " ****</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Option: </span>
                                    <span class=\"text-bold\">";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span>
                                </p>
                                <p class=\"\">
                                    <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                </p>
                                <p class=\"\">
                                    <span>N° d'enregistrement </span>
                                    <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                </p>

                        ";
            }
            // line 166
            echo "
                    </div>

                ";
        }
        // line 170
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 176
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

    <script>
        var base64Img = null;
        imgToBase64('octocat.jpg', function(base64) {
            base64Img = base64;
        });

        margins = {
            top: 30,
            bottom: 40,
            left: 30,
            width: 1500
        };

        generate = function()
        {
            var pdf = new jsPDF('l', 'pt', 'a4');
            pdf.setFontSize(18);
            pdf.fromHTML(document.getElementById('html-2-pdfwrapper'),
                margins.left, // x coord
                margins.top,
                {
                    // y coord
                    width: margins.width// max width of content on PDF
                },function(dispose) {
                    headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
                },
                margins);

            var iframe = document.createElement('iframe');
            iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:1500px; padding:20px;');
            var container = document.getElementById('box-container');
            container.appendChild(iframe);

            iframe.src = pdf.output('datauristring');

            var demandes_array = [];
            \$(\"p.demande\").each(function () {
                demandes_array.push(\$(this).data('id'));
            });

            \$.ajax({
                method: \"post\",
                url: \"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_imprimer_final");
        echo "\",
                data: {demandes : demandes_array},
                success: function (data) {
                    console.log(data);
                }
            })

        };
        function headerFooterFormatting(doc, totalPages)
        {
            for(var i = totalPages; i >= 1; i--)
            {
                //doc.setPage(i);
                //header
                //header(doc);

                //footer(doc, i, totalPages);
                //doc.page++;
            }
        };

        function header(doc)
        {
            doc.setFontSize(30);
            doc.setTextColor(40);
            doc.setFontStyle('normal');

            if (base64Img) {
                doc.addImage(base64Img, 'JPEG', margins.left, 10, 40,40);
            }

            doc.text(\"Report Header Template\", margins.left + 50, 40 );
            doc.setLineCap(2);
            doc.line(3, 70, margins.width + 43,70); // horizontal line
        };

        // You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
        // http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
        function imgToBase64(url, callback, imgVariable) {

            if (!window.FileReader) {
                callback(null);
                return;
            }
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                var reader = new FileReader();
                reader.onloadend = function() {
                    imgVariable = reader.result.replace('text/xml', 'image/jpeg');
                    callback(imgVariable);
                };
                reader.readAsDataURL(xhr.response);
            };
            xhr.open('GET', url);
            xhr.send();
        };

        function footer(doc, pageNumber, totalPages){

            var str = \"Page \" + pageNumber + \" of \" + totalPages

            doc.setFontSize(10);
            doc.text(str, margins.left, doc.internal.pageSize.height - 20);

        };

    </script>

";
        
        $__internal_c885f0faaf6f962ecce258cce3e4ccf993d415b067ac37364673610828837791->leave($__internal_c885f0faaf6f962ecce258cce3e4ccf993d415b067ac37364673610828837791_prof);

        
        $__internal_7e129599a149ff65287c0eb40773169c1951507ec35af251344672593b36b1bf->leave($__internal_7e129599a149ff65287c0eb40773169c1951507ec35af251344672593b36b1bf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/impression:tout_imprimer_backup2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 223,  340 => 176,  333 => 170,  327 => 166,  313 => 155,  306 => 151,  299 => 147,  292 => 143,  287 => 141,  278 => 137,  273 => 135,  268 => 132,  262 => 130,  256 => 128,  254 => 127,  251 => 126,  247 => 124,  229 => 112,  222 => 108,  215 => 104,  208 => 100,  203 => 98,  194 => 94,  189 => 92,  184 => 89,  178 => 87,  173 => 85,  170 => 84,  168 => 83,  165 => 82,  160 => 81,  158 => 80,  146 => 70,  142 => 68,  140 => 67,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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
                        <button type=\"button\" class=\"btn btn-success\" id=\"btn_print\" onclick=\"generate()\">
                            <i class=\"fa fa-print\"></i>
                            Imprimer
                        </button>
                    </div>

                    <div id=\"html-2-pdfwrapper\" class=\"col-md-12\">

                        {% if id == 0 %}
                            {% for i in demandes %}

                                {% if i.typeDemande == 'Duplicata' %}
                                    <p class=\"text-red text-bold\" style='page-break-before: always; margin-top:50px; margin-bottom: 50px; text-transform: uppercase;'>
                                        {{ i.typeDemande }}</p>
                                {% else %}
                                    <p style='page-break-before: always; margin-top:50px; margin-bottom: 50px; color: transparent;'>{{ i.typeDemande }}</p>
                                {% endif %}


                                <p>délivre à</p>
                                <p class=\"demande\" data-id=\"{{ i.id }}\">
                                    <span style=\"margin-right: 100px;\">Mr /Mlle </span>
                                    <span class=\"text-bold\">{{ i.etudiant.nom }} {{ i.etudiant.prenom }}</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Né (e) le </span>
                                    <span style=\"margin-right: 50px;\" class=\"text-bold\">{{ i.etudiant.dateExamen }} </span>
                                    <span  style=\"margin-right: 40px;\">à </span>
                                    <span class=\"text-bold\">{{ i.etudiant.lieunaissance }} </span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 150px;\">N° Matricule </span>
                                    <span class=\"text-bold\">{{ i.etudiant.mention }} </span>
                                </p>
                                <p class=\"\">
                                    <span>Le </span><span class=\"text-bold\">DIPLÔME </span><span style=\"margin-right: 10px;\">de LICENCE PROFESSIONNELLE EN </span>
                                    <span class=\"text-bold\">**** {{ i.etudiant.specialite }} ****</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Option: </span>
                                    <span class=\"text-bold\">{{ i.etudiant.optionEtud }}</span>
                                </p>
                                <p class=\"\">
                                    <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                </p>
                                <p class=\"\">
                                    <span>N° d'enregistrement </span>
                                    <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                </p>


                            {% endfor %}

                            {% else %}

                                {% if demandes.typeDemande == 'Duplicata' %}
                                    <p class=\"text-red\" style='margin-top:50px; margin-bottom: 50px; text-transform: uppercase;'>{{ demandes.typeDemande }}</p>
                                {% else %}
                                    <p style='margin-top:50px; margin-bottom: 50px; color: transparent;'>{{ demandes.typeDemande }}</p>
                                {% endif %}


                                <p>délivre à</p>
                                <p class=\"demande\" data-id=\"{{ demandes.id }}\">
                                    <span style=\"margin-right: 100px;\">Mr /Mlle </span>
                                    <span class=\"text-bold\">{{ demandes.etudiant.nom }} {{ demandes.etudiant.prenom }}</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Né (e) le </span>
                                    <span style=\"margin-right: 50px;\" class=\"text-bold\">{{ demandes.etudiant.dateExamen }} </span>
                                    <span  style=\"margin-right: 40px;\">à </span>
                                    <span class=\"text-bold\">{{ demandes.etudiant.lieunaissance }} </span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 150px;\">N° Matricule </span>
                                    <span class=\"text-bold\">{{ demandes.etudiant.mention }} </span>
                                </p>
                                <p class=\"\">
                                    <span>Le </span><span class=\"text-bold\">DIPLÔME </span><span style=\"margin-right: 10px;\">de LICENCE PROFESSIONNELLE EN </span>
                                    <span class=\"text-bold\">**** {{ demandes.etudiant.specialite }} ****</span>
                                </p>
                                <p class=\"\">
                                    <span style=\"margin-right: 80px;\">Option: </span>
                                    <span class=\"text-bold\">{{ demandes.etudiant.optionEtud }}</span>
                                </p>
                                <p class=\"\">
                                    <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                </p>
                                <p class=\"\">
                                    <span>N° d'enregistrement </span>
                                    <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                </p>

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

    <script>
        var base64Img = null;
        imgToBase64('octocat.jpg', function(base64) {
            base64Img = base64;
        });

        margins = {
            top: 30,
            bottom: 40,
            left: 30,
            width: 1500
        };

        generate = function()
        {
            var pdf = new jsPDF('l', 'pt', 'a4');
            pdf.setFontSize(18);
            pdf.fromHTML(document.getElementById('html-2-pdfwrapper'),
                margins.left, // x coord
                margins.top,
                {
                    // y coord
                    width: margins.width// max width of content on PDF
                },function(dispose) {
                    headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
                },
                margins);

            var iframe = document.createElement('iframe');
            iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:1500px; padding:20px;');
            var container = document.getElementById('box-container');
            container.appendChild(iframe);

            iframe.src = pdf.output('datauristring');

            var demandes_array = [];
            \$(\"p.demande\").each(function () {
                demandes_array.push(\$(this).data('id'));
            });

            \$.ajax({
                method: \"post\",
                url: \"{{ path('demande_imprimer_final') }}\",
                data: {demandes : demandes_array},
                success: function (data) {
                    console.log(data);
                }
            })

        };
        function headerFooterFormatting(doc, totalPages)
        {
            for(var i = totalPages; i >= 1; i--)
            {
                //doc.setPage(i);
                //header
                //header(doc);

                //footer(doc, i, totalPages);
                //doc.page++;
            }
        };

        function header(doc)
        {
            doc.setFontSize(30);
            doc.setTextColor(40);
            doc.setFontStyle('normal');

            if (base64Img) {
                doc.addImage(base64Img, 'JPEG', margins.left, 10, 40,40);
            }

            doc.text(\"Report Header Template\", margins.left + 50, 40 );
            doc.setLineCap(2);
            doc.line(3, 70, margins.width + 43,70); // horizontal line
        };

        // You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
        // http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
        function imgToBase64(url, callback, imgVariable) {

            if (!window.FileReader) {
                callback(null);
                return;
            }
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                var reader = new FileReader();
                reader.onloadend = function() {
                    imgVariable = reader.result.replace('text/xml', 'image/jpeg');
                    callback(imgVariable);
                };
                reader.readAsDataURL(xhr.response);
            };
            xhr.open('GET', url);
            xhr.send();
        };

        function footer(doc, pageNumber, totalPages){

            var str = \"Page \" + pageNumber + \" of \" + totalPages

            doc.setFontSize(10);
            doc.text(str, margins.left, doc.internal.pageSize.height - 20);

        };

    </script>

{% endblock %}", "AppBundle:Default/impression:tout_imprimer_backup2.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/src/AppBundle/Resources/views/Default/impression/tout_imprimer_backup2.html.twig");
    }
}
