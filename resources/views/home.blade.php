@extends('base')

@section('title', 'Biens a vendre')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mt-5">
        <p class="text-center">
            Bienvenue sur notre site dédié aux recherches en Auvergne. Nous explorons diverses thématiques liées à cette
            magnifique région, connue pour ses volcans, ses paysages pittoresques, et son riche patrimoine culturel.
        </p>
        <p class="text-center">
            Notre équipe de chercheurs travaille sans relâche pour découvrir de nouvelles informations et partager nos
            découvertes avec vous. Que vous soyez passionné par l'histoire, la géologie, ou simplement curieux d'en savoir
            plus sur cette région, vous trouverez ici une mine d'informations.
        </p>
        <p class="text-center">
            Restez à l'écoute pour les mises à jour régulières et les dernières nouvelles de nos recherches. Merci de votre
            visite et bonne lecture !
        </p>
    </div>
@endsection
