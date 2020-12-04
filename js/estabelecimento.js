

function showHistorico(){
    document.getElementById('historico').classList.add('visivel');
    document.getElementById('box').classList.add('fundo');
   
}

function editarCardapio(){
    document.getElementById('cardapio').classList.add('visivel');
    document.getElementById('box').classList.add('fundo');

}
function editarPerfil(){
    document.getElementById('perfil').classList.add('visivel');
    document.getElementById('box').classList.add('fundo');
}

function fecharAba(){
    document.getElementById('historico').classList.remove('visivel');
    document.getElementById('cardapio').classList.remove('visivel');
    document.getElementById('perfil').classList.remove('visivel');
    document.getElementById('box').classList.remove('fundo');
}