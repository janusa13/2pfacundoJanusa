function consulta() {
  var gener1;
  var gener2;
  // consulta a la API RandomUse
  fetch("https://randomuser.me/api/")
    .then((response) => response.json())
    .then((data1) => {
      console.log(data1);
      // creación del HTML de RandomUser
      let genero1 = document.createElement("p");
      genero1.textContent = "genero: " + data1.results[0].gender;
      let nombre1 = document.createElement("h3");
      nombre1.textContent = "Nombre: " + data1.results[0].name.first;
      let apellido1 = document.createElement("h3");
      apellido1.textContent = "Apellido: " + data1.results[0].name.last;
      let latitud1 = document.createElement("p");
      latitud1.textContent =
        "Latitud: " + data1.results[0].location.coordinates.latitude;
      let longitud1 = document.createElement("p");
      longitud1.textContent =
        "Longitud: " + data1.results[0].location.coordinates.longitude;
      let imagen1 = document.createElement("img");
      imagen1.src = data1.results[0].picture.large;

      // Obtener el elemento donde se agregarán los elementos creados
      let resultado1 = document.getElementById("resultado1");
      //vaciar resultados
      resultado1.innerHTML = "";

      // Creación de hijos de Resultados de RandomUser
      resultado1.appendChild(genero1);
      resultado1.appendChild(nombre1);
      resultado1.appendChild(apellido1);
      resultado1.appendChild(latitud1);
      resultado1.appendChild(longitud1);
      resultado1.appendChild(imagen1);
      console.log(genero1);

      if (genero1.textContent == "genero: male") {
        gener1 = true;
        resultado1.classList.remove("genero-female");
        resultado1.classList.add("genero-male");
      } else {
        gener1 = false;
        resultado1.classList.remove("genero-male");
        resultado1.classList.add("genero-female");
      }

      /*Math.random() genera un número decimal aleatorio entre 0 (incluido) y 1 (excluido). 
  Al multiplicarlo por 825, obtendrás un número aleatorio entre 0 y 825. Luego, al usar Math.round(),
  se redondea al número entero más cercano.
  Al sumarle 1, obtendrás un número aleatorio entre 1 y 826.*/
      let randomNumber = Math.round(Math.random() * 825) + 1;
      fetch("https://rickandmortyapi.com/api/character/" + randomNumber)
        .then((response) => response.json())
        .then((data2) => {
          console.log(data2);

          let nombre2 = document.createElement("p");
          nombre2.textContent = "Nombre: " + data2.name;
          let especie2 = document.createElement("p");
          especie2.textContent = "Especie: " + data2.species;
          let genero2 = document.createElement("p");
          genero2.textContent = "Género: " + data2.gender;
          let origen2 = document.createElement("p");
          origen2.textContent = "Origen: " + data2.location.name;
          let imagen2 = document.createElement("img");
          imagen2.src = data2.image;
          imagen2.id = "imagenApi";
          imagen2.classList.add("imagen-redonda");

          let resultado2 = document.getElementById("resultado2");

          resultado2.innerHTML = "";

          resultado2.appendChild(nombre2);
          resultado2.appendChild(especie2);
          resultado2.appendChild(genero2);
          resultado2.appendChild(origen2);
          resultado2.appendChild(imagen2);

          if (genero2.textContent == "Género: Male") {
            gener2 = true;
            resultado2.classList.remove("genero-female");
            resultado2.classList.add("genero-male");
          } else {
            gener2 = false;
            resultado2.classList.remove("genero-male");
            resultado2.classList.add("genero-female");
          }
          if (gener1 == gener2) {
            let coincide = document.createElement("h2");
            coincide.textContent = "Hay coincidencia";

            let coin = document.getElementById("coin");
            coin.innerHTML = "";
            coin.appendChild(coincide);
          } else {
            let coincide = document.createElement("h2");
            coincide.textContent = "No Hay coincidencia";
            let coin = document.getElementById("coin");
            coin.innerHTML = "";
            coin.appendChild(coincide);
          }
        });
    });
}
