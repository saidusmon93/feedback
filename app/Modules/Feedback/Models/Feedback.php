<?php

namespace App\Modules\Feedback\Models;

use App\Modules\Feedback\Factories\FeedbackStorageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name', 'phone', 'message'];
    use HasFactory;
     public function saveFeedback(string $storageType)
    {
        $data = [
            'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message,
        ];

        $storage = FeedbackStorageFactory::create($storageType);
        $storage->create($data);
    }
}
