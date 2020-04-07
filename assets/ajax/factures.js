$(document).ready(function(){
    setTimeout(() => {
        $('.alert').fadeOut()
    }, 4000);
    $('#client').change(function(){
        cid = $(this).find('option:selected').val()
        $('#immatriculation').find('option').remove()
        console.log(cid);
        $.ajax({
            url:"http://dmm.com/assets/ajax/factures.php",
            method:'GET',
            data:{
                cid:cid,
            },
            dataType:'json',
            crossDomain:true,
            success:function(data){
                $('#nom').val(data.data1[0].nom);
                $('#prenom').val(data.data1[0].prenom);
                $('#adresse').val(data.data1[0].adresse);
                $('#email').val(data.data1[0].email);
                    let d= data.data2;
                    let val="";
                    let opt="Séléctionner une immatriculation";
                    $.each(d,function(index,value){
                        $('#immatriculation').append(
                            "<option value="+val+">"+opt+"</option>"+
                            "<option value="+value.immatriculation+">"+value.immatriculation+"</option>"
                        )
                    })
                },
            error:function(error){
                console.error(error);
            }
        })
    })

    $('#typefacture').change(function(){
        type = $(this).find('option:selected').val()
        $.ajax({
            url:"http://dmm.com/assets/ajax/type.php",
            method:'GET',
            data:{
                type:type,
            },
            dataType:'json',
            success:function(data){
                // console.log(data);
                if(type=="fs"){
                    $('#reference').val("FACT-"+data);
               }if(type=="dr"){
                   $('#reference').val("DEVR-"+data);
               }if(type=="dp"){
                   $('#reference').val("DEVPI-"+data);
               }if(type=="or"){
                   $('#reference').val("OR-"+data);
               }
            },
            error:function(error){
                console.error(error);
            }
        })
    })
    $('#immatriculation').change(function(){
        idimm = $(this).find('option:selected').val()
        // console.log(idimm);
        $.ajax({
            url:"http://dmm.com/assets/ajax/immatriculation.php",
            method:'GET',
            data:{
                iid:idimm,
            },
            dataType:'json',
            success:function(data){
                $('#imma').val(data[0].immatriculation)
                $('#marque').val(data[0].marque)
                $('#modele').val(data[0].modele)
                $('#km').val(data[0].kilometrage)
            },
            error:function(error){
                console.error(error);
            }
        })
    })
    $('#montantp').keyup(function(){
        montant=parseInt($(this).val())

    })
})