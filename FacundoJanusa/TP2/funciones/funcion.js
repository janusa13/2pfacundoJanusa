function consultar() {
  //SE OBTIENE EL VALOR DEL ID//
  let aux1 = document.getElementById("consulta1").value;
  let aux2 = document.getElementById("consulta2").value;

  //SE VERIFICAN DIFERENTES POSIBILIDADES
  if (!aux1 || !aux2) {
    alert("Debes ingresar los numeros");
    return;
  } else if (aux1 <= 0 || aux2 <= 0) {
    alert("Los numeros deben ser mayores a 0");
  } else if (aux1 > 826 || aux2 > 826) {
    alert("El numero debe ser menor a 827");
  }

  //SE OBTIENE EL VALOR DE LA API Y SE FORMA LA URL CON EL ID//
  fetch("https://rickandmortyapi.com/api/character/" + aux1 + "," + aux2)
    //SE TRANSFORMA LA INFORMACION A JSON//
    .then(function (response) {
      return response.json(response);
    })

    //SE CREAN ELEMENTOS PARA MOSTRAR LA INFORMACION DE LA API
    .then(function (data) {
      let numero1 = document.createElement("p");
      numero1.textContent = "Numero: " + data[0].id;
      let nombre1 = document.createElement("p");
      nombre1.textContent = "Nombre: " + data[0].name;
      let especie1 = document.createElement("p");
      especie1.textContent = "Especie: " + data[0].species;
      let estado1 = document.createElement("p");
      estado1.textContent = "Estado: " + data[0].status;
      let genero1 = document.createElement("p");
      genero1.textContent = "Genero: " + data[0].gender;
      let origen1 = document.createElement("p");
      origen1.textContent = "Origen: " + data[0].location.name;
      let imagen1 = document.createElement("img");
      imagen1.src = data[0].image;
      imagen1.id = "imagenApi";
      imagen1.classList.add("imagen-redonda");
      let episodios1 = document.createElement("p");
      episodios1.textContent =
        "Cantidad de Episodios: " + data[0].episode.length;

      let numero2 = document.createElement("p");
      numero2.textContent = "Numero: " + data[1].id;
      let nombre2 = document.createElement("p");
      nombre2.textContent = "Nombre: " + data[1].name;
      let especie2 = document.createElement("p");
      especie2.textContent = "Especie: " + data[1].species;
      let estado2 = document.createElement("p");
      estado2.textContent = "Estado: " + data[1].status;
      let genero2 = document.createElement("p");
      genero2.textContent = "Genero: " + data[1].gender;
      let origen2 = document.createElement("p");
      origen2.textContent = "Origen: " + data[1].location.name;
      let imagen2 = document.createElement("img");
      imagen2.src = data[1].image;
      imagen2.id = "imagenApi";
      imagen2.classList.add("imagen-redonda");
      let episodios2 = document.createElement("p");
      episodios2.textContent =
        "Cantidad de Episodios: " + data[1].episode.length;

      //VERIFICACION DE LOS DATOS
      console.log(aux1);
      console.log(aux2);
      console.log(imagen1);

      //COMPARACION
      if (data[0].episode.length > data[1].episode.length) {
        episodios1.textContent =
          "Cantidad de Episodios: " +
          data[0].episode.length +
          "  Personaje con mas capitulos 👑 ";
      } else if (data[1].episode.length > data[0].episode.length) {
        episodios2.textContent =
          "Cantidad de Episodios: " +
          data[1].episode.length +
          "  Personaje con mas capitulos 👑 ";
      } else if (data[0].episode.length === data[1].episode.length) {
        episodios1.textContent =
          "Cantidad de Episodios: " +
          data[0].episode.length +
          "  empate de capitulos ";
        episodios1.textContent =
          "Cantidad de Episodios: " +
          data[1].episode.length +
          "  empate de capitulos ";
      }

      //LOS ELEMENTOS CREADOS ANTERIORMENTE SE DECLARAN HIJOS DE RESULTADOS
      //PARA MOSTRARLOS EN EL HTML
      let resultado1 = document.getElementById("resultado1");
      let resultado2 = document.getElementById("resultado2");

      //VACIAR RESULTADO
      resultado1.innerHTML = "";
      resultado2.innerHTML = "";

      //mostrar los div
      resultado1.style.visibility = "visible";
      resultado2.style.visibility = "visible";

      //SE CREAN HIJOS DE RESULTADOS CON LOS DATOS.

      //PERSONAJE 1
      resultado1.appendChild(imagen1);
      resultado1.appendChild(numero1);
      resultado1.appendChild(nombre1);
      resultado1.appendChild(especie1);
      resultado1.appendChild(estado1);
      resultado1.appendChild(genero1);
      resultado1.appendChild(origen1);
      resultado1.appendChild(episodios1);

      //PERSONAJE 2
      resultado2.appendChild(imagen2);
      resultado2.appendChild(numero2);
      resultado2.appendChild(nombre2);
      resultado2.appendChild(especie2);
      resultado2.appendChild(estado2);
      resultado2.appendChild(genero2);
      resultado2.appendChild(origen2);
      resultado2.appendChild(episodios2);
    });
}
