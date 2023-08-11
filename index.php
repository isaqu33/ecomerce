<?php include_once './src/config/config.php' ?>

<?php
if (!isset($_SESSION['userLogged'])) {
    header("Location: src/pages/login");
} else
    (
        header("Location: http://localhost/ecomerce/src/pages/home/")
    )
        ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="/src/favicon.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>ecomerce</title>
    </head>

    <body>


        <script>
            import { apply } from 'twind';

            // Aplicar estilos ao carregar a página
            window.addEventListener('DOMContentLoaded', () => {
                apply();
            });
        </script>
    </body>

    </html>