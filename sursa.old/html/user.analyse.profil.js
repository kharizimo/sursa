function build_url(){
    let vars=''
    vars+=$('#noms').val()!=''?`&noms=${$('#noms').val()}`:''
    vars+=$('#sexe').val()!=''?`&sexe=${$('#sexe').val()}`:''
    vars+=$('#num_passeport').val()!=''?`&num_passeport=${$('#num_passeport').val()}`:''
    vars+=$('#autre_piece').val()!=''?`&autre_piece=${$('#autre_piece').val()}`:''
    vars+=$('#telephone').val()!=''?`&telephone=${$('#telephone').val()}`:''
    vars+=$('#groupe_sanguins').val()!=''?`&groupe_sanguins=${$('#groupe_sanguins').val()}`:''
    return vars
}
$(function(){
    $('#search').on('click',function(){
        let vars=build_url()
        // document.location=vars?`?search${vars}`:'user.analyse.profil'
        document.location=`?search${vars}`
    })

    let vars=build_url()
    $('#submit').attr('href',`report.php?page=profils.voyageurs&${vars}`)
})