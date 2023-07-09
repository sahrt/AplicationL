@extends ('layouts.footer')


@section('content1')
<div class="container">
<h1> Articel</h1>
<h3>List {{$daftarArtikel[0]->jenis}}</h3>
<p>Cillum aute ad ea elit duis. Nulla sint ad ex occaecat do magna laborum. Eu laborum ipsum excepteur mollit officia incididunt adipisicing minim fugiat cupidatat. Mollit aute reprehenderit ut deserunt minim amet nulla qui ad non tempor et. Minim ipsum sint commodo quis elit dolor excepteur pariatur laboris excepteur aliquip sit minim.</p>
</div>

@endsection

@section('content2')
<div class="container">
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


@extends ('layouts.header')