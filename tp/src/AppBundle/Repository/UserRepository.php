<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function findAllWithInfos()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.id, t.description, u.lastname, u.firstname, c.level FROM AppBundle:ToDo t, AppBundle:Users u, AppBundle:Criticity c WHERE t.user_id = u.id AND t.criticity_id = c.id '
            )
            ->getResult();
    }
}