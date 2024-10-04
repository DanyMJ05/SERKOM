{{-- memanggil layout header navbar --}}
@extends('layout')

@section('content')
<div class="container mt-3">
    <div class="text-center mb-4">
        <h4>Daftar Beasiswa</h4>
    </div>
    {{-- <br>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <br> --}}
    <div class="card mx-auto mb-3" style="max-width: 600px;">
        <div class="card-header">
            Registrasi Beasiswa
        </div>
         <!-- Tampilkan pesan sukses -->        
        <div class="card-body">            
            <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf                
                <!-- field Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Masukkan Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <!-- field Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Masukkan Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- field Nomor HP -->
                <div class="mb-3">
                    <label for="hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="hp" name="hp" required>
                </div>

                <!-- Semester Saat Ini -->
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester Saat Ini</label>
                    <select class="form-select" id="semester" name="semester" required onchange="setIpk()">
                        <option value="" selected>Pilih</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                        <option value="7">Semester 7</option>
                        <option value="8">Semester 8</option>
                    </select>
                </div>

                <!-- ipk otomatis -->
                <div class="mb-3">
                    <label for="ipk" class="form-label">IPK Terakhir</label>
                    <input type="" step="0.01" class="form-control read-only:" id="ipk" name="ipk" required readonly>
                </div>

                <!-- beasiswa -->
                <div class="mb-3">
                    <label for="beasiswa" class="form-label">Pilihan Beasiswa</label>
                    <select class="form-select" id="beasiswa" name="beasiswa" required>
                        <option value="" selected>Pilihan Beasiswa</option>
                        <option value="beasiswa1">Beasiswa 1</option>
                        <option value="beasiswa2">Beasiswa 2</option>
                        <option value="beasiswa3">Beasiswa 3</option>
                    </select>
                </div>

                <!-- Upload Berkas Syarat -->
                <div class="mb-3">
                    <label for="berkas" class="form-label">Upload Berkas Syarat</label>
                    <input type="file" class="form-control" id="berkas" name="berkas" required>
                </div>

                <!-- Tombol Daftar dan Batal -->
                <div class="d-flex justify-content-between">
                    <button type="submit" id="submitBtn" class="btn btn-primary" disabled>Daftar</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function setIpk() {
        const semester = document.getElementById('semester').value;
        const ipkInput = document.getElementById('ipk');
        
        switch(semester) {
            case '1':
            case '2':
                ipkInput.value = (Math.random() * (3.0 - 2.0) + 2.0).toFixed(2);
                break;
            case '3':
            case '4':
                ipkInput.value = (Math.random() * (3.5 - 2.5) + 2.5).toFixed(2);
                break;
            case '5':
            case '6':
                ipkInput.value = (Math.random() * (3.8 - 3.0) + 3.0).toFixed(2);
                break;
            case '7':
            case '8':
                ipkInput.value = (Math.random() * (4.0 - 3.2) + 3.2).toFixed(2);
                break;
            default:
                ipkInput.value = '';
                break;
        }
        checkIpk(); // Periksa apakah tombol submit harus diaktifkan atau tidak
    }

    function checkIpk() {
        const ipkInput = document.getElementById('ipk');
        const submitBtn = document.getElementById('submitBtn');
        const ipkWarning = document.getElementById('ipkWarning');
        
        // Validasi apakah IPK >= 3.0
        if (parseFloat(ipkInput.value) >= 3.0) {
            submitBtn.disabled = false;
            ipkWarning.style.display = 'none';
        } else {
            submitBtn.disabled = true;
            ipkWarning.style.display = 'block';
        }
    }
</script>
@endsection
