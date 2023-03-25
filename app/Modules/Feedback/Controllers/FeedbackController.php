<?php

namespace App\Modules\Feedback\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Feedback\Models\Feedback;
use App\Modules\Feedback\Requests\StoreFeedbackRequest;

class FeedbackController extends Controller
{
    public function store(StoreFeedbackRequest $request)
    {
        $feedback = new Feedback([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);
        $storage = 'database';
        $feedback->saveFeedback($storage);

        return response()->json(['success' => 'Успешно Отправлено!']);
    }
}
