@extends('layouts.app')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/p1.jpg" width="100%" height="225">
                </div>

                <div class="col-md-8">
                    <p style="font-size: 25px;"><strong>Тимурова Динара Асетовна</strong></p>
                    <p>Женщина, 30 лет, родился 18 октября 1989</p>
                    <p>Алматы, м. Жибек Жолы, не готов к переезду, готов к командировкам</p>

                    <p>Контакты</p>
                    <ul>
                        <li>+77772337722</li>
                        <li><a href="mailto:web@web.com">web@web.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-9">
                    <p style="font-size: 25px;"><strong>Упаковщик</strong></p>
                    <p>Занятость: полная занятость</p>
                    <p>График работы: полный день</p>

                    <div class="opt_raboty">
                        <p style="font-size: 20px; color: #ccc">Опыт работы 10 лет 2 месяца</p>
                    </div>

                    <div id="timeline">
                        <div id="timeline-content">
                            <h1>Опыть работы</h1>

                            <ul class="timeline">
                                <li class="event" data-date="65Million B.C.">
                                    <h3>Dinosaurs Roamed the Earth</h3>
                                    <p>RAWWWWWWRRR 🐢🦂</p>
                                </li>
                                <li class="event" data-date="2005">
                                    <h3>Creative Component Launched</h3>
                                    <p>"We can be all things to all people!" 📣</p>
                                </li>
                                <li class="event" id="date" data-date="2009">
                                    <h3>Squareflair was Born</h3>
                                    <p></p> <p>"We can be all things to Squarespace users!" 📣</p>
                                </li>

                                <li class="event" data-date="November 15, 2018">

                                    <h3>Squareflair Today</h3>

                                    <p>"We design and build from scratch!" 📣<p/> <p>When we say <em><strong>100% custom</strong></em> we mean it— and we build all sites on the Squarespace Developer platform.<p/>
                                    <p>Did you know that all of our pixels are hand-forged from the rarest of subpixels grown and harvested in the <em>Nerd Forest</em>? <br>🤜💥🤛</p>

                                    <p><strong>Our success can be measured by lives and brands enhanced by 9+ years of 100% Squarespace-focused service!</strong></p>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
