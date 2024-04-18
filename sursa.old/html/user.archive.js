function ch_s(index){
    $('select#v_user').data('s',index)
    loads()
}
function loads(){
    let _s=$('select#v_user').data('s')
    let v_user=$('select#v_user').val()
    document.location=`?v_user=${v_user}&_s=${_s}`
}