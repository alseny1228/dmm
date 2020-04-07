<?php
use models\Clients;
require_once('../config/config.php');
require_once('../config/db.php');
require_once('../models/Clients.php');
require_once('../functions/functions.php');
if(isset($_GET) AND !empty($_GET)){
    extract($_GET);
    $clients=Clients::getAll();
}
ob_start();
?>
<style type="text/css">
.header{
    display: block;
    height:70px;
    background: #999 url(athakim.png) 5px 5px no-repeat;
    padding:10px 10px 10px 100px;
}
.header p{
    margin:0;
    color:#FFF;
}
.footer p{
    margin:0;
    font-size:10px;
    color:#999;
}
.footer hr{
    color:#999;
}
h4{
    text-align: right;
}
h1{
    text-transform: uppercase;
    font-size:18px;
    text-align: center;
    color:#444;
    margin:40px;
}
.client{
    margin-left: 400px;
    padding:10px;
    border:1px dotted #999;
}
.client p{
    margin:0;
}

table{
    width:100%;
}
table thead th{
    width:11%;
    background: #000;
    color:#FFF;
    padding:5px;
    text-align: center;
}
table thead th.large{
    width:56%;
    text-align: left;
}
table tbody tr td{
    padding:8px 5px;
    border:1px solid #999;
    text-align: center;
}
table tbody tr td.large{
    text-align: left;
}
table tr.total{
       background: #000;
    color:#FFF;
}

</style>
<page footer="date;pagination" backtop="120px" backbottom="100px">
    <page_header>
       <div class="header">
            <p><strong>Athakim.fr</strong></p>
            <p>1 rue de verdun 75001 Paris</p>
            <p><strong>Tél :</strong> 01 47 00 00 00</p>
            <p><strong>Email:</strong>contact@athakim.fr</p>
             <p><strong>SIRET:</strong> 404 833 048 00022</p> 
       </div>
    </page_header>
    <page_footer>
        <div class="footer">
            <hr/>
            <p>http://wwww.athakim.fr</p>
            page [[page_cu]]/[[page_nb]]
        </div>
    </page_footer>
    <h4>Paris le ,<?php echo date('d M Y'); ?></h4>
    <div class="client">
        <p><strong>Nom du client</strong></p>
        <p>adresse</p>
        <p><strong>Tél :</strong> 01 47 00 00 00</p>
        <p><strong>Email:</strong>email@email.fr</p>   
    </div>
    <h1>Facture no:124578</h1>
        <table>
            <thead>
                <tr>                    
                    <th>Réf</th>
                    <th class="large">Désignation</th>
                    <th>Qte</th>
                    <th>P .U</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client):?>
                <tr>
                    <td><?=$client->intitule?></td>
                    <td><?=$client->adresse?></td>
                    <td><?=$client->telephone?></td>
                    <td><?=$client->email?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
  <qrcode value="valeur à coder" ec="H" style="width: 20mm; background-color: red; color: white;display:block"></qrcode>

</page>
<?php
$content= ob_get_clean();
require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
try{
    $pdf = new HTML2PDF('P','A4','fr');
    $pdf->pdf->SetDisplayMode('fullpage');

    $pdf->pdf->SetTitle('Ma facture ...');
    $pdf->pdf->SetAuthor('athakim');

    $pdf->pdf->SetProtection(array('print'));

    $pdf->writeHTML($content);
    ob_get_clean();
    $pdf->Output('facture.pdf');
}catch(HTML2PDF_exception $e){
    echo $e->getMessage();
    exit;
}