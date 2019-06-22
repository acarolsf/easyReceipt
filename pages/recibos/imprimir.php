<?php 
 include("mpdf60/mpdf.php");
 require_once(DBAPI);

 $recibo = find('recibos', $id);
 $cliente = find('clientes', $recibo['id_clientes']);
 $usuario = find('users', $recibo['id_usuario']);
 

 $html = "../../modelo-recibo.html";

 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("css/estilo.css");
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);
 $mpdf->Output();

 exit;