@extends('layouts.app')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Профессии <br> с трудоустройством</h2>
            <br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="/img/p1.jpg" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">Упаковщик</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('users') }}" class="btn btn-sm btn-outline-secondary">Просмотр</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="/img/p2.webp" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">Сварщик</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('users') }}" class="btn btn-sm btn-outline-secondary">Просмотр</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="/img/p3.jpg" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">Кладовщик</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('users') }}" class="btn btn-sm btn-outline-secondary">Просмотр</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
