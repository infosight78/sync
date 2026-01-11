<?php

namespace App\Repositories;

class VendorRepository implements VendorRepositoryInterface
{
    public function create(array $data)
    {
        return Vendor::create($data);
    }

    public function paginate()
    {
        return Vendor::latest()->paginate(15);
    }
}
