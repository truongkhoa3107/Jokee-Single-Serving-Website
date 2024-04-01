<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    
    {{-- Custom CSS --}}
    <link href="{{asset('customs/css/joke/index.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row h-100 py-2 d-flex justify-content-between align-items-center">
            <div class="col-3 col-md-2 col-lg-1">
                <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-8 col-md-5 col-lg-3">
                <div class="row d-flex align-items-center">
                    <div class="col-7">
                        <div class="row justify-content-end fw-normal fst-italic text-muted">
                            Handicrafted By
                        </div>
                        <div class="row justify-content-end">
                            Jim HLS
                        </div>
                    </div>
                    <div class="col-5">
                        <img src="{{asset('images/logo_right.png')}}" class="img-fluid rounded-circle" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row banner justify-content-center text-center text-white">
        <div class="col-sm-10">
            <div class="container">
                <p class="fs-2">A joke a day keeps the doctor away</p>
                <p class="m-0 mt-3">If you joke wrong way, your teeth have to pay. (Serious)</p>
            </div>
        </div>
    </div>

    <div class="row content justify-content-center text-center border-bottom border-2">
        <div class="col-10">
            <div class="containter">
                <div class="text-start" id="jokeContainer">
                    <input type="hidden" name="id" value="{{ $index }}" id="id">
                    <p>{{ $jokes[$index]->content }}</p>

                </div>
            </div>
            <hr class="line" />

            
            <button class="m-3 btn-custom btn-like">This is Funny!</button>
            <button class="m-3 btn-custom btn-dislike">This is not funny.</button>
        </div>
    </div>

    <div class="row footer justify-content-center text-center text-break">
        <div class="col-sm-8">
            <div class="paragraph">
                <p class="m-0">This website is created as part of Hisolutions program. The materials contained on this website are provided for general</p>
                <p class="m-0">information only and do not constitute any form of advice. HLS assumes no responsibility for the accuracy of any particular statement and</p>
                <p>accepts no liability for any loss or damage which may arise from nellance on the information contained on this site.</p>
            </div>
            <span class="info-text">Copyright 2021 HLS</span>
        </div>
    </div>



    

    
</body>

<script src="{{asset('customs/js/joke/index.js')}}"></script>

</html>
