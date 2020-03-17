{{-- 
    this modal is use to add Category in MCQs Question management
    --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="addMcqsCategory" method="POST">
                    @csrf
                    @method('POST')
                  <div class="form-group">
                    <label>Question Name</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" required  name="Qname">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Select Question Category</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <select class="form-control" required name="Qcategory" id="">
                          <option value="" >Select Category</option>
                          @foreach ($categoryData as $item)
                          <option value="{{ $item->id }} ">{{ $item->category }} </option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Time Slot</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <select name="QtimeSet" class="form-control" id="">
                          <option value="yes">Yes</option>
                          <option value="No">No</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Time in Min</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control"  name="Qtime">
                    </div>
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>



{{-- 
    this modal is use to update Category in MCQs Question management
    --}}

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="updateMcqsCategory" method="POST">
                    @csrf
                    @method('POST')
                  <div class="form-group">
                    <label>Question Name</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" required  name="Qname">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Select Question Category</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <select class="form-control" required name="Qcategory" id="">
                          <option value="" >Select Category</option>
                          @foreach ($categoryData as $item)
                          <option value="{{ $item->id }} ">{{ $item->category }} </option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Time Slot</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <select name="QtimeSet" class="form-control" id="">
                          <option value="yes">Yes</option>
                          <option value="No">No</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Time in Min</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control"  name="Qtime">
                    </div>
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>