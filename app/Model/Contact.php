<?php
/**
 * Created by PhpStorm.
 * User: achmadfatoni
 * Date: 8/21/15
 * Time: 11:54 PM
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends  Model
{
    protected $fillable = ['name','no_hp', 'is_surabaya'];

}