<?php

namespace App\Testimonial;

class Testimonial
{
    private array $testimonials = [];

    public function init()
    {
        $this->add([
            'name' => 'Anna Martinez',
            'role' => 'Creative Director',
            'company' => 'Dreamscape Productions',
            'message' => 'Working with 3pointcreation was an absolute pleasure. Their team understood our vision perfectly and transformed it into a stunning visual story. The level of creativity and professionalism they brought to the table was beyond our expectations. I highly recommend them for anyone looking to elevate their video production.'
        ]);

        $this->add([
            'name' => 'Jason Reed',
            'role' => 'Musician',
            'company' => '',
            'message' => 'The cinematography on our music video was incredible! The 3pointcreation team knew exactly how to capture the mood we wanted and brought such a unique style to every shot. They worked seamlessly from start to finish, making the entire process stress-free and fun.'
        ]);

        $this->add([
            'name' => 'Emily Thompson',
            'role' => 'Marketing Manager',
            'company' => 'NovaTech',
            'message' => 'We hired 3pointcreation to produce a commercial for our new product launch, and the results were phenomenal. The final video perfectly captured the energy and appeal of our brand. Their attention to detail, from lighting to camera angles, was truly impressive.',
        ]);

        $this->add([
            'name' => 'David Miller',
            'role' => 'Director',
            'company' => 'Horizon Films',
            'message' => 'I can’t recommend 3pointcreation enough for their work on our documentary. They brought a cinematic quality to every shot, making the story not only informative but also visually captivating. Their team is talented, responsive, and incredibly easy to work with.',
        ]);
    }

    public function add(array $data)
    {
        $this->testimonials[] = $data;
        return $this;
    }

    public static function all()
    {
        $testi = new self();
        $testi->init();
        return $testi->testimonials;
    }

}
