@extends("layouts.site")
@section("conteudo")
    
        <section id="secao-categorias">
            <div class="secao-titulos">
                <div class="titulo">
                    <h2>Categorias</h2>
                    <a href="#">Ver Mais></a>
                </div>
                <p>Encontre Profissionais na Categoria Desejada</p>
            </div>
            <div class="lista-card-categorias owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset("img/categoria-carro.jpg")}}" alt="carro">
                    <span>mecanico</span>
                </div>
                <div class="item">
                    <img src="{{asset("img/categoria-carro.jpg")}}" alt="carro">
                    <span>mecanico</span>
                </div>

                <div class="item">
                    <img src="{{asset("img/categoria-carro.jpg")}}" alt="carro">
                    <span>mecanica </span>
                </div>

                <div class="item">
                    <img src="{{asset("img/categoria-carro.jpg")}}" alt="carro">
                    <span>mecanica </span>
                </div>

                <div class="item">
                    <img src="{{asset("img/categoria-carro.jpg")}}" alt="carro">
                    <span>mecanica </span>
                </div>

                <div class="item">
                    <img src="{{asset("img/categoria-carro.jpg")}}" alt="carro">
                    <span>mecanica </span>
                </div>

            </div>

        </section>
        <section id="secaoServicos">
            <div class="secao-titulos">
                <div class="titulo">
                    <h2>Categorias</h2>
                    <a href="#">Ver Mais></a>
                </div>
                <p>Descubra nossos serviços mais populares</p>

            </div>

            <div class="lista-card-servico">

                @foreach ($servicos as $servico )
                    
                <!-- inicio card serviço -->
                <div class="card-servico">
                    <div class="card-foto">
                        <img src="{{asset("img/categoria-informatica.jpg")}}" alt="barbeiro">
                        <div class="card-foto-legenda">

                            <div class="card-foto-preco">
                                R${{number_format($servico->valor,2,',') }}
                            </div>

                            <div class="card-foto-categoria">
                                informatica
                            </div>

                        </div>
                    </div>

                    <div class="card-descricao">
                        <div class="card-titulo">
                            <h3>{{$servico->titulo}}</h3>
                        </div>
                        <div class="card-avaliacao">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>(5)
                        </div>


                        <div class="card-descricao-legenda">

                            <div class="card-descricao-telefone">
                                <i class="fa-solid fa-phone"></i>{{$servico->telefone}} 
                            </div>

                            <div class="card-descricao-local">
                                {{$servico->cidade}}<i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                    </div>



                </div>
                <!--final card  serviço -->
                @endforeach
            </div>

        </section>

        @endsection
    
    