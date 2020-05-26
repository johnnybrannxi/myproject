<?php

namespace App\Repository;

use App\Entity\Informationscoupons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Informationscoupons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Informationscoupons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Informationscoupons[]    findAll()
 * @method Informationscoupons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationscouponsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Informationscoupons::class);
    }

    // /**
    //  * @return Informationscoupons[] Returns an array of Informationscoupons objects
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
    public function findOneBySomeField($value): ?Informationscoupons
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
