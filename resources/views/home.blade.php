@extends('layout')

@section('content')
    <div class="container-fluid background-gradient">
        <div class="row g-0 py-3">
            <div class="col-md-6 d-flex justify-content-center align-items-center barlow-black fs-3">
                <div class="text-center me-5">
                    <a class="text-decoration-none text-uppercase text-white" href="#">
                        Soul<span class="barlow-light"> Summit</span>
                    </a>
                </div>
                <div class="ms-5 text-center d-md-none">
                    <a class="btn btn-primary gradient-rosa btn-xs text-uppercase" href="#" target="_blank">
                        Ingressos
                    </a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center d-none d-md-flex barlow-medium fs-3">
                <a class="text-white text-decoration-none" href="#" target="_blank">
                    Ingressos
                </a>
            </div>
        </div>
    </div>
    <div class="bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div style="margin-top: 10%;">
                        <p class="text-white barlow-regular text-font-size-banner">
                            Soul Summit: O ponto de encontro<br />
                            do mercado de
                            <span class="barlow-black-italic text-uppercase "
                            style="background: linear-gradient(135deg, #2f066c, #f9059a, #b59de5);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;">
                                Venture Capital
                            </span>
                            <br/>
                            <span class="fs-5">13 e 14 de SETEMBRO, TEATRO PAULO MACHADO DE CARVALHO</span>
                        </p>
                        <a class="btn btn-primary gradient-rosa btn-lg text-uppercase" href="#" target="_blank">
                            Ingressos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="z-3 mx-auto">
        <div class="background-gradient rounded-4 mx-auto text-center cronometro">
            <div class="p-3 text-white ">
                <span id="countdown" class="barlow-light-italic fs-3 text-center"></span>
                <div class="countdown text-center">
                    <span id="clearTextFaltam" class="barlow-light-italic fs-3 text-center">Faltam:</span>
                    <div class="time-part">
                        <span id="days" class="number barlow-regular"></span>
                        <span id="clearDays" class="label barlow-extralight">Dias</span>
                    </div>
                    <div class="time-part">
                        <span id="hours" class="number barlow-regular"></span>
                        <span id="clearHours" class="label barlow-extralight">Horas</span>
                    </div>
                    <div class="time-part">
                        <span id="minutes" class="number barlow-regular"></span>
                        <span id="clearMinutes" class="label barlow-extralight">Minutos</span>
                    </div>
                    <div class="time-part">
                        <span id="seconds" class="number barlow-regular"></span>
                        <span id="clearSeconds" class="label barlow-extralight">Segundos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div style="background-color: #d7e1e1; padding-bottom: 25px; padding-top: 50px">--}}
{{--        <header>--}}
{{--            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">--}}
{{--                <h1 class="display-4 fw-normal text-body-emphasis">Nossas cotas</h1>--}}
{{--                <p class="fs-5 text-body-secondary">Temos 3 opções incríveis para você não perder de jeito nenhum, essa transformação de negócios.</p>--}}
{{--            </div>--}}
{{--        </header>--}}

{{--        <div class="container">--}}
{{--            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">--}}
{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="my-0 fw-normal">Bronze</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h1 class="card-title pricing-card-title">R$15K--}}
{{--                                --}}{{--                                <small class="text-body-secondary fw-light">/mo</small>--}}
{{--                            </h1>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4 fs-5">--}}
{{--                                <li>+Logo pequeno <span class="text-roxo">Backdrop | Painel | Peças comunicação</span></li>--}}
{{--                                <li>+1 Ingresso <span class="text-roxo">Cortesia</span></li>--}}
{{--                                <li>+Mailing <span class="text-roxo">Evento</span></li>--}}
{{--                            </ul>--}}
{{--                            <button type="button" class="w-100 btn btn-lg btn-outline-primary btn-gradient-hover barlow-semibold fs-5"--}}
{{--                                    style="border-color: #6b02b3 !important; color: #6b02b3;">Não quero ficar de fora</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="my-0 fw-normal">Prata</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h1 class="card-title pricing-card-title">R$25K--}}
{{--                                --}}{{--                                <small class="text-body-secondary fw-light">/mo</small>--}}
{{--                            </h1>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4 fs-5">--}}
{{--                                <li>+Área para <span class="text-roxo">ativação</span></li>--}}
{{--                                <li>+Logo médio <span class="text-roxo">Backdrop | Painel | Peças comunicação</span></li>--}}
{{--                                <li>+5 Ingressos <span class="text-roxo">Cortesia, com acesso ao camarim</span></li>--}}
{{--                                <li><span class="text-roxo">Gravação Pod Cast</span></li>--}}
{{--                                <li>+Mailing <span class="text-roxo">Evento</span></li>--}}
{{--                                <li>+Divulgação <span class="text-roxo">canais de comunicação</span></li>--}}
{{--                            </ul>--}}
{{--                            <button type="button"--}}
{{--                                    class="w-100 btn btn-lg btn-primary gradient-rosa-price barlow-semibold fs-5">--}}
{{--                                Não quero ficar de fora--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3" style="background: linear-gradient(135deg, #2f066c, #f9059a, #b59de5);">--}}
{{--                            <h4 class="my-0 fw-normal text-white">Ouro</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h1 class="card-title pricing-card-title">R$35K--}}
{{--                                --}}{{--                                <small class="text-body-secondary fw-light">/mo</small>--}}
{{--                            </h1>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4 fs-5">--}}
{{--                                <li>+Área para <span class="text-roxo">ativação</span></li>--}}
{{--                                <li>+Logo grande <span class="text-roxo">Backdrop | Painel | Peças comunicação</span></li>--}}
{{--                                <li>+10 Ingressos <span class="text-roxo">Cortesia, com acesso ao camarim</span></li>--}}
{{--                                <li>+Painel ou palestra <span class="text-roxo">Gravação Pod Cast</span></li>--}}
{{--                                <li>+Publistory no perfil <span class="text-roxo">Palestrante | Soul Summit</span></li>--}}
{{--                                <li>+Mailing <span class="text-roxo">Evento</span></li>--}}
{{--                                <li>+Divulgação <span class="text-roxo">Mídia | Impresa | Canais de comunicação</span></li>--}}
{{--                            </ul>--}}
{{--                            <button type="button"--}}
{{--                                    class="w-100 btn btn-lg btn-primary gradient-rosa-price barlow-semibold fs-5">--}}
{{--                                Não quero ficar de fora--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container-fluid g-0">
        <img src="{{asset('images/mais-30-palestrantes.jpeg')}}" alt="focado em e-commerce" style="width: 100%;">
    </div>

    <div class="container-fluid g-0" style="background-color: #d7e1e1; padding-bottom: 25px;">
        <div class="container text-center">
            <div class="row pt-5">
                <div class="col align-self-center pt-5">
                    <span class="barlow-black fs-1 gradient-rosa-text">PALESTRANTES:</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/alex-moro.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/alexandre-nogueira.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/ariadne-souza.jpg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/bruna-malheiros.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/carolina-moreno.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/claudia-rosa.jpg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/clovis-souza.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/dennis-nakamura.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/eduardo-shinyashiki.jpg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/everton-henrique.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/felipe-cantera.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/leonardo-mantovani.jpg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/patricia-cotti.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/silvia-belluzzo.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/tatyane-luncah.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid g-0">
        <img src="{{asset('images/dobra-ecommerce.jpeg')}}" alt="focado em e-commerce" style="width: 100%;">
    </div>

    <div style="background-color: #d7e1e1; padding-bottom: 25px;">
        <header>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis">Nossas cotas</h1>
                <p class="fs-5 text-body-secondary">Temos 3 opções incríveis para você não perder de jeito nenhum, essa transformação de negócios.</p>
            </div>
        </header>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Bronze</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">R$15K
{{--                                <small class="text-body-secondary fw-light">/mo</small>--}}
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4 fs-5">
                                <li>+Logo pequeno <span class="text-roxo">Backdrop | Painel | Peças comunicação</span></li>
                                <li>+1 Ingresso <span class="text-roxo">Cortesia</span></li>
                                <li>+Mailing <span class="text-roxo">Evento</span></li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary btn-gradient-hover barlow-semibold fs-5"
                                    style="border-color: #6b02b3 !important; color: #6b02b3;">Não quero ficar de fora</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Prata</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">R$25K
{{--                                <small class="text-body-secondary fw-light">/mo</small>--}}
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4 fs-5">
                                <li>+Área para <span class="text-roxo">ativação</span></li>
                                <li>+Logo médio <span class="text-roxo">Backdrop | Painel | Peças comunicação</span></li>
                                <li>+5 Ingressos <span class="text-roxo">Cortesia, com acesso ao camarim</span></li>
                                <li><span class="text-roxo">Gravação Pod Cast</span></li>
                                <li>+Mailing <span class="text-roxo">Evento</span></li>
                                <li>+Divulgação <span class="text-roxo">canais de comunicação</span></li>
                            </ul>
                            <button type="button"
                                    class="w-100 btn btn-lg btn-primary gradient-rosa-price barlow-semibold fs-5">
                                Não quero ficar de fora
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3" style="background: linear-gradient(135deg, #2f066c, #f9059a, #b59de5);">
                            <h4 class="my-0 fw-normal text-white">Ouro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">R$35K
{{--                                <small class="text-body-secondary fw-light">/mo</small>--}}
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4 fs-5">
                                <li>+Área para <span class="text-roxo">ativação</span></li>
                                <li>+Logo grande <span class="text-roxo">Backdrop | Painel | Peças comunicação</span></li>
                                <li>+10 Ingressos <span class="text-roxo">Cortesia, com acesso ao camarim</span></li>
                                <li>+Painel ou palestra <span class="text-roxo">Gravação Pod Cast</span></li>
                                <li>+Publistory no perfil <span class="text-roxo">Palestrante | Soul Summit</span></li>
                                <li>+Mailing <span class="text-roxo">Evento</span></li>
                                <li>+Divulgação <span class="text-roxo">Mídia | Impresa | Canais de comunicação</span></li>
                            </ul>
                            <button type="button"
                                    class="w-100 btn btn-lg btn-primary gradient-rosa-price barlow-semibold fs-5">
                                Não quero ficar de fora
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4">
                    <h5>Soul Summit</h5>
                    <p>Vamos fazer desse evento um marco para o empreendedorismo local topa?</p>
                </div>
                <!-- Quick Links Section -->
                <div class="col-md-4">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Garanta já o seu ingresso</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-telephone-fill"></i> (11) 95907-9021</li>
                        <li><i class="bi bi-envelope-fill"></i> eventos@soulogistica.com.br</li>
                        <li><i class="bi bi-geo-alt-fill"></i> Rua Exemplo, 123, São Caetano, SP</li>
                    </ul>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p>&copy; 2024 Soul Summit. Todos os direitos reservados.</p>
                </div>
                <div class="col text-center">
                    <p>Desenvolvido por: <a href="https://damatatechnology.com.br">Damata Technology</a></p>
                </div>
            </div>
        </div>
    </footer>


@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Defina a data do evento
        const eventDate = new Date("2024-09-13T15:00:00");

        function updateCountdown() {
            const now = new Date();
            const timeDifference = eventDate - now;

            // Calcule a diferença em dias, horas, minutos e segundos
            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            // Atualize o texto do contador
            document.getElementById("days").textContent = days;
            document.getElementById("hours").textContent = hours;
            document.getElementById("minutes").textContent = minutes;
            document.getElementById("seconds").textContent = seconds;

            // Se o evento já passou, exiba uma mensagem
            if (timeDifference < 0) {
                document.getElementById("countdown").textContent = "O evento já aconteceu!";
                document.getElementById("days").textContent = "";
                document.getElementById("hours").textContent = "";
                document.getElementById("minutes").textContent = "";
                document.getElementById("seconds").textContent = "";
                document.getElementById("clearDays").textContent = "";
                document.getElementById("clearHours").textContent = "";
                document.getElementById("clearMinutes").textContent = "";
                document.getElementById("clearSeconds").textContent = "";
                document.getElementById("clearTextFaltam").textContent = "";
            }
        }

        // Atualize o contador imediatamente e a cada segundo
        updateCountdown();
        setInterval(updateCountdown, 1000);
    });
</script>
@endpush

@endsection
