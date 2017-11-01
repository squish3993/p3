<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Validnote implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $validNote = false;
        $validNotes= ['c', 'd', 'e', 'f', 'g', 'a', 'b'];

        if (in_array(strtolower($value), $validNotes))
        {
            $validNote = true;
        }
        else
        {
            $validNote = false; 
        }
        

        return $validNote;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please enter a valid note';
    }
}
