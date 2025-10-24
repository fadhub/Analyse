<?php

namespace App\Services;

class DeveloperService
{
    public function getProfile(): array
    {
        return [
            'name' => 'Fadna Lakhouchen',
            'title' => 'Full Stack Developer',
            'bio' => 'Freelance web and mobile developer, specialized in building modern and responsive applications.',
            'socials' => [
                ['type' => 'github', 'url' => 'https://github.com/fadhub'],
                ['type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/f%C3%A2%C4%91n%C4%81-l-k-332987341/'],
                ['type' => 'email', 'url' => 'mailto:fadna.lakhouchen@gmail.com'],
            ],
            'skills' => [
                ['icon' => 'code', 'name' => 'Web Application Development'],
                ['icon' => 'mobile-alt', 'name' => 'Mobile Application Development'],
                ['icon' => 'lightbulb', 'name' => 'Problem Solving'],
            ],
        ];
    }
}
