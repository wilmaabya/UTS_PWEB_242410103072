@extends('layouts.app')

@section('title', 'Daftar Ular')

@section('content')
<h2 class="text-center text-light mb-4">Daftar Ular yang Siap Diadopsi 🐍</h2>

<div class="row">
  @php
    $ulars = [
      [
        'nama' => 'Ball Python',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/5/5b/Ball_python_lucy.JPG',
        'deskripsi' => 'Ular jinak asal Afrika Barat. Tidak berbisa dan sering dijadikan peliharaan karena sifatnya yang tenang.'
      ],
      [
        'nama' => 'Indian Cobra',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/Indian_Cobra.jpg',
        'deskripsi' => 'Ular berbisa ikonik dari India. Dikenal karena pola berbentuk kaca mata di lehernya yang melebar saat merasa terancam.'
      ],
      [
        'nama' => 'Boa Constrictor',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Boa_constrictor_imperator_%28Colombian_red_tail%29.jpg',
        'deskripsi' => 'Ular besar dari Amerika Selatan. Tidak berbisa, melumpuhkan mangsanya dengan melilit kuat.'
      ],
      [
        'nama' => 'Reticulated Python',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/d/d8/Reticulated_Python_%28Python_reticulatus%29.JPG',
        'deskripsi' => 'Ular terpanjang di dunia, memiliki pola kulit jaring yang sangat cantik. Ditemukan di Asia Tenggara.'
      ],
    ];
  @endphp

  @foreach($ulars as $ular)
  <div class="col-md-6 col-lg-3 mb-4">
    <div class="card bg-dark text-white shadow-lg h-100 border-success">
      <img src="{{ $ular['gambar'] }}" class="card-img-top" alt="{{ $ular['nama'] }}" style="height:180px; object-fit:cover;">
      <div class="card-body">
        <h5 class="card-title text-success">{{ $ular['nama'] }}</h5>
        <p class="card-text">{{ $ular['deskripsi'] }}</p>
      </div>
      <div class="card-footer text-center">
        <button class="btn btn-outline-success">Adopsi Sekarang</button>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
