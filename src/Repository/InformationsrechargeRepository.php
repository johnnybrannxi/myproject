<?php

namespace App\Repository;

use App\Entity\Informationsrecharge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Informationsrecharge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Informationsrecharge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Informationsrecharge[]    findAll()
 * @method Informationsrecharge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationsrechargeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Informationsrecharge::class);
    }

    // /**
    //  * @return Informationsrecharge[] Returns an array of Informationsrecharge objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Informationsrecharge
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
