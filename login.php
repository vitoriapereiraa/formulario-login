<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | vitoria</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(117, 148, 214), rgb(230, 130, 147));
        }


       div{
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
        text-transform: uppercase;
       }


      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
      }

      .inputSubmit{


        
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
     }

     .inputSubmit:hover{
       background-color: deepskyblue; 
       cursor: pointer;
     }



    </style>


</head>
<body>
    <a href="home.php">sair</a>
    <div>
        <h1>login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
    </div>
</body>
</html>