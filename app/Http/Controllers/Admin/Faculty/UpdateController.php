<?php

namespace App\Http\Controllers\Admin\Faculty;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Faculty\UpdateRequest;
use App\Models\Faculty;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Faculty $faculty)
    {
        $data = $request->validated();
        $faculty->update($data);
        return redirect()->route('admin.faculty.show', compact('faculty'));
    }
}
