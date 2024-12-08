<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <form method="post" action="/tareas">
        @csrf
        <input type="text" name="descripcion" required>
        <button type="submit">Agregar Tarea</button>
    </form>
    <ul>
        @foreach ($tareas as $tarea)
            <li>
                {{ $tarea->descripcion }}
                @if (!$tarea->completada)
                    <form method="post" action="/tareas/{{ $tarea->id }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Completar</button>
                    </form>
                @else
                    <span>Completada</span>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>