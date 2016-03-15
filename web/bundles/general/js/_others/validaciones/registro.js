/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
   
   $('#signup-box button.registro').click(function (){
       var rol = $('.r_rol').val(); 
       var usuario = $('.r_nombre').val();      
       var pass = $('.r_pass').val();
       if(usuario == ''|| rol == ''|| pass == ''){
           alert('Debe llenar los campos');
           return false;
       }
       if(!isNaN(usuario)){
          alert('No debe entrar números'); 
          return false;
       }
     return true;
   });
   
});


