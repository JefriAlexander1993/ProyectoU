<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!!Form::label('code','Codigo(*)')!!}
               {!! Form::number('code',null,['id'=>'file','class'=> 'form-control','required'])!!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!!Form::label('name','Marca(*)')!!}
               {!!Form::text('name',null,['class'=> 'form-control', 'placeholder'=>"Ej:Televisión", 'title'=>'Nombre del producto', 'required'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!!Form::label('unit_price','Precio unitario(*)')!!}
             {!! Form::number('unit_price',null,['class'=> 'form-control', 'title'=>"Precio unitario",'placeholder'=>"Ej:1500", 'required'])!!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!!Form::label('sale_price','Precio venta(*)')!!}
             {!!Form::number('sale_price',null,['class'=> 'form-control', 'title'=>"Precio venta",'placeholder'=>"Ej:1700",'required'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
            {!!Form::label('stockmin','Stockmin(*)')!!}
               {!!Form::number('stockmin',null,['class'=> 'form-control', 'title'=>"Cantidad minima del producto",'placeholder'=>"Ej:1",'min'=>"1" , 'required'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('category_id', 'Categorías(*)') }}
              {{ Form::select('category_id', $categories, null, ['class' => 'form-control','id'=>'category_id','placeholder'=>'Seleciona la categoria.', 'name'=>'category_id', 'required']) }}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('file', 'Imagén') }}
            <br>
                {{Form::file('file',['class'=>'form-control'])}}
            </br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label class="bmd-label-floating">
                <strong>
                    Descripción
                </strong>
            </label>
            {!!Form::textarea('description', null,['class'=>'form-control', 'id'=>'descriptionproduct', 'rows'=>'2','name'=>'description','cols'=>'40','title'=>'Descripción del producto.','placeholder' => 'Ej: Color: azul, 4 ram.', 'required'])!!}
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>