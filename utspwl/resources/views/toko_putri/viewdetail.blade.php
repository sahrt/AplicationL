@extends('layouts.header')

@section ('contain1')
<section class="masthead bg-primary text-white text-center">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  @foreach  ($barang as $item)
        <div class="row">
        <div class="col-4">
            <img src="{{asset('asset/img_produk/produk1.jpg')}}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-8">
            <div class=" justify-content-start" style="text-align:start;">
                <h2>{{$item->nama_barang}}</h2>
                <p>{{$item->harga}}</p>
                <p>{{$item->detail_barang}}</p>
                <div class="button">
                    <a href="">
                        <button type="button" class="btn btn-light">Checkout</button>
                    </a>
                </div>
                
            </div>
        </div>
        </div>
  </div>
  @endforeach
</div>
</section>

@endsection