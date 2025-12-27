<?php
// Data Diri
$profile_name = "Syarif Ahsani T";
$profile_role = "Full Stack Developer";
$profile_photo = "foto.jpg"; // Pastikan file foto ada di folder yang sama
$profile_desc = "I am a passionate software developer and network engineer specializing in web, mobile, IoT, and IT infrastructure. I focus on building integrated, user-centric digital solutions with strong code quality and security. Always eager to learn, I enjoy connecting technology fields to deliver real impact and continuous innovation.";

$services = [
    [
        "icon" => "fa-laptop-code", // Ikon Laptop/Coding
        "title" => "Programming",
        "desc" => "Web & Android Development",
        "items" => [
            "Fullstack Web (Laravel, PHP Native)",
            "Mobile Apps (Kotlin, Jetpack Compose)",
            "Frontend (HTML, CSS, JS, Bootstrap)",
            "REST API & Database Management"
        ]
    ],
    [
        "icon" => "fa-network-wired", // Ikon Jaringan
        "title" => "Networking",
        "desc" => "Network Infrastructure & Security",
        "items" => [
            "Mikrotik Configuration & Management",
            "Linux Server Administration",
            "Network Security & VPN",
            "Troubleshooting & Maintenance"
        ]
    ],
    [
        "icon" => "fa-microchip", // Ikon Chip/IoT
        "title" => "IoT & Embedded",
        "desc" => "Smart Hardware Integration",
        "items" => [
            "Microcontroller (ESP32, Arduino, NodeMCU)",
            "Sensor Integration & Actuators",
            "IoT Protocols (MQTT, HTTP Request)",
            "Circuit Design & Prototyping"
        ]
    ]
];

// Proyek-Proyek
$projects = [
    [
        "title" => "KaSiPay",
        "category" => "Web Development",
        "image" => "https://images.unsplash.com/photo-1647427017067-8f33ccbae493?q=80&w=870&auto=format&fit=crop", // Ganti dengan screenshot asli
        "desc" => "A cashless canteen payment system using RFID technology to accelerate transactions, simplify balance management, and improve operational efficiency in schools.",
        "stack" => ["Laravel", "Javascript", "MySQL"],
        "demo_link" => "https://kelompok3.karyabersama.online/",
        "repo_link" => "#"
    ],
    [
        "title" => "siPredi",
        "category" => "Web Development",
        "image" => "https://images.unsplash.com/photo-1747674148491-51f8a5c723db?q=80&w=866&auto=format&fit=crop", // Ganti dengan screenshot asli
        "desc" => "Smart student attendance system utilizing RFID technology for real-time tracking, integrated with automated WhatsApp notifications for parents/guardians.",
        "stack" => ["Laravel", "Javascript", "MySQL"],
        "demo_link" => "https://vercel-siprediv2.vercel.app/",
        "repo_link" => "#"
    ],
    [
        "title" => "Sistem Penggajian Otomatis",
        "category" => "Web Development",
        "image" => "https://images.unsplash.com/photo-1711606815631-38d32cdaec3e?q=80&w=870&auto=format&fit=crop",
        "desc" => "Efficient payroll management system that automatically calculates salaries and applies deductions for workplace errors to maintain performance standards.",
        "stack" => ["Laravel", "Javascript", "MySQL"],
        "demo_link" => "https://sistem-penggajian.vercel.app/",
        "repo_link" => "#"
    ],
    [
        "title" => "Inventory Gudang",
        "category" => "Web Development",
        "image" => "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=870&auto=format&fit=crop",
        "desc" => "This system manages inventory, item transactions, customer and supplier data, units, item types, and user roles in a centralized warehouse.",
        "stack" => ["Laravel", "Javascript", "MySQL"],
        "demo_link" => "https://inventorygudang.vercel.app/",
        "repo_link" => "#"
    ],
    [
        "title" => "Dummy IoT Project",
        "category" => "IoT Development",
        "image" => "https://images.unsplash.com/photo-1614846027182-cecfee3a427b?q=80&w=870&auto=format&fit=crop",
        "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        "stack" => ["C++", "PHP", "MySQL"],
        "demo_link" => "#",
        "repo_link" => "#"
    ],
    [
        "title" => "Dummy Android App",
        "category" => "Android Development",
        "image" => "https://images.unsplash.com/photo-1480694313141-fce5e697ee25?q=80&w=870&auto=format&fit=crop",
        "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        "stack" => ["Kotlin", "PHP", "MySQL"],
        "demo_link" => "#",
        "repo_link" => "#"
    ]
];
?>