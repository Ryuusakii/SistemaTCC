<?php
include('../../../Database/Connection.php');
session_start();

$escola = $_POST['nomeEscola'];
$turma = $_POST['nomeTurmas'];
$segunda1 = $_POST['segunda0'];

$segunda2 = $_POST['segunda1'];

$segunda3 = $_POST['segunda2'];

$segunda4 = $_POST['segunda3'];

$segunda5 = $_POST['segunda4'];
$segunda6 = $_POST['segunda5'];

$segunda7 = $_POST['segunda6'];
$segunda8 = $_POST['segunda7'];
$segunda9 = $_POST['segunda8'];

$terca1 = $_POST['terca0'];

$terca2 = $_POST['terca1'];

$terca3 = $_POST['terca2'];

$terca4 = $_POST['terca3'];

$terca5 = $_POST['terca4'];
$terca6 = $_POST['terca5'];

$terca7 = $_POST['terca6'];
$terca8 = $_POST['terca7'];
$terca9 = $_POST['terca8'];

$quarta1 = $_POST['quarta0'];

$quarta2 = $_POST['quarta1'];

$quarta3 = $_POST['quarta2'];

$quarta4 = $_POST['quarta3'];

$quarta5 = $_POST['quarta4'];
$quarta6 = $_POST['quarta5'];

$quarta7 = $_POST['quarta6'];
$quarta8 = $_POST['quarta7'];
$quarta9 = $_POST['quarta8'];

$quinta1 = $_POST['quinta0'];

$quinta2 = $_POST['quinta1'];

$quinta3 = $_POST['quinta2'];

$quinta4 = $_POST['quinta3'];

$quinta5 = $_POST['quinta4'];
$quinta6 = $_POST['quinta5'];

$quinta7 = $_POST['quinta6'];
$quinta8 = $_POST['quinta7'];
$quinta9 = $_POST['quinta8'];

$sexta1 = $_POST['sexta0'];

$sexta2 = $_POST['sexta1'];

$sexta3 = $_POST['sexta2'];
$sexta4 = $_POST['sexta3'];
$sexta5 = $_POST['sexta4'];
$sexta6 = $_POST['sexta5'];
$sexta7 = $_POST['sexta6'];
$sexta8 = $_POST['sexta7'];
$sexta9 = $_POST['sexta8'];





if(isset($_POST['registrar'])){

	$query = "INSERT INTO Turma_Horario (Turma_Ano,Turma_Horario,Horario_Segunda,Horario_Terça,Horario_Quarta,Horario_Quinta,Horario_Sexta)

  VALUES ('$turma','8 às 9','$segunda1','$terca1','$quarta1','$quinta1','$sexta1'),
   ('$turma','9 às 10','$segunda2','$terca2','$quarta2','$quinta2','$sexta2'),
   ('$turma','10 às 11','$segunda3','$terca3','$quarta3','$quinta3','$sexta3'),
   ('$turma','11 às 12','$segunda4','$terca4','$quarta4','$quinta4','$sexta4'),
   ('$turma','13 às 14','$segunda5','$terca5','$quarta5','$quinta5','$sexta5'),
   ('$turma','14 às 15','$segunda6','$terca6','$quarta6','$quinta6','$sexta6'),
   ('$turma','15 às 16','$segunda7','$terca7','$quarta7','$quinta7','$sexta7'),
   ('$turma','16 às 17','$segunda8','$terca8','$quarta8','$quinta8','$sexta8'),
   ('$turma','17 às 18','$segunda9','$terca9','$quarta9','$quinta9','$sexta9')


  ";


	if(mysqli_query($conn,$query)){
    $_SESSION['horario_registrado'] = true;
      header("Location: ../../../../Pages/Admin/horarios.php");
    	exit();


	}
	else {

 echo("Error description: " . mysqli_error($conn));



    // $_SESSION['registro_erro'] = true;
    //
    //   header("Location: ../../../../Pages/Admin/horarios.php");
    //
    //   exit();


	}mysqli_close($conn);
}



?>
