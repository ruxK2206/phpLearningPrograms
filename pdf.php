<?php


require_once 'vendor/autoload.php';


$pdf = new TCPDF();


$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Sample PDF');
$pdf->SetSubject('Sample PDF using TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example, sample');

$pdf->AddPage();


$pdf->SetFont('helvetica', 'B', 16);


$pdf->Cell(0, 10, 'Hello, World!', 0, 1, 'C');

$pdf->SetFont('helvetica', '', 12);
$pdf->MultiCell(0, 10, 'This is a sample PDF generated using TCPDF in PHP.');


$pdf->Output('example.pdf', 'F');

echo "PDF file 'example.pdf' has been created.";

?>



