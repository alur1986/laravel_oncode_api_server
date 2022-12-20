<?php


namespace App\Http\Requests;


abstract class PaginateRequest extends ApiRequest
{
    protected $max_paginate;
    protected $min_paginate;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->max_paginate = config('app.pages.max_paginate');
        $this->min_paginate = config('app.pages.min_paginate');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'paginate' => 'integer|min:'.$this->min_paginate.'|max:'.$this->max_paginate,
            'page' => 'integer'
        ];
    }
}
