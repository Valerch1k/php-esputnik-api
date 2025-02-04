<?php

namespace Esputnik\Model;

use Esputnik\Exception\InvalidModelException;

class Group
{
    const GROUP_TYPE_STATIC = 'Static';
    const GROUP_TYPE_DYNAMIC = 'Dynamic';
    const GROUP_TYPE_COMBINED = 'Combined';
    private $id;
    private $name;
    private $type;

    /**
     * Group constructor.
     * @param $type
     * @param $name
     */
    public function __construct($type, $name)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}
