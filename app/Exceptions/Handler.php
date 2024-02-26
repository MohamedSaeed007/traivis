<?php

namespace App\Exceptions;

use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Str;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = ['password', 'password_confirmation'];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ModelNotFoundException) {
            // Check if the user is logged in and has an ID of 1
            /*            if (Auth::check() && Auth::user()->id == 1) {
                // If the request is JSON, return a JSON response with detailed error information
                if ($request->wantsJson()) {
                    return response()->json(
                        [
                            'error' => 'The requested resource was not found.',
                            'message' => $exception->getMessage(),
                            'file' => $exception->getFile(),
                            'line' => $exception->getLine()
                        ],
                        404
                    );
                }

                return response()->view(
                    'errors.404',
                    [
                        'message' =>
                            'The resource you requested could not be found. Please check your URL and try again.',
                        'exception' => $exception
                    ],
                    404
                );
            }*/

            $message =
                'Sorry, the ' .
                Str::of($exception->getModel())
                    ->basename()
                    ->lower() .
                ' you are looking for could not be found.';

            $messageObject = new class ($message) {
                protected $message;

                public function __construct($message)
                {
                    $this->message = $message;
                }

                public function getMessage()
                {
                    return $this->message;
                }
            };

            // If the user is not logged in or doesn't have an ID of 1, display a generic error message with less technical information
            return response()->view('errors.404', ['exception' => $messageObject], 404);
        }

        if ($exception instanceof ModelNotFoundException && $request->wantsJson()) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        return parent::render($request, $exception);
    }
}
