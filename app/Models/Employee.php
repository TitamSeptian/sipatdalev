<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = [];
    protected $fillable = ['name', 'nip', 'position'];

    public function surat_perintah(){
        return $this->hasMany(SuratPerintah::class);
    }
}
