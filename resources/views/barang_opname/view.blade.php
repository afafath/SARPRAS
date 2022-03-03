@extends('layouts.layout')
@section('content')
<title>Barang Opname</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</div>

 <div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-dark">Barang Opname</h6>
</div>

<div class="card-body">
   
  <div class="table-responsive">
    <button class="btn btn-info" data-toggle="modal" data-target="#tambah" >Tambah Data</button>
      <br>
      <br>
      <table id="example" class="table table-bordered js-basic-example dataTable" cellspacing="0">
        <div class="row">
          <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="example_length">
                  <label>
                      show
                      <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                      </select>
                      entries
                  </label>
                {{-- <div class="col-sm-12 col-md-6">
                    <div id="example_filter" class="dataTables_filter">
                        <label>
                            "Search:"
                            <input type="search" class="form-control form-control-sm" placeholder aria-controls="example">
                        </label>

                    </div>
                </div> --}}
              </div>
          </div>

       </div>
          
  </div>
</div>

<div id="tambah" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Masukan Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      
        <div class="form-group">
            <label for="">Kode Tanah</label>
            <input type="text" name="nama_barang" class="form-control"  required>
        </div>
        <div class="form-group">
              <label for="">Nomor Sertifikat</label>
              <input type="text" name="id_barang" class="form-control"  required>
        </div>
        <div class="form-group">
              <label for="">Nama Pemilik</label>
              <input type="text" name="kategori_id" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Luas Tanah</label>
          <select name="kategori_id" class="form-control" required>
            <option value="" selected disabled></option>
             
          </select>
      </div>
       <div class="form-group">
            <label for="">Sumber Perolehan</label>
             <input type="text" name="penanggung_jawab" class="form-control"  required>
       </div>
        <div class="form-group">
            <label for="">Tanggal Perolehan</label>
            <input type="text" name="merk_barang" class="form-control"  required>
        </div>
        <div class="form-group">
          <label for="">Letak Tanah</label>
          <input type="text" name="seri_barang" class="form-control"  required>
        </div>
        <div class="form-group">
          <label for="">Batas Tanah Utara</label>
          <input type="text" name="tanggal_pengadaan" class="form-control"  required>
        </div>
        <div class="form-group">
      <label for="">Batas Tanah Barat</label>
      <input type="text" name="hasil_perolehan" class="form-control"  required>
       </div>
        <div class="form-group">
              <label for="">Batas Tanah Selatan</label>
              <input type="number" name="jumlah" class="form-control"  required>
          </div>
          <div class="form-group">
            <label for="">Satuan</label>
            <input type="text" name="satuan" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Batas Tanah Timur</label>
          <input type="text" name="residu" class="form-control"  required>
      </div>
      <div class="form-group">
        <label for="">Harga Tanah</label>
        <input type="text" name="ekonomis_barang" class="form-control"  required>
    </div>
    <div class="form-group">
      <label for="">Penggunaan Tanah</label>
      <input type="text" name="ekonomis_barang" class="form-control"  required>
  </div>
  <div class="form-group">
    <label for="">Sertifikat Tanah (.pdf)</label>
    <input type="text" name="ekonomis_barang" class="form-control"  required>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>

  
@endsection