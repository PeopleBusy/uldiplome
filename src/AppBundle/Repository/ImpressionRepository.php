<?php

namespace AppBundle\Repository;

/**
 * ImpressionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImpressionRepository extends \Doctrine\ORM\EntityRepository
{
    public function findNbImpressionsByYear($annee){

        $qb = $this->createQueryBuilder('i');
        $qb->select('COUNT(i)')
            ->join('i.demande', 'd')
            ->where('d.annee = :annee')
            ->setParameter('annee', $annee);

        $query = $qb->getQuery();

        return $query->getSingleScalarResult();

    }
}
