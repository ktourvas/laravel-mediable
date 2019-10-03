<?php

namespace ktourvas\LaravelMediable\Entities;

trait Mediable {

    /**
     * Get all of the media objects for the model.
     */
    public function media()
    {
        return $this->morphToMany(MediaObject::class, 'mediable')->withPivot('contextual_type_id');
    }

}