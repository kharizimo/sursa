$(function(){
    $('#submit').on('click',function(){
        let url=$('#modal form').attr('action')
        let data=$('#modal form').serialize()
        $.ajax({url:url,data:data,success:function(){
            $('#modal').modal('hide')
            load()
        }})
    })
    $('#modal').on('show.bs.modal',function(event){
        let btn=$(event.relatedTarget)
        let id=$(btn).data('id')
        if(id){
            $.ajax({url:`engine/poste/get?id=${id}`,success:function(e){
                let data=JSON.parse(e)
                $('#modal #lib').val(data.lib)
                $('#modal #province').val(data.province)
                $('#modal #po').val(data.po)
                $('#modal #flux').val(data.flux)
            }})
        }
        else{
            $('#modal input').val('')
            $('#modal select.form-control').prop('selectedIndex',0)
        }
    })
})
function fn_del(id){
    $.ajax({url:`engine/poste/del?id=${id}`,success:function(){table.ajax.reload()}})
}