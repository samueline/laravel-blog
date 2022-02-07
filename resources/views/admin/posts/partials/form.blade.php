<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>"Ingrese el nombre del post"]) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Nombre: ') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>"Ingrese el slug del post","readOnly"]) !!}
    
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria: ') !!}
    {!! Form::select('category_id', $categories,null, ['class'=>'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)
        <label class="mr-3">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach
    <hr>

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label >
        {!! Form::radio('status', 1, true ) !!}
        Borrador
    </label>
    <label >
        {!! Form::radio('status', 2  ) !!}
        Publicado
    </label>

    <hr>
    @error('status')
    <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col image-wrapper">
        
    @isset ($post->image)
    <img  id="picture" src="{{Storage::url($post->image->url)}}" alt="imagen">
        
    @else
    <img  id="picture" src="https://cdn.pixabay.com/photo/2019/04/09/19/45/galata-4115381__340.jpg" alt="default">
        
    @endif        
        
    </div>
    
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se va a mostrar en el post') !!}
            {!! Form::file('file', ['class'=>'form-control-file', 'accept'=>'image/*']) !!}
            @error('file')
            <span class="text-danger">{{$message}}</span>
        @enderror 
        </div>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ullam.</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-group']) !!}
    
    <hr>
    
    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post: ') !!}
    {!! Form::textarea('body', null, ['class'=>'form-group']) !!}
<hr>
    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>