<?php

namespace AgendaWeb\Repositories\Contracts;

/**
 * Interface AbstractRepositoryRepository
 * @package namespace AgendaWeb\Repositories;
 */
interface AbstractRepository
{
    //  public function find($id)
      public function find($id);

       public function findAll();

       public function create(array $data);

       public function update(array $data, $id);

       public function firstOrCreate(array $data);

       public function delete($id);

       public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

       public function findOneBy(array $criteria);

}
