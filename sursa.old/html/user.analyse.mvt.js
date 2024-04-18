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
    $('#search').on('click',function(){
        let vars=generate_vars()
        document.location=`user.analyse.mvt?search${vars}`
    })

    $('#report').on('click',function(){
        let vars=generate_vars()
        
        let page=$('#photo').is(':checked')?'mouvement.voyageurs.photo':'mouvement.voyageurs'
        window.open(`report.php?page=${page}${vars}`)
    })
})
