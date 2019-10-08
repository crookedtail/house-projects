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

class UserPresenter extends BasePresenter
{
    public function name()
    {
        return ucfirst($this->wrappedObject->name);
    }
}