<?php

namespace Hey\Pro\Models;

use Hey\Pro\Commons\Model;

class Origin extends Model
{
    protected string $tableName = 'origins';

    public function findByName($name)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('name = ?')
            ->setParameter(0, $name)
            ->fetchAssociative();
    }
}