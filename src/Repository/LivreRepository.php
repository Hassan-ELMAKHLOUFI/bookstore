<?php

namespace App\Repository;

use App\Entity\Livre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Livre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livre[]    findAll()
 * @method Livre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livre::class);
    }

    // /**
    //  * @return Livre[] Returns an array of Livre objects
    //  */

    public function findByTitre($value,$Du,$Jusquau)
    {
        if(empty($Du) ||empty($Jusquau) ){
            $Du=1900;
            $Jusquau=2020;
        }
        $Du=$Du."-1-1";
        $Jusquau=$Jusquau."-1-1";

        return $this->createQueryBuilder('l')
            ->andWhere('l.titre like :val')
            ->andWhere('l.date_de_parution BETWEEN :du AND :jusquau')
            ->setParameter('val', "%".$value."%")
            ->setParameter('du', $Du)
            ->setParameter('jusquau', $Jusquau)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Livre
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
