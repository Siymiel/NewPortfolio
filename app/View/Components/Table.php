<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $table_columns;
    public $table_data;
    public $route_prefix;
    /**
     * Create a new component instance.
     *
     * @param array $columns
     * @param array $data
     * @param array $routePrefix
     */
    public function __construct($columns = [], $data = [], $routePrefix = 'dashboard')
    {
        $this->table_columns = $columns;
        $this->table_data = $data;
        $this->route_prefix = $routePrefix;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.table');
    }
}
