<div class="modal fade" id="editmodalawardtitle{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title">EDIT AWARD TITLE</h4>
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
                        <label for="">LOT NUMBER</label>
                        <select class="form-control" name="lotNumber_id">
                            <option value="" disabled>SELECT LOT NUMBER</option>
                            @foreach ($lotNumber as $items)
                                <option value="{{ $items->id }}" {{$data->lotNumber_id == $items->id ? 'selected' : ''}}>{{ $items->lotNo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">FB/COLLECTIVE NAME</label>
                        <input type="text" class="form-control" name="fbOrcname" value="{{ $data->fbOrcname }}" placeholder="Enter FB/Collective Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA SERIAL NO.</label>
                        <input type="text" class="form-control" name="serialNo" value="{{ $data->serialNo }}" placeholder="Enter CLOA Serial No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">AWARD TYPE</label>
                        <select class="form-control" name="awardType_id">
                            <option value="">SELECT LOT NUMBER</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id }}" {{ $data->awardType_id == $items->id ? 'selected' : ''}}>{{ $items->awardType }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">GENERATION DATE</label>
                        <input type="date" class="form-control" name="genDate" value="{{ $data->genDate }}" placeholder="Enter Generation Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA EPEB NO.</label>
                            <input type="text" class="form-control" name="epebNo" value="{{ $data->epebNo }}" placeholder="Enter CLOA EPEB No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA EPEB DATE</label>
                        <input type="date" class="form-control" name="epebDate" value="{{ $data->epebDate }}" placeholder="Enter CLOA EPEB Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">REGISTERED DATE</label>
                        <input type="date" class="form-control" name="registerDate" value="{{ $data->registerDate }}" placeholder="Enter Registered Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">AWARD TITLE NO.</label>
                        <input type="text" class="form-control" name="awardtitleNo" value="{{ $data->awardtitleNo }}" placeholder="Enter Award Title No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">DISTRIBUTION DATE</label>
                        <input type="date" class="form-control" name="distributeDate" value="{{ $data->distributeDate }}" placeholder="Enter Distribution Date">
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
</form>
