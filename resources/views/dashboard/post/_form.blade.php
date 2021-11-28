@csrf
@include('dashboard.partials.validation-errors')
<div class="form-group mb3">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Publicación" 
    value="{{old("publication", $post->publication)  }}">
</div>

<div class="form-group mb-3">
    <textarea class="form-control" name="publication_content" id="publication_content" cols="30" rows="10" placeholder="Contenido de la publicación">
        {{old("publication_content", $post->publication_content)  }}
    </textarea>
</div>

<div class="mb-3">
    <a href="" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>

