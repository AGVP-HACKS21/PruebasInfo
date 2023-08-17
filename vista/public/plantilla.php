<?php
require "fpdf/fpdf.php";
date_default_timezone_set('America/La_Paz');

class PDF extends FPDF
{
	function Header()
	{
		$this->Image("../asets/img/iconos/report.png",10,5,13);

		$this->SetFont("Arial","B",12);

		$this->Cell(25);
		$this->Cell(140,5,"Reporte de Usuarios-SEDERI",0,0,"C");

		$this->SetFont("Arial","",10);
		$this->Cell(10);
		$this->Cell(25,5,"FECHA Y HORA ". date('y-m-d H:i:s'),0,1,"R");
        
		$this->Ln(10);
	}
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'Pagina'. $this->PageNo() . '/{nb}',0,0,"C");

	}
}
?>