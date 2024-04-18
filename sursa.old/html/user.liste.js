$(function(){
    $('#cbo_ets').on('change',function(){
        $('#form #id_ets').val($(this).val())
        $('#form').submit()
    })
})