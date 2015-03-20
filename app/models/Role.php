<?php

class Role extends Eloquent
{

    public static $rules = [
        'name' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }


    public function scopeIs_admin($query)
    {
        return $query->where('role_name', '=', 'administrator')
            ->orderBy('updated_at', 'desc');
    }

    public function scopeNot_admin($query)
    {
        return $query->where('role_name', '!=', 'administrator')
            ->orderBy('updated_at', 'desc');
    }

    public function scopeFirst_class($query)
    {
        return $query->where('role_name', '=', 'first_class')
            ->orderBy('updated_at', 'desc');
    }

    public function scopeFinal_class($query)
    {
        return $query->where('role_name', '=', 'final_class')
            ->orderBy('updated_at', 'desc');
    }


}
