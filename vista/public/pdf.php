<?php

    include("../../modelo/BD/config.php");
    include("../../modelo/BD/dataBase.php");
    require "plantilla.php";

    // $rol_sesion2=$_GET['rol_sesion2'];
    $db=new DataBase();
    $query ="SELECT id_usuario, apaterno, amaterno, nombres, usuario FROM usuario";
    $read=$db->select($query);

    $pdf = new PDF("p","mm","letter");
    $pdf->AliasNbPages();
    $pdf->AddPage();

    
    $pdf->SetFont("Arial","B",12);
    $pdf->SetFillColor(0,0,0);
    $pdf->SetTextColor(232,232,232);
    $pdf->Cell(10,5,"Nro",1,0,"C",true);
    $pdf->Cell(40,5,"Ap. Paterno",1,0,"C",true);
    $pdf->Cell(40,5,"Ap. Materno",1,0,"C",true);
    $pdf->Cell(55,5,"Nombres",1,0,"C",true);
    $pdf->Cell(55,5,"Correo",1,1,"C",true);



    $pdf->SetFont("Arial","",10);
    $pdf->SetTextColor(0,0,0);

    while($fila = $read->fetch_assoc()){

    $pdf->Cell(10,5,utf8_decode($fila['id_usuario']),1,0,"C");
    $pdf->Cell(40,5,utf8_decode($fila['apaterno']),1,0,"C");
    $pdf->Cell(40,5,utf8_decode($fila['amaterno']),1,0,"C");
    $pdf->Cell(55,5,utf8_decode($fila['nombres']),1,0,"C");
    $pdf->Cell(55,5,utf8_decode($fila['usuario']),1,1,"C");

    }


    $pdf->Output();
?>

