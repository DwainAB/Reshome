<?php foreach ($announces as $announce): ?>
<div class="announce">
    <h2><?= $announce->getTitle() ?></h2>
    <p><?= $announce->getDescription() ?></p>
</div>
<?php endforeach; ?>