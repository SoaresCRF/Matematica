<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <title>Matemática</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <meta name="description" content="Confira várias calculadoras de matemática, Porcentagem, MMC, MDC, Áreas de figuras planas, fatoração, regra de 3 entre várias outras." />

    <link rel="stylesheet" href="https://cdn.4devs.com.br/css/frontoffice.077.css">
</head>

<body>
    <header>
        <div class="header-wrapper row">
            <a href="index.php" class="logo" id="logo"><img src="https://cdn.4devs.com.br/imagens/logo_4devs.png" alt="Ferramentas" title="Voltar para página inicial"></a>

            <!-- <ul class="header-nav">
                <li class=""><a href="/computacao" title="Computação">Computação</a></li>
                <li class="active"><a href="index.php" title="Matemática">Matemática</a></li>
            </ul> -->

            <!-- <div class="header-tools">
                <form action="/pesquisa.php" class="search">
                    <input type="search" name="q" id="search-input" placeholder="Buscar" onfocusin="searchToggle(true)" onfocusout="searchToggle(false)" value="">
                    <i class="clearicon hide" id="search-clear"></i>
                    <button class="search-btn" title="Buscar"><i></i></button>
                </form>
                <div class="toggle-topbar menu" id="toggle-topbar"><a href="#" onclick="toggleNavBar()"><i></i></a></div>
            </div> -->

        </div>
    </header>

    <div class="row">
        <div class="medium-12 columns">
            <div id="grecaptcha"></div>
        </div>
    </div>

    <main>
        <div class="row">
            <div class="medium-3 columns main-sidebar">
                <ul class="left" role="menu" id="top-nav">
                    <li class="sidebar-title"><a href="index.php">Matemática</a></li>
                    <li class="heading">Calculadoras</li>
                    <li role="menuitem" class=""><a href="calculadoras/equacao_segundo_grau.php" title="Calcular equação do segundo grau">Calcular equação do segundo grau</a><i></i></li>
                    <li role="menuitem" class=""><a href="calculadoras/fatorar.php" title="Calculadora de Fatoração de Número">Fatorar Número</a><i></i></li>


                    <li class="heading">Calcular Áreas</li>
                    <li role="menuitem" class=""><a href="calcular_areas/area_quadrado.php" title="Calculadora da Área do Quadrado">Área do Quadrado</a><i></i></li>
                    <li role="menuitem" class=""><a href="calcular_areas/area_retangulo.php" title="Calculadora da Área do Retângulo">Área do Retângulo</a><i></i></li>
                    <li role="menuitem" class=""><a href="calcular_areas/area_triangulo.php" title="Calculadora da Área do Triângulo">Área do Triângulo</a><i></i></li>
                    <li role="menuitem" class=""><a href="calcular_areas/area_pentagono.php" title="Calculadora da Área do Pentágono">Área do Pentágono</a><i></i></li>
                    <li role="menuitem" class=""><a href="calcular_areas/area_hexagono.php" title="Calculadora da Área do Hexágono">Área do Hexágono</a><i></i></li>
                    <li role="menuitem" class=""><a href="calcular_areas/area_losango.php" title="Calculadora da Área do Losango">Área do Losango</a><i></i></li>
                    <li role="menuitem" class=""><a href="calcular_areas/area_trapezio.php" title="Calculadora da Área do Trapézio">Área do Trapézio</a><i></i></li>


                    <li class="heading">Extras</li>
                    <li role="menuitem" class=""><a href="outros/validar_cpf.php" title="Validar CPF">Validar CPF</a><i></i></li>
                </ul>
            </div>

            <div class="medium-9 columns" id="wrapper-content">
                <div class="row">
                    <div class="small-12 columns"> </div>

                    <div class="small-12 columns">
                        <h1>
                            Matemática
                        </h1>
                    </div>

                    <div class="small-12 columns"> </div>

                    <div class="small-12 columns">
                        <!-- <div class="small-12 columns">
                            <p>Ferramentas úteis para estudantes.</p>
                        </div> -->
                        <h2>Ferramentas de matemática em destaque</h2>
                        <br />

                        <div class="medium-6 columns banner_home"><a href="/calculadora_porcentagem"><img src="https://cdn.4devs.com.br/imagens/home/banner_calc_porcentagem.jpg" alt="Calculadora de porcentagem" /><br />Calculadora de Porcentagem</a><br /><br /></div>

                        <div class="medium-6 columns banner_home"><a href="/calculadora_mmc"><img src="https://cdn.4devs.com.br/imagens/home/banner_calc_mmc.jpg" alt="Calculadora de MMC" /><br />Calculadora de MMC</a><br /><br /></div>

                        <div class="medium-6 columns banner_home"><a href="/calculadora_mdc"><img src="https://cdn.4devs.com.br/imagens/home/banner_calc_mdc.jpg" alt="Calculadora de MDC" /><br />Calculadora de MDC</a><br /><br /></div>

                        <div class="medium-6 columns banner_home"><a href="/resto_da_divisao"><img src="https://cdn.4devs.com.br/imagens/home/banner_calc_resto.jpg" alt="Calculadora de Resto da Divisão" /><br />Resto da Divisão</a><br><br /></div>

                        <div class="medium-6 columns banner_home"><a href="/somar_dias_em_datas"><img src="https://cdn.4devs.com.br/imagens/home/banner_somar_dias.jpg" alt="Somar Dias em Datas" /><br />Ferramentas de Somar Dias em Datas</a><br /><br /></div>
                    </div>

                    <div class="small-12 columns"> </div>

                    <!-- <div class="small-12 columns related">
                        <h2>Veja também:</h2>
                        <ul>
                            <li><a href="/calculadora_porcentagem" title="Calculadora de porcentagem">Calculadora de porcentagem</a></li>
                            <li><a href="/computacao" title="Computação">Computação</a></li>
                            <li><a href="/somar_dias_em_datas" title="Somar Dias em Datas">Somar Dias em Datas</a></li>
                            <li><a href="/calculadora_regra_tres_simples" title="Calculadora de Regra de 3 Simples: calcule aqui!">Calculadora de Regra de 3 Simples: calcule aqui!</a></li>
                            <li><a href="/resto_da_divisao" title="Calculadora de Resto da Divisão">Calculadora de Resto da Divisão</a></li>
                            <li><a href="/area_retangulo" title="Calculadora da Área do Retângulo">Calculadora da Área do Retângulo</a></li>
                            <li><a href="/area_quadrado" title="Calculadora da Área do Quadrado">Calculadora da Área do Quadrado</a></li>
                            <li><a href="/area_paralelogramo" title="Calculadora da Área do Paralelogramo">Calculadora da Área do Paralelogramo</a></li>
                        </ul>
                    </div> -->
                    <div class="small-12 columns">
                        <div id="div-gpt-sg-f090fe994ac3b64bde419e4bbca3f6d1" class="ad-unit ad-unit--pt-br"> </div>
                    </div>

                    <br /> <br />

                    <div class="small-12 columns"> </div>

                    <p>&nbsp;</p>

                    <div class="small-12 columns"> </div>
                </div>
            </div>

            <?php include("view/footer.php"); ?>