<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Doces Caseiros</title>

        <style>
            body{
                margin: 0;
            }
            header{
                height: 180px;
                background-color: orange;
                text-align: center;
                padding: 20px;
            }
            .logo{
                height: 180px;
                
            }
            nav{
                background-color: #8B4513;
            }
            nav ul{
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
            }
            nav ul li{
                padding: 20px 50px 20px 50px;
                list-style: none;
                color: white;
                font-family: Montserrat;
                font-size: 20px;
            }
            nav ul li a{
                text-decoration: none;
                color: white;
            }
            .content{
                min-height: 600px;
            }
            footer{
                display: flex;
                background-color: #DCDCDC;
                min-height: 60px;
                padding: 20px 50px 10px 50px;
                justify-content: center;
                font-family: Montserrat;
            }
            .container_prod{
                display: flex;
                flex-wrap: wrap;
                max-width: 800px;
                margin: auto;
                padding-top: 50px;
            }
        </style>

    </head>    
    <body> 
        <header>
            <img src="imagens/logo.png" class="logo">
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page-quem_somos">Quem Somos</a></li>
                <li><a href="index.php?page-contato">Contato</a></li>
                <li>Localização</li>
            </ul>    
        </nav>    
        <div class="content">
            <div class="container_prod">

            <?php

            $page = "home.php";
                if(isset($_GET['page'])){
                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include('pages/home.php');
            ?>

            </div>

        </div>
        <footer>
            RA: 20019387-5 Davisson Stefesson
        </rodapé>    
    </body>
</html>
