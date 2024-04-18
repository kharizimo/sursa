$(function(){
    $('#ident-insert').on('click',function(){
        let lib=$('#ident-lib').val()
        let numero=$('#ident-numero').val()
        $.ajax({url:`engine/target/ident-insert?lib=${lib}&numero=${numero}`,success:ident_load})

    })
    function ident_del(){
        let id=$(this).data('id')
        $.ajax({url:`engine/target/ident-del?id=${id}`,success:ident_load})
    }
    function ident_load(){
        table.ajax.reload()
        $('.ident-del').on('click',ident_del)
    }

    $('#id_vuser').on('change',function(){
        if(!$(this).val()){
            $('#form .form-control').val('')
            $('#table tbody').html('')
        }
        else{
            let id=$(this).val()
            $.ajax({url:`engine/vuser/get?id=${id}`,success:function(e){
                let data=JSON.parse(e)
                let identite=JSON.parse(data.identite)
                $('#nom').val(`${data.nom} ${data.postnom} ${data.prenom}`)
                $('#telephone').val(data.telephone)
                $('#email').val(data.email)
                $('#dat_nais').val(data.dat_nais)
            }})
        }
    })
})