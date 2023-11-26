<div class="modal fade" id="editmodallot{{ $data->id }}">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title">EDIT LOT</h4>
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
                        <label for="">ARB NAME<span class="text-danger">*</span></label>
                        <select class="form-control" name="arb_name">
                            <option value="">SELECT OPTION</option>
                            @foreach ($arbname as $items)
                                <option value="{{ $items->id }}" {{ $data->arb_name == $items->id ? 'selected' : ''}}>{{ $items->fname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LOT NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lotNo" value="{{ $data->lotNo}}" placeholder="Enter Lot Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LOT TYPE <span class="text-danger">*</span></label>
                        <select class="form-control" name="lotType_id">
                            <option value="">Select Lot Type</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id}}" {{ $data->lotType_id == $items->id ? 'selected' : ''}}>{{ $items->lotType }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LOT AREA <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lotArea" value="{{ $data->lotArea}}" placeholder="Enter Lot Area">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CROP <span class="text-danger">(Fill the field if lot type is Carpable)</span></label>
                        <input type="text" class="form-control" name="crop" value="{{ $data->crop }}" placeholder="Enter Crop">
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>
