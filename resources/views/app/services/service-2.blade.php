@php
    $id = 'services.service-2';
    $title = 'Infrastructure administration | My services';
    $description = 'I offer several infrastructure administration plans, along with a custom plan for specialized requirements. All predefined plans are hosted on AWS and suppor...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">Infrastructure administration.</h1>
                        <p>I offer several infrastructure administration plans, along with a custom plan for specialized requirements. All predefined plans are hosted on AWS and support PHP-based applications. If your application uses a different programming language, framework, or platform, a custom plan will be required. Please review the plans below to find the option that best suits your needs. All plans are billed annually.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <a href="{{ route('services.index') }}">Services</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Infrastructure administration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-plans-section">
        <div class="container">
            <div class="plans">
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">Shared plan.</h2>
                            <strong>$5 monthly (1 host)</strong>
                        </div>
                        <p>This plan is ideal for individuals or small businesses looking to host basic web applications. Your application will be hosted on a shared EC2 server alongside other clients' applications, helping to keep costs low while providing a reliable hosting environment.</p>
                        <ul>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Apache</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>PHP</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>MariaDB</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>1GB RAM (Shared)</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>2 vCPUs (Shared)</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>50GB SSD (Shared)</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>2TB bandwidth (Shared)</span>
                            </li>
                            <li>
                                <i class="ri-close-circle-line"></i>
                                <span>Application monitoring</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Application monitoring</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Weekly backups</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>99.9% uptime</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>24/7 support</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Response within 8 hours</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Recover within 6 hours</span>
                            </li>
                        </ul>
                        <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Send inquiry</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">Scale plan.</h2>
                            <strong>$20 monthly (1 host)</strong>
                            <strong>$85 monthly (10 hosts)</strong>
                        </div>
                        <p>This plan is ideal for individuals and businesses that need to host scalable web applications with a dedicated database. As your application grows, the infrastructure can be expanded to meet increasing demands. Your application will be hosted on a dedicated EC2 instance, providing improved performance, flexibility, and isolation.</p>
                        <ul>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Apache/nginx</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>PHP</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>MySQL/MariaDB/PostgreSQL</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>2GB RAM</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>2 vCPUs</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>50GB SSD</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>2TB bandwidth</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Application monitoring</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Server monitoring</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Weekly backups</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>99.9% uptime</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>24/7 support</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Response within 6 hours</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Recover within 4 hours</span>
                            </li>
                        </ul>
                        <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Send inquiry</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">Ultimate plan.</h2>
                            <strong>$65 monthly (1 host)</strong>
                            <strong>$165 monthly (20 hosts)</strong>
                        </div>
                        <p>This plan is ideal for individuals and businesses that need to host large, highly scalable web applications. Your application will be hosted on a dedicated EC2 instance, with S3 used for file storage, while the database will be managed through a dedicated RDS instance. This setup provides improved performance, reliability, and scalability.</p>
                        <ul>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Apache/nginx</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>PHP</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>MySQL/MariaDB/PostgreSQL</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>6GB RAMs</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>4 vCPUs</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>200GB SSDs</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>2TB bandwidth</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Application monitoring</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Server monitoring</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Daily backups</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>99.9% uptime</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>24/7 support</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Response within 4 hours</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Recover within 2 hours</span>
                            </li>
                        </ul>
                        <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Send inquiry</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-custom-plan-section">
        <div class="container">
            <div class="custom-plan">
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">Custom plan.</h2>
                            <strong>Contact me for pricing</strong>
                        </div>
                        <p>If the predefined plans do not meet your needs, please contact me to discuss your requirements. I can create a custom plan tailored to your specific needs. Pricing for custom plans will depend on the services required. Please also see the add-on services below, as they may be useful for your custom plan.</p>
                        <p>The predefined plans above are basic managed hosting plans and do not include the full range of infrastructure administration services I offer. Below is a complete list of my add-on services. You can combine any of these services with the plans above to build a fully customized infrastructure administration solution.</p>
                        <ul>
                            <li>Go, Node.js, Python, Ruby, Java, and .NET application deployment</li>
                            <li>Proxy server management</li>
                            <li>Email server management</li>
                            <li>DNS management</li>
                            <li>CDN management</li>
                            <li>Load balancing management</li>
                            <li>API gateway management</li>
                            <li>Application monitoring</li>
                            <li>Server monitoring</li>
                            <li>Threat monitoring and security scanning</li>
                            <li>Server notification management</li>
                            <li>Custom task management</li>
                            <li>Custom software development</li>
                            <li>Custom backup solutions</li>
                            <li>Network firewall and WAF implementation</li>
                        </ul>
                        <p>Please send a message by clicking the button below.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Contact me</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Add-On Services</h2>
                <p>The predefined plans above are basic managed hosting plans and do not encompass the entire range of system administration services I offer. Below is a comprehensive list of my add-on services. You can include any of these services with the above plans to create a complete system administration solution.</p>
                <ul>
                    <li>Proxy server management</li>
                    <li>Email server management</li>
                    <li>Hosting for Go, Node.js, Python, Ruby, Java, and .NET applications</li>
                    <li>DNS management</li>
                    <li>CDN management</li>
                    <li>Load balancing</li>
                    <li>API gateway management</li>
                    <li>Resource and log monitoring</li>
                    <li>Threat monitoring and security scanning</li>
                    <li>Server notifications</li>
                    <li>Custom task management</li>
                    <li>Custom software development</li>
                    <li>Custom backup solutions</li>
                    <li>Network firewall and WAF implementation</li>
                </ul>
                <p>Please contact me for pricing information on these additional services.</p>
            </div>
        </div>
    </div> --}}
@endsection
