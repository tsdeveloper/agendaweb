<?php

namespace AgendaWeb\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Categoria extends Model implements Transformable
{
    use TransformableTrait;
    protected $table= 'tbCategorias';
    protected $primaryKey = 'cdCategoria';

    protected $fillable=[
        'cdCategoria',
        'noCategoria'

    ];

    public function participantes(){
      return  $this->hasMany(Participante::class);
    }

}
