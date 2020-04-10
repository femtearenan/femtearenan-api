<?php

namespace App\Repository;

use App\Entity\DrumPattern;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DrumPattern|null find($id, $lockMode = null, $lockVersion = null)
 * @method DrumPattern|null findOneBy(array $criteria, array $orderBy = null)
 * @method DrumPattern[]    findAll()
 * @method DrumPattern[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrumPatternRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DrumPattern::class);
    }

    // /**
    //  * @return DrumPattern[] Returns an array of DrumPattern objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DrumPattern
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
