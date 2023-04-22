<?php

namespace App\Http\Controllers\Admin\Corpus;
use App\Http\Requests\Admin\Corpus\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Corpus;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Corpus $corpus)
    {
        $data = $request->validated();
        $corpus->update($data);
        return redirect()->route('admin.corpus.show', compact('corpus'));
    }
}
