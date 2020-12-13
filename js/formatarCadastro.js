function radioVerify() {
    if($("#option1").prop("checked")) {
        let value1 = 
        `<input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">`
        document.getElementById('tipoArea').innerHTML = value1;
        let value2 = `<input type="text" name="cpf" placeholder="CPF" id = "cpf">`;
        document.getElementById('CPForCNPJ').innerHTML = value2;
        
        document.getElementById('cpf').style.width = "330px";

    } else if($("#option2").prop("checked")) {
        let value = `<input type="text" name="nome" id="nome" placeholder="Nome">`
        document.getElementById('tipoArea').innerHTML = value;
        document.getElementById('nome').style.width = "300px";
        
        
        let value2 = `<input type="text" name="cnpj" placeholder="CNPJ" id = "cnpj">`;
        document.getElementById('CPForCNPJ').innerHTML = value2;

        document.getElementById('cnpj').style.width = "330px";
    } else {
        let value = `<h3>Selecione o tipo de conta</h3>`;
        document.getElementById('tipoArea').innerHTML = value;

        let value2 = `<br>`;
        document.getElementById('CPForCNPJ').innerHTML = value2; 
    }
}

function ajeitarTelefone() {
    let telefone = String(document.getElementById("telefone").value);
    if (telefone != "") {
        while (true) {
            if (telefone.match(/^(\d|\(|\))+$/) == null || telefone.length > 11) {
                telefone = telefone.substring(0, telefone.length - 1);
            } else {
                break;
            }
        }
    }
    document.getElementById("telefone").value = telefone;
}

function formatarNumero() {
    let num = String(document.getElementById("numeroR").value);
    if (num != "" && num != null) {
        while (true) {
            if (num.match(/^(\d)*$/) == null || num.length > 10) {
                num = num.substring(0, num.length - 1);
            } else {
                break;
            }
        }
    }
    document.getElementById("numeroR").value = num;
}

function verificarEmail() {
    let email = document.getElementById("email").value;
    if(email.match(/^\S+@\w+\.\w{2,6}(\.\w{2})?/) != null) {
        document.getElementById("veriEmail").setAttribute("class", "veriVerde");
    } else {
        document.getElementById("veriEmail").setAttribute("class", "veriVermelho");
    }
}

function fortificacaoSenha() {
    let senha = document.getElementById("senha").value;
    
    if(senha.match(/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%!^&*]).{6,20}$/) != null) {
        document.getElementById("veriSenha").setAttribute("class", "veriVerde");
    } else if (senha.match(/^(?=.*[A-Z])(?=.*[a-z]).{6,20}$/)) {
        document.getElementById("veriSenha").setAttribute("class", "veriAmarelo");
    } else {
        document.getElementById("veriSenha").setAttribute("class", "veriVermelho");
    }
    $("#exemplo").tooltip('show');
}

function confirmarSenha() {
    let senhaConfirm = document.getElementById("confsenha").value;
    let senha = document.getElementById("senha").value;
    if(senhaConfirm == senha) {
        document.getElementById("veriConfSenha").setAttribute("class", "veriVerde");
        console.log("confirmar verde")
    } else {
        document.getElementById("veriConfSenha").setAttribute("class", "veriVermelho");
        console.log("confirmar vermelho")
    }
}