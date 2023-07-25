<!-- Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Add New</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="add.php">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 form-label">Firstname</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" id="" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 form-label">Lastname</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" id="" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" id="" class="form-control">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-primary"> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>