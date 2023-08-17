<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>

<?php
include("../../../controlador/sesion.php");
include("../../../modelo/BD/config.php");
include("../../../modelo/BD/dataBase.php");

date_default_timezone_set('America/La_Paz');
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=lista-usuarios.xls");

$rol_sesion=$_GET['rol_sesion'];
// $rol_sesion2=$_GET['rol_sesion2'];
$db=new DataBase();
$query="select * from usuario";
$read=$db->select($query);
?>
<style>
        .centrado{
            text-align: center;
        }
        div{
            position: absolute;
            border: 1px solid #096;
            width: 50%;
        }
        table{
                border: 0px;
                background-color: white;
                padding: 0px 4px 0px 2px;
                border: 1px solid #D0D7E5;
                border-width: 0px 1px 1px 0px;
            }
        caption{
            text-align: center;
        }
    </style>

<body style="align-content: center;">
<table border="1" style="align-content: center;">
    <caption><h1     fontcolor="danger">LISTA DE USUARIOS</h1></caption>
    <td colspan="5" style="text-align: center;">
                    Fecha y Hora de Impresion<?php echo date('y-m-d H:i:s'); ?>  
                </td>
    <thead>
        <tr bgcolor ="dark">
            <th scope="col">ID</th>
            <th scope="col">APELLIDO PATERNO</th>
            <th scope="col">APELLIDO MATERNO</th>
            <th scope="col">NOMBRES</th>
            <th scope="col">CORREO</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($read as $row) { ?>
            <tr>
                <td><?php echo $row['id_usuario'];?></td>
                <td><?php echo $row['apaterno'];?></td>
                <td><?php echo $row['amaterno'];?></td>
                <td><?php echo $row['nombres'];?></td>
                <td><?php echo $row['usuario'];?></td>
        <?php } ?>
            </tr>
    </tbody>
</table>
</body>

