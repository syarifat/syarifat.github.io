<?php
// Deteksi Bahasa (Default: Indonesia 'id')
$lang = isset($_GET['lang']) && $_GET['lang'] == 'en' ? 'en' : 'id';

// Data Profil (Tetap sama, deskripsi disesuaikan bahasa)
$profile_name = "Syarif Ahsani T";
$profile_role = $lang == 'id' ? "Pengembang Full Stack" : "Full Stack Developer";
$profile_photo = "foto.jpg"; 

// Teks UI Statis (Kamus Penerjemah)
$text = [
    'home' => $lang == 'id' ? "Beranda" : "Home",
    'services' => $lang == 'id' ? "Layanan" : "Services",
    'projects' => $lang == 'id' ? "Proyek" : "Projects",
    'contact' => $lang == 'id' ? "Kontak" : "Contact",
    'greeting' => $lang == 'id' ? "Halo, saya" : "Hi there, I'm",
    'hero_title_1' => $lang == 'id' ? "Membangun Pengalaman" : "Building Digital",
    'hero_title_2' => $lang == 'id' ? "Digital." : "Experiences.",
    'hero_desc' => $lang == 'id' 
        ? "Saya adalah pengembang perangkat lunak dan insinyur jaringan yang berfokus pada web, seluler, IoT, dan infrastruktur TI. Saya membangun solusi digital terintegrasi yang berpusat pada pengguna dengan kualitas kode dan keamanan yang kuat." 
        : "I am a passionate software developer and network engineer specializing in web, mobile, IoT, and IT infrastructure. I focus on building integrated, user-centric digital solutions with strong code quality and security.",
    'exp_years' => $lang == 'id' ? "Tahun Pengalaman" : "Years Exp.",
    'total_projects' => $lang == 'id' ? "Total Proyek" : "Projects",
    'what_i_do' => $lang == 'id' ? "Layanan Saya" : "What I Do",
    'what_i_do_desc' => $lang == 'id' ? "Spesialisasi teknis yang saya tawarkan." : "Technical specialization I offer.",
    'featured_projects' => $lang == 'id' ? "Proyek Unggulan" : "Featured Projects",
    'featured_projects_desc' => $lang == 'id' ? "Beberapa proyek terbaik yang telah dikerjakan." : "Some of the best projects showcased.",
    'filter_all' => $lang == 'id' ? "Semua" : "All",
    'view_demo' => $lang == 'id' ? "Lihat Demo" : "View Demo",
    'live_demo' => $lang == 'id' ? "Demo Langsung" : "Live Demo",
    'code' => $lang == 'id' ? "Kode" : "Code",
    'cta_title' => $lang == 'id' ? "Memiliki ide proyek?" : "Have a project in mind?",
    'cta_desc' => $lang == 'id' ? "Mari diskusikan bagaimana saya dapat membantu mewujudkan visi digital Anda." : "Let's discuss how I can help bring your digital vision to life.",
    'connect' => $lang == 'id' ? "Terhubung" : "Connect",
    'footer_brand_desc' => $lang == 'id' ? "Menghadirkan solusi terintegrasi di Web, Aplikasi Android, IoT, dan Jaringan untuk masa depan yang lebih cerdas dan terhubung." : "Delivering integrated solutions across Web, Android Apps, IoT, and Networking for a smarter, connected future.",
    'rights' => $lang == 'id' ? "Hak cipta dilindungi undang-undang." : "All rights reserved."
];

// Data Services (Bilingual)
if ($lang == 'id') {
    $services = [
        [
            "icon" => "fa-laptop-code",
            "title" => "Pemrograman",
            "desc" => "Pengembangan Web & Android",
            "items" => [
                "Web Fullstack (Laravel, PHP Native)",
                "Aplikasi Seluler (Kotlin, Jetpack Compose)",
                "Frontend (HTML, CSS, JS, Bootstrap)",
                "Manajemen REST API & Basis Data"
            ]
        ],
        [
            "icon" => "fa-network-wired",
            "title" => "Jaringan",
            "desc" => "Infrastruktur & Keamanan Jaringan",
            "items" => [
                "Konfigurasi & Manajemen Mikrotik",
                "Administrasi Server Linux",
                "Keamanan Jaringan & VPN",
                "Pemecahan Masalah & Pemeliharaan"
            ]
        ],
        [
            "icon" => "fa-microchip",
            "title" => "IoT & Embedded",
            "desc" => "Integrasi Perangkat Cerdas",
            "items" => [
                "Mikrokontroler (ESP32, Arduino, NodeMCU)",
                "Integrasi Sensor & Aktuator",
                "Protokol IoT (MQTT, Permintaan HTTP)",
                "Desain Sirkuit & Pembuatan Prototipe"
            ]
        ]
    ];
} else {
    // English Version
    $services = [
        [
            "icon" => "fa-laptop-code",
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
            "icon" => "fa-network-wired",
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
            "icon" => "fa-microchip",
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
}

// Data Projects (Bilingual)
// Kategori juga diterjemahkan agar filter berfungsi sesuai bahasa
if ($lang == 'id') {
    $projects = [
        [
            "title" => "KaSiPay",
            "category" => "Pengembangan Web",
            "image" => "https://images.unsplash.com/photo-1647427017067-8f33ccbae493?q=80&w=870&auto=format&fit=crop",
            "desc" => "Sistem pembayaran kantin non-tunai menggunakan teknologi RFID untuk mempercepat transaksi, menyederhanakan manajemen saldo, dan meningkatkan efisiensi operasional di sekolah.",
            "stack" => ["Laravel", "Javascript", "MySQL"],
            "demo_link" => "https://kelompok3.karyabersama.online/",
            "repo_link" => "#"
        ],
        [
            "title" => "siPredi",
            "category" => "Pengembangan Web",
            "image" => "https://images.unsplash.com/photo-1747674148491-51f8a5c723db?q=80&w=866&auto=format&fit=crop",
            "desc" => "Sistem presensi siswa cerdas yang memanfaatkan teknologi RFID untuk pelacakan waktu nyata, terintegrasi dengan notifikasi WhatsApp otomatis bagi orang tua/wali.",
            "stack" => ["Laravel", "Javascript", "MySQL"],
            "demo_link" => "https://vercel-siprediv2.vercel.app/",
            "repo_link" => "#"
        ],
        [
            "title" => "Sistem Penggajian Otomatis",
            "category" => "Pengembangan Web",
            "image" => "https://images.unsplash.com/photo-1711606815631-38d32cdaec3e?q=80&w=870&auto=format&fit=crop",
            "desc" => "Sistem manajemen penggajian efisien yang secara otomatis menghitung gaji dan menerapkan potongan atas kesalahan kerja untuk menjaga standar kinerja.",
            "stack" => ["Laravel", "Javascript", "MySQL"],
            "demo_link" => "https://sistem-penggajian.vercel.app/",
            "repo_link" => "#"
        ],
        [
            "title" => "Inventory Gudang",
            "category" => "Pengembangan Web",
            "image" => "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=870&auto=format&fit=crop",
            "desc" => "Sistem ini mengelola inventaris, transaksi barang, data pelanggan dan pemasok, satuan, jenis barang, dan peran pengguna di gudang terpusat.",
            "stack" => ["Laravel", "Javascript", "MySQL"],
            "demo_link" => "https://inventorygudang.vercel.app/",
            "repo_link" => "#"
        ],
        [
            "title" => "Proyek IoT Dummy",
            "category" => "Pengembangan IoT",
            "image" => "https://images.unsplash.com/photo-1614846027182-cecfee3a427b?q=80&w=870&auto=format&fit=crop",
            "desc" => "Contoh deskripsi proyek untuk pengembangan IoT dan integrasi perangkat keras.",
            "stack" => ["C++", "PHP", "MySQL"],
            "demo_link" => "#",
            "repo_link" => "#"
        ],
        [
            "title" => "Aplikasi Android Dummy",
            "category" => "Pengembangan Android",
            "image" => "https://images.unsplash.com/photo-1480694313141-fce5e697ee25?q=80&w=870&auto=format&fit=crop",
            "desc" => "Contoh deskripsi aplikasi mobile berbasis Android menggunakan Kotlin.",
            "stack" => ["Kotlin", "PHP", "MySQL"],
            "demo_link" => "#",
            "repo_link" => "#"
        ]
    ];
} else {
    // English Version
    $projects = [
        [
            "title" => "KaSiPay",
            "category" => "Web Development",
            "image" => "https://images.unsplash.com/photo-1647427017067-8f33ccbae493?q=80&w=870&auto=format&fit=crop",
            "desc" => "A cashless canteen payment system using RFID technology to accelerate transactions, simplify balance management, and improve operational efficiency in schools.",
            "stack" => ["Laravel", "Javascript", "MySQL"],
            "demo_link" => "https://kelompok3.karyabersama.online/",
            "repo_link" => "#"
        ],
        [
            "title" => "siPredi",
            "category" => "Web Development",
            "image" => "https://images.unsplash.com/photo-1747674148491-51f8a5c723db?q=80&w=866&auto=format&fit=crop",
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
}
?>