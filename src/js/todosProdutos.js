const toggleBtn = document.getElementById('bnt');
const dropdownMenu = document.querySelector(".dropdown_menu")


toggleBtn.addEventListener('click', function () {
    dropdownMenu.classList.toggle("open")
});


let primeiraimagCarrocel = document.getElementById("primeiraimagem")
let segundaimagCarrocel = document.getElementById("segundairaimagem")
let terceiraimagCarrocel = document.getElementById("terceirairaimagem")
let buscafront = document.getElementById("ferramentadebusca")




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



let contetRenderizar = document.querySelector(".content_algunsProdutos");
window.onload = async () => {

    tamanhotela()
    const dados = await fetch('/ecomerce/src/controllers/getAllProducts.php', {
        method: "GET",
    });

    const resposta = await dados.json();


    resposta[0].map((item, index) => {
        renderizarProdutos(item)

    })




    if (resposta['erro']) {
        console.log(resposta['msg'])
    }



};







function renderizarProdutos(produtos) {


    console.log(produtos)

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
        


        <a href="http://localhost/ecomerce/src/pages/produtoUnico?id=${produtos.id}" style="text-decoration:none;  ">Ver produto</a>
    </div>
    
    `;

    contetRenderizar.appendChild(itens)
}