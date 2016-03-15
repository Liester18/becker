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
        'consultatype[observacao]': $('#editor1').html(),
        'consultatype[receita]': $('#editor2').html(),
        'consultatype[data]': $('#consultatype_data').val(),
        'consultatype[_token]': $('#consultatype__token').attr('value')
    };

    $.post(url + id, json, function (data) {
        if (data.status == 'OK') {
            $('#my-consulta').html(data.html);
        }
        else {
            alert('Fail');
        }
        //my_init_consulta();
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

function ViewConsultas(){
    var id = $(this).attr('my-id');
    var url = $(this).attr('url');
    var json = {
    };
    $.get(url + id+'/'+'1', json, function (data) {
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
                                my_init_consulta();
                            }
                            else {
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
    my_init_consulta();
    return false;
};

function ViewOneConsulta(){
    var id = $(this).attr('id-cons');
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
                                my_init_consulta();
                            }
                            else {
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
};