function consulta() {
    fetch('https://rickandmortyapi.com/api/character/1')
    .then(function (response) {
        return response.json()
    })
    .then(function (data) {
        console.log(data.name);
    })
    
}