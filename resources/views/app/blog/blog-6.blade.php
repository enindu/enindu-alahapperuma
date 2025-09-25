@php
    $id = 'blog.blog-6';
    $title = 'Understanding DNS | My Blog';
    $description = 'Most developers have a high-level understanding of DNS. However, for web developers, grasping DNS at a low level is crucial. Writing yet another article expl...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base-1')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">Understanding DNS</h1>
                <p class="mb-0">Most developers have a high-level understanding of DNS. However, for web developers, grasping DNS at a low level is crucial. Writing yet another article explaining DNS from a high-level perspective would be redundant. Instead, this article delves into the DNS protocol and its inner workings at a low level, offering a system administrator's perspective. Let's dive in.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <p class="mb-0">First off, assuming you're familiar with the OSI model, DNS operates as an application-layer protocol. It allows systems to translate domain names into IP addresses, eliminating the need to memorize IP addresses manually. As a critical component of web infrastructure, DNS is something every web developer should understand, along with fundamental HTTP concepts. While it's not mandatory for the average web developer, having a solid grasp of how DNS works can be highly beneficial. Here's a simplified explanation of its operation.</p>
                <p class="mb-0">First, it's important to understand that there are four types of DNS servers. I won't go into detail about each one here, but you'll get a basic understanding of them as we progress through this article.</p>
                <ul class="mb-0 ps-3">
                    <li>Recursive resolver</li>
                    <li>Root server</li>
                    <li>TLD server</li>
                    <li>Authoritative name server</li>
                </ul>
                <p class="mb-0">DNS resolution involves several steps that we need to examine.</p>
                <p class="mb-0">When you visit a website using its domain name from an HTTP client, your operating system's local DNS resolver first attempts to resolve the IP address using the OS cache. Don't confuse the local DNS resolver with a recursive resolver—it's not a DNS server, just a resolver. Every general-purpose operating system has their own built-in DNS resolver. If it finds the IP address in the cache, it sends it directly to the HTTP client, allowing the client to immediately initiate a connection with that IP address.</p>
                <p class="mb-0">If your local DNS resolver can't find the IP address in the cache, it generates a DNS request (Also known as a DNS query, though I prefer the term "DNS request") and forwards it to your local network. Most local networks have a recursive resolver, which is a DNS server. If no recursive resolver exists in your network, your ISP may use an external one, such as Google's DNS (8.8.8.8) or Cloudflare's DNS (1.1.1.1). A recursive resolver acts as an aggregator or distributor. It first checks its own cache for the IP address. If found, it sends a DNS response to the local resolver. The local resolver will likely cache the IP address to save bandwidth the next time you visit the same domain. Finally, the IP address is sent to the HTTP client, which then initiates a connection with the server.</p>
                <p class="mb-0">If the recursive resolver doesn't have the IP address in its cache, it forwards the DNS request to the root servers. While root servers don't store IP addresses themselves, they serve as the top of the DNS hierarchy. They contain information to help locate the appropriate TLD (Top-Level Domain) servers. The root server will then send a DNS response to the recursive resolver, directing it to the relevant TLD server.</p>
                <p class="mb-0">Let me briefly explain the DNS hierarchy. The DNS hierarchy is a tree-like structure organized into different levels, with each level having a specific responsibility. Here's the structure from top to bottom:</p>
                <ul class="mb-0 ps-3">
                    <li>Root level</li>
                    <li>TLD level</li>
                    <li>Subdomain level</li>
                    <li>Host level</li>
                </ul>
                <p class="mb-0">Next, the recursive resolver forwards the DNS request to the TLD server. While TLD servers don't store IP addresses either, they have information about authoritative name servers, which hold the original DNS records (Also known as resource records) such as A, AAAA, CNAME, TXT, MX, etc. Typically, A and AAAA records store the IP addresses for the domain. The TLD server then sends a DNS response back to the recursive resolver, directing it to the appropriate authoritative name server.</p>
                <p class="mb-0">If you've been following the article so far, you might have an important question: TLD servers are responsible for storing DNS records for top-level domains, so what happens if you try to visit a second-level domain like .edu.lk? Well, second-level domains require an extra step in the DNS resolution process. When you visit a second-level domain, the TLD server will respond with the respective authoritative server to the SLD. This means the recursive resolver may need to send an additional DNS request to the relevant authoritative server of the SLD to continue the DNS resolution. This extra step explains why SLDs are often cheaper.</p>
                <p class="mb-0">Once the recursive resolver receives the authoritative name server, it forwards the DNS request to that server. The authoritative name server will then respond with the correct IP address, which the recursive resolver caches for future use. The recursive resolver then sends the DNS response back to the local resolver. The local resolver also caches the IP address to save bandwidth and time, before passing it to the HTTP client. Finally, the HTTP client can begin establishing a connection with the provided IP address.</p>
                <p class="mb-0">Now, you might have another question: what if the domain has a subdomain? In this case, the DNS resolution process might require an extra step, especially for deeply nested subdomains. When you visit a subdomain, there are two possible scenarios that can occur during the authoritative name server step.</p>
                <ul class="mb-0 ps-3">
                    <li>If the subdomain uses the same authoritative name server, that server will respond directly with the IP address for the subdomain.</li>
                    <li>If the subdomain uses a separate authoritative name server, the current authoritative name server will respond with the details of the respective authoritative name server. In this case, the recursive resolver will need to perform an additional step to look up the IP address from the relevant authoritative name server.</li>
                </ul>
                <p class="mb-0">Reading this, it might seem like a complex process. However, in reality, the entire DNS resolution process is completed in milliseconds. In most cases, you don't even reach the authoritative name server part. The local DNS resolver typically handles the lookup, and in some cases, the process only involves the recursive resolver without going any further.</p>
                <p class="mb-0">So, this is how DNS works from a low-level perspective.</p>
                <p class="mb-0">I mentioned DNS requests and responses above. Now, let's compare DNS with another application-level protocol, HTTP. DNS is similar to HTTP but with some key differences. While HTTP follows the Hypertext Transfer Protocol, DNS follows the Domain Name Service protocol. Additionally, HTTP uses TCP to transport data, whereas DNS uses both TCP and UDP depending on the use case. UDP is typically used for most DNS queries due to its efficiency and low overhead. However, TCP is required for longer responses, such as DNSSEC, which exceed 512 bytes, as well as for specific operations like zone transfers.</p>
                <p class="mb-0">Both protocols have distinct messaging formats. I explained the HTTP messaging format in a previous article. In reality, DNS requests and responses are sent in binary. They share a similar structure, though they differ in specific details. Here's how a DNS request is structured.</p>
                <ul class="mb-0 ps-3">
                    <li>Transaction ID</li>
                    <li>Flags</li>
                    <li>Questions</li>
                    <li>Answer RRs</li>
                    <li>Authority RRs</li>
                    <li>Additional RRs</li>
                    <li>Query name</li>
                    <li>Query type</li>
                    <li>Query class</li>
                </ul>
                <p class="mb-0">The main difference is that the DNS response includes an additional field called "answer data". Here's the structure of a DNS response.</p>
                <ul class="mb-0 ps-3">
                    <li>Transaction ID</li>
                    <li>Flags</li>
                    <li>Questions</li>
                    <li>Answer RRs</li>
                    <li>Authority RRs</li>
                    <li>Additional RRs</li>
                    <li>Query name</li>
                    <li>Query type</li>
                    <li>Query class</li>
                    <li>Answer data</li>
                </ul>
                <p class="mb-0">I'm not going to explain every field in this structure in detail, but there is something worth mentioning. In DNS requests, the "Answer RRs", "Authority RRs", and "Additional RRs" fields are always null because they store information about DNS records. These fields get populated when DNS responses are sent.</p>
                <p class="mb-0">Now that you're familiar with the DNS message structure, I won't go into DNS records in detail since most web developers are already familiar with them. Instead, let's focus on the structure of a DNS record.</p>
                <ul class="mb-0 ps-3">
                    <li>NAME: The domain or subdomain to which the record applies.</li>
                    <li>TYPE: The type of DNS record, such as A, AAAA, CNAME, TXT, MX, etc.</li>
                    <li>TTL: The duration for which the record can be cached.</li>
                    <li>RDATA: The record's data, which varies by type. For example, an A record contains an IPv4 address, an AAAA record contains an IPv6 address, and an MX record includes the mail exchange server's hostname and priority.</li>
                    <li>CLASS: Typically set to "IN" to indicate an internet address.</li>
                </ul>
                <p class="mb-0">How a DNS server stores data depends on the DNS server software. As a web developer, you typically don't need to worry about this, but it's useful to understand. Some DNS software, like BIND, stores records in zone files, which are simple text files. Other implementations use different storage methods, such as key-value databases like Redis and RocksDB or relational databases like MySQL and PostgreSQL.</p>
                <p class="mb-0">At this stage, you have a fundamental understanding of how a low-level DNS server operates. With that, I conclude this article.</p>
            </div>
        </div>
    </div>
@endsection
