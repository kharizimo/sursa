$(function(){
    // super code 
    $('#modal-super-code').on('show.bs.modal',function(e){
        let btn=$(e.relatedTarget)
        let url=btn.data('url')
        $.ajax({url:`api.sursa.cd/user/creat-super-code`})
        $(this).find('#url').val(url)
        $(this).find('#error').addClass('d-none')
    })
    $('#modal-super-code form').on('submit',function(e){
        e.preventDefault()
        var url=$(this).find('#url').val()
        var code=$(this).find('#code').val()
        $.ajax({url:`api.sursa.cd/user/login-super-code?code=${code}`,success:function(e){
            if(e){document.location=url}
            else{$('#modal-super-code #error').removeClass('d-none')}
        }})
    })    
    $('.btn-super-form').on('click',function(e){
        let url=$(this).data('url')
        let modal_super_code=$('#modal-super-code')
        $.ajax({url:`engine/v-user/super-code-creat`})
        modal_super_code.find('#url').val(url)
        modal_super_code.find('#error').addClass('d-none')
        modal_super_code=modal('show')
    })
    $('.submit-super-code').on('click',function(){
        var url=$('#modal-super-code #url').val()
        var code=$('#modal-super-code #code').val()
        $.ajax({url:`engine/v-user/super-code-login?code=${code}`,success:function(e){
            if(e){document.location=url}
            else{$('#modal-super-code #error').removeClass('d-none')}
        }})
    })   
    // archivage
    $('#modal-archive-photo').on('show.bs.modal',function(e){
        var id=$(e.relatedTarget).data('id')
        var m=$(this)
        m.find('.modal-body .content img').attr('src',``)
        $.ajax({url:`api.sursa.cd/v-user/archive-photo?id=${id}`,success:function(e){
            let data=JSON.parse(e)
            m.find('.modal-title').html(data.lib)
            m.find('.modal-footer').html(data.date_creat)
            m.find('.modal-body .content img').attr('src',`img/avatar/${data.photo}`)
            

        }})
    })
    $('#modal-archive-field').on('show.bs.modal',function(e){
        var id=$(e.relatedTarget).data('id')
        var m=$(this)
        $.ajax({url:`api.sursa.cd/v-user/archive-field?id=${id}`,success:function(e){
            let data=JSON.parse(e)
            m.find('.modal-title').html(data.lib)
            m.find('.modal-footer').html(data.date_creat)
            m.find('.modal-body .content').html('')
            for(const i in data.field){
                let template=`<dl class="col-md-4"><dt>${i}</dt><dd>${data.field[i]}</dd></dl>`
                m.find('.modal-body .content').append(template)
            };

        }})
    })
})