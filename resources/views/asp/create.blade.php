<form action="{{ route('asp_store') }}" method="POST">
    @csrf
    <div class="modal fade" id="addmodalasp">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h4 class="modal-title">ADD ASP</h4>
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
                        <label for="">ASP NUMBER <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="aspNo" placeholder="Enter ASP Number">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">ASP DATE APPROVED <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="aspDate" placeholder="Enter ASP Date Approved">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="">ASP AREA <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="aspArea" placeholder="Enter ASP Area">
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
