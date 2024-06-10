<?php

namespace Hey\Pro\Models;

use Hey\Pro\Commons\Model;

class Floral extends Model
{
    protected string $tableName = 'florals';

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