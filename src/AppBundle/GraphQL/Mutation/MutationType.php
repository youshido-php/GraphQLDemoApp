<?php
/**
 * Date: 31.10.16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace AppBundle\GraphQL\Mutation;

use AppBundle\GraphQL\Mutation\Todo\AddTodoField;
use AppBundle\GraphQL\Mutation\Todo\ClearCompletedField;
use AppBundle\GraphQL\Mutation\Todo\DestroyField;
use AppBundle\GraphQL\Mutation\Todo\SaveField;
use AppBundle\GraphQL\Mutation\Todo\ToggleAllField;
use AppBundle\GraphQL\Mutation\Todo\ToggleField;
use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

class MutationType extends AbstractObjectType
{

    /**
     * @param ObjectTypeConfig $config
     *
     * @return mixed
     */
    public function build($config)
    {
        $config->addFields([
            new AddTodoField(),
            new ToggleAllField(),
            new ToggleField(),
            new DestroyField(),
            new SaveField(),
            new ClearCompletedField()
        ]);
    }
}