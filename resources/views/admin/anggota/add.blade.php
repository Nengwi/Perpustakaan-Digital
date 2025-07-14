<div class="row p-3">
    <div class="col-md-8">
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
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis"
                                placeholder="NIS">
                            @error('nis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                name="nama" placeholder="Nama Lengkap">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                            <label for="">Jurusan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control  @error('jurusan') is-invalid @enderror"
                                name="nomor_anggota" placeholder="Jurusan">
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                            <label for="">Tempat Tanggal Lahir</label>
                        </div>
                        <div class="col-md-8 mt-1">
                            <div class="row">
                                <div class="col-md-8">
                                    <input
                                        type="text"class="form-control  @error('tempat_lahir') is-invalid @enderror"
                                        name="tempat_lahir" placeholder="Tempat Tanggal Lahir">
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="date"
                                        class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                        name="tanggal_lahir" placeholder="Tanggal Lahir">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                            <label for="">Jenis kelamin</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control  @error('jenis_kelamin') is-invalid @enderror"
                                name="jenis_kelamin" placeholder="Jenis Kelamin">
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                            <label for="">No Hp</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control  @error('no_hp') is-invalid @enderror"
                                name="no_hp" placeholder="No HP">
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                            <label for="">Foto</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                name="foto" placeholder="Foto">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4 text-right">
                        </div>
                        <div class="col-md-8">
                            <a href="/admin/master/anggota" class="btn btn-info"><i
                                    class="fas fa-arrow-left"></i>Kembali</a>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
