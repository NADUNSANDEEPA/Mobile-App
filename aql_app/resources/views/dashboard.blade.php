@extends('layouts.app')

@section('content')
    <div>
        <div style=" background: linear-gradient(to top, #13352F, #093E25);  border-bottom-left-radius: 60px; border-bottom-right-radius:60px;">
            
            @include('layouts/navbar')

            <div class="container" style="padding-top:8%; padding-bottom:10%;">
                <h1 class="text-with-shadow" style="color:#CDC770;">Hai</h1>
                <h1 class="display-1 text-with-shadow" style="color:#D5C932;">Nadun Sandeepa</h1>
            </div>
        </div>
        <div class="container" style="padding-top:7%;">
            <h1  class="text-decoration-underline display-4" style="font-weight:900;">LAST REPORTS</h1>
            <div class="mt-5">
                <div class="card  mt-4" style="width: 100%; background-color:#F5F3DA;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card mt-4" style="width: 100%; background-color:#F5F3DA;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
       
        @include('layouts/manubar')
</div>
@endsection