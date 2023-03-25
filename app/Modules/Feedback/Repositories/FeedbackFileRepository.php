<?php

namespace App\Modules\Feedback\Repositories;

use App\Modules\Feedback\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class FeedbackFileRepository implements FeedbackRepositoryInterface
{
    public function create(array $data): Feedback
    {
        $feedback = new Feedback;
        $feedback->name = $data['name'];
        $feedback->phone = $data['phone'];
        $feedback->message = $data['message'];
        $feedback->date = Carbon::now()->locale('ru')->isoFormat('YYYY-MM-DD hh:mm');
        $json = json_encode($feedback);

        Storage::disk('local')->put("feedback/$feedback->name.txt", $json);
        return $feedback;
    }
}
