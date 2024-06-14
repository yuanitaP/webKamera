@extends('main')
@section('title', 'Form Edit Kamera')
@section('artikel')
    <div class="card-header"></div>
    <div class="card-body">
        {{-- Isi Form Add Kamera --}}
        <form action="/update/{{ $km->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control" value="{{ $km->merk }}" required>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <select name="jenis">
                    <option value="0">--Pilih Jenis Kamera--</option>
                    <option value="DSLR" {{ $km->jenis == 'DSLR' ? 'Selected' : '' }}>DSLR</option>
                    <option value="Mirrorless" {{ $km->jenis == 'Mirrorless' ? 'Selected' : '' }}>Mirrorless</option>
                    <option value="Analog" {{ $km->jenis == 'Analog' ? 'Selected' : '' }}>Analog</option>
                    <option value="Action {{ $km->jenis == 'Action' ? 'Selected' : '' }}">Action</option>
                    <option value="360" {{ $km->jenis == '360' ? 'Selected' : '' }}>360</option>
                    <option value="Underwater" {{ $km->jenis == 'Underwater' ? 'Selected' : '' }}>Underwater</option>
                    <option value="Medium" {{ $km->jenis == 'Medium' ? 'Selected' : '' }}>Medium</option>
                </select>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control-file" accept="image/*">
            </div>
            <div class="from-group">
                @if ($km->foto)
                    <img src="{{ asset('/storage' . $km->foto) }}" alt="{{ $km->foto }}" height="80" width="100">
                @else
                    <img src="/storage/poster/no_image.png" alt="No Image" width="80" height="80">
                @endif
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" min="500000" max="2100000" name="harga" class="form-control"
                    value="{{ $km->harga }}" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Edit</button>
                {{-- <input type="button" value="submit" class="btn btn-primary"> --}}
            </div>
        </form>
    </div>
@endsection
