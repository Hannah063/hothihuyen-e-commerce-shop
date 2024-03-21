<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid" style="background-color: #EEF3F7">
        <div class="row pt-2">
            <div class="col-1" style="height: 120vh; background-color: white; overflow: hidden;">
                @foreach ($fileNames as $name)
                <x-sidebar-item>
                        <x-slot name="fileName">{{ $name['name'] }}</x-slot>
                </x-sidebar-item>
                @endforeach
            </div>
            <div class="col-11">
                <div class="row pt-2">
                    <div class="col-3">
                        <div class="row" style="height: 100%">
                            <img src="{{asset('assets/images/logo.svg')}}" alt="" style="height: 80%;" class="col-3">
                            <div class="col-7" style="height: 100%">
                                <h5>P I X O R U S</h5>
                                <p style="font-size: 13px">Customer satisfacties</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="d-flex form-inputs justify-center align-items-center" style="background-color: white; border: solid 1px black; border-radius: 5px">
                            <input class="form-control" type="text" placeholder="Search any product..." style="border: 0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 30px; margin-right: 10px;"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row  d-flex justify-center align-items-center ">
                            <div class="col-2">
                                <img src="{{asset('assets/images/avatar.jpg')}}" alt="" style="border-radius: 50%; height: 45px;">
                            </div>
                            <div class="col-4 d-flex justify-center align-items-center gap-2">
                                <h6>Diego Morata</h6>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" style="height: 25px; padding-bottom: 7px"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                            </div>
                            <div class="col-3">
                                <h6>Chart</h6>
                            </div>
                            <div class="col-3">
                                <h6>Orders</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-1 gap-2" style="height: 35%;">
                    <div class="col-3 pt-2" style="background-color: white; margin-left: 15px; width:23%; height: 99%">
                        @foreach ($nameItems as $name)
                            <x-sub-sidebar-item>
                                    <x-slot name="nameItem">{{ $name['name'] }}</x-slot>
                            </x-sub-sidebar-item>
                        @endforeach
                    </div>
                    <div class="col-6">
                        <img src="{{asset('assets/images/sofa.jpg')}}" alt="" style="height: 30%; border: solid 1px; width: 100%; margin-bottom: 15px;" >
                        <img src="{{asset('assets/images/bag.jpg')}}" alt="" style="height: 14%; ; : solid 1px; width: 31%; margin-right: 18px;" >
                        <img src="{{asset('assets/images/clock.png')}}" alt="" style="height: 14%; ; border: solid 1px; width: 31%; margin-right: 18px" >
                        <img src="{{asset('assets/images/lamp.jpg')}}" alt="" style="height: 14%; ; border: solid 1px; width:31%" >
                    </div>
                    <div class="col-3" style="width:23%">
                        <h4>Recently Viewed</h4>
                        <div class="card" style="height: 20%;">
                            <img src="{{asset('assets/images/bag1.jpeg')}}" class="card-img-top" alt="..." style="height: 80%;">
                            <div class="card-body">
                              <p class="card-text">See you browsing history</p>
                            </div>
                        </div>
                        <h4>Suggesions for You</h4>
                        <div class="card" style="height: 20%;">
                            <img src="{{asset('assets/images/bag1.jpeg')}}" class="card-img-top" alt="..." style="height: 80%;">
                            <div class="card-body">
                              <p class="card-text">Watch more</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4>Deals of the Day    |   <span style="color: red">20:45:12</span> <span style="color: red">Left</span> <span style="margin-left: 850px">View all Deals</span></h4>
                </div>
                <div class="row gap-5">
                    @foreach ($bags as $bag)
                        <div class="card col-2" style="height: 250px;">
                            <img src="{{asset('assets/images/' . $bag['file']) }}" class="card-img-top" alt="..." style="height: 70%;">
                            <div class="card-body">
                            <h5 class="card-text">{{ $bag['name'] }}</h5>
                            <p>{{ $bag['price'] }}  |   <span style="text-decoration-line: line-through">{{ $bag['oldPrice'] }}</span></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</html>
