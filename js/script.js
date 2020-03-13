//https://www.sitepoint.com/html5-forms-javascript-constraint-validation-api/

//capturamos el formulario
miFormulario = document.querySelector("#form_contact");


//quitamos la opción automática de validado del formulario. Las opciones dejan de ser operativas
miFormulario.noValidate = true;

//Configuramos y capturamos el handler (submit) para la manipulación y validación del formulario
miFormulario.addEventListener("submit",e=>{
    //e.preventDefault();
   /*
   The Field .willValidate Property
   Cada control de formulario (campo) tiene una propiedad: .willValidate. Este retorna:
    true cuando el navegador validadrá de forma nativa el campo
    false cuando el navegador NO valida de forma nativa el campo
    undefined cuando el navegador no soporta de forma nativa la validación HTML5, por ejemplo, IE8
   */
  
   console.log(e.target.elements)
   let campos=e.target;
   for(let i=0;i<campos.elements["length"];i++){
       //nodeType 1 --> Element
       //nodeName --> input / textarea
       //tagName --> input / textarea. La diferencia es que tagName sólo se refiere a elementos y nodeName a los nodos (que no tienen que ser elementos, por ejemplo los atributos)
       //getAttribute() --> obtenemos el atributo de un elemento
      
       //ignoraremos los botones
       if (campos.getAttribute("type")!=="submit" && campos.nodeName !== "INPUT" && campos.nodeName !== "TEXTAREA" && campos.nodeName !== "SELECT"){
            continue;
        
       } 
       
   }
});

