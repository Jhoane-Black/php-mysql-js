var id = document.getElementById("book_id")
var title = document.getElementById("book_title")
var editorial = document.getElementById("book_editorial")
var saga = document.getElementById("book_saga")
var price = document.getElementById("book_price")

function validate(){
    var mensajeError=[];
    if(id.value === null || book_id.value ===''){
        mensajeError.push('Debes ingresar un id');
    }
    if(title.value === null || book_title.value ===''){
        mensajeError.push('Debes ingresar el titulo del Libro');
    }
    if(editorial.value === null || book_editorial.value ===''){
        mensajeError.push('Debes ingresar la editorial del Libro');
    }
    if(saga.value === null || book_saga.value ===''){
        mensajeError.push('Debes ingresar la saga del Libro');
    }
    if(price.value === null || book_price.value ===''){
        mensajeError.push('Debes ingresar el precio del Libro');
    }
    if(price.value <0){
        mensajeError.push('El precio no puede ser negativo');
    }
    if(mensajeError.length !==0){
        mensajeError.join(', ');
        alert(mensajeError);
        return false
    }
    console.log(mensajeError);
    return true;
}
