    {{-- Add Modal --}}
    <div class="modal Addtodolist fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="justify-content: space-between;">
              <h5 class="modal-title" id="exampleModalLabel">Add Todo List</h5>
              <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close" style="background-color: transparent;border: none;font-size: 20px;">
                <span aria-hidden="true" style="color: #fff;" onclick="closeModalfun('add')">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="title" class="col-form-label">Title:</label>
                  <input type="text" class="form-control" id="title">
                </div>
                <div class="form-group">
                  <label for="description" class="col-form-label">Description:</label>
                  <textarea class="form-control" id="description"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal" onclick="closeModalfun('add')">Close</button>
              <button type="button" class="btn btn-primary" onclick="InsertTodolist()">Submit</button>
            </div>
          </div>
        </div>
      </div>
      {{-- Edit Modal --}}
      <div class="modal Edittodolist fade" id="EditTodoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="justify-content: space-between;">
              <h5 class="modal-title" id="exampleModalLabel">Edit Todo List</h5>
              <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close" style="background-color: transparent;border: none;font-size: 20px;">
                <span aria-hidden="true" style="color: #fff;" onclick="closeModalfun('edit')">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <input type="hidden" id="editid" name="editid" value="">
                <div class="form-group">
                  <label for="title" class="col-form-label">Title:</label>
                  <input type="text" class="form-control" id="edittitle" value="">
                </div>
                <div class="form-group">
                  <label for="description" class="col-form-label">Description:</label>
                  <textarea class="form-control" id="editdescription"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal" onclick="closeModalfun('edit')">Close</button>
              <button type="button" class="btn btn-primary" onclick="UpdateTodolist()">Submit</button>
            </div>
          </div>
        </div>
      </div>
      {{-- Delete Modal --}}
      <div class="modal Edittodolist fade" id="DeleteTodoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="justify-content: space-between;">
              <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
              <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close" style="background-color: transparent;border: none;font-size: 20px;">
                <span aria-hidden="true" style="color: #fff;" onclick="closeModalfun('delete')">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="deleteid" name="deleteid" value="">
              <p>Are you sure do you want delete to this Todo list ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal" onclick="closeModalfun('delete')">Close</button>
              <button type="button" class="btn btn-primary" id="deletetodolist" onclick="DeleteTodoData()">Yes</button>
            </div>
          </div>
        </div>
      </div>
      {{-- Show Modal --}}
      <div class="modal Edittodolist fade" id="ShowdoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="justify-content: space-between;">
              <h5 class="modal-title" id="exampleModaltitle"></h5>
              <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close" style="background-color: transparent;border: none;font-size: 20px;">
                <span aria-hidden="true" style="color: #fff;" onclick="closeModalfun('single')">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="deleteid" name="deleteid" value="">
              <p id='descriptions'></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal" onclick="closeModalfun('single')">Close</button>
            </div>
          </div>
        </div>
      </div>
      <script>
       $("#AddTodolistModal").click(function(){
          $('#exampleModal').modal('show');
       })

       function closeModalfun(action){
          if(action == 'add'){
            $('#exampleModal').modal('hide');
          }else if(action == 'edit'){
            $('#EditTodoModal').modal('hide');
          }else if(action == 'single'){
            $('#ShowdoModal').modal('hide');
          }else{
            $('#DeleteTodoModal').modal('hide');
          }
       }
      </script>
      <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
    </body>
</html>
