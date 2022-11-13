<x-app-layout>
    @section('pagina')
        Inicio
    @endsection


    <div class="swiper shadow-2xl">
        <ul class="swiper-wrapper">

            @forelse ($covers as $cover)
                <li class="swiper-slide">
                    <img src="{{Voyager::image($cover->imagen)}}" class="w-full h-screen object-cover object-center" alt="">
                </li>
            @empty

                {{-- Imagen en el caso de que no tengamos ninguna en la bbdd --}}
                <li class="swiper-slide">
                    <img src="https://cdn.pixabay.com/photo/2020/04/28/19/15/man-5106022_960_720.jpg"
                        class="w-full h-screen object-cover object-center" alt="">
                </li>
                
            @endforelse

        </ul>

        <div class="bg-gradient-to-t from-black to-transparent h-12 relative -top-12 z-10">
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="container">

        <div class="flex justify-center firtsa">
            <a href="noticias">NOTICIAS</a>
            <a href="#">TRO PLUS</a>
            <a href="#">SERVICIOS</a>
        </div>

        <div class="flex flex-wrap md:justify-center mb-5">
            <div class="lg:w-1/2 pr-4 pl-4">
                <h5 class="text-green-700">CONÉCTATE CON NUESTRA PROGRAMACIÓN</h5>
            </div>
            <div class="lg:w-1/2 pr-4 pl-4 text-end">
                <p class=" text-white">
                    {{ $fecha_hoy }}
                    <button
                        class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded ml-4 py-1 px-3 leading-normal no-underline text-gray-100 border-gray-100 hover:bg-gray-100 hover:text-green-700 bg-transparent hover:bg-gray-200 ms-3">
                        VER TODO
                    </button>
                </p>
            </div>

            <div class="lg:w-1/4 pr-4 pl-4 w-1/2">

                <div
                    class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 card_programacion mt-2">
                    <div class="card-body">
                        <p>Antes <br>11:00 a.m.</p>
                    </div>
                    <div class="card-footer">
                        JOVENES 5.0
                    </div>
                </div>
            </div>

            <div class="lg:w-1/4 pr-4 pl-4 w-1/2">
                <div
                    class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 card_programacion mt-2">
                    <div class="card-body">
                        <p>Ahora <br>12:00 p.m.</p>
                    </div>
                    <div class="card-footer">
                        MASCOTILANDIA
                    </div>
                </div>
            </div>

            <div class="lg:w-1/4 pr-4 pl-4 w-full mt-4 md:mt-0">
                <div
                    class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 card_programacion mt-2">
                    <div class="card-body">
                        <p>Despúes <br>01:00 p.m.</p>
                    </div>
                    <div class="card-footer">
                        DE TIERRA SOMOS
                    </div>
                </div>
            </div>

            <!-- Oriente Noticias -->
            <div class="noticias">
                <a href="{{route('noticias')}}"><h1 class="text-white font-semibold text-2xl ml-4 mb-4 ">ORIENTE NOTICIAS</h1></a>
                <div class="flex flex-wrap ">
                    @foreach ($posts as $post)
                        <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover">
                            <a href="{{route('posts.show', $post)}}">
                                <div class="card_noticias">
                                    <img src="{{ Voyager::image($post->image)}}" class="max-w-full h-auto" alt="...">
                                    <p class="text-white">{{$post->excerpt}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
                    <!-- Pauta comercial -->
                    <!-- Espacio publicitario -->
                    <div class="publicidad mt-2">
                        <h5 >PAUTA COMERCIAL</h5>
                        <div class="flex flex-wrap">
                            <div class="lg:w-1/2 pr-4 pl-4 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/pauta_comercial/1.png') }}"
                                        class="max-w-full h-auto img_publicidad" title="">
                                </a>
                            </div>
                            <div class="lg:w-1/2 pr-4 pl-4 mt-4 md:mt-0 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/pauta_comercial/1.png') }}"
                                        class="max-w-full h-auto img_publicidad" title="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Tro Deportes -->
                    <div class="deportes mt-5">
                        <h5 class="text-white font-semibold text-2xl ml-4 mb-4 hover:text-green-700">TRO DEPORTES</h5>
                        <div class="flex flex-wrap ">
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/deportes/1.png') }}" class="max-w-full h-auto"
                                            alt="...">
                                        <p class=" text-white">¡No va más! Nairo Quintana no participará en la Vuelta a España tras un
                                            incidente con el tramadol.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover text-white">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/deportes/2.jpg') }}" class="img-fluid" alt="...">
                                        <p>¡Histórico! El tenista Daniel Galán avanzó a segunda ronda del US Open</p>
                                    </div>
                                </a>
                            </div>
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover text-white">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/deportes/3.jpg') }}" class="img-fluid" alt="...">
                                        <p>Cabal y Farah pasan a los cuartos de final del US Open.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover text-white">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/deportes/4.jpg') }}" class="img-fluid" alt="...">
                                        <p>El Campeonato Nacional de Vela se realizará en la represa de Topocoro,
                                            Santander.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Infantiles y Juveniles -->
                    <div class="infantiles_juveniles mt-5">
                        <h1 class="text-white font-semibold text-2xl ml-4 mb-4 hover:text-green-700">INFANTILES Y JUVENILES</h1>
                        <div class="flex flex-wrap">
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/1.jpeg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/2.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/3.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/4.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3  a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/5.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3  a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/6.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Cronica y Documental-->
                    <div class="infantiles_juveniles mt-5">
                        <h1 class="text-white font-semibold text-2xl ml-4 mb-4 hover:text-green-700">CRÓNICA Y DOCUMENTAL</h1>
                        <div class="flex flex-wrap">
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/4.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/1.jpeg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/6.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/2.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/5.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/3.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Cronica y Documental-->
                    <div class="infantiles_juveniles mt-5">
                        <h1 class="text-white font-semibold text-2xl ml-4 mb-4 hover:text-green-700">SERIES DE FICCIÓN Y COMEDIA</h1>
                        <div class="flex flex-wrap">
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/7.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/8.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/9.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/10.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/11.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 mb-3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/series/12.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- magazines-->
                    <div class="infantiles_juveniles mt-5">
                        <h1 class="text-white font-semibold text-2xl ml-4 mb-4 hover:text-green-700">MAGAZINES</h1>
                        <div class="flex flex-wrap">
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/magazines/1.jpg') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/magazines/2.png') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/magazines/3.png') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/magazines/4.png') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/magazines/5.png') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                            <div class="lg:w-1/6 pr-4 pl-4 w-1/3 a_hover">
                                <a href="#">
                                    <img src="{{ asset('img/magazines/6.png') }}" class="img-fluid img_peliculas"
                                        title="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Prensa -->
                    <div class="deportes mt-5 mb-3">
                        <h1 class="text-white font-semibold text-2xl ml-4 mb-4 hover:text-green-700">PRENSA</h1>
                        <div class="flex flex-wrap">
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover text-white">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/prensa/1.jpg') }}" class="img-fluid" alt="...">
                                        <p>Cinco personas retornaron a la libertad en la región del Catatumbo.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover text-white">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/prensa/2.jpg') }}" class="img-fluid" alt="...">
                                        <p>Aumenta el nivel de riesgo para los residentes de un edificio de Cúcuta por
                                            las grietas en su estructura.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover text-white">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/prensa/3.jpg') }}" class="img-fluid" alt="...">
                                        <p>Operación aérea entre Colombia y Venezuela iniciará este 4 de octubre.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover text-white">
                                <a href="#">
                                    <div class="card_noticias">
                                        <img src="{{ asset('img/prensa/4.png') }}" class="img-fluid" alt="...">
                                        <p>Asesinato múltiple en Barranquilla se habría dado por disputa entre el Clan
                                            del Golfo y Los Costeños.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>




                </div>




                @push('js')
                    <script>
                        new Swiper('.swiper', {

                            // Optional parameters
                            loop: true,
                            autoplay: {
                                delay: 8000,
                                disableOnInteraction: false,
                            },
                            // If we need pagination
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            // Navigation arrows
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                        });
                    </script>
                @endpush




</x-app-layout>
