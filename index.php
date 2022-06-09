<?php

namespace Nekonyx\RYWT;

use Nekonyx\RYWT\Entities\Activity;

require_once 'vendor/autoload.php';
require_once "bootstrap.php";


$qb = $entityManager->createQueryBuilder();

$query = $qb->select('a')
    ->from(Activity::class, 'a');
$activities = $query->getQuery()->getResult();

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename('templates/index.html');
$paths->setPartialRootPaths(['partials']);

// convert activities to array
$activitiesArray = [];
foreach ($activities as $activity) {
    $activitiesArray[] = [
        'id' => $activity->getId(),
        'pushUps' => $activity->getPushUps(),
        'duration' => $activity->getDuration(),
        'date' => $activity->getDate()->format('Y-m-d H:i:s')
    ];
}

$view->assignMultiple([
    'activities' => $activitiesArray
]);

$output = $view->render();

echo $output;