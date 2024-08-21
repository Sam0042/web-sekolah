@extends('components.app')

@section('content')
    <h1 class="text-center mt-3">Profil Sekolah</h1>
    <style>
        th,
        td {
            border: solid black 1px;
        }
    </style>
    <table style="border: solid black 1px;" border="1" cellpadding='10' class="mx-auto">
        @foreach ($profil as $p)
            <tr>
                <th>Nama Sekolah</th>
                <td>{{ $p->nama_sekolah }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $p->alamat }}</td>
            </tr>
            <tr>
                <th>No Telp</th>
                <td>{{ $p->telp }}</td>
            </tr>
            <tr>
                <th>Visi</th>
                <td>{{ $p->visi }}</td>
            </tr>
            <tr>
                <th>Misi</th>
                <td>{{ $p->misi }}</td>
            </tr>
        @endforeach
    </table>
@endsection
