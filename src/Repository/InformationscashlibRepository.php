<?php

namespace App\Repository;

use App\Entity\Informationscashlib;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Informationscashlib|null find($id, $lockMode = null, $lockVersion = null)
 * @method Informationscashlib|null findOneBy(array $criteria, array $orderBy = null)
 * @method Informationscashlib[]    findAll()
 * @method Informationscashlib[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationscashlibRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Informationscashlib::class);
    }

    // /**
    //  * @return Informationscashlib[] Returns an array of Informationscashlib objects
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
    public function findOneBySomeField($value): ?Informationscashlib
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
