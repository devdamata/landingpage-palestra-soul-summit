@extends('layout')

@section('content')
    <div class="container-fluid background-gradient">
        <div class="row g-0 py-3">
            <div class="col-md-6 d-flex justify-content-center align-items-center barlow-black fs-3">
                <div class="text-center me-5">
                    <a class="text-decoration-none text-uppercase text-white" href="https://www.sympla.com.br/evento/soul-summit-abc/2570411?_gl=1*1qiksku*_gcl_au*MTU2Nzk3NTI3Ny4xNzIzMDQ4MDc5*_ga*MTg2OTc3NzUyNy4xNzIzMDQ4MDgx*_ga_KXH10SQTZF*MTcyMzA1MDUwNS4yLjEuMTcyMzA1MDk3OS41OC4wLjEwMzIyNDcz">
                        Soul<span class="barlow-light"> Summit</span>
                    </a>
                </div>
                <div class="ms-5 text-center d-md-none">
                    <a class="btn btn-primary gradient-rosa btn-xs text-uppercase" href="https://www.sympla.com.br/evento/soul-summit-abc/2570411?_gl=1*1qiksku*_gcl_au*MTU2Nzk3NTI3Ny4xNzIzMDQ4MDc5*_ga*MTg2OTc3NzUyNy4xNzIzMDQ4MDgx*_ga_KXH10SQTZF*MTcyMzA1MDUwNS4yLjEuMTcyMzA1MDk3OS41OC4wLjEwMzIyNDcz" target="_blank">
                        Ingressos
                    </a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center d-none d-md-flex barlow-medium fs-3">
                <a class="text-white text-decoration-none" href="https://www.sympla.com.br/evento/soul-summit-abc/2570411?_gl=1*1qiksku*_gcl_au*MTU2Nzk3NTI3Ny4xNzIzMDQ4MDc5*_ga*MTg2OTc3NzUyNy4xNzIzMDQ4MDgx*_ga_KXH10SQTZF*MTcyMzA1MDUwNS4yLjEuMTcyMzA1MDk3OS41OC4wLjEwMzIyNDcz" target="_blank">
                    Ingressos
                </a>
            </div>
        </div>
    </div>
    <div class="video-container">
        <div class="ratio ratio-16x9">
            <img src="{{ asset('images/13.jpg') }}" alt="Gif Organizadores">
        </div>
    </div>
    <div class="z-3 mx-auto">
        <div class="background-gradient rounded-4 mx-auto text-center cronometro-2">
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
    <div class="container-fluid g-0" style="background-color: #d7e1e1; padding-bottom: 25px;">
        <div class="container text-center">
            <div class="row pt-5">
                <div class="col align-self-center pt-5">
                    <span class="barlow-black fs-1 gradient-rosa-text">PALESTRAS:</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/desafios-e-solucoes-para-e-commerce-e-marketplaces.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/empreendedorismo-feminino.png')}}" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/marketing-multicanal-e-influencia.png')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="{{asset('images/palestrantes/vencendo-em-marketplaces.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid g-0">
        <img src="{{asset('images/mais-30-palestrantes.jpeg')}}" alt="focado em e-commerce" style="width: 100%;">
    </div>
    <div class="container-fluid g-0">
        <img src="{{asset('images/14.jpg')}}" alt="focado em e-commerce" style="width: 100%;">
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
                        <li><a href="https://www.sympla.com.br/evento/soul-summit-abc/2570411?_gl=1*1qiksku*_gcl_au*MTU2Nzk3NTI3Ny4xNzIzMDQ4MDc5*_ga*MTg2OTc3NzUyNy4xNzIzMDQ4MDgx*_ga_KXH10SQTZF*MTcyMzA1MDUwNS4yLjEuMTcyMzA1MDk3OS41OC4wLjEwMzIyNDcz">Garanta já o seu ingresso</a></li>
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
        const eventDate = new Date("2024-10-22T15:00:00");

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
