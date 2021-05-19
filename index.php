<?php
$title = "Home";

include('components/header.php'); ?>

    <section class="copasa__banner--bg">
        <div class="container">
            <div class="copasa__banner copasa__banner--1" ><img src="<?php echo $preUrl ?>/public/imgs/icons/detalhe-fundo1.svg" /></div>
            <div class="row pt-5">
                <div class="col-12 col-md-6 col-lg-7 pt-5 pb-5">
                    <h1 class="color-white text-left small py-5">Copasa <br/> em Compliance</h1>
                    <p class="color-white">Precisamos conhecer, difundir e praticar a cultura de integridade no âmbito das organizações, contribuindo assim para termos um ambiente de negócios cada vez mais ético.</p>
                    <p class="color-white">A COPASA MG reforça a busca permanente da ética e da transparência. Os princípios e valores, direitos e deveres devem permear a conduta de cada pessoa direta ou indiretamente relacionada com a organização.</p>
                    <p class="color-white">O Plano de Integridade, alinhado com a missão, a visão e os valores da COPASA MG, foi aprovado pelo Conselho de Administração em 13/12/2018, o que reforça o comprometimento da Alta Administração com os princípios éticos e repúdio às práticas ilícitas.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-5 py-5 text-center text-lg-left d-flex flex-column align-center justify-content-center">
                    <h2 class="color-white text-center pb-4 mt-auto mb-0">Plano de Integridade</h2>
                    <div class="copasa__lista__tags text-center mt-0 mb-auto">
                        <ul class="m-auto">
                            <li><a href="<?php echo $preUrl ?>/governanca" class="copasa__botao">Governança e Comprometimento<br/> da Alta Administração</a></li>
                            <li><a href="<?php echo $preUrl ?>/GestaoControle" class="copasa__botao">Gestão de Riscos <br/>e Controles Internos</a></li>
                            <li><a href="<?php echo $preUrl ?>/InstrumentosDeIntegridade" class="copasa__botao">Instrumentos <br/>de Integridade</a></li>
                            <li><a href="<?php echo $preUrl ?>/ComunicacaoTreinamento" class="copasa__botao">Comunicação <br/>e Treinamento</a></li>
                            <li><a href="<?php echo $preUrl ?>/DueDiligence" class="copasa__botao">Due Diligence</a></li>
                            <li><a href="<?php echo $preUrl ?>/MonitoramentoTratamento" class="copasa__botao">Monitoramento <br/>e tratamento</a></li>
                            <li><a href="<?php echo $preUrl ?>/TransparenciaInformacaoControle" class="copasa__botao">Transparência pública, informação <br/>relevante e controle social</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copasa__banner copasa__banner--2" ><img src="<?php echo $preUrl ?>/public/imgs/icons/detalhe-fundo2.svg" /></div>
        </div>
    </section>

<?php include('components/footer.php'); ?>