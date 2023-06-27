<section id="palestrantes">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Palestrantes confirmados</h2>
            <div id="slick">
                <?php foreach (ibgc_get_speakers() as $speaker) : ?>
                    <?= ibgc_build_speaker($speaker['picture'], $speaker['name'], $speaker['position'], $speaker['linkedin']) ?>
                <?php endforeach ?>
            </div>
            <small class="d-block mt-2">*Sujeito a alterações</small>
        </div>
    </div>
</section>