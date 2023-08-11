let tituloTexto = document.getElementById("tituloPage")


const toggleBtn = document.getElementById('bnt');
const dropdownMenu = document.getElementById('dropdown_menu');
let contetRenderizar = document.querySelector(".glider");
// let contetRenderizar = document.querySelector(".content_algunsProdutos");

toggleBtn.addEventListener('click', function () {
    dropdownMenu.classList.toggle("open")
});

let primeiraimagCarrocel = document.getElementById("primeiraimagem")
let segundaimagCarrocel = document.getElementById("segundairaimagem")
let terceiraimagCarrocel = document.getElementById("terceirairaimagem")
let buscafront = document.getElementById("ferramentadebusca")




let identificadordepagina = document.getElementById("breadcrumb")




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







async function addCarrinho() {

    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    console.log(id);


    const formData = new FormData();
    formData.append('id', id);

    // const ArrayNewObjSend = {
    //     comentario: valor,
    //     nome: dadosguardados.nome,
    //     id: dadosguardados.id_users
    // };


    const dados = await fetch("/ecomerce/src/controllers/addCarrinho.php", {
        method: "POST",
        body: formData,

    });

    const resposta = await dados.json();

    console.log(resposta)

    if (resposta) {
        window.location.href = 'http://localhost/ecomerce/src/pages/carrinho/';
    }

};




const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');
console.log(id);


let textoHender = ""





window.onload = async () => {
    const dados = await fetch(`/ecomerce/src/controllers/getProductById.php?id=${id}`, {
        method: "GET",
    });

    const resposta = await dados.json();

    console.log(resposta)

    // console.log(resposta[0][0].id)


    renderizarProdutos(resposta[0][0])

    // resposta[0].map((item, index) => {
    //     renderizarProdutos(item)
    // })
    tamanhotela()
    const produtos = await fetch('/ecomerce/src/controllers/getAllProducts.php', {
        method: "GET",
    });

    const respostaprodutos = await produtos.json();


    respostaprodutos[0].map((item, index) => {
        renderizarProdutostodos(item)

    })

    new Glider(document.querySelector('.glider'), {
        // Mobile-first defaults
        slidesToShow: 1,
        slidesToScroll: 1,
        scrollLock: true,
        dots: '#dots',
        draggable: true,
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [{
            // screens greater than >= 775px
            breakpoint: 775,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 'auto',
                slidesToScroll: 'auto',
                //   itemWidth: 150,
                duration: 0.25,
                scrollLock: true,
            }
        }, {
            // screens greater than >= 1024px
            breakpoint: 1024,

            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                //   itemWidth: 150,
                duration: 0.25,
                scrollLock: true,
                dots: '#dots',
                draggable: true,
            }
        }]
    });


    if (resposta['erro']) {
        console.log(resposta['msg'])
    }


    identificadordepagina.innerHTML = `
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" style="text-decoration:none; color:#421e57">Home</a></li>

                <li class="breadcrumb-item"><a href="#" style=" font-weight: bold; text-decoration:none; color:#421e57">Produtos</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="#"
                        style="text-decoration:none; color:#5FBAB0">${resposta[0][0].titulo}</a></li>
               
            </ol>
    
    
    `
};





function renderizarProdutos(produtos) {

    console.log("first")

    console.log(parseInt(produtos.preco) / 12)
    const numero = parseInt(produtos.preco) / 12;

    const numeroArredondado = Number(numero.toFixed(2));
    const numeroFormatado = numeroArredondado.toLocaleString('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    });

    console.log(numeroFormatado); // Saída: R$ 0,66




    let itens = document.createElement("div");

    itens.classList.add("containerProduto");
    itens.innerHTML =
        `
        <div class="img_item_containerProduto">

            <img src="${produtos.imagem }"
                alt=""
                
                >

        </div>
        <div class="containerProduto_info">
            <span style="text-decoration:none; color:#9976A6; font-size: 25px">
                

                ${produtos.titulo }
                
            </span>

            
                <div id="valoravista">

                A vista
                <div style="text-decoration:none; color:#5FBAB0; font-size: 26px; border-radius: 20px; margin-right: 10px;margin-left: 10px;"  >
                    R$ ${produtos.preco    }
                </div>
                no Pix ou Boleto
                    
                </div>
                <div id="valordividido">

                Em até 12x de <div style="text-decoration:none; color:#5FBAB0; font-size: 26px; border-radius: 20px; margin-right: 10px;margin-left: 10px;"  >
                ${numeroFormatado   }
            </div> com juros
                    
                </div>

                <div id="containerbtnEimput">
                <input type="number" id="tentacles" name="tentacles" min="1" max="10" value="1"/>
             <div id="btnAddCarrinho" 
             onclick="addCarrinho()"
             >Comprar</div>
                
                </div>
            






        </div>
    
    
    `;

    let bodyPagina = document.getElementById("corpoPagina")

    bodyPagina.appendChild(itens)

    let iten = document.createElement("div");

    iten.classList.add("container_descricao");
    iten.innerHTML = `

    <span>
            Descrição
        </span>

        <div>
            <p>
            ${produtos.descricao}
            </p>
        </div>
    
    `;

    // let bodyPagina = document.getElementById("corpoPagina")

    bodyPagina.appendChild(iten)

    // contetRenderizar.appendChild(itens)
};

function renderizarProdutostodos(produtos) {


    // console.log(produtos)

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
                <div style="text-decoration:none; color:#05f625; font-size: 20px; border-radius: 20px; margin-right: 10px;margin-left: 10px;"  >
                    R$ ${produtos.preco    }
                </div>
                no Pix ou Boleto
                    
                </div>


       


        <a href="http://localhost/ecomerce/src/pages/produtoUnico?id=${produtos.id}" style="text-decoration:none; color:white; ">Ver Produto</a>
    </div>
    
    `;

    contetRenderizar.appendChild(itens)
}