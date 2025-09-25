<x-layout>
    <style>
        /* Move body styling into a wrapper so it won’t override layout */
        .portfolio-wrapper {
             /* to avoid overlap with fixed nav */
            font-family: Arial, sans-serif;
            font-size: larger;
            background: linear-gradient(135deg, #11917a 0%, #7272dd 100%);
            color: #e7d9d9;
            padding: 30px;
            min-height: 100vh; /* ensures full height */
        }

        /* Profile Section */
        .profile-box {
            margin-top: 50px;
            text-align: center;
            
        }

        .profile-pic {
            width: 300px;
            height: 300px;
            border-radius: 10px;
            object-fit: cover;
            border: 5px solid #74ebd5;
            margin-bottom: 15px;
        }

        .profile-box h2 {
            margin: 0;
            color: #ffffff;
        }

        /* Details Section */
        .details {
            max-width: 800px;
            margin: 0 auto;
        }

        .details section {
            margin-bottom: 40px;
            background: rgba(255, 255, 255, 0.08);
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            color: #ffffff;
            margin-top: 0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 8px 0;
        }

        a {
            color: #74ebd5;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .portfolio-wrapper {
                padding: 20px;
            }
            .profile-pic {
                width: 140px;
                height: 140px;
            }
        }
    </style>

    <div class="portfolio-wrapper">
        <!-- Profile -->
        <div class="profile-box">
            <img src="{{ asset('images/img.jpg') }}" alt="Profile Photo" class="profile-pic">
            <h2>Arvie Keith Manzano</h2>
        </div>

        <!-- Details -->
        <div class="details">
            <section>
                <h2>About Me</h2>
                <p>26 years old, born on June 2, 1999.</p>
                <p>I live in Becques, Tagudin, Ilocos Sur.</p>
                <p>Currently a 3rd-year college student pursuing a Bachelor of Science in Information Technology at Ilocos Sur Polytechnic State College, Tagudin Campus.</p>
            </section>

            <section>
                <h2>Hobbies</h2>
                <ul>
                    <li>🎮 Playing online games</li>
                    <li>🎸 Playing guitar</li>
                    <li>🤝 Bonding with friends</li>
                </ul>
            </section>

            <section>
                <h2>Contact Information</h2>
                <p>Tel no: 09451225875</p>
                <p>Email: <a href="mailto:arviekeithm@gmail.com">arviekeithm@gmail.com</a></p>
                <p>Facebook: <a href="https://www.facebook.com/kitzz.manzano" target="_blank">Arvie Keith Manzano</a></p>
            </section>
        </div>
    </div>
</x-layout>
