<?php

namespace App\Imports;

use App\Models\YourModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class YourModelImporter implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Create and return a new instance of YourModel
        return new YourModel([
            'column1' => $row['column1'],
            'column2' => $row['column2'],
            // Add more columns as needed
        ]);
    }
}

