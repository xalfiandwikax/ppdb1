<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once ('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;


class mypdf
{

    protected $ci;

    public function __construct()
    {

        $this->ci = &get_instance();
    }

    public function generate_pdf($view, $data = array(), $filename = 'PPDB LANGGENG IKHLAS', $paper='A4', 
    $orientation= 'portrait')
    {
        $dompdf = new Dompdf();

        $html = $this->ci->load->view($view, $data, True);

        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));


    }

}