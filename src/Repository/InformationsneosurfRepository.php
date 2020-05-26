<?php

namespace App\Repository;

use App\Entity\Informationsneosurf;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Informationsneosurf|null find($id, $lockMode = null, $lockVersion = null)
 * @method Informationsneosurf|null findOneBy(array $criteria, array $orderBy = null)
 * @method Informationsneosurf[]    findAll()
 * @method Informationsneosurf[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationsneosurfRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Informationsneosurf::class);
    }

    // /**
    //  * @return Informationsneosurf[] Returns an array of Informationsneosurf objects
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
    public function findOneBySomeField($value): ?Informationsneosurf
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
