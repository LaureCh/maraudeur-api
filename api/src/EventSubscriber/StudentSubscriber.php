<?php
namespace App\EventSubscriber;
 
use App\Entity\Student;
use App\Entity\Jobcard;
use App\Entity\Internship;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
 
class StudentSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::postPersist
        ];
    }
 
    public function postPersist(LifecycleEventArgs $args)
    {
        $student = $args->getObject();
        $em = $args->getObjectManager();

        if ($student instanceof Student) {
            //Create a jobcard associate to the student.
            $jobcard = new Jobcard;
            $jobcard->setStudent($student);
            $em->persist($student);

            //Create an internship associate to the student.
            $internship = new Internship;
            $internship->setStudent($student);
            $em->persist($student);

            $em->flush();
        }
    }

}