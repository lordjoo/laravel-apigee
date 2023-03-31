<?php

namespace Lordjoo\Apigee\ConfigReaders;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class ConfigDBDriver implements ConfigReaderInterface
{
    private array $data;

    public function __construct()
    {
        $this->setData();
    }

    public function getQuery(): Builder
    {
        $table = config('apigee.db.table_name');

        return DB::table($table)->newQuery();
    }

    public function setData(): void
    {
        $this->data = $this->getQuery()->first()->toArray();
    }

    public function getOrganization(): string
    {
        $col = config('apigee.db.columns.organization');

        return $this->data[$col];
    }

    public function getEndpoint(): string
    {
        $col = config('apigee.db.columns.endpoint');

        return $this->data[$col];
    }

    public function getUserName(): string
    {
        $col = config('apigee.db.columns.username');

        return $this->data[$col];
    }

    public function getPassword(): string
    {
        $col = config('apigee.db.columns.password');

        return $this->data[$col];
    }
}
