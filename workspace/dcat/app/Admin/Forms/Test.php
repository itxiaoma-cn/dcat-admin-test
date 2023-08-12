<?php

namespace App\Admin\Forms;

use App\Models\Column;
use App\Models\Location;
use Dcat\Admin\Form\Field\Map;
use Dcat\Admin\Widgets\Form;

class Test extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        foreach ($input['column_ids'] as $column_id) {
            Location::create([
                'location' => $input['location'],
                'address' => $input['address'],
                'column_id' => $column_id,
            ]);
        }
        // return $this->response()->error('Your error message.');
        return $this
            ->response()
            ->success('Processed successfully.')
            ->refresh();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text('location', '地理位置')->required();
        $this->text('address', '地址')->required();
        $this->map('latitude', 'longitude', '地区选择');
        $this->multipleSelect('column_ids', '所属专栏')
            ->options(Column::all()->pluck('name', 'id'))
            ->customFormat(function ($v) {
                if (!$v) {
                    return [];
                }
                return array_column($v, 'id');
            })->required();
    }
}