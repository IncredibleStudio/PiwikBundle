<?php

namespace Incredible\PiwikBundle\Model;

class CustomVariable
{
    /** @var string */
    private $index;

    /** @var string */
    private $name;

    /** @var string */
    private $value;

    /** @var string */
    private $scope;

    /**
     * @param $index
     * @param $name
     * @param $value
     * @param $scope
     */
    public function __construct($index, $name, $value, $scope = null)
    {
        $this->index = $index;
        $this->name = $name;
        $this->value = $value;
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'index' => $this->index,
            'name' => $this->name,
            'value' => $this->value,
            'scope' => $this->scope
        ];
    }
}