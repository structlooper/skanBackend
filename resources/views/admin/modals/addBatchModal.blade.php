 {{-- modal with form --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">Add Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('insertBatch') }}">
          @csrf
          @method("POST")
          <div class="form-group">
            <label>Batch Name</label>
            <div class="input-group">
              <input type="text" class="form-control" name="batchName">
            </div>
          </div>
          <div class="form-group">
            <label>Batch Id</label>
            <div class="input-group">
              <select class="form-control" name="batchId">
                @foreach($centerId as $item)
                <option value="{{ $item->id }}">{{ $item->centerName }} <span class="text-muted">({{ $item->id }})</span></option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
              </div> 
            </div>
          </div>
        
        </form>
      </div>
  </div>
</div>





<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      Are you sure want to delete this record?
    </div>
    <div class="modal-footer bg-whitesmoke br">
      <form action="batchDelete" method="POST" id="delete12"> @csrf  @method('DELETE')  <button type="submit" class="btn btn-danger">Yes</button></form>
      
      
    </div>
  </div>
</div>
</div>