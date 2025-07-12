<div class="row p-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4>Tambah Anggota</h4>

                <form action="/admin/master/anggota" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 text-right">
                            <label for="">NIS</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nis" placeholder="NIS">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                        </div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
