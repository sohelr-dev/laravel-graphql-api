<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\User as ModelsUser;

final readonly class User
{
    /** @param  array{}  $args */
    public function create(null $_, array $args)
    {
        
        $user=ModelsUser::create($args);
        return $user;
    }
    public function update(null $_, array $args)
    {
        
        $user=ModelsUser::find($args['id']);
        $user->update($args);
        return $user;
    }
    public function delete(null $_, array $args)
    {
        
        $user=ModelsUser::find($args['id']);
        $user->delete();
        return $user;
    }
}
