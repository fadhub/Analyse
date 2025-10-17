<?php
namespace App\Services;
class DeveloperService
{
    public function getDeveloperProfile()
    {
        return [
            'nom' => 'Fadna Lakhouchen',
            'role' => 'Full Stack Développeuse',
            'bio' => 'Passionnée par le développement web, j’aime créer des interfaces modernes et fonctionnelles en utilisant les technologies les plus récentes.',
            'email' => 'fadna.lakhouchen@gmail.com'
        ];
    }
}