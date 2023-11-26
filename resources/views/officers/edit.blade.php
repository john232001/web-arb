<div class="modal fade" id="editofficer{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title">EDIT OFFICER</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('officer_update', $data->id )}}" method="POST" >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <label>OFFICER NAME <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="officer_name" value="{{ $data->officer_name }}" placeholder="Enter Officer Name">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>ROLE <span class="text-danger">*</span></label>
                        <select class="form-control" name="role_id">
                            <option value="" disabled>SELECT OPTION</option>
                            @foreach ($positions as $items)
                                <option value="{{ $items->id }}" {{ $data->position_id == $items->id ? 'selected' : ''}}>{{ $items->position_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
