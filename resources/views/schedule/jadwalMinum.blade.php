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
          <img class="img-fluid" src="{{ Auth::user()->photo == null ? "https://ui-avatars.com/api/?name=" . Auth::user()->name . "&background=0D8ABC&color=fff&rounded=true&bold=true" : asset(Auth::user()->photo) }}" style="width: 100px; max-height: 100px; margin-bottom: 20px;">
          <div class="sidebar-brand-text mx-3">
            <div style="margin-bottom: 10px;">{{ Auth::user()->name }}</div>
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
        <a class="nav-link" href="{{ route('logout') }}">
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
                    <span class=" ml-1 d-none d-lg-inline text-white font-weight-bold font-size-5">Atur Makanan</span>
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
                                <img class="img-fluid rounded-circle" src="{{ Auth::user()->photo == null ? "https://ui-avatars.com/api/?name=" . Auth::user()->name . "&background=0D8ABC&color=fff&rounded=true&bold=true" : asset(Auth::user()->photo) }}" style="width: 50px; max-height: 50px; margin-bottom: 5px; margin-top: 5px">
                                <div style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;">{{ Auth::user()->name }}</div>
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
                                <div class="container d-flex justify-content-center-start ">
                                    <h4 class="mt-3"style="color: black;">Jadwal Minum Otomatis</h4>
                                </div>
                                <form action={{ route('landing.jadwalMakan') }} method="POST">
                                    @csrf
                                    <input type="hidden" name="is_water" value={{ true }}>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group row mt-4 md-2">
                                                <label for="inputNamaHewan"
                                                    class="col-form-label col-md-3 ">Tanggal</label>
                                                <div class="col-lg-9 pl-5">
                                                    <input type="date" class="form-control form-control-sm "
                                                        id="inputNamaHewan" placeholder="Rocky" name="start_date"
                                                        style="width: 150px;">
                                                    <input type="date" class="form-control form-control-sm mt-2"
                                                        id="inputNamaHewan" placeholder="Rocky" name="end_date"
                                                        style="width: 150px;">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJenisHewan"
                                                    class="col-form-label col-md-3">Berat</label>
                                                <div class="col-lg-9 pl-5">
                                                    <input type="number" class="form-control form-control-sm"
                                                        id="inputJenisHewan" placeholder="Per Gram" name="amount"
                                                        style="width: 150px">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJenisHewan"
                                                    class="col-form-label col-md-3">Jam</label>
                                                <div class="col-lg-9 pl-5">
                                                    <div id="inputJamContainer">
                                                        <input type="time" class="form-control form-control-sm"
                                                            id="inputJenisHewan" placeholder="Kucing" name="time"
                                                            style="width: 150px;">
                                                        <button type="button"
                                                            class="btn btn-sm btn-secondary ml-2 mt-2"
                                                            id="addInputJam">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col-lg-1">
                                            <button type="submit"
                                                class="btn btn-primary px-4 py-2"style="background-color: #DFECFF;color: #095DFF; border-color: #000000">Submit</button>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center"style=" font-size: 14px;">
                                                <thead>
                                                    <tr>
                                                        <th class="table-active">Tanggal</th>
                                                        <th class="table-active">Jam</th>
                                                        <th class="table-active">Berat</th>
                                                        <th class="table-active">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($feedScheduleTime as $feed)
                                                        <tr>
                                                            <td class="table-light">{{ $feed->feedSchedule->start_date}}</td>
                                                            <td class="table-light">{{ $feed->time }}</td>
                                                            <td class="table-light">{{ $feed->feedSchedule->amount }}gr</td>
                                                            <td><span class={{ $feed->status ? "badge badge-success" : "badge badge-info" }}>{{ $feed->status ? "Success" : "pending" }}</span></td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const addInputJamButton = document.getElementById("addInputJam");
                                const inputJamContainer = document.getElementById("inputJamContainer");
                                let inputCounter = 1;

                                addInputJamButton.addEventListener("click", function() {
                                    if (inputCounter < 3) { // Memeriksa apakah sudah mencapai batas maksimal
                                        inputCounter++;

                                        const newInputJam = document.createElement("input");
                                        newInputJam.type = "time";
                                        newInputJam.classList.add("form-control", "form-control-sm", "mt-2");
                                        newInputJam.style.width = "150px";
                                        newInputJam.id = "inputJam" + inputCounter;

                                        inputJamContainer.insertBefore(newInputJam, addInputJamButton);

                                        if (inputCounter === 3) {
                                            addInputJamButton.textContent = '-';
                                            addInputJamButton.classList.add("btn-danger");
                                            addInputJamButton.classList.remove("btn-secondary");
                                        }
                                    } else {
                                        const secondInputJam = document.getElementById("inputJam2");
                                        const thirdInputJam = document.getElementById("inputJam3");
                                        inputJamContainer.removeChild(secondInputJam);
                                        inputJamContainer.removeChild(thirdInputJam);
                                        inputCounter -= 2;

                                        addInputJamButton.textContent = '+';
                                        addInputJamButton.classList.remove("btn-danger");
                                        addInputJamButton.classList.add("btn-secondary");
                                    }
                                });
                            });
                        </script>




                        <div class="col m-2">
                            <div class="container bg-white py-4 rounded shadow">
                                <div class="container d-flex justify-content-center-start ">
                                    <h4 class="mt-3"style="color: black;">Jadwal Minum Otomatis</h4>
                                </div>
                                <form action="">
                                    <div class="row">

                                        <div class="col-md-9 mt-2">
                                            <div class="form-group row mt-4 md-2">
                                                <label for="inputJenisHewan" class="col-form-label col-md-3">Berat</label>
                                                <div class="col-lg-9 pl-5">
                                                    <input type="number" class="form-control form-control-sm" id="inputJenisHewan"
                                                        placeholder="Per Gram" style="width: 150px">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="container">
                                        @if (session()->has('success'))

                                        <script>

                                            // Panggil SweetAlert setelah dokumen selesai dimuat
                                            swal("Success!", "{{ session('success') }}", "success");

                                       </script>


                                        @endif
                                        <div class="table-responsive">
                                        <table class="table table-bordered text-center"style=" font-size: 14px;">
                                            <thead>
                                                <tr>
                                                    <th class="table-active">Tanggal</th>
                                                    <th class="table-active">Jam</th>
                                                    <th class="table-active">Berat</th>
                                                    <th class="table-active">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-light">27/02/2024</td>
                                                    <td class="table-light">10.35</td>
                                                    <td class="table-light">20 Gram</td>
                                                    <td><span class="badge badge-success">checkist</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="table-light">27/02/2024</td>
                                                    <td class="table-light">10.35</td>
                                                    <td class="table-light">20 Gram</td>
                                                    <td><span class="badge badge-info">Processing</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="table-light">-</td>
                                                    <td class="table-light">-</td>
                                                    <td class="table-light">-</td>
                                                    <td class="table-light">-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col-lg-1">
                                            <button type="submit" class="btn btn-primary px-4 py-2"style="background-color: #DFECFF;color: #095DFF; border-color: #000000">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5">

                </div>
                <!---Main Content -->
            </div>

        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-pie2-demo.js"></script>
    <script src="js/ruang-admin.js"></script>
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
</body>
</body>

</html>
