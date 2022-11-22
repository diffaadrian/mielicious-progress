@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <h3>Edit Produksi</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype=multipart/form-data action="{{route('bom.update', ['id' => $bom->id])}}">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="code">Kode Produk</label>
                                    <input id="code" type="text" class="form-control" name="code" placeholder="Kode Produk" value="{{$bom->code}}" disabled>
                                </div>
                            <div class="form-group">
                                <label for="name">Nama Produk</label> 
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nama Produk" value="{{$bom->name}}">
                            </div>
                            <div class="form-group">
                                <label for="tterigu">Bahan yang diperlukan</label>
                                <label for="tterigu">Tepung Terigu</label>
                                <input id="tterigu" type="number" class="form-control" name="tterigu" placeholder="Tepung Terigu" value="{{$bom->tterigu}}">
                            </div>
                            <div class="form-group">
                                <label for="ttapioka">Tepung Tapioka</label>
                                <input id="ttapioka" type="number" class="form-control" name="ttapioka" placeholder="Tepung Tapioka" value="{{$bom->ttapioka}}">
                            </div>
                            <div class="form-group">
                                <label for="garam">Garam</label>
                                <input id="garam" type="number" class="form-control" name="garam" placeholder="garam" value="{{$bom->garam}}">
                            </div>
                            <div class="form-group">
                                <label for="telur">Telur</label>
                                <input id="telur" type="number" class="form-control" name="telur" placeholder="telur" value="{{$bom->telur}}">
                            </div>
                            <div class="form-group">
                                <label for="sawi">Sawi</label>
                                <input id="sawi" type="number" class="form-control" name="sawi" placeholder="sawi"  value="{{$bom->sawi}}">
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input id="price" type="number" class="form-control" name="price" placeholder="Jumlah Order" value="{{$bom->price}}">
                            </div>
                                <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                    Update BoM
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
