{{-- <div class="modal fade" id="edit_hewan_modal"
      data-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-body">
                <form action="/pet/{{ $pet->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                  <div class="container py-4 rounded ">
                      <div class="container d-flex justify-content-center">
                          <h1 class="h2">Edit Hewan</h1>
                      </div>

                      @error('photo')
                      <div  class="alert alert-danger col-lg-8" role="alert">
                         {{ $message }}
                        </div>
                        @enderror
                      <!-- form modal -->
                     
                          <div class="row">
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <div
                                          class="d-flex justify-content-center mb-3">
                                          <img id="selectedAvatarModal"
                                              src="{{ asset('storage/' . $pet->photo)}}"
                                              class="rounded-circle"
                                              style="width: 103px; height: 103px; object-fit: cover;"
                                              alt="" />
                                      </div>
                                      <div class="d-flex justify-content-center">
                                          <div
                                              class="btn btn-primary btn-rounded">
                                              <label class="form-label text-white"
                                                  for="inputPhoto3">
                                                  <svg xmlns="http://www.w3.org/2000/svg"
                                                      width="20" height="20"
                                                      fill="currentColor"
                                                      class="bi bi-plus"
                                                      viewBox="0 0 15 15">
                                                      <path
                                                          d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                  </svg>
                                              </label>
                                              <input type="file"
                                                  class="form-control d-none" name="photo"
                                                  id="inputPhoto3"
                                                  onchange="displaySelectedImage(event, 'selectedAvatarModal')" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                  <div class="form-group row mt-4">
                                      <label for="inputNamaHewan"
                                          class="col-form-label col-md-2">Nama
                                          Hewan</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                              id="inputNamaHewan"
                                              placeholder="{{ $pet->name }}" value='{{ old('name', $pet->name) }}'>

                                              @error('name')
                                              <div  class="invalid-feedback">
                                                 {{ $message }}
                                                </div>
                                                @enderror

                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="inputJenisHewan"
                                          class="col-form-label col-md-2">Jenis
                                          Hewan</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control @error('species') is-invalid @enderror" name="species"
                                              id="inputJenisHewan"
                                              placeholder="{{ $pet->species }}" value='{{ old('name', $pet->species) }}'>

                                              @error('species')
                                              <div  class="invalid-feedback">
                                                 {{ $message }}
                                                </div>
                                                @enderror

                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row text-right">
                              <div class="col-lg-12">
                                  <button type="button" class="btn btn-secondary"
                                      data-dismiss="modal">Close</button>
                                  <button type="submit"
                                      class="btn btn-primary" data-dismiss="modal">Submit</button>
                              </div>
                          </div>
                      
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div> --}}
  <!-- end modal -->

  <!DOCTYPE html>
<html lang="en">

<head>
    <!-- inni keepala bukan ekor -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Smart Pet</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    
    
    <script src="vendor/jquery/jquery.js"></script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion " id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center h-25 w-100 d-inline-block " href="index.html">
        <div class="sidebar-brand-icon">
          <img class="img-fluid" src="img/ramadhanfoto.png" style="width: 100px; max-height: 100px; margin-bottom: 20px;">
          <div class="sidebar-brand-text mx-3">
            <div style="margin-bottom: 10px;">Ramadhan</div>
            <span>online</span>
          </div>
        </div>
      </a>

      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('pet.location') }}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Lokasi Hewan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('landing.jadwalMakan') }}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Atur Makanan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('landing.jadwalMinum') }}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Atur Minuman</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.editPage') }}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Edit User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"href="/pet">
          <i class="fas fa-fw fa-palette"></i>
          <span>Edit hewan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Logout</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Register</span>
        </a>
      </li>


      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

    <!-- end sidebar -->
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <span class=" ml-1 d-none d-lg-inline text-white font-weight-bold font-size-5">Edit Hewan</span>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small"
                                            placeholder="What do you want to look for?" aria-label="Search"
                                            aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-warning badge-counter">2</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been
                                            having.</div>
                                        <div class="small text-gray-500">Udin Cilok · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                                        <div class="status-indicator bg-default"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people
                                            say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Jaenab · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-tasks fa-fw"></i>
                                <span class="badge badge-success badge-counter">3</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Task
                                </h6>
                                <a class="dropdown-item align-items-center" href="#">
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Design Button
                                            <div class="small float-right"><b>50%</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item align-items-center" href="#">
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Make Beautiful Transitions
                                            <div class="small float-right"><b>30%</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item align-items-center" href="#">
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Create Pie Chart
                                            <div class="small float-right"><b>75%</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Main Content -->
                <div class="container">
                    <div class="container row">
                        <div class="col m-2">
                            <div class="container bg-white py-4 rounded shadow">

                                @error('photo')
                                <div  class="alert alert-danger col-lg-8" role="alert">
                                   {{ $message }}
                                  </div>
                                  @enderror

                                <div class="container d-flex justify-content-center">
                                    <h1 class="h2 mt-3 mb-3">Tambah Hewan</h1>
                                </div>
                                <form action="/pet" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img id="selectedAvatar" src="./img/ramadhanfoto.png"
                                                        class="rounded-circle"
                                                        style="width: 103px; height: 103px; object-fit: cover;"
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn btn-primary btn-rounded">
                                                        <label class="form-label text-white" for="inputPhoto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor" class="bi bi-plus"
                                                                viewBox="0 0 15 15">
                                                                <path
                                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                            </svg>
                                                        </label>
                                                        <input type="file" name="photo" class="form-control d-none" id="inputPhoto"
                                                            onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group row mt-4">
                                                <label for="inputNamaHewan" class="col-form-label col-md-2">Nama
                                                    Hewan</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputNamaHewan"
                                                        placeholder="Rocky">

                                                        @error('name')
                                                        <div  class="invalid-feedback">
                                                           {{ $message }}
                                                          </div>
                                                          @enderror


                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJenisHewan" class="col-form-label col-md-2">Jenis
                                                    Hewan</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="species" class="form-control @error('species') is-invalid @enderror" id="inputJenisHewan"
                                                        placeholder="Kucing">

                                                        @error('species')
                                                        <div  class="invalid-feedback">
                                                           {{ $message }}
                                                          </div>
                                                          @enderror

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="container bg-white py-4 rounded shadow">
                                <div class="container d-flex justify-content-center">
                                    <h1 class="h2 mt-3 mb-3">Tambah Hewan</h1>
                                </div>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-center mb-3">
                                                    <img id="selectedAvatar2" src="./img/ramadhanfoto.png"
                                                        class="rounded-circle"
                                                        style="width: 103px; height: 103px; object-fit: cover;"
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="btn btn-primary btn-rounded">
                                                        <label class="form-label text-white" for="inputPhoto2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor" class="bi bi-plus"
                                                                viewBox="0 0 15 15">
                                                                <path
                                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                            </svg>
                                                        </label>
                                                        <input type="file" class="form-control d-none" id="inputPhoto2"
                                                            onchange="displaySelectedImage(event, 'selectedAvatar2')" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group row mt-4">
                                                <label for="inputNamaHewan" class="col-form-label col-md-2">Nama
                                                    Hewan</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="inputNamaHewan"
                                                        placeholder="Milo">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJenisHewan" class="col-form-label col-md-2">Jenis
                                                    Hewan</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputJenisHewan"
                                                        placeholder="Kucing">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5">

                     
                    @if (session()->has('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{  session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     

                    @endif

                    
                </div>
                <!---Main Content -->
            </div>

        </div>
    </div>

      <!-- start modal -->
      

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-pie2-demo.js"></script>
    <script src="js/ruang-admin.js"></script>
    <!-- cdn for update new version bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script>
        function displaySelectedImage(event, elementId) {
            const selectedImage = document.getElementById(elementId);
            const fileInput = event.target;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    selectedImage.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>

     {{-- js icon --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
</body>
</body>

</html>
