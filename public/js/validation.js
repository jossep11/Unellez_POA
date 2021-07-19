let InputEFortaleza = document.querySelectorAll('.Estrategia_Input_F');

//Validation of inputs
InputEFortaleza.forEach(element => {
    const RegExp_F = /[f\F\d\s\,]/;
    
    const ValidationF = (e) =>{
       
        if (!RegExp_F.test(e.key)) {
            e.preventDefault();           
       }
    }
    element.addEventListener('keypress', ValidationF);
});
    

// with this a send to uppercase anything that is typed on all these inputs
let Estrategia_Input = document.querySelectorAll('.Estrategia_Input');
Estrategia_Input.forEach(input => {
   
    const inputtouppercase = () =>{
    input.value=input.value.toUpperCase();
}
   input.addEventListener('keyup', inputtouppercase);
});



let InputEAmenaza = document.querySelectorAll('.Estrategia_Input_A');

InputEAmenaza.forEach(element => {
    const RegExp_A = /[a\A\d\s\,]/;
    
    const ValidationA = (e) =>{
       
        if (!RegExp_A.test(e.key)) {
            e.preventDefault();           
       }
    }
    element.addEventListener('keypress', ValidationA);
});
    
