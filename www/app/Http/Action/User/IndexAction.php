<?php

namespace App\Http\Action\User;

use App\Domain\Entity\User;
use App\Http\Responder\User\IndexResponder;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexAction extends Controller
{
    public function __invoke(Request $request, IndexResponder $responder)
    {
        return $responder->emit([new User(100, 'bell.tanaka')]);
    }
}
