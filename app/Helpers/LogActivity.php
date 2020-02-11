<?php


namespace App\Helpers;
use Request;
use App\Models\LogActivity as LogActivityModel;


class LogActivity
{


    public static function addToLog($subject, $model = null, $id = null)
    {
    	$log = [];
    	$log['subject'] = $subject;
        $log['origin_model'] = isset($model) ? $model : null;
    	$log['origin_id'] = isset($id) ? $id : null;
    	$log['url'] = Request::fullUrl();
    	$log['method'] = Request::method();
    	$log['ip'] = Request::ip();
    	$log['agent'] = Request::header('user-agent');
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
    	LogActivityModel::create($log);
    }


    public static function logActivityLists()
    {
    	return LogActivityModel::latest()->get();
    }


}
