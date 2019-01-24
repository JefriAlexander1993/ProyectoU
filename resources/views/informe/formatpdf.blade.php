<div style="border: 1px solid">
    <img alt="" class="" data-src="/images/IMAGOTIPO2.png" src="{{asset('images/IMAGOTIPO2.png')}}" style="width:150px;height:100px ;margin-top:10px;margin-left:10;margin-bottom:10 "/>
    <div class="container" style="position:absolute;top:10;left:30;right:10">
        <p>
            <h1 align="right">
                GÓTICA COMERCIALIZADORA.
            </h1>
        </p>
        <p>
            <h3 align="right">
                Nit: 79568934-1.
            </h3>
        </p>
    </div>
</div>
<br>
    <?php  $fecha=date("j/n/Y");?>
    <strong>
        Fecha de realizacion del reporte:
        <?php echo $fecha;?>
    </strong>
    <br>
        <strong>
            Usuario:{{ Auth::user()->name }}
        </strong>
        <style type="text/css">
            table{
            width:100%;
            border-collapse: collapse;
            margin: 0 auto;
            align:center;
        }
        td, th{
          
        border:1px solid black;
          
        }
        </style>
        <br>
            <br>
            </br>
        </br>
    </br>
</br>