<?php

namespace Incredible\PiwikBundle\Event;

use Incredible\PiwikBundle\Model\CustomVariable;
use Symfony\Component\EventDispatcher\Event;

class CustomVariableEvent extends Event
{
    /** @var CustomVariable */
    private $customVariable;

    /**
     * @return CustomVariable
     */
    public function getCustomVariable()
    {
        return $this->customVariable;
    }

    /**
     * @param CustomVariable $customVariable
     */
    public function setCustomVariable(CustomVariable $customVariable)
    {
        $this->customVariable = $customVariable;
    }
}
