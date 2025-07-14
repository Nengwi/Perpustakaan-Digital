<div class="row p-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4>Tambah Anggota</h4>

                @isset($anggota)
                    <form action="/admin/master/anggota/{{ $anggota->id }}" method="POST">
                        @method('PUT')
                @endisset

                    <form action="/admin/master/anggota" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="">NIS</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error('nis') is-invalid @enderror"
                                    name="nis" placeholder="NIS"
                                    value="{{ isset($anggota) ? $anggota->nis : old('nis') }}">
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
                                <input type="text" class="form-control  @error('namalengkap') is-invalid @enderror"
                                    name="namalengkap" placeholder="Nama Lengkap"
                                    value="{{ isset($anggota) ? $anggota->namalengkap : old('namalengkap') }}">
                                @error('namalengkap')
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
                                <select type='text' name='jurusan'
                                    class="form-control @error('jurusan') is-invalid @enderror">
                                    <option value="">-- Jurusan --</option>
                                    <option value="ATPH" {{ old('Jurusan') == 'ATPH' ? 'selected' : '' }}>ATPH
                                    </option>
                                    <option value="APHP" {{ old('Jurusan') == 'APHP' ? 'selected' : '' }}>APHP
                                    </option>
                                    <option value="ATU" {{ old('Jurusan') == 'ATU' ? 'selected' : '' }}>ATU</option>
                                    <option value="APAT" {{ old('Jurusan') == 'APAT' ? 'selected' : '' }}>APAT
                                    </option>
                                    <option value="TLOG" {{ old('Jurusan') == 'TLOG' ? 'selected' : '' }}>TLOG
                                    </option>
                                    <option value="TITL" {{ old('Jurusan') == 'TITL' ? 'selected' : '' }}>TITL
                                    </option>
                                    <option value="TAB" {{ old('Jurusan') == 'TAB' ? 'selected' : '' }}>TAB</option>
                                    <option value="TPM" {{ old('Jurusan') == 'TPM' ? 'selected' : '' }}>TPM</option>
                                    <option value="TSM" {{ old('Jurusan') == 'TSM' ? 'selected' : '' }}>TSM</option>
                                    <option value="RPL" {{ old('Jurusan') == 'RPL' ? 'selected' : '' }}>RPL</option>
                                    <option value="TKN" {{ old('Jurusan') == 'TKN' ? 'selected' : '' }}>TKN</option>
                                    <option value="NKN" {{ old('Jurusan') == 'NKN' ? 'selected' : '' }}>NKN</option>
                                    <option value="NKPI" {{ old('Jurusan') == 'NKPI' ? 'selected' : '' }}>NKPI
                                    </option>
                                    <option value="DPB" {{ old('Jurusan') == 'DPB' ? 'selected' : '' }}>DPB</option>
                                    <option value="KULINER" {{ old('Jurusan') == 'KULINER' ? 'selected' : '' }}>KULINER
                                    </option>
                                    <option value="UPW" {{ old('Jurusan') == 'UPW' ? 'selected' : '' }}>UPW</option>
                                </select>
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
                                        <input type="text"
                                            class="form-control  @error('tempat_lahir') is-invalid @enderror"
                                            name="tempat_lahir" placeholder="Tempat Tanggal Lahir"
                                            value="{{ isset($anggota) ? $anggota->tempat_lahir : old('tempat_lahir') }}">
                                        @error('tempat_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date"
                                            class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                            name="tanggal_lahir" placeholder="Tanggal Lahir"
                                            value="{{ isset($anggota) ? $anggota->tanggal_lahir : old('tanggal_lahir') }}">
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
                                <select type='text' name='jenis_kelamin'
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Taruna"
                                        {{ isset($anggota) ? ($anggota->jenis_kelamin == 'Taruna' ? 'selected' : old('jenis_kelamin')) : '' }}>
                                        Taruna</option>
                                    <option value="Taruni"
                                        {{ isset($anggota) ? ($anggota->jenis_kelamin == 'Taruni' ? 'selected' : old('jenis_kelamin')) : '' }}>
                                        Taruni</option>
                                </select>
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
                                    name="no_hp" placeholder="No HP"
                                    value="{{ isset($anggota) ? $anggota->no_hp : old('no_hp') }}">
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
                                <button type="submit"
                                    class="btn btn-primary">{{ isset($anggota) ? 'ubah' : 'Tambahkan' }}</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
