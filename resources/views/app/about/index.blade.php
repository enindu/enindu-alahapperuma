@php
    $id = 'about.index';
    $title = 'About me';
    $description = 'I am a software engineer, infrastructure administrator, and cybersecurity specialist from Sri Lanka. With years of hands-on experience, I focus on building a...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">About me.</h1>
                        <p>I am a software engineer, infrastructure administrator, and cybersecurity specialist from Sri Lanka. With years of hands-on experience, I focus on building and managing reliable, secure, and optimized systems. Below, you will find an overview of my professional background, technical expertise, and the specialized services I provide to help businesses scale securely.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h2 class="h1">Learn about my journey.</h2>
                    <p>I am Enindu Alahapperuma, a freelance software engineer from Sri Lanka with over {{ now()->format('Y') - 2018 }} years of experience in back-end development, Linux system administration, and cybersecurity. My journey started with a strong interest in open-source systems, which led me into system administration. Over time, I moved into software engineering, focusing on building and maintaining reliable, secure, and efficient applications.</p>
                    <p>My interest in technology began in 2005 with Ubuntu 5.04, when I was ten years old. After completing my first installation, I quickly developed a strong connection with Linux. This led to years of exploring different Linux and BSD distributions. Working across these systems helped me build a solid understanding of different software designs, kernels, build systems, and command-line tools. I eventually chose Arch Linux for my personal setup and Debian for production and enterprise use.</p>
                    <p>Although I am a software engineer, I do not use labels such as "full-stack developer" or "DevOps engineer". I believe the term full-stack often leads to a lack of depth when one person tries to cover both front-end and back-end work. DevOps is also a separate approach focused on the software delivery process, which is different from core infrastructure administration.</p>
                    <p>My focus is not to cover every role, but to go deep in specific areas. I specialize in back-end development and Linux system administration, with a strong focus on system logic, security, and infrastructure reliability.</p>
                    <h3 class="h2">Explore my journey to software engineering.</h3>
                    <p>Before becoming a professional software engineer, I started my career as a general web developer. Similar to my experience with UNIX-like systems, my curiosity and analytical mindset pushed me to explore how web systems work under the hood. During this early stage, I worked with different libraries, CMS platforms, and frameworks, and even built my own custom CSS and PHP frameworks. This hands-on experimentation helped me learn quickly and confirmed my decision to pursue software engineering as a long-term career.</p>
                    <p>I chose back-end development not for financial reasons, but because I am genuinely interested in how complex systems work. I have always been more interested in server-side logic than front-end design. While I have experience with front-end frameworks like React and Vue, my main focus is on how browsers communicate with servers, how systems handle large numbers of requests, and how data is processed and delivered efficiently.</p>
                    <p>My main technical stack is built around Linux, Apache/Nginx, MySQL/MariaDB, and PHP, which form the core of the LAMP/LEMP ecosystem.</p>
                    <p>Beyond PHP, I also work with Go for CLI tools and network programming. Go is a simple but powerful language with strong concurrency support and a rich standard library, making it well-suited for high-performance systems and microservices. I have also worked with Node.js; while JavaScript is not my primary language, I value Node.js for its asynchronous, non-blocking architecture, especially for I/O-heavy applications.</p>
                    <p>Today, I use this technical foundation to deliver complete digital solutions, including web development, technical content writing, graphic design support, website maintenance, and cloud infrastructure management. For web applications, I prefer Laravel over monolithic CMS platforms like WordPress or Drupal, as it provides better structure, security, and performance for modern applications.</p>
                    <h3 class="h2">Explore my journey to infrastructure administration.</h3>
                    <p>Although my main role is software engineering, my strongest passion is still Linux system administration, which is where my journey in technology began. This background has given me a solid understanding of build systems, automation tools, and kernel architecture. My software engineering skills complement my infrastructure work, allowing me to understand how applications interact with the underlying system. As an infrastructure administrator, I manage the full lifecycle of operating systems, networks, firewalls, and bare-metal or virtual servers, from initial setup and optimization to long-term monitoring and troubleshooting.</p>
                    <p>While my core focus is Linux, I also have practical experience with BSD and Windows Server environments. Over the years, I have worked with a wide range of Linux distributions, including enterprise systems like Debian, flexible setups like NixOS, and different init systems such as systemd on Arch Linux and runit on Void Linux. I am comfortable with multiple package managers like pacman, apt, and dnf, and I have worked in both minimal server environments and full desktop environments such as KDE and GNOME. At the operating system level, I handle user management, log analysis, performance monitoring, and secure remote access using SSH, VNC, and RDP.</p>
                    <p>Managing high-traffic web servers has strengthened my systems engineering skills in the web domain. This requires a strong understanding of core technologies such as DNS, TLS/SSL, reverse proxies, cron automation, version control integration, and system monitoring.</p>
                    <p>My understanding goes beyond configuring existing servers. Through low-level network programming, I also build and maintain custom TCP, UDP, and UNIX socket servers. This has helped me gain a deeper understanding of packet flow, network behavior, and client-server communication protocols.</p>
                    <p>Today, I use this combined experience to provide cloud infrastructure administration for clients. I specialize in building and managing scalable environments, handling deployments, and maintaining application lifecycles mainly on AWS, along with experience in Google Cloud Platform and DigitalOcean. I regularly work with LAMP and LEMP stacks, and I also support applications built with Go, Node.js, Python, Ruby, Java, and .NET, using both relational and non-relational databases. My goal is to deliver complete and reliable infrastructure solutions across all layers of modern systems.</p>
                    <h3 class="h2">Explore my journey to cybersecurity.</h3>
                    <p>My combined experience in software engineering and infrastructure administration has naturally strengthened my skills in cybersecurity. Working at the intersection of code and infrastructure has helped me maintain a security-first approach throughout every stage of a project—from writing secure application logic to hardening the underlying operating system. This approach helps reduce vulnerabilities early and ensures better protection across the entire system.</p>
                    <p>Today, I use this expertise to help clients secure their digital assets. I provide end-to-end security services, including vulnerability assessments, continuous monitoring, risk remediation, and system hardening for networks, servers, and applications. I also offer cybersecurity consulting, performing risk assessments and helping establish best-practice security frameworks to keep systems resilient against evolving threats.</p>
                </div>
            </div>
        </div>
    </section>
    @include('components.includes.cta')
    <section>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h2 class="h1">Learn about website history.</h2>
                    <p>This is the 5th version of my personal website. The first 2 versions were built using a custom static site generator written in Go. Later, I migrated the project to Laravel for better flexibility and maintainability, starting from version 3. In this latest version, I upgraded Laravel to the newest release and made major frontend improvements to significantly improve user experience and responsiveness.</p>
                    <p>The application is built on a simple and efficient architecture. It uses semantic HTML on the frontend with the Halfmoon CSS framework, customized through Sass stylesheets. The backend is powered by PHP using Laravel. Although the core frontend does not strictly require a database, a MariaDB instance is included to support framework requirements and future backend features.</p>
                    <p>The platform is hosted on an AWS EC2 instance and served through an Apache HTTP server. Cloudflare is used as a reverse proxy at the edge to improve performance and enhance security. DNS routing is managed using a split setup, where AWS Route 53 handles authoritative DNS records from the origin, and Cloudflare manages edge-level routing between the proxy and end users.</p>
                    <h3 class="h2">Contribute to source code.</h3>
                    <p>The complete source code for this website is publicly available on my GitHub profile under the permissive MIT license. You are free to use, modify, and share the code in accordance with the license terms. You can <a href="https://github.com/enindu/enindu-alahapperuma" target="blank">visit the GitHub repository</a> to explore the project in detail.</p>
                    <p>If you find any bugs, have questions, or identify areas for improvement, feel free to open an issue or submit a pull request. Contributions are welcome and help improve the project for the open-source community.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
