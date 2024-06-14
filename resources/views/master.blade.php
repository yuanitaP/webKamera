@extends('main')
@section('title', 'Master')
@section('artikel')
    <div class="card">
        <div class="card-header">
            <a href="/master/add-form" class="btn btn-primary"><i class="bi bi-patch-plus"></i> Master Data</a>
        </div>
        <div class="card-body">
            @if (session('alert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Jenis</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($km as $idx => $item)
                        <tr>
                            <td>{{ $idx + 1 }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>
                                <img src="{{ asset('/storage/' . $item->foto) }}" alt="{{ $item->foto }}" height="80"
                                    width="80">
                            </td>
                            <td>{{ $item->harga }}</td>
                            <td>
                                <a href="/master/edit-form/{{ $item->id }}" class="btn btn-success"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="/delete/{{ $item->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
