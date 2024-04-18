$(function(){
    $('#modal-target-get').on('show.bs.modal',function(e){
        var btn=$(e.relatedTarget)
        var id=btn.data('id')
        var me=$(this)
        
        if(id!='0'){
            $.ajax({
                url:'api.sursa.cd/target/get?id='+id,
                success:function(r){
                    let ret=JSON.parse(r)
                    me.find('#noms').text(ret.noms)
                    me.find('#sexe').text(ret.sexe)
                    me.find('#date_nais').text(ret.date_nais)
                    me.find('#nationalite').text(ret.nationalite)
                    me.find('#telephone').text(ret.telephone)
                    me.find('#email').text(ret.email)
                    me.find('#num_passeport').text(ret.num_passeport)
                    me.find('#autre_piece').text(ret.autre_piece)
                    me.find('#groupe_sanguin').text(ret.groupe_sanguin)
                    me.find('#poids_taille').text(`${ret.poids}Kg / ${ret.taille}cm`)
                    me.find('#id').text(ret.id)
                    me.find('#v_user').val(ret.id)
                    me.find('#procedures').val(ret.procedures)
                    me.find('#raison').val(ret.raison)
                    me.find('#demandeur').text(ret.demandeur)
                    me.find('#photo').attr('src',`img/avatar/${ret.photo}`)
                    
                }
            })
        }
    })
    $('#modal-target-set').on('show.bs.modal',function(e){
        var btn=$(e.relatedTarget)
        var id=btn.data('id')
        var me=$(this)
        if(id!='0'){
            $.ajax({
                url:'api.sursa.cd/target/get-user?id='+id,
                success:function(r){
                    let ret=JSON.parse(r)
                    me.find('#noms').text(ret.noms)
                    me.find('#sexe').text(ret.sexe)
                    me.find('#date_nais').text(ret.date_nais)
                    me.find('#nationalite').text(ret.nationalite)
                    me.find('#telephone').text(ret.telephone)
                    me.find('#email').text(ret.email)
                    me.find('#num_passeport').text(ret.num_passeport)
                    me.find('#autre_piece').text(ret.autre_piece)
                    me.find('#groupe_sanguin').text(ret.groupe_sanguin)
                    me.find('#poids_taille').text(`${ret.poids}Kg / ${ret.taille}cm`)
                    me.find('#id').text(ret.id)
                    me.find('#v_user').val(ret.id)
                    me.find('#photo').attr('src',`img/avatar/${ret.photo}`)
                    
                }
            })
        }
    })
    $('#modal-target-link').on('show.bs.modal',function(e){
        var btn=$(e.relatedTarget)
        var id=btn.data('id')
        var me=$(this)
        if(id!='0'){
            $.ajax({
                url:'api.sursa.cd/target/get?id='+id,
                success:function(r){
                    let ret=JSON.parse(r)
                    me.find('#noms').text(ret.noms)
                    me.find('#sexe').text(ret.sexe)
                    me.find('#telephone').text(ret.telephone)
                    me.find('#num_passeport').text(ret.num_passeport)
                    me.find('#autre_piece').text(ret.autre_piece)
                    me.find('#id').val(ret.id)
                }
            })
        }
    })
    $('#modal-target-set form').submit(function(e){
        var me=$(this)
        $.ajax({url:'api.sursa.cd/target/set',data:me.serialize(),success:function(){
            document.location.reload()
        }})
    })
})