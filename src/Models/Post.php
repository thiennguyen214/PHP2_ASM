<?php

namespace Hey\Pro\Models;

use Hey\Pro\Commons\Model;

class Post extends Model
{
    protected string $tableName = 'posts';

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