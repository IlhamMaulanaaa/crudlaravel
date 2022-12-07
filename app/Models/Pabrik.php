<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Obat;



class Pabrik extends Model
{
    
    use HasFactory;


    public function Obat(){
        return $this->hasMany(Obat::class);
    }
}
