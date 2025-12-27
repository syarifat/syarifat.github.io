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
        "title" => "Sistem IoT Monitoring",
        "category" => "IoT & Embedded",
        "image" => "https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1000&auto=format&fit=crop", // Ganti dengan screenshot asli
        "desc" => "Sistem monitoring suhu dan kelembaban realtime menggunakan ESP32 dan Firebase.",
        "stack" => ["C++", "Firebase", "Android"],
        "demo_link" => "https://demo-project-anda.com",
        "repo_link" => "https://github.com/username/repo"
    ],
    [
        "title" => "E-Commerce Dashboard",
        "category" => "Web Development",
        "image" => "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop",
        "desc" => "Dashboard admin untuk manajemen stok barang dengan fitur reporting otomatis.",
        "stack" => ["Laravel", "MySQL", "Bootstrap"],
        "demo_link" => "#",
        "repo_link" => "#"
    ],
    [
        "title" => "Aplikasi Presensi QR",
        "category" => "Android App",
        "image" => "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop",
        "desc" => "Aplikasi absensi mobile berbasis lokasi (GPS) dan QR Code scanner.",
        "stack" => ["Kotlin", "Jetpack Compose", "API"],
        "demo_link" => "#",
        "repo_link" => "#"
    ]
];
?>