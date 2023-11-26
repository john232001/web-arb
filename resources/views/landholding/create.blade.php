<form action="{{ route('landholding_store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="addlandholding">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">ADD LANDHOLDINGS</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <label>LANDHOLDING ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lhid" placeholder="Enter Landholding ID">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>FIRST NAME <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>MIDDLE NAME</label>
                        <input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>LAST NAME <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="familyname" placeholder="Last Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>MUNICIPALITY <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="municipality" placeholder="Enter Municipality">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>BARANGAY <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="barangay" placeholder="Enter Barangay">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>OCT/TCT NO. <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="octNo" placeholder="Enter OCT/TCT No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>SURVEY NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="surveyNo" placeholder="Enter Survey Number">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>LOT NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lotNo" placeholder="Enter Lot Number">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>TITLE/SURVEY AREA (IN HECTARES) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="surveyArea" placeholder="Enter Title/Survey Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>TAX DECLARATION NO.</label>
                        <input type="text" class="form-control" name="taxNo" placeholder="Enter Tax Declaration No.">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>MODE OF ACQUISITION</label>
                        <input type="text" class="form-control" name="modeOfAcquisition" placeholder="Enter Mode Of Acquisition">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>COVERABLE AREA</label>
                        <input type="text" class="form-control" name="coverableArea" placeholder="Enter Coverable Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>NON-CARPABLE AREA</label>
                        <input type="text" class="form-control" name="noncarpableArea" placeholder="Enter Non-Carpable Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>RETAINED AREA</label>
                        <input type="text" class="form-control" name="retainedArea" placeholder="Enter Retained Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>DISTRIBUTE AREA</label>
                        <input type="text" class="form-control" name="distributeArea" placeholder="Enter Distribute Area">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>LAND SIZE</label>
                        <input type="text" class="form-control" name="landsize" placeholder="Enter Land Size">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>MAJOR CROPS</label>
                        <input type="text" class="form-control" name="majorCrops" placeholder="Enter Major Crops">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>PHASE</label>
                        <input type="text" class="form-control" name="phase" placeholder="Enter Phase">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>UPALS</label>
                        <select class="form-control" name="upals">
                            <option value="">SELECT OPTION</option>
                            <option value="">YES</option>
                            <option value="">NO</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>YEAR ADDED</label>
                        <input type="text" class="form-control" name="yearAdded" placeholder="Enter Year Added">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>PIPE LINE</label>
                        <input type="text" class="form-control" name="pipeline" placeholder="Enter Pipe Line">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>PROJECT DELIVERY</label>
                        <input type="text" class="form-control" name="projectedDelivery" placeholder="Enter Project Delivery">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>UPLOAD DOCUMENTS</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>MARO <span class="text-danger">*</span></label>
                        <select class="form-control" name="maro_id">
                            <option value="">SELECT OPTION</option>
                            @foreach ($maro as $items)
                                <option value="{{ $items->id}}">{{ $items->officer_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label>PARO <span class="text-danger">*</span></label>
                        <select class="form-control" name="paro_id">
                            <option value="">SELECT OPTION</option>
                            @foreach ($paro as $items)
                                <option value="{{ $items->id}}">{{ $items->officer_name }}</option>
                            @endforeach
                        </select>
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
