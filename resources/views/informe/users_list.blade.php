
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nuip</th>
                <th>Genero</th>
                <th>Dirreción</th>
                <th>Email</th>


            </tr>                            
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->nuip }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->email }}</td>
          
            </tr>
            @endforeach
        </tbody>
    </table>
