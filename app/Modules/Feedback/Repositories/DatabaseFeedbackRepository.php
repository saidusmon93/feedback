<?php

namespace App\Modules\Feedback\Repositories;

use App\Modules\Feedback\Models\Feedback;

class DatabaseFeedbackRepository implements FeedbackRepositoryInterface
{
    public function create(array $data): Feedback
    {
        $feedback = new Feedback;
        $feedback->name = $data['name'];
        $feedback->phone = $data['phone'];
        $feedback->message = $data['message'];
        $feedback->save();

        return $feedback;
    }
}
