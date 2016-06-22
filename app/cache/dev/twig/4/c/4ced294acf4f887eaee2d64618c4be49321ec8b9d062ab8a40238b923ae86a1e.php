<?php

/* ReportsBundle:Default:dashboard.html.twig */
class __TwigTemplate_4ced294acf4f887eaee2d64618c4be49321ec8b9d062ab8a40238b923ae86a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ReportsBundle:Default:dashboard.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3716d6e1feba82dd7efb9abdfe577f6ff6ed9a91f580e32f394883b6272bcad = $this->env->getExtension("native_profiler");
        $__internal_c3716d6e1feba82dd7efb9abdfe577f6ff6ed9a91f580e32f394883b6272bcad->enter($__internal_c3716d6e1feba82dd7efb9abdfe577f6ff6ed9a91f580e32f394883b6272bcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportsBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3716d6e1feba82dd7efb9abdfe577f6ff6ed9a91f580e32f394883b6272bcad->leave($__internal_c3716d6e1feba82dd7efb9abdfe577f6ff6ed9a91f580e32f394883b6272bcad_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_813b06f6f2462cbeca085929723dc044f5f12c1f2b0266ac3b240bf2fe8624ec = $this->env->getExtension("native_profiler");
        $__internal_813b06f6f2462cbeca085929723dc044f5f12c1f2b0266ac3b240bf2fe8624ec->enter($__internal_813b06f6f2462cbeca085929723dc044f5f12c1f2b0266ac3b240bf2fe8624ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"page-content\">
        <div class=\"page-header row\">
            ";
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()), "id", array()) == 1)) {
            echo "  
                <div class=\"col-md-4 col-sm-4\">
                    <h1>
                        Maneje seus pacientes:
                    </h1>
                </div>
                <div class=\"col-md-offset-6 col-sm-offset-6 col-md-2 col-sm-3\">
                    <a  class=\"btn  btn-info btn-sm no-radius export\" href=\"#\"> <!-- btn-app -->
                        <i class=\"icon-envelope bigger-230\"></i>
                        MailList
                    </a>
                </div>
            ";
        }
        // line 19
        echo "          

        </div><!-- /.page-header -->

        <div id=\"accordion1\" class=\"accordion-style2 panel-group no-padding-right\">
            <div class=\"panel panel-default\">
                <div class=\"row\">
                    <!--<label class=\"col-md-2 col-sm-2 panel-title  blue  accordion-submenu\" id=\"acoordion-title1\">
                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\"> 
                            Criterio Filtragem
                            <i class=\"icon-angle-down bigger-110\" data-icon-hide=\"icon-angle-down \" data-icon-show=\"icon-double-angle-right\"></i>
                        </a>
                    </label>-->
                    <!--<div id=\"filters\" class=\"col-md-8 col-sm-8\"></div>-->
                </div>
                <div class=\"space\" > </div> 
                <div class=\"panel-collapse collapse in\" id=\"collapseOne\">\t

                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"table-responsive\">
                                <table id=\"sample_3\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <!-- <th class=\"center\">Seleccionar</th> -->                                        
                                            <th class=\"raya\">Nome Paciente</th>
                                            <!--<th class=\"hidden-480 center\">Responsavels</th> -->
                                            <th class=\"llll raya\">Responsáveis</th>
                                            <!--<th class=\"llll\">Email</th>                                            -->
                                            <th class=\"raya dere\">Ação</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome Paciente</th>
                                            <th>Responsáveis</th> 
                                            <th class=\"dere_b\"></th>
                                        </tr>
                                    </tfoot>                                  
                                                                           
                                    ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 60
            echo "                                                <tr>
                                                    <td class=\"center\">
                                                        <ul class=\"list-unstyled spaced2 pnome\">
                                                            <li class=\"muted align-left align-middle\">                                                               
                                                                <!-- <a href=\"";
            // line 64
            echo "</a>  -->                                          
                                                                ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nome", array()), "html", null, true);
            echo "
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class=\"center\">
                                                        <ul class=\"list-unstyled spaced2\">
                                                                <li class=\"muted align-left\">                                                                   
                                                                    ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "n_resp", array()), "html", null, true);
            echo "
                                                                    <input type=\"hidden\" name=\"r1[]\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "n_resp", array()), "html", null, true);
            echo "\" class=\"r1\"/>
                                                                </li>
                                                                <input type=\"hidden\" name=\"email_resp[]\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "e_resp", array()), "html", null, true);
            echo "\" class=\"e_r1\"/>
                                                                
                                                                ";
            // line 77
            if ((($this->getAttribute($context["loop"], "index", array()) - 1) < $this->getAttribute($this->getAttribute((isset($context["p2"]) ? $context["p2"] : $this->getContext($context, "p2")),  -1, array(), "array"), "pfinal", array()))) {
                // line 78
                echo "                                                                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["p2"]) ? $context["p2"] : $this->getContext($context, "p2")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "r_info", array()) ==  -2)) {
                    // line 79
                    echo "                                                                        <li class=\"muted align-left\">                                                                   
                                                                            ";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p2"]) ? $context["p2"] : $this->getContext($context, "p2")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "n_resp2", array()), "html", null, true);
                    echo "                                                                            
                                                                            <input type=\"hidden\" name=\"r2[]\" value=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p2"]) ? $context["p2"] : $this->getContext($context, "p2")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "n_resp2", array()), "html", null, true);
                    echo "\" class=\"r2\"/>
                                                                            <input type=\"hidden\" name=\"r2[]\" value=\"";
                    // line 82
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                    echo "\" class=\"r2\"/>
                                                                        </li>  
                                                                        <input type=\"hidden\" name=\"email_resp2[]\" value=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p2"]) ? $context["p2"] : $this->getContext($context, "p2")), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "e_resp2", array()), "html", null, true);
                    echo "\" class=\"e_r2\"/>
                                                                    ";
                }
                // line 86
                echo "                                                                ";
            }
            // line 87
            echo "                                                                
                                                        </ul>
                                                    </td>                                                 

                                                    <td class=\"center\">   
                                                        <div class=\"visible-md visible-lg hidden-sm hidden-xs action-buttons\">
                                                         ";
            // line 93
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "rol", array()), "id", array()) == 1)) {
                echo "   
                                                            <button onclick=\"window.location.replace('";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atendimento", array("id_paciente" => (($this->getAttribute($context["d"], "p_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["d"], "p_id", array()), "default_id_paciente")) : ("default_id_paciente")))), "html", null, true);
                echo "');\" class=\"btn btn-link btn-link-ajustado tooltip-default\" data-rel=\"tooltip\" data-placement=\"bottom\" 
                                                                    title=\"Atualizar ficha do cliente\">
                                                                <i class=\"icon-leaf bigger-230 dark \"></i>
                                                            </button>   
                                                            <button onclick=\"window.location.replace('";
                // line 98
                echo $this->env->getExtension('routing')->getPath("daily_work");
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "p_id", array()), "html", null, true);
                echo "');\" class=\"btn btn-link btn-link-ajustado tooltip-default\" data-rel=\"tooltip\" data-placement=\"bottom\" 
                                                                    title=\"Fazer Consulta\">
                                                                <i class=\"icon-briefcase bigger-230 green\"></i>
                                                            </button> 
                                                         ";
            }
            // line 102
            echo "         
                                                         <button id=\"delete\" num=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "p_id", array()), "html", null, true);
            echo "\" name=\"Apagar\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "p_id", array()), "html", null, true);
            echo "\" class=\"btn btn-link btn-link-ajustado tooltip-default\" data-rel=\"tooltip\" data-placement=\"bottom\"  type=\"button\" title=\"Apagar\" onclick=\"Borrar(this)\">
                                                                <i class=\"icon-trash bigger-230 red\"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class=\"space\" > </div> \t


    </div>   


";
        
        $__internal_813b06f6f2462cbeca085929723dc044f5f12c1f2b0266ac3b240bf2fe8624ec->leave($__internal_813b06f6f2462cbeca085929723dc044f5f12c1f2b0266ac3b240bf2fe8624ec_prof);

    }

    // line 131
    public function block_javascripts_page($context, array $blocks = array())
    {
        $__internal_369a53ee95917b208623c645c7acec0cc9f724574c1df1b0a51ad7b94a95ee5a = $this->env->getExtension("native_profiler");
        $__internal_369a53ee95917b208623c645c7acec0cc9f724574c1df1b0a51ad7b94a95ee5a->enter($__internal_369a53ee95917b208623c645c7acec0cc9f724574c1df1b0a51ad7b94a95ee5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_page"));

        // line 132
        echo "    <script type=\"text/javascript\">   
    
    function Borrar(o){
        var a = confirm(\"Deseja apagar esta línea\");
        if(a){
            var path = \"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("reports_delete");
        echo "\";
            var path2 = \"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("reports_homepage");
        echo "\";
            //alert('llego');
            var json = {
                'id': o.value,
                'page':\$('#page_number').attr('name')
            };            
            \$.ajax({
                    type: \"POST\",
                    url: path,
                    data: json,
                    // async: true,
                    dataType: \"json\",
                    success: function (response)
                    {
                       location.href = path2;
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown)
                    {
                        // stuff there
                    }
                });           
        }else{
            return false;
        }          
    }
    
    function getFiltrados(){   
            var v1;
            rowDelim = '\"\\r\\n\"';        
            var v2;
            var z = 0;
            var v3 = [];
            \$(\"#sample_3\").dataTable().\$('tr', {\"filter\":\"applied\"}).each( function () {
                v1 = \$(this).find(\"input.r1\").val() +\";\"+ \$(this).find(\"input.e_r1\").val();            
                v2 = \$(this).find(\"input.r2\").val() +\";\"+ \$(this).find(\"input.e_r2\").val();                
                if(v2 == \"undefined;undefined\"){
                    v3[z] = v1 + rowDelim;
                }else{
                    v3[z] = v1 + rowDelim + v2 + rowDelim;
                }
                z++;                
            });            
        return v3;  
    }
    

    function exportTableToCSV() {
        
        //filename = 'export.csv';
        var d = new Date();var filename = \"\";
        filename = d.getFullYear().toString()+'-'+d.getMonth().toString()+'-'+d.getDate().toString()+'-'+d.getHours().toString()+'-'+d.getMinutes().toString()+'.csv'; 
            // actual delimiter characters for CSV format
            //colDelim = '\";\"';
            rowDelim = '\"\\r\\n\"';
            
            var ds = getFiltrados();
            
            var csv = \"Nome;Email\"+rowDelim;
            for(var i=0; i<ds.length; i++){ 
                csv += ds[i];
            }
            csv = csv.replace (/\"/g, \"\");
            csv = csv.replace (/undefined/g, \"\");
            
           
            // Data URI
            csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
        
        
        \$('.export').attr({
            'download': filename,
            'href': csvData,
            'target': '_blank'
        });
    }
    
    /*function toExport(){
        var r1 = [];
        var r2 = [];
        var e_r1 = [];
        var e_r2 = [];      
        r1 = document.getElementsByClassName('r1');
        r2 = document.getElementsByClassName('r2');
        e_r1 = document.getElementsByClassName('e_r1');
        e_r2 = document.getElementsByClassName('e_r2');      
        var p = 0; var e = 0;       
        var _json = [{\"resp\": r1[0].value, \"email\": e_r1[0].value} , {\"resp\": r2[0].value, \"email\": e_r2[0].value}];
        for(var i=1; i<r1.length; i++){                      
            _json.push(
                      {\"resp\": r1[i].value, \"email\": e_r1[i].value}
            );
            _json.push(
                      {\"resp\": r2[i].value, \"email\": e_r2[i].value}
            );            
        }  
        return _json;        
    };*/
        
    \$(document).ready(function() {     
        \$('#sample_3 tfoot th').each(function () {
            var title = \$('#sample_3 thead th').eq(\$(this).index()).text();
            \$(this).html('<input type=\"text\" placeholder=\"Busca por' + title + '\" />');        
        });
                
        var table = \$('#sample_3').dataTable({
            language: {                 
                 search:     \"Busca Geral\",
                 lengthMenu: \"Mostrar _MENU_ líneas por página\",
                 zeroRecords: \"Nada encontrado - desculpe\",
                 info: \"Mostrando _PAGE_ de _PAGES_ páginas\" ,
                 infoEmpty: \"Não há registros disponíveis\",
                 infoFiltered: \"(filtrado de _MAX_ registros em total)\"
            }//,
            //dom: 'B<\"clear\">lfrtip',         //hay k kitar esto para k los filtros funcionen...   
            //filter: true,
            //buttons: ['csv']     
            /*buttons: [
            {
                extend: 'csv',
                exportOptions: {
                    columns: \".llll\"
                }
            }            
            ]*/
     
        });
                
                
        \$('#sample_3 tfoot th').each(function (i) 
        {
            var title = \$('#sample_3 thead th').eq(\$(this).index()).text();
            // or just var title = \$('#sample_3 thead th').text();
            var serach = '<input type=\"text\" placeholder=\"Busca por ' + title + '\" />';
            \$(this).html('');
            \$(serach).appendTo(this).keyup(function(){table.fnFilter(\$(this).val(),i)})
        });
        
        \$(\".export\").on('click', function (event) {
            // CSV
            exportTableToCSV();
        });
        
    }); 
     
</script>    
";
        
        $__internal_369a53ee95917b208623c645c7acec0cc9f724574c1df1b0a51ad7b94a95ee5a->leave($__internal_369a53ee95917b208623c645c7acec0cc9f724574c1df1b0a51ad7b94a95ee5a_prof);

    }

    public function getTemplateName()
    {
        return "ReportsBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 138,  275 => 137,  268 => 132,  262 => 131,  237 => 110,  214 => 103,  211 => 102,  202 => 98,  195 => 94,  191 => 93,  183 => 87,  180 => 86,  175 => 84,  170 => 82,  166 => 81,  162 => 80,  159 => 79,  156 => 78,  154 => 77,  149 => 75,  144 => 73,  140 => 72,  130 => 65,  127 => 64,  121 => 60,  104 => 59,  62 => 19,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
