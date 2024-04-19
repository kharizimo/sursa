function set_analyse_mvt(index){
    $.ajax({
        url:`api.sursa.cd/voyage/set-analyse-mvt?index=${index}`,
        success:function(){document.location.reload()}
    })
}
function set_analyse_chrono(index){
    $.ajax({
        url:`api.sursa.cd/voyage/set-analyse-chrono?index=${index}`,
        success:function(){document.location.reload()}
    })
}