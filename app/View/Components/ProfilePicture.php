<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class ProfilePicture extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public User $user,
        public string $size = 'sm'
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|\Closure|string
    {
        return view('components.auth.profile-picture');
    }

    /**
     * @return string
     */
    public function size(): string
    {
        return match ($this->size) {
            'xs' => 'height:50px;width:50px;',
            'sm' => 'height:70px;width:70px;',
            'md' => 'height:120px;width:120px;',
            'lg' => 'height:50px;width:50px;',
            'xl' => 'height:50px;width:50px;',
        };
    }
}
