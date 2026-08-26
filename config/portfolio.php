<?php

/*
|--------------------------------------------------------------------------
| Portfolio Content
|--------------------------------------------------------------------------
|
| Single source of truth for every content shown on the website.
| Edit the values below — no need to touch any Blade view.
|
*/

return [

    'name' => 'Nazla Virza Rahman',
    'initial' => 'NVR',
    'role' => 'Information Systems Student',
    'greeting' => "Hi, my name is",
    'tagline' => 'Interested in Android Development, UI/UX, Quality Assurance, and Database',
    'bio' => 'Information Systems student with experience in Android application development, UI/UX design, quality assurance, software testing, and database management.',

    'email' => 'virzarahman@gmail.com',
    'location' => 'Tangerang Selatan, Indonesia',
    'availability' => 'Open to Internship',
    'cv_url' => '/cv/Nazla-Virza-Rahman-CV.pdf',

    'meta' => [
        'title' => 'Nazla Virza Rahman — Information Systems Student',
        'description' => 'Portfolio of Nazla Virza Rahman, an Information Systems student with experience in Android development, UI/UX design, quality assurance, software testing, and database management.',
    ],

    'socials' => [
        ['label' => 'GitHub', 'handle' => '@nzlvirza', 'url' => 'https://github.com/nzlvirza', 'icon' => 'github'],
        ['label' => 'LinkedIn', 'handle' => 'in/virza', 'url' => 'https://www.linkedin.com/in/virza', 'icon' => 'linkedin'],
        ['label' => 'Instagram', 'handle' => '@nzlavirza', 'url' => 'https://instagram.com/nzlavirza', 'icon' => 'instagram'],
        ['label' => 'Email', 'handle' => 'virzarahman@gmail.com', 'url' => 'mailto:virzarahman@gmail.com', 'icon' => 'mail'],
    ],

    'about' => [
        'paragraphs' => [
            'I am an Information Systems student with a strong interest in application development, quality assurance, databases, and UI/UX design. I enjoy building applications through academic and personal projects while continuously improving my technical skills and understanding of software development processes.',
            'I also have previous internship experience in quality assurance, data entry, and customer support, where I tested web and mobile applications, documented testing results, processed data, and assisted users with application-related issues.',
            'I am currently looking for an internship opportunity where I can apply my technical skills, gain professional experience, and continue growing in the IT industry.',
        ],
        'facts' => [
            ['label' => 'Status', 'value' => 'Open to Internship'],
            ['label' => 'Location', 'value' => 'South Tangerang, Indonesia'],
            ['label' => 'Focus', 'value' => 'Information Technology'],
            ['label' => 'Education', 'value' => 'Information Systems'],
        ],
        'stats' => [],
    ],

    'skills' => [
        [
            'category' => 'Android & Application Development',
            'icon' => 'smartphone',
            'description' => 'Building mobile applications with cross-platform frameworks.',
            'items' => ['Flutter', 'Dart', 'Android Development'],
        ],
        [
            'category' => 'Database',
            'icon' => 'database',
            'description' => 'Managing and designing relational databases.',
            'items' => ['Supabase', 'SQLite', 'HiveDB'],
        ],
        [
            'category' => 'UI/UX Design',
            'icon' => 'palette',
            'description' => 'Designing user-centered interfaces and experiences.',
            'items' => ['Google Stitch', 'Figma'],
        ],
        [
            'category' => 'Quality Assurance & Testing',
            'icon' => 'shield-check',
            'description' => 'Ensuring software quality through systematic testing.',
            'items' => ['Quality Assurance', 'Software Testing', 'Test Documentation'],
        ],
        [
            'category' => 'Tools',
            'icon' => 'tools',
            'description' => 'Productivity and version control tools.',
            'items' => ['VSCode', 'Microsoft Excel', 'Git', 'GitHub'],
        ],
    ],

    'projects' => [
        [
            'title' => 'Student Attendance System – QR Code',
            'description' => 'An Android-based student attendance application developed as an academic project to simplify attendance using QR Code technology.',
            'technologies' => ['Flutter', 'Dart', 'QR Code', 'Mobile Application', 'Database'],
            'features' => [
                'Developed an Android application for student attendance.',
                'Implemented QR Code-based attendance functionality.',
                'Designed the application interface with a focus on usability and user experience.',
                'Implemented user authentication and role-based access for students and lecturers.',
                'Managed attendance and user data using a database.',
                'Developed the project as part of an academic Information Systems project.',
            ],
            'image' => null,
            'github' => null,
            'demo' => null,
        ],
        [
            'title' => 'Employee Payroll & Payslip System',
            'description' => 'An Android-based payroll management application designed to manage employee data, payroll processing, salary calculations, and employee payslips.',
            'technologies' => ['Flutter', 'Dart', 'Supabase', 'PostgreSQL', 'SQL', 'Android'],
            'features' => [
                'Role-based authentication for Admin, HR, and Employee with session management.',
                'Employee management with CRUD operations and search functionality.',
                'Automated payroll calculation including allowances, deductions, and progressive PPh 21.',
                'Payslip management with status tracking and edit capabilities.',
                'Secure employee self-service for viewing personal payslips.',
                'Row Level Security (RLS) enforcement at the database level.',
                'Two-step payroll data saving with audit trail for salary components.',
            ],
            'image' => null,
            'github' => null,
            'demo' => null,
        ],
    ],

    'experience' => [
        [
            'role' => 'Quality Assurance & Data Entry Intern',
            'company' => 'PT. Komunitas Ide Sejahtera',
            'location' => 'Jakarta Selatan, Indonesia',
            'period' => 'February 2024 — December 2024',
            'description' => 'Tested web and mobile applications, documented results, processed data, and provided customer support.',
            'points' => [
                'Tested web and mobile applications to check various features, conditions, and usage scenarios.',
                'Documented application testing results and different application conditions using Microsoft Excel.',
                'Identified and recorded issues or conditions found during the testing process for team evaluation.',
                'Performed data entry and processing of vote-count data submitted by KPPS members through the company\'s web and mobile applications.',
                'Checked submitted data to maintain data accuracy and consistency during the data processing process.',
                'Provided customer support through WhatsApp to assist KPPS members with application-related issues.',
                'Worked collaboratively in assigned teams to support application testing, data processing, customer support, and daily project operations.',
            ],
        ],
    ],

    'education' => [
        [
            'degree' => 'Bachelor of Information Systems',
            'school' => 'Bina Sarana Informatika University',
            'period' => 'September 2023 — August 2027 (Expected)',
            'description' => 'Focus on information systems, application development, databases, software engineering, UI/UX, and information technology.',
        ],
    ],

    'certifications' => [
        [
            'name' => 'BNSP Certification — Database Administrator',
            'issuer' => 'BNSP (Badan Nasional Sertifikasi Profesi)',
        ],
        [
            'name' => 'BNSP Certification — Program Analysis',
            'issuer' => 'BNSP (Badan Nasional Sertifikasi Profesi)',
        ],
    ],
];
