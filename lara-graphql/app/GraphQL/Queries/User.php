<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\DB;

final readonly class User
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return ModelsUser::all();
    }

    public function show(null $_,array $args){
        return ModelsUser::find(($args['id']));
    }

    public function index(){
        $users=DB::table('users')->get();
        return $users;

    }
}
