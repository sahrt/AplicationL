@extends('layout.master')
@section('content1')
   <!-- form pemesanan -->
   <section class="container">
     <div class="form" style="margin:30px;">
        <div class="product-judul text-center">
         <div class="about-text">
            <span>Pesan Tiket Wisata</span>
            </div> 
            <h3>Memesan tiket wisata</h3>
                  
         </div>
         <form action="post/pesan" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama"  required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Identitas</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nomorId" required>
               
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="noHp"  required>
                
            </div>
            <div class="mb-3">
                <!-- pilihan wisata diambil dari database -->
                    <label for="inputText" class=" col-form-label">Tempat</label>
                    <div class="">
                    <select class="form-select" aria-label="Default select example" name="wisata" required>
                    <option selected>Open this select menu</option>
                    <option value="Bromo"><p>bromo</p></option>
                    <option value="Penangungan"><p>Penangungan</p></option>
                    <option value="Pandawa"><p>Pandawa</p></option>
                     </select>
               
            </div>
            <div class="mb-3 " style="margin-top: 10px;">
                <label for="exampleInputEmail1" class="form-label">Tanggal Kunjungan</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal" required>
               
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pengunjung Dewasa</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="dewasa" required>
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pengunjung Anak - Anak (dibawah 12 tahun)</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="anak" required>
            </div>
           
            <!-- mencerak harga total danttiket -->
            <ul>
                <li>Harga tiket Wisata :</li>
                 <li>Total Bayar :</li>
             </ul>

            

            <div class="d-flex justify-content-center">
            <button type="submit" class="btn-1 btn-primary p-3 m-2" name="submit1">Total Bayar</button>
            <button type="submit" class="btn-1 btn-primary p-3 m-2" name="submit">Pesan Tiket</button>
            <a href="index.php" class="btn-1 btn-primary p-3 m-2">Cancel</a>
            </div>
   
            
         </form>
         
                
        </div>
   </section>
    <!-- pesanan pelangan -->
    <div class="container">
        <div class="about-text text-center">
            <span>Daftar Pemesan Tiket Wisata</span>
            </div> 
            <h3 class="text-center">Cek Namamu Dan Pendaftaran Mu</h3>
                    
       
         <div style="background-color: white; padding:10px; border-radius: 10px; margin-top: 50px;">
            <table class="table">
            <thead>
                <x-tr>
                    <x-th page='No'></x-th>
                    <x-th page='Nama Pemesanan'></x-th>
                    <x-th page='Nomor Identitas'></x-th>
                    <x-th page='No Hp'></x-th>
                    <x-th page='Tempat Wisata'></x-th>
                    <x-th page='Tanggal Kunjungan'></x-th>
                    <x-th page='Dewasa'></x-th>
                    <x-th page='Anak'></x-th>
                    <x-th page='Harga Tiket'></x-th>
                    <x-th page='Total Bayar'></x-th>

                </x-tr>
            </thead>
            <tbody>
            <x-tr>
                    <x-td page='1'></x-td>
                    <x-td page='Wahyu Sahri Rhamadhan'></x-td>
                    <x-td page='746198234324'></x-td>
                    <x-td page='1847912843'></x-td>
                    <x-td page='Penangungan'></x-td>
                    <x-td page='12-08-2022'></x-td>
                    <x-td page='12'></x-td>
                    <x-td page='14'></x-td>
                    <x-td page='Rp. 700,000'></x-td>
                    <x-td page='Rp. 1500,000'></x-td>

                </x-tr>
            </tbody>
            </table>
        </div>
    </div>
 @endsection