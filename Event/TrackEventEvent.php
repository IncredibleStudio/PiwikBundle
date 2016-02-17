<?php

namespace Incredible\PiwikBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class TrackEventEvent extends Event
{
    /** @var \Incredible\PiwikBundle\Model\Event */
    private $event;

    /**
     * @return \Incredible\PiwikBundle\Model\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \Incredible\PiwikBundle\Model\Event $event
     */
    public function setEvent(\Incredible\PiwikBundle\Model\Event $event)
    {
        $this->event = $event;
    }
}