let tituloTexto = document.getElementById("tituloPage")


const toggleBtn = document.getElementById('bnt');
const dropdownMenu = document.getElementById('dropdown_menu');
// let contetRenderizar = document.querySelector(".content_algunsProdutos");

toggleBtn.addEventListener('click', function () {
    dropdownMenu.classList.toggle("open")
});

let primeiraimagCarrocel = document.getElementById("primeiraimagem")
let segundaimagCarrocel = document.getElementById("segundairaimagem")
let terceiraimagCarrocel = document.getElementById("terceirairaimagem")
let buscafront = document.getElementById("ferramentadebusca")


let corDeFundo = ""




function tamanhotela() {
    let tamanhodatela = window.innerWidth;
    // console.log(tamanhodatela);

    console.log("ffjhjhb")

    if (tamanhodatela <= 683) {
        // primeiraimagCarrocel.src = '../../assets/primeiraMobile.png';
        // segundaimagCarrocel.src = '../../assets/segundaMobile.png';
        // terceiraimagCarrocel.src = 'nova-imagem.jpg';
        buscafront.innerHTML = `
        <div></div>
        `
    }
    if (tamanhodatela > 683) {
        // primeiraimagCarrocel.src = '../../assets/Designsemnome(2).png';
        // segundaimagCarrocel.src = '../../assets/Designsemnome(1).png';
        // terceiraimagCarrocel.src = '../../assets/Designsemnome.png';
        buscafront.innerHTML = `
        <form id="ferramentadebusca" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn " type="submit">Search</button>
                </form>
        `
    }
    return tamanhodatela;
}

window.addEventListener("resize", tamanhotela)
tamanhotela()




const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');
console.log(id);


let textoHender = ""



console.log(textoHender)


console.log(id == "ProdutosSalao")
console.log(id == "Maquiagens")

window.onload = () => {
    let showTypeViwe = document.getElementById("textobreadcrumb")

    showTypeViwe.innerHTML =
        `
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=Maquiagens"
            style="font-weight: bold; text-decoration:none; color:white; border-radius: 10px; background-color:${id =="Maquiagens"?"#5FBAB0":"#01fb8600"}" class="btn active">

            Maquiagem

        </a>
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=ProdutosSalao"
            style="font-weight: bold; text-decoration:none; color:white;border-radius: 10px; background-color:${id =="ProdutosSalao"?"#5FBAB0":"#01fb8600"}" class="btn  active">Produto de

            Salão

        </a>
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=CremesCabelo"
            style="font-weight: bold; text-decoration:none; color:white;border-radius: 10px; background-color:${id =="CremesCabelo"?"#5FBAB0":"#01fb8600"}" class="btn active">


            Cremes
            para
            cabelo

        </a>
    
    `


};




let contetRenderizar = document.querySelector(".content_algunsProdutos");
// let itens = document.querySelector(".item_algunsProdutos");


const getprodutos = async (tipo) => {
    const dados = await fetch(`/ecomerce/src/controllers/getProductByType.php?tipo=${tipo}`, {
        method: "GET",
    });

    const resposta = await dados.json();

    console.log(resposta)


    resposta[0].map((item, index) => {
        renderizarProdutos(item)

    })




    if (resposta['erro']) {
        console.log(resposta['msg'])
    }
};





function renderizarProdutos(produtos) {


    let contetRenderizar = document.querySelector(".content_algunsProdutos");

    let itens = document.createElement("div");

    itens.classList.add("item_algunsProdutos");
    itens.innerHTML =
        `
    <div  class="item_algunsProdutos">
        <div class="img_item_algunsProdutos">

            <img src="${produtos.imagem}" alt="">

        </div>
        <h5>${produtos.titulo}</h5>
        <div id="valoravista">

                A vista
                <div style="text-decoration:none; color:#5FBAB0; font-size: 20px; border-radius: 20px; margin-right: 10px;margin-left: 10px;"  >
                    R$ ${produtos.preco    }
                </div>
                no Pix ou Boleto
                    
                </div>
        


        <a href="http://localhost/ecomerce/src/pages/produtoUnico?id=${produtos.id}" style="text-decoration:none; color:white; ">Ver Produto</a>
    </div>
   
    
    `;

    contetRenderizar.appendChild(itens)
}

switch (id) {
    case "Maquiagens":
        textoHender = "Produtos de Maquiagens "
        tituloTexto.innerHTML = textoHender;
        getprodutos("Maquiagens")
        break;
    case "ProdutosSalao":
        textoHender = "Produtos de salão "
        tituloTexto.innerHTML = textoHender;
        getprodutos("Produtos de salão")
        break;
    case "CremesCabelo":
        textoHender = "Cremes para Cabelo "
        tituloTexto.innerHTML = textoHender;
        getprodutos("Cremes para Cabelo")
        break;

}