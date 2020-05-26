<?php

namespace App\Repository;

use App\Entity\Informationstoneofirst;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Informationstoneofirst|null find($id, $lockMode = null, $lockVersion = null)
 * @method Informationstoneofirst|null findOneBy(array $criteria, array $orderBy = null)
 * @method Informationstoneofirst[]    findAll()
 * @method Informationstoneofirst[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationstoneofirstRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Informationstoneofirst::class);
    }

    // /**
    //  * @return Informationstoneofirst[] Returns an array of Informationstoneofirst objects
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
    public function findOneBySomeField($value): ?Informationstoneofirst
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
