<?php

namespace AgendaWeb\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class CategoriaCriteria
 * @package namespace AgendaWeb\Criteria;
 */
class CategoriaCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->findWhere(
            ['cdCategoria'=>'10']);
        return $model;
    }
}
