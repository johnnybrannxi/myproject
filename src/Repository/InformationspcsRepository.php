<?php

namespace App\Repository;

use App\Entity\Informationspcs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Informationspcs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Informationspcs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Informationspcs[]    findAll()
 * @method Informationspcs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationspcsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Informationspcs::class);
    }

    // /**
    //  * @return Informationspcs[] Returns an array of Informationspcs objects
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
    public function findOneBySomeField($value): ?Informationspcs
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
