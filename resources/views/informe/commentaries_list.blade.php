              
<title>INFORME DE COMENTARIO</title>
    
    @include('informe.formatpdf')

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Descripción</th>

            </tr>                            
        </thead>
        <tbody>
            @foreach($commentaries as $commentary)
            <tr>
                <td>{{ $commentary->id }}</td>
                <td>{{ $commentary->name }}</td>
                <td>{{ $commentary->email }}</td>
                <td>{{ $commentary->body }}</td>
          
            </tr>
            @endforeach
        </tbody>
    </table>
