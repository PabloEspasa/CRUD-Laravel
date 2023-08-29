@extends('layouts.app')
@section('title', 'Rolo burgers')
@section('content')


    <div class="container d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('image/body/logoMADCATwhite.png') }}" alt="MAD CAT Logo" class="mb-4" style="max-width: 200px;">
        <div class="container col-8">
            <p class="text-center text-white fs-5 ">
                MAD CAT es el emocionante resultado de la pasión compartida de dos amigos por el diseño web. Juntos, hemos
                creado una empresa que fusiona creatividad y tecnología para ofrecer soluciones de diseño web únicas y
                sorprendentes. Nos enorgullece combinar nuestra visión innovadora con un enfoque colaborativo para convertir
                ideas en sitios web cautivadores. Como recién llegados entusiastas, nos esforzamos por incorporar los
                estilos
                más frescos y las últimas tendencias en cada proyecto que abordamos. MAD CAT, impulsada por nuestra amistad
                y
                dedicación, está lista para llevar tus sueños digitales a la realidad con diseños web que destacan y
                emocionan.
            </p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="text-center" id="productos">
            <img src="{{ asset('image/body/staff.png') }}" class="img-fluid" width="400" alt="">
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('image/emma.jpeg') }}" alt="Emma Imagen" width="100%" class="mb-3 rounded-5">
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <p class="text-white">
                    Conoce a Emma y Pablo de MAD CAT: Apasionados analistas de sistemas, impulsados por la excelencia. Emma,
                    con su creatividad y atención meticulosa, aborda desafíos técnicos con innovación. Pablo, hábil en
                    optimización y resolución de problemas, aporta eficiencia. Juntos, como amigos comprometidos, estudian
                    arduamente para mantenerse al día en tecnología y diseño web. Su dedicación y ambición impulsan el éxito
                    de MAD CAT, liderando con soluciones innovadoras y transformando aspiraciones en experiencias digitales
                    excepcionales.
                    Nuestra colaboración en el proyecto ROLO Burgers fue un éxito rotundo. Creamos un sitio web innovador y
                    atractivo que capturó la esencia de la marca. Diseñamos una interfaz intuitiva que resalta los
                    deliciosos menús y facilita la navegación de los clientes.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('image/pablo.jpg') }}" alt="Pablo Imagen" width="100%" class="mb-3 rounded-5">
            </div>
        </div>
    </div>

@endsection
