$(function(){
    $('#form').on('submit',function(e){
        e.preventDefault()
        $('.precision input[type=hidden]').each(function(){
            let select=$(this).parent().find('select.form-control')
            let input=$(this).parent().find('input.form-control')
            $(this).val(select.is(':hidden')?input.val():select.val())
        })
        let jour=$('#jour').val()
        let mois=$('#mois').val()
        let annee=$('#annee').val()
        let tmp=`${annee}-${mois}-${jour}`
        alert()
        var data=$(this).serialize()
        
        $('#date_voyage').val(Date.parse(tmp)?date_voyage:'0000-00-00')
        $.ajax({
            url:'engine/voyage/tmp-voyage',
            data:data,
            success:function(e){
                alert(e)
                document.location='bilan'
            }
        })
        
    })
    $('#lib_identite').on('change',function(){
        $('#num_identite').val(identites[$(this).val()]?identites[$(this).val()]:'')
    })
    $('.prov-loader select.form-control').on('change',function(){
        let province=$(this).val();
        let target=$(this).parents('.prov-loader').next().find('select')
        $.ajax({
            url:`engine/common/get-ville?province=${province}`,
            success:function(e){
                let data=JSON.parse(e)
                let ret='<option value="">Aucune ville selectionnée</option>'
                data.forEach(element => {
                    ret+=`<option value="${element}">${element}</option>`
                });
                target.html(ret)
            }
        })
    })
    $('.precision input[type=checkbox]').on('change',function(){
        let parent=$(this).parents('.precision')
        let input=parent.find('input.form-control')
        let select=parent.find('select.form-control')
        if($(this).is(':checked')){
            if(select.has('.select2')){select.next().hide()}
            input.removeClass('d-none')
            select.addClass('d-none')
            select.prop('selectedIndex',0);
        }
        else{
            if(select.has('.select2')){select.next().show()}
            input.val('')
            select.removeClass('d-none')
            input.addClass('d-none')
        }
    })
    
})