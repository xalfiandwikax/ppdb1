<?php 
namespace App\Helpers;

use Dompdf\Dompdf;
use Dompdf\Options;

function generatepdf($html='',$size='A4', $orientasi='portrait'){


    $options = new Options();

    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);
    $options->set('isPhpEnabled', true);
    $options->set("isPhpEnabled", true);

    $dompdf = new \Dompdf\Dompdf($options);

    // Muat konten HTML ke Dompdf
    $dompdf->loadHtml($html);

    // Set ukuran kertas (opsional)
    $dompdf->setPaper($size, $orientasi);

    $dompdf->render();
    $dompdf->stream("PPDB_LANGGENGIKHLAS.pdf", array("Attachment"=> False));

}







?>