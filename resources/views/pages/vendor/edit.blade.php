@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <h3>Edit Vendor</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype=multipart/form-data action="{{ route('vendor.update', ['id' => $vendor->id]) }}">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Nama Vendor</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Nama Vendor" value="{{$vendor->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="kota">Kota Vendor</label>
                                    <input id="kota" type="text" class="form-control" name="kota" placeholder="Kota Vendor" value="{{$vendor->kota}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Vendor</label>
                                    <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat Vendor" value="{{$vendor->alamat}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Vendor</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email Vendor" value="{{$vendor->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="tlp">No Telepon Vendor</label>
                                    <input id="tlp" type="text" class="form-control" name="tlp" placeholder="Telepon Vendor" value="{{$vendor->tlp}}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                    Update Vendor
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
