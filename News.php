<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    protected $fillable  = ['title','add_by','content','desc','status'];
    protected $date =['deleted_at'];
    
    public function user_id()
    {
        return $this->hasOne('App\User','id','add_by');

        /*

         this function hasOne is use three parameter
         first = the path of the other model ,the model  that carry the other table 
         second = the primary key of the other table
         third = the foreign key of the table that this key is references on it 

        */
    }
    
    

    


    

     
    


    
    
}
