{{-- 
    this modal is use to add question in MCQs Question management category 
    --}}

    <div class="modal fade" id="addQuizModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable " style="width:1250px;" role="document">
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
              <label>Question</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" required  name="question">
              </div>
            </div>
            
            <div class="form-group">
              <label>option 1</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" required  name="option_1">
              </div>
            </div>
            
            <div class="form-group">
              <label>option 2</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" required  name="option_2">
              </div>
            </div>
            
            <div class="form-group">
              <label>option 3</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control"   name="option_3">
              </div>
            </div>
            
            <div class="form-group">
              <label>option 4</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control"   name="option_4">
              </div>
            </div>
            
            <div class="form-group">
                <label>Answer</label>
                <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <select class="form-control" required name="answer" id="">
                    <option value="" >Select Answer</option>
                    <option value="" >option 1</option>
                    <option value="" >option 2</option>
                    <option value="" >option 3</option>
                    <option value="" >option 4</option>
                    {{-- @foreach ($categoryData as $item) --}}
                    {{-- <option value="{{ $item->id }} ">{{ $item->category }} </option> --}}
                    {{-- @endforeach --}}
                </select>
            </div>
        </div>
                <div class="form-group">
                  <label>Description</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control"   name="desc">
                  </div>
                </div>
        
           
            
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
