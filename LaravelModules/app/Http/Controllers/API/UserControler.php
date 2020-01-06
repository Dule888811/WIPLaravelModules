<?php
namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Dule\Login\Models\User;





class ArticleController extends BaseController
{
    public function index($id)
    {
        $User = User::find($id);
        $data = $user->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'User retrieved successfully.'
        ];

        return response()->json($response, 200);
    }
}