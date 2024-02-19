@extends('index')
@section('content')
<form action="{{ route('spp.store')}}" method="POST">
    @csrf

    <div class="col-md-4">
    <div class="tahun">
        <label for="tahun">input tahun</label>
        <br>
        <div class="input-group input-group-sm mb-3">
            <input name="tahun" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>

    </div>
    <br>
    <div class="nominal">
        <label for="nominal">input nominal</label>
        <div class="input-group input-group-sm mb-3">
            <input name="nominal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>


    </div>
    <br>
    <button>Submit</button>
</div>
</form>
@endsection
