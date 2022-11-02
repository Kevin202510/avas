<div class="modal fade" id="modal-main" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"> Add Meal </h4>
                <div class="pull-left"><button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></button></div>
            </div>
            <div class="modal-body">
                <form id="set-Model" class="form-horizontal"> 
                    <input type="hidden" name="id" id="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Code</label>
                            <input type="text" class="form-control" id="cpde" name="code">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Meal Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea class="form-control is-invalid" id="description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Category</label>
                            <select class="form-control" name="category_id" id="category-id"></select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Price</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="1">Available</option>
                                <option value="0">Not Available</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary form-control" id="engrave" value="create-new">Save</button>
            </div>
        </div>
    </div>
</div>