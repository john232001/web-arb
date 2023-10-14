<div class="modal fade" id="editlandholding{{ $data->id }}">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">Add Landholding</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('landholding_update', $data->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <label for="">Landholding ID</label>
                        <input type="text" class="form-control" name="lhid" value="{{ $data->lhid }}" placeholder="Enter Landholding ID">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="{{ $data->firstname }}" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" name="middlename" value="{{ $data->middlename }}" placeholder="Enter Middle Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="familyname" value="{{ $data->familyname }}" placeholder="Last Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Municipality</label>
                        <input type="text" class="form-control" name="municipality" value="{{ $data->municipality }}" placeholder="Enter Municipality">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Barangay</label>
                        <input type="text" class="form-control" name="barangay" value="{{ $data->barangay }}" placeholder="Enter Barangay">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">OCT/TCT No.</label>
                        <input type="text" class="form-control" name="octNo" value="{{ $data->octNo }}" placeholder="Enter OCT/TCT No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Survey Number</label>
                        <input type="text" class="form-control" name="surveyNo" value="{{ $data->surveyNo }}" placeholder="Enter Survey Number">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Lot Number</label>
                        <input type="text" class="form-control" name="lotNo" value="{{ $data->lotNo }}" placeholder="Enter Lot Number">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Title/Survey Area (in hectares)</label>
                        <input type="text" class="form-control" name="surveyArea" value="{{ $data->surveyArea }}" placeholder="Enter Title/Survey Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Tax Declaration No.</label>
                        <input type="text" class="form-control" name="taxNo" value="{{ $data->taxNo }}" placeholder="Enter Tax Declaration No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Mode Of Acquisition</label>
                        <input type="text" class="form-control" name="modeOfAcquisition" value="{{ $data->modeOfAcquisition }}" placeholder="Enter Mode Of Acquisition">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">CF/DF No.</label>
                        <input type="text" class="form-control" name="dfNo" value="{{ $data->dfNo }}" placeholder="Enter CF/DF No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Coverable Area</label>
                        <input type="text" class="form-control" name="coverableArea" value="{{ $data->coverableArea }}" placeholder="Enter Coverable Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Non-Carpable Area</label>
                        <input type="text" class="form-control" name="noncarpableArea" value="{{ $data->noncarpableArea }}" placeholder="Enter Non-Carpable Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Retained Area</label>
                        <input type="text" class="form-control" name="retainedArea" value="{{ $data->retainedArea }}" placeholder="Enter Retained Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Distribute Area</label>
                        <input type="text" class="form-control" name="distributeArea" value="{{ $data->distributeArea }}" placeholder="Enter Distribute Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Land Size</label>
                        <input type="text" class="form-control" name="landsize" value="{{ $data->landsize }}" placeholder="Enter Land Size">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Major Crops</label>
                        <input type="text" class="form-control" name="majorCrops" value="{{ $data->majorCrops }}" placeholder="Enter Major Crops">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Phase</label>
                        <input type="text" class="form-control" name="phase" value="{{ $data->phase }}" placeholder="Enter Phase">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">UPALS</label>
                        <input type="text" class="form-control" name="upals" value="{{ $data->upals }}" placeholder="Enter UPALS">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Year Added</label>
                        <input type="text" class="form-control" name="yearAdded" value="{{ $data->yearAdded }}" placeholder="Enter Year Added">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Pipe Line</label>
                        <input type="text" class="form-control" name="pipeline" value="{{ $data->pipeline }}" placeholder="Enter Pipe Line">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Project Delivery</label>
                        <input type="text" class="form-control" name="projectedDelivery" value="{{ $data->projectedDelivery }}" placeholder="Enter Project Delivery">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Upload Documents</label>
                        <input type="file" class="form-control" name="file" value="{{ $data->file }}">
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
