@php
    $id = 'blog.blog-10';
    $title = 'Introducing IP suite | My blog';
    $description = 'Most developers use protocols like HTTP and HTTPS every day without fully understanding the networking layers beneath them. In this article, I introduce the ...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">Introducing IP suite.</h1>
                        <p>Most developers use protocols like HTTP and HTTPS every day without fully understanding the networking layers beneath them. In this article, I introduce the IP suite and explain its four layers from a developer's perspective, showing how data travels across the web and why protocols like TCP, UDP, QUIC, HTTP, and TLS fit where they do.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <a href="{{ route('blog.index') }}">Blog</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Introducing IP suite</span>
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
                    <p>If we take the web, we can break it down into several layers. I will start from the lowest level.</p>
                    <p>In this article, I intend to talk about the IP suite. We usually refer to it as the TCP/IP model as well. However, when it comes to things like HTTP/3, a question arises as to how far the term TCP/IP can still be used.</p>
                    <p>Instead of going straight to the OSI model, I am going to start with the IP suite because the OSI model is not that practical. While the OSI model is a good theoretical model for learning networking, the IP suite is the best way to explain how the web actually works.</p>
                    <p>I intend to write this article in a way that suits developers. Therefore, I will not include topics that are not relevant from a developer's perspective.</p>
                    <strong>Link layer</strong>
                    <p>This is the lowest layer of the IP suite. It is not a layer that is particularly important to most developers. Therefore, I am not going to explain it in detail. Data is physically transmitted through this layer.</p>
                    <strong>Internet layer</strong>
                    <p>The internet layer is a somewhat important layer. When we transport data across a network, we do not send it as one large unit. Instead, we split it into smaller packets, and those packets are transmitted independently. In addition to the payload, each packet contains important metadata such as the source IP address, destination IP address, and information that identifies where the packet belongs within the original data stream.</p>
                    <p>The internet layer is responsible for constructing IP packets and passing them down to the link layer for transmission. On the receiving side, it deconstructs those packets and passes the payload up to the transport layer.</p>
                    <strong>Transport layer</strong>
                    <p>The transport layer is also a layer that developers should understand because, in infrastructure administration and network programming, we sometimes have to work directly with it.</p>
                    <p>It is at the transport layer that the connection protocol required by the application is implemented. That protocol determines things such as reliability, flow control, congestion control, and packet ordering. In addition, delivering data to the correct application through the appropriate port also happens at the transport layer.</p>
                    <p>When it comes to web development, if we use HTTP/1.1 or HTTP/2 at the application layer, the transport layer protocol is TCP. If we use HTTP/3, the transport layer protocol becomes QUIC. Although QUIC is built on top of UDP, it provides many of the transport features traditionally associated with TCP, which is why it effectively serves as the transport protocol for HTTP/3.</p>
                    <p>In addition, if we use TLS at the application layer, the corresponding port is identified at the transport layer. For example, HTTPS typically uses port 443, while HTTP uses port 80.</p>
                    <strong>Application layer</strong>
                    <p>This is the most important layer of the IP suite for a developer. It is also the topmost layer of the IP suite. A web developer, knowingly or unknowingly, works almost entirely at the application layer. It forms the backbone of a website or any application that relies on web technologies.</p>
                    <p>The application layer is not limited to a single protocol. Depending on the nature of the website we develop, we may use several different protocols. Protocols such as DNS, HTTP, TLS, SMTP, IMAP, POP3, NTP, and SSH all belong to this layer. Since this is only a brief introduction, I am not going to explain all of them here. Instead, I will cover them one by one in future articles. It is important for developers to have a solid understanding of each of these protocols.</p>
                    <p>With that, I conclude this article. Keep following me for updates on my future articles.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
