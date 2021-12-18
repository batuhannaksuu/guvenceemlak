<?php

namespace App\Services;

use App\Repositories\Contracts\OfficeRepositoryInterface;

class OfficeService
{
    protected $officeRepository;
    public function __construct(OfficeRepositoryInterface $officeRepository)
    {
        $this->officeRepository = $officeRepository;
    }
    public function getOffice()
    {
        $office = $this->officeRepository->getOffice();
        if ($office != null)
        {
            return $office;
        } else {
            return "Veri yok";
        }
    }

}
