$(function(){
    $('#voie_transport').change(function(){
        $('select.comp').prop("selectedIndex", 0)
        $('input.comp,#compagnie').val('')
        if($(this).val()=='Voie aérienne'){
            $('input.comp').addClass('d-none')
            $('select.comp').removeClass('d-none')
        }
        else{
            $('input.comp').removeClass('d-none')
            $('select.comp').addClass('d-none')
        }
    })
    $('.comp').change(function(){
        $('#compagnie').val($(this).val())
    })

    $('select.ville_option').change(function(){
        $('#ville_actuelle').val($(this).val())
        if($(this).val()=="0"){
            $('input.ville_option').prop('disabled',false)
        }
        else{
            $('input.ville_option').prop('disabled',true)
        }
    })
    $('input.ville_option').change(function(){
        $('#ville_actuelle').val($(this).val())
    })
    $('#province_actuelle').change(function(){
        var province=$(this).val()
        $.get('engine/common/villes?province='+province,function(e){
            var ret=JSON.parse(e).map(function(x){
                return '<option value="'+x+'">'+x+'</option>'
            })
            ret='<option value="-1" disabled selected>Séléctionnez</option>'+ret+'<option value="0">Autre ville</option>'
            $('select.ville_option').html(ret)
            $('input.ville_option').html("").prop('disabled',true)

        })
    })


})