@php
    $id = 'index';
    $type = 'website';
    $title = 'A web developer from Sri Lanka';
    $description = 'Expert software engineer from Sri Lanka, Enindu Alahapperuma, specializes in back-end development, system administration, website security, and logo design.';
    $keywords = 'enindu, back-end developer, web developer, php developer, go developer, system administrator, website security expert, logo designer, software engineer, freelancer';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <div class="card mt-3">
        <div class="card-body">
            <h1 class="card-title mb-0" id="a-web-developer-from-sri-lanka">{{ $title }}</h1>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <p class="mb-0">Welcome to my fixed-width world! Every single thing in here is confined to a specific width, ensuring that each element receives an equal amount of space, just like every character. However, borders are not fixed-width. Are we constrained by these borders that do not align with the fixed-width concept of this world? We might require borders to organize the content, or perhaps not. By the way, I am the designer, and I can always do whatever I want with those borders. I design my world! The only question is, do we truly need borders?</p>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h2 id="who-am-i">Who am I?</h2>
            <p>Greetings, I am Enindu Alahapperuma, a seasoned <a href="https://en.wikipedia.org/wiki/Software_engineering" target="_blank">software engineer</a>, <a href="https://en.wikipedia.org/wiki/Frontend_and_backend#Backend_focused" target="_blank">back-end developer</a>, and website security expert with a flair for <a href="https://en.wikipedia.org/wiki/System_administrator" target="_blank">system administration</a> and a touch of <a href="https://en.wikipedia.org/wiki/Logo#Logo_design" target="_blank">logo design</a>. With {{ \Carbon\Carbon::parse('2018-05-01')->diffInYears(now()) }}+ years of experience in the field, I proudly representing the vibrant tech scene of <a href="https://en.wikipedia.org/wiki/Sri_Lanka" target="_blank">Sri Lanka</a>. My passion and expertise revolve around back-end development and ensuring robust <a href="https://en.wikipedia.org/wiki/Systems_architecture" target="_blank">system architectures</a>.</p>
            <h2 id="i-am-a-back-end-developer">I am a back-end developer</h2>
            <p>In the realm of <a href="https://en.wikipedia.org/wiki/Web_development" target="_blank">web development</a>, my proficiency extends to <a href="https://en.wikipedia.org/wiki/HTML" target="_blank">HTML</a>, <a href="https://en.wikipedia.org/wiki/CSS" target="_blank">CSS</a>, and <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>. Although I don't delve into <a href="https://en.wikipedia.org/wiki/Frontend_and_backend#Frontend_focused" target="_blank">front-end development</a>, my focus lies deeply in enhancing <a href="https://en.wikipedia.org/wiki/User_experience" target="_blank">user experience (UX)</a>, prioritizing performance over mere aesthetics and <a href="https://en.wikipedia.org/wiki/User_interface" target="_blank">user interface (UI)</a> design. My primary toolkit includes languages such as <a href="https://en.wikipedia.org/wiki/PHP" target="_blank">PHP</a>, <a href="https://en.wikipedia.org/wiki/Go_(programming_language)" target="_blank">Go</a>, and JavaScript (<a href="https://en.wikipedia.org/wiki/Node.js" target="_blank">Node.js</a>). Despite PHP's mixed reputation, I find it to be a stable and reliable choice, particularly for enterprise-level <a href="https://en.wikipedia.org/wiki/Web_application" target="_blank">web applications</a>. On the other hand, Go, with its strict typing and functional programming approach, stands out as my preferred language, thanks to its elegant design and impeccable functionality.</p>
            <h2 id="i-am-a-system-administrator">I am a system administrator</h2>
            <p>As mentioned earlier, I wear the hat of a <a href="https://en.wikipedia.org/wiki/Linux" target="_blank">Linux</a> system administrator, particularly adept at handling the <a href="https://en.wikipedia.org/wiki/LAMP_(software_bundle)" target="_blank">LAMP stack</a> (Linux, <a href="https://en.wikipedia.org/wiki/Apache_HTTP_Server" target="_blank">Apache</a>, <a href="https://en.wikipedia.org/wiki/MySQL" target="_blank">MySQL</a>/<a href="https://en.wikipedia.org/wiki/MariaDB" target="_blank">MariaDB</a>, and PHP). My proficiency extends to cloud platforms like <a href="https://en.wikipedia.org/wiki/Amazon_Web_Services" target="_blank">Amazon Web Services (AWS)</a>, <a href="https://en.wikipedia.org/wiki/DigitalOcean" target="_blank">Digital Ocean</a>, and <a href="https://en.wikipedia.org/wiki/Google_Cloud_Platform" target="_blank">Google Cloud Platform</a>, showcasing my <a href="https://en.wikipedia.org/wiki/DevOps" target="_blank">DevOps</a> capabilities.</p>
            <h2 id="i-am-a-website-security-expert">I am a website security expert</h2>
            <p>In addition to my proficiency as a website security expert, my daily responsibilities encompass back-end development and system administration. The intricate landscape of <a href="https://en.wikipedia.org/wiki/Computer_security" target="_blank">cybersecurity</a> within websites is my domain of expertise, and I take pride in leaving no stone unturned to ensure comprehensive protection. To maintain the utmost security for websites, I employ a diverse array of tools from my cybersecurity toolbox, like <a href="https://en.wikipedia.org/wiki/Metasploit" target="_blank">Metasploit</a>, <a href="https://en.wikipedia.org/wiki/Nessus_(software)" target="_blank">Nessus</a>, <a href="https://en.wikipedia.org/wiki/Nmap" target="_blank">Nmap</a>, and testssl.sh.</p>
            <h2 id="i-am-a-logo-designer">I am a logo designer</h2>
            <p>While not a professional <a href="https://en.wikipedia.org/wiki/Graphic_design" target="_blank">graphic designer</a>, I do dabble in logo design using <a href="https://en.wikipedia.org/wiki/Inkscape" target="_blank">Inkscape</a> and have some familiarity with <a href="https://en.wikipedia.org/wiki/GIMP" target="_blank">GIMP</a>.</p>
            <h2 id="i-am-a-freelancer">I am a freelancer</h2>
            <p>I am open to <a href="https://en.wikipedia.org/wiki/Freelancer" target="_blank">freelance</a> opportunities in back-end development, web development, system administration, website security maintenance, and logo design. Collaborating with diverse clients and assisting them in achieving their goals is a passion of mine. On the administrative side, I offer <a href="https://en.wikipedia.org/wiki/Google" target="_blank">Google</a> and <a href="https://en.wikipedia.org/wiki/Microsoft" target="_blank">Microsoft</a> web services, including Google Business, <a href="https://en.wikipedia.org/wiki/Google_Search_Console" target="_blank">Google Search Console</a>, <a href="https://en.wikipedia.org/wiki/Google_Analytics" target="_blank">Google Analytics</a>, Google Tag Manager, <a href="https://en.wikipedia.org/wiki/Google_AdSense" target="_blank">Google AdSense</a>, <a href="https://en.wikipedia.org/wiki/ReCAPTCHA" target="_blank">reCAPTCHA</a>, <a href="https://en.wikipedia.org/wiki/Bing_Webmaster_Tools" target="_blank">Bing Webmaster</a>, and Microsoft Clarity.</p>
            <h2 id="i-use-various-technologies">I use various technologies</h2>
            <p>While my expertise primarily lies in back-end development, I also possess a working knowledge of CSS frameworks such as <a href="https://en.wikipedia.org/wiki/Bootstrap_(front-end_framework)" target="_blank">Bootstrap</a>, Bulma, and Halfmoon (The very framework used to build this website). PHP frameworks like <a href="https://en.wikipedia.org/wiki/Laravel" target="_blank">Laravel</a> and Slim are also part of my repertoire, with occasional forays into the Gorilla framework for Go. Interestingly, I often opt for using Go language without any specific framework. In the realm of JavaScript (Node.js), my experience extends to the <a href="https://en.wikipedia.org/wiki/Express.js" target="_blank">Express</a> framework.</p>
            <p><a href="https://en.wikipedia.org/wiki/Version_control" target="_blank">Version control</a> is second nature to me, and I rely on <a href="https://en.wikipedia.org/wiki/Git" target="_blank">Git</a> for seamless collaboration. Beyond version control, I am well-versed in tools like <a href="https://en.wikipedia.org/wiki/OpenSSH" target="_blank">OpenSSH</a>, HTTPie, and <a href="https://en.wikipedia.org/wiki/CURL" target="_blank">cURL</a>. Additionally, I've successfully integrated technologies like <a href="https://en.wikipedia.org/wiki/Sass_(style_sheet_language)" target="_blank">Saas</a>, <a href="https://en.wikipedia.org/wiki/Symfony" target="_blank">Symfony</a>, <a href="https://en.wikipedia.org/wiki/Socket.IO" target="_blank">Socket.io</a>, <a href="https://en.wikipedia.org/wiki/Electron_(software_framework)" target="_blank">Electron</a>, MJML, and <a href="https://en.wikipedia.org/wiki/JSON_Web_Token" target="_blank">JSON Web Token (JWT)</a> into my projects.</p>
            <p>Delving into programming concepts, I boast excellent knowledge in <a href="https://en.wikipedia.org/wiki/PHP_Standard_Recommendation" target="_blank">PSR</a>, <a href="https://en.wikipedia.org/wiki/Regular_expression" target="_blank">regular expressions</a>, <a href="https://en.wikipedia.org/wiki/REST" target="_blank">REST APIs</a>, <a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller" target="_blank">model-view-controller (MVC) architecture</a>, <a href="https://en.wikipedia.org/wiki/Object-oriented_programming" target="_blank">object-oriented programming (OOP)</a>, and <a href="https://en.wikipedia.org/wiki/Functional_programming" target="_blank">functional programming</a>. Also designing <a href="https://en.wikipedia.org/wiki/Software_architecture" target="_blank">software architectures</a> and solutions is a part of my skill set.</p>
            <p>Manipulating databases is a core part of my back-end development role, encompassing both <a href="https://en.wikipedia.org/wiki/SQL" target="_blank">SQL</a> and <a href="https://en.wikipedia.org/wiki/NoSQL" target="_blank">no-SQL</a> databases. My expertise leans towards SQL databases like MySQL, MariaDB, <a href="https://en.wikipedia.org/wiki/SQLite" target="_blank">SQLite</a>, and <a href="https://en.wikipedia.org/wiki/PostgreSQL" target="_blank">PostgreSQL</a>. I also have hands-on experience with <a href="https://en.wikipedia.org/wiki/MongoDB" target="_blank">MongoDB</a> in the realm of no-SQL databases.</p>
            <h2 id="i-use-arch-linux-and-open-source-software">I use Arch Linux and open source software</h2>
            <p>In terms of personal preferences, I embrace simplicity and minimalism. <a href="https://en.wikipedia.org/wiki/Arch_Linux" target="_blank">Arch Linux</a> serves as my preferred <a href="https://en.wikipedia.org/wiki/Operating_system" target="_blank">operating system</a>, and I champion the use of <a href="https://en.wikipedia.org/wiki/Open-source_software" target="_blank">open-source software</a>. <a href="https://en.wikipedia.org/wiki/Visual_Studio_Code" target="_blank">Visual Studio Code</a> is my go-to <a href="https://en.wikipedia.org/wiki/Integrated_development_environment" target="_blank">intergrated development environment (IDE)</a>, supplemented by <a href="https://en.wikipedia.org/wiki/Vim_(text_editor)" target="_blank">Vim</a> and <a href="https://en.wikipedia.org/wiki/GNU_nano" target="_blank">nano</a> for specific tasks. <a href="https://en.wikipedia.org/wiki/Firefox" target="_blank">Firefox</a> stands as my web browser of choice.</p>
            <h2 id="contribute-the-source-code">Contribute the source code</h2>
            <p class="mb-0">The source code for this website is available on <a href="https://en.wikipedia.org/wiki/GitHub" target="_blank">GitHub</a> under the <a href="https://en.wikipedia.org/wiki/MIT_License" target="_blank">MIT license</a>, promoting free distribution and modification. If you spot any typos or grammatical errors, your contributions are welcome to enhance the content's quality. The source code for this website can be accessed at: <a href="https://github.com/enindu/enindu-alahapperuma" target="_blank">https://github.com/enindu/enindu-alahapperuma</a>. As <a href="https://en.wikipedia.org/wiki/Sinhala_language" target="_blank">Sinhala</a> is my native language, I appreciate your understanding in case any linguistic nuances slipped through the cracks.</p>
        </div>
    </div>
</x-layouts.base>
