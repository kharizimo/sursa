function generate_vars(){
    let vars=''
    vars+=$('#mvt').val()==''?'':`&mvt=${$('#mvt').val()}`
    vars+=$('#voie_transport').val()==''?'':`&voie_transport=${$('#voie_transport').val()}`
    vars+=$('#pays').val()==''?'':`&pays=${$('#pays').val()}`
    vars+=$('#province').val()==''?'':`&province=${$('#province').val()}`
    vars+=$('#province_dest').val()==''?'':`&province_dest=${$('#province_dest').val()}`
    vars+=$('#id_poste').val()==''?'':`&id_poste=${$('#id_poste').val()}`
    vars+=$('#n_transport').val()==''?'':`&n_transport=${$('#n_transport').val()}`
    vars+=$('#date_debut').val()==''?'':`&date_debut=${$('#date_debut').val()}`
    vars+=$('#date_fin').val()==''?'':`&date_fin=${$('#date_fin').val()}`
    return vars
}
$(function(){
    $('#v_search').on('click',function(){
        var index=$('#v_telephone').val()!=''?$('#v_telephone').val():$('#v_passeport').val()
        
    })
    $('#search').on('click',function(){
        let vars=generate_vars()
        var id=$('#id').val()
        if(id){document.location=`user.analyse.mvt?search${vars}`}
        else{alert("Merci de selectionner le voyageur")}
    })
    $('#report').on('click',function(){
        let vars=generate_vars()
        var id=$('#id').val()
        if(id){document.location=document.location=`report.php?page=mouvement.voyageur&id=${id}${vars}`}
        else{alert("Merci de selectionner le voyageur")}
    })
})
