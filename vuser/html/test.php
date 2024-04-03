<style>
    .iti{width:100%}
</style>
<div class="row"><div class="col-6">
    <div class="form-group">
        <label for="">test</label>
        <select name="" id="" class="form-control">
            <?=Combo::object(Db::row("select id,lib from piece_identite"),['no_data'=>['','Select']])?>
        </select>
    </div>
    <button class="btn btn-primary" onclick="alert(document.querySelector('select').value)">Test</button>
</div></div>