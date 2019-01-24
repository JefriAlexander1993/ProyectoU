<title>
    INFORME DE COTIZACIÓN
</title>
@include('informe.formatpdf')
<table class=" table-hover table-striped">
    <thead>
        <th>
            Nombre
        </th>
        <th>
            Descripcion
        </th>
        <th>
            Precio Unitario
        </th>
        <th>
            Cantidad
        </th>
        <th>
            Subtotal
        </th>
    </thead>
    <tbody>
        @foreach($cart as $item)
        <tr>
            <td>
                {{$item->name}}
            </td>
            <td>
                {{$item->description}}
            </td>
            <td>
                {{$item->sale_price}}
            </td>
            <td>
                {{ $item->quantity }}
            </td>
            <td>
                {{$item->sale_price * $item->quantity}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="card">
    <h3>
        Total:
    </h3>
    <div id="totalcard" name="totalcard">
    </div>
</div>