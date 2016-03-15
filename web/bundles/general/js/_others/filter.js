/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $('.year').click(yearAdd);
    $('.saude').click(saudeAdd);
    $('.sex').click(sexAdd);
    $('.active').click(activeAdd);
    $('#nome-id').click(nomeAdd);
    $('#nome-idResp').click(nomeAddResp);
    $('.year_class').click(yearDelete);
    $('.saude_class').click(saudeDelete);
    $('.sex_class').click(sexDelete);
    $('.active_class').click(activeDelete);
    $('.nome_class').click(nomeDelete);
    $('.resp_class').click(nomeDeleteResp);
    
    path = $('#url').val();
    
    $('#delete').click(function(){
        var json = {
            'id': $('#delete').attr('num'),
            'page':$('#page_number').attr('name')
        };
        $.post(path+'/r/d',json,function(data){
            if(data.status == 'OK'){
                //alert(data.status);
            }
            else{
                alert('Error');
            }
        });
    });

});
//path = '/becker/web/app_dev.php'; 

// Funcion para enviar datos AJAX via post
function sendfilter(url, jsondata, callback) {
    $.post(url, jsondata, callback, 'json');
}
;

//Actualiza la secccion de datos 
function updateData(html, paginator) {alert('llego');
    $('#mytbody').html(html);
    $('#my-paginator').html(paginator);
}
;

// Annade un nuevo filtro en la lista de filtros
function addFilter(id, classes, text, onClick) {
    var num = 10;
    var points = '...';
    if (text.length < num - 1) {
        num = text.length;
        points = '';
    }
    var elem = $('<a id="' + id + '' + '" class="'+classes+'"> <span  class="label label-lg label-grey arrowed-right" style="cursor: hand;" >' +
            text.substr(0, num) + points + '</span></a>');
    $('#filters').append(elem);
    elem.click(onClick);
}
;

// Elimina un elemento del html
function remFilter(id) {
    $('#' + id).remove();
}
;


//------------------------------------------------------------------------------

//Acciones a ejecutar cuando se annade un filtro de tipo nome ...
function nomeAdd() {
    if ($('#filtername').val() != "" && $('#filtername').val() != null) {
        var check = 'false';
        
        remFilter('filtName');
        var json = {
            'filter': 'NM',
            'action': 'add',
            'name': $('#filtername').val(),
            'pos': $('#filters').children().length,
            'match': check
        };
        sendfilter(path + '/r/ajaxfilter/', json, function (data) {
            if (data.status == 'OK') {alert('aaa');
                addFilter('filtName','actfilter', $('#filtername').val(), nomeDelete);
                updateData(data.result, data.paginator);
            }
        });
    }
}
;

// Acciones a realizar cuando se elimina un filtro de tipo nome
function nomeDelete() {
    var json = {
        'filter': 'NM',
        'action': 'del',
        'name': '',
        'match': ''
    };
    //alert($(this).attr('id'));
    $('#filtName').remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            updateData(data.result, data.paginator);
        }
        else {
            alert('Fiter non founded');
        }

    });
}
;


//------------------------------------------------------------------------------

//Acciones a ejecutar cuando se annade un filtro de tipo year. 
function yearAdd() {
    var json = {
        'action': 'add',
        'filter': 'YE',
        'id': $(this).attr('id'),
        'begin': $(this).attr('begin'),
        'end':$(this).attr('end')
    };
    var tmp = this;
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            addFilter('yr_' + $(tmp).attr('id'), 'year_class', $(tmp).attr('name'), yearDelete);
            updateData(data.result, data.paginator);
        }
    });
}
;
function yearDelete() {
    var json = {
        'filter': 'YE',
        'action': 'del',
        'id': $(this).attr('id'),
        'begin': $(this).attr('begin'),
        'end':$(this).attr('end')
    };
    //alert($(this).attr('id'));
    $(this).remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            updateData(data.result, data.paginator);
        }
        else {
            alert('Fiter non founded');
        }

    });
}
;


//------------------------------------------------------------------------------

//Acciones a ejecutar cuando se annade un filtro de tipo sex.
function sexAdd() {
    var json = {
        'action': 'add',
        'filter': 'SE',
        'id': $(this).attr('id')
    };
    var tmp = this;
    $('.sex_class').remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            addFilter('s_' + $(tmp).attr('id'), 'sex_class', $(tmp).attr('name'), sexDelete);
            updateData(data.result, data.paginator);
        }
    });
}
;
function sexDelete() {
    var json = {
        'filter': 'SE',
        'action': 'del',
        'id': $(this).attr('id'),
    };
    //alert($(this).attr('id'));
    $(this).remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            updateData(data.result, data.paginator);
        }
        else {
            alert('Fiter non founded');
        }

    });
}
;


//------------------------------------------------------------------------------
//Acciones a ejecutar cuando se annade un filtro de tipo active.
function activeAdd() {
    var json = {
        'action': 'add',
        'filter': 'AC',
        'id': $(this).attr('id')
    };
    var tmp = this;
    $('.active_class').remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            addFilter('a_' + $(tmp).attr('id'), 'active_class', $(tmp).attr('name'), activeDelete);
            updateData(data.result, data.paginator);
        }
    });
}
;
function activeDelete() {
    var json = {
        'filter': 'AC',
        'action': 'del',
        'id': $(this).attr('id'),
    };
    //alert($(this).attr('id'));
    $(this).remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            updateData(data.result, data.paginator);
        }
        else {
            alert('Fiter non founded');
        }

    });
}
;

//------------------------------------------------------------------------------

//Acciones a ejecutar cuando se annade un filtro de tipo nome ...
function nomeAddResp() {
    if ($('#filternameResp').val() != "" && $('#filternameResp').val() != null) {        
        var json = {
            'filter': 'NMR',
            'action': 'add',
            'name': $('#filternameResp').val(),
            'pos': $('#filters').children().length,
        };
        $('.resp_class').remove();
        sendfilter(path + '/r/ajaxfilter/', json, function (data) {
            if (data.status == 'OK') {
                addFilter('filtNameResp','resp_class', $('#filternameResp').val(), nomeDeleteResp);
                updateData(data.result, data.paginator);
            }
        });
    }
}
;

// Acciones a realizar cuando se elimina un filtro de tipo nome
function nomeDeleteResp() {
    var json = {
        'filter': 'NMR',
        'action': 'del',
        'name': '',
        'match': ''
    };
    //alert($(this).attr('id'));
    $('.resp_class').remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            updateData(data.result, data.paginator);
        }
        else {
            alert('Fiter non founded');
        }

    });
}
;

//------------------------------------------------------------------------------

//Acciones a ejecutar cuando se annade un filtro de tipo year. 
function saudeAdd() {
    var json = {
        'action': 'add',
        'filter': 'SA',
        'id': $(this).attr('num'),
        'name':$(this).attr('name')
    };
    var tmp = this;
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            addFilter('sa_' + $(tmp).attr('num'), 'saude_class', $(tmp).attr('name'), saudeDelete);
            updateData(data.result, data.paginator);
        }
    });
}
;
function saudeDelete() {
    var json = {
        'filter': 'SA',
        'action': 'del',
        'id': $(this).attr('id')
    };
    //alert($(this).attr('id'));
    $(this).remove();
    sendfilter(path + '/r/ajaxfilter/', json, function (data) {
        if (data.status == 'OK') {
            updateData(data.result, data.paginator);
        }
        else {
            alert('Fiter non founded');
        }
    });
}
;