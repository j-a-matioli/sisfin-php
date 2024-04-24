<?php

namespace Sisfin\Repository;
use Sisfin\Models\Produto;

interface IRepository {
    public function get(ProdutoId $id): Produto;
    public function getAll(): array;
    public function save(Produto $produto): void;
    public function delete(Produto $produto): void;
}