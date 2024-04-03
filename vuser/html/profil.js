$(function(){
    $('#table button').on('click',function(){
        
    })
    load_table()
})
function load_table(){
    let id=$('#table').data('id')
    alert()
    $.ajax({url:`engine/api.identite-vuser/liste?id=${id}`,success:function(e){
        let data=JSON.parse(e)
        let ret=''
        data.forEach(element => {
            ret+='<tr>'+

            '</tr>'
        });
        // $('#table tbody').html(ret)
    }})
}