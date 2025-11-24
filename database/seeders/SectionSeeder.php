<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;
use App\Models\SectionContent;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hero Section
        $heroSection = Section::create([
            'key' => 'hero',
            'name' => 'Hero Section',
            'type' => 'hero',
            'is_active' => true,
            'order' => 1,
        ]);

        SectionContent::create([
            'section_id' => $heroSection->id,
            'key' => 'title',
            'type' => 'text',
            'value' => 'Where <span>creativity</span> meets strategy',
        ]);

        SectionContent::create([
            'section_id' => $heroSection->id,
            'key' => 'description',
            'type' => 'textarea',
            'value' => "We're a full-service design agency specializing in branding, web design, and creative strategies that elevate businesses.",
        ]);

        SectionContent::create([
            'section_id' => $heroSection->id,
            'key' => 'button_text',
            'type' => 'text',
            'value' => 'view our portfolio',
        ]);

        SectionContent::create([
            'section_id' => $heroSection->id,
            'key' => 'button_link',
            'type' => 'url',
            'value' => '/portfolio',
        ]);

        SectionContent::create([
            'section_id' => $heroSection->id,
            'key' => 'video_url',
            'type' => 'video',
            'value' => 'https://demo.awaikenthemes.com/assets/videos/rovex-video-1.mp4',
        ]);

        // Trusted Clients Section
        $trustedSection = Section::create([
            'key' => 'trusted-clients',
            'name' => 'Trusted Clients',
            'type' => 'text',
            'is_active' => true,
            'order' => 2,
        ]);

        SectionContent::create([
            'section_id' => $trustedSection->id,
            'key' => 'title',
            'type' => 'text',
            'value' => 'trusted by teams at',
        ]);

        SectionContent::create([
            'section_id' => $trustedSection->id,
            'key' => 'client_logos',
            'type' => 'json',
            'value' => json_encode([
                'images/client-logo-1.svg',
                'images/client-logo-2.svg',
                'images/client-logo-3.svg',
                'images/client-logo-4.svg',
                'images/client-logo-5.svg',
            ]),
        ]);

        // Services Section
        $servicesSection = Section::create([
            'key' => 'services',
            'name' => 'Our Services',
            'type' => 'services',
            'is_active' => true,
            'order' => 3,
        ]);

        SectionContent::create([
            'section_id' => $servicesSection->id,
            'key' => 'subtitle',
            'type' => 'text',
            'value' => 'our Services',
        ]);

        SectionContent::create([
            'section_id' => $servicesSection->id,
            'key' => 'title',
            'type' => 'text',
            'value' => 'Our innovative <span>services</span>',
        ]);
    }
}