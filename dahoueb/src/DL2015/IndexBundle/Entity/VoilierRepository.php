<?php

namespace DL2015\IndexBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * VoilierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VoilierRepository extends EntityRepository{

    

    public function getVoilier($id){
    
return $this
->createQueryBuilder('v')
->leftjoin('v.idmbr', 'prop')
->addSelect('prop')
->where('prop.idmbr = :id')
->setParameter('id', $id)


;
}
}
