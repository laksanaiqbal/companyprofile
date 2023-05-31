<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="42065bc2-b075-49c8-b31c-f1abec9de6b6">
        (function(w, d) {
            ! function(cM, cN, cO, cP) {
                cM.zarazData = cM.zarazData || {};
                cM.zarazData.executed = [];
                cM.zaraz = {
                    deferred: [],
                    listeners: []
                };
                cM.zaraz.q = [];
                cM.zaraz._f = function(cQ) {
                    return function() {
                        var cR = Array.prototype.slice.call(arguments);
                        cM.zaraz.q.push({
                            m: cQ,
                            a: cR
                        })
                    }
                };
                for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS);
                cM.zaraz.init = () => {
                    var cT = cN.getElementsByTagName(cP)[0],
                        cU = cN.createElement(cP),
                        cV = cN.getElementsByTagName("title")[0];
                    cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text);
                    cM.zarazData.x = Math.random();
                    cM.zarazData.w = cM.screen.width;
                    cM.zarazData.h = cM.screen.height;
                    cM.zarazData.j = cM.innerHeight;
                    cM.zarazData.e = cM.innerWidth;
                    cM.zarazData.l = cM.location.href;
                    cM.zarazData.r = cN.referrer;
                    cM.zarazData.k = cM.screen.colorDepth;
                    cM.zarazData.n = cN.characterSet;
                    cM.zarazData.o = (new Date).getTimezoneOffset();
                    if (cM.dataLayer)
                        for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({
                                ...c_[1],
                                ...da[1]
                            }))))) zaraz.set(cZ[0], cZ[1], {
                            scope: "page"
                        });
                    cM.zarazData.q = [];
                    for (; cM.zaraz.q.length;) {
                        const db = cM.zaraz.q.shift();
                        cM.zarazData.q.push(db)
                    }
                    cU.defer = !0;
                    for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de.startsWith("_zaraz_"))).forEach((dd => {
                        try {
                            cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd))
                        } catch {
                            cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd)
                        }
                    }));
                    cU.referrerPolicy = "origin";
                    cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));
                    cT.parentNode.insertBefore(cU, cT)
                };
                ["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition login-page" style="background-color:whitesmoke;border-radius:10px">
    <div class="login-box">

        <div class="card card-outline card-primary" style="border-radius:10px" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-header text-center" style="background-color:black;">
                @php $i = 1; @endphp
                @foreach ($kelolalogo as $item)
                <a style="margin-left:10px;" href=" {{ route('home') }} " class="brand-link {{ $i == '1' ? 'active':'' }}" href="{{ url('/') }}">
                    <img data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style="justify-content:center;border-radius:7px;max-width:175px;margin: 10px;" src="{{ url('assets/logo') }}/{{ $item->gambar }}" class="img-fluid">
                </a>
                @endforeach
            </div>

            <div class="card-body" style="background-color:black;">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">

                        <input data-aos="fade-right" data-aos-duration="1000" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">

                        <input data-aos="fade-left" data-aos-duration="1000" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember" style="color:white">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button data-aos="zoom-in-up" data-aos-duration="1000" type="submit" class="btn btn-light btn-block">{{ __('Login') }}</button>
                        </div>

                    </div>
                </form>

                <p class="mb-0">
                    <a style="color:whitesmoke;" href="{{ route('register') }}" class="text-center">Register apabila pengguna baru</a>
                </p>
            </div>

        </div>

    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>