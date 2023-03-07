<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="page">
        <div class="header">

            <div>
                    <img id="bandeira" src="brasil.jpg" alt="Bandeira brasil">
                
                    <p><span id="data"></span></p>
                    <script>
                        var dt = new Date();
                        const month = ["Janeiro","Fevereiro","Março","Abrio","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
                        document.getElementById("data").innerHTML = + (("0"+dt.getDate()).slice(-2)) +" de "+ month[dt.getMonth()] +" de "+ (dt.getFullYear());
                        </script>
            </div>

                <div id="info_header">
                    <p>Horário de Funcionamento: de segunda a sexta das 8h às 18h <img id="phone_symbol" src="phone-solid.svg" alt="Tel"> (48)3721-9339 <img id="envelope_symbol" src="envelope-solid.svg" alt="E-Mail"> <a href="mailto:secretaria.ctc@contato.ufsc.br">secretaria.ctc@contato.ufsc.br</a> </p>
                </div>

            <a href="index.html">
                <img id="logo" src="brasao_CTC-horizontal-color-fundo escuro.png"alt="CTC">
            </a>   
        </div>
        

        <div class="menu" id="menu">
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="departamentos.html">Departamentos</a></li>
            <li><a href="nucleos.html">Núcleos</a></li>
            <li><a href="register.html">Cadastro</a></li>
            <li><a href="cadastrados.php">Cadastrados</a></li>

        </div>

        <div id="content">
            <table border=2px>
                <tr>
                    <th>Nome</th>
                    <th>Curso</th>
                </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "cadastrados");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT nome, curso FROM cadastros";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["nome"]. "</td><td>" . $row["curso"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
                ?>
            </table>


        <div class="footer" id="footer">
            <img src="brasao_CTC-vertical-pb-fundo escuro.png" alt="brasão ctc">
            <p>Centro Tecnológico da UFSC
                Campus Universitário Reitor João David Ferreira Lima
                Rua Delfino Conti, s/n, Trindade
                Florianópolis - Santa Catarina
                CEP: 88040-370
                Secretaria Direção:
                (48)3721-9339/9340/9343/9837
                
                Portaria Hall CTC:
                (48)3721-9392
                
                Horário de Atendimento
                Segunda à Sexta: 8h às 18h
                
            </p>
        </div>
    </div>
</body>
</html>
