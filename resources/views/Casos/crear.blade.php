@extends ('layouts.layout')
@section
    <h1>Crear Nuevo Caso</h1>

    <form action="/Casos" method="">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título del Caso</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crear Caso</button>
    </form>
@endsection