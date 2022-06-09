<?php

namespace Nekonyx\RYWT\Fixures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Nekonyx\RYWT\Entities\Activity;

class ActivityDataLoader extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $activity1 = new Activity();
        $activity1->setPushUps(10);
        $activity1->setDuration(10);
        $activity1->setDate(new \DateTime('now'));

        $activity2 = new Activity();
        $activity2->setPushUps(20);
        $activity2->setDuration(20);
        $activity2->setDate(new \DateTime('now'));

        $activity3 = new Activity();
        $activity3->setPushUps(30);
        $activity3->setDuration(30);
        $activity3->setDate(new \DateTime('now'));

        $manager->persist($activity1);
        $manager->persist($activity2);
        $manager->persist($activity3);

        $manager->flush();
    }
}