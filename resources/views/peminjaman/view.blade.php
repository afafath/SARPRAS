@extends('layouts.layout')
@section('content')
<title>Data Peminjaman</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</div>
 
 <div class="card shadow mb-4">

<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-dark">Data Peminjaman</h6>
</div>
<div class="card-body">
  <div class="table-responsive">
    {{-- <button class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>--}}
    <a href="/peminjaman/export_excel" class="btn btn-warning my-3" target="_blank">EXPORT EXCEL</a>
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
        </table>
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
 
  
@endsection