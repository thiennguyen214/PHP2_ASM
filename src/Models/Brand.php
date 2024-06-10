<?php

namespace Hey\Pro\Models;

use Hey\Pro\Commons\Model;

class Brand extends Model
{
    protected string $tableName = 'brands';

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