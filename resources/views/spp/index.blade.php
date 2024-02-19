@extends('index')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>ID SPP</th>
                <th>Nominal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($spps_tables as $key => $spp)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $spp->tahun }}</td>
                <td>{{ $spp->nominal }}</td>
                <td>
                    <a href="{{ route('spp.edit', $spp->id_spp) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('spp.destroy', $spp->id_spp)}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </td>
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
