<div class="container text-center py-1 mb-1">
    <div class="p-5 mb-4 lc-block">
        <div class="lc-block mb-4">
            <div editable="rich">
                <h2 class="fw-bold display-2">Explore Diferentes Substratos</h2>
                <h2 class="fw-bold display-2">E Suas Aplicações</h2>
            </div>
        </div>
        <div class="lc-block">
            <div editable="rich">
                <p class="lead">Aqui você encontrará informações sobre vários tipos de substratos, incluindo suas
                    características, propriedades e aplicações práticas.</p>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4  h-100">
            <a style="color: inherit; text-decoration: none;" href="{{ route('aço') }}">
                <div class="lc-block bg-white rounded shadow">
                    <img src="{{ asset('img/substrato/aço/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="lc-block p-4">
                        <div editable="rich">
                            <h2>Aço Carbono</h2>
                            <p class="p">Metal robusto, ideal para construção e ferramentas.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-6 mb-4 h-100">
            <a style="color: inherit; text-decoration: none;" href="{{ route('fundido') }}">
                <div class="lc-block bg-white rounded shadow">
                    <img src="{{ asset('img/substrato/fundido/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="lc-block p-4">
                        <div editable="rich">
                            <h2>Ferro Fundido</h2>
                            <p>Material sólido, ideal para peças moldadas.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <a style="color: inherit; text-decoration: none;" href="{{ route('zinco') }}">
                <div class="lc-block bg-white rounded shadow">
                    <img src="{{ asset('img/substrato/zinco/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="lc-block p-4">
                        <div editable="rich">
                            <h2>Zinco</h2>
                            <p>Metal resistente à corrosão, usado em galvanização.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        {{-- <div class="col-xl-3 col-md-6 mb-4">
            <a style="color: inherit; text-decoration: none;" href="{{ route('aluminio') }}">
                <div class="lc-block bg-white rounded shadow">
                    <img src="{{ asset('img/substrato/aluminio/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="lc-block p-4">
                        <div editable="rich">
                            <h2>Alumínio</h2>
                            <p>Leve, durável e resistente à corrosão, fácil de moldar e trabalhar.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div> --}}
    </div>
</div>
