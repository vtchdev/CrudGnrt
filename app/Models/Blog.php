<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'title',
                  'slug',
                  'Blogcategory_id',
                  'description',
                  'photo',
                  'seoname',
                  'metabody'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the blogcategory for this model.
     *
     * @return App\Models\Blogcategory
     */
    public function blogcategory()
    {
        return $this->belongsTo('App\Models\Blogcategory','Blogcategory_id');
    }



}
