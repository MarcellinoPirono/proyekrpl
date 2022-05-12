<!-- Delete Transaksi Modal-->
<form action="/data_kasir/{{ $users->slug }}" method="post">
    @method('delete')
    @csrf
    <div class="modal fade" id="deleteModal{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda yakin untuk menghapus data?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <!-- <form action="/data_kasir/{{ $users->slug }}" method="post">
                                                @method('delete')
                                                @csrf -->
                    <a class="btn btn-danger" href="{{ "delete/".$users['id'] }}">Hapus</a>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</form>