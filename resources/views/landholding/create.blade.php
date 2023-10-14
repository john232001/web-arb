<form action="{{ route('landholding_store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="addlandholding">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">Add Landholding</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <label for="">Landholding ID</label>
                        <input type="text" class="form-control" name="lhid" placeholder="Enter Landholding ID">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="familyname" placeholder="Last Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Municipality</label>
                        <input type="text" class="form-control" name="municipality" placeholder="Enter Municipality">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Barangay</label>
                        <input type="text" class="form-control" name="barangay" placeholder="Enter Barangay">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">OCT/TCT No.</label>
                        <input type="text" class="form-control" name="octNo" placeholder="Enter OCT/TCT No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Survey Number</label>
                        <input type="text" class="form-control" name="surveyNo" placeholder="Enter Survey Number">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Lot Number</label>
                        <input type="text" class="form-control" name="lotNo" placeholder="Enter Lot Number">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Title/Survey Area (in hectares)</label>
                        <input type="text" class="form-control" name="surveyArea" placeholder="Enter Title/Survey Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Tax Declaration No.</label>
                        <input type="text" class="form-control" name="taxNo" placeholder="Enter Tax Declaration No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Municipalit Agrarian Reform Officer</label>
                        <select class="form-control" name="maro_id">
                            <option value="">Select Maro Officers</option>
                            @foreach ($maro as $items)
                                <option value="{{ $items->id}}">{{ $items->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Mode Of Acquisition</label>
                        <input type="text" class="form-control" name="modeOfAcquisition" placeholder="Enter Mode Of Acquisition">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">CF/DF No.</label>
                        <input type="text" class="form-control" name="dfNo" placeholder="Enter CF/DF No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Coverable Area</label>
                        <input type="text" class="form-control" name="coverableArea" placeholder="Enter Coverable Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Non-Carpable Area</label>
                        <input type="text" class="form-control" name="noncarpableArea" placeholder="Enter Non-Carpable Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Retained Area</label>
                        <input type="text" class="form-control" name="retainedArea" placeholder="Enter Retained Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Distribute Area</label>
                        <input type="text" class="form-control" name="distributeArea" placeholder="Enter Distribute Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Land Size</label>
                        <input type="text" class="form-control" name="landsize" placeholder="Enter Land Size">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Major Crops</label>
                        <input type="text" class="form-control" name="majorCrops" placeholder="Enter Major Crops">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Phase</label>
                        <input type="text" class="form-control" name="phase" placeholder="Enter Phase">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">UPALS</label>
                        <input type="text" class="form-control" name="upals" placeholder="Enter UPALS">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Year Added</label>
                        <input type="text" class="form-control" name="yearAdded" placeholder="Enter Year Added">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Pipe Line</label>
                        <input type="text" class="form-control" name="pipeline" placeholder="Enter Pipe Line">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Project Delivery</label>
                        <input type="text" class="form-control" name="projectedDelivery" placeholder="Enter Project Delivery">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="">Upload Documents</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>
