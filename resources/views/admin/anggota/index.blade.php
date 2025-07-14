<div class="row p-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4>Manajemen Anggota</h4>
                <a href="/admin/master/anggota/create" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah
                    Anggota</a>

                <table class="table table-striped mt-2">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>No Hp</th>
                        <th>Status Pinjam</th>
                        <th>Status Anggota</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($anggota as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->namalengkap }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>
                                @if ($item->status_pinjam == 'Pinjam')
                                    <div class="badge bg-warning">Pinjam</div>
                                @else
                                     <div class="badge bg-success">Bebas</div>
                                @endif
                            </td>
                            <td>
                                 @if ($item->is_active == 1)
                                    <div class="badge bg-success">Aktif</div>
                                @else
                                     <div class="badge bg-danger">Tidak Aktif</div>
                                @endif
                            </td>
                            <td>
                                <a href="/admin/master/anggota/{{ $item->id }}/edit" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach


                </table>
            </div>
        </div>
    </div>
</div>
