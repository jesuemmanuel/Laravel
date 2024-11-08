<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <h1>Formulario de creacion de empleados</h1>
<div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input
        type="text"
        class="form-control"
        name="Nombre"
        id="Nombre"
        aria-describedby="helpId"
        placeholder="Nombre"
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="Apellido Paterno" class="form-label">Apellido Paterno</label>
    <input
        type="text"
        class="form-control"
        name="Apellido Paterno"
        id="Apellido Paterno"
        aria-describedby="helpId"
        placeholder="Apellido paterno"
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="Apellido Materno" class="form-label">Apellido Materno</label>
    <input
        type="text"
        class="form-control"
        name="Apellido Materno"
        id="Apellido Materno"
        aria-describedby="helpId"
        placeholder="Apellido Materno"
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input
        type="text"
        class="form-control"
        name="Email"
        id="Email"
        aria-describedby="helpId"
        placeholder="Email"
    />
    <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
    <label for="Foto" class="form-label">Foto</label>
    <input
        type="file"
        class="form-control"
        name="Foto"
        id="Foto"
        placeholder=""
        aria-describedby="fileHelpId"
    />
    <div id="fileHelpId" class="form-text">Help text</div>
</div>
<button
    type="Enviar"
    class="btn btn-primary"
>
    Enviar
</button>
