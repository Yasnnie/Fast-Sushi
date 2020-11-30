function getEstados() {
    $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados', function (estados = []) {
        let value = "<option value=\"\">Selecione</option>";

        for(let i = 0; i < estados.length; i++) {
            value += `<option id = ${estados[i].id} value=\"\">${estados[i].nome}</option>`;
        }
        document.getElementById("labelEstados").innerHTML = value;
    });
}

function getCidades(id_estado) {
    $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${id_estado}/municipios`, function(cidades) {
        // cidades é um array de cidades do estado
    })
}