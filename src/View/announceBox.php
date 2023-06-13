<?php foreach ($announces as $announce): ?>
<a class="announce" href="?p=show&id=<?= $announce->getAnnounceId() ?>">
    <img src="<?= $image; ?>" alt="">
    <h2><?= $announce->getTitle() ?></h2>
    <p><?= $announce->getDescription() ?></p>
</a>
<?php endforeach; ?>