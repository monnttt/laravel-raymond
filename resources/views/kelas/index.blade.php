@extends('index')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>kompetensi keahlian</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kelases_tables as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                
                <td>{{ $value->nama_kelas }}</td>
                <td>{{ $value->kompentesi_keahlian }}</td>

            </tr>
            @empty
            <tr>
                <td colspan="4">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
