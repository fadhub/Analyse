<?php

namespace App\Services;

class ProjectService
{
    public function all(): array
    {
        return [
            [
                'slug' => 'parapharmacy',
                'title' => 'Parapharmacy E-Commerce Website',
                'description' => 'Modern e-commerce platform with secure payments and admin dashboard.',
                'excerpt' => 'E-commerce platform for parapharmacy products.',
                'images' => [
                    '/images/site_para.jpg',
                    '/images/site_para2.jpg',
                ],
                'tech' => ['HTML','CSS','JavaScript','Laravel','MySQL','Stripe'],
            ],
            [
                'slug' => 'contractgen',
                'title' => 'Contract Generator Desktop Application',
                'description' => 'Automates contract creation into formatted Word documents.',
                'excerpt' => 'Desktop app to generate contracts instantly.',
                'images' => [
                    '/images/app.jpg',
                    '/images/app.jpg',
                ],
                'tech' => ['Python','PyQt','python-docx'],
            ],
            [
                'slug' => 'architecture',
                'title' => 'Architecture Firm Website',
                'description' => 'Professional website showcasing projects and services with elegant design.',
                'excerpt' => 'Clean visual website for an architecture firm.',
                'images' => [
                    '/images/site_archi.jpg',
                    '/images/site_archi2.jpg',
                ],
                'tech' => ['HTML','CSS','JavaScript','GSAP'],
            ],
        ];
    }

    public function findBySlug(string $slug): ?array
    {
        foreach ($this->all() as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }
        return null;
    }
}
