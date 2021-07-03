<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Builderz - Construction Company Profil Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="/home">
                                    <h1>Builderz</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Buka</h3>
                                            <p>Senin - Jumat, 8:00-16:00 WIB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Telp</h3>
                                            <p>0341464318319</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email</h3>
                                            <p>builderz@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="/home" class="nav-item nav-link active">Home</a>
                                <a href="/about" class="nav-item nav-link">About</a>
                                <a href="/service" class="nav-item nav-link">Service</a>
                                <a href="/team" class="nav-item nav-link">Team</a>
                                <a href="/portofolio" class="nav-item nav-link">Project</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="/blog" class="dropdown-item">Blog Page</a>
                                        <a href="/single" class="dropdown-item">Single Page</a>
                                    </div>
                                </div>
                                <a href="/pegawai" class="nav-item nav-link">Admin</a>
                                <a href="/contact" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="#">Dapatkan Kutipan</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Data Pegawai</p>
                        <h2>Daftar Data Pegawai Kami</h2>
                    </div>

                    <!-- CRUD Start -->
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-0 shadow rounded">
                                    <div class="card-body">
                                        <a href="{{ route('pegawai.create') }}" class="btn btn-md btn-success mb-3">Tambah Pegawai</a>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">NIP</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($pegawais as $pegawai)
                                                <tr>
                                                    <td>{{ $pegawai->nama }}</td>
                                                    <td>{{ $pegawai->alamat }}</td>
                                                    <td>{{ $pegawai->NIP }}</td>
                                                    <td class="text-center">
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST">
                                                            <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data Pegawai belum Tersedia.
                                                </div>
                                            @endforelse
                                            </tbody>
                                        </table>  
                                        {{ $pegawais->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CRUD End -->

                </div>
            </div>
            <!-- Blog End -->

            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Kantor</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Jln Tlogomas No 246, Malang, Jawa Timur</p>
                                <p><i class="fa fa-phone-alt"></i>0341464318319</p>
                                <p><i class="fa fa-envelope"></i>webmaster@unix.umm.ac.id</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Pelayanan</h2>
                                <a href="">Kontruksi Bangunan</a>
                                <a href="">Renovasi Rumah</a>
                                <a href="">Desain Arsitektur</a>
                                <a href="">Desain Interior</a>
                                <a href="">Cat Rumah</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Halaman</h2>
                                <a href="">Tentang Kami</a>
                                <a href="">Kontak</a>
                                <a href="">Tim Kami</a>
                                <a href="">Proyek</a>
                                <a href="">Testimoni</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Berita Terbaru</h2>
                                <p>
                                    Rumah minimalis dengan mengoptimalkan ruangan dapat agar menghemat biaya,bisa menjadi pilihan model rumah untuk kaum milenial.
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            //message with toastr
            @if(session()->has('success'))
            
                toastr.success('{{ session('success') }}', 'BERHASIL!'); 

            @elseif(session()->has('error'))

                toastr.error('{{ session('error') }}', 'GAGAL!'); 
                
            @endif
        </script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
