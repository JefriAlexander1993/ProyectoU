<title>
    INFORME DE ROLES
</title>
@include('informe.formatpdf')
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
        @foreach($roles as $role)
        <tr>
            <td>
                {{ $role->id }}
            </td>
            <td>
                {{ $role->name }}
            </td>
            <td>
                {{ $role->display_name }}
            </td>
            <td>
                {{ $role->description}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
