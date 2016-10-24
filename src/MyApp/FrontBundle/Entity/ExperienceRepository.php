<?php

namespace MyApp\FrontBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ExperienceRepository extends EntityRepository {

    public function findCherch($pays, $cat, $min, $max, $date) 
                {
        $query = $this->getEntityManager()
                // ->createQuery("Select e from MyAppFrontBundle:Experience e where lower(e.pays) =:lower(?npays) and lower(e.type)=:lower(?cat) and (e.depense between ?min and ?max) and (?date between e.date and e.datefin)")
                ->createQuery
("Select e from MyAppFrontBundle:Experience e where (lower(e.pays)=lower(:npays) and lower(e.type)=lower(:cat) and (e.depense between :min and :max))");
                $query->setParameter('cat', $cat);
                $query->setParameter('npays',$pays);
                $query->setParameter('min', $min);
                $query->setParameter('max', $max);
//  $query->setParameter(
//          array('npays' => $pays, 
//                            'cat' => $cat, 
//                            'min' => $min, 
//                            'max' => $max,
//              ));
        return $query->getResult();
    }

}
