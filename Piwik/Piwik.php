<?php

namespace Incredible\PiwikBundle\Piwik;

use Incredible\PiwikBundle\Model\CustomVariable;
use Incredible\PiwikBundle\Model\Event;

class Piwik
{
    /** @var \Twig_Environment **/
    private $twig;

    /** @var CustomVariable[] */
    private $customVariables = [];

    /** @var Event[] */
    private $events = [];

    /**
     * @param \Twig_Environment $twig
     */
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param Event $event
     */
    public function addEvent(Event $event)
    {
        $this->events[] = $event;
    }

    /**
     * @param CustomVariable $customVariable
     */
    public function addCustomVariable(CustomVariable $customVariable)
    {
        $this->customVariables[] = $customVariable;
    }

    /**
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->twig->render(
            'IncrediblePiwikBundle::trackingCode.html.twig',
            [
                'customVariables' => $this->customVariables,
                'events' => $this->events
            ]
        );
    }
}