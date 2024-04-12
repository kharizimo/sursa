function send_otp(){
    let token=$('#token').val()
    let _s=$('#_s').val()
    $.ajax({url:`engine/vuser/send-otp?_s=${_s}&token=${token}`,success:function(e){alert(e)}})
}
$(function(){
    $('#send-otp').on('click',send_otp)
    
    let err=$('#err').text()
    if(!err){
        send_otp()
    }
})