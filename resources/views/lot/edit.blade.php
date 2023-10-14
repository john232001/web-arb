<div class="modal fade" id="editmodallot{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">Edit Lot</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('lot_update', $data->id )}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="">Lot Number</label>
                        <input type="text" class="form-control" name="lotNo" value="{{ $data->lotNo}}" placeholder="Enter Lot Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Lot Type</label>
                        <select class="form-control" name="lotType_id">
                            <option value="">Select Lot Type</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id}}" {{ $data->lotType_id == $items->id ? 'selected' : ''}}>{{ $items->lotType }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Lot Area</label>
                        <input type="text" class="form-control" name="lotArea" value="{{ $data->lotArea}}" placeholder="Enter Lot Area">
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>
