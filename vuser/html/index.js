$(function(){
    $('#table').DataTable({
        paging:false,info:false,searching:false,ordering:false,
        ajax:'engine/vuser/index.table'
    })
    
})