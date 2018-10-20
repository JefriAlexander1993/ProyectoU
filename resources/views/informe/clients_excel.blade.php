    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nuip</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Email</th>

            </tr>                            
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->nuip }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->email }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
