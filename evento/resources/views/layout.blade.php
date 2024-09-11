<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soul Summit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '858477006180418');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=858477006180418&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        body{
            font-family: "Barlow", sans-serif;
        }
        .text-roxo{
            color: #8c52ff;
        }
        .text-font-size-banner{
            font-size: 35px;
        }
        .bg-cover {
            background-image: url({{asset('images/banner-1.jpg')}});
            background-size: cover;
            background-position: center;
            height: 70vh;
        }

        .bg-cover::before {
            content: '';
            position: absolute;
            top: 73px;
            left: 0;
            width: 100%;
            height: 70%;
            background: linear-gradient(135deg, #020307, #320153, #6b02b3);
            opacity: 0.5;
            z-index: 1;
        }
        .bg-cover .container {
            position: relative;
            z-index: 2; /* Coloca o conteúdo sobre a neblina */
        }
        .background-gradient {
            background: linear-gradient(135deg, #020307, #320153, #6b02b3);
        }
        .gradient-rosa {
            background: linear-gradient(135deg, #2f066c, #f9059a, #b59de5);
            border: none;
            color: white;
            padding: 8px 20px; /* Ajuste o padding conforme necessário */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            line-height: 1.5;
            border-radius: 4px;
        }
        .gradient-rosa:hover {
            opacity: 0.9;
        }

        .gradient-rosa-price {
            background: linear-gradient(135deg, #2f066c, #f9059a, #b59de5);
            border-color: #6b02b3;
        }
        .gradient-rosa-price:hover {
            opacity: 0.9;
            border-color: #6b02b3 !important;
        }

        .gradient-rosa-text {
            background: linear-gradient(135deg, #2f066c, #f9059a, #b59de5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .barlow-thin {
            font-family: "Barlow", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .barlow-extralight {
            font-family: "Barlow", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .barlow-light {
            font-family: "Barlow", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .barlow-regular {
            font-family: "Barlow", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .barlow-medium {
            font-family: "Barlow", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .barlow-semibold {
            font-family: "Barlow", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .barlow-bold {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .barlow-extrabold {
            font-family: "Barlow", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .barlow-black {
            font-family: "Barlow", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .barlow-thin-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .barlow-extralight-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .barlow-light-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .barlow-regular-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .barlow-medium-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .barlow-semibold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .barlow-bold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .barlow-extrabold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .barlow-black-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

        .cronometro {
            width: 95%;
            margin: 0 auto;
            left: 2.5%;
            right: 2.5%;
            top: 72%;
            position: absolute;
            z-index: 1000;
        }

        .countdown {
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .countdown .time-part {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px;
        }
        .countdown .time-part span {
            display: block;
            text-align: center;
        }
        .countdown .time-part .number {
            font-size: 2.5em;
            margin-bottom: -5px;
        }
        .countdown .time-part .label {
            font-size: 1.2em;
            margin-top: -10px;
        }

        .footer {
            background: linear-gradient(135deg, #020307, #320153, #6b02b3);
            color: #fff;
            padding: 40px 0;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons a {
            margin: 0 10px;
        }
        .footer .social-icons i {
            font-size: 1.5em;
        }
        .btn-gradient-hover:hover{
            background: linear-gradient(135deg, #2f066c, #f9059a, #b59de5);
            border-color: #fff !important;
            color: #fff !important;
        }
        .text-roxo {
            color: #8252ff;
        }
    </style>
</head>
<body>
    <div class="container-fluid g-0">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    @stack('scripts')
</body>
</html>
