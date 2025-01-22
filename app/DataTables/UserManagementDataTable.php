<?php

namespace App\DataTables;

use App\Models\User;
use App\Models\UserManagement;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserManagementDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('name', function ($user) {
                return $user->first_name . ' ' . $user->last_name;
            })

            ->editColumn('created_at', function ($user) {
                return $user->created_at->format('Y-m-d');
            })  

            ->editColumn('updated_at', function ($user) {
                return $user->updated_at->format('Y-m-d');
            })

            ->editColumn('status', function ($user) {
                $statusClass = $user->status == 'Active' ? 'badge bg-success' : 'badge bg-danger';
                return '<span class="' . $statusClass . '">' . $user->status . '</span>';
            })
            
            ->addColumn('action', '')
            ->setRowId('id')
            ->rawColumns(['status', 'action']); // Ensure the status column is rendered as HTML

    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
       $query = $model->newQuery();

        if (request()->has('start_date') && request()->has('end_date')) {
            $startDate = request('start_date');
            $endDate = request('end_date');
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

    return $query->orderBy('created_at', 'desc');
    
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->ajax(
                        ['data' => 'function(d) {
                            var dateRange = $("#user-flatpickr-range").val().split(" to ");
                            var today = new Date().toISOString().split("T")[0];
                            d.start_date = dateRange[0] ;
                            d.end_date = dateRange[1] ;
                        }'
                    ])
                    ->setTableId('usermanagement-table')
                    ->columns($this->getColumns())
                    // ->minifiedAjax( )
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        // Button::make('csv'),
                        // Button::make('pdf'),
                        // Button::make('print'),
                        // Button::make('reset'),
                        // Button::make('reload')
                    ])
                    ->parameters([
                        'searching' => true, // Enable searching
                    ]);
                   
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->visible(false),
            Column::make('name'),
            Column::make('email'),
            Column::make('status'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->addClass('text-center')
                  ->width(100)
                  ->title('Actions')
                  ->render('function() {
                        return \'<button class="btn btn-sm btn-success" onclick=""><i class="bx bx-edit-alt"></i></button>&nbsp;<button class="btn btn-sm btn-danger" onclick=""><i class="bx bx-trash" ></i></button>\'.replace(/:id/g, this.id);
                  }'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'UserManagement_' . date('YmdHis');
    }
}
