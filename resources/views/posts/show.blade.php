<x-app-layout>
    <div class="mt-32 container ">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 ">
                <h1 class="text-white text-4xl">{{$post->title}}</h1>
                <h2 class="text-white">{{$fecha_hoy}}</h2>
                <div>
                <figure>
                    <img class="object-cover "src="{{Voyager::image($post->image)}}"/>
                </figure>
                </div>
                <div class="relative ml-5 -top-12">
                    <p class="text-white ">{{$post->excerpt}}</p>

                </div>
                <div class="text-white">
                    {!! $post->body !!}
                </div>


                <div class="publicidad mt-4 mb-4">
                    <h5>PAUTA COMERCIAL</h5>
                    
                        <div class="pr-4 pl-4 a_hover">
                            <a href="#">
                                <img src="{{ asset('img/pauta_comercial/1.png') }}"
                                    class="max-w-full h-auto img_publicidad" title="">
                            </a>
                        </div>
                        
                    
                </div>
            </div>

            <div class="  bg-green-400">
                <div class=" grid-rows-4 gap-8">
                    <h1 class="ml-2 text-white font-semibold text-2xl">ULTIMOS BOLETINES</h1>

                    <div class="pr-4 pl-4 a_hover text-white">
                        <a href="#">
                            <div class="card_boletin-c2">
                                <img src="{{ asset('img/prensa/1.jpg') }}" class="img-fluid" alt="...">
                                <div class="">Cinco personas retornaron a la libertad en la región del Catatumbo.</div>
                            </div>
                        </a>
                    </div>

                    <div class="pr-4 pl-4 a_hover text-white">
                        <a href="#">
                            <div class="card_boletin-c2">
                                <img src="{{ asset('img/prensa/1.jpg') }}" class="img-fluid" alt="...">
                                <div class="">Cinco personas retornaron a la libertad en la región del Catatumbo.</div>
                            </div>
                        </a>
                    </div>

                    <div class="pr-4 pl-4 a_hover text-white">
                        <a href="#">
                            <div class="card_boletin-c2">
                                <img src="{{ asset('img/prensa/1.jpg') }}" class="img-fluid" alt="...">
                                <div class="">Cinco personas retornaron a la libertad en la región del Catatumbo.</div>
                            </div>
                        </a>
                    </div>

                    <div class="pr-4 pl-4 a_hover text-white">
                        <a href="#">
                            <div class="card_boletin-c2">
                                <img src="{{ asset('img/prensa/1.jpg') }}" class="img-fluid" alt="...">
                                <div class="">Cinco personas retornaron a la libertad en la región del Catatumbo.</div>
                            </div>
                        </a>
                    </div>
        
                    
                </div>
        
                    
        
                    
        
        
                
            </div>
            
            

        </div>
        <!-- Prensa -->
        <div class="deportes mt-5 mb-3">
            <h1 class="text-white font-semibold text-2xl ml-4 mb-4 hover:text-green-700">ULTIMAS NOTICIAS</h1>
            <div class="flex flex-wrap">
                <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover">
                    <a href="#">
                        <div class="card_noticias">
                            <img src="{{ asset('img/prensa/1.jpg') }}" class="img-fluid" alt="...">
                            <p>Cinco personas retornaron a la libertad en la región del Catatumbo.</p>
                        </div>
                    </a>
                </div>
                <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover">
                    <a href="#">
                        <div class="card_noticias">
                            <img src="{{ asset('img/prensa/2.jpg') }}" class="img-fluid" alt="...">
                            <p>Aumenta el nivel de riesgo para los residentes de un edificio de Cúcuta por
                                las grietas en su estructura.</p>
                        </div>
                    </a>
                </div>
                <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover">
                    <a href="#">
                        <div class="card_noticias">
                            <img src="{{ asset('img/prensa/3.jpg') }}" class="img-fluid" alt="...">
                            <p>Operación aérea entre Colombia y Venezuela iniciará este 4 de octubre.</p>
                        </div>
                    </a>
                </div>
                <div class="lg:w-1/4 pr-4 pl-4 w-1/2 a_hover">
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
    
</x-app-layout>