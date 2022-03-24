<div class="form-group">

    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la post']) !!}

    @error('name')
        <spam class="text-danger">{{ $message }}</spam>
    @enderror

</div>



<div class="form-group">

    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la post', 'readonly']) !!}

    @error('slug')
        <spam class="text-danger">{{ $message }}</spam>
    @enderror

</div>



<div class="form-group">
    {!! Form::label('category_id', 'Categoría :') !!}

    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder']) !!}

    @error('category_id')
        <br>
        <spam class="text-danger">{{ $message }}</spam>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas:</p>

    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    @error('tags')
        <br>
        <spam class="text-danger">{{ $message }}</spam>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado:</p>


    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label class="mr-2">
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>
    <br>

    @error('status')
        <br>
        <spam class="text-danger">{{ $message }}</spam>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="" srcset="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2015/03/03/05/56/avenue-656969_960_720.jpg" alt="" srcset="">
            @endisset
        </div>
    </div>
    <div class="col">

        <div class="form-group">
            {!! Form::label('file', 'imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <br>
                <spam class="text-danger">{{ $message }}</spam>
            @enderror
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat neque dolor voluptatibus et
            labore quas reprehenderit animi odit illum cumque nam dolorum iusto a alias, eaque molestiae
            amet porro? Quidem!</p>


    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <br>
        <spam class="text-danger">{{ $message }}</spam>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

@error('body')
    <spam class="text-danger">{{ $message }}</spam>
@enderror

<br> <br>
