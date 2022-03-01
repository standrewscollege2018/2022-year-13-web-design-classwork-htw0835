<!-- cool! nothing -->
<div class="container-fluid">
    <h1 class="display-1">Welcome to St Andrew's College!</h1>

    <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#formModal">Create new tutor group</button>

        <div class="modal fade" tabindex="-1" id="formModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add new tutor group</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?page=addtutor">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="inputName1" class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="tutorname">
                                </div>
            
                                <div class="mb-3">
                                    <label for="inputCode1" class="form-label">Tutor Code</label>
                                    <input type="text" class="form-control" placeholder="Tutor Code" maxlength="3" name="tutorcode">
                                    <div id="tutor-help" class="form-text">Three letters maximum</div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
              </div>
            </div>
          </div>
</div>
