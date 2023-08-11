<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TipoProduto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="glider.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="produtos.css" />
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
                    <li><a href="http://localhost/ecomerce/src/pages/home/" style="text-decoration:none; color:white">
                            Home</a></li>
                    <li><a href="http://localhost/ecomerce/src/pages/produtosTodos/"
                            style="text-decoration:none; color:white">Produtos</a></li>
                    <li> <a href="http://localhost/ecomerce/src/pages/carrinho/"
                            style="text-decoration:none; color:white">Carrinho</a></li>
                    <li><a href="http://localhost/ecomerce/src/controllers/sair.php/"
                            style="text-decoration:none; color:white">Sair</a></li>

                </ul>
            </div>



            <div class="toggle_btn" id="bnt">
                <i class="fa-solid fa-bars"></i>
            </div>

        </div>



        <div class="dropdown_menu " id="dropdown_menu">
            <li><a href="http://localhost/ecomerce/src/pages/home/"> Home</a></li>
            <li><a href="http://localhost/ecomerce/src/pages/produtosTodos/">Produtos</a></li>
            <li> <a href="http://localhost/ecomerce/src/pages/carrinho/">Carrinho</a></li>
            <li><a href="http://localhost/ecomerce/src/controllers/sair.php/">Sair</a></li>
        </div>


    </div>

    <div class="btn-group animate__animated animate__fadeInRight textobreadcrumb" id="textobreadcrumb">
        <!-- <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=Maquiagens"
            style="text-decoration:none; color:white" class="btn active">

            Maquiagem

        </a>
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=ProdutosSalao"
            style="text-decoration:none; color:white" class="btn  active">Produto de

            Salão

        </a>
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=CremesCabelo"
            style="text-decoration:none; color:white" class="btn active">


            Cremes
            para
            cabelo

        </a> -->
    </div>

    <!-- corpo da pagina ------------------------------------------------------------- -->

    <div class="container_corpo_pagina">

        <div class="corpo_pagina">




            <!-- corpo contendo produtos -->
            <div class="corpo_pagina_corpoDEPARTAMENTOS">

                <div class="containealgunsProdutos">



                    <h2 id="tituloPage"> </h2>





                    <div class="content_algunsProdutos">

                    </div>


                </div>

            </div>



        </div>
    </div>

    <!-- footer------------------------------------------------- -->

    <?php include_once '../../partials/footer.php' ?>


    <script src="../../js/produtosTypo.js"></script>


</body>

</html>