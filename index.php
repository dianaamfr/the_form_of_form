<!DOCTYPE html>
<html lang="pt">

<head>
    <title>The Form of Form | Trienal de Arquitetura de Lisboa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="fontes/font-awesome/css/font-awesome.min.css">
    <link href="slick-1.6.0/slick-1.6.0/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="slick-1.6.0/slick-1.6.0/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <script src="jquery-3.2.1.min.js">


    </script>
    <script src="slick-1.6.0/slick-1.6.0/slick/slick.js" type="text/javascript">


    </script>
    <script src="myscript.js">


    </script>
</head>

<body>
    <div id="tudo">
        <?php
		                include 'header.html'
		                ?>
            <?php
		                include 'slider.html'
		                ?>
                <main>
                    <div id="edicao">
                        <h2>4ª Edição</h2>
                        <p id="edicaoitalic">Dirigindo-se a uma audiência nacional e internacional, a 4ª edição da Trienal pretende estimular e aprofundar o debate sobre a forma como o mundo se transforma.</p>
                        <p id="edicaoregular">Entender a prática da arquitectura num contexto social permitirá desenvolver as implicações das decisões arquitectónicas, sublinhando a sua relevância na sociedade contemporânea.</p>
                        <!--<div id="curadores">
                <div class="curador" id="c1"><img alt="" src="imagens/home/c1.jpg"></div>
                <div class="curador" id="c2"><img alt="" src="imagens/home/c2.jpg"></div>
                </div>-->
                    </div>
                    <div id="programa">
                        <div id="programadiv">
                            <div id="programatext">
                                <h3 class="h3white">Programa</h3>
                                <p>Com a curadoria de <span class="spanbold">André Tavares</span> e <span class="spanbold">Diogo Lopes</span>, articulando um <span style="font-weight:300;">programa focado na reflexão crítica, debate e experimentação</span>, a 4ª edição vinca <span class="spandestaque">linhas de pensamento acutilantes para a produção da arquitectura num contexto social em rápida transformação.</span></p>
                                <div class="buttonprograma">
                                    <a class="buttontext" href="page-programa.php?p=1#inicioprograma">Ver mais</a>
                                </div>
                            </div>
                        </div>
                        <div id="programaimg"></div>
                    </div>
                    <div id="quote">
                        <p>“Cultive aptidões, enriqueça as suas histórias coletivas, contibua para um resultado partilhado e significativo.”</p>
                    </div>
                    <div id="exposicoes">
                        <div id="expofundo">
                            <div id="expofundocontent">
                                <h3 class="h3white">Exposições Nucleares</h3>
                                <p id="expobold">Estruturada a partir de 4 exposições nucleares, a programação realça os desafios que os arquitectos enfrentam nos dias de hoje.</p>
                                <p id="expotext">As quatro exposições dialogam entre si, e esse diálogo desdobra-se em exposições satélites e projectos associados que vão complementar a diversidade de olhares e conteúdos propostos nesta edição da Trienal.</p>
                                <div class="button" id="buttonexpo-div">
                                    <a href="page-programa.php#inicioprograma" class="buttonexpo">ver exposições</a>
                                </div>
                            </div>
                        </div>
                        <div class="expo" id="expo1">
                            <div class="expoesq">
                                <div class="expocontent">
                                    <h4>A Forma da Forma</h4>
                                    <p class="data color1">6 Out - 2 Dez</p>
                                    <p class="local color1">MAAT</p>
                                    <p class="textoexpo">Da autoria, da concepção e do universo visual em que as formas da arquitectura se movem</p>
                                    <div class="button-expoap button1">
                                        <a class="buttontext" href="page-aformadaforma.php">ver mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="imgesq" id="imgesq1"></div>
                        </div>
                        <div class="expo">
                            <div class="imgesq" id="imgesq2"></div>
                            <div id="expo2">
                                <div class="expocontent">
                                    <h4>Obra</h4>
                                    <p class="data color2">7 Out - 11 Dez</p>
                                    <p class="local color2">Fundação Calouste Gulbenkian</p>
                                    <p class="textoexpo">O processo a que as formas são sujeitas no momento decisivo do estaleiro de construção</p>
                                    <div class="button-expoap button2">
                                        <a class="buttontext" href="page-obra.php">ver mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="expo" id="expo3">
                            <div class="expoesq">
                                <div class="expocontent">
                                    <h4 class=" h4smaller">Sines: Logística Costeira</h4>
                                    <p class="data color4">11 Out - 10 Dez</p>
                                    <p class="local color4">Sede da Trienal de Lisboa</p>
                                    <p class="textoexpo">As circunstâncias críticas da transformação da paisagem e do terreno</p>
                                    <div class="button-expoap button4">
                                        <a class="buttontext" href="page-sineslogisticaabeiramar.php">ver mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="imgesq" id="imgesq3"></div>
                        </div>
                        <div class="expo">
                            <div class="imgesq" id="imgesq4"></div>
                            <div id="expo4">
                                <div class="expocontent">
                                    <h4 class="h4smaller">O mundo nos nossos olhos</h4>
                                    <p class="data color3">8 Out - 15 Jan</p>
                                    <p class="local color3">Garagem sul - Centro Cultural de Belém</p>
                                    <p class="textoexpo">O processo a que as formas são sujeitas no momento decisivo do estaleiro de construção</p>
                                    <div class="button-expoap button3">
                                        <a class="buttontext" href="page-omundonosnossosolhos.php">ver mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="idades">
                        <h3>Para todas as idades</h3>
                        <p id="idadesitalic">Partindo dos conteúdos essenciais de The Form of Form , a 4ª Edição do Trienal oferece um programa para o público escolar, famílias e crianças, jovens e adultos, especialistas e curiosos...</p>
                        <p id="idadestext">Realizamos programas personalizados mediante solicitação para escolas internacionais, associações e grupos de outras instituições ou empresas. A maioria das actividades também se encontram disponíveis em inglês mediante aviso prévio.</p>
                        <div id="iconsidades">
                            <a href="page-programa.php?p=3#mes-content05" class="iconidade">
                                <img alt="Profissionais" src="imagens/icons/idades1.svg">
                                <h5>Profissionais</h5>
                            </a>
                            <a href="page-programa.php?p=3#mes-content06" class="iconidade">
                                <img alt="Ensino secundário e superior" src="imagens/icons/idades2.svg">
                                <h5>Ensino secundário e superior</h5>
                            </a>
                            <a href="page-programa.php?p=3#mes-content07" class="iconidade">
                                <img alt="Famílias e grupos" src="imagens/icons/idades3.svg">
                                <h5>Famílias e grupos</h5>
                            </a>
                            <a href="page-programa.php?p=3#mes-content08" class="iconidade" style="margin-right:0%!important;">
                                <img alt="Pré-escolar e Ensino Básico" src="imagens/icons/idades4.svg">
                                <h5>Pré-escolar e Ensino Básico</h5>
                            </a>
                        </div>
                    </div>
                    
                        <div id="gostos">
                        <div id="gostosdiv">
                            <div id="gostostext">
                                <h3>Para todos os gostos</h3>
                                <p id="gostositalic">Oferecemos um programa com diferentes tipologias, como <span class="boldgostos">visitas, oficinas, workshops, conversas, passeios e circuitos na cidade. </span> Acessível para todos os gostos e objetivos, a Trienal oferece desde <span class="boldgostos">conferências a documentários e filmes, desde jogos a exposições e publicações.</span></p>
                                <div class="buttonprograma">
                                    <a class="buttontext" href="page-programa.php?p=4#inicioprograma">Ver mais</a>
                                </div>
                            </div>
                            <!--<div id="tipologias">
    
                            <div class="tipologia tipoesq">
                                <div class="container">
							<img alt="" class="image" src="imagens/home/tipologias/1.jpg">
							<div class="middle">
								<div class="text">
									<a href="" target="blank">+</a>
								</div>
							</div>
                            
						</div><div class="legenda"><h5>Exposições & Instalações</h5></div>
                            </div>
                            
                            <div class="tipologia tipoesq">
                                <div class="container">
							<img alt="" class="image" src="imagens/home/tipologias/2.jpg">
							<div class="middle">
								<div class="text">
									<a href="" target="blank">+</a>
								</div>
							</div>
                                
						</div>
                                <div class="legenda"><h5>Workshops & Jogos</h5></div>
                            </div>
                            
                            <div class="tipologia tipoesq">
                                <div class="container">
							<img alt="" class="image" src="imagens/home/tipologias/3.jpg">
							<div class="middle">
								<div class="text">
									<a href="" target="blank">+</a>
								</div>
							</div>  
						</div><div class="legenda"><h5>Visitas Orientadas</h5></div>
                            </div>
                            
                            <div class="tipologia">
                                <div class="container">
							<img alt="" class="image" src="imagens/home/tipologias/4.jpg">
							<div class="middle">
								<div class="text">
									<a href="" target="blank">+</a>
								</div>
							</div>
                                    
						</div><div class="legenda"><h5>Filmes e Conferências</h5></div>
                            </div>
                        </div>-->
                        </div>
                    <div id="gostosimage"></div></div>
                    <div id="fimhome">
                        <p id="fimdata">De 5 a 12 de Dezembro</p>
                        <p id="fimfrase">Estaremos à sua espera em Lisboa</p>
                        <a href="https://www.essr.net/cdcomunicacao/al6904/PAA/page-inscricoes.php#inscricoes"><div class="buttonfim"><p>Inscrições</p></div></a>
                        <a href="https://www.essr.net/cdcomunicacao/al6904/PAA/page-comochegar.php#chegar-ancora"><div class="buttonfim"><p>Como chegar</p></div></a>
                    </div>
    

                    
                </main>
        <?php include 'footer.html'?>
    </div>
</body>

</html>
