@extends('layouts.app')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                    <form action="{{route('user.store')}}" method="POST">
                    @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="email" name="email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="password" name="password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="address" class="form-control" required="">
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{route("user.index")}}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection