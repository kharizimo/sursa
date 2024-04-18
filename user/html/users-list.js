$(function(){
    $('#modal-del').on('shown.bs.modal',function(e){
        let id=$(e.relatedTarget).data('id')
        $('#btn-del').attr('href',`engine/user/del?id=${id}`)
    })
    $('#modal-user').on('show.bs.modal',function(e){
        let id=$(e.relatedTarget).data('id')
        
        $(this).find('form input.form-control').val('')
        $(this).find('form select.form-control').prop("selectedIndex", 0);
        $(this).find('h4.modal-title').text('Ajouter utilisateur')
        $(this).find('form #id').val(0)
        $(this).find('form').attr('action','engine/user/insert')
        if(id){
            $(this).find('form #id').val(id)
            $(this).find('form').attr('action','engine/user/update')
            $(this).find('h4.modal-title').text('Modifier utilisateur')
            $.ajax({url:`engine/user/get?id=${id}`,success:function(r){
                let data=JSON.parse(r)
                $('#id').val(data.id)
                $('#nom').val(data.nom)
                $('#pseudo').val(data.pseudo)
                $('#email').val(data.email)
                $('#telephone').val(data.telephone)
                $('#info').val(data.info)
                $('#profil').val(data.profil)
                $('#adresse').val(data.adresse)
                $('#etat').val(data.etat)
            }})
        }
        
    })
})