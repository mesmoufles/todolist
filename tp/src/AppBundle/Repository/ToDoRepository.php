<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ToDoRepository extends EntityRepository
{
    public function findAllWithInfos()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.id, t.description, u.lastname, u.firstname, c.level FROM AppBundle:ToDo t, AppBundle:User u, AppBundle:Criticity c WHERE t.user = u.id AND t.criticity = c.id '
            )
            ->getResult();
    }
}