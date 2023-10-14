<div class="modal fade" id="editmodalawardtitle{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">Edit Award Title</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('awardtitle_update', $data->id )}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="">Lot Number</label>
                        <select class="form-control" name="lotNumber_id">
                            <option value="" disabled>Select Lot Number</option>
                            @foreach ($lotNumber as $items)
                                <option value="{{ $items->id }}" {{$data->lotNumber_id == $items->id ? 'selected' : ''}}>{{ $items->lotNo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">FB/Collective Name</label>
                        <input type="text" class="form-control" name="fbOrcname" value="{{ $data->fbOrcname }}" placeholder="Enter FB/Collective Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA Serial No.</label>
                        <input type="text" class="form-control" name="serialNo" value="{{ $data->serialNo }}" placeholder="Enter CLOA Serial No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Award Type</label>
                        <select class="form-control" name="awardType_id">
                            <option value="">Select Lot Number</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id }}" {{ $data->awardType_id == $items->id ? 'selected' : ''}}>{{ $items->awardType }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Generation Date</label>
                        <input type="date" class="form-control" name="genDate" value="{{ $data->genDate }}" placeholder="Enter Generation Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA EPEB No.</label>
                            <input type="text" class="form-control" name="epebNo" value="{{ $data->epebNo }}" placeholder="Enter CLOA EPEB No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA EPEB Date</label>
                        <input type="date" class="form-control" name="epebDate" value="{{ $data->epebDate }}" placeholder="Enter CLOA EPEB Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Registered Date</label>
                        <input type="date" class="form-control" name="registerDate" value="{{ $data->registerDate }}" placeholder="Enter Registered Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Award Title No.</label>
                        <input type="text" class="form-control" name="awardtitleNo" value="{{ $data->awardtitleNo }}" placeholder="Enter Award Title No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Distribution Date</label>
                        <input type="date" class="form-control" name="distributeDate" value="{{ $data->distributeDate }}" placeholder="Enter Distribution Date">
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
