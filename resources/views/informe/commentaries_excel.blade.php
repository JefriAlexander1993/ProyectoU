    
    <table class="table">
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
