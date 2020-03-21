  {{-- modal with form --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">Add Values</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="addingValues">
          @csrf
          @method("POST")
          <div class="form-group">
            <label>Source</label>
            <div class="input-group">
              {{-- <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </div>
              </div> --}}
              <input type="text" class="form-control" placeholder="Source" required name="source">
            </div>
          </div>
          <div class="form-group">
            <label>Category</label>
            <div class="input-group">
              {{-- <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-lock"></i>
                </div>
              </div> --}}
              <input type="text" class="form-control" placeholder="Category" required name="category">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              {{-- <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-lock"></i>
                </div>
              </div> --}}
              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
            </div>
          </div>
        
        </form>
      </div>
    </div>
  </div>
</div>


{{-- updation values --}}
 {{-- this is for updation modal for the details of values --}}
 <div class="modal fade" id="updationModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="formModal">Update Values</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <form id="lot" method="POST" action="dataUpdate">
         @csrf
         @method("POST")
         <div class="form-group">
           <label>Source</label>
           <div class="input-group">
             
             <input type="text" id='sourceID' class="form-control"  name="source" required>
           </div>
         </div>
         <div class="form-group">
           <label>Category</label>
           <div class="input-group">
            
             <input type="text" id='categoryID' class="form-control"   name="category" required>
           </div>
         </div>
         <div class="form-group">
           <div class="input-group">
            
             <button type="submit" value="primaryID" id="updationModal" class="btn btn-warning m-t-15 insertValue">Update</button>
           </div>
         </div>
       
       </form>
     </div>
     
   </div>
 </div>
</div>





{{-- Confirmation for deleting the value modal --}}
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
      
      <a href="delete" class="btn btn-Danger" id="delete12">Yes</a>
      
      
    </div>
  </div>
</div>
</div>
