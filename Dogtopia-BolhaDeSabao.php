<?php

if(isset($_POST['submit'])){

    
   $nomepet = $_POST['nomepet'];
   $racapet = $_POST['racapet'];
$data = $_POST['data'];
    $tipopet = $_POST['tipopet'];
    $msg = $_POST['msg'];

  
  include_once('conexao.php');
    $result = mysqli_query($conexao, "INSERT INTO agendamento_a3(nomepet,racapet,data_agendamento,pergunta,mensagem_agendamento) 
    VALUES ('$nomepet','$racapet','$data','$tipopet','$msg')");


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="logoPNG.png" type="image/x-icons"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogtopia - Bolha de Sabão</title>
    <link rel="stylesheet" href="dogtopia.css">
</head>
<body class="pacotes">
    <div class="header-pacote">
        <header >
            
            <img src="logoPNG.png" alt="" class="header-img" >
            <nav class="navegacao">
                <a href="http://127.0.0.1:5500/dogtopia-home.html">Home</a>
                <a href="http://127.0.0.1:5500/dogtopia-sobre.html">Sobre</a>
                <a href="http://127.0.0.1:5500/dogtopia-servicos.html">Serviços</a>
                <a href="http://127.0.0.1:5500/dogtopia-contato.html">Contato</a>
                <a href="http://127.0.0.1:5500/dogtopia-jogo-da-sorte.html">Promoção</a>
                <button class="botaoLogin">Login</button>
            </nav>
        </header></div>
        <div class="wrapper-pacotes">
            <div class="infos-pacote">  
                <h4>Bolha de Sabão</h4>
               
                <p class="obs">2 banhos + 1 Hidratação + 1 Tosa Higiênica + 
                    Corte de Unhas + limpeza de orelhas + Penteado</p>
        
                <p>PELAGEM CURTA</p>
               
                <ul>
                    <li>Porte pequeno: R$130,00</li>
                    <li >Porte médio: R$170,00</li>
                    <li>Porte grande: R$200,00</li>
                </ul>
          
   
                <p>PELAGEM MÉDIA</p>
                <ul>
                    <li>Porte pequeno: R$150,00</li>
                    <li>Porte médio: R$190,00</li>
                    <li>Porte grande: R$250,00</li>
                </ul>
       
                <p>PELAGEM LONGA</p>
                <ul>
                    <li>Porte pequeno: R$180,00</li>
                    <li>Porte médio: R$230,00</li>
                    <li>Porte grande: R$280,00</li>
                </ul>
            </div>
            
            <div class="agendamento-pacote">
                
            <form action="Dogtopia-BolhaDeSabao.php" method="POST" id="formAgendamento">
                    <h4>Agendamento</h4>
                    <label for="nomepet">Nome do Pet:</label> 
                    <input type="text" id="nomepet" name="nomepet" required>
                    <label for="name">Raça do Pet:</label>
                    <input type="text" id="racapet" name="racapet" required>
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" required>
                    <p> O seu pet é agressivo? </p>
                    <input type="radio" name = "tipopet" value="1" required>  Sim
                    <input type="radio" name = "tipopet" value="0" required>  Não <br><br><br>
                    <label for="msg">Mensagem:</label><br>
                    <textarea id="msg" name="msg"> </textarea>
                    <button type="submit" name="submit" class="botaoEnviar-pacotes">Enviar</button>
                    </form>
                    
                    
                    
            </div>
        </div>
        <div class="mensagem-sucesso" id="mensagemSucesso">
            Agendamento realizado com sucesso!
        </div>
        <script>
           
            
            const form = document.getElementById("formAgendamento");
            const mensagemSucesso = document.getElementById("mensagemSucesso");
    
            
            function mostrarMensagem() {
                mensagemSucesso.style.display = "block";
                setTimeout(() => {
                    mensagemSucesso.style.display = "none";
                }, 3000); 
            }
    
           
            form.addEventListener("submit", function(event) {
               
                mostrarMensagem(); 
                
            });
           
        </script>
</body>
</html>