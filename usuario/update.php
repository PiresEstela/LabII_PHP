<?php

include "config.php";

    if(isset($_POST['update'])){
        $primeironome = $_POST['primeironome'];
        $ultimonome = $_POST['ultimonome'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];

        $sql = "UPDATE `cliente`.`usuarios` SET
        `primeironome` = '$primeironome', 
        `ultimonome` = '$ultimonome',
        `email` = '$email',
        `password` = '$password',
        `genero` = '$genero'
        WHERE `id`= '$id' ";

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "Atualizado com sucesso!";
        }else{
            echo "erro:" .$sql."<br>" . $conn->error;
        };
    }

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `cliente`.`usuarios` WHERE `id`='$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $primeironome = $row['primeironome']
            $ultimonome = $row['ultimonome']
            $email = $row['email']
            $password = $row['password']
            $genero = $row['genero']
            $id = $row['id'];
        }
    }
}
?>

<<!DOCTYPE html>

<html>
<body>
    <h2>Formulário de Cadastro</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Informações Pessoais:</legend>
            Primeiro Nome:<br>
            <input type="text" name="primeironome">
            <br>
            Último nome:<br>
            <input type="text" name="ultimonome">
            <br>
            E-mail: <br>
            <input type="email" name="email">
            <br>
            Password: <br>
            <input type="password" name="password">
            <br>
            Gênero: <br>
            <input type="radio" name="genero" value="Masculino"> Masculino
            <input type="radio" name="genero" value="Feminino"> Feminino
            <input type="radio" name="genero" value="Outros"> Outros
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>

    </form>
</body>

<?php
    echo "<a href='consultar.php'>Clique aqui para realizar uma Consulta</a><br>";
?>


</html>