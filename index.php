<?php
$title = "Home";

include('components/header.php'); ?>

    <section class="copasa__banner--bg">
        <div class="container">
            <div class="copasa__banner copasa__banner--1" ><img src="<?php echo $preUrl ?>/public/imgs/icons/detalhe-fundo1.svg" /></div>
            <div class="row pt-5">
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1 pt-5 pb-5">
                    <h1 class="color-white text-left small py-5">Copasa <br/> em Compliance</h1>
                    <p class="color-white big pr-big">A Copasa reforça a busca permanente da ética e da transparência. Os princípios e valores, direitos e deveres devem permear a conduta de cada pessoa direta ou indiretamente relacionada com a organização.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-5 py-5 text-center text-lg-left">
                    <h2 class="color-white text-center pb-4">Plano de Integridade</h2>
                    <div class="copasa__lista__tags">
                        <ul>
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