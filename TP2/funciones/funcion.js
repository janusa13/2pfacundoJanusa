function consultar() {
  //SE OBTIENE EL VALOR DEL ID//
  let aux = document.getElementById("consulta").value;

  //SE OBTIENE EL VALOR DE LA API Y SE FORMA LA URL CON EL ID//
  fetch("https://rickandmortyapi.com/api/character/" + aux)
    //SE TRANSFORMA LA INFORMACION A JSON//
    .then(function (response) {
      return response.json(response);
    })

    //SE CREAN ELEMENTOS PARA MOSTRAR LA INFORMACION DE LA API
    .then(function (data) {
      let numero = document.createElement("p");
      numero.textContent = "Numero: " + data.id;
      let nombre = document.createElement("p");
      nombre.textContent = "Nombre: " + data.name;
      let especie = document.createElement("p");
      especie.textContent = "Especie: " + data.species;
      let estado = document.createElement("p");
      estado.textContent = "Estado: " + data.status;
      let genero = document.createElement("p");
      genero.textContent = "Genero: " + data.gender;
      let origen = document.createElement("p");
      origen.textContent = "Origen: " + data.location.name;

      //VERIFICACION DE LOS DATOS
      console.log(aux);

      //LOS ELEMENTOS CREADOS ANTERIORMENTE SE DECLARAN HIJOS DE RESULTADOS
      //PARA MOSTRARLOS EN EL HTML
      let resultado = document.getElementById("resultado");

      //vaciar el resultado
      resultado.innerHTML = "";

      //SE CREAN HIJOS DE RESULTADOS CON LOS DATOS.
      resultado.appendChild(numero);
      resultado.appendChild(nombre);
      resultado.appendChild(especie);
      resultado.appendChild(estado);
      resultado.appendChild(genero);
      resultado.appendChild(origen);
    });
}
