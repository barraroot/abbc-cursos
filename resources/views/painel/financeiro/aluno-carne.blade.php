<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carne Contrato N.{{$contrato->contrato}}</title>
    <style>
        #content {
            margin-top: 5px;
            display: flex;
            flex-direction: row;
        }

        #content .col-valores {
            width: 25%;
            height: 33.33%;
            display: flex;
            flex-direction: column;
        }

        .col-detalhes {
            width: 75%;
            margin-left: 10px;
        }

        .border {
            border: 1px solid black;
        }

        .w100 {
            width: 100%;
        }

        .w100menor {
            height: 45px;
            width: 100%;
            border: 1px solid black;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .left {
            text-align: left;
        }
    </style>
</head>

<body>
    <div id="content">
        <div class="col-valores">
            <div class="w100 center">
                <img src="{{asset('img/ABBC_logo.png')}}" width="20%" alt="ABBC">
            </div>
            <div class="w100menor">
                <div class="left"><small>Vencimento</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Documento</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Valor</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Desconto</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Multa</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Juros</small></div>
                <div class="right">[[]]</div>
            </div>
        </div>
        <div class="col-detalhes">
            <div class="w100">
                <p class="left"><small>Linha Digitavel</small></p>
                <p class="right">[[]]]</p>
            </div>
            <div class="w100">
                <p class="left"><small>Informações do Titulo</small></p>
                <p class="right">[[]]]</p>
            </div>
            <div class="w100">
                <p class="left"><small>Código de Barras</small></p>
                <p class="right">[[]]]</p>
            </div>
        </div>
    </div>

    <!-- Titulo 2 -->
    <hr size="1" style="border:1px dashed green;">

    <div id="content">
        <div class="col-valores">
            <div class="w100 center">
                <img src="{{asset('img/ABBC_logo.png')}}" width="20%" alt="ABBC">
            </div>
            <div class="w100menor">
                <div class="left"><small>Vencimento</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Documento</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Valor</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Desconto</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Multa</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Juros</small></div>
                <div class="right">[[]]</div>
            </div>
        </div>
        <div class="col-detalhes">
            <div class="w100">
                <p class="left"><small>Linha Digitavel</small></p>
                <p class="right">[[]]]</p>
            </div>
            <div class="w100">
                <p class="left"><small>Informações do Titulo</small></p>
                <p class="right">[[]]]</p>
            </div>
            <div class="w100">
                <p class="left"><small>Código de Barras</small></p>
                <p class="right">[[]]]</p>
            </div>
        </div>
    </div>
    <!-- Titulo 3 -->
    <hr size="1" style="border:1px dashed green;">

    <div id="content">
        <div class="col-valores">
            <div class="w100 center">
                <img src="{{asset('img/ABBC_logo.png')}}" width="20%" alt="ABBC">
            </div>
            <div class="w100menor">
                <div class="left"><small>Vencimento</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Documento</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Valor</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Desconto</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Multa</small></div>
                <div class="right">[[]]</div>
            </div>
            <div class="w100menor">
                <div class="left"><small>Juros</small></div>
                <div class="right">[[]]</div>
            </div>
        </div>
        <div class="col-detalhes">
            <div class="w100">
                <p class="left"><small>Linha Digitavel</small></p>
                <p class="right">[[]]]</p>
            </div>
            <div class="w100">
                <p class="left"><small>Informações do Titulo</small></p>
                <p class="right">[[]]]</p>
            </div>
            <div class="w100">
                <p class="left"><small>Código de Barras</small></p>
                <p class="right">[[]]]</p>
            </div>
        </div>
    </div>
    <script>
        //window.print();
    </script>
</body>

</html>