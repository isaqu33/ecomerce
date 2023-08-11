<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="casa.css" />
    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="glider.css">
</head>


<body>

    <div class="containerHeader">

        <div class="body_containerHeader animate__animated animate__backInLeft animate__bounce animate__delay-0s ">
            <i class="fa-solid fa-group-arrows-rotate"></i>

            <!-- <nav class="navbar navbar-light bg-light"> -->


            <div id="ferramentadebusca" class="container-fluid">
                <!-- <form id="ferramentadebusca" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>


            <!-- </nav> -->
            <div class="containerItens_containerHeader">
                <ul class="OL_containerItens_containerHeader">
                    <li><a href="http://localhost/ecomerce/src/pages/home/"> Home</a></li>
                    <li><a href="http://localhost/ecomerce/src/pages/produtosTodos/">Produtos</a></li>
                    <li> <a href="http://localhost/ecomerce/src/pages/carrinho/">Carrinho</a></li>
                    <li><a href="http://localhost/ecomerce/src/controllers/sair.php/">Sair</a></li>

                </ul>
            </div>



            <div class="toggle_btn" id="bnt">
                <i class="fa-solid fa-bars"></i>
            </div>

        </div>



        <div class="dropdown_menu" id="dropdown_menu">
            <li><a href="http://localhost/ecomerce/src/pages/home/"> Home</a></li>
            <li><a href="http://localhost/ecomerce/src/pages/produtosTodos/">Produtos</a></li>
            <li> <a href="http://localhost/ecomerce/src/pages/carrinho/">Carrinho</a></li>
            <li><a href="http://localhost/ecomerce/src/controllers/sair.php/">Sair</a></li>
        </div>

        <!-- imagem reader home -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="primeiraimagem" src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img id="segundairaimagem" src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img id="terceirairaimagem" src="" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--  -->

    <!-- <main class="animate__animated animate__fadeInLeft textoProdutos">

        <h1 class="c"> Nossas Categorias</h1>

    </main> -->


    <!-- body home -->
    <!-- <div class="textoProdutos">

        <h1> </h1>
    </div> -->

    <div class="containerPrincipaisProdutos animate__animated animate__fadeInUp animate__delay-0,5s">
        <div class="content_containerPrincipaisProdutos">
            <main class="animate__animated animate__fadeInLeft textoProdutos">

                <h1> Nossas Categorias</h1>

            </main>

            <div class="cardPrincipaisProdutos ">

                <div class=" backimgMasculinas">
                </div>
                <span class="detalhes_cardPrincipaisProdutos"> <a
                        href="http://localhost/ecomerce/src/pages/produtosTypo?id=Maquiagens">Maquiagens</a> </span>
            </div>
            <div class="cardPrincipaisProdutos ">
                <div class=" backimgMFemininas">
                </div>

                <span class="detalhes_cardPrincipaisProdutos"><a
                        href="http://localhost/ecomerce/src/pages/produtosTypo?id=ProdutosSalao">Produtos de
                        salão</a></span>
            </div>
            <div class="cardPrincipaisProdutos ">

                <div class=" backimgcalcados">
                </div>

                <span class="detalhes_cardPrincipaisProdutos"><a
                        href="http://localhost/ecomerce/src/pages/produtosTypo?id=CremesCabelo">Cremes para
                        Cabelo</a></span>
            </div>
        </div>



    </div>




    <!-- <div class="animate__animated animate__bounce animate__delay-2s">Example</div> -->



    <div class="qualidadesContainer">
        <div class="qualidadesContainer_card">

            <div class="qualidadesContainer_item">
                <i class="fa-solid fa-list imgIcone"></i>
                <h5>Opções de produtos</h5>
                <p>Escolha o que melhor atenda às suas necessidades

                </p>
            </div>

            <div class="qualidadesContainer_item">
                <i class="fa-solid fa-check imgIcone"></i>
                <h5>Finalize Sua Compra</h5>
                <p>Efetue o pagamento em nosso site para maior acessibilidade

                </p>
            </div>
        </div>
        <div class="qualidadesContainer_card">

            <div class="qualidadesContainer_item ">
                <i class="fa-solid fa-arrow-right imgIcone"></i>
                <h5>Aprovação da compra</h5>
                <p>Espere pela aprovação do meio de pagamento selecionado.

                </p>
            </div>

            <div class="qualidadesContainer_item">
                <i class="fa-regular fa-envelope imgIcone"></i>
                <h5>Pagamento aprovado</h5>
                <p>O código será enviado automaticamente para seu e-mai

                </p>
            </div>
        </div>
    </div>


    <div class="textoProdutos">
        <h1> Alguns de Nossos Produtos </h1>
    </div>

    <div class="contentglider">
        <!-- <button aria-label="Previous" class="glider-prev">«</button> -->
        <div class="glider">
            <!-- <div>your content here</div>
            <div>your content here</div>
            <div>your content here</div>
            <div>your content here</div> -->
        </div>

        <!-- <button aria-label="Next" class="glider-next">»</button>-->
        <div id="dots" class="glider-dots"></div>
    </div>

    <div class="containerImgPromo">

    </div>

    <!-- comentarios-------------------------------------------- -->

    <div class="Comentarios">

        <div class="textoProdutos">
            <h1> Comentarios </h1>
        </div>
        <div class="proprioscomentarios">



            <!-- <div class="cardComentario">
                <span>Maria</span>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos recusandae, aliquid hic aspernatur
                        id illo deserunt tempore non debitis labore dolorem atque veritatis beatae aliquam nobis unde
                        eius excepturi quasi.
                    </p>
                </div>

            </div> -->
        </div>



        <div class="cardComentarioAdd">
            <!-- <h5>
                Adicione um comentario
            </h5> -->


            <!-- <input type="text" id="inputComentario" placeholder="adicione um comentario"> -->
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Adicione um comentario</label>
            </div>

            <button id="BNTADDCOMENT">Adicionar</button>

            <!-- <div class="cardDelet">Excluir seus Comentario</div> -->
        </div>





    </div>

    <div class="containercardEntrega">
        <div class="containercardEntregaRapida">

        </div>
        <div class="containercardEntregaSegura">

        </div>
    </div>

    <!-- footer------------------------------------------------- -->

    <?php include_once '../../partials/footer.php' ?>




    <!-- <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/glide.min.js"></script>
    <script src="grid.js"></script> -->


    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script type="module" src="../../js/home.js">  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
<script src="glider.js"></script>

</html>