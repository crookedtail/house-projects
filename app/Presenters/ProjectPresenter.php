<?php
/**
 * Created by PhpStorm.
 * User: rachaelm
 * Date: 10/6/2019
 * Time: 2:55 PM
 */

namespace App\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;

class ProjectPresenter extends BasePresenter
{
    public function fire_safe()
    {
        $fireSafe = $this->wrappedObject->fire_safe;

        if ($fireSafe === 0) {
            return 'No';
        }

        return 'Yes';
    }

    public function estimate()
    {
        $estimate = $this->wrappedObject->estimate;

        if ($estimate > 0) {
            return '$' . $estimate;
        }

        return 'Unknown';
    }

    public function created_at()
    {
        $createdAt = $this->wrappedObject->created_at;

        return Carbon::createFromFormat('Y-m-d H:i:s', $createdAt)
            ->toFormattedDateString();
    }

   /* public function name()
    {
        return ucfirst($this->wrappedObject->user->name);
    }*/
}