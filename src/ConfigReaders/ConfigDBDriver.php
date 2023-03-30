<?php

namespace Lordjoo\Apigee\ConfigReaders;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class ConfigDBDriver implements ConfigReaderInterface
{
    public function getQuery(): Builder
    {
        $table = config('apigee.db.table_name');

        return DB::table($table)->newQuery();
    }

    public function getOrganization(): string
    {
        $column = config('apigee.db.columns.organization');

        return $this->getQuery()->first()->$column;
    }

    public function getEndpoint(): string
    {
        $column = config('apigee.db.columns.endpoint');

        return $this->getQuery()->first()->$column;
    }

    public function getUserName(): string
    {
        $column = config('apigee.db.columns.username');

        return $this->getQuery()->first()->$column;
    }

    public function getPassword(): string
    {
        $column = config('apigee.db.columns.password');

        return $this->getQuery()->first()->$column;
    }
}
