<?php
namespace Website\Middleware;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class IsSuperAdmin implements IMiddleware {

    public function handle(Request $request): void 
    {
    
        // Authenticate user, will be available using request()->user
        $user = loggedInUser();

        if ($user === false){
            redirect(url('login'));
            exit;
        }

        if($user['admin'] == 0){
            redirect(url('home'));
            exit;
        }

    }
}