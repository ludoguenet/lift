<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class UpdateController
{
    public function __invoke(
        Post $post,
    ): RedirectResponse {

        $post->update([
            'title' => Str::random()
        ]);

        return redirect('/');
    }
}
