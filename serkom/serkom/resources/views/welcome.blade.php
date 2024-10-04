@extends('layout')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center mt-10">
        <div class="col-md-8">                        
            <h2 class="text-center">{{ __('Pendaftaran Beasiswa') }}</h2>
            <p class="text-center mt-3">Pendaftaran Beasiswa terbuka untuk seluruh mahasiswa Universitas Telkom Purwokerto</p>            
        </div>
    </div>
    
    <br><br>

    {{-- Tiga card beasiswa --}}
    <div class="row">
        <!-- Card Beasiswa 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="	https://live.staticflickr.com/3811/9686051410_4e49feccb8_z.jpg" class="card-img-top" alt="Beasiswa 1" width="300" height="200">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa 1</h5>
                    <p class="card-text">Beasiswa untuk mahasiswa berprestasi di bidang akademik.</p>
                </div>
            </div>
        </div>
        <!-- Card Beasiswa 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="	https://live.staticflickr.com/65535/49057620981_761cc6fe13.jpg" class="card-img-top" alt="Beasiswa 2" width="300" height="200">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa 2</h5>
                    <p class="card-text">Beasiswa untuk mahasiswa dengan keahlian khusus di bidang seni dan olahraga.</p>
                </div>
            </div>
        </div>
        <!-- Card Beasiswa 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://live.staticflickr.com/32/98010005_09d79b7404_z.jpg" class="card-img-top" alt="Beasiswa 3" width="300" height="200">
                <div class="card-body">
                    <h5 class="card-title">Beasiswa 3</h5>
                    <p class="card-text">Beasiswa untuk mahasiswa dengan kondisi finansial khusus.</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>    
@endsection