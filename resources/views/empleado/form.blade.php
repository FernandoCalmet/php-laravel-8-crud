<h1>{{ $modo }} empleado</h1>
<div>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre">
</div>

<div>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}" id="ApellidoPaterno">
</div>

<div>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}" id="ApellidoMaterno">
</div>

<div>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" id="Correo">
</div>

<div>
    <label for="Foto">Foto</label>
    @if(isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="120" alt="">
    @endif
    <input type="file" name="Foto" id="Foto">
</div>

<div>
    <input type="submit" value="{{ $modo }} datos"> | <a href="{{ url('empleado') }}">Regresar</a>
</div>