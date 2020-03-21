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