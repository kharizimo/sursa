<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="#">
            <input type="hidden" name="id" value="">
              <div class="form-group">
                  <label for="">Libéllé</label>
                  <input type="text" name="lib" id="lib" class="form-control">
              </div>
              <div class="form-group">
                  <label for="">Province</label>
                  <select name="province" id="province" class="form-control"><?=Combo::array(Vars::$provinces_rdc)?></select>
              </div>
              <div class="form-group">
                  <label for="">Po</label>
                  <input name="po" id="po" type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label for="">flux</label>
                  <input name="flux" id="flux" type="text" class="form-control">
              </div>
              <hr>
              <div class="text-right"><button type="submit" class="btn btn-primary">Appliquer</button></div>
          </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
