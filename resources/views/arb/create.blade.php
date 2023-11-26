<form action="{{ route('arb_store') }}" method="POST">
    @csrf
    <div class="modal fade" id="addmodalarb">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">Add ARB</h4>
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
                        <label for="">FIRST NAME <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">LAST NAME <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter Family Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">MIDDLE NAME</label>
                        <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">EXTENSION</label>
                        <input type="text" class="form-control" name="extension" placeholder="Enter Extension">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">SPOUSE NAME</label>
                        <input type="text" class="form-control" name="spousename" placeholder="Enter Spouse Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">DATE OF BIRTH <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="datebirth" placeholder="Enter Date of Birth">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">GENDER <span class="text-danger">*</span></label>
                        <select class="form-control" name="gender_id">
                            <option value="">SELECT GENDER</option>
                            @foreach ($categories as $data)
                                <option value="{{ $data->id}}">{{ $data->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">ADDRESS <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">OWNERSHIP PREFERENCE <span class="text-danger">*</span></label>
                        <select class="form-control" name="ownership_id">
                            <option value="">SELECT OPTION</option>
                            @foreach ($categories as $data)
                                <option value="{{ $data->id }}">{{ $data->ownership }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">DATE OF OATHTAKING <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="dateOfOath" placeholder="Enter Date of OathTaking">
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
