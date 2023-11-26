<form action="{{ route('lot_store') }}" method="POST">
    @csrf
    <div class="modal fade" id="addmodallot">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">ADD LOT</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach ($landholdings as $data)
                        <input type="hidden" class="form-control" name="landholding_id" value="{{ $data->id}}" >
                    @endforeach
                    <div class="col-md-6 mb-2">
                        <label for="">ARB NAME<span class="text-danger">*</span></label>
                        <select class="form-control" name="arb_name">
                            <option value="">SELECT OPTION</option>
                            @foreach ($arbname as $items)
                                <option value="{{ $items->id }}">{{ $items->fname }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('arb_name'))
                            <span class="text-danger">{{ $errors->first('arb_name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LOT NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lotNo" placeholder="Enter Lot Number">
                        @if($errors->has('lotNo'))
                            <span class="text-danger">{{ $errors->first('lotNo') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LOT TYPE <span class="text-danger">*</span></label>
                        <select class="form-control" name="lotType_id">
                            <option value="">SELECT LOT TYPE</option>
                            @foreach ($categories as $data)
                                <option value="{{ $data->id}}">{{ $data->lotType }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('lotType_id'))
                            <span class="text-danger">{{ $errors->first('lotType_id') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LOT AREA <span class="text-danger">(In hectares) *</span></label>
                        <input type="text" class="form-control" name="lotArea" placeholder="Enter Lot Area">
                        @if($errors->has('lotArea'))
                            <span class="text-danger">{{ $errors->first('lotArea') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CROP <span class="text-danger">(Fill the field if lot type is Carpable)</span></label>
                        <input type="text" class="form-control" name="crop" placeholder="Enter Crop">
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
