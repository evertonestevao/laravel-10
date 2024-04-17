<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ProdutoFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function id($id){
        return $this->where('id',$id);
    }

    public function categoria($categoria){
        return $this->where('categoria',$categoria);
    }

    public function nome($nome){
        return $this->where('nome',$nome);
    }

}
