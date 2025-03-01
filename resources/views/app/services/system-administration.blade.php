@php
    $id = 'services.system-administration';
    $title = 'System Administration | My Services';
    $description = 'I offer several pricing plans for system administration, including a custom plan that allows you to tailor services to your specific needs. You don\'t need to...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">System Administration</h1>
                <p class="mb-0">I provide various system administration plans, including a custom plan tailored to your specific needs. You won't have to worry about server management—I'll handle everything for you. All standard plans are hosted on AWS and support only PHP. If your web application uses a different programming language or platform, you'll need a custom plan. Review the plans below to find the best fit for you. Note that all charges are billed annually.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <h2 class="mb-0">Shared Plan</h2>
                    <p class="h6 text-primary mb-0">$5/virtual host/month - Suitable for individuals</p>
                </div>
                <p class="mb-0">This plan is ideal for basic web applications. Your application will be hosted on a shared EC2 server with other applications. HTTPS will be implemented using Let's Encrypt for secure communication.</p>
                <p class="mb-0">In this plan, I will fully manage the operating system, HTTP server, database server, and all other relevant software. Additionally, I will handle DNS and TLS configurations. Furthermore, I will host your application, implement version control, provide regular backups, and offer 24x7 support. See below for more details.</p>
                <ul class="mb-0 ps-3">
                    <li>
                        <p class="mb-0">Server stack</p>
                        <ul class="mb-0 ps-3">
                            <li>Apache</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Technology stack</p>
                        <ul class="mb-0 ps-3">
                            <li>PHP</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Database stack</p>
                        <ul class="mb-0 ps-3">
                            <li>MariaDB</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Specification</p>
                        <ul class="mb-0 ps-3">
                            <li>1 GB memory</li>
                            <li>2 vCPUs</li>
                            <li>50 GB storage</li>
                            <li>Supports up to 1 virtual host</li>
                            <li>10,000 visits per month (1,000 requests per visit)</li>
                            <li>10,000,000 requests per month (200 KB per request)</li>
                            <li>2 TB bandwidth per month</li>
                            <li>No monitoring included</li>
                            <li>Weekly backups</li>
                            <li>99.9% uptime guarantee</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 support via email and WhatsApp</li>
                            <li>Response time within 8 hours</li>
                            <li>Recovery time within 6 hours</li>
                        </ul>
                    </li>
                </ul>
                <p class="mb-0">I you are interested in this plan, click below button to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary rounded-5 px-5 py-2" href="mailto:{{ env('APP_EMAIL') }}?subject=System%20Administration%20Inquiry&body=Shared%20Plan">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <h2 class="mb-0">Static Plan</h2>
                    <p class="h6 text-primary mb-0">$15/virtual host/month - Suitable for individuals</p>
                    <p class="h6 text-primary mb-0">$45/5 virtual hosts/month - Suitable for businesses</p>
                </div>
                <p class="mb-0">This plan is ideal for individuals and businesses needing to host small to medium-sized, non-scalable web applications with an internal database server. Your web applications will be hosted on a dedicated Lightsail server, with HTTPS implemented using Let's Encrypt.</p>
                <p class="mb-0">In this plan, I will manage the pre-installed operating system, HTTP server, and database server on Lightsail. Additionally, I will handle DNS, TLS, and other necessary configurations. I will also host your application, manage version control, provide regular backups, and offer 24x7 support. See below for more details.</p>
                <ul class="mb-0 ps-3">
                    <li>
                        <p class="mb-0">Server stack</p>
                        <ul class="mb-0 ps-3">
                            <li>Apache</li>
                            <li>nginx</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Technology stack</p>
                        <ul class="mb-0 ps-3">
                            <li>PHP</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Database stack</p>
                        <ul class="mb-0 ps-3">
                            <li>MySQL</li>
                            <li>MariaDB</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Specification</p>
                        <ul class="mb-0 ps-3">
                            <li>1 GB memory</li>
                            <li>2 vCPUs</li>
                            <li>40 GB storage</li>
                            <li>Supports up to 5 virtual hosts</li>
                            <li>10,000 visits per month (1,000 requests per visit)</li>
                            <li>10,000,000 requests per month (200 KB per request)</li>
                            <li>2 TB bandwidth per month</li>
                            <li>No monitoring included</li>
                            <li>Weekly backups</li>
                            <li>99.9% uptime guarantee</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 support via email and WhatsApp</li>
                            <li>Response time within 8 hours</li>
                            <li>Recovery time within 6 hours</li>
                        </ul>
                    </li>
                </ul>
                <p class="mb-0">I you are interested in this plan, click below button to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary rounded-5 px-5 py-2" href="mailto:{{ env('APP_EMAIL') }}?subject=System%20Administration%20Inquiry&body=Static%20Plan">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <h2 class="mb-0">Scale Plan</h2>
                    <p class="h6 text-primary mb-0">$20/virtual host/month - Suitable for individuals</p>
                    <p class="h6 text-primary mb-0">$85/10 virtual hosts/month - Suitable for businesses</p>
                </div>
                <p class="mb-0">This plan is ideal for individuals and businesses aiming to host scalable medium to large-sized web applications with an internal database. Scalability means your web application and server can grow as needed. Your applications will be hosted on a dedicated EC2 instance with HTTPS implemented via Let's Encrypt. I will also monitor your resources and logs using CloudWatch to ensure optimal performance and smooth operation.</p>
                <p class="mb-0">Under this plan, I will manage the operating system, HTTP server, database server, and all other necessary software. I will also handle DNS, TLS, and other configurations. Additionally, I will host your application, manage version control, provide backups, and offer 24x7 support. See below for more details.</p>
                <ul class="mb-0 ps-3">
                    <li>
                        <p class="mb-0">Server stack</p>
                        <ul class="mb-0 ps-3">
                            <li>Apache</li>
                            <li>nginx</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Technology stack</p>
                        <ul class="mb-0 ps-3">
                            <li>PHP</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Database stack</p>
                        <ul class="mb-0 ps-3">
                            <li>MySQL</li>
                            <li>MariaDB</li>
                            <li>PostgreSQL</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Specification</p>
                        <ul class="mb-0 ps-3">
                            <li>2 GB memory</li>
                            <li>2 vCPUs</li>
                            <li>50 GB storage</li>
                            <li>Supports up to 10 virtual hosts</li>
                            <li>10,000 visits per month (1,000 requests per visit)</li>
                            <li>10,000,000 requests per month (200 KB per request)</li>
                            <li>2 TB bandwidth per month</li>
                            <li>Monitoring of CPU, memory, disk, network, and requests</li>
                            <li>Daily backups</li>
                            <li>99.9% uptime guarantee</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 support via email and WhatsApp</li>
                            <li>Response time within 6 hours</li>
                            <li>Recovery time within 4 hours</li>
                        </ul>
                    </li>
                </ul>
                <p class="mb-0">I you are interested in this plan, click below button to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary rounded-5 px-5 py-2" href="mailto:{{ env('APP_EMAIL') }}?subject=System%20Administration%20Inquiry&body=Scale%20Plan">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <h2 class="mb-0">Ultimate Plan</h2>
                    <p class="h6 text-primary mb-0">$65/virtual host/month - Suitable for individuals</p>
                    <p class="h6 text-primary mb-0">$165/20 virtual hosts/month - Suitable for businesses</p>
                </div>
                <p class="mb-0">This plan is ideal for both individuals and businesses needing to host highly scalable, large web applications with RDS. Your applications will be hosted on a dedicated EC2 instance, and the database will be managed through an RDS instance. HTTPS will be implemented using Let's Encrypt. I will also monitor your resources and logs using CloudWatch to ensure optimal performance and smooth operation.</p>
                <p class="mb-0">Under this plan, I will manage the operating system, HTTP server, and all other necessary software. The database server will be managed through RDS. Additionally, I will handle DNS, TLS, and other configurations. I will also host your application, manage version control, provide backups, and offer 24x7 support. See below for more details.</p>
                <ul class="mb-0 ps-3">
                    <li>
                        <p class="mb-0">Server stack</p>
                        <ul class="mb-0 ps-3">
                            <li>Apache</li>
                            <li>nginx</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Technology stack</p>
                        <ul class="mb-0 ps-3">
                            <li>PHP</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Database stack</p>
                        <ul class="mb-0 ps-3">
                            <li>MySQL</li>
                            <li>MariaDB</li>
                            <li>PostgreSQL</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Specification</p>
                        <ul class="mb-0 ps-3">
                            <li>4 GB memory for EC2 + 2 GB memory for RDS</li>
                            <li>2 vCPUs for EC2 + 2 vCPUs for RDS</li>
                            <li>100 GB storage for EBS + 50 GB storage for RDS + 50 GB storage for S3</li>
                            <li>Supports up to 20 virtual hosts</li>
                            <li>10,000 visits per month (1,000 requests per visit)</li>
                            <li>10,000,000 requests per month (200 KB per request)</li>
                            <li>2 TB bandwidth per month</li>
                            <li>Monitoring of CPU, memory, disk, network, and requests</li>
                            <li>Daily backups</li>
                            <li>99.9% uptime guarantee</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 support via email and WhatsApp</li>
                            <li>Response time within 4 hours</li>
                            <li>Recovery time within 2 hours</li>
                        </ul>
                    </li>
                </ul>
                <p class="mb-0">I you are interested in this plan, click below button to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary rounded-5 px-5 py-2" href="mailto:{{ env('APP_EMAIL') }}?subject=System%20Administration%20Inquiry&body=Ultimate%20Plan">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <h2 class="mb-0">Custom Plan</h2>
                    <p class="h6 text-primary mb-0">Contact me for pricing</p>
                </div>
                <p class="mb-0">If the predefined plans do not meet your needs, please contact me to discuss your requirements. I will create a custom plan tailored to your specific needs. Pricing for custom plans will be based on the services you require.</p>
                <p class="mb-0">If you are interested in a custom plan, click the button below to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary rounded-5 px-5 py-2" href="mailto:{{ env('APP_EMAIL') }}?subject=System%20Administration%20Inquiry&body=Custom%20Plan">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h2>Add-On Services</h2>
                <p class="mb-0">The predefined plans above are basic managed hosting plans and do not encompass the entire range of system administration services I offer. Below is a comprehensive list of my add-on services. You can include any of these services with the above plans to create a complete system administration solution.</p>
                <ul class="mb-0 ps-3">
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
                <p class="mb-0">Please contact me for pricing information on these additional services.</p>
            </div>
        </div>
    </div>
@endsection
