<?php

namespace Sandbox\Base\Interfaces;

use Sandbox\DBEncryption\Builders\EncryptionEloquentBuilder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    public function find(int $id);
    public function findOne(array $filters = []);
    public function findAndLock(int $id);
    public function create(array $data);
    public function update(array $data, int $id);
    public function updateBy(array $conditions, array $data);
    public function updateOrCreate(array $conditions, array $data);
    public function delete(int $id);
    public function deleteBy(array $conditions);
    public function deleteAll();
    public function translation(Model $model, array $params);
    public function grouping(array $fields = []);
    public function list(array $filters = []): Collection|EncryptionEloquentBuilder;
    public function listPaginated(array $filters = [], array $conditions = [], $translate = false): LengthAwarePaginator|EncryptionEloquentBuilder;
    public function nextPriority(): int;
}
