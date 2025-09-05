<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Member;

class HomeController extends Controller
{
    /**
     * Display the homepage
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the research page
     */
    public function research()
    {
        return view('research.index');
    }

    /**
     * Display the team page
     */
    public function team()
    {
        $director = Member::where('lab_location', 'director')->active()->featured()->first();
        $aucklandMembers = Member::where('lab_location', 'auckland')->active()->ordered()->get();
        $adelaideMembers = Member::where('lab_location', 'adelaide')->active()->ordered()->get();
        
        return view('team', compact('director', 'aucklandMembers', 'adelaideMembers'));
    }

    /**
     * Display the news page
     */
    public function news()
    {
        return view('news.index');
    }

    /**
     * Display the events page
     */
    public function events()
    {
        return view('events.index');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Display team member detail page
     */
    public function teamMember($member)
    {
        $teamMembers = $this->getAllTeamMembers();

        // Find the team member or return 404
        if (!isset($teamMembers[$member])) {
            abort(404);
        }

        return view('team.member-detail', [
            'member' => $teamMembers[$member]
        ]);
    }

    /**
     * Get all team members data
     */
    private function getAllTeamMembers()
    {
        return [
            // Auckland Lab Members (16)
            'sarah-chen' => $this->createMemberData('Dr. Sarah Chen', 'Senior AR Researcher', 'Auckland Lab', ['Augmented Reality', 'Computer Vision', 'Human-Computer Interaction']),
            'james-rodriguez' => $this->createMemberData('Dr. James Rodriguez', 'VR Research Lead', 'Auckland Lab', ['Virtual Reality', 'Therapeutic Applications', 'Immersive Environments']),
            'emily-watson' => $this->createMemberData('Dr. Emily Watson', 'Psychology Researcher', 'Auckland Lab', ['Psychology', 'Human-Computer Interaction', 'Behavioral Analysis']),
            'michael-kim' => $this->createMemberData('Dr. Michael Kim', 'AI Systems Developer', 'Auckland Lab', ['Artificial Intelligence', 'Machine Learning', 'System Architecture']),
            'lisa-thompson' => $this->createMemberData('Dr. Lisa Thompson', 'UX Research Director', 'Auckland Lab', ['User Experience', 'Human-Centered Design', 'Interface Design']),
            'alex-patel' => $this->createMemberData('Dr. Alex Patel', 'Collaborative Systems Lead', 'Auckland Lab', ['Collaborative Systems', 'Distributed Computing', 'Team Interaction']),
            'rachel-green' => $this->createMemberData('Dr. Rachel Green', 'Graduate Program Coordinator', 'Auckland Lab', ['Education', 'Program Management', 'Academic Research']),
            'david-lee' => $this->createMemberData('Dr. David Lee', 'Machine Learning Researcher', 'Auckland Lab', ['Machine Learning', 'Neural Networks', 'Deep Learning']),
            'anna-martinez' => $this->createMemberData('Dr. Anna Martinez', 'Interface Design Lead', 'Auckland Lab', ['Interface Design', 'User Experience', 'Visual Design']),
            'robert-taylor' => $this->createMemberData('Dr. Robert Taylor', 'Computer Vision Specialist', 'Auckland Lab', ['Computer Vision', 'Image Processing', 'Pattern Recognition']),
            'jennifer-liu' => $this->createMemberData('Dr. Jennifer Liu', 'Emotion Recognition Expert', 'Auckland Lab', ['Emotion Recognition', 'Affective Computing', 'Facial Analysis']),
            'thomas-wilson' => $this->createMemberData('Dr. Thomas Wilson', 'AR Developer', 'Auckland Lab', ['Augmented Reality', 'Mobile Development', 'Application Design']),
            'maria-garcia' => $this->createMemberData('Dr. Maria Garcia', 'Human Factors Researcher', 'Auckland Lab', ['Human Factors', 'Ergonomics', 'User Studies']),
            'kevin-brown' => $this->createMemberData('Dr. Kevin Brown', 'Software Architecture Lead', 'Auckland Lab', ['Software Architecture', 'System Design', 'Technical Leadership']),
            'sophie-anderson' => $this->createMemberData('Dr. Sophie Anderson', 'Data Science Researcher', 'Auckland Lab', ['Data Science', 'Statistical Analysis', 'Research Methods']),
            'daniel-clark' => $this->createMemberData('Dr. Daniel Clark', 'Systems Integration Specialist', 'Auckland Lab', ['Systems Integration', 'Platform Development', 'Technical Architecture']),

            // Adelaide Lab Members (14)
            'richard-parker' => $this->createMemberData('Dr. Richard Parker', 'AI Research Lead', 'Adelaide Lab', ['Artificial Intelligence', 'Machine Learning', 'Research Leadership']),
            'helen-chang' => $this->createMemberData('Dr. Helen Chang', 'Neural Networks Specialist', 'Adelaide Lab', ['Neural Networks', 'Deep Learning', 'AI Architecture']),
            'mark-thompson' => $this->createMemberData('Dr. Mark Thompson', 'Deep Learning Researcher', 'Adelaide Lab', ['Deep Learning', 'Neural Networks', 'AI Research']),
            'patricia-davis' => $this->createMemberData('Dr. Patricia Davis', 'Behavioral Analysis Expert', 'Adelaide Lab', ['Behavioral Analysis', 'Psychology', 'Human Behavior']),
            'steven-miller' => $this->createMemberData('Dr. Steven Miller', 'Signal Processing Lead', 'Adelaide Lab', ['Signal Processing', 'Digital Signal Processing', 'Audio Analysis']),
            'linda-johnson' => $this->createMemberData('Dr. Linda Johnson', 'Computational Psychologist', 'Adelaide Lab', ['Computational Psychology', 'Cognitive Science', 'Mental Health']),
            'christopher-white' => $this->createMemberData('Dr. Christopher White', 'Algorithm Developer', 'Adelaide Lab', ['Algorithm Development', 'Optimization', 'Mathematical Modeling']),
            'margaret-hall' => $this->createMemberData('Dr. Margaret Hall', 'Data Mining Specialist', 'Adelaide Lab', ['Data Mining', 'Knowledge Discovery', 'Big Data Analytics']),
            'paul-young' => $this->createMemberData('Dr. Paul Young', 'Machine Learning Engineer', 'Adelaide Lab', ['Machine Learning Engineering', 'MLOps', 'Production Systems']),
            'elizabeth-moore' => $this->createMemberData('Dr. Elizabeth Moore', 'Cognitive Science Researcher', 'Adelaide Lab', ['Cognitive Science', 'Brain Research', 'Neuroscience']),
            'andrew-scott' => $this->createMemberData('Dr. Andrew Scott', 'Statistical Analysis Lead', 'Adelaide Lab', ['Statistical Analysis', 'Data Analysis', 'Research Methodology']),
            'nancy-adams' => $this->createMemberData('Dr. Nancy Adams', 'Pattern Recognition Expert', 'Adelaide Lab', ['Pattern Recognition', 'Machine Learning', 'Image Analysis']),
            'joseph-baker' => $this->createMemberData('Dr. Joseph Baker', 'Natural Language Processing Lead', 'Adelaide Lab', ['Natural Language Processing', 'Text Mining', 'Language Models']),
            'carol-nelson' => $this->createMemberData('Dr. Carol Nelson', 'Emotion Analytics Researcher', 'Adelaide Lab', ['Emotion Analytics', 'Sentiment Analysis', 'Affective Computing']),
        ];
    }

    /**
     * Create standardized team member data structure
     */
    private function createMemberData($name, $title, $lab, $researchAreas = [])
    {
        $nameSlug = Str::slug(str_replace('Dr. ', '', $name));
        $isAdelaide = $lab === 'Adelaide Lab';
        
        return [
            'name' => $name,
            'title' => $title,
            'lab' => $lab,
            'img' => 'assets/images/team/team.jpg',
            'name_slug' => $nameSlug,
            'biography' => $name . ' is a dedicated researcher at the Empathic Computing Research Lab, specializing in ' . strtolower($title) . '. With extensive experience in empathic computing technologies, they contribute to advancing our understanding of human-computer emotional interactions through innovative research and development.',
            'research_areas' => $researchAreas,
            'education' => [
                ['degree' => 'Ph.D. in Computer Science', 'institution' => $isAdelaide ? 'University of Adelaide' : 'University of Auckland', 'year' => rand(2010, 2018)],
                ['degree' => 'M.Sc. in Computer Science', 'institution' => $isAdelaide ? 'University of South Australia' : 'Victoria University of Wellington', 'year' => rand(2005, 2012)],
                ['degree' => 'B.Sc. in Computer Science', 'institution' => $isAdelaide ? 'Flinders University' : 'University of Otago', 'year' => rand(2000, 2008)]
            ],
            'experience' => [
                ['position' => $title, 'organization' => 'Empathic Computing Research Lab', 'duration' => rand(2015, 2020) . ' - Present'],
                ['position' => 'Research Scientist', 'organization' => $isAdelaide ? 'CSIRO' : 'HIT Lab NZ', 'duration' => rand(2010, 2018) . ' - ' . rand(2015, 2020)],
                ['position' => 'Research Assistant', 'organization' => $isAdelaide ? 'University of Adelaide' : 'University of Auckland', 'duration' => rand(2008, 2015) . ' - ' . rand(2010, 2018)]
            ],
            'publications' => [
                [
                    'title' => 'Advances in ' . $researchAreas[0] . ' for Empathic Computing',
                    'journal' => 'IEEE Transactions on Affective Computing',
                    'year' => '2024',
                    'abstract' => 'This research explores new methodologies in ' . strtolower($researchAreas[0]) . ' to enhance empathic computing systems and improve human-computer emotional interactions.',
                    'url' => '#'
                ],
                [
                    'title' => 'Innovative Approaches to ' . (isset($researchAreas[1]) ? $researchAreas[1] : 'Computing Research'),
                    'journal' => 'ACM Transactions on Interactive Intelligent Systems',
                    'year' => '2023',
                    'abstract' => 'A comprehensive study on implementing ' . strtolower(isset($researchAreas[1]) ? $researchAreas[1] : 'computing research') . ' in real-world empathic computing applications.',
                    'url' => '#'
                ]
            ],
            'projects' => [
                [
                    'title' => 'Empathic ' . $researchAreas[0] . ' Platform',
                    'description' => 'Developing cutting-edge ' . strtolower($researchAreas[0]) . ' solutions for enhanced human-computer empathic interactions',
                    'status' => 'Active',
                    'color' => $isAdelaide ? 'emerald-600' : 'blue-600',
                    'icon' => $isAdelaide ? 'brain' : 'eye'
                ],
                [
                    'title' => 'Cross-Lab Collaboration Initiative',
                    'description' => 'Working with both Auckland and Adelaide labs to advance empathic computing research',
                    'status' => 'In Progress',
                    'color' => 'violet-600',
                    'icon' => 'users'
                ]
            ]
        ];
    }
}