<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Simulação Zerar Custo de Repositores"/>
    <meta name="keyword" content="Zerar, Repositores,Custo, Economia, Nova Era, Varejo"/>

    <title>PRI - Simulador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .corPRI {
            color: #FF6600 !important;
        }

        .custoPromotor {
            font-size: 1.6rem !important;
        }

        .panel-primary > .panel-heading {
            color: #fff;
            background-color: #333;
            border-color: #000;
        }

        .list-group-item {
            padding: 0.2rem 0.6rem !important;
        }

        input {
            font-weight: bold;
        }

        .whatsapp-link {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 1px 1px 2px #888;
            z-index: 1000;
        }

        .whatsapp-link:hover {
            color: #FF6600 !important;
            background-color: transparent;
            text-decoration: underline;
        }

        .fa-whatsapp {
            margin-top: 16px;
        }
    </style>
</head>
<body>

<div class="container-fluid" style="background-color: #1F2A37;">
    <div class="d-flex flex-column justify-content-center align-items-center p-3">
        <img class="img-fluid" width="200" src="{{ asset('images/Logo_PRI2023a.png') }}" alt="PRI">
        <p class="text-white mt-3 mb-0 fs-md-1 fs-5 fw-lighter" style="letter-spacing: 1px">Uma nova era para o <strong class="fw-bold font-monospace">Varejo</strong></p>
    </div>
</div>


<div class="form-horizontal">
    <div class="panel panel-primary" style="color:black!important">
        <div class="panel-heading">
            <div class="row">
                <div class="col-2"> &nbsp;&nbsp;<img src="{{ asset('images/pri2023b.png') }}"/></div>
                <div class="col-8 text-center Frase">
                    <p style="margin-top:18px!important; font-size: 25px;font-family:Roboto;letter-spacing: 6px;margin-left:30px">
                        Uma nova era para o Varejo</p>

                </div>
                <div class="col-2 text-right d-none d-md-block"><img src="{{ asset('images/pri2023b.png') }}"/>&nbsp;
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="py-3 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('images/pri.png') }}" alt="" width="90" height="50"
             style="display:none!important"/>
        <h3>O que você acha de <span class="corPRI"><strong> ZERAR O CUSTO</strong></span> mensal / anual de sua</h3>
        <h3>equipe de <span class="corPRI"><strong> Repositores </strong></span>e transformá-lo em economia?</h3>
        <p class="lead" style="display:none">Abaixo informe alguns dados para conhecer a proposta.</p>
    </div>


    <div class="row">
        <div class="col-md-6 order-2 mb-0" id="custoPreenchimento" style="display:none;">


            <ul class="list-group mb-1">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="custoPromotor" id="custoMensal">R$</h6>
                        <p>

                        </p>
                        <small class="text-muted" style="font-size: 15px;"> Este é o <span
                                class="corPRI">custo MENSAL</span> com sua equipe de <strong>repositores que podemos
                                Zerar <img style="margin-top:-18px;"
                                           src="{{ asset('images/Check_PRI.png') }}"/></strong></small>
                    </div>
                </li>
            </ul>

            <ul class="list-group mb-1">
                <li class="list-group-item d-flex justify-content-between lh-condensed"
                    style="margin-bottom:15px!important">
                    <div>
                        <h6 class="custoPromotor" id="custoAnual">R$</h6>
                        <small class="text-muted" style="font-size: 15px;">Este é o <span
                                class="corPRI">custo ANUAL</span> com sua equipe de <strong>repositores que podemos
                                Zerar <img style="margin-top:-18px;"
                                           src="{{ asset('images/Check_PRI.png') }}"/></strong></small>
                    </div>

                </li>
            </ul>


            <p class="text-center" style=" font-size: 30px;font-family:Roboto;margin-bottom: 0.4rem!important;">


                O <img style="margin-top:-20px" src="{{ asset('images/Pri_Pequeno_Cinza.png') }}"/>
                sabe como!


            </p>
            <p class="text-center"
               style=" font-size: 30px;font-family:Roboto;margin-bottom: 0rem!important;margin-top:-1rem;">Aponte para o
                QR Code e fale conosco.</p>

            <p class="bg-light  text-center">
                <span style="text-align:center!important"><a
                        href="https://web.whatsapp.com/send?phone=+5511995851973"><img
                            src="{{ asset('images/qrCode2.png') }}"/></a></span>
                <br/>
                <span class="text-center"
                      style="margin-bottom: 0rem!important;">Gilberto Dutra - GAMA - 11 995851973</span><BR/>
                <span class="text-center" style="margin-bottom: 0rem!important;">gilberto.dutra@gamadvisory.com</span>
            </p>


        </div>


        <div class="col-md-6 order-1">

            <div class="needs-validation" novalidate>
                <div class="mb-3">
                    <img src="{{ asset('images/Seta.png') }}"/>&nbsp; <label for="email"> Informe a quantidade de LOJAS
                        da sua REDE</label>
                    <input type="number" class="form-control" id="qtrede" placeholder=" "/>
                    <div class="invalid-feedback">
                        Por favor,
                    </div>
                </div>

                <div class="mb-3">
                    <img src="{{ asset('images/Seta.png') }}"/>&nbsp; <label for="email">Informe a quantidade média de
                        repositores por
                        LOJA</label>
                    <input type="number" class="form-control" id="qtrepositor" placeholder=" "/>
                    <div class="invalid-feedback">
                        Por favor,
                    </div>
                </div>

                <div class="mb-3">
                    <label id="totalRepositorRede1" style="display:none" for="totalRepositorRede"> Esta é a quantidade
                        média de repositores da sua Rede</label>
                    <input id="totalRepositorRede" style="display:none" class="form-control" readonly disabled=""/>
                </div>

                <div class="mb-3">
                    <label for="custoEquipeRede99" id="custoEquipeRede1" style="display:none"><img
                            src="{{ asset('images/Seta.png') }}"/>
                        Informe o custo médio total de um repositor</label>
                    <div class="input-group">
                        <div class="input-group-prepend" id="custoEquipeRede2" style="display:none">
                            <span class="input-group-text">R$ </span>
                        </div>
                        <input type="text" id="salarioRepositor" style="display:none" class="form-control"
                               placeholder=" "
                               onkeypress="$(this).mask('#.##0,00', {reverse: true});"/>
                    </div>
                </div>


            </div>
        </div>

        <script>
            // pega os valores campos
            const preco1 = document.getElementById("qtrede");
            const preco2 = document.getElementById("qtrepositor");
            const preco4 = document.getElementById("salarioRepositor");

            // adiciona um listener para verificar quando os campos são preenchidos
            preco1.addEventListener("input", exibeDiv);
            preco2.addEventListener("input", exibeDiv);
            preco4.addEventListener("input", exibeDiv);

            function exibeDiv() {
                // verifica se os campos estão preenchidos
                if (preco1.value !== "" && preco2.value !== "") {

                    var loja = parseInt(document.getElementById("qtrede").value);
                    var repositor = parseInt(document.getElementById("qtrepositor").value);
                    var totalrepositor = loja * repositor;

                    // Exiba o resultado no campo de resultado
                    document.getElementById("totalRepositorRede").style.display = "block";
                    document.getElementById("totalRepositorRede1").style.display = "block";
                    document.getElementById("custoEquipeRede1").style.display = "block";
                    document.getElementById("custoEquipeRede2").style.display = "block";


                    document.getElementById("salarioRepositor").style.display = "block";
                    document.getElementById("totalRepositorRede").value = totalrepositor;
                }

                if (preco1.value !== "" && preco2.value !== "" && preco4.value !== "") {
                    // mostra a div
                    document.getElementById("custoPreenchimento").style.display = "block";
                    document.getElementById("whatswidget-pre-wrapper2023").style.display = "block";

                    var loja = parseInt(document.getElementById("qtrede").value);
                    var repositor = parseInt(document.getElementById("qtrepositor").value);
                    var salarioRepositor = parseFloat(document.getElementById("salarioRepositor").value.replace(',', '').replace('.', ''));

                    //var resultado         = loja * repositor * salarioRepositor ;
                    //var resultadoAnual    = loja * repositor * salarioRepositor * 12;

                    var resultado = (loja * repositor * (salarioRepositor / 100));
                    var resultadoAnual = (loja * repositor * (salarioRepositor / 100)) * 12;


                    // EXIBIR VALORES COM R$
                    var valueBR = resultado.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
                    var valueBRAnual = resultadoAnual.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
                    document.getElementById("custoMensal").textContent = "" + valueBR;
                    document.getElementById("custoAnual").textContent = "" + valueBRAnual;
                }
            }
        </script>
    </div>
</div>
<style>

</style>


<a id="whatswidget-pre-wrapper2023" style="display:none" class="whatsapp-link"
   href="https://web.whatsapp.com/send?phone=5511981748859" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>


<!-- Foi colocado no final para a página carregar mais rápido -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</body>
</html>
