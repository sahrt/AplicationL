@extends('layout.master')
@section ('content1')
<section class="container">
     <div class="form" style="margin:30px;">
        <div class="product-judul text-center">
         <div class="about-text">
            <span>Mendaftarkan Tiket Wisata</span>
            </div> 
            <h3>tambah tiket wisata</h3>
                  
         </div>
         <form action="post/daftar" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Wisata</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="wisata"  required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Tiket</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="harga" required>
               
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">link Video</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="video"  required>
                
            </div>
            <div class="mb-3">
          
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">link Foto</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="foto" required>
               
            </div>
            

            <div class="d-flex justify-content-center">
            <button type="submit" class="btn-1 btn-primary p-3 m-2" name="submit">Tambah Tiket</button>
            <a href="index.php" class="btn-1 btn-primary p-3 m-2">Cancel</a>
            </div>
   
            
          </form>
         
                
        </div>
   </section>
@endsection

@section('content2')
    <section class="container" id="home">
       <div class="product-judul text-center">
            <div class="about-text">
               <span>Daftar Tiket Wisata</span>
            </div> 
            <h3>Info Pembayaran Tiket Wisata</h3>
                  
        </div>


        <div style="background-color: white; padding:10px; border-radius: 10px; margin-top: 50px;">
            <table class="table">
            <thead>
                <x-tr>
                    <x-th page='No'> </x-th>
                    <x-th page='Nama Wisata'> </x-th>
                    <x-th page='Harga'></x-th>
                    <x-th page='View Video'></x-th>
                    <x-th page='Foto'> </x-th>

                </x-t>
            </thead>
            <tbody>
                    <x-tr>
                        <x-th page='1'></x-th>
                        <x-td page='Penangungan'></x-td>
                        <x-td page='Rp. 500,000'></x-td>
                        <x-td page='video riview'><a href=""></a></x-td>
                        <td page=""><img src="{{asset('img/penanggungan.jpg')}}" alt="" width="50px"></td>
                    </x-tr>
                    <x-tr>
                        <x-th page='2'></x-th>
                        <x-td page='Bromo'></x-td>
                        <x-td page='Rp. 750,000'></x-td>
                        <x-td page='video riview'><a href=""></a></x-td>
                        <td page=""><img src="{{asset('img/bromo.jpg')}}" alt="" width="50px"></td>
                    </x-tr>
             
            </tbody>
            </table>
        </div>
      
    </section>
 @endsection   
       
