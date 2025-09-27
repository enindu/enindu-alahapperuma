@php
    $id = 'blog.blog-1';
    $title = 'I Have Revamped My Website | My Blog';
    $description = 'I have upgraded the Laravel framework to version 12, made significant improvements to the front-end design, and added service pages to the website. This mean...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">I Have Revamped My Website</h1>
                <p class="mb-0">I have upgraded the Laravel framework to version 12, made significant improvements to the front-end design, and added service pages to the website. This means I am now officially offering my services as a freelancer. Read below to learn more about these updates.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <p class="mb-0">This is the fourth version of my website. In the early days, I used a custom-built static site generator written in Go to generate plain HTML pages, which were then hosted on a basic shared server. At that time, I was not offering freelance services and had no plans to write articles—the website simply served as a personal introduction. You can view the second version of my site on the Wayback Machine by clicking <a class="text-decoration-none" href="https://web.archive.org/web/20220108080945/https://enindu.com" target="_blank">this link</a>. Unfortunately, there is no archived capture of the first version. With the third version, I discontinued my static site generator and migrated the website to the Laravel framework for better flexibility and scalability. You can see the third version <a class="text-decoration-none" href="https://web.archive.org/web/20240215133408/https://enindu.com" target="_blank">here</a>. Several factors influenced my decision to move away from the static site generator.</p>
                <ul class="mb-0 ps-3">
                    <li>Since I am already a web developer and can create anything in plain HTML, I found a static site generator unnecessary. If I can write HTML directly without any hassle, there is no real need for an additional tool to generate it.</li>
                    <li>Over time, I realized that creating unnecessary overhead not only complicates development but also makes software maintenance more challenging. Maintaining a static site generator that no one else used became an unnecessary burden. Additionally, marketing an open-source project to attract contributors is not something I excel at.</li>
                    <li>I was employed at an IT-related company as a web developer and soon became a director. During that time, maintaining a static site generator became increasingly difficult as I was occupied with my responsibilities and workload.</li>
                </ul>
                <p class="mb-0">Those were the primary reasons for abandoning the static site generator. I also had several personal reasons for making this decision.</p>
                <p class="mb-0">In the early days, I built this site without any frameworks—it was purely HTML and CSS, without even using JavaScript. However, with the third version, I decided to introduce some structure by using Halfmoon as my CSS framework, Laravel as my back-end (PHP) framework, and minimal vanilla JavaScript. Laravel is a well-established choice, but opting for Halfmoon was an interesting decision. Even today, Halfmoon remains a relatively lesser-known CSS framework.</p>
                <p class="mb-0">During my time as a director, I held multiple roles within the company, including that of a senior developer. As a senior developer, I introduced new development procedures and standards to improve efficiency, which played a key role in the company's rapid growth. One of my major initiatives was developing a boilerplate starter kit using the Laravel framework to standardize development. This ensured that all developers followed the same design patterns and standards, making it easier to assign different parts of a project to any available developer. As a result, development efficiency increased by more than 100%. As a director, I made many key decisions like this to enhance the company's productivity and overall quality. For the admin panel design of the boilerplate starter kit, I chose the Halfmoon framework because it was lightweight and used class names similar to Bootstrap. I appreciated its simplicity. At that time, Halfmoon was a separate framework from Bootstrap, which is why I also decided to use it for my personal website.</p>
                <p class="mb-0">For the fourth version of my website, I continue to use the same technology stack. I create the design using plain HTML, style it with the Halfmoon framework along with some custom CSS, and enhance it with minimal JavaScript. The Laravel framework powers the back end, serving the final product to clients. While the website itself does not use a database, Laravel utilizes SQLite for its internal operations.</p>
                <p class="mb-0">I made significant design changes in the fourth version of my website. The UI was completely rewritten while retaining the same layout, but with a smaller container and some visual enhancements. The theme colors remain nearly the same—I previously used Tailwind v3 colors, and in this version, I switched to Tailwind v4, which offers brighter tones. Instead of the Slate palette for the background and foreground, I now use absolute black and white, respectively. Additionally, I incorporated Particles.js with custom styles to create a blurred background effect. Another notable addition is a logo, which was never present in previous versions. Overall, I made slight updates to the branding. Most importantly, I removed all my previous blog articles—without any specific reason.</p>
                <p class="mb-0">In the third version of my website, I used Laravel v10. For the fourth version, I have upgraded to Laravel v12. However, you won't notice any visible differences, as the website does not rely on any advanced features of the framework. I primarily use Laravel for its routing system, controllers, views, and asset bundling.</p>
                <p class="mb-0">The server stack remains unchanged. I still use Apache HTTP Server on an EC2 instance to serve the website, with Cloudflare acting as the reverse proxy to enhance both security and performance. For TLS implementation, I use Let's Encrypt. Route 53 handles DNS management from the origin server to Cloudflare, while Cloudflare manages DNS from the proxy server to the clients.</p>
                <p class="mb-0">As before, the source code for this website is still licensed under the MIT License, allowing you to modify and distribute it. Contributions to the source code are also welcome. Click <a class="text-decoration-none" href="https://github.com/enindu/enindu-alahapperuma" target="_blank">this</a> to view the source code.</p>
            </div>
        </div>
    </div>
@endsection
