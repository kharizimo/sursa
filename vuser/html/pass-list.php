<div class="row"><div class="col"><div class="card"><div class="card-body">
    <table class="table datatable" data-ordering="false" id="tables" data-s="<?=$_s?>">
        <thead><tr>
            <th>Date voyage</th>
            <th>Mouvement</th>
            <th>Origine</th>
            <th>Destination</th>
            <th>Pièce identité</th>
            <th>Date création</th>
            <th>Statut</th>
            <th width="1%"></th>
        </tr></thead>
        <tbody></tbody>
    </table>
</div></div></div></div>
<script>
    dataTableOption.ajax='engine/voyage/table?_s=<?=$_s?>'
</script>