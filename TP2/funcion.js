function consulta() {
    fetch('https://rickandmortyapi.com/api/character')
    .then(function (response) {
        return response.json()
    })
    .then(function (data) {
        console.log(data);
    })
    
}