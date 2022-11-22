@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <h3>Tambah BoM</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype=multipart/form-data action="{{route('bom.store')}}">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="code">Kode Produk</label>
                                <input id="code" type="text" class="form-control" name="code" placeholder="Kode Produk">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Produk</label> 
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nama Produk">
                            </div>
                            <div class="form-group">
                                <label for="tterigu">Bahan yang diperlukan</label><br>
                                <label for="tterigu">Tepung Terigu</label>
                                <input id="tterigu" type="number" class="form-control" name="tterigu" placeholder="Tepung Terigu">
                            </div>
                            <div class="form-group">
                                <label for="ttapioka">Tepung Tapioka</label>
                                <input id="ttapioka" type="number" class="form-control" name="ttapioka" placeholder="Tepung Tapioka">
                            </div>
                            <div class="form-group">
                                <label for="garam">Garam</label>
                                <input id="garam" type="number" class="form-control" name="garam" placeholder="garam">
                            </div>
                            <div class="form-group">
                                <label for="telur">Telur</label>
                                <input id="telur" type="number" class="form-control" name="telur" placeholder="telur">
                            </div>
                            <div class="form-group">
                                <label for="sawi">Sawi</label>
                                <input id="sawi" type="number" class="form-control" name="sawi" placeholder="Sawi">
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input id="price" type="number" class="form-control" name="price" placeholder="Harga">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                Tambah BoM
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
