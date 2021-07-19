var item = document.querySelectorAll(".nro_item");
let id = document.querySelector(".IdentificadorIndex");
var td = document.querySelectorAll("#basic-datatables td");
const menu = document.querySelector('#headingFive');
const mostrar = document.querySelector('.collapse5');
let AmenazaCheck= document.querySelectorAll(".CheckboxAmenaza");
let FortalezaCheck= document.querySelectorAll(".CheckboxFortaleza");
let tr_amenaza= document.querySelectorAll(".tr_amenaza");
let tablax = document.querySelector("#tablax");
let checkseleccionado = document.querySelectorAll('.checkseleccionado');


let RutaName=GetRutaName();


/** With the element "item" I call the index element, so then here below
 * I can add the index and with the id and the function charAt(0)I can get the first
 * letter of the text that it's being working --jossep11 (jp)
 */

if(id){
    item.forEach(function (valor, indice, item1) {
        valor.innerHTML = `${id.textContent.charAt(0)}${indice + 1}`;
    });
}

/** With this function I can get the name where I am located rn --jossep11 (jp)
 * So I can compare it later on
*/
function GetRutaName() {
        var rutaAbsoluta = self.location.href;   
		var posicionUltimaBarra = rutaAbsoluta.lastIndexOf("/");
		var rutaRelativa = rutaAbsoluta.substring( posicionUltimaBarra + "/".length , rutaAbsoluta.length );
        return rutaRelativa;
}		
/**

    const mobileMenu = () => {
        mostrar.classList.toggle('active');
      };
    
      menu.addEventListener('click', mobileMenu);
*/




if(RutaName==='matrizdafo'){
//lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]

//with this for I can put a number on the id so i can change it and dont initialize again the datatable
for (let i = 1; i <= 4; i++) {
    let TableBasicx = '#basic-datatables'+[i];
$(document).ready(function() {
    $(TableBasicx).DataTable({
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
        "ordering": false,        
        language: {
            search: "Buscar:",

            paginate:{previous:"Anterior", next:"Siguiente" },

            lengthMenu: "Ver _MENU_ registros",

            info: "Mostrando _START_-_END_ de _TOTAL_ registros",

            zeroRecords: "No hay registros encontrados",

            infoEmpty: "",

            infoFiltered:"(Filtrado de _MAX_ registros)",
        }
        ,
    });
});
}
}

else{
    $(document).ready(function() {
        $('#basic-datatables').DataTable({   
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'Todos']], 
            "ordering": false,             
            language: {
                search: "Buscar:",

            paginate:{previous:"Anterior", next:"Siguiente" },

            lengthMenu: "Ver _MENU_ registros",

            info: "Mostrando _START_-_END_ de _TOTAL_ registros",

            zeroRecords: "No hay registros encontrados",

            infoEmpty: "",

            infoFiltered:"(Filtrado de _MAX_ registros)",
               
            },
            
        
    
        });   
    
    })
}


//Here I check what check from amenazas is clicked  --jossep11 (jp)
AmenazaCheck.forEach(function (valor, indice, item1) {  

const Amenazaclicked = () => {
let ParrafoNoSeleccion = document.querySelector("#NoSeleccion");
let TableFAmenaza = document.querySelector("#FAmenaza");
let EditTableFAmenaza = document.querySelector("#EditFAmenaza");
let AmenazaCheckIndice = document.querySelector(`.Amenazacheck${indice}`);

    // If a Amenazacheck is selected that means it's gonna the added the text to the modal
    if(valor.checked){   
        
        var rows = document.getElementsByTagName("table")[3].rows;
        var row = rows[indice+1];
        
        var cell1 = row.cells[0]; //this define what cells Im using 
        var cell2 = row.cells[1];
    
        //Here I add the text selected to the modal
        TableFAmenaza.innerHTML+=`<div class="Amenazacheck${indice} Amenazacheck_"><span class="SpanAmenaza">${cell1.textContent}: </span> ${cell2.textContent}</div>`;
        EditTableFAmenaza.innerHTML+=`<div class="Amenazacheck${indice} Amenazacheck_"><span class="SpanAmenaza">${cell1.textContent}: </span> ${cell2.textContent}</div>`;

    // If Exist the class "Amenazacheck_" and "#Noseleccion" it'll remove the class
    if(document.querySelector(`.Amenazacheck_`) && document.querySelector(`#NoSeleccion`) ) {

            let ParrafoNoSeleccion = document.querySelector("#NoSeleccion");
            ParrafoNoSeleccion.remove();
    }

    }
    else{  
    // If a Amenazacheck is unselected that means the text from the modal is gonna the removed
        let AmenazaCheckIndice = document.querySelector(`.Amenazacheck${indice}`);
        AmenazaCheckIndice.remove();

        // if the class 'Amenazacheck_' and the id'#NoSeleccion' does not exist that means a div with id 'NoSeleccion' is gonna be created
        if (!(document.querySelector(`.Amenazacheck_`)) && !(document.querySelector(`#NoSeleccion`))){
            TableFAmenaza.innerHTML=`<div id="NoSeleccion"><p style="text-align: center;">No ha hecho alguna selección aun</p></div>`
        
        }
    }
  };
  //listener of the click
 valor.addEventListener('click', Amenazaclicked);
});


FortalezaCheck.forEach(function (valor, indice, item1) {  

    const Fortalezaclicked = () => {
    let NoSeleccion_FA_Fortaleza = document.querySelector("#NoSeleccion_FA_Fortaleza");
    let TableFAFortaleza = document.querySelector("#FaFortaleza");
    let EditTableFAFortaleza = document.querySelector("#EditFaFortaleza");
    let FortalezaCheckIndice = document.querySelector(`.Fortalezacheck${indice}`);
    
        // If a this is selected that means it's gonna the added the text to the modal
        if(valor.checked){   
            
            var rows = document.getElementsByTagName("table")[2].rows;
            var row = rows[indice+1];
            
            var cell1 = row.cells[0]; //this define what cells Im using 
            var cell2 = row.cells[1];
        
            //Here I add the text selected to the modal
            TableFAFortaleza.innerHTML+=`<div class="Fortalezacheck${indice} Fortalezacheck_"><span class="SpanAmenaza">${cell1.textContent}: </span> ${cell2.textContent}</div>`;
            EditTableFAFortaleza.innerHTML+=`<div class="Fortalezacheck${indice} Fortalezacheck_"><span class="SpanAmenaza">${cell1.textContent}: </span> ${cell2.textContent}</div>`;
    
        // If Exist the class "Fortalezacheck" and "#Noseleccion" will remove the class
        if(document.querySelector(`.Fortalezacheck_`) && document.querySelector(`#NoSeleccion_FA_Fortaleza`) ) {
    
                let NoSeleccion_FA_Fortaleza = document.querySelector("#NoSeleccion_FA_Fortaleza");
                NoSeleccion_FA_Fortaleza.remove();
        }
    
        }
        else{  
        // If a Amenazacheck is unselected that means the text from the modal is gonna the removed
            let FortalezaCheckIndice = document.querySelector(`.Fortalezacheck${indice}`);
            FortalezaCheckIndice.remove();
    
            // if the class 'FortalezaCheck' and the id'#NoSeleccion' does not exist that means a div with id 'NoSeleccion' is gonna be created
            if (!(document.querySelector(`.Fortalezacheck_`)) && !(document.querySelector(`#NoSeleccion_FA_Fortaleza`))){
                TableFAFortaleza.innerHTML=`<div id="NoSeleccion_FA_Fortaleza"><p style="text-align: center;">No ha hecho alguna selección aun</p></div>`
            
            }
        }
      };
      //listener of the click
     valor.addEventListener('click', Fortalezaclicked);
    });

function IndexMatrizDAFO() {
    let DebilidadesIndex = document.querySelectorAll(".IndexFaDebilidades");
    let OportunidadesIndex = document.querySelectorAll(".IndexDAFOOportunidades");
    let FortalezasIndex = document.querySelectorAll(".IndexDAFOFortaleza");
    let AmenazasIndex = document.querySelectorAll(".IndexDAFOAmenaza");

    DebilidadesIndex.forEach(function (valor, indice, item1) {
        valor.innerHTML = `D${indice + 1}`;
    });

    OportunidadesIndex.forEach(function (valor, indice, item1) {
        valor.innerHTML = `O${indice + 1}`;
    });

    FortalezasIndex.forEach(function (valor, indice, item1) {
        valor.innerHTML = `F${indice + 1}`;
    });
    
    AmenazasIndex.forEach(function (valor, indice, item1) {
        valor.innerHTML = `A${indice + 1}`;
    });

}
IndexMatrizDAFO();