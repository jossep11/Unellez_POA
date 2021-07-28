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



    $(document).ready(function() {
        $('#basic-datatables').DataTable({   
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'Todos']], 
            scrollX:        true,
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


collapseDatosR1 = document.querySelector('#collapseDatosR1');

/**
document.addEventListener("DOMContentLoaded", function(){
    
    setTimeout(
        function() {
            collapseDatosR1.classList.remove("show")   
        }, 
        100);
    });
 */