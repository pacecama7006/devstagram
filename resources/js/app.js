import Dropzone from "dropzone";
// import './bootstrap'; 
// Como por defecto Dropzone va a buscar un elemento
// que tenga la clase de dropzone, y nosotros queremos
// darle el comportamiento, lo ponemos en false
Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imágen',
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar archivo',
    maxFiles: 1,
    uploadMultiple: false,
});

// Función para cuando enviamos un archivo
dropzone.on('sending', function(file, xhr, formData){
    // console.log(file);
});

// Función para cuando se sube archivo correctamente
dropzone.on('success', function (file, response){
    console.log(response);
});

// Función para mensaje en caso de error al subir archivo
dropzone.on('error', function (file, message){
    console.log(message);
});

// Función para cuando se borra desde pantalla un archivo
dropzone.on('removedfile', function (){
    // console.log('Archivo eliminado');
});