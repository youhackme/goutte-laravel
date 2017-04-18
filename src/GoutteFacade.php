<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/04/2017
 * Time: 21:49
 */

namespace Toggle\Goutte;


use Illuminate\Support\Facades\Facade;


class GoutteFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'goutte';
    }
}
