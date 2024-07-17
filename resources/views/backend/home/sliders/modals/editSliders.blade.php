<div id="edit{{ $data->id }}" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated lightSpeedIn">
            <div class="modal-header">
                <h4 class="modal-title">Update Slider Contents</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ url('home-page/edit_sliders', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contents">Title</label>
                            <input type="text" class="form-control myContent" rows='5' name="title" id="title" placeholder="title" required="" value="{{ $data->title }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userPin">Update Background Image</label>
                            <input style="position: relative" class="form-control" name="file"  id="file" type="file" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="contents">Short Description</label>
                            <textarea type="text"  class="form-control" rows='5' name="description"  placeholder="Description" required="">{{ $data->description }}</textarea>
                        </div>
                    </div>
                    {{-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="userPin">Update Location</label>
                            <select name="location" class="form-control" required="">
                                <option value="Tanzania" {{$data->location == 'Tanzania' ? 'selected' : ''}}>Tanzania</option>
                                <option value="Zanzibar" {{$data->location != 'Tanzania' ? 'selected' : ''}}>Zanzibar</option>
                            </select>
                        </div>
                        
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
