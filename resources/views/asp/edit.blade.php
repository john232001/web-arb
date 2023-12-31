<div class="modal fade" id="editmodalasp{{ $data->id }}">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title">EDIT ASP</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('asp_update', $data->id )}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="">ASP NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="aspNo" value="{{ $data->aspNo }}" placeholder="Enter ASP Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">ASP DATE APPROVED <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="aspDate" value="{{ $data->aspDate }}" placeholder="Enter ASP Date Approved">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">ASP AREA <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="aspArea" value="{{ $data->aspArea }}" placeholder="Enter ASP Area">
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