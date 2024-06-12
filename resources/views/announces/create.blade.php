@extends('base')

@section('title', 'Nouvelle annonce')

@section('content')

    <div class="container">
        <h2>Enregistrement d'une nouvelle sélection</h2>

        <form action="{{ route('announces.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Titre :</label>
                        <input type="text" name="title" id="title" class="form-control" required
                            placeholder="Votre titre">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">Ville :</label>
                        <input type="text" name="city" id="city" class="form-control" required
                            placeholder="Ville">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="price">Prix :</label>
                        <input type="text" name="price" id="price" class="form-control" required
                            placeholder="Prix">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="link">Lien :</label>
                        <input type="text" name="link" id="link" class="form-control" required
                            placeholder="Lien">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">Date de parution :</label>
                        <input type="date" name="date" id="date" class="form-control" required
                            placeholder="Date de parution">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="images">Photos :</label>
                        <input type="file" name="images[]" id="images" class="form-control-file" multiple>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="square">Surface :</label>
                        <input type="text" name="square" id="square" class="form-control" required
                            placeholder="Surface">
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="images">Photos :</label>
                        <input type="file" name="images[]" id="images" class="form-control-file" multiple>
                    </div>
                </div> --}}
            </div>

            <div class="form-group">
                <label for="comment">Annonce :</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Créer</button>
            </div>
        </form>
    </div>
@endsection
