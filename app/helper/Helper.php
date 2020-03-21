<?php 
namespace App\Helper;

use App\Log;
use Request;

class Helper {

/**----------------------------------------------------------------------------------------------------------------------
* @param $subject
* @Method use to save users logs or user activity in user log activity table / created by @loveleshSingh 27/08/2019
* ---------------------------------------------------------------------------------------------------------------------
*/

    public static function addToLog($subject = null)
        {
        $log = [];
        $log['subject'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['ip'] = Request::ip();
        $log['agent'] = Request::header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;
        Log::create($log);
        }

    }

