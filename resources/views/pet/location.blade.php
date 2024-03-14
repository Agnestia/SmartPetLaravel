{{-- @dd($pet[1]) --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="img/logo/logo.png" rel="icon" />
    <title>RuangAdmin - UI Colors</title>
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="css/ruang-admin.min.css" rel="stylesheet" />
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
          <nav
            class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top"
          >
            <button
              id="sidebarToggleTop"
              class="btn btn-link rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-1 small"
                        placeholder="What do you want to look for?"
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                        style="border-color: #3f51b5"
                      />
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
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Alerts Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                      <span class="font-weight-bold"
                        >A new monthly report is ready to download!</span
                      >
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
                      Spending Alert: We've noticed unusually high spending for
                      your account.
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Show All Alerts</a
                  >
                </div>
              </li>
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="messagesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-envelope fa-fw"></i>
                  <span class="badge badge-warning badge-counter">2</span>
                </a>
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown"
                >
                  <h6 class="dropdown-header">Message Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/man.png"
                        style="max-width: 60px"
                        alt=""
                      />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate">
                        Hi there! I am wondering if you can help me with a
                        problem I've been having.
                      </div>
                      <div class="small text-gray-500">Udin Cilok · 58m</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/girl.png"
                        style="max-width: 60px"
                        alt=""
                      />
                      <div class="status-indicator bg-default"></div>
                    </div>
                    <div>
                      <div class="text-truncate">
                        Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they
                        aren't good...
                      </div>
                      <div class="small text-gray-500">Jaenab · 2w</div>
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Read More Messages</a
                  >
                </div>
              </li>
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="messagesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-tasks fa-fw"></i>
                  <span class="badge badge-success badge-counter">3</span>
                </a>
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown"
                >
                  <h6 class="dropdown-header">Task</h6>
                  <a class="dropdown-item align-items-center" href="#">
                    <div class="mb-3">
                      <div class="small text-gray-500">
                        Design Button
                        <div class="small float-right"><b>50%</b></div>
                      </div>
                      <div class="progress" style="height: 12px">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          style="width: 50%"
                          aria-valuenow="50"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item align-items-center" href="#">
                    <div class="mb-3">
                      <div class="small text-gray-500">
                        Make Beautiful Transitions
                        <div class="small float-right"><b>30%</b></div>
                      </div>
                      <div class="progress" style="height: 12px">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          style="width: 30%"
                          aria-valuenow="30"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item align-items-center" href="#">
                    <div class="mb-3">
                      <div class="small text-gray-500">
                        Create Pie Chart
                        <div class="small float-right"><b>75%</b></div>
                      </div>
                      <div class="progress" style="height: 12px">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 75%"
                          aria-valuenow="75"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >View All Taks</a
                  >
                </div>
              </li>
              <div class="topbar-divider d-none d-sm-block"></div>
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    class="img-profile rounded-circle"
                    src="img/boy.png"
                    style="max-width: 60px"
                  />
                  <span class="ml-2 d-none d-lg-inline text-white small"
                    >Maman Ketoprak</span
                  >
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
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
                  <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- Topbar -->
          <!-- Container Fluid-->
          <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Lokasi Hewan</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UI Colors</li>
                </ol>
            </div>
            <div>
                <div>
                    <h3>list hewan</h3>
                    <ul style="list-style-type: none;">
                        <li><a href="#" onclick="goToLocation(1)">Lokasi 1</a></li>
                        <li><a href="#" onclick="goToLocation(2)">Lokasi 2</a></li>
                        <li><a href="#" onclick="goToLocation(3)">Lokasi 3</a></li>
                    </ul>
                </div>
                <div class="map"></div>
                <div id="map" style="height: 400px;"></div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
                <script>
                    var initialLatitude = -6.2088;
                    var initialLongitude = 106.8456;
                    var map;
                    var markers = [
                        @foreach ($pets as $pet)
                            {lat: '{{ $pet->latitude }}', lng: '{{ $pet->longitude }}',  iconUrl: 'img/kucing.png', name: '{{ $pet->name }}'},
                        @endforeach

                    ];

                    function initMap() {
                        map = L.map('map').setView([initialLatitude, initialLongitude], 13);

                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        markers.forEach(function(marker, index) {
                            var customIcon = L.icon({
                                iconUrl: marker.iconUrl,
                                iconSize: [38, 38],
                                iconAnchor: [19, 38],
                                popupAnchor: [0, -30]
                            });

                            var newMarker = L.marker([marker.lat, marker.lng], {icon: customIcon}).addTo(map)
                                .bindPopup(marker.name)
                                .openPopup();

                            newMarker.on('click', function() {
                                goToLocation(index + 1);
                            });
                        });
                    }

                    window.onload = function() {
                        initMap();
                    };

                    function resetMap() {
                        map.setView([initialLatitude, initialLongitude], 13);
                    }

                    function goToLocation(index) {
                        var marker = markers[index - 1];
                        map.setView([marker.lat, marker.lng], 13);
                    }
                </script>
            </div>
        </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>



  </body>
</html>
