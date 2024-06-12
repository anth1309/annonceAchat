@extends('base')

@section('title', 'Bien a vendre')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Liste des annonces</h2>
        <div class="row">
            @foreach ($announces as $announce)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="min-height: 300px;">


                        @php
                            //  dd('path photo : ' . $announce->photos()->first()->image_path);
                            $image = $announce->photos()->first()->image_path;
                        @endphp
                        @if ($image)
                            <img src="{{ asset('storage/' . $image) }}" alt="{{ $announce->title }}">
                            {{-- <img src="{{ url('storage/app/public/' . $image) }}" class="card-img-top"
                                alt="{{ $announce->title }}"> --}}
                        @else
                            <p>Pas d'image</p>
                        @endif
                        <div class="card-body">

                            <h5 class="card-title">{{ $announce->title }}</h5>
                            <p class="card-text">{{ $announce->comment }}</p>
                            <p class="card-text"><small class="text-muted">{{ $announce->city }}</small></p>
                            <p class="card-text"><strong>Prix : </strong>{{ $announce->price }} €</p>
                            <p class="card-text"><a href="{{ $announce->link }}" class="btn btn-primary"
                                    target="_blank">Voir
                                    plus</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
