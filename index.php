<?php

session_start();

require_once('helpers.php');

//Если получили методом ГЕТ, генерим числа..
if (isset($_GET['riddle'])) {

  $psychic = new Generate_int;

    $psychic->number_psychic_1 = random_int(10, 99);
    $psychic->number_psychic_2 = random_int(10, 99);
    $psychic->number_psychic_3 = random_int(10, 99);

    $_SESSION['number_psychic_1'] = $psychic->number_psychic_1;
    $_SESSION['number_psychic_2'] = $psychic->number_psychic_2;
    $_SESSION['number_psychic_3'] = $psychic->number_psychic_3;

    $_SESSION['history_answer_1'][] = $psychic->number_psychic_1;
    $_SESSION['history_answer_2'][] = $psychic->number_psychic_2;
    $_SESSION['history_answer_3'][] = $psychic->number_psychic_3;
}

//Если методом Post, сравниваем значения, и записываем в историю
if (isset($_POST['number'])) {

    $_SESSION['number'] = $_POST['number'];
    $_SESSION['history_riddle'][] = $_POST['number'];

    if (!isset($_SESSION['level_psychic_1'])) {
        $_SESSION['level_psychic_1'] = 0;
    }
    if ($_SESSION['number_psychic_1'] == $_POST['number']) {
        $_SESSION['level_psychic_1']++;
    } else {
        $_SESSION['level_psychic_1']--;
    }

    if (!isset($_SESSION['level_psychic_2'])) {
        $_SESSION['level_psychic_2'] = 0;
    }
    if ($_SESSION['number_psychic_2'] == $_POST['number']) {
        $_SESSION['level_psychic_2']++;
    } else {
        $_SESSION['level_psychic_2']--;
    }

    if (!isset($_SESSION['level_psychic_3'])) {
        $_SESSION['level_psychic_3'] = 0;
    }
    if ($_SESSION['number_psychic_3'] == $_POST['number']) {
        $_SESSION['level_psychic_3']++;
    } else {
        $_SESSION['level_psychic_3']--;
    }
}

require_once('page.php');


