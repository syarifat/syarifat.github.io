<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Generator | SAT Project</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 24 24%22 fill=%22none%22 stroke=%22%234f46e5%22 stroke-width=%222%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22><path d=%22M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z%22/></svg>">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5', /* Indigo */
                        primaryDark: '#4338ca',
                    }
                }
            }
        }
    </script>

    <script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>

    <style>
        .option-card { transition: all 0.2s ease-in-out; }
        .option-card:hover { transform: translateY(-2px); }
        .option-card.active {
            border-color: #4f46e5;
            background-color: #eef2ff;
            box-shadow: 0 0 0 2px #4f46e5;
        }
        /* Animasi fade in */
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fade-in { animation: fadeIn 0.5s ease-out forwards; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-indigo-100 selection:text-indigo-700">

    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center gap-3">
                    <div class="bg-gradient-to-tr from-primary to-purple-600 text-white p-2 rounded-xl shadow-lg shadow-indigo-500/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-slate-800">QR Generator | SAT Project</span>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <div class="lg:col-span-7 space-y-6 pb-20">
                
                <div class="bg-white p-6 rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-gray-100 animate-fade-in" style="animation-delay: 0.1s;">
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Konten QR Code</label>
                    <div class="relative">
                        <input type="text" id="urlInput" 
                            class="w-full pl-10 rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-primary focus:ring-4 focus:ring-indigo-500/10 py-3 transition-all duration-200"
                            placeholder="https://...">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-gray-100 animate-fade-in" style="animation-delay: 0.2s;">
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Pola Tengah (Body)</h3>
                    <div class="grid grid-cols-3 sm:grid-cols-6 gap-3">
                        <div class="option-card active cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('body', 'square', this)">
                            <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" fill="currentColor"/></svg>
                        </div>
                        <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('body', 'dots', this)">
                            <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><circle cx="12" cy="12" r="8" fill="currentColor"/></svg>
                        </div>
                        <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('body', 'rounded', this)">
                            <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="5" fill="currentColor"/></svg>
                        </div>
                        <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('body', 'extra-rounded', this)">
                            <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="8" fill="currentColor"/></svg>
                        </div>
                        <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('body', 'classy', this)">
                            <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><path d="M4 4h16v16H4z M6 6v12h12V6z" fill="currentColor"/></svg>
                        </div>
                         <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('body', 'classy-rounded', this)">
                            <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="4" fill="currentColor" fill-opacity="0.7"/></svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-gray-100 animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="flex flex-col sm:flex-row gap-8">
                        <div class="flex-1">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Bingkai Mata</h3>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="option-card active cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('eyeFrame', 'square', this)">
                                    <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><path d="M2 2h20v20H2z M7 7h10v10H7z" fill="currentColor" fill-rule="evenodd"/></svg>
                                </div>
                                <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('eyeFrame', 'extra-rounded', this)">
                                    <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><path d="M2 10a8 8 0 0 1 8-8h4a8 8 0 0 1 8 8v4a8 8 0 0 1-8 8h-4a8 8 0 0 1-8-8z M7 10a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v4a3 3 0 0 1-3 3h-4a3 3 0 0 1-3-3z" fill="currentColor" fill-rule="evenodd"/></svg>
                                </div>
                                 <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('eyeFrame', 'dot', this)">
                                    <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" fill="currentColor" fill-rule="evenodd"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Bola Mata</h3>
                            <div class="grid grid-cols-3 gap-3">
                                 <div class="option-card active cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('eyeBall', 'square', this)">
                                    <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><rect x="7" y="7" width="10" height="10" fill="currentColor"/></svg>
                                </div>
                                 <div class="option-card cursor-pointer bg-white border border-gray-200 rounded-xl p-2 h-14 flex items-center justify-center" onclick="selectOption('eyeBall', 'dot', this)">
                                    <svg class="w-6 h-6 text-slate-600" viewBox="0 0 24 24"><circle cx="12" cy="12" r="6" fill="currentColor"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-gray-100 animate-fade-in" style="animation-delay: 0.4s;">
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Warna & Logo</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-600">Warna QR</label>
                            <div class="flex items-center gap-3 p-2 border border-gray-200 rounded-xl bg-gray-50">
                                <input type="color" id="colorDots" value="#4f46e5" class="h-8 w-8 cursor-pointer border-none bg-transparent p-0 rounded">
                                <span class="text-sm text-gray-500 font-mono">Hex Color</span>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-600">Background</label>
                            <div class="flex items-center gap-3 p-2 border border-gray-200 rounded-xl bg-gray-50">
                                <input type="color" id="colorBg" value="#ffffff" class="h-8 w-8 cursor-pointer border-none bg-transparent p-0 rounded">
                                <span class="text-sm text-gray-500 font-mono">Hex Color</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Upload Logo (Tengah)</label>
                        <input type="file" id="logoFile" accept="image/*" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-xs file:font-semibold
                            file:bg-indigo-50 file:text-indigo-700
                            hover:file:bg-indigo-100
                        "/>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-5 relative hidden lg:block h-full">
                <div class="sticky top-24 space-y-4">
                    
                    <div class="bg-white rounded-3xl shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] border border-gray-100 overflow-hidden">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-4 text-center">
                            <span class="text-white/90 text-sm font-semibold tracking-wide">Live Preview</span>
                        </div>
                        
                        <div class="p-8 flex flex-col items-center justify-center bg-slate-50 min-h-[300px]">
                            <div id="canvas-qr" class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 transform transition hover:scale-105 duration-300"></div>
                        </div>

                        <div class="p-5 bg-white border-t border-gray-100">
                            <button onclick="downloadQR()" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3.5 px-6 rounded-xl transition-all shadow-lg hover:shadow-xl hover:-translate-y-1 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                Download PNG
                            </button>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="text-xs text-gray-400">Hasil resolusi tinggi siap cetak</p>
                    </div>
                </div>
            </div>

            <div class="col-span-1 lg:hidden mt-4">
                 <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center">
                    <h3 class="font-bold mb-4">Preview</h3>
                    <div id="canvas-qr-mobile" class="flex justify-center mb-4"></div>
                    <button onclick="downloadQR()" class="w-full bg-slate-900 text-white font-bold py-3 rounded-xl">Download PNG</button>
                 </div>
            </div>

        </div>
    </main>

    <script>
        let currentConfig = {
            width: 280,
            height: 280,
            data: "https://google.com",
            image: "",
            dotsOptions: { color: "#4f46e5", type: "square" },
            backgroundOptions: { color: "#ffffff" },
            cornersSquareOptions: { type: "square", color: "#4f46e5" },
            cornersDotOptions: { type: "square", color: "#4f46e5" },
            imageOptions: { crossOrigin: "anonymous", margin: 8 }
        };

        // Render untuk Desktop
        const qrCode = new QRCodeStyling(currentConfig);
        qrCode.append(document.getElementById("canvas-qr"));

        // Render Clone untuk Mobile (supaya ada 2 tempat)
        // Kita gunakan logika simple: update 1 config, render ulang.
        
        function updateQR() {
            // Ambil Value
            currentConfig.data = document.getElementById("urlInput").value || "https://google.com";
            
            let colorDots = document.getElementById("colorDots").value;
            let colorBg = document.getElementById("colorBg").value;

            // Set Warna
            currentConfig.dotsOptions.color = colorDots;
            currentConfig.backgroundOptions.color = colorBg;
            currentConfig.cornersSquareOptions.color = colorDots; 
            currentConfig.cornersDotOptions.color = colorDots;

            qrCode.update(currentConfig);

            // Handle render mobile (manual append jika kosong)
            let mobileContainer = document.getElementById("canvas-qr-mobile");
            if(mobileContainer.innerHTML === "") {
                // Clone visual
                mobileContainer.innerHTML = ""; // Clear
                // Kita biarkan library handle update di instance utama saja 
                // (Untuk simplifikasi di one-file PHP tanpa React, kita fokus desktop sticky dulu)
                // Jika user buka di HP, preview ada di bawah.
                qrCode.append(mobileContainer); 
            }
        }

        // Logic Visual Selection
        function selectOption(category, value, element) {
            let parentGrid = element.closest('.grid');
            let siblings = parentGrid.querySelectorAll('.option-card');
            siblings.forEach(el => el.classList.remove('active'));
            element.classList.add('active');

            if (category === 'body') currentConfig.dotsOptions.type = value;
            else if (category === 'eyeFrame') currentConfig.cornersSquareOptions.type = value;
            else if (category === 'eyeBall') currentConfig.cornersDotOptions.type = value;

            qrCode.update(currentConfig);
        }

        document.getElementById("urlInput").addEventListener("keyup", updateQR);
        document.getElementById("colorDots").addEventListener("input", updateQR);
        document.getElementById("colorBg").addEventListener("input", updateQR);

        document.getElementById("logoFile").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    currentConfig.image = e.target.result;
                    qrCode.update(currentConfig);
                }
                reader.readAsDataURL(file);
            }
        });

        function downloadQR() {
            qrCode.download({ name: "MyQR-Studio", extension: "png" });
        }
    </script>
</body>
</html>