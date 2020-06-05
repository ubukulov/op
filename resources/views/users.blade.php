@extends('layouts.app')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Список сертифицированных упаковщиков</h2>
            <br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="img/p1.jpg" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">
                                ФИО: Тимурова Д.А. <br>
                                Проходил: Курс/40
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('resume') }}" class="btn btn-sm btn-outline-secondary">Резюме</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="img/p2.webp" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">ФИО: Тимурова Д.А. <br>Проходил: Курс/40</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('resume') }}" class="btn btn-sm btn-outline-secondary">Резюме</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="img/p3.jpg" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">ФИО: Тимурова Д.А. <br> Проходил: Курс/40</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('resume') }}" class="btn btn-sm btn-outline-secondary">Резюме</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
