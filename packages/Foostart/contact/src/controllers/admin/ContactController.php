<?php namespace Foostart\contact\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
/**
 * Validators
 */

class ContactController extends Controller { 
    public $data_view = array();

    private $obj_validator = NULL;

    public function __construct() { 
    }

    public function addFlashMessage($message_key, $message_value) {
        \Session::flash('message', trans('contact::contact_admin.message_add_successfully'));
    }

}