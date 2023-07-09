
@extends('layouts.footer')


@section('content1')

<section>
	<div class="container mt-5 " style="padding-bottom: 200px;">
		 <div class="jumbotron">
		  <h1 class="display-4">Hello, Selamat Datang</h1>
		  <p class="lead">salam bahagian telah berkunjung ke wbesite kami</p>
		  <hr class="my-4">
		  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		</div>
	</div>

</section>
@endsection

@section('content2')
	<div class="container">
		<h2>Hot Now</h2>
		<br>
		<br>

	@foreach ($daftarArtikel as $art)
	
		<h3>{{$art->judul}}</h3>
		<p>{{$art->tanggal_waktu_penulisan}}</p><a href="{{route('artikel',$art->kode_jenis_artikel)}}"><h6 style="margin-left: 6px;">{{$art->jenis}}</h6></a>
		<hr>
		<p>{{$art->isi}}</p>
		<div class="link">
			<a href="/articel/{{$art->id}}/{{$art->judul}}">Detail Artikel</a>
		</div>
		<br>
		<br>
		<br>
	@endforeach
	</div>


@endsection


@extends('layouts.header')