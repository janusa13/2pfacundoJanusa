function consulta() {
    //consulta a la API
    fetch('https://randomuser.me/api/')
    .then (response => response.json())
    .then(data=>console.log(data))

    //Creacion del HTML
    let genero=document.createElement("p");
        genero.textContent="Genero: "+results[0].gender;
    let nombre=document.createElement("p");
        nombre.textContent="Nombre: "+results[0].name.first;
    let apellido=document.createElement('p');
        apellido.textContent='Apellido: '+results[0].name.last;
    let latitud=document.createElement('p');
        latitud.textContent='Latitud: '+results[0].coordinates.latitude;
    



}