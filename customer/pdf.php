<?php

require('fpdf.php');


 
 interface Accounting
{
    public function calculatePrice();
  
}



//Basic
class Booking implements Accounting
{
    public function  calculatePrice()
    {
		$a=$_GET['Prices'];
        return $a;
    }
   
}

 //Accesiores
 abstract class BookingAccesiores implements Accounting
{
    
    protected $booking;
    public function __construct(Accounting $booking)
    {
        $this->Accounting = $booking;
    }
}

 
class Taxs extends BookingAccesiores
{
 
    public function calculatePrice()
    {
		  $b=$_GET['Taxes'];
        return $this->Accounting->calculatePrice() +$b;
    }
    
} 


class Transportation extends BookingAccesiores
{
    
    public function calculatePrice()
    {
		 $c=$_GET['TransportationCost'];
        return $this->Accounting->calculatePrice() + $c;
    }
    
}  


class PDFP extends FPDF
{
	
function Header()
{
	
    // Select Arial bold 15
    $this->SetFont('Times','B',20);
    // Move to the right
    $this->Cell(80);
    // Framed title
    $this->Cell(40,50,'Product Form');
	
    // Line break
	$this->Ln(20);
}
function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
	
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
function Footer2()
{
    // Go to 1.5 cm from bottom
    $this->SetY(15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
	
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}



    
  $Accounting = new Booking();
      
		$h11 = $Accounting->calculatePrice();
       
    
 
     $Accounting = new Booking();
        $Accounting = new Taxs($Accounting);
	
      $h12 =  $Accounting->calculatePrice();
   
   
     $Accounting = new Booking();
        $Accounting = new Taxs($Accounting);
        $Accounting = new Transportation($Accounting);
		
        $h13 =   $Accounting->calculatePrice();


$today =  date('d-m-Y');


 $b=$_GET['fname'];
 $h19=$_GET['lname'];
 $h20=$_GET['add'];
 $h17=$_GET['phone'];
$pdf = new PDFP();


$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
$pdf->Cell(10,40,'Name:',0,1,'C');

//$pdf-> Image("12.jpg",5,0,60);
$pdf->Cell(50,-40,$b,0,1,'C');
$pdf->Cell(90,40,$h19,0,1,'C');
//$pdf->Cell(10,40,$h19);

$pdf->Cell(10,-10,'Date:',0,1,'C');
$pdf->Cell(60,10,$today,0,1,'C');
$pdf->Cell(20,30,'Address:',0,1,'C');
//$pdf->Cell(90,-30,$h20);
$pdf->Cell(20,10,$h20,0,1,'C');
$pdf->Cell(10,20,'Number:',0,1,'C');
$pdf->Cell(40,10,$h17,1,'C');

$pdf->Ln(30);
$pdf->Cell(180,10,'Check',1,0);
$pdf->Ln(10);
$pdf->Cell(90,10,'Price',1,0);      
$pdf->Cell(90,10,$h11,1,0);
$pdf->Ln(10);
$pdf->Cell(90,10,'Price+Taxes',1,0);
$pdf->Cell(90,10,$h12,1,0);
$pdf->Ln(10);
$pdf->Cell(90,10,'Price+Taxes+Transportation',1,0);
$pdf->Cell(90,10,$h13,1,0);
$pdf->Ln(10);
$pdf->Cell(90,10,'Total Price',1,0);
$pdf->Cell(90,10,$h13,1,0);
$pdf->Ln(10);
/* $pdf->Cell(45,10,$h1,0,1,'C');
$pdf->Ln(20);
$pdf->Cell(40,10,$h); */
$pdf->Ln(80);
$pdf->Cell(180,7,'Contact Us',1,0);
$pdf->Ln(7);
$pdf->Cell(40,7,'Telephone',1,0);
$pdf->Cell(140,7,'0102591259',1,0);
$pdf->Ln(7);
$pdf->Cell(40,7,'Email',1,0);
$pdf->Cell(140,7,'Waleedwagdy7@gmail.com',1,0);
$pdf->Ln(7);
$pdf->Cell(40,7,'Address',1,0);
$pdf->Cell(140,7,'NasrCity',1,0);
$pdf->Ln(7);
//$pdf->Cell(40,7,$h9,1,0);
//$pdf->Cell(140,7,$h10,1,0);

$pdf->Ln(5);

$pdf->Ln(20);
$pdf->Cell(10,7,'',0,0);

$pdf->Cell(50,5,'Signature:',0,1,'C');
/* $pdf->Line(20, 240, 210-20, 240); // 20mm from each edge
$pdf->Line(50, 240, 210-50, 240); */

$pdf->Line(100, 270, 110-20, 270); // 20mm from each edge
$pdf->Line(100, 270, 110-50, 270);
$pdf->Output();
		
?>




