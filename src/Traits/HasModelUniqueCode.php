<?php

namespace Helmab\ModelUniqueCode\Traits;

trait HasModelUniqueCode
{
    public static function bootHasModelUniqueCode()
    {
        static::creating(function ($model) {
            $instance = (new static());

            $key_unique_code = $instance->key_unique_code ?? 'code';

            $model->$key_unique_code = $instance->getCode($instance->random());
        });
    }

    private function getCode($code)
    {
        $key_unique_code = $instance->key_unique_code ?? 'code';

        $model = $this->newQuery()->where($key_unique_code, $code)->first();

        if ($model instanceof $this) {
            return $this->getCode($this->random());
        }
        return $code;
    }

    private function random(): string
    {
        $length = $this->length_unique_code ?? 8;

        $pattern = '0123456789';
        if ($this->type_unique_code === 'string') {
            $pattern = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } else if ($this->type_unique_code === 'mixed') {
            $pattern = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        $code = substr(str_shuffle(str_repeat($x = $pattern, ceil($length / strlen($x)))), 1, $length);

        if ($this->has_prefix_unique_code) {
            $label = substr(str_shuffle(str_repeat($x = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, 3);

            $prefix = $this->prefix_unique_code ?? $label;

            return $prefix . '-' . $code;
        }

        return $code;
    }
}
