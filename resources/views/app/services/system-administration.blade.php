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
                <p class="mb-0">I offer several pricing plans for system administration, including a custom plan that allows you to tailor services to your specific needs. You don't need to worry about server management—I will take care of it for you. All predefined plans are hosted on AWS and support only PHP. If you need to host a web application built with a different programming language or on a different platform, you will need to purchase a customized plan. See below to find the right plan for you. Please note that all charges are billed annually.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <h2 class="mb-0">Shared Plan</h2>
                    <p class="h6 mb-0">$5/virtual host/month - Suitable for individuals</p>
                </div>
                <p class="mb-0">This plan is suitable for basic web applications. Your web application will be hosted on a shared EC2 server alongside other applications. HTTPS will be implemented using Let's Encrypt for secure communication.</p>
                <p class="mb-0">In this plan, the operating system, HTTP server, database server, and all other relevant software are fully managed by me. Additionally, I will handle DNS and TLS Furthermore, I will host your application, implement version control, provide regular backups, and offer 24x7 support. See below for more information.</p>
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
                            <li>Up to 1 virtual hosts</li>
                            <li>10,000 visits/month (1,000 requests/visit)</li>
                            <li>10,000,000 requests/month (200 KB/request)</li>
                            <li>2 TB bandwidth/month</li>
                            <li>No monitoring</li>
                            <li>Weekly backup</li>
                            <li>99.9% uptime</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 via emails and WhatsApp messages</li>
                            <li>Up to 8 hours to response</li>
                            <li>Up to 6 hours to recovery</li>
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
                    <p class="h6 mb-0">$15/virtual host/month - Suitable for individuals</p>
                    <p class="h6 mb-0">$45/5 virtual hosts/month - Suitable for businesses</p>
                </div>
                <p class="mb-0">This plan is suitable for both individual customers and businesses who need to host small to medium-sized, non-scalable web applications with an internal database server. Your web applications will be hosted on a dedicated Lightsail server, and HTTPS will be implemented using Let's Encrypt.</p>
                <p class="mb-0">In this plan, since the operating system, HTTP server, and database server are pre-installed in Lightsail, I will manage the relevant software for you. Additionally, I will handle DNS, TLS, and other necessary configurations. Furthermore, I will host your application, version control it, provide regular backups, and offer 24x7 support. See below for more information.</p>
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
                            <li>Up to 5 virtual hosts</li>
                            <li>10,000 visits/month (1,000 requests/visit)</li>
                            <li>10,000,000 requests/month (200 KB/request)</li>
                            <li>2 TB bandwidth/month</li>
                            <li>No monitoring</li>
                            <li>Weekly backup</li>
                            <li>99.9% uptime</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 via emails and WhatsApp messages</li>
                            <li>Up to 8 hours to response</li>
                            <li>Up to 6 hours to recovery</li>
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
                    <p class="h6 mb-0">$20/virtual host/month - Suitable for individuals</p>
                    <p class="h6 mb-0">$85/10 virtual hosts/month - Suitable for businesses</p>
                </div>
                <p class="mb-0">This plan is suitable for both individuals and businesses looking to host scalable medium to large-sized web applications with an internal database. By scalable, I mean that both your web application and server can scale to any size as needed. Your web applications will be hosted on a dedicated EC2 instance, and HTTPS will be implemented using Let's Encrypt. Additionally, I will monitor your resources and logs using CloudWatch and make the necessary fine-tunes to ensure optimal performance and smooth operation</p>
                <p class="mb-0">In this plan, I will manage the operating system, HTTP server, database server, and all other relevant software for you. Additionally, I will handle DNS, TLS, and other necessary configurations. Furthermore, I will host your application, version control it, provide backups, and offer 24x7 support. See below for more information.</p>
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
                            <li>Up to 10 virtual hosts</li>
                            <li>10,000 visits/month (1,000 requests/visit)</li>
                            <li>10,000,000 requests/month (200 KB/request)</li>
                            <li>2 TB bandwidth/month</li>
                            <li>CPU, memory, disk, network, and requests monitoring</li>
                            <li>Daily backup</li>
                            <li>99.9% uptime</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 via emails and WhatsApp messages</li>
                            <li>Up to 6 hours to response</li>
                            <li>Up to 4 hours to recovery</li>
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
                    <p class="h6 mb-0">$65/virtual host/month - Suitable for individuals</p>
                    <p class="h6 mb-0">$165/20 virtual hosts/month - Suitable for businesses</p>
                </div>
                <p class="mb-0">This plan is suitable for both individuals and businesses looking to host highly scalable large-sized web applications with RDS. Your web applications will be hosted on a dedicated EC2 instance, while database management will be handled through an RDS instance. HTTPS will be implemented using Let's Encrypt. Additionally, I will monitor your resources and logs using CloudWatch and make the necessary fine-tunes to ensure optimal performance and smooth operation.</p>
                <p class="mb-0">In this plan, I will manage the operating system, HTTP server, and all other relevant software for you. The database server will be managed through RDS. Additionally, I will handle DNS, TLS, and other necessary configurations. Furthermore, I will host your application, version control it, provide backups, and offer 24x7 support. See below for more information.</p>
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
                            <li>4 GB (EC2) + 2 GB (RDS) memory</li>
                            <li>2 (EC2) + 2 (RDS) vCPUs</li>
                            <li>100 GB (EBS) + 50 GB (RDS) + 50 GB (S3) storage</li>
                            <li>Up to 20 virtual hosts</li>
                            <li>10,000 visits/month (1,000 requests/visit)</li>
                            <li>10,000,000 requests/month (200 KB/request)</li>
                            <li>2 TB bandwidth/month</li>
                            <li>CPU, memory, disk, network, and requests monitoring</li>
                            <li>Daily backup</li>
                            <li>99.9% uptime</li>
                        </ul>
                    </li>
                    <li>
                        <p class="mb-0">Support</p>
                        <ul class="mb-0 ps-3">
                            <li>24x7 via emails and WhatsApp messages</li>
                            <li>Up to 4 hours to response</li>
                            <li>Up to 2 hours to recovery</li>
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
                    <p class="h6 mb-0">Contact me for pricing</p>
                </div>
                <p class="mb-0">If you need a plan that is not covered by the predefined plans, you can contact me to discuss your requirements. I will create a custom plan that meets your specific needs. Please note that the pricing for custom plans will be determined based on the services you require.</p>
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
                <p class="mb-0">All of the predefined plans above are basic managed hosting plans and do not cover the full scope of system administration. I offer a wide range of system administration services beyond these plans. Here is the full list of my add-on services. You can add any of these services to the above plans to complete a comprehensive system administration solution.</p>
                <ul class="mb-0 ps-3">
                    <li>Management of proxy servers</li>
                    <li>Management of email servers</li>
                    <li>Hosting for Go, Node.js, Python, Ruby, Java, and .NET applications</li>
                    <li>DNS management services</li>
                    <li>CDN management services</li>
                    <li>Load balancing solutions</li>
                    <li>API gateway management</li>
                    <li>Resource and log monitoring</li>
                    <li>Threat monitoring and security scanning</li>
                    <li>Server notification services</li>
                    <li>Custom task management solutions</li>
                    <li>Custom software development services</li>
                    <li>Custom backup solutions</li>
                    <li>Implementation of network firewalls and WAF</li>
                </ul>
                <p class="mb-0">Contact me to find the pricing details for these services.</p>
            </div>
        </div>
    </div>
@endsection
