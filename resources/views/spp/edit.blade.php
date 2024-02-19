@extends('index')
@section('content')
<form action="{{ route('spp.update', $spps_tables->id_spp) }}" method="post">
@csrf
@method('put')
    <div class="col-md-4">
    <div class="tahun">
        <label for="tahun">Tahun</label>
        <br>
        <div class="input-group input-group-sm mb-3">
            <input name="tahun" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $spps_tables->tahun }}">
          </div>
    </div>
    <br>
    <div class="nominal">
        <label for="nominal">Nominal</label>
        <div class="input-group input-group-sm mb-3">
            <!-- Input untuk nominal -->
            <input name="nominal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $spps_tables->nominal }}">
          </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection
