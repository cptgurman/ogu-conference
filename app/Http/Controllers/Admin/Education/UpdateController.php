<?php

namespace App\Http\Controllers\Admin\Education;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Education\UpdateRequest;
use App\Models\Education;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Education $education)
    {
        $data = $request->validated();
        $education->update($data);
        return redirect()->route('admin.education.show', compact('education'));
    }
}
