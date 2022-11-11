<?php
//"host=192.168.56.100 port=5432 dbname=dbsgca user=sgca password=sgca1234"
//global $host, $db, $port, $user, $pass;
$host='192.168.254.100';
$port='5432';
$db= 'dbsgca';
$user='sgca';
$pass='sgca1234';

// ----------------conexão---------------------------------------------------------------------------------
try{
   $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
   echo "Conectado ao Banco de Dados  :";

} catch(PDOException $e){

   echo "Falha ao se conectar ao Banco de Dados  :";
   die($e->getMessage());
}
// --------------------------------------insert-----------------------------------------------------------
try{
   //cpf_aluno
   //nome_aluno
   //cel_aluno
   //dtnasc_aluno
$res = $pdo -> prepare("INSERT INTO tb_alunos(nome_aluno, cpf_aluno, cel_aluno, dtnasc_aluno) VALUES (:n, :c, :ce, :dt)");
$res ->bindValue(":n","Joao");
$res ->bindValue(":c","1245678982");
$res ->bindValue(":ce","322545589");
$res ->bindValue(":dt","2000-04-24");
$res -> execute();
echo"foi incluso";
} catch(Exception $p){
   echo"não foi possivel incluir";
   die($p->getMessage());
}




// -----------------------------------------update------------------------------------------------------






// ----------------------------------------delete--------------------------------------------------------





// -----------------------------------------select--------------------------------------------------------

?>
