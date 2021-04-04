<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тест экстрасенсов</title>
</head>
<body>

<p>Уровень достоверности экстрасенса 1 : <?= $_SESSION['level_psychic_1'] ?? 0; ?></p>
<p>История догадок экстрасенса 1:</p>
<?php
if (isset($_SESSION['history_answer_1'])) :
    foreach ($_SESSION['history_answer_1'] as $value): ?>
        <?= $value; ?>,
    <?php
    endforeach; ?>
<?php
endif; ?>
<hr>

<p>Уровень достоверности экстрасенса 2 : <?= $_SESSION['level_psychic_2'] ?? 0; ?></p>
<p>История догадок экстрасенса 2:</p>
<?php
if (isset($_SESSION['history_answer_2'])) :
    foreach ($_SESSION['history_answer_2'] as $value): ?>
        <?= $value; ?>,
    <?php
    endforeach; ?>
<?php
endif; ?>
<hr>

<p>Уровень достоверности экстрасенса 3 : <?= $_SESSION['level_psychic_3'] ?? 0; ?></p>
<p>История догадок экстрасенса 3:</p>
<?php
if (isset($_SESSION['history_answer_3'])) :
    foreach ($_SESSION['history_answer_3'] as $value): ?>
        <?= $value; ?>,
    <?php
    endforeach; ?>
<?php
endif; ?>
<hr>

<p>История загаданных чисел :</p>
<?php
if (isset($_SESSION['history_riddle'])) :
    foreach ($_SESSION['history_riddle'] as $value): ?>
        <?= $value; ?>,
    <?php
    endforeach; ?>
<?php
endif; ?>
<hr>

<?php
if (!isset($_GET['riddle'])) : ?>
    <p>Загадайте двузначное число</p>
    <p>
        <a href="index.php?riddle=true">
            <button value="riddle">Загадал</button>
        </a>
    </p>

<?php
else: ?>
    <p>Догадка экстрасенса 1 : <?= $_SESSION['number_psychic_1']; ?></p>
    <p>Догадка экстрасенса 2 : <?= $_SESSION['number_psychic_2']; ?></p>
    <p>Догадка экстрасенса 3 : <?= $_SESSION['number_psychic_3']; ?></p>
    <hr>
    <form action="index.php" method="post">
        <label>Введите ваше двузначное число</label>
        <label>
            <input type="text" name="number" placeholder="Ваше число" required pattern="[0-9]{2}">
        </label>
        <button type="submit">Отправить</button>
        <?php
        if (isset($_SESSION['error'])) : ?>
            <p><?= $_SESSION['error']; ?></p>
        <?php
        endif; ?>
    </form>

<?php
endif; ?>

</body>
</html>