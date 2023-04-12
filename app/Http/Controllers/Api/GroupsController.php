<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\GroupResource;
use App\Models\Group;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GroupsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return GroupResource::collection(Group::all());
    }
}
