$(function(){
    $('#form').on('submit',function(e){
        e.preventDefault()
        var f=$(this)
        $('input[type=checkbox]').each(function(v){
            $('<input>').attr('name','strat[]')
            .attr('type','hidden')
            .val($(this).is(':checked')?'1':'0')
            .appendTo(f)
        })
        alert(f.serialize())
        $.ajax({url:'engine/user/insert',data:f.serialize(),success:function(e){
            document.location='user.liste'
        }})
    })
})