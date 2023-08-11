<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="glider.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="glider.css">
    <link rel="stylesheet" href="produtoUnico.css" />
</head>

<body>


    <div class="containerHeader">

        <div class="body_containerHeader animate__animated animate__backInLeft animate__bounce animate__delay-0s ">
            <i class="fa-solid fa-group-arrows-rotate"></i>

            <!-- <nav class="navbar navbar-light bg-light"> -->


            <div id="ferramentadebusca" class="container-fluid">

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
            <li><a href="http://localhost/ecomerce/src/pages/home/" style="text-decoration:none; color:white"> Home</a>
            </li>
            <li><a href="http://localhost/ecomerce/src/pages/produtosTodos/"
                    style="text-decoration:none; color:white">Produtos</a></li>
            <li> <a href="http://localhost/ecomerce/src/pages/carrinho/"
                    style="text-decoration:none; color:white">Carrinho</a></li>
            <li><a href="http://localhost/ecomerce/src/controllers/sair.php/"
                    style="text-decoration:none; color:white">Sair</a></li>
        </div>


    </div>
    <!-- 
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav> -->




    <div class="btn-group animate__animated animate__fadeInRight textobreadcrumb" id="textobreadcrumb">
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=Maquiagens"
            style="font-weight: bold;text-decoration:none; color:white" class="btn active">

            Maquiagem

        </a>
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=ProdutosSalao"
            style="font-weight: bold;text-decoration:none; color:white" class="btn  active">Produto de

            Salão

        </a>
        <a href="http://localhost/ecomerce/src/pages/produtosTypo?id=CremesCabelo"
            style="font-weight: bold; text-decoration:none; color:white" class="btn active">


            Cremes
            para
            cabelo

        </a>
    </div>

    <nav class="containerbreadcrumb animate__animated animate__fadeInLeft" aria-label="breadcrumb" id="breadcrumb">
        <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" style="text-decoration:none; color:#8015b1">Home</a></li>

                <li class="breadcrumb-item"><a href="#" style="text-decoration:none; color:#8015b1">Produtos</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="#"
                        style="text-decoration:none; color:#8015b1">producto</a></li>
               
            </ol> -->
    </nav>




    <!-- corpo da pagina -->




    <!-- <div class="containerProduto">

        <div class="img_item_algunsProdutos">

            <img src="https://www.luzacosmeticos.com.br/image/cache/catalog/produtos/liver/GEL%20LIVER%20300G%20FIX%20ROCHA%20ULTRA%20AZUL-610x610.jpg"
                alt="">

        </div>
        <div class="containerProduto_info">
            <span>
                <h2>

                    Sobretudo - Rosa
                </h2>
            </span>

            <span>
                <p>

                    
                    R$ 281,00
                </p>
            </span>



            <span>
                <button>
                    adiquirir

                </button>
            </span>



        </div>



    </div>

    <div  class='container_descricao'>
        <span>
            Descrição
        </span>

        <div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At cupiditate labore ex vero, repellendus temporibus itaque molestiae porro voluptas veritatis aliquid assumenda alias vel praesentium quas eveniet illum blanditiis omnis?
            </p>
        </div>
    </div> -->

    <div id="corpoPagina">


        <span>
            <button id="bntaddcarinho">


            </button>
        </span>

    </div>


    <div class="textoProdutos">
        <h1> Alguns Produtos Semelhantes </h1>
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

    <?php include_once '../../partials/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script src="../../js/produtounico.js"></script>


</body>
<!-- <script src="glider.js"></script> -->

</html>