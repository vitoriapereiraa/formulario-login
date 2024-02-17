<?php

if(isset($_POST['submit'])){

/*
    print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['telefone']);
    print_r('<br>');
    print_r($_POST['genero']);
    print_r('<br>');
    print_r($_POST['data_nascimento']);
    print_r('<br>');
    print_r($_POST['cidade']);
    print_r('<br>');
    print_r($_POST['estado']);
    print_r('<br>');
    print_r($_POST['endereco']);
    print_r('<br>');

    */

   include_once('config.php');


    $nome      = $_POST['nome'];
    $email     = $_POST['email'];
    $telefone  = $_POST['telefone'];
    $sexo      = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade    = $_POST['cidade'];
    $estado    = $_POST['estado'];
    $endereco  = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, 
    telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', 
    '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco') ");
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | Vp</title>
    <style>

    
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, rgb(117, 148, 214), rgb(230, 130, 147));
    }

    .box{
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%); 
        background-color: rgba(0, 0, 0, 0.4);
        padding: 15px;
        border-radius: 15px;
        width: 20%;
    }


    fieldset{
        border: 3px solid SlateBlue;
    }


    legend{
        border: 1px solid SlateBlue;
        padding: 10px;
        text-align: center;
        background-color: SlateBlue;
        border-radius: 8px;
        
    }

    .inputBox{
        position: relative;
    }

    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput{
       position: absolute;
       top: 0px;
       left: 0px;
       pointer-events: none;
       transition: .5s;
    }

    .inputUser:focus ~ .labelInput, 
    .inputUser:valid ~ .labelInput{
       top: -20px; 
       font-size: 12px;
       color:  SlateBlue;
    }

    #data_nascimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }

    #submit{
        background-image: linear-gradient(45deg, cyan, pink); 
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    #submit:hover{
        background-image: linear-gradient(45deg, cyan, rgb(173, 102, 114));   
    }

    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">


           <fieldset>
            <legend><b>Formulario de clientes</b></legend>
            <br>
             <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                 <label for="nome" class="labelInput">Nome completo</label>  
             </div>

             <br><br>

             <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                 <label for="email"  class="labelInput">Email</label>  
             </div>
             <br><br>

             <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                 <label for="senha" class="labelInput">Senha</label>  
             </div>

             <br><br>


             

             <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                 <label for="telefone"  class="labelInput">Telefone</label>  
             </div>




          <p>Sexo:</p>
          <input type="radio" id="feminino" name="genero" value="feminino" required>
          <label for="feminino">Feminino</label>
          <br>

          <input type="radio" id="masculino" name="genero" value="masculino" required>
          <label for="masculino">masculino</label>
          <br>


          <input type="radio" id="outro" name="genero" value="outro" required>
          <label for="outro">outro</label>
             <br><br>


         
            <label for="data_nascimento"> <b>Data de nascimento</b></label>  
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            
        

         <br><br><br>

        
         <div class="inputBox">
            <input type="text" name="cidade" id="cidade" class="inputUser" required>
             <label for="cidade"  class="labelInput">Cidade</label>  
         </div>

         <br><br>
         
         <div class="inputBox">
            <input type="text" name="estado" id="estado" class="inputUser" required>
             <label for="estado"  class="labelInput">Estado</label>  
         </div>
         <br><br>


         
         <div class="inputBox">
            <input type="text" name="endereco" id="endereco" class="inputUser" required>
             <label for="endereco"  class="labelInput">Endereço</label>  
         </div>
         <br><br>
      
         <input type="submit" name="submit" id="submit">

           </fieldset> 
        </form>

    </div>
</body>
</html>