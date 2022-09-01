<!--
=========================================================
* Material Dashboard PRO - v3.0.1
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-dashboard-pro
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('belakang/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('belakang/img/favicon.png')}}">
    <title>
        {{ env('NAME') }}
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{URL::asset('belakang/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('belakang/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{URL::asset('belakang/css/material-dashboard.css')}}" rel="stylesheet" />
</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Daftar Akun</h4>
                                    <p class="mb-0">Masukkan Identitas Peserta Asuransi</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.register') }}" role="form">
                                        @csrf

                                        <input type="text" class="form-control " aria-describedby="emailHelp" required
                                            name="admin_id" hidden value="{{ $kd }}">

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">No KK</label>
                                                    <input type="number" class="form-control "
                                                        aria-describedby="emailHelp" required name="no_kk">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">NIK</label>
                                                    <input type="number" class="form-control "
                                                        aria-describedby="emailHelp" required name="nik">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control "
                                                        aria-describedby="emailHelp" id="nama_lengkap" required
                                                        name="nama_lengkap">
                                                </div>
                                            </div>
                                        </div>

                                        <input type="text" class="form-control " aria-describedby="emailHelp" id="name"
                                            required name="name" hidden>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Tempat Lahir</label>
                                                    <input type="text" class="form-control "
                                                        aria-describedby="emailHelp" required name="tempat_lahir">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Tempat Lahir</label>
                                                    <input type="date" class="form-control "
                                                        aria-describedby="emailHelp" required name="tanggal_lahir">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <select name="jenis_kelamin" class="form-control ">
                                                        <option selected disabled>Jenis Kelamin</option>
                                                        <option value="1">Laki-laki</option>
                                                        <option value="2">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <select name="status_kawin" class="form-control ">
                                                        <option selected disabled>Status Kawin</option>
                                                        <option value="1">Belum Kawin</option>
                                                        <option value="2">Kawin</option>
                                                        <option value="3">Duda</option>
                                                        <option value="4">Janda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control "
                                                        aria-describedby="emailHelp" required name="pekerjaan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Alamat</label>
                                                    <input type="text" class="form-control "
                                                        aria-describedby="emailHelp" required name="alamat">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <input class="form-control " list="kecamatans"
                                                        placeholder="Kecamatan" required name="kecamatan">
                                                    <datalist id="kecamatans">
                                                        @foreach ($districts as $d)
                                                        <option value="{{$d->name}}">
                                                            @endforeach
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 col-sm-12">
                                                <div class="input-group input-group-outline mb-3">
                                                    <input class="form-control " list="kelurahans"
                                                        placeholder="Kelurahan" required name="kelurahan">
                                                    <datalist id="kelurahans">
                                                        @foreach ($villages as $v)
                                                        <option value="{{$v->name}}">
                                                            @endforeach
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email"
                                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" value="{{ old('email') }}" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                name="password" minlength="8"
                                                oninvalid="setCustomValidity('Password Harus 8 Karakter')"
                                                oninput="setCustomValidity('')" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required>
                                        </div>


                                        <input type="hidden" name="role_id" value="4">

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg  mt-4 mb-0">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-2 text-sm mx-auto">
                                        Sudah Punya Akun?
                                        <a href="{{route('admin.login')}}"
                                            class="text-primary text-gradient font-weight-bold">Masuk</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="{{URL::asset('belakang/js/core/popper.min.js')}}">
    </script>
    <script src="{{URL::asset('belakang/js/core/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('belakang/js/plugins/perfect-scrollbar.min.js')}}">
    </script>
    <script src="{{URL::asset('belakang/js/plugins/smooth-scrollbar.min.js')}}">
    </script>
    <!-- Kanban scripts -->
    <script src="{{URL::asset('belakang/js/plugins/dragula/dragula.min.js')}}">
    </script>
    <script src="{{URL::asset('belakang/js/plugins/jkanban/jkanban.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{URL::asset('belakang/js/material-dashboard.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script>
        $('#nama_lengkap').change(function() {
        $('#name').val($(this).val());
        });
    </script>
</body>

</html>
