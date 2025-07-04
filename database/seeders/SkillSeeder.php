<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Frontend Technologies
            [
                'name' => 'React',
                'description' => 'A JavaScript library for building user interfaces with component-based architecture.',
                'icon' => '⚛️',
                'color' => '#61DAFB',
                'background_gradient' => 'from-cyan-400 to-blue-500',
                'level' => 95,
                'mastery_level' => 'expert',
                'years_experience' => 5,
                'category' => 'frontend',
                'type' => 'library',
                'featured' => true,
                'priority' => 10,
                'first_learned' => '2019-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'TypeScript',
                'description' => 'A strongly typed programming language that builds on JavaScript.',
                'icon' => '📘',
                'color' => '#3178C6',
                'background_gradient' => 'from-blue-500 to-blue-700',
                'level' => 90,
                'mastery_level' => 'expert',
                'years_experience' => 4,
                'category' => 'frontend',
                'type' => 'language',
                'featured' => true,
                'priority' => 9,
                'first_learned' => '2020-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'Next.js',
                'description' => 'The React framework for production with server-side rendering and static site generation.',
                'icon' => '▲',
                'color' => '#000000',
                'background_gradient' => 'from-gray-800 to-black',
                'level' => 85,
                'mastery_level' => 'advanced',
                'years_experience' => 3,
                'category' => 'frontend',
                'type' => 'framework',
                'featured' => true,
                'priority' => 8,
                'first_learned' => '2021-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'Tailwind CSS',
                'description' => 'A utility-first CSS framework for rapidly building custom user interfaces.',
                'icon' => '🎨',
                'color' => '#06B6D4',
                'background_gradient' => 'from-cyan-400 to-teal-500',
                'level' => 92,
                'mastery_level' => 'expert',
                'years_experience' => 3,
                'category' => 'frontend',
                'type' => 'framework',
                'featured' => true,
                'priority' => 7,
                'first_learned' => '2021-06-01',
                'last_used' => now()->format('Y-m-d'),
            ],

            // Backend Technologies
            [
                'name' => 'Laravel',
                'description' => 'A PHP web application framework with expressive, elegant syntax.',
                'icon' => '🎯',
                'color' => '#FF2D20',
                'background_gradient' => 'from-red-500 to-orange-500',
                'level' => 88,
                'mastery_level' => 'expert',
                'years_experience' => 4,
                'category' => 'backend',
                'type' => 'framework',
                'featured' => true,
                'priority' => 8,
                'first_learned' => '2020-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'PHP',
                'description' => 'A popular general-purpose scripting language that is especially suited to web development.',
                'icon' => '🐘',
                'color' => '#777BB4',
                'background_gradient' => 'from-purple-500 to-indigo-600',
                'level' => 85,
                'mastery_level' => 'advanced',
                'years_experience' => 5,
                'category' => 'backend',
                'type' => 'language',
                'featured' => true,
                'priority' => 7,
                'first_learned' => '2019-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'Node.js',
                'description' => 'A JavaScript runtime built on Chrome\'s V8 JavaScript engine.',
                'icon' => '🟢',
                'color' => '#339933',
                'background_gradient' => 'from-green-500 to-emerald-600',
                'level' => 82,
                'mastery_level' => 'advanced',
                'years_experience' => 3,
                'category' => 'backend',
                'type' => 'platform',
                'featured' => true,
                'priority' => 6,
                'first_learned' => '2021-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],

            // Databases
            [
                'name' => 'MySQL',
                'description' => 'An open-source relational database management system.',
                'icon' => '🗄️',
                'color' => '#4479A1',
                'background_gradient' => 'from-blue-600 to-indigo-700',
                'level' => 80,
                'mastery_level' => 'advanced',
                'years_experience' => 4,
                'category' => 'database',
                'type' => 'platform',
                'featured' => true,
                'priority' => 6,
                'first_learned' => '2020-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'PostgreSQL',
                'description' => 'A powerful, open source object-relational database system.',
                'icon' => '🐘',
                'color' => '#336791',
                'background_gradient' => 'from-blue-700 to-slate-800',
                'level' => 75,
                'mastery_level' => 'intermediate',
                'years_experience' => 2,
                'category' => 'database',
                'type' => 'platform',
                'featured' => false,
                'priority' => 5,
                'first_learned' => '2022-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],

            // DevOps & Tools
            [
                'name' => 'Docker',
                'description' => 'A platform for developing, shipping, and running applications using containerization.',
                'icon' => '🐳',
                'color' => '#2496ED',
                'background_gradient' => 'from-blue-500 to-cyan-600',
                'level' => 78,
                'mastery_level' => 'intermediate',
                'years_experience' => 3,
                'category' => 'devops',
                'type' => 'tool',
                'featured' => true,
                'priority' => 5,
                'first_learned' => '2021-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'Git',
                'description' => 'A distributed version control system for tracking changes in source code.',
                'icon' => '📝',
                'color' => '#F05032',
                'background_gradient' => 'from-orange-500 to-red-600',
                'level' => 90,
                'mastery_level' => 'expert',
                'years_experience' => 6,
                'category' => 'devops',
                'type' => 'tool',
                'featured' => true,
                'priority' => 8,
                'first_learned' => '2018-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
            [
                'name' => 'AWS',
                'description' => 'Amazon Web Services - comprehensive cloud computing platform.',
                'icon' => '☁️',
                'color' => '#FF9900',
                'background_gradient' => 'from-orange-400 to-yellow-500',
                'level' => 70,
                'mastery_level' => 'intermediate',
                'years_experience' => 2,
                'category' => 'devops',
                'type' => 'platform',
                'featured' => false,
                'priority' => 4,
                'first_learned' => '2022-01-01',
                'last_used' => now()->format('Y-m-d'),
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
