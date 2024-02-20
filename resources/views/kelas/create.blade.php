@extends('index')
@section('content')
<form action="{{ route('kelas.store')}}" method="POST">
    @csrf

    <div class="col-md-4">
    <div class="nama">
        <label for="nama_kelas">input Nama</label>
        <br>
        <div class="input-group input-group-sm mb-3">
            <input name="nama_kelas" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
    </div>
    <br>
    <div class="kompetensi">
        <label for="nominal">input kompetensi</label>
        <div class="input-group input-group-sm mb-3">
            <input name="kompentesi_keahlian" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
    <br>
    <br>
    <button>Submit</button>
</div>
</form>
@endsection
