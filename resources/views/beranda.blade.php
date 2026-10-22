<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    {{-- header --}}
    <h1>Selamat Datang di Web Personalku!</h1>

    {{-- navigasi --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Web Personal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/biodata">Biodata</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- konten --}}
    <div class="container">
        <div class="row mt-3">

            {{-- CARD HELLO GUYS --}}
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                        <h1>Hello Guysssssssssssss!</h1>

                        {{-- foto --}}
                        <img src="{{ asset('images/WhatsApp Image 2026-09-17 at 13.55.43.jpeg') }}"
                        class=" rounded float-start me-3 mb-2"
                        style="width: 30%;"
                        alt="Foto profil">
                        {{-- tulisan --}}
                        <p>
                        Welcome to my personal web! 
                        </p>

                        <p>
                            Kenalin, nama saya Mahatma Tri Buana Tungga Dewi. This is my little corner on the internet,
                            tempat aku berbagi sedikit cerita dan informasi tentang myself. 
                        </p>

                        <p>
                            Di web ini kalian bisa mengenal aku lebih dekat, mulai dari profil, biodata, sampai beberapa hal tentang diri aku. 
                            Mungkin isinya sederhana, but I hope you’ll enjoy every little part of it!
                        </p>

                        <p>
                            Honestly, membuat web ini juga jadi salah satu pengalaman baru buat aku. Dari yang awalnya cuma tugas sekolah,
                            akhirnya jadi sesuatu yang bisa aku buat sesuai dengan style dan personality-ku sendiri. 
                            Sooo, jangan cuma lihat-lihat doang yaa, explore every page and get to know me a little better! 
                            Siapa tahu setelah mampir ke sini kalian jadi tahu sedikit lebih banyak tentang aku. Hehehe~
                        </p>

                        <p>
                            Thank you so much for visiting my web! 
                            Hope you enjoy your little visit here, stay happy, stay pretty, and don’t forget to smile! 
                        </p>

                        <p>
                            Enjoy exploring my personal web, guyssss! ♡
                        </p>

                    </div>
                </div>
            </div>


            {{-- CARD LINK TERKAIT --}}
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">

                        <h4>Link Terkait</h4>

                        <a href="/" class="d-block mb-2">
                            Beranda
                        </a>

                        <a href="/profil" class="d-block mb-2">
                            Profil
                        </a>

                        <a href="/biodata" class="d-block mb-2">
                            Biodata
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <nav class="navbar fixed-bottom bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Web Personal&copy;2026</a>
            <a class="navbar-brand" href="#">Dikembangkan oleh @ Amoyyyyy</a>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>