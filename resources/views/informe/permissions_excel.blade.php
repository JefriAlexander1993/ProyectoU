<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Nombre
            </th>
            <th>
                Nombre a mostar
            </th>
            <th>
                Descripción
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr>
            <td>
                {{ $permission->id }}
            </td>
            <td>
                {{ $permission->name }}
            </td>
            <td>
                {{ $permission->display_name }}
            </td>
            <td>
                {{ $permission->description}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>