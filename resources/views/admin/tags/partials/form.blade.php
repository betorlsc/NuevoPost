<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
    @error('name')
        <spam class="text-danger">{{ $message }}</spam>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la etiqueta', 'readonly']) !!}
    @error('slug')
        <spam class="text-danger">{{ $message }}</spam>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('color', 'Color') !!}

    {!! Form::select('color', $colors, null, ['class' => 'form-control', 'placeholder' ]) !!}
{{-- 
    <select name="color" id=""   class="form-control">

        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue" selected="selected">Azul</option>
    </select> --}}

    @error('color')
        <spam class="text-danger">{{ $message }}</spam>
    @enderror
</div>
