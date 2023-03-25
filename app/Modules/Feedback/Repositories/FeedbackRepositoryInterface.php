<?php

namespace App\Modules\Feedback\Repositories;

use App\Modules\Feedback\Models\Feedback;

interface FeedbackRepositoryInterface
{
    public function create(array $data): Feedback;
}
