//arreglo que contiene las repsuestas correctas
let correctas = [3,1,2]

//arreglo dionde se guardan las res del usuario
let opcion_elegida=[];

let cantidad_correctas=0;

// funcion que toma el num de pregunta y el input elegido de esa preguntas
function respuesta(num_pregunta, seleccionada) {
// guardo la respuesta elegida
    opcion_elegida [num_pregunta] = seleccionada.value;

    //el siguiente codigo es para poner en color blanco
    //armo el id para seleccionar el section correspondiente
    id="p" + num_pregunta;

    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor = "white";
    labels[5].style.backgroundColor = "white";
    labels[7].style.backgroundColor = "white";

    // doy color al lebel selec
    seleccionada.parentNode.style.backgroundColor = "#"; 
}
 //funcion que compara los arreglos para sabeer cuantas estuvieron correctas
 function enviar(){
    cantidad_correctas = 0;
    for(i=0; i < correctas.length;i++){
        if(correctas[i] == opcion_elegida[i]){
            cantidad_correctas++;
        }
    }
    document.getElementById("resultado").innerHTML = cantidad_correctas;
 }

