<?php

namespace Incredible\PiwikBundle\listener;

use Incredible\PiwikBundle\Event\CustomVariableEvent;
use Incredible\PiwikBundle\Event\TrackEventEvent;
use Incredible\PiwikBundle\Piwik\Piwik;

class PiwikListener
{
    /** @var Piwik */
    private $piwik;

    public function __construct(Piwik $piwik)
    {
        $this->piwik = $piwik;
    }

    public function onAddCustomVariable(CustomVariableEvent $event)
    {
        $this->piwik->addCustomVariable($event->getCustomVariable());
    }

    public function onTrackEvent(TrackEventEvent $event)
    {
        $this->piwik->addEvent($event->getEvent());
    }
}