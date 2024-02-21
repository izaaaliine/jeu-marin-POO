<?php
function perdreVie($joueur, $points) {
    if (isset($_SESSION[$joueur]['vies'])) {
        $_SESSION[$joueur]['vies'] -= $points;
        if ($_SESSION[$joueur]['vies'] < 0) {
            $_SESSION[$joueur]['vies'] = 0;
        }
    }
}

function gagnerVie($joueur, $points) {
    if (isset($_SESSION[$joueur]['vies'])) {
        $_SESSION[$joueur]['vies'] += $points;
    }
}
?>