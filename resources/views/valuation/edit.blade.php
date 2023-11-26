<div class="modal fade" id="editmodalvaluation{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title">EDIT VALUATION</h4>
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
                        <label for="">LOT NUMBER <span class="text-danger">*</span></label>
                        <select class="form-control" name="lotNumber_id">
                            <option value="">SELECT LOT NUMBER</option>
                            @foreach ($lotNumber as $items)
                                <option value="{{ $items->id }}" {{ $items->id == $data->lotNumber_id ? 'selected' : ''}}>{{ $items->lotNo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>AOC NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="aocNo" value="{{ $data->aocNo }}" placeholder="Enter AOC Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>LBP CLAIM NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="claimNo" value="{{ $data->claimNo }}" placeholder="Enter LBP Claim Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>AMOUNT <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="amount" value="{{ $data->amount }}" placeholder="Enter Amount">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>DATE TRANSMITTED TO LBP/AOC</label>
                        <input type="date" class="form-control" name="dateTransmitted" value="{{ $data->dateTransmitted }}" placeholder="Enter Date Transmitted to LBP/AOC">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>DATE OF MOV</label>
                        <input type="date" class="form-control" name="dateofMov" value="{{ $data->dateofMov }}" placeholder="Enter Date of MOV">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>DATE NLVA SERVED TO LO</label>
                        <input type="date" class="form-control" name="dateServed" value="{{ $data->dateServed }}" placeholder="Enter Date NLVA Served to LO">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>DATE OF FI</label>
                        <input type="date" class="form-control" name="dateofFI" value="{{ $data->dateofFI }}" placeholder="Enter Date of FI">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>DATE OF CF RECEIPT</label>
                        <input type="date" class="form-control" name="dateofCF" value="{{ $data->dateofCF }}" placeholder="Enter Date of CF Receipt">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>TRANSMITTAL STATUS</label>
                        <select class="form-control" name="transmittalStatus">
                            <option value="">SELECT OPTION</option>
                            <option value="Accepted">ACCEPTED</option>
                            <option value="Returned">RETURNED</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>IF RETURNED, STATE REASONS</label>
                        <input type="text" class="form-control" name="stateReason" value="{{ $data->stateReason }}" placeholder="Enter Reasons">
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
