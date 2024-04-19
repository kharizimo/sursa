$(function(){
    // $('#province_actuelle').on('change',function(){
    //     let province=$(this).val()
    //     let villes=$('#villes_actuelles').va()
    //     let ville=$('#ville_actuelle').va()
    //     let check=$('#check-actuel').is(':checked')
    //     if(!check){
    //         $.ajax({url:`engine/common/get-ville?province=${province}`,success:function(e){
    //             let data=JSON.parse(e)
    //             let options='<option value="">Aucune ville selectionnée</option>';
    //             data.forEach(v => {
    //                 options+=`<option value="${v}">${v}</option>`                   
    //             });
    //             villes.html(options)
    //         }})
    //     }
    // })
    $('#province_actuelle').on('click',function(){
        
    })
    $('.precision input[type=checkbox]').on('change',function(){
        let parent=$(this).parents('.precision')
        let input=parent.find('input.form-control')
        let select=parent.find('select.form-control')
        if($(this).is(':checked')){
            input.removeClass('d-none')
            select.addClass('d-none')
            select.val()
        }
        else{
            select.removeClass('d-none')
            input.addClass('d-none')
            input.val('')
        }
    })
    
})