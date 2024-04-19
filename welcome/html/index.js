$(function(){
    $('.btn-mvt').on('click',function(){
        let id=$(this).data('id')
        let mvt=$(this).data('mvt')
        if(id){
            document.location=`voyage?mvt=${mvt}`
        }
        alert($(this).data('mvt'))
    })
})