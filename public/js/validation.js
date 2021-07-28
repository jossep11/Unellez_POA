
$('input[name=DocumentoID_Responsable]').on('click', function(e) {


    let Documento_V = $('input[name=DocumentoID_Responsable]').val();


    let inputnroDocumento = document.querySelector('input[name=Cedula_Pasaporte]');
    console.log(document.querySelectorAll('input[name=Cedula_Pasaporte]'));
    if($('#ButtonR1').is(':checked')) 
    {
    inputnroDocumento.value='';
       inputnroDocumento.disabled=false; 
       inputnroDocumento.setAttribute("minlength", "8");
       inputnroDocumento.setAttribute("maxlength", "8");
       $(inputnroDocumento).keypress(function (event) {
        //with this we prevent the insertion of charts that are not numbers
          if (event.which < 48 || event.which > 57) {
            return false;
            
        }
      });  
     
    }else if($('#ButtonR2').is(':checked')) { 

      let inputnroDato = document.querySelector('input[name=Cedula_Pasaporte]');
       inputnroDato.value='';
       inputnroDato.disabled=false;
       inputnroDato.setAttribute("minlength", "9");
       inputnroDato.setAttribute("maxlength", "9");
    
        $(inputnroDato).keypress(function (event2) {
           //with this we prevent the insertion of charts that are not numbers
            if (event2.which < 48 || event2.which > 57) {
                    
             return false;
            }
          });
        
    }else{
        inputnroDocumento.disabled=true;
    }
    
    
    });
    