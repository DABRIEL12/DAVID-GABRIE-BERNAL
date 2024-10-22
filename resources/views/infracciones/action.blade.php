<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Infracción</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{$infraccion->id ? route('infracciones.update', $infraccion) : route('infracciones.store') }}" method="post">
            @if($infraccion->id)
                @method('PUT')
                <input type="hidden" name="id" value="{{ $infraccion->id }}">
            @endif
            @csrf
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" class="form-control" name="dni" value="{{ $infraccion->dni  }}" required placeholder="Ingrese DNI" maxlength="8">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="datetime-local" class="form-control" name="fecha" value="{{ $infraccion->fecha }}" required placeholder="Ingrese fecha">
            </div>
            <div class="form-group">
                <label for="placa">Placa</label>
                <input type="text" class="form-control" name="placa" value="{{ $infraccion->placa }}" required placeholder="Ingrese placa" maxlength="7">
            </div>
            <div class="form-group">
                <label for="infraccion">Infracción</label>
                <input type="text" class="form-control" name="infraccion" value="{{ $infraccion->infraccion }}" required placeholder="Ingrese infracción" maxlength="200">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" name="descripcion" value="{{ $infraccion->descripcion }}" placeholder="Ingrese descripción" maxlength="255">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    </div>
</div>

