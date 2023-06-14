<div class="announce">
    <?php foreach ($announce->getPictures() as $picture): ?>
        <img alt="image" src="<?= 'public/Images/' .  $picture->getPicturePath() ?>">
    <?php endforeach; ?>
    <h1><?= $announce->getTitle(); ?></h1>
    <p><?= $announce->getDescription(); ?></p>
</div>