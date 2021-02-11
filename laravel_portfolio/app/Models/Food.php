<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = array('id');
//いらない
    public static $rules = array(
	'name' => 'required',
	'quantity' => 'integer|min:0|max:10000',
	'unit' => 'required'
    );
   //いらない 
    public function messages()
    {
        return [
	    'name' => '名前を入力してください',
            'unit' => '単位を入力してください'
        ];
    }
 
}
