{{-- resources/views/data.blade.php --}}
@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-5">Data Beasiswa</h2>
    
    {{-- pesan info data berhasil ditambahkan --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif    
    <br>
    
    <table id="myTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Semester</th>
                <th>IPK</th>
                <th>Beasiswa</th>
                <th>Berkas</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beasiswas as $index => $beasiswa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $beasiswa->nama }}</td>
                <td>{{ $beasiswa->email }}</td>
                <td>{{ $beasiswa->hp }}</td>
                <td>{{ $beasiswa->semester }}</td>
                <td>{{ $beasiswa->ipk }}</td>
                <td>{{ $beasiswa->beasiswa }}</td>                
                <td>
                    <!-- Cek jenis file: gambar atau PDF -->
                    @if(in_array(pathinfo($beasiswa->berkas, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                        <!-- Menampilkan gambar langsung -->
                        <img src="{{ url('berkas/' . $beasiswa->berkas) }}" alt="Gambar" width="100">
                    @elseif(pathinfo($beasiswa->berkas, PATHINFO_EXTENSION) == 'pdf')
                        <!-- Link untuk membuka PDF -->
                        <a href="{{ url('berkas/' . $beasiswa->berkas) }}" target="_blank">Lihat PDF</a>
                    @else
                        <!-- Jika tidak ada berkas -->
                        Tidak ada berkas
                    @endif
                </td>
                <td>
                    <span class="badge {{ $beasiswa->status == 1 ? 'bg-primary' : 'bg-warning text-dark' }}">
                        {{ $beasiswa->status == 1 ? 'Diterima' : 'Pending' }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="container mt-5">
        <h2 class="text-center">Data Grafik</h2>
        <canvas id="semesterChart" width="400" height="200"></canvas>
    </div>
</div>

<script>    
    // data table
    $(document).ready(function() {
        $('#myTable').DataTable(); // Inisialisasi DataTable
    });

    // mendeklarasi atau mendifinisikan data
    const labels = @json($beasiswas->pluck('nama')); // Mengambil nama mahasiswa
    const dataIPK = @json($beasiswas->pluck('ipk')); // Mengambil data IPK
    const dataSemester = @json($beasiswas->pluck('semester')); // Mengambil data Semester

    // Membuat grafik menggunakan Chart.js
    const ctx = document.getElementById('semesterChart').getContext('2d');
    const semesterChart = new Chart(ctx, {
        type: 'bar', // Tipe grafik bar
        data: {
            labels: labels, // Label untuk sumbu X (nama mahasiswa)
            datasets: [
                {
                    label: 'Semester Mahasiswa', // Bar Chart untuk Semester
                    data: dataSemester, // Data Semester
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna bar chart untuk Semester
                    borderColor: 'rgba(255, 99, 132, 1)', // Warna border bar chart untuk Semester
                    borderWidth: 1 // Ketebalan border bar chart untuk Semester
                },
                {
                    label: 'IPK Mahasiswa', // Bar Chart untuk IPK
                    data: dataIPK, // Data IPK
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna bar chart untuk IPK
                    borderColor: 'rgba(54, 162, 235, 1)', // Warna border bar chart untuk IPK
                    borderWidth: 1 // Ketebalan border bar chart untuk IPK
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Memulai skala sumbu Y dari nol
                }
            }
        }
    });

</script>
@endsection
