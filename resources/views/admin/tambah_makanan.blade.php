@extends('layout.main',['title' => 'Dashboard', 'label' => 'Data Makanan'])
  
@section('content')
    

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{ url('admin/act_makanan') }}">
                        @method('post')
                        @csrf

                    <div class="form-group">
                        <label for="">Kode</label>
                        <input type="text" class="form-control" readonly name="kode" value="{{ $kode }}">
                        @error('kode')
                            <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nama makanan</label>
                        <input type="text" class="form-control" name="nama_makanan">
                        @error('nama_makanan')
                        <small class="text-danger"> {{ $message }} </small>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" name="harga">
                        @error('harga')
                        <small class="text-danger"> {{ $message }} </small>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                       <textarea name="keterangan" id=""  class="form-control"></textarea>
                       @error('keterangan')
                       <small class="text-danger"> {{ $message }} </small>
                        @enderror    
                    </div>

                    <button class="btn btn-primary btn-block">Simpan</button>
                    </form>
                    
                </div>
            </div>
          
        </div>
    </div>
  </div>
  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection