
<?php 
include('conexao.php');

$nome =$_POST["n"];
$senha =$_POST["s"];

if(isset($_POST['n']) || isset($_POST['s'])){

  if(strlen($_POST['n']) == 0 ){
      echo '<script>document.getElementById("div1").innerHTML = "Preencha o campo usuário";</script>';
  } else if(strlen($_POST['s']) == 0 ){
      echo '<script>document.getElementById("div1").innerHTML = "Preencha o campo senha";</script>';    
  } else{
    $sql = "SELECT * FROM Usuario WHERE Usuario='$nome';";
    $sql_query = $conn->query($sql) or die("Erro na execução do SQL: ". $conn->error);
    
    $result = $conn->query($sql);
    
    if($result->num_rows === 1){
      echo '<script>document.getElementById("div1").innerHTML = "Usuario ja existente, por favor selecione outro nome de usuário";</script>';
    } else {
    
        $insertSql = "INSERT INTO Usuario (Usuario, Senha)
        VALUES ('$nome', '$senha')";

        $createTableSql = "CREATE TABLE $nome (
          id int(6) AUTO_INCREMENT PRIMARY KEY,
          nome varchar(30) NOT NULL,
          sobrenome varchar(30),
          cpf int(30) NOT NULL,
          tel int(30) NOT NULL,
          email varchar(50),
          placa varchar(20) NOT NULL
          )";

        if ($conn->query($insertSql) === TRUE) {
          if ($conn->query($createTableSql) === TRUE) {
            echo '<script>window.location.replace("https://test124578.000webhostapp.com/TCC/");</script>';
          } else {
            echo "Error creating table: " . $conn->error;
          }
        } else {
          echo "Error inserting record: " . $conn->error;
        }

        $nome = $conn->real_escape_string($_POST['n']);
        $senha = $conn->real_escape_string($_POST['s']);
        
        $conn->close();
      }
    }
  
  }



?>
<script src="script.js"></script>