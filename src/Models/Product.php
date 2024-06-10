<?php

namespace Hey\Pro\Models;

use Hey\Pro\Commons\Model;

class Product extends Model
{
    protected string $tableName = 'products';

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