<?php
/**
 * Date: 31.10.16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace AppBundle\Resolver;


use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractResolver
{

    /** @var  EntityManagerInterface */
    protected $em;

    public function init(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    protected function createNotFoundException($message = 'Entity not found')
    {
        return new \Exception($message, 404);
    }

    protected function createInvalidParamsException($message = 'Invalid params')
    {
        return new \Exception($message, 400);
    }

    protected function createAccessDeniedException($message = 'No access to this action')
    {
        return new \Exception($message, 403);
    }

}