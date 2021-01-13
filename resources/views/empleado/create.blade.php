<p>Formulario de creación de empleado</p>

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form', ['modo' => 'Crear'])
</form>