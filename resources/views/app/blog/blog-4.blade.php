@php
    $id = 'blog.blog-4';
    $title = 'Playing With HTTP Servers | My Blog';
    $description = 'In a previous article, I provided a high-level overview of HTTP. In this article, I will dive into the low-level implementation of HTTP, covering topics such...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">Playing With HTTP Servers</h1>
                <p class="mb-0">In a previous article, I provided a high-level overview of HTTP. In this article, I will dive into the low-level implementation of HTTP, covering topics such as creating HTTP servers and even lower-level TCP servers. Discussions on HTTP and TCP clients will be reserved for a separate article. Expect plenty of code examples. So, let's get started.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <p class="mb-0">First, let me explain why I chose the Go language for these implementations. I use Go because I am highly familiar with it, and its ecosystem—including the standard library and external packages—provides excellent support for network-level programming. Additionally, Go's concurrency model makes it highly efficient at handling millions of requests per second with ease. This makes Go particularly well-suited for tasks like server-side development, especially when building HTTP servers.</p>
                <p class="mb-0">Since my focus is on programming rather than the language itself, I won't go into detailed explanations of language-specific features. Additionally, I will approach this topic from the highest level down to the lowest level possible. So, let's begin at the highest level.</p>
                <p class="mb-0">In these examples, I used the standard library to create servers.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>http.HandleFunc("/", func(rw http.ResponseWriter, r *http.Request) {
    // Point 1
})

err := http.ListenAndServe("127.0.0.1:5000", nil)
if err != nil {
    panic(err)
}</code></pre>
                <p class="mb-0">This is what a basic HTTP server looks like in Go. Pretty simple, right? However, there are many considerations to take into account before deploying this into production, though I don't intend to discuss that at the moment. Let me explain how this works.</p>
                <p class="mb-0">Assuming you're familiar with the OSI model, I'm referring to the application layer. HTTP is an application layer protocol. When someone sends an HTTP request to the "/" path on this server, nothing will happen, obviously, because I haven't added any functionality yet. However, my focus here is on explaining how to implement that functionality.</p>
                <p class="mb-0">When the request reaches "Point 1", all HTTP validations have already been handled in the background, so the developer doesn't need to worry about them. This is because we're taking a high-level approach. The Go standard library takes care of everything for you. As a result, this is a language-specific HTTP server in Go.</p>
                <p class="mb-0">At "Point 1", you can read the data from the request, generate the appropriate response, and send it back to the client. The final code will look something like this.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>http.HandleFunc("/", func(rw http.ResponseWriter, r *http.Request) {
    // Point 1
    if r.Method != http.MethodGet {
        http.Error(rw, "method not allowed", http.StatusMethodNotAllowed)
        return
    }

    // Point 2
    fmt.Fprintf(rw, "Hello world!")
})

err := http.ListenAndServe("127.0.0.1:5000", nil)
if err != nil {
    panic(err)
}</code></pre>
                <p class="mb-0">As you can see, at "Point 1", we only checked if the method is correct, and if it is, we send the response right away at "Point 2". If you run this and visit "127.0.0.1:5000" in your web browser, you'll see the "Hello world!" message. If you open the developer tools and inspect the response, you'll see a properly formatted HTTP message like this.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>HTTP/1.1 200 OK
Content-Length: 12
Content-Type: text/plain; charset=utf-8

Hello world!</code></pre>
                <p class="mb-0">Even if we don't explicitly set the headers or status code when sending the response, the standard library, specifically the "http" package, will handle those automatically for us. This is what a high-level library or framework does. For instance, if we add HTML code to the response instead of plain text, the "Content-Type" response header will automatically change from "text/plain" to "text/html".</p>
                <p class="mb-0">Now, let me take it a step lower. To achieve this, we need to create a TCP server.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>listener, err := net.Listen("tcp", "127.0.0.1:5000")
if err != nil {
    panic(err)
}

defer listener.Close()

for {
    // Point 1
    connection, err := listener.Accept()
    if err != nil {
        continue
    }

    // Point 2
    go func(c net.Conn) {
        // Point 3
    }(connection)
}</code></pre>
                <p class="mb-0">It's still pretty simple, right? This is not an HTTP server, but a lower-level TCP server. If you run this and navigate to "127.0.0.1:5000" in your web browser, the browser will never stop loading because the browser is an HTTP client and expects to connect with an HTTP server. An HTTP server needs to follow a set of rules, and this application does not adhere to those rules. I'll explain this in more detail below.</p>
                <p class="mb-0">Before explaining this code, I'd like to quickly mention something. Since this is the structure of a TCP server, you can implement any TCP-based protocol, such as SSH, SMTP, FTP, etc., using this same structure.</p>
                <p class="mb-0">Let's start with "Point 1". When someone sends a request (An HTTP request, in this case) to the server, their connection will be established at "Point 1". We place this connection establishment inside an infinite loop because the connection needs to remain open until the client or an error closes it. Connection establishment itself doesn't do anything automatically; after that, we need to read the request.</p>
                <p class="mb-0">In "Point 2", we handle requests concurrently. There can be several requests—potentially even hundreds—for a single connection. For example, imagine serving a typical web page on this server, which has multiple assets. Each asset would generate a separate request. If we only handled a single request without concurrent threads, the assets of that page would not be served. That's why we open requests in multiple concurrent threads.</p>
                <p class="mb-0">Now comes the interesting part, "Point 3". This is where we need to implement the HTTP rules. For a minimal working example,</p>
                <ul class="mb-0 ps-3">
                    <li>We need to read the HTTP start line and extract the HTTP method, path, and version. For this example, let's assume the method is "GET", the path is "/", and for simplicity, the version is "HTTP/1.1".</li>
                    <li>Next, we need to read all the HTTP headers. For a minimal working example, we should at least read the "Host" and "Connection" headers. Let's assume the host is "enindu.com" and the connection is "keep-alive". Before moving forward, it's important to understand the meaning of these headers. The "Host" header specifies the host to which the request should be sent, while the "Connection" header defines the behavior of the connection. "keep-alive" means the connection will remain open until all requests are processed, reducing the overhead of creating a new connection for each request.</li>
                </ul>
                <p class="mb-0">Please note that this example will not work for HTTP/2 or HTTP/3 versions, which are widely used these days. In fact, even my own website is served using the HTTP/3 version.</p>
                <p class="mb-0">After verifying all the HTTP rules in "Point 3", we need to serve the relevant response back to the client. To do this, we must respect and follow the HTTP protocol thoroughly. Unlike the high-level example, we need to handle this manually. We need to construct a proper HTTP message and send it back to the client. The HTTP message will look something like this:</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>HTTP/1.1 200 OK
Content-Length: 12
Content-Type: text/plain; charset=utf-8

Hello world!</code></pre>
                <p class="mb-0">So, the final code will look something like this:</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>listener, err := net.Listen("tcp", "127.0.0.1:5000")
if err != nil {
    panic(err)
}

defer listener.Close()

for {
    connection, err := listener.Accept()
    if err != nil {
        continue
    }

    go func(c net.Conn) {
        reader := bufio.NewReader(c)

        // Point 1
        startLine, err := reader.ReadString('\n')
        if err != nil {
            panic(err)
        }

        fmt.Printf("%s", startLine)

        // Point 2
        for {
            header, err := reader.ReadString('\n')
            if err != nil || header == "\r\n" {
                break
            }

            fmt.Printf("%s", header)
        }

        // Point 3
        writer := bufio.NewWriter(c)

        writer.WriteString("HTTP/1.1 200 OK\r\n")
        writer.WriteString("Content-Length: 12\r\n")
        writer.WriteString("Content-Type: text/html; charset=utf-8\r\n")
        writer.WriteString("\r\n")
        writer.WriteString("Hello world!\n")
        writer.Flush()
    }(connection)
}</code></pre>
                <p class="mb-0">Let's break this down. In "Point 1", we read the HTTP start line. I didn't include the HTTP validations in this example for the sake of simplicity. However, at this point, you must verify the HTTP request to ensure it follows the correct structure and adheres to the HTTP protocol.</p>
                <p class="mb-0">In "Point 2", we read all the HTTP headers. It's important to read all available data, even if we don't use it. Although we don't read the body here because the client hasn't sent any data in the body, it's also necessary to read the body and discard any data from the buffer. This ensures that the buffer is cleared and no leftover data remains.</p>
                <p class="mb-0">In "Point 3", we send the response to the client with the minimum required headers. Now, take a look at the "Content-Length" header we manually added. We hard-coded the value as 12 because "Hello world!" has 12 characters. Now, try changing the value of the "Content-Length" header to 13. Your browser will probably keep loading forever. This happens because the client expects 13 characters, but only 12 characters are sent. The connection will remain open until the 13th character is received, as specified by the client's "Connection" header, which indicates that the connection should stay open. On the other hand, if you set the "Content-Length" to 11, the client will not receive the last character of "Hello world!" since it expects only 11 characters. This will result in an incomplete response.</p>
                <p class="mb-0">Now think we serve a different string like "𝒜". Even though it seems like a single character, this character actually has 4 bytes: 0xF0, 0x9D, 0x92, 0x9C. So, it's important to understand that in the "Content-Length" header, we define the length in terms of bytes, not the number of characters. The code below will work correctly.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>writer.WriteString("HTTP/1.1 200 OK\r\n")
writer.WriteString("Content-Length: 4\r\n")
writer.WriteString("Content-Type: text/html; charset=utf-8\r\n")
writer.WriteString("\r\n")
writer.WriteString(string([]byte{0xF0, 0x9D, 0x92, 0x9C}) + "\n")</code></pre>
                <p class="mb-0">But will this code work correctly? Will it display the "𝒜" character in the browser?</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>writer.WriteString("HTTP/1.1 200 OK\r\n")
writer.WriteString("Content-Length: 4\r\n")
writer.WriteString("Content-Type: text/html; charset=iso-8859-1\r\n")
writer.WriteString("\r\n")
writer.WriteString(string([]byte{0xF0, 0x9D, 0x92, 0x9C}) + "\n")</code></pre>
                <p class="mb-0">No, it will not. Because the "𝒜" character doesn't work in the "ISO-8859-1" encoding. You need to do your homework on the character encoding.</p>
                <p class="mb-0">These are just two examples. Now you understand that writing a custom HTTP server requires much more knowledge in every aspect. Even small things like these can ruin terabytes of data and the reputation built over years in a second. That's why I always believe that a web developer carries a huge responsibility and must have knowledge in every aspect of web development.</p>
                <p class="mb-0">This article has already become quite long, so I will continue discussing the lowest-level HTTP server in a separate article. You can find the code I used for this demonstration at <a class="text-decoration-none" href="https://github.com/enindu/examples-for-blog/tree/master/playing-with-http-servers" target="_blank">https://github.com/enindu/examples-for-blog/tree/master/playing-with-http-servers</a>.</p>
            </div>
        </div>
    </div>
@endsection
