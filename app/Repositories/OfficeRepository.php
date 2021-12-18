<?php

namespace App\Repositories;

use App\Models\Offices;
use App\Repositories\Contracts\OfficeRepositoryInterface;

class OfficeRepository implements OfficeRepositoryInterface
{
    public function getOffice()
    {
        try {
            $office = Offices::orderBy('id', 'asc')->first();
            return $office;
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

}
