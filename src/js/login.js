const InputEmail = document.getElementById("email")
let Inputsenha = document.querySelector("#senha")
let bntEnviar = document.querySelector("#send")


let xhr = new XMLHttpRequest();




const loginForm = document.getElementById("login-usuario-form");


loginForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (document.getElementById("email").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo usuário!</div>";
    } else if (document.getElementById("senha").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo senha!</div>";
    } else {

        console.log(loginForm)
        const dadosForm = new FormData(loginForm);



        const dados = await fetch("/ecomerce/src/controllers/userLogin.php", {
            method: "POST",
            body: dadosForm
        });

        const resposta = await dados.json();

        console.log(resposta)

        localStorage.setItem('userData', JSON.stringify(resposta.user))

        if (resposta && localStorage.getItem("userData")) {
            window.location.href = "http://localhost/ecomerce/src/pages/home/";
        }





    }
});

async function sendRequest(data) {

    console.log(data)


    // var xhr = new XMLHttpRequest();

    // // Configura a solicitação para o método POST e o URL de destino
    // xhr.open("POST", "../controllers/userLogin.php");

    // // Define o cabeçalho para enviar dados no formato JSON
    // xhr.setRequestHeader("Content-Type", "application/json");

    // // Defina a função a ser executada quando a resposta for recebida
    // xhr.onload = function() {
    //   if (xhr.status === 200) {
    //     var response = JSON.parse(xhr.responseText);
    //     console.log(response);
    //   }
    // };

    // // Defina a função a ser executada em caso de erro
    // xhr.onerror = function() {
    //   console.log("Erro ao enviar a solicitação");
    // };

    // // Converte o objeto de dados em formato JSON antes de enviar
    var jsonData = JSON.stringify(data);

    // console.log(jsonData)
    // console.log(data)

    // // Envie a solicitação com os dados JSON
    // xhr.send(jsonData);


    const dados = await fetch('/ecomerce/src/controllers/userLogin.php', {
        method: "POST",
        body: jsonData
    });

    const resposta = await dados.json();

    console.log(resposta)

    if (resposta['erro']) {
        msgAlertErroLogin.innerHTML = resposta['msg']
    } else {
        // document.getElementById("dados-usuario").innerHTML = "Bem vindo " + resposta['dados'].nome + "<br><a href='sair.php'>Sair</a><br>";
        // loginForm.reset();
        // loginModal.hide();
        console.log("error")
    }







}

let btnshowCadastro = document.getElementById("BntCadastro")
let btnshowLogin = document.getElementById("BntLogin")

let showLogin = document.getElementById("showLogin")
let showCadastro = document.getElementById("showCadastro")



// função para ver tela de cadastro
btnshowCadastro.addEventListener("click", function () {

    showLogin.style.display = "none";
    showCadastro.style.display = "flex";
    showCadastro.style.flexDirection = "column";
    showCadastro.style.heighte = "100%";

})

function telalogin() {

    showCadastro.style.display = "none";
    showLogin.style.display = "flex";
    showLogin.style.flexDirection = "column";
}

btnshowLogin.addEventListener("click", telalogin)


const CadastroForm = document.getElementById("cadastro-usuario-form");


CadastroForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    // essa propriedade retorna a data atual 
    let dataAtual = new Date();
    // Essa propriedade retorna uma string contendo informações sobre o agente do usuário, que geralmente inclui o nome e a versão do navegador.
    let userAgent = navigator.userAgent;


    var dia = dataAtual.getDate();
    var mes = dataAtual.getMonth() + 1; // Os meses são indexados de 0 a 11, então adicionamos 1
    var ano = dataAtual.getFullYear();
    console.log(dia + "/" + mes + "/" + ano);



    const dadosForm = new FormData(CadastroForm);
    dadosForm.append('criacao', dia + "/" + mes + "/" + ano);
    dadosForm.append('Browser', userAgent);



    const dados = await fetch("/ecomerce/src/controllers/addUser.php", {
        method: "POST",
        body: dadosForm
    });

    const resposta = await dados.json();

    console.log(resposta)


    if (resposta) {
        telalogin()
    }








});