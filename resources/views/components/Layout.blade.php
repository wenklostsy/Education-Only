<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://unpkg.com/@webpixels/css@1.2.6/dist/index.css" rel="stylesheet">
    <!--SWIPPER-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/013b42215c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    {{-- <script src="https://kit.fontawesome.com/013b42215c.js" crossorigin="anonymous"></script> --}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
    <title>{{ $title }}</title>
</head>

<body>
    <x-nav></x-nav>
    <div class="container py-3">
        {{ $slot }}
    </div>
    <section>
        <div class=" py-6 text-center">
            <div class="col-md-12 navbar-expand border-bottom pb-2 mb-4">
                Created by Matheus Ribeiro, Miguel Lima e Elifas Ferreira
            </div>
            <div class="lc-block">
                <div editable="rich">
                    <p class="text-muted">© 2024 MEM, Inc</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
