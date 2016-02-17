<?php

namespace Incredible\PiwikBundle\Extension;

use Incredible\PiwikBundle\Piwik\Piwik;

class PiwikExtension extends \Twig_Extension
{
    /** @var Piwik */
    private $piwik;

    /**
     * @param Piwik $piwik
     */
    public function __construct(Piwik $piwik)
    {
        $this->piwik = $piwik;
    }

    public function getGlobals()
    {
        return [
            'piwikTrackingCode' => $this->piwik->getTrackingCode()
        ];
    }

    public function getName()
    {
        return 'piwik_extension';
    }
}
