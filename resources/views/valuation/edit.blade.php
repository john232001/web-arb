<div class="modal fade" id="editmodalvaluation{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">Edit Valuation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('valuation_update', $data->id )}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="">AOC Number</label>
                        <input type="text" class="form-control" name="aocNo" value="{{ $data->aocNo }}" placeholder="Enter AOC Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LBP Claim Number</label>
                        <input type="text" class="form-control" name="claimNo" value="{{ $data->claimNo }}" placeholder="Enter LBP Claim Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Date Transmitted to LBP/AOC</label>
                        <input type="date" class="form-control" name="dateTransmitted" value="{{ $data->dateTransmitted }}" placeholder="Enter Date Transmitted to LBP/AOC">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Date of MOV</label>
                        <input type="date" class="form-control" name="dateofMov" value="{{ $data->dateofMov }}" placeholder="Enter Date of MOV">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Date NLVA Served to LO</label>
                        <input type="date" class="form-control" name="dateServed" value="{{ $data->dateServed }}" placeholder="Enter Date NLVA Served to LO">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Transmittal Status</label>
                        <select class="form-control" name="status_id">
                            <option value="">Select Status</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id }}" {{ $data->status_id == $items->id ? 'selected' : ''}}>{{ $items->transmittalStatus }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">If returned, state reasons</label>
                        <input type="text" class="form-control" name="stateReason" value="{{ $data->stateReason }}" placeholder="Enter Reasons">
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
