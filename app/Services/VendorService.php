<?php

namespace App\Services;

class VendorService
{
    public function store(array $data)
    {
        return DB::transaction(function () use ($data) {
            $data['vendor_code'] = 'VND-' . Str::random(6);
            return Vendor::create($data);
        });
    }
}
