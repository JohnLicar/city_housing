<?php

namespace App\Http\Livewire\DataTable;

trait WithSorting
{
  public $sortField = 'created_at';
  public $sortDirection = 'desc';

  public function sortBy($field)
  {
    $this->sortDirection = $this->sortField === $field 
     ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc' 
     : 'asc';

    $this->sortField = $field;
  }

}
