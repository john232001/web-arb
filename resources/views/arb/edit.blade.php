<div class="modal fade" id="editmodalarb{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title">Edit ARB</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('arb_update', $data->id )}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="fname" value="{{ $data->fname }}" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lname" value="{{ $data->lname }}" placeholder="Enter Family Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" name="mname" value="{{ $data->mname }}" placeholder="Enter Middle Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Extension</label>
                        <input type="text" class="form-control" name="extension" value="{{ $data->extension }}" placeholder="Enter Extension">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Spouse Name</label>
                        <input type="text" class="form-control" name="spousename" value="{{ $data->spousename }}" placeholder="Enter Spouse Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Date of Birth <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="datebirth" value="{{ $data->datebirth }}" placeholder="Enter Date of Birth">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Gender <span class="text-danger">*</span></label>
                        <select class="form-control" name="gender_id">
                            <option value="">SELECT GENDER</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id}}" {{$data->gender_id == $items->id ? 'selected' : ''}}>{{ $items->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="address" value="{{ $data->address }}" placeholder="Enter Address">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">OWNERSHIP PREFERENCE<span class="text-danger">*</span></label>
                        <select class="form-control" name="ownership_id">
                            <option value="">Select Option</option>
                            @foreach ($categories as $items)
                                <option value="{{ $items->id}}" {{$data->ownership_id == $items->id ? 'selected' : ''}}>{{ $items->ownership }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">Date of OathTaking <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="dateOfOath" value="{{ $data->dateOfOath }}" placeholder="Enter Date of OathTaking">
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
