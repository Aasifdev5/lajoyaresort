@extends('master')
@section('title')
    {{ __('Membresía Vitalicia La Joya') }}
@endsection
@section('content')
<div class="page_content_wrap" style="padding-top: 0 !important; padding-bottom: 0 !important;">
    <div class="content_wrap">
        <div class="content">
            <div class="row justify-content-center text-center">
                
                <!-- Membership Section -->
                <div class="col-md-8">
                    <h2 class="mb-4 text-primary">Membresía Vitalicia</h2>
                    <p class="lead text-secondary">Acceso Exclusivo</p>
                    <p class="mb-4">Membresía para 5 personas, con acceso al club y sus instalaciones.</p>
                    <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.14.43.jpeg') }}" alt="Membresía Vitalicia" class="img-fluid  shadow">
                </div>
                
                <!-- Benefits Section -->
                <div class="col-md-8 mt-5">
                    <h3 class="mb-3 text-primary">Beneficios Adicionales</h3>
                    <img src="{{ asset('IMG-20230731-WA0022.jpg') }}" alt="Beneficios Adicionales" class="img-fluid  shadow mb-4">
                    <ul class="list-group list-group-flush shadow-sm">
                        <li class="list-group-item">Descuentos en servicios como:</li>
                        <li class="list-group-item">Hospedaje en nuestras Suites.</li>
                        <li class="list-group-item">Paseos en Caballos.</li>
                    </ul>
                </div>
                
                <!-- Inversión Duradera -->
                <div class="col-md-8 mt-5">
                    <h3 class="mb-3 text-primary">Inversión Duradera</h3>
                    <img src="{{ asset('WhatsApp Image 2025-02-04 at 19.33.58.jpeg') }}" alt="Inversión Duradera" class="img-fluid  shadow">
                </div>
                
                <!-- Membership Benefits -->
                <div class="col-md-8 mt-5">
                    <h3 class="mb-3 text-primary">Beneficios de la Membresía</h3>
                    <img src="{{ asset('20230805_153728.jpg') }}" alt="Beneficios de la Membresía" class="img-fluid  shadow mb-4">
                    <ul class="list-group list-group-flush shadow-sm">
                        <li class="list-group-item"><strong>Descuentos</strong> - Obtenga descuentos exclusivos en servicios y eventos.</li>
                        <li class="list-group-item"><strong>Eventos</strong> - Acceso a eventos exclusivos para miembros.</li>
                        <li class="list-group-item"><strong>Prioridad</strong> - Prioridad en reservas y servicios del club.</li>
                    </ul>
                </div>
                
                <!-- Facilities and Services -->
                <div class="col-md-8 mt-5">
                    <h3 class="mb-3 text-primary">Instalaciones y Servicios</h3>
                    <img src="{{ asset('dfsd.jpg') }}" alt="Instalaciones y Servicios" class="img-fluid  shadow mb-4">
                    <ul class="list-group list-group-flush shadow-sm">
                        <li class="list-group-item"><a href="{{url('ownership')}}">Cabañas amobladas con vista a la naturaleza.</a></li>
                        <li class="list-group-item">Parque acuático con toboganes y áreas de juego.</li>
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.26.22.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.27.32.jpeg') }}" class="img-fluid  shadow mb-4">
                        <li class="list-group-item">Canchas deportivas para fútbol, baloncesto y voleibol playa.</li>
                        <li class="list-group-item">Restaurante gourmet con selección exclusiva de platillos.</li>
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.33.36.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.34.08.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.34.44.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.35.13.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.35.34.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.38.51.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('resort.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.39.47.jpeg') }}" class="img-fluid  shadow mb-4">
                        <li class="list-group-item">Sauna Seca con servicios de relajación y bienestar.</li>
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.28.40.jpeg') }}" class="img-fluid  shadow mb-4">
                        <img src="{{ asset('WhatsApp Image 2025-02-11 at 14.29.53.jpeg') }}" class="img-fluid  shadow mb-4">
                        <li class="list-group-item">Servicio de concierge para atender sus necesidades.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
