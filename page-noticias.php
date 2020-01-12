<!DOCTYPE html>
<html lang="pt">

<head>
    <title>The Form of Form | Trienal de Arquitetura de Lisboa</title>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="fontes/font-awesome/css/font-awesome.min.css">
    <link href="stylesnoticias.css" rel="stylesheet" type="text/css">
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
                    <div id="noticiasdestaque">
                        <h3>Esta semana</h3>
                        <p id="noticiastext">Conheça as notícias em destaque esta semana e mantenha-se atualizado acerca dos acontecimentos da Trienal</p>

                        <div class="noticiasslider" id="noticiasslider1">

                            <div class="tresnoticias margin" id="noticia01">
                                <img alt="" class="imagenoticia" id="imagenoticia01" src="imagens/noticias/1.jpg">
                                <div class="descriptionnoticia">
                                    <h6>Como é a vida no estaleiro?

                                    </h6>
                                    <div class="details">
                                        <p class="fontesemana">Jornal Sábado</p>
                                        <p class="datasemana">08-Dez-16</p>
                                    </div>
                                    <p class="descnoticia"> É “Obra”, diz Fiori, que esteve em Portugal para dar uma conferência</p>
                                    <a href="page-noticia.php#noticia"  class="buttonnoticia" id="btnot01">Ver Mais</a>
                                </div>
                            </div>

                            <div class="tresnoticias margin" id="noticia02">
                                <img alt="" class="imagenoticia" id="imagenoticia02" src="imagens/noticias/2.jpg">
                                <div class="descriptionnoticia">
                                    <h6>Lisboa dá-se a conhecer</h6>
                                    <div class="details">
                                        <p class="fontesemana">Público</p>
                                        <p class="datasemana">05-Dez-16</p>
                                    </div>
                                    <p class="descnoticia">Arranca este sábado e promove “viagens num espaço urbano maior”</p>
                                    <a href="page-noticia.php#noticia"  class="buttonnoticia" id="btnot02">Ver Mais</a>
                                </div>
                            </div>

                            <div class="tresnoticias margin" id="noticia03">
                                <img alt="" class="imagenoticia" id="imagenoticia03" src="imagens/noticias/3.jpg">
                                <div class="descriptionnoticia">
                                    <h6>Lisboa recebe a Trienal</h6>
                                    <div class="details">
                                        <p class="fontesemana">RTP</p>
                                        <p class="datasemana">03-Dez-16</p>
                                    </div>
                                    <p class="descnoticia">A próxima trienal incluirá ainda três exposições centrais, conferências...</p>
                                    <a href="page-noticia.php#noticia"  class="buttonnoticia" id="btnot03">Ver Mais</a></div>
                            </div>

                            <div class="tresnoticias margin" id="noticia04">
                                <img alt="" class="imagenoticia" id="imagenoticia04" src="imagens/noticias/4.jpg">
                                <div class="descriptionnoticia">
                                    <h6>Dia mundial da arquitetura
                                    </h6>
                                    <div class="details">
                                        <p class="fontesemana">Umbigo</p>
                                        <p class="datasemana">03-Dez-16</p>
                                    </div>
                                    <p class="descnoticia">Hoje anunciamos eventos nos quais a arquitetura está em destaque.</p>
                                    <a href="page-noticia.php#noticia"  class="buttonnoticia" id="btnot04">Ver Mais</a></div>
                            </div>

                        </div>
                    </div>
                    <div id="premios">
                        <h3>Concursos e Prémios</h3>
                        <div class="noticiasslider" id="noticiasslider2">
                            <a  href="page-noticia.php#noticia" class="tresnoticias premio margin">
                                <img alt="" class="imagenoticia" src="imagens/noticias/5.jpg">
                                <div class="descriptionpremios">
                                    <h6>Vencedores dos prémios Carreira e Début
                                    </h6>
                                </div>
                            </a>
                            <a  href="page-noticia.php#noticia" class="tresnoticias premio margin">
                                <img alt="" class="imagenoticia" src="imagens/noticias/6.jpg">
                                <div class="descriptionpremios">
                                    <h6>Anúncio dos finalistas ao Prémio Début Millenium BCP
                                    </h6>
                                </div>
                            </a>
                            <a  href="page-noticia.php#noticia" class="tresnoticias premio margin">
                                <img alt="" class="imagenoticia" src="imagens/noticias/7.jpg">
                                <div class="descriptionpremios">
                                    <h6>Vencedor do Concurso Prémio Universidades
                                    </h6>
                                </div>
                            </a>
                            <a  href="page-noticia.php#noticia" class="tresnoticias premio">
                                <img alt="" class="imagenoticia" src="imagens/noticias/5.jpg">
                                <div class="descriptionpremios">
                                    <h6>Selecção final dos Projectos Associados da 4ª edição
                                    </h6>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <div id="arquivonoticias">
                        <div id="maisnoticias">
                            <h3 id="arquivoh3">Arquivo de Notícias</h3>
                            <div class="noticia">
                                <img alt="" src="imagens/noticias/10.jpg">
                                <div class="infonoticia">
                                    <p class="noticiatipo">Reportagem</p>
                                    <p class="titulonoticia">Formal concerns at the Lisbon Architectural Triennale
                                    </p>
                                    <p class="fonte">Jornal i</p>
                                    <p class="datanoticia">19-NOV-15</p>
                                    <p class="descnoticia">The Form of Form, the 4th Trienal de Arquitectura de Lisboa, opens next October. It will explore the transformations of form in architectural practice. </p>
                                    <a  href="page-noticia.php#noticia" class="buttonnoticia arquivobt">Ver Mais</a>
                                </div>


                            </div>
                            <div class="noticia">
                                <img alt="" src="imagens/noticias/9.jpg">
                                <div class="infonoticia">
                                    <p class="noticiatipo">Reportagem</p>
                                    <p class="titulonoticia">Trienal de Arquitectura 2016 desafia universidades

                                    </p>
                                    <p class="fonte">Renascença</p>
                                    <p class="datanoticia">15-Out-15</p>
                                    <p class="descnoticia">O Trienal de Arquitectura de Lisboa 2016 anunciou esta quarta-feira em Lisboa que lançou um concurso aos estudantes de arquitectura do país.</p>
                                    <a  href="page-noticia.php#noticia" class="buttonnoticia arquivobt">Ver Mais</a>
                                </div>


                            </div>

                            <div class="noticia">
                                <img src="imagens/noticias/8.jpg" alt="">
                                <div class="infonoticia">
                                    <p class="noticiatipo">Reportagem</p>
                                    <p class="titulonoticia">A arquitectura “não é um pudim instantâneo”
                                    </p>
                                    <p class="fonte">Renascença</p>
                                    <p class="datanoticia">15-Out-15</p>
                                    <p class="descnoticia">“A arquitectura não é um pudim instantâneo a que se junta água e pó e aquilo sai”, diz o arquitecto André Tavares. </p>
                                    <a  href="page-noticia.php#noticia" class="buttonnoticia arquivobt">Ver Mais</a>
                                </div>


                            </div>
                        </div>

                    </div>

                </main>
            <?php
	        include 'footer.html'
	        ?>
    </div>

</body>

</html>
