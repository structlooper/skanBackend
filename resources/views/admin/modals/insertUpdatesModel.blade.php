 <div class="modal fade" id="addUpdateModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">Add Updates</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route("insertionUpdates") }}">
          @csrf
          @method("POST")
          <div class="form-group">
            <label>Title</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="title"  name="title">
            </div>
          </div>
          <div class="form-group">
            <label>Link</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="link"  name="link">
            </div>
          </div> 
          <div class="form-group">
            <label>Description</label>
            <div class="input-group">
              <textarea class="form-control" name="desc"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
            </div>
          </div>
        
        </form>
      </div>
    </div>
  </div>
</div>