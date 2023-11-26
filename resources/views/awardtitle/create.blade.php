<form action="{{ route('awardtitle_store') }}" method="POST">
    @csrf
    <div class="modal fade" id="addmodalawardtitle">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">ADD AWARD TITLE</h4>
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
                        <label for="">LOT NUMBER <span class="text-danger">*</span></label>
                        <select class="form-control" name="lotNumber_id">
                            <option value="">SELECT LOT NUMBER</option>
                            @foreach ($lotNumber as $items)
                                <option value="{{ $items->id }}">{{ $items->lotNo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">FB/COLLECTIVE NAME <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="fbOrcname" placeholder="Enter FB/Collective Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA SERIAL NO. <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="serialNo" placeholder="Enter CLOA Serial No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">AWARD TYPE <span class="text-danger">*</span></label>
                        <select class="form-control" name="awardType_id">
                            <option value="">SELECT OPTION</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id }}">{{ $items->awardType }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">GENERATION DATE</label>
                        <input type="date" class="form-control" name="genDate" placeholder="Enter Generation Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA EPEB NO.</label>
                            <input type="text" class="form-control" name="epebNo" placeholder="Enter CLOA EPEB No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">CLOA EPEB DATE</label>
                        <input type="date" class="form-control" name="epebDate" placeholder="Enter CLOA EPEB Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">REGISTERED DATE</label>
                        <input type="date" class="form-control" name="registerDate" placeholder="Enter Registered Date">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">AWARD TITLE NO.</label>
                        <input type="text" class="form-control" name="awardtitleNo" placeholder="Enter Award Title No.">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">DISTRIBUTION DATE</label>
                        <input type="date" class="form-control" name="distributeDate" placeholder="Enter Distribution Date">
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
