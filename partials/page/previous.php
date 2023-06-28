<section id="congressos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Relembre e prepare-se!</h2>
                <p class="m">O que é governança de impacto?</p>
                <p class="mb-5">No Congresso de 2022, falamos sobre <b>Governança de impacto - As melhores práticas do amanhã.</b> Clique para saber mais e prepare-se para discutir formas de potencializar esse impacto por meio de uma rede de agentes de governança cada vez mais conectada.</p>
                <div id="slick-congressos">
                    <?php foreach (ibgc_get_past_event_videos() as $video) : ?>
                        <div class="evento-passado">
                            <a href="<?= $video['url'] ?>" target="_blank">
                                <img src="<?= $video['thumb'] ?>" alt="" />
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>