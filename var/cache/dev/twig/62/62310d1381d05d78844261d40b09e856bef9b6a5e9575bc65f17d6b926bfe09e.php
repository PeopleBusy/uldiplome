<?php

/* AppBundle:Default/impression:tout_imprimer_backup.html.twig */
class __TwigTemplate_ed8edb0f091e76da884efca45bb77a673384649734726971dc9920660b856603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/impression:tout_imprimer_backup.html.twig", 1);
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
        $__internal_6cb81dcc86b46f7910ad1319e008e8b452cf8b90ec69093311be56eeaa0106e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb81dcc86b46f7910ad1319e008e8b452cf8b90ec69093311be56eeaa0106e8->enter($__internal_6cb81dcc86b46f7910ad1319e008e8b452cf8b90ec69093311be56eeaa0106e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer_backup.html.twig"));

        $__internal_61e997450dcbabc424650fef39d0c7e0dd33aaa6f37ea2955f60698e3ebb56ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e997450dcbabc424650fef39d0c7e0dd33aaa6f37ea2955f60698e3ebb56ce->enter($__internal_61e997450dcbabc424650fef39d0c7e0dd33aaa6f37ea2955f60698e3ebb56ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer_backup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cb81dcc86b46f7910ad1319e008e8b452cf8b90ec69093311be56eeaa0106e8->leave($__internal_6cb81dcc86b46f7910ad1319e008e8b452cf8b90ec69093311be56eeaa0106e8_prof);

        
        $__internal_61e997450dcbabc424650fef39d0c7e0dd33aaa6f37ea2955f60698e3ebb56ce->leave($__internal_61e997450dcbabc424650fef39d0c7e0dd33aaa6f37ea2955f60698e3ebb56ce_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d45d6ce3314860be7b520ebd2102b01b3522f37c102a790aea3b1d2d6e93f186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45d6ce3314860be7b520ebd2102b01b3522f37c102a790aea3b1d2d6e93f186->enter($__internal_d45d6ce3314860be7b520ebd2102b01b3522f37c102a790aea3b1d2d6e93f186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff5ab1d6e0b39d00fdcf5b14cf51f119ef919f7eaee741d0b480203c414a2d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5ab1d6e0b39d00fdcf5b14cf51f119ef919f7eaee741d0b480203c414a2d82->enter($__internal_ff5ab1d6e0b39d00fdcf5b14cf51f119ef919f7eaee741d0b480203c414a2d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Impression ";
        
        $__internal_ff5ab1d6e0b39d00fdcf5b14cf51f119ef919f7eaee741d0b480203c414a2d82->leave($__internal_ff5ab1d6e0b39d00fdcf5b14cf51f119ef919f7eaee741d0b480203c414a2d82_prof);

        
        $__internal_d45d6ce3314860be7b520ebd2102b01b3522f37c102a790aea3b1d2d6e93f186->leave($__internal_d45d6ce3314860be7b520ebd2102b01b3522f37c102a790aea3b1d2d6e93f186_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08837a015187559c21b3575e9166b026cce2432ca47a5d556104ab1ee1d52a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08837a015187559c21b3575e9166b026cce2432ca47a5d556104ab1ee1d52a4->enter($__internal_f08837a015187559c21b3575e9166b026cce2432ca47a5d556104ab1ee1d52a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4eaf236d5a5e7c408078c9994a1bd9b95a0b512a8e9ed88ccfc349694dc67cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eaf236d5a5e7c408078c9994a1bd9b95a0b512a8e9ed88ccfc349694dc67cbf->enter($__internal_4eaf236d5a5e7c408078c9994a1bd9b95a0b512a8e9ed88ccfc349694dc67cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 81
                echo "                            <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</h2>
                            <h2>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</h2>
                            <h2>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</h2>
                            <h2>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</h2>
                            <h2>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</h2>
                            <h2>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</h2>
                            <h2>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</h2>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
                        <h1 style=\"margin-left: 850px;\">Html2Pdf</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>
                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Two</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>

                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Three</h1>
                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>
                        <h2>Look here</h2>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                            This demo uses Html2Canvas.js to render HTML. Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>
                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>
                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Four</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>

                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Five</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>

                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>


                    </div>
                            <div class=\"hide\">
                            ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 182
                echo "                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td><span class=\"id badge bg-default\">";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"nom\">";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"prenom\">";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"genre\">";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "genre", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"dateExamen\">";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"specialite\">";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"mention\">";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"mention\">";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"mention\">";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "etatDemande", array()), "html", null, true);
                echo "</span></td>

                                    <td class=\"center\">
                                        <a href=\"#\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-print\"></i> Imprimer</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "
                            </div>

                ";
        }
        // line 204
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 210
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
        
        $__internal_4eaf236d5a5e7c408078c9994a1bd9b95a0b512a8e9ed88ccfc349694dc67cbf->leave($__internal_4eaf236d5a5e7c408078c9994a1bd9b95a0b512a8e9ed88ccfc349694dc67cbf_prof);

        
        $__internal_f08837a015187559c21b3575e9166b026cce2432ca47a5d556104ab1ee1d52a4->leave($__internal_f08837a015187559c21b3575e9166b026cce2432ca47a5d556104ab1ee1d52a4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/impression:tout_imprimer_backup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 210,  352 => 204,  346 => 200,  333 => 193,  329 => 192,  325 => 191,  321 => 190,  317 => 189,  313 => 188,  309 => 187,  305 => 186,  301 => 185,  297 => 184,  293 => 182,  289 => 181,  195 => 89,  187 => 87,  183 => 86,  179 => 85,  175 => 84,  171 => 83,  167 => 82,  162 => 81,  158 => 80,  146 => 70,  142 => 68,  140 => 67,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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

                        {% for i in demandes %}
                            <h2>{{ i.id }}</h2>
                            <h2>{{ i.etudiant.nom }}</h2>
                            <h2>{{ i.etudiant.nom }}</h2>
                            <h2>{{ i.etudiant.nom }}</h2>
                            <h2>{{ i.etudiant.nom }}</h2>
                            <h2>{{ i.etudiant.nom }}</h2>
                            <h2>{{ i.etudiant.nom }}</h2>
                        {% endfor %}

                        <h1 style=\"margin-left: 850px;\">Html2Pdf</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>
                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Two</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>

                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Three</h1>
                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>
                        <h2>Look here</h2>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                            This demo uses Html2Canvas.js to render HTML. Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>
                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>
                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h2>Text Alignment</h2>
                        <div style='text-align: left'>left</div>
                        <div style='text-align: center'>center</div>
                        <div style='text-align: right'>right</div>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Four</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>

                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>

                        <h1 style='page-break-before: always; margin-top:100px;'>Page Five</h1>
                        <p>
                            This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.
                        </p>

                        <p>A PDF of this page will be inserted into the right margin.</p>

                        <h2>Colors</h2>
                        <p>
                            <span style='color: red'>red</span> <span style='color: rgb(0, 255, 0)'>rgb(0,255,0)</span> <span style='color: rgba(0, 0, 0, .5)'>rgba(0,0,0,.5)</span> <span style='color: #0000FF'>#0000FF</span> <span style='color: #0FF'>#0FF</span>
                        </p>


                    </div>
                            <div class=\"hide\">
                            {% for i in demandes %}
                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td><span class=\"id badge bg-default\">{{ i.id }}</span></td>
                                    <td><span class=\"nom\">{{ i.etudiant.nom }}</span></td>
                                    <td><span class=\"prenom\">{{ i.etudiant.prenom }}</span></td>
                                    <td><span class=\"genre\">{{ i.etudiant.genre }}</span></td>
                                    <td><span class=\"dateExamen\">{{ i.etudiant.dateExamen }}</span></td>
                                    <td><span class=\"option\">{{ i.etudiant.optionEtud }}</span></td>
                                    <td><span class=\"specialite\">{{ i.etudiant.specialite }}</span></td>
                                    <td><span class=\"mention\">{{ i.etudiant.mention }}</span></td>
                                    <td><span class=\"mention\">{{ i.typeDemande }}</span></td>
                                    <td><span class=\"mention\">{{ i.etatDemande }}</span></td>

                                    <td class=\"center\">
                                        <a href=\"#\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-print\"></i> Imprimer</a>
                                    </td>
                                </tr>
                            {% endfor %}

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

{% endblock %}", "AppBundle:Default/impression:tout_imprimer_backup.html.twig", "/Users/Rachid/SymfonyProjects/uldiplome/src/AppBundle/Resources/views/Default/impression/tout_imprimer_backup.html.twig");
    }
}
