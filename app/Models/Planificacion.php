<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planificacion extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'representante',
        // 'codigo',
        'semestre',
        'documento',
        'documento2'
    ];

    //mutator 
    public function getPathFileAttribute(){
        if ($this->documento) {
            if (substr($this->documento, 0, 4) === "http")
                return $this->documento;
            return asset('Archivos').'/' . $this->documento;
        }
       
    }
    public function getPathFileAttribute2(){
        if ($this->documento2) {
            if (substr($this->documento2, 0, 4) === "http")
                return $this->documento2;
            return asset('Archivos').'/' . $this->documento2;
        }
       
    }
}
