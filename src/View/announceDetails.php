<div class="announce">
    <?php foreach ($announce->getPictures() as $picture): ?>
        <img alt="image" src="<?= 'public/Images/' .  $picture->getPicturePath() ?>">
    <?php endforeach; ?>
    <h1><?= $announce->getTitle(); ?></h1>
    <span>Note : <?= $rateAvg; ?></span>
    <p><?= $announce->getDescription(); ?></p>
    <p>Commentaires : </p>
    <ul>
        <?php foreach ($reviews as $review): ?>
        <li class="box">
            Note : <?= $review->getRate(); ?>
            <br>
            Comment : <?= $review->getComment(); ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>