/*By Kruz*/
$(document).ready(function() {   
    var respons1 = $('#paciente_type_responsavels_0_nome').val();
    var respons2 = $('#paciente_type_responsavels_1_nome').val();
    $('.exist').prop('checked',true);
    //$('.exist').hide();
    if (respons1 == respons2) {
        $('#contenedor_st3').hide();
        $('.exist').prop('checked', false);        
    }
     $('.exist').click(function() {
        if ($(this).is(':checked')) {
            $('#contenedor_st3').show();
            $('#paciente_type_responsavels_1_nome').val('');
            $('#paciente_type_responsavels_1_telefContato').val('');
            $('#paciente_type_responsavels_1_email').val('');
            $('#paciente_type_responsavels_1_endereco_cep').val('');
            $('#chk_resp2').val(1);
        }else if (!$(this).is(':checked')) {
            $('#contenedor_st3').hide();
                var nome_r0 = $('#paciente_type_responsavels_0_nome').val();
                var tel_r0 = $('#paciente_type_responsavels_0_telefContato').val();
                var email_r0 = $('#paciente_type_responsavels_0_email').val();
                var cep_r0 = $('#paciente_type_responsavels_0_endereco_cep').val(); 
                $('#paciente_type_responsavels_1_nome').val(nome_r0);
                $('#paciente_type_responsavels_1_telefContato').val(tel_r0);
                $('#paciente_type_responsavels_1_email').val(email_r0);
                $('#paciente_type_responsavels_1_endereco_cep').val(cep_r0);
                $('#chk_resp2').val(0);               
        }        
    });
});

$('.endereco_yes').click(function() {
         if ($(this).is(':checked')) {
            $('#paciente_type_responsavels_1_endereco_cep').val($('#paciente_type_responsavels_0_endereco_cep').val());
            $('#paciente_type_responsavels_1_endereco_logradouro').val($('#paciente_type_responsavels_0_endereco_logradouro').val());
            $('#paciente_type_responsavels_1_endereco_barrio').val($('#paciente_type_responsavels_0_endereco_barrio').val());
            $('#paciente_type_responsavels_1_endereco_cidade').val($('#paciente_type_responsavels_0_endereco_cidade').val());
            $('#paciente_type_responsavels_1_endereco_estado').val($('#paciente_type_responsavels_0_endereco_estado').val());
         }
         else{
             $('#paciente_type_responsavels_1_endereco_cep').val('');
             $('#paciente_type_responsavels_1_endereco_logradouro').val('');
             $('#paciente_type_responsavels_1_endereco_barrio').val('');
             $('#paciente_type_responsavels_1_endereco_cidade').val('');
             $('#paciente_type_responsavels_1_endereco_estado').val('');
         }
});

function validarAt()
{    
    var nome = $('#paciente_type_nome').val();
    var data_nac = $('#paciente_type_data_nascimento').val();
    var sexo = $('#paciente_type_sex').val();
    var nome_r0 = $('#paciente_type_responsavels_0_nome').val();
    var tel_r0 = $('#paciente_type_responsavels_0_telefContato').val();
    var email_r0 = $('#paciente_type_responsavels_0_email').val();
    var nome_r1 = $('#paciente_type_responsavels_1_nome').val();
    var tel_r1 = $('#paciente_type_responsavels_1_telefContato').val();
    var email_r1 = $('#paciente_type_responsavels_1_email').val();
    var cep_r0 = $('#paciente_type_responsavels_0_endereco_cep').val();
    var cep_r1 = $('#paciente_type_responsavels_1_endereco_cep').val();
    var chk_resp2 = $('#chk_resp2').val();
    
    if (nome == '') {
            alert('Deve preencher o nome do paciente');
            return false;
    }else if (data_nac == '') {
            alert('Deve preencher a data de nacimento do paciente');
            return false;    
    }else if (sexo == '') {
            alert('Deve preencher o sexo do paciente');
            return false;
    } 
    else if (nome_r0 == '') {
            alert('Deve preencher o nome do primeiro responsavel');
            return false;
    }else if (tel_r0 == '') {
            alert('Deve preencher o telephone do primeiro responsavel');
            return false;
    }else if (email_r0 == '') {
            alert('Deve preencher o email do primeiro responsavel');
            return false;
    }else if (chk_resp2 == 1){
            if (nome_r1 == '') {
                alert('Deve preencher o nome do segundo responsável');
                return false;
            }else if (tel_r1 == '') {
                alert('Deve preencher o telephone do segundo responsável');
                return false;
            }else if (email_r1 == '') {
                alert('Deve preencher o email do segundo responsável');
                return false;
            }else if(cep_r1 !== ""){
                if (cep_r1 < 10000000 || cep_r1 > 99999999 ){ 
                    alert('Deve preencher corretamente o CEP do segundo responsável');
                    return false;
                }
            }
    }else if (data_nac != '') {
            var res = ValidateDateAt(data_nac);
            if(!res){
                return false;
            }else{
                return true;
            }
    }      
    return true;
}
function ValidateDateAt(data_nac)
{
    var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
    var Val_date = data_nac;
        if (Val_date.match(dateformat)) {
            var seperator1 = Val_date.split('/');
            //var seperator2 = Val_date.split('-');

            if (seperator1.length > 1)
            {
                var splitdate = Val_date.split('/'); 
            }
            /*else if (seperator2.length > 1)
            {
                var splitdate = Val_date.split('-');
            }*/
            var dd = parseInt(splitdate[0]);
            var mm = parseInt(splitdate[1]);
            var yy = parseInt(splitdate[2]);
            var ListofDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            if (mm == 1 || mm > 2)
            {                
                if (dd > ListofDays[mm - 1])
                {
                    limpar();
                    alert('Invalid date format!');
                    return false;
                }else{
                    return true;
                }
            }
            if (mm == 2)
            {
                var lyear = false;
                if ((!(yy % 4) && yy % 100) || !(yy % 400))
                {
                    lyear = true;
                }
                if ((lyear == false) && (dd >= 29))
                {
                    limpar();
                    alert('Invalid date format!');
                    return false;
                }
                if ((lyear == true) && (dd > 29))
                {
                    limpar();
                    alert('Invalid date format!');
                    return false;
                }else{
                    return true;
                }
            }
        }
        else
        {
            limpar();
            alert("Invalid date format!");
            return false;
        }
}
function limpar(){
    $('#paciente_type_responsavels_1_nome').val('');
    $('#paciente_type_responsavels_1_telefContato').val('');
    $('#paciente_type_responsavels_1_email').val('');
}


