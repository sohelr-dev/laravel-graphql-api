<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\DB;

final readonly class Test
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return "Hello GraphQL";
        
    }
    public function index(){
        $users=DB::table('users')->get();
        return $users;

    }
}
