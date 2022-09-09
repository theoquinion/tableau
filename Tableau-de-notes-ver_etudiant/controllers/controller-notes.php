<?php
switch ($action) {
    case 'accueil':
    {
        $message = "C'est la page d'accueil";
        include 'views/v_accueil.php';
        break;
    }
    case 'recharger':
    {
        $lesNotes = getLesNotes();
        $message = "données chargées";
        include("views/v_accueil.php");
        break;
    }
    case 'afficher':
    {
        $lesNotes = getLesNotes();
        include("views/v_afficher.php");
        break;
    }
    case 'max':
    {
        $lesNotes = getLesNotes();
        include("views/v_max.php");
        break;
    }

    case 'min':
    {
        $lesNotes = getLesNotes();
        include("views/v_min.php");
        break;
    }
    case 'repartition' :
    {
        $lesNotes = getLesNotes();
        $stat = getDistribution($lesNotes);
        include("views/v_stats.php");
        break;
    }
    case 'histogrammeLignes' :
        {
            $lesNotes = getLesNotes();
            $stat = getDistribution($lesNotes);
            include("views/v_stat_ligne.php");
            break;
        }
    case 'histogrammeColonnes' :
    {
        $lesNotes = getLesNotes();
        $stat = getDistribution($lesNotes);
        include("views/v_stat_cologne.php");
        break;
     }
    default :


    {
        $message = "ok";
        include 'views/404.php';
    }
        $stat = array(
            '0-4' => 0,
            '4-8' => 0,
            '8-12' => 0,
            '12-16' => 0,
            '16-20' => 0
        );

        return $stat;
}