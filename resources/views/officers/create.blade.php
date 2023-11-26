<form action="{{ route('officer_store') }}" method="POST" >
    @csrf
    <div class="modal fade" id="addofficer">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">ADD OFFICER</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <label>OFFICER NAME <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="officer_name" placeholder="Enter Officer Name">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>POSITION <span class="text-danger">*</span></label>
                        <select class="form-control" name="position_id">
                            <option value="">SELECT OPTION</option>
                            @foreach ($positions as $items)
                                <option value="{{ $items->id }}">{{ $items->position_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Add</button>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>
