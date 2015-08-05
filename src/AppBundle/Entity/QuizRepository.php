<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * QuizRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuizRepository extends EntityRepository
{
    /**
     * @param $office Office
     * @return Quiz[]
     */
    public function findAllByOffice($office)
    {
        return $this->findBy(array('office' => $office));
    }
}
