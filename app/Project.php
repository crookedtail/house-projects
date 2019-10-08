<?php

namespace App;

use App\Presenters\ProjectPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;
use Illuminate\Database\Eloquent\Model;

class Project extends Model implements HasPresenter
{
    protected $guarded = [];

    public function projectType()
    {
        return $this->belongsTo(ProjectType::class)->orderBy('priority');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*  public function complete($completed = true)
      {
          $this->update(compact('completed'));
      }

      public function incomplete()
      {
          $this->complete(false);
      }*/


//ACCESSORS
//FUN, BUT TIES THE PRESENTATION OF DATA TO THE MODEL
    /*public function getFireSafeAttribute($value)
    {
        if ($value === 0) {
            return 'No';
        }

        return 'Yes';
    }

    public function getEstimateAttribute($value)
    {
        if ($value > 0) {
            return '$' . $value;
        }

        return 'Unknown';
    }*/

    //USE THE laravel-suto-presenter (McCool) instead of accessors
    public function getPresenterClass()
    {
        return ProjectPresenter::class;
    }
}
