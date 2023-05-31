<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Kontak</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="ac0e95e8-0ffa-48ca-a4bf-7c1ad4b34d53">
        (function(w, d) {
            ! function(eK, eL, eM, eN) {
                eK.zarazData = eK.zarazData || {};
                eK.zarazData.executed = [];
                eK.zaraz = {
                    deferred: [],
                    listeners: []
                };
                eK.zaraz.q = [];
                eK.zaraz._f = function(eO) {
                    return function() {
                        var eP = Array.prototype.slice.call(arguments);
                        eK.zaraz.q.push({
                            m: eO,
                            a: eP
                        })
                    }
                };
                for (const eQ of ["track", "set", "debug"]) eK.zaraz[eQ] = eK.zaraz._f(eQ);
                eK.zaraz.init = () => {
                    var eR = eL.getElementsByTagName(eN)[0],
                        eS = eL.createElement(eN),
                        eT = eL.getElementsByTagName("title")[0];
                    eT && (eK.zarazData.t = eL.getElementsByTagName("title")[0].text);
                    eK.zarazData.x = Math.random();
                    eK.zarazData.w = eK.screen.width;
                    eK.zarazData.h = eK.screen.height;
                    eK.zarazData.j = eK.innerHeight;
                    eK.zarazData.e = eK.innerWidth;
                    eK.zarazData.l = eK.location.href;
                    eK.zarazData.r = eL.referrer;
                    eK.zarazData.k = eK.screen.colorDepth;
                    eK.zarazData.n = eL.characterSet;
                    eK.zarazData.o = (new Date).getTimezoneOffset();
                    if (eK.dataLayer)
                        for (const eX of Object.entries(Object.entries(dataLayer).reduce(((eY, eZ) => ({
                                ...eY[1],
                                ...eZ[1]
                            }))))) zaraz.set(eX[0], eX[1], {
                            scope: "page"
                        });
                    eK.zarazData.q = [];
                    for (; eK.zaraz.q.length;) {
                        const e_ = eK.zaraz.q.shift();
                        eK.zarazData.q.push(e_)
                    }
                    eS.defer = !0;
                    for (const fa of [localStorage, sessionStorage]) Object.keys(fa || {}).filter((fc => fc.startsWith("_zaraz_"))).forEach((fb => {
                        try {
                            eK.zarazData["z_" + fb.slice(7)] = JSON.parse(fa.getItem(fb))
                        } catch {
                            eK.zarazData["z_" + fb.slice(7)] = fa.getItem(fb)
                        }
                    }));
                    eS.referrerPolicy = "origin";
                    eS.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));
                    eR.parentNode.insertBefore(eS, eR)
                };
                ["complete", "interactive"].includes(eL.readyState) ? zaraz.init() : eK.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini dark-mode">

    <div class="wrapper">

        @include('admin.navbar')


        @include('admin.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kelola Kontak</h1>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <tr class="text-center">
                        <th>No.</th>
                        <th>Social Media</th>
                        <th>Username</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($kelolakontak as $item)
                    <tr align=center>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->sosmed }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->gambar }}</td>
                        <th>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-info">
                                <i class="fas fa-edit" style="color:white"></i>
                            </button>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>

        <footer class="main-footer">
            @include('admin.footer')
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>
    <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Logo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach($kelolalogo as $item)
                    <form action="{{ url('updatelogo', $item->id) }}" method="post" enctype="multipart/form-data">
                        <div class="card-body">

                            {{ csrf_field() }}
                            <div class="form-group">
                                <h5>Resolusi: 100x10</h5>
                                <input type="file" id="gambar" name="gambar">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-light">Simpan</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    @include('admin.script')
</body>

</html>