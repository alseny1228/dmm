<?php
use models\Clients;
use models\Factures;
require_once('../config/config.php');
require_once('../config/db.php');
require_once('../models/Clients.php');
require_once('../models/Factures.php');
require_once('../functions/functions.php');
if(isset($_GET) AND !empty($_GET)){
    extract($_GET);
    $prints=Factures::getfacture($reference);
    $infos=Factures::getinfo($reference);

    // debug($prints);
    // die();}
ob_start();?>
<style type="text/css">
.header{
    display: inline-block;
    height:70px;
    background: #999 url(athaki.png) 5px 5px no-repeat;
    padding:10px 10px 10px 100px;
}
.logo{
    width: 100px;
    height:70px;
    background: #999 url(athaki.png) 5px 5px no-repeat;
}
.liste ul li{
    list-style: none;
    padding: 0;
    margin: 0;
}
.header p{
    margin:0;
    color:#FFF;
}


.phead p{
    margin:0;
    color:black;
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
    background: #cb3e3b;
    color:#FFF;
    padding:5px;
    text-align: center;
}
/* ################################# */
table thead th.designation{
    width:240px;
    text-align: left;
    /* max-width: 45%; */
}
table thead th.quantite{
    width:85px;
    text-align: left;
}
table thead th.prixunitaire{
    width:120px;
    text-align: left;
}
table thead th.prixtotal{
    width:140px;
    text-align: left;
}

/* ############################### */
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
ul{
    padding: 0;
}
table thead td.liste{
    width:15px;
    text-align: left;
    
}
.infoclt ,.infovehicule{
    border-right: 4px solid white;
    text-align:center;
    background-color:#cb3e3b;
    color: white;
}
.trait{
    border-top: 1px solid,black;
}
a{
    color: black;
    text-decoration: none;
}


</style>
<page footer="date;pagination" backtop="120px" backbottom="100px">
    <page_header>
       <table border="" style="border-collapse:collapse">
       
            <tr>
                <td class="logo"></td>
                <td class="phead">
                    <p><strong>GMSA-SARL</strong></p>
                    <p>Garage Multiservices Sarl</p>
                    <p><strong>Tél :</strong>+224 629 35 35 12</p>
                    <p><strong>Email:</strong>garagemultiservicesgn@gmail.com</p>
                    <p><strong>Adresse:</strong>NONGO TADY</p> 
                </td>
                <td style="width: 180px;margin-left:20px" class="liste">
                    <div style="margin-left:20px">
                        <a>Mécanique</a><br>
                        <a>Tolérie</a><br>
                        <a>Peinture</a><br>
                        <a>Parallelisme</a><br>
                    </div>
                </td>
                <td style="width: 180px" class="liste">
                    <div style="margin-left:20px">
                        <a>Mécanique</a><br>
                        <a>Tolérie</a><br>
                        <a>Peinture</a><br>
                        <a>Paralasme</a><br>
                    </div>
                </td>
            </tr>
            <tr >
                <td colspan="4" class="trait"></td>
            </tr>
       
            <tr>
                <td style="text-align: left; border:1px solid white" colspan="2">
                    <?php foreach($infos as $info):?>
                        <strong> <?='REFERENCE : '.$info->reference?></strong>
                    <?php endforeach;?> 
                </td>
                <td style="text-align: right; border:1px solid white" colspan="2">
                    <h4>Conakry le ,<?php echo date('d M Y'); ?></h4>
                </td>
            </tr>
            <tr>
                <td class="infoclt" colspan="2">INFORMATION DU CLIENT</td>
                <td class="infovehicule" colspan="2" >INFORMATION DU VEHICULE</td>
            </tr>
                <tr>
                    <td ><strong>Nom:</strong></td><td><?php foreach($infos as $info):?><?=$info->nom?><?php endforeach;?></td>
                    <td ><strong>Immatriculation:</strong></td><td><?php foreach($infos as $info):?><?=$info->immatriculation?><?php endforeach;?></td>
                </tr>
                <tr>
                    <td ><strong>Prenom:</strong></td><td><?php foreach($infos as $info):?><?=$info->prenom?><?php endforeach;?></td>
                    <td ><strong>Marque:</strong></td><td><?php foreach($infos as $info):?><?=$info->marque?><?php endforeach;?></td>
                </tr>
                <tr>
                    <td ><strong>Téléphone:</strong></td><td><?php foreach($infos as $info):?><?=$info->telephone?><?php endforeach;?></td>
                    <td ><strong>Modele:</strong></td><td><?php foreach($infos as $info):?><?=$info->modele?><?php endforeach;?></td>
                </tr>
                <tr>
                    <td ><strong>Email:</strong></td><td><?php foreach($infos as $info):?><?=$info->email?><?php endforeach;?></td>
                    <td ><strong>Kilometrage:</strong></td><td><?php foreach($infos as $info):?><?=$info->kilometrage?><?php endforeach;?></td>
                </tr>
                <tr>
                    <td style="border-top:1px solid black" colspan="4"></td>
                </tr>
        </table>
   
    </page_header>

    <page_footer>
        <div class="footer">
            <hr/>
            <p>http://wwww.garagemultiservices.com</p>
            page [[page_cu]]/[[page_nb]]
        </div>
    </page_footer>
    
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br>
    
        <table>
            <thead>
                <tr >                   
                    <th style="text-align:center;width:300px" class="designation">Désignation</th>
                    <th style="text-align:center" class="quantite">Quantité</th>
                    <th style="text-align:center" class="prixunitaire">Prix Unitaire</th>
                    <th style="text-align:center" class="prixtotal">Prix Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prints as $print):?>
                    <tr>
                        <td style="text-align:left" class="designation">
                            <?php 
                                $chaine=$print->designation;
                                $result = wordwrap($chaine,58,"<br>\n");
                                echo $result = substr($result,0,500);
                            ?>
                        </td>
                        <td><?=$print->quantite?></td>
                        <td><?=$print->prixunitaire?></td>
                        <td style="text-align:right"><?=($print->prixunitaire)*($print->quantite)?></td>
                    </tr>
                <?php endforeach; ?> 
                <tr style="background-color:#cbcbcb;">
                    <td colspan="3" style="text-align: left">Total</td>
                    <td style="text-align:right">
                        <?php $total=0; ?> 
                        <?php foreach ($prints as $prin):?>
                            <?php  $total=(int)$prin->prixtotal;?>
                        <?php endforeach; ?> 
                        <?=$total;?> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;border:1px solid white;"></td>
                    <td  style="text-align: left">Payé</td>
                    <td style="text-align:right">
                        <?php $paye=0; ?> 
                        <?php foreach ($prints as $prin1):?>
                            <?php  $paye=(int)$prin1->montantpaye;?>
                        <?php endforeach; ?> 
                        <?=$paye;?> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;border:1px solid white;"></td>
                    <td  style="text-align: left">Reste à payer</td>
                    <td style="text-align:right">
                        <?php $reste=0; ?> 
                        <?php foreach ($prints as $prin2):?>
                            <?php  $reste=(int)$prin2->reste;?>
                        <?php endforeach; ?> 
                        <?=$reste;?> 
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid white"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;border:1px solid white;">
                   &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                   Le client
                </td>
                    <td colspan="2" style="text-align: left;border:1px solid white;"> &nbsp; &nbsp; &nbsp; 
                    Le Directeur
                </td>
                </tr>
            </tbody>
        </table>

    </page>
<?php
$content= ob_get_clean();
require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
try{
    $uniq = uniqid();
    $pdf = new HTML2PDF('P','A4','fr');
    $pdf->pdf->SetDisplayMode('fullpage');
    $pdf->pdf->SetTitle('Ma facture ...');
    $pdf->pdf->SetAuthor('athakim');
    $pdf->pdf->SetProtection(array('print'));
    $pdf->writeHTML($content);
    ob_get_clean();
    $pdf->Output("facture{$uniq}.pdf");
    header("location:{LINK}factures");
}catch(HTML2PDF_exception $e){
    echo $e->getMessage();
    exit;
}
}