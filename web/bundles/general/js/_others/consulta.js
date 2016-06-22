/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(my_init_consulta);

function my_init_consulta() {

    $('#datepickid div').datepicker({
        startDate: "+1d",
        todayHighlight: true
    }).on('changeDate', function (e) {
        $('#consultatype_data').val(e.format('dd/mm/yyyy'))
    }); 

    $("#my-save").unbind('click');
    $('#my-save').click(ConsultaDados);
    
    $('.my-consulta').unbind('click');
    $('.my-consulta').click(ViewOneConsulta);
    
    $("#my-consultas").unbind('click');
    $('#my-consultas').click(ViewConsultas);

    $("#edit_bt").unbind('click');
    $('#edit_bt').click(EditResponsavelAction);

    $("#save_bt").unbind('click');
    $('#save_bt').click(SaveResponsavelAction);

    $("#cancel_bt").unbind('click');
    $('#cancel_bt').click(CancelResponsavelAction);

    $(".psaude").unbind('click');
    $('.psaude').click(function () {
        var id = $(this).attr('hidd');
        if ($("#" + id).hasClass('hide')) {
            $("#" + id).removeClass('hide');
        }
        else {
            $("#" + id).addClass('hide');
        }
        return false;
    });

    $("#birth").unbind('click');
    $('#birth').click(function () {
        if ($("#birth-info").hasClass('hide')) {
            $("#birth-info").removeClass('hide');
        }
        else {
            $("#birth-info").addClass('hide');
        }
        return false;
    });

    $("#bloodType").unbind('click');
    $('#bloodType').click(function () {
        if ($("#bloodType-info").hasClass('hide')) {
            $("#bloodType-info").removeClass('hide');
        }
        else {
            $("#bloodType-info").addClass('hide');
        }
        return false;
    });

    $("#novo-saude").unbind('click');
    $('#novo-saude').click(NewModalProbSaude);

    $("#novo-pac").unbind('click');
    $('#novo-pac').click(EditPaciente);

    $("#edit-probSaude").unbind('click');
    $('.edit-probSaude').click(EditProbSaude);

    $("#delete-probSaude").unbind('click');
    $('.delete-probSaude').click(DeleteProbSaude);
}
;

function CancelResponsavelAction() {
    var id = $(this).attr('id-pac');
    var url = $(this).attr('url');
    var json = {
    };
    $.get(url + id, json, function (data) {
        $('#resp-info').html(data.html);
        my_init_consulta();
    }, 'json');
}
;
function EditResponsavelAction() {
    var id = $(this).attr('id-pac');
    var url = $(this).attr('url');
    var json = {
    };
    $.get(url + id, json, function (data) {

        $('#resp-info').html(data.html);

        my_init_consulta();
    }, 'json');
}
;

function SaveResponsavelAction() {
    var id = $(this).attr('id-pac');
    var url = $(this).attr('url');
    var erro =0;
    
    if(!/^(\([0-9]+\)[0-9]+)$/.test($('#Paciente_ordenResponsavels_1_responsavel_telefContato').val().replace(/[\s]+/g,'')) &&
            $('#Paciente_ordenResponsavels_1_responsavel_telefContato').val().replace(/[\s]+/g,'')!=""){
        var parent =$('#Paciente_ordenResponsavels_1_responsavel_telefContato').parent();
        if($(parent).children().length==1)
            $(parent).append("<div class=\"alert alert-danger\">"+
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>"+
                    "telefone invalido</div>");
        erro =1;    
    }
    if(!/^(\([0-9]+\)[0-9]+)$/.test($('#Paciente_ordenResponsavels_1_responsavel_telefContato_2').val().replace(/[\s]+/g,'')) &&
            $('#Paciente_ordenResponsavels_1_responsavel_telefContato_2').val().replace(/[\s]+/g,'')!=""){
        var parent =$('#Paciente_ordenResponsavels_1_responsavel_telefContato_2').parent();
        if($(parent).children().length==1)
            $(parent).append("<div class=\"alert alert-danger\">"+
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>"+
                    "telefone invalido</div>");
        erro =1;    
    }
    if(!/^(\([0-9]+\)[0-9]+)$/.test($('#Paciente_ordenResponsavels_0_responsavel_telefContato').val().replace(/[\s]+/g,'')) &&
            $('#Paciente_ordenResponsavels_0_responsavel_telefContato').val().replace(/[\s]+/g,'')!=""){
            var parent =$('#Paciente_ordenResponsavels_0_responsavel_telefContato').parent();
            if($(parent).children().length==1)
                $(parent).append("<div class=\"alert alert-danger\">"+
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>"+
                    "telefone invalido</div>");
        erro =1;    
    }
    if(!/^(\([0-9]+\)[0-9]+)$/.test($('#Paciente_ordenResponsavels_0_responsavel_telefContato_2').val().replace(/[\s]+/g,'')) && 
            $('#Paciente_ordenResponsavels_0_responsavel_telefContato_2').val().replace(/[\s]+/g,'')!=""){

            var parent =$('#Paciente_ordenResponsavels_0_responsavel_telefContato_2').parent();
            if($(parent).children().length==1)
                $(parent).append("<div class=\"alert alert-danger\">"+
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>"+
                    "telefone invalido</div>");
        erro =1;    
    }
    if(erro == 1)
        return false;
    $.post(url + id, $('#responsavels-form').serialize(), function (data) {
        if (data.status == 'OK') {
            $('#resp-info').html(data.html);
        }
        else {
            $('#resp-info').html(data.html);
        }
        my_init_consulta();
    }, 'json');
}
;
function ConsultaDados() {
    var id = $(this).attr('my-id');
    var url = $(this).attr('url');

    var json = {
        'consultatype[observacao]': $('#consultatype_observacao').val(),
        'consultatype[receita]': $('#consultatype_receita').val(),
        'consultatype[data]': $('#consultatype_data').val(),
        'consultatype[_token]': $('#consultatype__token').attr('value')
    };

    $.post(url + id, json, function (data) {
        if (data.status == 'OK') {
            $('#diagnostico-form').html(data.html);
            my_init_consulta();
        }
        else {
            alert('Fail');
        }
        my_init_consulta();
    }, 'json');
}

function NewModalProbSaude() {
    var id = $(this).attr('idPaciente');
    var url = $(this).attr('url');
    var json = {
    };
    $.get(url + id, json, function (data) {
        bootbox.dialog({
            modal: true,
            title: data.title,
            title_html: true,
            message: data.html,
            buttons: [
                {
                    "label": "Cancel",
                    "class": "btn btn-xs",
                    "click": function () {
                        $(this).dialog("close");
                    },
                    callback: function () {
                    }
                },
                {
                    "label": "OK",
                    "class": "btn btn-primary btn-xs",
                    "click": function () {
                        //$(this).dialog("close");
                    },
                    "callback": function () {
                        var result = true;
                        var val = $('#input-prob-saude').val();
                        var found = 0;
                        var selectProblema = $('#paciente_problemassaudetype_problemaSaude');
                        $('#paciente_problemassaudetype_problemaSaude option').each(function(){
                            if($(this).html()==val){
                                found = $(this).val();
                            }
                        });
                        //$('#solution').attr('edade',$('#paciente_problemassaudetype_edadeDiagnostico').val());
                        //$('#solution').attr('detalhe',$('#paciente_problemassaudetype_detalhes_psalud').val());
                        var edade=$('#paciente_problemassaudetype_edadeDiagnostico').val();
                        var detalhe=$('#paciente_problemassaudetype_detalhes_psalud').val();
                        var token =$('#paciente_problemassaudetype__token').val();
                        if(found!=0){
                            //selectProblema.val(found);
                            var json1 = {
                                "paciente_problemassaudetype[edadeDiagnostico]":edade,
                                "paciente_problemassaudetype[detalhes_psalud]":detalhe,
                                "paciente_problemassaudetype[_token]":token,
                                "paciente_problemassaudetype[problemaSaude]":found,
                            };
                            $.post(url + id, json1, function (data) {
                                if (data.status == 'OK') {
                                    $('#prob_saude_container').html(data.html);
                                    my_init_consulta();
                                }
                                else {
                                    $('.bootbox-body').html(data.html);
                                    my_init_consulta();
                                    result = false;
                                }
                            }, 'json');
                            return result;
                        }
                        else{
                            var url1 = $('#input-prob-saude').attr("url");
                            var json = {};
                            $.get(url1 + $('#input-prob-saude').val(), json, function (data) {
                                if (data.status == 'OK') {
                                    
                                    var json2 = {
                                        "paciente_problemassaudetype[edadeDiagnostico]":edade,
                                        "paciente_problemassaudetype[detalhes_psalud]":detalhe,
                                        "paciente_problemassaudetype[_token]":token,
                                        "paciente_problemassaudetype[problemaSaude]":data.number
                                    };
                                    $.post(url + id, json2, function (data) {
                                        if (data.status == 'OK') {
                                            $('#prob_saude_container').html(data.html);
                                            my_init_consulta();
                                        }
                                        else {
                                            $('.bootbox-body').html(data.html);
                                            my_init_consulta();
                                            result = false;
                                        }
                                    }, 'json');
                                    return result;
                                }
                                else {
                                    alert("error");
                                }
                            }, 'json');
                        }
                        
                        return result;
                    }
                }
            ]
        });
    }, 'json');
    return false;
}
;
function DeleteProbSaude() {
    var id = $(this).attr('pat-prob-id');
    var url = $(this).attr('url');
    var json = {
        'id': id
    };
    obj = $(this).parent().parent();
    $.post(url, json, function (data) {
        if (data.status == 'OK') {
            obj.remove();
        }
    }, 'json');
}
;

function EditProbSaude() {
    var id = $(this).attr('pat-prob-id');
    var url = $(this).attr('url');
    var json = {
    };
    $.get(url + id, json, function (data) {
        modal_body = $('.modal-html').html();
        $('.modal-html').html('');
        bootbox.dialog({
            modal: true,
            title: data.title,
            title_html: true,
            message: data.html,
            buttons: [
                {
                    "label": "Cancel",
                    "class": "btn btn-xs",
                    "click": function () {
                    },
                    callback: function () {
                        $('.modal-html').html(modal_body);
                    }
                },
                {
                    "label": "OK",
                    "class": "btn btn-primary btn-xs",
                    "click": function () {
                        //$(this).dialog("close");
                    },
                    "callback": function () {
                        var result = true;
                        $.post(url + id, $('.my-form').serialize(), function (data) {
                            if (data.status == 'OK') {
                                $('#prob_saude_container').html(data.html);
                                my_init_consulta();
                            }
                            else {
                                $('.bootbox-body').html(data.html);
                                my_init_consulta();
                                result = false;
                            }
                        }, 'json');
                        return result;
                    }
                }
            ]
        });
    }, 'json');
    return false;
}
;
function EditPaciente() {
    var id = $(this).attr('idPaciente');
    var url = $(this).attr('url');
    var json = {
    };
    $.get(url + id, json, function (data) {
        bootbox.dialog({
            modal: true,
            title: data.title,
            title_html: true,
            message: data.html,
            buttons: [
                {
                    "label": "Cancel",
                    "class": "btn btn-xs",
                    "click": function () {
                    },
                    callback: function () {
                    }
                },
                {
                    "label": "OK",
                    "class": "btn btn-primary btn-xs",
                    "click": function () {
                        //$(this).dialog("close");
                    },
                    "callback": function () {
                        var result = true;
                        $.post(url + id, $('.my-form').serialize(), function (data) {
                            if (data.status == 'OK') {
                                $('#paciente_container').html(data.html);
                                $('#name-paciente').html('<i class=" icon-briefcase green"></i> CONSULTA DO PACIENTE: ' + data.name);
                                my_init_consulta();
                            }
                            else {
                                $('.bootbox-body').html(data.html);
                                my_init_consulta();
                                result = false;
                            }
                        }, 'json');
                        return result;
                    }
                }
            ]
        });
    }, 'json');
    return false;
}
;
function UpdateConsultasList(){
    var id = $('#my-consultas').attr('my-id');
    var url = $('#my-consultas').attr('url');
    var json = {
    };
    $.get(url + id+'/', json, function (data) {
        if(data.status == 'OK'){
            $('#list_diagnostic').html(data.html);
        }
        else{
            alert('server error');
        }
    }, 'json');
    my_init_consulta();
}
function ViewConsultas(){
    UpdateConsultasList();
    $('#new_diagnostic').hide();
    $('#one_diagnostic_info').hide();
    $('#list_diagnostic').show();
    return false;
};
function ViewOneConsultaC(id, url){
    var json = {
    };
    $.get(url + id, json, function (data) {
        if(data.status == 'OK'){
            $('#new_diagnostic').hide();
            $('#list_diagnostic').hide();
            $('#one_diagnostic_info').html(data.html);
            $('#one_diagnostic_info').show()();
        }
        else {
            alert('error');
        }
    }, 'json');
    return false;
}
function ViewOneConsulta(){
    var id = $(this).attr('id-cons');
    var url = $(this).attr('url');
    ViewOneConsultaC(id, url);
};