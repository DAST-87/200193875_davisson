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
                border: solid 2px #DCDCDC; 
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
                <li>Home</li>
                <li>Quem Somos</li>
                <li>Contato</li>
                <li>Localização</li>
            </ul>    
        </nav>    
        <div class="content">
            <div class="container_prod">

            <?php
                include('pages/home.php');
            ?>

            </div>

        </div>
        <footer>
            RA: 20019387-5 Davisson Stefesson
        </rodapé>    
    </body>
</html>
