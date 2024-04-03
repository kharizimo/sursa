$(function(){
    $('.btn-mvt').on('click',function(){
        let index=$(this).data('value')
        
        $('.btn-mvt').removeClass('btn-danger').addClass('btn-outline-danger')
        $(this).addClass('btn-danger').removeClass('btn-outline-danger')
        
        $('.btn-mvt').siblings('label').removeClass('text-danger').addClass('text-secondary')
        $(this).siblings('label').addClass('text-danger').removeClass('text-secondary')
        
        $('.div-mvt').addClass('d-none')
        $(`.div-${index}`).removeClass('d-none')
        
    })
    $('#check_compagnie').on('change',function(){
        if($(this).is(':checked')){
            $('#cbo_compagnie').addClass('d-none')
            $('#txt_compagnie').removeClass('d-none')
        }
        else{
            $('#cbo_compagnie').removeClass('d-none')
            $('#txt_compagnie').addClass('d-none')
        }
    })
    $('#check_ville_dest').on('change',function(){
        if($(this).is(':checked')){
            $('#cbo_ville_dest').addClass('d-none')
            $('#txt_ville_dest').removeClass('d-none')
        }
        else{
            $('#cbo_ville_dest').removeClass('d-none')
            $('#txt_ville_dest').addClass('d-none')
        }
    })
    $('#check_ville_origin').on('change',function(){
        if($(this).is(':checked')){
            $('#cbo_ville_origin').addClass('d-none')
            $('#txt_ville_origin').removeClass('d-none')
        }
        else{
            $('#cbo_ville_origin').removeClass('d-none')
            $('#txt_ville_origin').addClass('d-none')
        }
    })
    $('#check_plainte').on('change',function(){alert()
        if($(this).is(':checked')){
            $('#plainte').val('R.A.S')
            $('#plainte').prop(disabled,true)
        }
        else{
            $('#plainte').prop(disabled,false)
            $('#plainte').val('')
        }
    })
})