$(function(){
    $('#ident-submit').on('click',function(){
        let id=$('#ident-id').val()
        let numero=$('#ident-numero').val()
        $.ajax({url:`engine/vuser/ident-add?id=${id}&numero=${numero}`,success:load_table})
    })
    load_table()
})
function del(id){
    $.ajax({url:`engine/vuser/ident-del?id=${id}`,success:load_table})
}
function load_table(){
    $.ajax({url:`engine/vuser/ident-list`,success:function(e){
        let data=JSON.parse(e)
        let ret=''
        $(`#ident-id option:not(:first)`).prop('disabled',false)
        data.forEach(element => {
            ret+='<tr>'+
            `<td>${element.lib}</td>`+
            `<td>${element.numero}</td>`+
            `<td><button onclick="del(${element.id})" class="btn btn-danger btn-sm btn-block ident-del"><span class="fa fa-trash"></span></button></td>`+
            '</tr>'
            $(`#ident-id option[value=${element.id}]`).prop('disabled',true)
        })
        $('#ident tbody').html(ret)
        $('#ident-id option:first').prop('selected',true)
        $('#ident-numero').val('')
    }})
}