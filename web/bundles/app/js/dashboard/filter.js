/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function (){
    $('.year').click(clickYears);
    $('.blood').click(tBlood);
    $('#nome-id').click(nomeAdd);  
    $('#mail').click(maillist);
    $('.my-delete').click(my_delete);
});


function sendfilter(url ,jsondata, callback){
    $.post(url,jsondata,callback,'json');
};
function my_delete(){
    alert($(this).parent().parent().parent().attr('id'));
    //$(this).parent('tr');
};
function maillist(){
    alert('make list');
};
function addFilter(id,text, onClick){
    var num =10;
    var points = '...';
    if(text.length < num-1  ){
        num = text.length;
        points = '';
    }
    var elem = $('<a id="'+id+''+'" class="actfilter btn"><span class="glyphicon glyphicon-remove"></span><small class="text-muted">'+
            text.substr(0,num)+points+'</small></a>');
    $('#filters').append(elem);
    elem.click(onClick);
};
function remFilter(id){
    $('#'+id).remove();
};
function nomeDelete(){
    var json= { 
            'filter':'NM',
            'action':'del',
            'name':'',
            'match':''
        };
    //alert($(this).attr('id'));
    $('#filtName').remove();
    sendfilter('/becker/web/app_dev.php/r/ajaxfilter/', json, function(data){
        if(data.status == 'OK'){
            updateData(data.result,data.paginator);
        }
        else{
            alert('Fiter non founded');
        }
        
    });
};
function updateData(html, paginator){
    $('#mytbody').html(html);
    $('#my-paginator').html(paginator);
};
function nomeAdd(){
    if($('#filtername').val()!="" && $('#filtername').val()!=null){
        var check = 'false';
        if($('#chType').is(':checked')){
            check = 'true';
        }
        remFilter('filtName');
        var json= { 
            'filter':'NM',
            'action':'add',
            'name':$('#filtername').val(),
            'pos':$('#filters').children().length,
            'match':check
        };
        sendfilter('/becker/web/app_dev.php/r/ajaxfilter/', json, function(data){
            if(data.status == 'OK'){
                addFilter('filtName',$('#filtername').val(),nomeDelete);
                updateData(data.result, data.paginator);
            }
        });
    }
    else{
        alert('Tem que inserir um nome');
    }
};
function tBlood(){
    var json= {
            'filter':'TB',
            'id':$(this).attr('id')
        };
    sendfilter('/ajaxfilter/tBlood',json, function(data){
           // alert(data);
        });
    alert($(this).attr('id'));
};
function clickYears(){                   
    var json= {
            'filter':'YE',
            'from':$(this).attr('from'),
            'to':$(this).attr('to')
        };
    sendfilter('/ajaxfilter/years',json, function(data){
           // alert(data);
        });  
    alert($(this).attr('id'));
    return true;
};
