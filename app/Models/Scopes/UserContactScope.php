<?php

namespace App\Models\Scopes;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class UserContactScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        if ($id = Auth::id()) {
            $builder->where(function ($query) use ($id) {
                $query->where('user_id', '=', $id)
                    ->orWhereExists(function ($query) use ($id) {
                        $query->select(DB::raw('1'))
                            ->from('user_contacts')
                            ->whereColumn('contact_id', '=', 'contacts.id')
                            ->where('user_id', '=', $id);
                    });
            });
        }
    }
}
