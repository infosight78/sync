<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\SoftDeletes;


class Vendor extends Model
{
    use SoftDeletes, LogsActivity, SoftDeletes;

    protected $fillable = ['vendor_code','name','email','phone','website','status','created_by'];

    public function addresses()
    {
        return $this->hasMany(VendorAddress::class);
    }

    public function contacts()
    {
        return $this->hasMany(VendorContact::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['vendor_code','name','email','phone','website','status','created_by'])->logOnlyDirty()->useLogName('vendor');
    }
}

