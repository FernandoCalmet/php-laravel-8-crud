<h1>{{ $modo }} empleado</h1>
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre">

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}" id="ApellidoPaterno">

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}" id="ApellidoMaterno">

<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" id="Correo">

<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="120" alt="">
@endif
<input type="file" name="Foto" id="Foto">

<input type="submit" value="{{ $modo }} datos">

<a href="{{ url('empleado') }}">Regresar</a>