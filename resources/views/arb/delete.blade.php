<div class="modal fade" id="deletemodalarb{{ $data->id }}">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete? 
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a href="{{ route('arb_delete', $data->id )}}">
                <button type="submit" class="btn btn-success">Save changes</button>
            </a>
        </div>
    </form>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->