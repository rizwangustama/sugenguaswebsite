@extends('index')

@section('content')


<section class="banner">
    <img src="{{ asset('/asset/15e47620-4e82-41a0-a393-378a14b50b2d_full.jpg')}}" alt="">
    </section>

    <section  class="button-warna">
      <button type="button" class="btn btn-primary">Fakultas Hukum</button>
      <button type="button" class="btn btn-secondary">Fakultas Ekonomi & Bisnis</button>
      <button type="button" class="btn btn-success">Fakultas Kedokteran</button>
      <button type="button" class="btn btn-danger">Fakultas Kedokteran Gigi</button>
      <button type="button" class="btn btn-warning">Fakultas Teknik Sipil Dan Perencanaan</button>
      <button type="button" class="btn btn-info">Fakultas Teknologi Industri</button>
      <button type="button" class="btn btn-light">Fakultas Teknologi Kebumian & Energi</button>
      <button type="button" class="btn btn-dark">Fakultas Asitektur Lanskap & Teknologi Lingkungan</button>
      <button type="button" class="btn btn-primary">Fakultas Seni Rupa & Desain</button>
      <button type="button" class="btn btn-secondary">Magister Manajeman</button>
      <button type="button" class="btn btn-success">Trisakti E-Learning</button>

    </section>

    <section class="banner2">
      <img src="{{ asset('/asset/Untitled.png')}}" alt="">
    </section>


   <section class="berita-terkini mt-5">
     <div class="container mb-5" style="background: blue;">
    <nav class="navbar navbar-expand-lg navbar-light text-white">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Berita Terkini</a>
          </ul>
          <form class="d-flex">
            <button class="btn btn-outline-success text-white" type="submit">Semua Berita</button>
          </form>
        </div>
      </div>
    </nav>
  </div>


    <section class="berita-bawah">
      <div class="container">
        <div class="row">
            @forelse ($news as $item)
            <div class="col">
                <img src="{{ Storage::url($item->image) }}">
                <p>{{ $item->title }}</p>
                <p class="p">
                    {{ date('d F Y', strtotime($item->tanggal)) }}</p>
              </div>
            @empty

            @endforelse
        </div>
      </div>
    </div>

    </section>

    <section class="penghargaan">
      <img src="{{ asset('/asset/Penghargaan.png') }}" alt="">
    </section>

@endsection
