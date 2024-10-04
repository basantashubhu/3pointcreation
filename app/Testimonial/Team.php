<?php

namespace App\Testimonial;

class Team
{
    public array $members = [
        [
            'name' => 'Arup Kumar Shaha',
            'role' => 'Director/Co-Founder',
            'image' => 'arup.png',
            'socials' => [
                'instagram' => 'https://www.instagram.com/arup.k.shaha',
                'youtube-play' => 'https://www.youtube.com/@3pointcreation',
                'facebook' => 'https://www.facebook.com/arup.k.shaha',
                // 'linkedin' => 'https://www.linkedin.com/in/ranjan-rimal-559351163',
            ]
        ],
        [
            'name' => 'Ranjan Rimal',
            'role' => 'Co-Founder',
            'image' => 'ranjan.png',
            'socials' => [
                'instagram' => 'https://www.instagram.com/rj_rimal',
                'youtube-play' => 'https://www.youtube.com/@ranjanrimal1683',
                'facebook' => 'https://www.facebook.com/ranjan.rimal',
                'linkedin' => 'https://www.linkedin.com/in/ranjan-rimal-559351163',
            ]
        ]
    ];

    public static function all()
    {
        $team = new self();
        return $team->members;
    }
}
