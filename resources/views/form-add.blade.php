@extends('main')
@section('title', 'Form Add Kamera')
@section('artikel')
    <div class="card-header"></div>
    <div class="card-body">
        {{-- Isi Form Add Kamera --}}
        <form action="/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <select name="jenis">
                    <option value="0">Pilih Jenis Kamera</option>
                    <option value="DSLR">DSLR</option>
                    <option value="Mirrorless">Mirrorless</option>
                    <option value="Analog">Analog</option>
                    <option value="Action">Action</option>
                    <option value="360">360</option>
                    <option value="Underwater">Underwater</option>
                    <option value="Medium">Medium</option>
                </select>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control-file" accept="image/*">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" min="500000" max="2100000" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Simpan</button>
                {{-- <input type="button" value="submit" class="btn btn-primary"> --}}
            </div>
        </form>
    </div>
@endsection
