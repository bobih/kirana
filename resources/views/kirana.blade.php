<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIRANA AYU KHRISNA | Creative Portfolio</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Instrument Sans', sans-serif; 
            background-color: #1a1a1a;
            color: white;
        }
        #pdf-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 0;
            gap: 40px;
        }
        .page-wrapper {
            background-color: white;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            position: relative;
            max-width: 90vw;
        }
        canvas {
            display: block;
            max-width: 100%;
            height: auto !important;
        }
        .loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }
    </style>
</head>
<body class="overflow-x-hidden">

    <!-- Loading State -->
    <div id="loader" class="loader text-center">
        <div class="inline-block w-12 h-12 border-4 border-zinc-600 border-t-white rounded-full animate-spin mb-4"></div>
        <p class="uppercase tracking-widest text-xs font-bold opacity-50">Opening Portfolio...</p>
    </div>

    <!-- Minimal Header -->
    <nav class="fixed top-0 w-full z-50 px-8 py-6 flex justify-between items-center mix-blend-difference">
        <a href="#" class="text-xl font-bold tracking-tighter uppercase">Kirana.</a>
        <div class="flex space-x-6">
            <a href="https://www.instagram.com/kiranagkpr/" target="_blank" class="text-[10px] font-bold uppercase tracking-[0.2em] opacity-50 hover:opacity-100 transition-opacity">Instagram</a>
            <a href="mailto:School.kirana.ayu.khrisna@gmail.com" class="text-[10px] font-bold uppercase tracking-[0.2em] opacity-50 hover:opacity-100 transition-opacity">Contact</a>
        </div>
    </nav>

    <!-- PDF Rendering Target -->
    <div id="pdf-container"></div>

    <!-- Footer -->
    <footer class="py-20 text-center opacity-30 text-[10px] uppercase tracking-[0.4em]">
        © 2026 Kirana Ayu Khrisna. Exact Digital Replica.
    </footer>

    <script>
        // PDF.js configuration
        const url = "{{ url('assets/docs/Portofolio.pdf') }}";
        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        const container = document.getElementById('pdf-container');
        const loader = document.getElementById('loader');

        // Render PDF
        async function loadPortfolio() {
            try {
                const loadingTask = pdfjsLib.getDocument(url);
                const pdf = await loadingTask.promise;
                
                // Hide loader
                loader.style.display = 'none';

                // Render each page
                for (let pageNum = 1; pdf.numPages >= pageNum; pageNum++) {
                    const page = await pdf.getPage(pageNum);
                    
                    // Create wrapper
                    const wrapper = document.createElement('div');
                    wrapper.className = 'page-wrapper';
                    container.appendChild(wrapper);

                    // Create canvas
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    wrapper.appendChild(canvas);

                    // Set scale for high quality
                    const viewport = page.getViewport({ scale: 2.0 });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Render
                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };
                    await page.render(renderContext).promise;
                    
                    console.log(`Page ${pageNum} rendered`);
                }
            } catch (error) {
                console.error('Error rendering portfolio:', error);
                loader.innerHTML = '<p class="text-red-500 font-bold uppercase tracking-widest text-xs">Failed to load portfolio.</p>';
            }
        }

        // Initialize
        loadPortfolio();
    </script>
</body>
</html>
