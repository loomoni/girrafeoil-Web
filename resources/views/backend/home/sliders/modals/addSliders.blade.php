<div id="addslider" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated lightSpeedIn">
            <div class="modal-header">
                <h4 class="modal-title">Add Slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ url('home-page/add_sliders') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contents">Title</label>
                            <input type="text" class="form-control myContent" rows='5' name="title" id="title" placeholder="title" required="" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userPin">Background Image</label>
                            <input style="position: relative" class="form-control" name="file"  id="file" type="file" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="contents">Short Description</label>
                            <textarea type="text" class="form-control" rows='5' name="description" placeholder="Short description" required=""></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>
                 </div>
            </div>
            </form>
        </div>
    </div>
</div>
