@extends('dashboard.master')
@section('content')
<div class="form-group mb3">
    <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Publicación"
    >
</div>

<div class="form-group mb-3">
    <textarea readonly class="form-control" name="publication_content" id="publication_content" cols="30" rows="10" placeholder="Contenido de la publicación">
        {{ $post->publication_content }}
    </textarea>
</div>

<div class="mb-3">
    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
@endsection



