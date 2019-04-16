<?php
session_start();
include 'lib/Database.php';
$db = new Database();
 $table = "students";
 //$order = array('order_by' => 'id DESC' );
$selectcon = array('select' => 'id,name,phone,email');
 $wherecon = array(
    'where' =>array('id' => $_SESSION['lastId']),
    'return_type' =>'single'
);
// $limit = array('start'=>'2', 'limit'=>'3');
// $limit = array('limit'=>'3');

$studentData = $db->readPaymentData($table,$selectcon,$wherecon);
$roll = '2018'.$studentData['id'];

// if(!empty($studentData)){
//     echo "Name: ".$studentData['name']."<br/>";
//     echo "Phone: ".$studentData['phone']."<br/>";
//     echo "Email: ".$studentData['email']."<br/>";
// }

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',15,6,50,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(130);
    // Title
    $this->SetFont('Arial','B',10);
    $this->Cell(61,5,'Institute of Information Technology',0,1,'C');
    // Move to the right
    $this->Cell(80);
    $this->Cell(125,5,'Masters in Information Technology(under PMIT Program)',0,1,'C');
    $this->Cell(80);
    $this->Cell(178,5,'Jahangirnagar University',0,1,'C');

    //vertical space
    //$this->Cell(0,5,'5 vertical space',1,1,'L');

    $this->Cell(0,15,'Admit Card','T',1,'C');

    // Line break
    $this->Ln(5);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage('P','A4');
$pdf->SetFont('Times','',12);

//vertical space
$pdf->Cell(0,10,'',0,1,'L');


$pdf->Cell(30,10,'Roll:',0,0,'L');
$pdf->Cell(30,10,$roll,0,1,'L');
$pdf->Cell(30,10,'Name:',0,0,'L');
$pdf->Cell(30,10,$studentData['name'],0,1,'L');
$pdf->Cell(30,10,'Phone:',0,0,'L');
$pdf->Cell(30,10,$studentData['phone'],0,1,'L');
$pdf->Cell(30,10,'Email:',0,0,'L');
$pdf->Cell(30,10,$studentData['email'],0,1,'L');

//vertical space

$pdf->Cell(30,10,'Examination date, time and center will be announced in PMIT website',0,1,'L');


//vertical space
$pdf->Cell(0,20,'','B',1,'L');

//admission xm rules
$pdf->Cell(30,10,'Instruction For applicants:',0,1,'L');
$pdf->Cell(30,10,'  1. Candidates have to print and bring the admit card during examination and preserve the same for future use.',0,1,'L');
$pdf->Cell(30,10,'  2. Candidates have to use black ink ball point pen for MCQ Test.',0,1,'L');
$pdf->Cell(30,10,'  3. Calculator, Mobile Phone, Smart Watch or any other electronic devices are not allowed in examination hall.',0,1,'L');
$pdf->Cell(30,10,'  4. Candidates shall report to the examination center 30 minute prior to start of examination.',0,1,'L');
$pdf->Cell(30,10,'  5. TA/DA will not be admissible in this connection.',0,1,'L');

$pdf->Output();
?>
