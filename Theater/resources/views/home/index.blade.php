@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="text-center">
    <h1 class="display-4">Театр им. Гематогена</h1>
    <div class="container-fluid text-center border-bottom p-4">
        <section>
            <div class="row">
                <!-- MAIN -->
                <main class="col-md-8 col-lg-4">
                    <h2>Наши истоки</h2>
                    Данный театр был основан в 1894 г. И он не утратил своё величие. Самым первым владельцем был Бан фон ген Гематоген.
                </main>
                <!-- ASIDE -->
                <div class="col-md-4 col-lg-8">
                    <div class="row">
                        <!-- ASIDE #1 -->
                        <aside class="col-sm-6 col-md-12">
                            <div class="container text-center">

                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src{{ asset('/img/pingvin.png') }} class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="..." class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="..." class="d-block w-100" alt="...">
                                      </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Предыдущий</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Следующий</span>
                                    </button>
                                  </div>

                            </div>
                        </aside>
                        <!-- ASIDE #2 -->
                        <aside class="col-sm-6 col-md-12">
                            Наш театр
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="divider"></div>
    <div class="border-top border-bottom text-left p-4">
        <img  src="../public/img/pingvin.png" alt="...">
    </div>
    <div class="border-top border-bottom text-right p-4">
        <img src="{{ asset('/img/pingvin.png') }}" class="img-fluid rounded">    
    </div>
</div>

@endsection