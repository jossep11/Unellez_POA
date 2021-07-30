

//validation edit button  
    Cedula_Pasaporte=document.querySelectorAll('.Cedula_Pasaporte');
    ButtonR1 = document.querySelectorAll('.ButtonR1');
    ButtonR2 = document.querySelectorAll('.ButtonR2');
   
  ButtonR1.forEach(function (valor, indicecedula, item1) {
    
    if($(valor).is(':checked')) {
      console.log('checked=crack');
    Cedula_Pasaporte.forEach(function (valorinput, indiceinput, cedulainput) {
      cedulainput[indicecedula].setAttribute("minlength", "8");
      cedulainput[indicecedula].setAttribute("maxlength", "8");
    });
}

    $(valor).on('click', function(e) {
     console.log(indicecedula);
     
     Cedula_Pasaporte.forEach(function (valorinput, indiceinput, cedulainput) {
       //console.log(item1input[2]);
       //console.log(valorinput);
       cedulainput[indicecedula].value='';
       cedulainput[indicecedula].setAttribute("minlength", "8");
       cedulainput[indicecedula].setAttribute("maxlength", "8");
       //console.log('testing11');
     
     });
   
  }); 
});



  ButtonR2.forEach(function (valor, indice, item1) {
     $(valor).on('click', function(e) {
      console.log(indice);
      
      Cedula_Pasaporte.forEach(function (valorinput, indiceinput, item1input) {
        //console.log(item1input[2]);
        //console.log(valorinput);
        item1input[indice].value='';
        item1input[indice].setAttribute("minlength", "9");
        item1input[indice].setAttribute("maxlength", "9");
        console.log('testing11');
      
      });
    
   }); 
});


$('input[name=DocumentoID_Responsable]').on('click', function(e) {
console.log('aja');

    let Documento_V = $('input[name=DocumentoID_Responsable]').val();
    

    let inputnroDocumento = document.querySelector('input[name=Cedula_Pasaporte]');
    console.log(document.querySelectorAll('input[name=Cedula_Pasaporte]'));

    Cedula_Pasaporte=document.querySelectorAll('.Cedula_Pasaporte');

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
     
    }   else if($('#ButtonR2').is(':checked')) { 

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

    $('#editarObjetivoGeneral').on('click', function(e) {
      document.querySelector('#GuardarObjetivoGeneral').disabled=false;

      document.querySelector('.textareaobjetivGeneral').disabled=false;
      console.log('hi');
    });

    
    