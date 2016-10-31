<?php
/**
 * Date: 31.10.16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace AppBundle\GraphQL\Mutation\Todo;


use AppBundle\GraphQL\Type\TodoType;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\AbstractType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class ClearCompletedField extends AbstractContainerAwareField
{

    public function resolve($value, array $args, ResolveInfo $info)
    {
        return $this->container->get('resolver.todo')->clearCompleted();
    }

    /**
     * @return AbstractObjectType|AbstractType
     */
    public function getType()
    {
        return new ListType(new TodoType());
    }
}