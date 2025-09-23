<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];
    public function register(): void{
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception){
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        }
        return parent::render($request, $exception);
    }
}
// {

//     protected $levels = [

//     ];

//     protected $dontReport = [

//     ];

//     protected $dontFlash = [
//         'current_password',
//         'password',
//         'password_confirmation',
//     ];

//     public function register(): void
//     {
//         $this->reportable(function (Throwable $e) {

//         });
//     }
// }
