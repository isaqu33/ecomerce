const toggleBtn = document.getElementById('bnt');
const dropdownMenu = document.querySelector(".dropdown_menu")
// let contetRenderizar = document.querySelector(".content_algunsProdutos");
let buscafront = document.getElementById("ferramentadebusca")

toggleBtn.addEventListener('click', function () {
    dropdownMenu.classList.toggle("open")
});

const botaoexcluir = document.getElementById('total');


const excluircarrinho = document.getElementById('esvaziarcarrinho');



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

// excluircarrinho.addEventListener('click', async function () {
//     const dados = await fetch('/ecomerce/src/controllers/deletcarrinho.php', {
//         method: "GET",
//     });

//     const resposta = await dados.json();

//     console.log(resposta)

//     location.reload()


// });

let contetRenderizar = document.getElementById("container_produtos_corpo_carrinho");
window.onload = async () => {
    const dados = await fetch('/ecomerce/src/controllers/getAllProdutosCarrinho.php', {
        method: "GET",
    });

    const resposta = await dados.json();

    console.log(resposta)


    resposta[0].map((item, index) => {
        renderizarProdutos(item)

    })

    calcularTotal(resposta[0])






    if (resposta['erro']) {
        console.log(resposta['msg'])
    }
};


function calcularTotal(valores) {
    let total = valores.reduce((acumulador, valorAtual) => {
        let numero = parseFloat(valorAtual.preco.replace(',', '.'));
        return acumulador + numero;
    }, 0);

    console.log(total);

    botaoexcluir.innerHTML = `R$ ${total}`
}







function renderizarProdutos(produtos) {


    console.log(produtos)

    let itens = document.createElement("div");

    itens.classList.add("cardProduto");


    itens.innerHTML =
        `
        <div class="cardProdutoPhoto">
        <img src="${produtos.imagem}" alt="">
    
    </div>
    
    
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
    
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> ${produtos.titulo}</td>
                <td><em>R$ ${produtos.preco}
                    </em></td>
                <td>1</td>
                <td>${produtos.preco}</td>
    
            </tr>
    
        </tbody>
    </table>
    
    `;

    contetRenderizar.appendChild(itens)
}