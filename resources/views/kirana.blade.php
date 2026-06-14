<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIRANA AYU KHRISNA | Creative Portfolio</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #1a1a1a;
            color: white;
            margin: 0;
            padding: 0;
        }

        #portfolio-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100vw;
        }

        .page-wrapper {
            background-color: white;
            width: 100vw;
            position: relative;
            transition: opacity 0.8s ease-in-out;
            opacity: 0;
        }

        .page-wrapper.visible {
            opacity: 1;
        }

        img {
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="overflow-x-hidden">

    <!-- Portfolio Images -->
    <div id="portfolio-container">
        @for ($i = 1; $i <= 13; $i++)
            <div class="page-wrapper reveal">
                <img src="{{ url('assets/img/portfolio/page_' . $i . '.png') }}" alt="Kirana Portfolio Page {{ $i }}"
                    loading="lazy">
            </div>
        @endfor
    </div>

    <!-- Footer -->
    <footer class="py-20 text-center opacity-30 text-[10px] uppercase tracking-[0.4em]">
        © 2026 Kirana Ayu Khrisna.
    </footer>

    <script>
        // Scroll reveal logic
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>

</html>