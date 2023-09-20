@extends('layouts.app')

@section('title')
  Dhiaz Permata Catering
@endsection

@section('content')
         <!-- Header -->
    <header class="text-center">
        <h1>
          Solusi Kebutuhan 
          <br />
          Catering Anda!
        </h1>
        <p class="mt-3">
          Layanan yang memenuhi kebutuhan Anda
          <br />
          Hanya di Dhiaz Permata Catering!
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4"> Pesan Disini </a>
      </header>
      <!-- Akhir header -->
  
      <!-- Statistik -->
  
      <main>
        <div class="container">
          <section class="section-stats row justify-content-center" id="stats">
            <div class="col-7 col-md-3 stats-detail" data-aos="fade-down">
              <center>
              <img src="frontend/images/calendar5.png"  width="45px" height="45px" alt="">
              </center>
              <p>
              <center> <h5>Tanpa Berlangganan</h5>
              <h6>Tanpa kontrak langganan, bisa pesan sesuai kebutuhan</h6> </center>
            </div><div class="col-7 col-md-3 stats-detail">
              <center>
              <img src="frontend/images/user.png"  width="45px" height="45px" alt="">
              </center>
              <p>
              <center> <h5>Tamu Tak Terbatas</h5>
              <h6>Bersedia hingga 1000 Tamu</h6> 
              </center>
            </div>
            <div class="col-7 col-md-3 stats-detail">
              <center>
              <img src="frontend/images/trust.png"  width="45px" height="45px" alt="">
              </center>
              <p>
              <center> <h5>Percayai Kami</h5>
              <h6>Pekerja yang profesional dan berpengalaman</h6> </center>
            </div>
          </section>
        </div>
  
        <!-- Popular -->
  
        <section class="section-popular" id="popular">
          <div class="container">
            <div class="row">
              <div class="col text-center section-popular-heading">
                <h2>Paket Catering</h2>
                <p>
                  Untuk memudahkan anda
                  <br />
                  dalam membuat acara!
                </p>
              </div>
            </div>
          </div>
        </section>
  
        <!-- End Popular -->
  
        <section class="section-popular-content" id="popularContent">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              @foreach ($items as $item)
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                  <div class="travel-country">{{ $item->location }}</div>
                  <div class="travel-location">{{ $item->title }}</div>
                  <div class="travel-button mt-auto">
                    <a href="{{ url('detail', $item->slug) }}" class="btn btn-travel-details px-4"> Lihat Details </a>
                  </div>
                </div>
              </div>
              
              @endforeach
              
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <p>Paket di atas juga dapat dicustom menyesuaikan budget yang Anda miliki. SIlahkan hubungi tim kami untuk update harga dan detail-detail paket yang belum dipahami.</p>
                <a href="https://wa.me/6281229272878" class="btn btn-outline-success px-4 mt-4">
                  No Whatsapp
                </a>
                
              </div>
            </div>
          </div>
        </section>
  
        <!-- Akhir Statistik -->
  
        <section class="section-networks" id="networks">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>Cabang Perusahaan</h2>
                <p>
                  Perusahaan mempercayai kami
                  <br>
                  lebih dari sekedar katering
                </p>
              </div>
              <div class="col-md-8 text-center">
                <img src="frontend/images/10.png" alt="" class="img-partner" width="600px" height="130px">
              </div>
            </div>
          </div>
        </section>
  
        <section class="section-testimonial-heading" id="testimonialHeading">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <h2>TESTIMONIAL</h2>
                <p>What They Say
                </p>
              </div>
            </div>
          </div>
        </section> 
  
        <!-- Awal Content -->
  
        <section class="section section-testimonial-content" id="testimonialContent">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/zz1.jpg" alt="user" class="mb-4 rounded-circle" width="100px" height="100px">
                    <h3 class="mb-4">Nova & Faisal</h3>
                    <p class="testimonial">
                      "Hallo. Hai. Kita mau mengucapkan terima kasih sama Dhiaz Catering karena udah banyak banget membantu kita waktu akad sama resepsi kita di tanggal 4 Februari. Banyak banget masukan positif sama komen-komen positif dari semua tamu-tamu. Enak banget. Masakannya enak-enak. Casualnya sigap. Bersih kemudian juga profesional banget. Pokoknya makasih banyak buat Pak Agung. Sukses terus. Pakai Dhiaz Catering lancar semuanya" 
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Gedung Manunggal Jati
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/zz2.jpg" alt="user" class="mb-4 rounded-circle" width="100px" height="100px">
                    <h3 class="mb-4">Ami & Amar</h3>
                    <p class="testimonial">
                      "Assalamu’alaikum. Hai, saya Ami. Saya Amar. Kita mau ucapin terima kasih buat Dhiaz Catering yang udah bantu suksesin acara kita.Makanan dan minumannya enak & terlihat fresh.Pelayanannya dari service untuk pengantin juga cepat.Karena dengan kami pakai jasa Dhiaz Catering, Alhamdulillah acara kita berjalan sukses dan lancar dan semuanya sesuai dengan harapan. Terima kasih banyak dan semoga Sukses selaluuu! Wassalamu’alaikum."
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Balai Desa Gayamsari
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/zz3.jpg" alt="user" class="mb-4 rounded-circle" width="100px" height="100px">
                    <h3 class="mb-4">Ardika & Annisa</h3>
                    <p class="testimonial">
                      "Halo team Dhiaz Catering, Kami mengucapkan terima kasih banyak kepada Dhiaz Catering atas bantuan dan kerjasamanya di pernikahan kami berdua pada tanggal 30 Oktober. Kami mau kasih testimoni nih untuk team Catering Catering. Alhamdulillah, kami sekeluarga suka dengan masakannya dan makanannya yang dihidangkan, minumannya juga, trus dessertnya seger-seger. Semua suka deh pokoknya."
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Gedung Aula SMA N 2 Semarang
                  </p>
                </div>
              </div>
              
            </div>
            
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center">
                    <h2>Pemesanan</h2>
                    <h5>Jika Anda tertarik dengan layanan katering kami atau memiliki pertanyaan lebih lanjut,
                      <br>
                      jangan ragu untuk menghubungi tim kami. Kami senang membantu Anda
                      <br>
                      merencanakan acara yang sempurna dan menyediakan pengalaman kuliner yang luar biasa.
                      <br>
                      Bersama-sama, kita bisa menciptakan kenangan tak terlupakan melalui hidangan yang istimewa.
                    </h5>
                    <a href="https://wa.me/6281229272878" class=" btn btn-get-started px-4 mt-4 mx-1">
                      No Whatsapp
                    </a>
                    <a href="http://kuesio.id/8f066a7354ff58f33265" class=" btn btn-warning px-4 mt-4 mx-1">
                      Beri Nilai
                    </a>
                  </div>
                </div>
              </div>
            
            <p>
            <div class="row">
              <div class="col-12 text-center">
                <hr>
                <img src="frontend/images/lokasi.png"  width="45px" height="45px" alt="">
                <p>
                  <center> <h5>Lokasi Kami</h5>
                  <h6>Jl. Emerald Indah II No.mor 15, Meteseh, Kec. Tembalang, Kota Semarang, Jawa Tengah 50271</h6> </center>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5782973221203!2d110.46018707484588!3d-7.058733974749424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708e839e4c6569%3A0xc1dd8d7a51e5fa3!2sDhiaz%20Permata%20Catering!5e0!3m2!1sid!2sid!4v1686668321377!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </section>
  
      </main>
  
@endsection