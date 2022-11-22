@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <h3>Tambah Vendor</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype=multipart/form-data action="{{route('vendor.store')}}">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Nama Vendor</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nama Vendor">
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota Vendor</label>
                                <input id="kota" type="text" class="form-control" name="kota" placeholder="Kota Vendor">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Vendor</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat Vendor">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Vendor</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email Vendor">
                            </div>
                            <div class="form-group">
                                <label for="tlp">No Telepon Vendor</label>
                                <input id="tlp" type="text" class="form-control" name="tlp" placeholder="Telepon Vendor">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                Tambah Vendor
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
