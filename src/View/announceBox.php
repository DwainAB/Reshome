<?php foreach ($announces as $announce): ?>
<div class="announce box is-half">
    <div>
        <?php foreach ($announce->getPictures() as $picture): ?>
        <figure class="image">
            <img class="img-fluid" alt="image" src="<?= 'public/Images/' .  $picture->getPicturePath() ?>">
        </figure>
        <?php endforeach; ?>
    </div>
    <div class="field">
        <a href="?p=show&id=<?= $announce->getAnnounceId() ?>">
            <h2><?= $announce->getTitle() ?></h2>
            <p><?= $announce->getDescription() ?></p>
        </a>
    </div>
</div>
<?php endforeach; ?>