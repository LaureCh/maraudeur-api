<?php

namespace App\Repository;

use App\Entity\JobCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method JobCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobCard[]    findAll()
 * @method JobCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobCardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobCard::class);
    }

    // /**
    //  * @return JobCard[] Returns an array of JobCard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JobCard
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
