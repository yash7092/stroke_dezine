<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($project)
    {
        $projects = [
            'project-1' => [
                'title' => 'Creative Branding Project',
                'description' => 'A comprehensive branding project that showcases our creative design capabilities.',
                'mainImage' => 'images/01.jpg',
                'relatedImages' => [
                    [
                        'src' => 'images/01.jpg',
                        'title' => 'Logo Design',
                        'description' => 'Modern and minimalist logo design for the brand identity.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/02.jpg',
                        'title' => 'Business Card Mockup',
                        'description' => 'Professional business card design with brand elements.',
                        'size' => 'medium'
                    ],
                    [
                        'src' => 'images/03.jpg',
                        'title' => 'Website Design',
                        'description' => 'Responsive website design showcasing the brand.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/04.jpg',
                        'title' => 'Social Media Graphics',
                        'description' => 'Consistent social media graphics for brand promotion.',
                        'size' => 'small'
                    ],
                    [
                        'src' => 'images/01.jpg',
                        'title' => 'Print Materials',
                        'description' => 'Brochures and flyers designed for print marketing.',
                        'size' => 'medium'
                    ]
                ]
            ],
            'project-2' => [
                'title' => 'Embroidery Design Collection',
                'description' => 'A stunning web design project that demonstrates our technical expertise.',
                'mainImage' => 'images/02.jpg',
                'relatedImages' => [
                    [
                        'src' => 'images/EMB/1.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/2.jpg',
                        'title' => 'Mobile Responsive',
                        'description' => 'Mobile-first design approach for better user experience.',
                        'size' => 'medium'
                    ],
                    [
                        'src' => 'images/EMB/3.jpg',
                        'title' => 'User Interface',
                        'description' => 'Intuitive user interface design with smooth interactions.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/4.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/5.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/6.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/7.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/8.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/9.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/EMB/10.jpg',
                        'title' => 'Homepage Design',
                        'description' => 'Eye-catching homepage with modern design elements.',
                        'size' => 'large'
                    ],
                ]
            ],
            'project-3' => [
                'title' => 'Apparel Design Collection',
                'description' => 'A complete apparel design collection showcasing fashion and style.',
                'mainImage' => 'images/03.jpg',
                'relatedImages' => [
                    [
                        'src' => 'images/03.jpg',
                        'title' => 'T-Shirt Collection',
                        'description' => 'Creative t-shirt designs for different target audiences.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/04.jpg',
                        'title' => 'Fashion Illustration',
                        'description' => 'Detailed fashion illustrations for the collection.',
                        'size' => 'medium'
                    ],
                    [
                        'src' => 'images/01.jpg',
                        'title' => 'Pattern Design',
                        'description' => 'Unique pattern designs for fabric applications.',
                        'size' => 'small'
                    ],
                    [
                        'src' => 'images/02.jpg',
                        'title' => 'Product Mockups',
                        'description' => 'Realistic product mockups for marketing materials.',
                        'size' => 'medium'
                    ],
                    [
                        'src' => 'images/03.jpg',
                        'title' => 'Brand Identity',
                        'description' => 'Complete brand identity for the apparel line.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/04.jpg',
                        'title' => 'Marketing Materials',
                        'description' => 'Comprehensive marketing materials for the collection.',
                        'size' => 'small'
                    ]
                ]
            ],
            'project-4' => [
                'title' => 'Raster To Vector Collection',
                'description' => 'A comprehensive digital marketing campaign with creative visuals.',
                'mainImage' => 'images/04.jpg',
                'relatedImages' => [
                    [
                        'src' => 'images/RasterToVector/Vector_01.jpg',
                        'title' => 'Campaign Banner',
                        'description' => 'Eye-catching banner design for digital advertising.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/RasterToVector/Vector_02.jpg',
                        'title' => 'Social Media Graphics',
                        'description' => 'Engaging social media content for the campaign.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/RasterToVector/Vector_03.jpg',
                        'title' => 'Email Marketing',
                        'description' => 'Professional email marketing templates.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/RasterToVector/Vector_04.jpg',
                        'title' => 'Landing Page',
                        'description' => 'High-converting landing page design.',
                        'size' => 'large'
                    ],
                    [
                        'src' => 'images/RasterToVector/Vector_05.jpg',
                        'title' => 'Digital Ads',
                        'description' => 'Creative digital advertising materials.',
                        'size' => 'large'
                    ]
                ]
            ]
        ];

        if (!isset($projects[$project])) {
            abort(404);
        }

        $projectData = $projects[$project];

        return view('project-details', [
            'projectTitle' => $projectData['title'],
            'projectDescription' => $projectData['description'],
            'projectSlug' => $project,
            'mainImage' => $projectData['mainImage'],
            'relatedImages' => $projectData['relatedImages'],
            'showThreeColumns' => in_array($project, ['project-2', 'project-4'])
        ]);
    }
} 