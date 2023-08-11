// svript para aparecer e sumir Navbar

const toggleBtn = document.getElementById('bnt');
const dropdownMenu = document.getElementById('dropdown_menu');
let contetRenderizar = document.querySelector(".glider");
let bntAddComent = document.getElementById("BNTADDCOMENT")

let proprioscomentarios = document.querySelector(".proprioscomentarios")

let primeiraimagCarrocel = document.getElementById("primeiraimagem")
let segundaimagCarrocel = document.getElementById("segundairaimagem")
let terceiraimagCarrocel = document.getElementById("terceirairaimagem")
let buscafront = document.getElementById("ferramentadebusca")




function tamanhotela() {
    let tamanhodatela = window.innerWidth;
    // console.log(tamanhodatela);

    if (tamanhodatela <= 683) {
        primeiraimagCarrocel.src = '../../assets/primeiraMobile.png';
        segundaimagCarrocel.src = '../../assets/segundaMobile.png';
        terceiraimagCarrocel.src = 'nova-imagem.jpg';
        buscafront.innerHTML = `
        <div></div>
        `
    }
    if (tamanhodatela > 683) {
        primeiraimagCarrocel.src = '../../assets/2.png';
        segundaimagCarrocel.src = '../../assets/1.png';
        terceiraimagCarrocel.src = '../../assets/4.png';
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



// console.log(tamanhotela())


toggleBtn.addEventListener('click', function () {
    dropdownMenu.classList.toggle("open")
});




let input = document.getElementById("inputComentario");

bntAddComent.addEventListener('click', async function () {
    var valor = input.value;
    console.log(valor)

    const dadosguardadosSstring = localStorage.getItem("userData");
    let dadosguardados = JSON.parse(dadosguardadosSstring)
    console.log(dadosguardados)

    const formData = new FormData();
    formData.append('comentario', valor);
    formData.append('nome', dadosguardados.nome);
    formData.append('id', dadosguardados.id_users);

    // const ArrayNewObjSend = {
    //     comentario: valor,
    //     nome: dadosguardados.nome,
    //     id: dadosguardados.id_users
    // };


    const dados = await fetch("/ecomerce/src/controllers/setComent.php", {
        method: "POST",
        body: formData,

    });

    const resposta = await dados.json();

    if (resposta) {
        location.reload()
    }

});


async function CallComents() {
    const dados = await fetch('/ecomerce/src/controllers/getAllComents.php', {
        method: 'GET',
    });

    const resposta = await dados.json();

    // console.log(resposta);

    resposta[0].forEach(item => {
        // console.log(item);
        renderizarcOMENTARIOS(item);
    }) // Verifique o formato da resposta recebida

    if (resposta.erro) {
        console.log(resposta.msg);
    } else {
        // Verifique o formato correto da resposta e ajuste o código abaixo conforme necessário

        if (Array.isArray(resposta)) {
            resposta[0].forEach(item => {
                console.log(item);
                renderizarcOMENTARIOS(item);
            });
            // } else if (typeof resposta === 'object') {
            //     Object.values(resposta).forEach(item => {
            //         console.log(item);
            //         renderizarcOMENTARIOS(item);
            //     });
        }
    }
}





window.onload = async () => {
    const dados = await fetch('/ecomerce/src/controllers/getAllProducts.php', {
        method: "GET",
    });

    const resposta = await dados.json();

    // console.log(resposta)


    let novoArrayProdutos = [];

    for (let index = 0; index < resposta[0].length; index++) {
        // const element = array[index];
        let randomIndex = Math.floor(Math.random() * resposta[0].length);

        // console.log(randomIndex)
        novoArrayProdutos.push(resposta[0][randomIndex]);

    }

    // console.log(novoArrayProdutos)

    novoArrayProdutos.slice(0, 12).map((item, index) => {
        renderizarProdutos(item)

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
            }
        }]
    });

    tamanhotela()

    if (resposta['erro']) {
        console.log(resposta['msg'])
    }


    CallComents()
};



function renderizarProdutos(produtos) {


    // console.log(produtos)

    let itens = document.createElement("div");

    itens.classList.add("item_algunsProdutos");
    itens.innerHTML =
        `
    <a href="http://localhost/ecomerce/src/pages/produtoUnico?id=${produtos.id}" class="item_algunsProdutos">
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


        <h4>Comprar</h4>
    </a>
    
    `;

    contetRenderizar.appendChild(itens)
}


let btnexcluir = document.querySelector(".cardDelet")
btnexcluir.addEventListener('click', async function () {
    console.log("clicado")

    const dadosguardadosSstring = localStorage.getItem("userData");
    let dadosguardados = JSON.parse(dadosguardadosSstring)

    const formData = new FormData();
    formData.append('id', dadosguardados.id_users);


    const dados = await fetch("/ecomerce/src/controllers/deletComent.php", {
        method: "POST",
        body: formData,
    });

    const resposta = await dados.json();

    if (resposta) {
        location.reload()
    }


    if (resposta['erro']) {
        console.log(resposta['msg'])
    }

});



function renderizarcOMENTARIOS(ITEM) {
    // console.log(ITEM)

    const dadosguardadosSstring = localStorage.getItem("userData");
    let dadosguardados = JSON.parse(dadosguardadosSstring)


    // console.log(dadosguardados)

    // console.log(dadosguardados.id_users == ITEM.id_user)


    let itens = document.createElement("div");

    itens.classList.add("cardComentario");
    itens.innerHTML =
        `
        <span>${ITEM.NOME}</span>
        <div>
            
               ${ITEM.COMENTARIO}
            
        </div>
        ${dadosguardados.id_users == ITEM.ID ? `<span ><i class="fa-solid fa-trash"></i></span>` : ``}
    
    `;

    proprioscomentarios.appendChild(itens)
}