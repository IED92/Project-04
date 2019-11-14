<!-- This file is used to markup the public-facing widget. -->
<?php if (strlen(trim($weekday))) : ?>
  <p>
    <span class="day-of-week">Monday-Friday:</span> <?= $weekday; ?>
  </p>

<?php endif; ?>

<?php if (strlen(trim($saturday))) : ?>
  <p>
    <span class="day-of-week">Saturday:</span> <?= $saturday; ?>
  </p>

<?php endif; ?>

<?php if (strlen(trim($sunday))) : ?>
  <p>
    <span class="day-of-week">Sunday:</span> <?= $sunday; ?>
  </p>

<?php endif; ?>