<?php
namespace App\Modules\Feedback\Factories;

use App\Modules\Feedback\Repositories\DatabaseFeedbackRepository;
use App\Modules\Feedback\Repositories\FeedbackFileRepository;
use App\Modules\Feedback\Repositories\FeedbackRepositoryInterface;
use InvalidArgumentException;

class FeedbackStorageFactory
{
    public static function create(string $type): FeedbackRepositoryInterface
    {
        if ($type === 'database') {
            return new DatabaseFeedbackRepository();
        } elseif ($type === 'file') {
            return new FeedbackFileRepository();
        } else {
            throw new InvalidArgumentException('Invalid storage type.');
        }
    }
}
