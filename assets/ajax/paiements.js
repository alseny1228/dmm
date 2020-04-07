$(document).ready(function(){
    setTimeout(() => {
        $('.alert').fadeOut()
    }, 4000);
    $('#employe').change(function(){
        eid = $(this).find('option:selected').val()
        console.log(eid);
        $.ajax({
            url:"http://dmm.com/assets/ajax/paiements.php",
            method:'GET',
            data:{
                eid:eid
            },
            dataType:'json',
            success:function(data){
                console.log(data);
                // $('#role').val(data[0].nom);
                $('#nom').val(data[0].prenom+" "+data[0].nom);
                $('#role').val(data[0].roles);
               

            },
            error:function(error){
                console.error(error);
            }
        })
    })
})
