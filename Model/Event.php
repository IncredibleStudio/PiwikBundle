<?php

namespace Incredible\PiwikBundle\Model;

class Event
{
    /** @var string */
    private $action;

    /** @var string */
    private $category;

    /** @var string */
    private $name;

    /** @var string */
    private $value;

    /**
     * @param $action
     * @param $category
     * @param null $name
     * @param null $value
     */
    public function __construct($action, $category, $name = null, $value = null)
    {
        $this->action = $action;
        $this->category = $category;
        $this->name = $name;
        $this->value = $value;
    }

    public function toArray()
    {
        return [
            'action' => $this->action,
            'category' => $this->category,
            'name' => $this->name,
            'value' => $this->value
        ];
    }
}