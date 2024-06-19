<?php

namespace App\Http\Resources;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->{Post::ID},
            'user_id' => $this->{Post::USER_ID},
            'title' => $this->{Post::TITLE},
            'body' => $this->{Post::BODY},
            'created_at' => $this->{Post::CREATED_AT},
            'updated_at' => $this->{Post::UPDATED_AT},
            'user' => $this->user,
        ];
    }
}
