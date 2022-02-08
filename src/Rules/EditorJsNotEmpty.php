<?php

namespace LaravelEditorJs\Rules;

use Illuminate\Contracts\Validation\Rule;
use LaravelEditorJs\BlocksManager;

class EditorJsNotEmpty implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return (new BlocksManager($value))->hasBlocks();
    }
 
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('laravel-editor-js::validation.editor-js-not-empty');
    }
}