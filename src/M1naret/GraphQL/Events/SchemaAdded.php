<?php

namespace M1naret\GraphQL\Events;

class SchemaAdded
{
    public $schema;
    public $name;

    public function __construct($schema, $name)
    {
        $this->schema = $schema;
        $this->name = $name;
    }
}
