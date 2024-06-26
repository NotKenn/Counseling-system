@extends('layouts.user_type.auth')

@section('content')

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Siswa</p>
                <h5 class="font-weight-bolder mb-0">
                  @php
                      $total = DB::table("students")->count();
                      echo $total;
                  @endphp
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Konselor (Guru BK)</p>
                <h5 class="font-weight-bolder mb-0">
                    @php
                        $konselor = DB::table("users")->where('role', 'konselor')->count();
                        echo $konselor;
                    @endphp
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Note Individu</p>
                <h5 class="font-weight-bolder mb-0">
                  @php
                      $total = DB::table("noteIndividu")->count();
                      echo $total;
                  @endphp
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Note Klasikal</p>
                <h5 class="font-weight-bolder mb-0">
                  @php
                      $total = DB::table("noteKelompok")->count();
                      echo $total;
                  @endphp
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                <p class="mb-1 pt-2 text-bold">Welcome Back</p>
                @auth
                <h5 class="font-weight-bolder">{{auth()->user()->namaUser}}<br></h5>
                <p class="mb-5">Sistem Konseling Siswa <br> SMP Cerdas Mandiri Tabqha</p>
                @endauth
              </div>
            </div>
            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
              <div class="bg-gradient-primary border-radius-lg h-100">
                <img src="../assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                <div style="background-image:linear-gradient(to left, white, whitesmoke, white)"class="position-relative d-flex align-items-center justify-content-center h-100">
                  <img class="w-100 position-relative z-index-2 pt-4" src="../assets/img/shapes/logoTEC.png" alt="logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card h-100 p-3">
        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
          <span class="mask bg-gradient-dark"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
            <h5 class="text-white font-weight-bolder mb-4 pt-2">Guidebook</h5>
            <p class="text-white">Press Here to Learn how to use the App!</p>
            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ asset('/assets/files/guidebook.pdf')}}" target="_blank" download>
              Read More
              <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

@endsection
@push('dashboard')
  <script>
//     window.onload = function() {
//       var ctx = document.getElementById("chart-bars").getContext("2d");

//       new Chart(ctx, {
//         type: "bar",
//         data: {
//           labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
//           datasets: [{
//             label: "Sales",
//             tension: 0.4,
//             borderWidth: 0,
//             borderRadius: 4,
//             borderSkipped: false,
//             backgroundColor: "#fff",
//             data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
//             maxBarThickness: 6
//           }, ],
//         },
//         options: {
//           responsive: true,
//           maintainAspectRatio: false,
//           plugins: {
//             legend: {
//               display: false,
//             }
//           },
//           interaction: {
//             intersect: false,
//             mode: 'index',
//           },
//           scales: {
//             y: {
//               grid: {
//                 drawBorder: false,
//                 display: false,
//                 drawOnChartArea: false,
//                 drawTicks: false,
//               },
//               ticks: {
//                 suggestedMin: 0,
//                 suggestedMax: 500,
//                 beginAtZero: true,
//                 padding: 15,
//                 font: {
//                   size: 14,
//                   family: "Open Sans",
//                   style: 'normal',
//                   lineHeight: 2
//                 },
//                 color: "#fff"
//               },
//             },
//             x: {
//               grid: {
//                 drawBorder: false,
//                 display: false,
//                 drawOnChartArea: false,
//                 drawTicks: false
//               },
//               ticks: {
//                 display: false
//               },
//             },
//           },
//         },
//       });


//       var ctx2 = document.getElementById("chart-line").getContext("2d");

//       var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

//       gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
//       gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
//       gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

//       var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

//       gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
//       gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
//       gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

//       new Chart(ctx2, {
//         type: "line",
//         data: {
//           labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
//           datasets: [{
//               label: "Mobile apps",
//               tension: 0.4,
//               borderWidth: 0,
//               pointRadius: 0,
//               borderColor: "#cb0c9f",
//               borderWidth: 3,
//               backgroundColor: gradientStroke1,
//               fill: true,
//               data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
//               maxBarThickness: 6

//             },
//             {
//               label: "Websites",
//               tension: 0.4,
//               borderWidth: 0,
//               pointRadius: 0,
//               borderColor: "#3A416F",
//               borderWidth: 3,
//               backgroundColor: gradientStroke2,
//               fill: true,
//               data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
//               maxBarThickness: 6
//             },
//           ],
//         },
//         options: {
//           responsive: true,
//           maintainAspectRatio: false,
//           plugins: {
//             legend: {
//               display: false,
//             }
//           },
//           interaction: {
//             intersect: false,
//             mode: 'index',
//           },
//           scales: {
//             y: {
//               grid: {
//                 drawBorder: false,
//                 display: true,
//                 drawOnChartArea: true,
//                 drawTicks: false,
//                 borderDash: [5, 5]
//               },
//               ticks: {
//                 display: true,
//                 padding: 10,
//                 color: '#b2b9bf',
//                 font: {
//                   size: 11,
//                   family: "Open Sans",
//                   style: 'normal',
//                   lineHeight: 2
//                 },
//               }
//             },
//             x: {
//               grid: {
//                 drawBorder: false,
//                 display: false,
//                 drawOnChartArea: false,
//                 drawTicks: false,
//                 borderDash: [5, 5]
//               },
//               ticks: {
//                 display: true,
//                 color: '#b2b9bf',
//                 padding: 20,
//                 font: {
//                   size: 11,
//                   family: "Open Sans",
//                   style: 'normal',
//                   lineHeight: 2
//                 },
//               }
//             },
//           },
//         },
//       });
//     }
//   </script>
@endpush

