<?php

$nome = filter_input(INPUT_POST, 'nome');
$curso = filter_input(INPUT_POST, 'curso');


if(!empty($nome)){
    if(!empty($curso)){
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="cadastrados";

        //create connection
        $conn = new mysqli ($host, $dbusername,$dbpassword,$dbname);

        if (mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errorno() .') '.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO cadastros (nome,curso)
            values ('$nome', '$curso')";
            if($conn->query($sql)){
                echo"Cadastro feito com sucesso";
            }
            else{
                echo"Error: ".$sql. "<br>". $conn->error;
            }
            $conn->close();
        } 
    }
    else{
        echo"Curso não pode estar vazio";
       die();
   }
}
else{
    echo "Nome não pode estar vazio";
    die();
}
?>
