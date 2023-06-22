@extends('partials.main')
@section('container')

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">{{$project['project_name']}}</h1>
      <p class="lead my-3">{{$project['project_description']}}</p>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        By: {{ $project->user->fullname }} <!-- ini nanti nama perusahaan atau kelompok -->
      </h3>

      @php
      $tanggal = $project->user->created_at;
      $tanggalBaru = date("d F Y", strtotime($tanggal));
      @endphp

      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">Tentang Perusahaan</h2>
        <p class="blog-post-meta">{{$tanggalBaru}}</p>

        <p>Posting blog ini menunjukkan beberapa jenis konten berbeda yang didukung dan ditata dengan Bootstrap. Tipografi dasar, daftar, tabel, gambar, kode, dan lainnya semuanya didukung seperti yang diharapkan.</p>
        
        <!-- <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p> -->
        <h2>Bagian lain perusahaan, mungkin visi misi</h2>
        <p>Ini nanti akan menjadi seperti sinopsis dari proyeknya lah</p>
        <hr>
        <p>Ini bagian paragrap 2 kalau ada</p>
        <h2>Detail dari proyek misal gambar atau yang lain</h2>
        <p>Berikut adalah bla bla bla....</p>
        <div>
          <img src="{{ asset('storage/images/'.$project['img_project']) }}" class="img-detail">
          </div><!-- ini nanti gambar dari proyeknya -->
        <ul>  
          <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
          <li>Abbreviations, like <abbr title="HyperText Markup Language">HTML</abbr> should use <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
          <li>Citations, like <cite>— Mark Otto</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
          <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
          <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
        </ul>
        <h3>Benefit</h3>
        <p>Penjelasan jika memberikan donasi berapa akan mendapatkan....:</p>
        <!-- <ul>
          <li>$10,000</li>
          <li>$15,000</li>
          <li>$20,000</li>
        </ul> -->
        <!-- <p>And this is an ordered list:</p>
        <ol>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ol> -->
        <!-- <p>Penjelasan ketika berdonasi sesuai list di atas</p> -->
        <dl>
          <dt>$10,000</dt>
          <dd>Bakal dapat akun premium dll......</dd>
          <dt>$15,000</dt>
          <dd>bla bla bla....</dd>
          <dt>$20,000</dt>
          <dd>banyak benefit</dd>
        </dl>

        <a href="/projects/{{ $project["slug"] }}/payment" type="button" class="btn btn-success btn-lg">Donasi</a>
      </article>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">{{$project['project_name']}}</h4>
          <p class="mb-0">Penjelasan singkat misal berikut adalah contoh proyek dari perusahaan yang sama </p>
        </div>

        <div>
          <h4 class="fst-italic">Contoh</h4>
          <ul class="list-unstyled">
            @foreach($allData->take(5) as $item)
            <li>
              <!-- <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <img src="{{ asset('storage/images/'.$project['img_project']) }}" class="img-blog">
                <div class="col-lg-8">
                  <h6 class="mb-0">Blog proyek lainnya</h6>
                  <small class="text-body-secondary">January 15, 2023</small>
                </div>
              </a> -->
              <hr>
              <h3 class="reward-title">Reward Level 1</h3>
                <p class="reward-description">Description of Reward Level 1</p>
                <p class="reward-price">Price: $10</p>
                <p class="reward-quantity">Available: 100</p>
                <a href="#" class="btn btn-primary reward-button" style="margin-bottom:10px;">Select Reward</a>
            </li>
            @endforeach
            <!-- <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">This is another blog post title</h6>
                  <small class="text-body-secondary">January 14, 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                  <small class="text-body-secondary">January 13, 2023</small>
                </div>
              </a>
            </li> -->
          </ul>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="/js/bootstrap.bundle.min.js"></script>

@endsection