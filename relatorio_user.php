<?php 
include 'php/conexao.php';
include 'php/select2.php';


use Dompdf\Dompdf;
use Dompdf\Options;
require_once 'dompdf/autoload.inc.php';


$dompdf = new Dompdf(["enable_remote" => true]);

 ob_start();
 require __DIR__. "/table_user.php";
 $dompdf->loadHtml(ob_get_clean());


$dompdf->render();
$dompdf->stream(
    "relatório_usuário.pdf",
    array(
        
    //   true = Baixar o Arquivo
    //   false = Não baixar o Arquivo

        "Attachment"=>false 
    )
);

?>