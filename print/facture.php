<?php
    $donnees =array(
        '0' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '1' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '2' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '3' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '4' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '5' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '6' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '7' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '8' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '10' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '11' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '12' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '13' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '14' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '15' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '16' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '17' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
        '18' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            ),
         '19' => array(
                'ref'=>'cv45',
                'designation'=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                'qte'=>1,
                'prix'=>15.99
            )
        );

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
                    <th>Prix total</th>
                </tr>
            </thead>
            <tbody>
             <?php 
             $total =0;$qte=0;
             foreach ($donnees as $d): ?>
            <tr>
                <td><?php echo $d['ref'] ?></td>
                <td class="large"><?php echo $d['designation'] ?></td>
                <td><?php echo $d['qte'] ?></td>
                <td><?php echo $d['prix'] ?>€</td>
                <td><?php echo $d['prix']*$d['qte'] ?>€</td>               
            </tr>    
             <?php 
              $total +=  $d['prix']*$d['qte'];
                $qte+=$d['qte'];
             endforeach ?>
            
            <tr class="total">
                <td colspan="2">Total</td>
                <td><?php echo $qte ?></td>
                <td></td>
                <td><?php echo $total ?>€</td>
            </tr>
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