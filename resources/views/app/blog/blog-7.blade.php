@php
    $id = 'blog.blog-7';
    $title = 'Playing With DNS Clients | My Blog';
    $description = 'In a previous article, I provided a low-level overview of DNS servers. While it wasn\'t an exhaustive guide, it covered the fundamentals to help you understan...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">Playing With DNS Clients</h1>
                <p class="mb-0">In a previous article, I provided a low-level overview of DNS servers. While it wasn't an exhaustive guide, it covered the fundamentals to help you understand how DNS works. In this article, I'll build on that foundation with real-world examples. Let's dive in!</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <p class="mb-0">If you've read my previous article, you already know that while we often refer to a "DNS server", in reality, DNS servers function as both clients and servers. Simply put, they act as clients when sending requests to other DNS servers and as servers when processing incoming requests and responding accordingly.</p>
                <p class="mb-0">Apart from DNS servers, there are also DNS clients—standalone tools designed solely for querying DNS records. These tools, commonly known as DNS lookup utilities, help retrieve DNS records for a given domain. Some also function as local DNS resolvers, or stub resolvers, within an operating system. There are many standalone DNS clients available, both as built-in tools in different operating systems and as online services. While I won't cover all of them, I'll focus on a few that I personally use and recommend.</p>
                <p class="mb-0">Let's start with dig, arguably the most popular DNS client available. Developed by ISC, dig comes bundled with their well-known DNS server software, BIND. Here's what a basic dig command looks like:</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>$ dig enindu.com

; <<>> DiG 9.20.6 <<>> enindu.com
;; global options: +cmd
;; Got answer:
;; ->>HEADER<<- opcode: QUERY, status: NOERROR, id: 35919
;; flags: qr rd ra; QUERY: 1, ANSWER: 7, AUTHORITY: 2, ADDITIONAL: 13

;; OPT PSEUDOSECTION:
; EDNS: version: 0, flags:; udp: 4096
;; QUESTION SECTION:
;enindu.com.                    IN      A

;; ANSWER SECTION:
enindu.com.             300     IN      A       104.21.112.1
enindu.com.             300     IN      A       104.21.32.1
enindu.com.             300     IN      A       104.21.96.1
enindu.com.             300     IN      A       104.21.48.1
enindu.com.             300     IN      A       104.21.64.1
enindu.com.             300     IN      A       104.21.16.1
enindu.com.             300     IN      A       104.21.80.1

;; AUTHORITY SECTION:
enindu.com.             19284   IN      NS      kyree.ns.cloudflare.com.
enindu.com.             19284   IN      NS      eloise.ns.cloudflare.com.

;; ADDITIONAL SECTION:
kyree.ns.cloudflare.com. 72430  IN      A       108.162.195.207
kyree.ns.cloudflare.com. 72430  IN      A       162.159.44.207
kyree.ns.cloudflare.com. 72430  IN      A       172.64.35.207
kyree.ns.cloudflare.com. 72430  IN      AAAA    2a06:98c1:50::ac40:23cf
kyree.ns.cloudflare.com. 72430  IN      AAAA    2606:4700:58::a29f:2ccf
kyree.ns.cloudflare.com. 72430  IN      AAAA    2803:f800:50::6ca2:c3cf
eloise.ns.cloudflare.com. 72007 IN      A       108.162.194.208
eloise.ns.cloudflare.com. 72007 IN      A       162.159.38.208
eloise.ns.cloudflare.com. 72007 IN      A       172.64.34.208
eloise.ns.cloudflare.com. 72007 IN      AAAA    2803:f800:50::6ca2:c2d0
eloise.ns.cloudflare.com. 72007 IN      AAAA    2a06:98c1:50::ac40:22d0
eloise.ns.cloudflare.com. 72007 IN      AAAA    2606:4700:50::a29f:26d0

;; Query time: 32 msec
;; SERVER: 192.168.1.1#53(192.168.1.1) (UDP)
;; WHEN: Wed Mar 12 19:07:35 +0530 2025
;; MSG SIZE  rcvd: 470</code></pre>
                <p class="mb-0">Aside from the DNS records, take a look at this line.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>;; SERVER: 192.168.1.1#53(192.168.1.1) (UDP)</code></pre>
                <p class="mb-0">Assuming you've already read my previous article and are familiar with the workings of different DNS servers, you can likely identify that this code triggers a DNS query through the recursive resolver on my local network, with UDP being used at the transport layer. Now, let's quickly address the "#53" in this line, which I didn't cover in the previous article. "#53" refers to the port number of the DNS server. As specified in RFC whatever number, port 53 must be used for both TCP and UDP in DNS communication.</p>
                <p class="mb-0">If you need to use a specific recursive resolver, you can enter its IP address, and dig will automatically use port 53 to send the DNS query. Here's an example:</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>dig @8.8.8.8 enindu.com</code></pre>
                <p class="mb-0">Notice the IP address 8.8.8.8 in this command—it belongs to Google's public DNS server. These types of servers are commonly referred to as public resolvers. While Google DNS is well-known, there are several other public resolvers available. Two notable ones I often use are Cloudflare (1.1.1.1) and Quad9 (9.9.9.9)—both easy to remember due to their simple numeric patterns.</p>
                <p class="mb-0">You can switch between TCP and UDP using the following commands.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>dig @8.8.8.8 enindu.com +tcp # Use TCP
dig @8.8.8.8 enindu.com +notcp # Use UDP</code></pre>
                <p class="mb-0">Notice the +tcp and +notcp options in these commands—this is how query options are specified in dig. If you want to explore more about dig, you can use the dig -h command. I won't be covering dig any further in this article.</p>
                <p class="mb-0">As I mentioned earlier, another standalone DNS client worth noting is doggo. It's written in Go and offers a more user-friendly experience compared to dig. Since I won't be covering it in detail, I encourage you to explore it on your own. You can learn more at <a href="https://github.com/mr-karan/doggo" class="text-decoration-none" target="_blank">https://github.com/mr-karan/doggo</a>.</p>
                <p class="mb-0">By now, you're familiar with DNS clients and the ports used by DNS servers. If you've read my previous article, you already understand how a DNS client works under the hood, so there's no need to revisit that. Instead, let's explore different scenarios for building a standalone DNS client from scratch.</p>
                <p class="mb-0">First, I want to mention that I'll be using the Go programming language to demonstrate these scenarios. I'll take a high-level approach by leveraging an external DNS library instead of manually crafting DNS queries. While manually creating DNS queries can be insightful, it adds unnecessary complexity for this demonstration, where the focus is on the functionality of a DNS client. For these examples, I'll be using the <a href="https://github.com/miekg/dns" class="text-decoration-none" target="_blank">https://github.com/miekg/dns</a> library.</p>
                <p class="mb-0">As you know, when you visit a website using a domain name, the local DNS resolver first queries a recursive resolver. Now, let's build a simple command-line DNS client that retrieves the authoritative name server for a given domain.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>var (
   domain            string
   recursiveResolver string
)


// Point 1
flag.StringVar(&domain, "d", "", "Domain name to lookup")
flag.StringVar(&recursiveResolver, "rr", "8.8.8.8", "IP address of recursive resolver to use")
flag.Parse()


if domain == "" {
   flag.PrintDefaults()
   return
}


// Point 2
client := dns.Client{}


// Point 3
message := dns.Msg{}


message.SetQuestion(dns.Fqdn(domain), dns.TypeNS)


// Point 4
response, _, err := client.Exchange(&message, net.JoinHostPort(recursiveResolver, "53"))
if err != nil {
   panic(err)
}


fmt.Printf("%s\n", response.String())</code></pre>
                <p class="mb-0">This code sends a DNS request to the specified recursive resolver to retrieve NS records, which identify the authoritative name servers for the given domain.</p>
                <p class="mb-0">You can ignore "Point 1", as it simply defines command-line flags—a standard part of Go. When running this application, you must specify the -d flag for the domain you want to look up. The -rr flag is optional; by default, the application uses Google's DNS server. If you prefer a different DNS server, you can define it using this flag.</p>
                <p class="mb-0">In "Point 2", we create the DNS client, which will allow us to perform DNS message exchanges in the future. This client handles the communication between our application and the DNS servers.</p>
                <p class="mb-0">In "Point 3", we create the DNS message. I'd like to add a bit more detail here. While I covered the general structure of a DNS request in my previous article, I didn't go into the specifics of each field. I'm not going to cover all the fields in this case, but since we'll be using the question field, it's worth mentioning that it has three subfields.</p>
                <ul class="mb-0 ps-3">
                    <li>QNAME: The fully qualified domain name (FQDN) that we want to look up.</li>
                    <li>QTYPE: The type of DNS record we're requesting, such as A, AAAA, or NS.</li>
                    <li>QCLASS: Typically IN (Internet), as we're usually working with internet-related DNS queries.</li>
                </ul>
                <p class="mb-0">In "Point 4", we exchange the DNS message with the recursive resolver and receive the response. In this example, I print the response in a dig-like format, but in reality, you can process the response however you like. If the response is successful, the answer field of the DNS response typically contains the authoritative name server when querying a recursive server.</p>
                <p class="mb-0">Now we know that sending a DNS request to a recursive resolver is fairly simple and straightforward using a library like miekg/dns. Additionally, in DNS resolution, we can bypass the recursive resolver and send DNS requests directly to the root servers.</p>
                <p class="mb-0">As I mentioned in my previous article, root servers sit at the top of the DNS hierarchy. There are 13 logical root servers, and these servers don't store information about every domain in the world. Instead, they hold records for all the top-level domain (TLD) servers. From there, we can trace the request to any authoritative server for a given domain.</p>
                <p class="mb-0">Memorizing the hostnames of all root servers is quite simple. Each root server has the domain root-servers.net, and its subdomain follows the English alphabet in order. So, the root server names are like a.root-servers.net, b.root-servers.net, and so on, up to m.root-servers.net, since there are only 13 root servers.</p>
                <p class="mb-0">Memorizing the IP addresses of all root servers can be challenging, but you can easily retrieve them using a tool like nslookup by querying the hostname. This way, you don't have to manually memorize the IP addresses of each root server.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>$ nslookup a.root-servers.net

Server:         192.168.1.1
Address:        192.168.1.1#53

Non-authoritative answer:
Name:   a.root-servers.net
Address: 198.41.0.4
Name:   a.root-servers.net
Address: 2001:503:ba3e::2:30</code></pre>
                <p class="mb-0">As shown in the example above, the IPv4 address for a.root-servers.net is 198.41.0.4.</p>
                <p class="mb-0">Now that we have the IP address for a.root-servers.net, we can use this information to create a DNS client that communicates directly with the root servers. The code structure will follow the same approach as the previous example.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>var domain string


flag.StringVar(&domain, "d", "", "Domain name to lookup")
flag.Parse()


if domain == "" {
   flag.PrintDefaults()
   return
}


client := dns.Client{}
message := dns.Msg{}


message.SetQuestion(dns.Fqdn(domain), dns.TypeNS)


// Point 1
rootServers := []string{
   "198.41.0.4",
   "170.247.170.2",
   "192.33.4.12",
   "199.7.91.13",
   "192.203.230.10",
   "192.5.5.241",
   "192.112.36.4",
   "198.97.190.53",
   "192.36.148.17",
   "192.58.128.30",
   "193.0.14.129",
   "199.7.83.42",
   "202.12.27.33",
}


// Point 2
for _, rootServer := range rootServers {
   response, _, err := client.Exchange(&message, net.JoinHostPort(rootServer, "53"))
   if err != nil {
       panic(err)
   }


   fmt.Printf("%s\n", response.String())
}</code></pre>
                <p class="mb-0">This is how our code looks.</p>
                <p class="mb-0">In "Point 1", we added all the IP addresses of the 13 root servers in a slice. While this isn't strictly necessary, sending a query to any single root server will work because they are all interconnected and will provide the relevant answers regardless of which root server we use. I've included all the IP addresses here for your reference.</p>
                <p class="mb-0">In "Point 2", we iterate through the root servers slice and retrieve DNS responses from each root server. We iterate because I included all the root servers in the slice.</p>
                <p class="mb-0">If you run this on your own, you'll notice that the root servers do not respond with an answer field. This is because root servers do not have information about authoritative name servers, but rather they contain information about TLD servers. In general, when you send DNS requests to root or TLD servers, there won't be an answer section in the response. Instead, you'll need to check the authority section. As the next step, we need to send a DNS request to a TLD server to retrieve the authoritative name servers.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>var domain string


flag.StringVar(&domain, "d", "", "Domain name to lookup")
flag.Parse()


if domain == "" {
   flag.PrintDefaults()
   return
}


client := dns.Client{}
message := dns.Msg{}


message.SetQuestion(dns.Fqdn(domain), dns.TypeNS)


// Point 1
rootServerResponse, _, err := client.Exchange(&message, net.JoinHostPort("198.41.0.4", "53"))
if err != nil {
   panic(err)
}


// Point 2
tldServerHostname := strings.TrimRight(strings.ReplaceAll(rootServerResponse.Ns[0].String(), rootServerResponse.Ns[0].Header().String(), ""), ".")


// Point 3
tldServerIPAddresses := []string{}


ipAddresses, err := net.LookupIP(tldServerHostname)
if err != nil {
   panic(err)
}


for _, ipAddress := range ipAddresses {
   tldServerIPAddress := ipAddress.To4().String()


   if tldServerIPAddress != "<nil>" && !slices.Contains(tldServerIPAddresses, tldServerIPAddress) {
       tldServerIPAddresses = append(tldServerIPAddresses, tldServerIPAddress)
   }
}


// Point 4
tldServerResponse, _, err := client.Exchange(&message, net.JoinHostPort(tldServerIPAddresses[0], "53"))
if err != nil {
   panic(err)
}


fmt.Printf("%s\n", tldServerResponse.String())</code></pre>
                <p class="mb-0">Here's what our code looks like. It's fairly long, so let me explain it step by step.</p>
                <p class="mb-0">In "Point 1", since it's unnecessary to iterate over every root server, we send the DNS request directly to a.root-servers.net.</p>
                <p class="mb-0">In "Point 2", we create the hostname of the TLD, specifically the first TLD server that the root server provides. Just like with the root servers, it's unnecessary to iterate over every TLD server. We only need one TLD server in this case, and it will give us the authoritative name server we're looking for.</p>
                <p class="mb-0">For a .com domain, there are 13 TLD servers worldwide, just like the root servers. The number of TLD servers may vary for different TLDs.</p>
                <p class="mb-0">In "Point 3", we retrieve the IP addresses of the TLD server. Typically, there will be two IP addresses: one for IPv4 and one for IPv6. We need to handle this manually in the code because different TLDs have different IP addresses.</p>
                <p class="mb-0">In "Point 4", we perform the DNS exchange and receive the response from the TLD server. As you can see when running the code, the response will not have an answer field, just like in the previous code. Instead, the authority field contains the information about the authoritative server.</p>
                <p class="mb-0">If we already know the authoritative name server, we can send a DNS request directly to it to retrieve the DNS records of a domain name. This will be the final scenario that I'll demonstrate.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>var (
   domain                  string
   authoritativeNameServer string
)


flag.StringVar(&domain, "d", "", "Domain name to lookup")
flag.StringVar(&authoritativeNameServer, "ans", "", "IP address of authoritative name server to use")
flag.Parse()


if domain == "" || authoritativeNameServer == "" {
   flag.PrintDefaults()
   return
}


client := dns.Client{}
message := dns.Msg{}


message.SetQuestion(dns.Fqdn(domain), dns.TypeA)


response, _, err := client.Exchange(&message, net.JoinHostPort(authoritativeNameServer, "53"))
if err != nil {
   panic(err)
}


fmt.Printf("%s\n", response.String())</code></pre>
                <p class="mb-0">This code is similar to the first one I provided, so I don't need to explain it step by step. The only difference is that we send the DNS request to the relevant authoritative name server instead of a recursive resolver. Additionally, we use QTYPE as type A instead of NS, since we need to retrieve A records in the final step. Also, unlike the previous two examples where we sent DNS requests to root and TLD servers, the response will have an answer section.</p>
                <p class="mb-0">This article has already become quite long, but I would like to mention a bonus point. In this section, we will find open resolvers in public networks and test them by sending DNS requests. Please note that this may not be legal in some countries, so exercise caution before attempting this. Additionally, this is not a hacking tutorial; it is simply a demonstration for educational purposes.</p>
                <p class="mb-0">I use several tools to achieve this. First, we need to find the authoritative name server of the domain we are interested in. We can do this by using the "dig" tool. Let's assume we want to find the NS records for "winterasiatours.com". Our goal is to obtain just the IP address of a random authoritative name server, and that's why we're doing this—nothing more.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>$ dig @8.8.8.8 winterasiatours.com NS +short

ns2.zirconhost.com.
ns1.zirconhost.com.</code></pre>
                <p class="mb-0">We have obtained two NS records. Now, let's use the "nslookup" tool to get the IP address of one of these NS records.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>$ nslookup ns1.zirconhost.com

Server:         192.168.1.1
Address:        192.168.1.1#53

Non-authoritative answer:
Name:   ns1.zirconhost.com
Address: 49.12.121.200</code></pre>
                <p class="mb-0">We have the IP address "49.12.121.200". Now, we can proceed by scanning the IP range from 49.12.121.0 to 49.12.121.255 for open DNS (Port 53) ports. I'll be using the "masscan" tool for this task, but you can also use the widely popular "nmap" tool if you prefer.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code># masscan --ports 53 49.12.121.0/24

Starting masscan 1.3.2 (http://bit.ly/14GZzcT) at 2025-03-13 14:30:11 GMT
Initiating SYN Stealth Scan
Scanning 256 hosts [1 port/host]
Discovered open port 53/tcp on 49.12.121.225
Discovered open port 53/tcp on 49.12.121.101
Discovered open port 53/tcp on 49.12.121.59
Discovered open port 53/tcp on 49.12.121.38
Discovered open port 53/tcp on 49.12.121.189
Discovered open port 53/tcp on 49.12.121.216
Discovered open port 53/tcp on 49.12.121.17
Discovered open port 53/tcp on 49.12.121.32
Discovered open port 53/tcp on 49.12.121.200
Discovered open port 53/tcp on 49.12.121.144
Discovered open port 53/tcp on 49.12.121.133
Discovered open port 53/tcp on 49.12.121.57
Discovered open port 53/tcp on 49.12.121.218
Discovered open port 53/tcp on 49.12.121.147
Discovered open port 53/tcp on 49.12.121.55</code></pre>
                <p class="mb-0">So we found 15 open DNS ports. We don't know yet whether these are recursive resolvers, authoritative name servers, or misconfigured DNS servers, also known as open resolvers. Let's find out by sending DNS requests. Let's create a small program using Go.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>servers := []string{
   "49.12.121.225",
   "49.12.121.101",
   "49.12.121.59",
   "49.12.121.38",
   "49.12.121.189",
   "49.12.121.216",
   "49.12.121.17",
   "49.12.121.32",
   "49.12.121.200",
   "49.12.121.144",
   "49.12.121.133",
   "49.12.121.57",
   "49.12.121.218",
   "49.12.121.147",
   "49.12.121.55",
}


client := dns.Client{}
message := dns.Msg{}


message.SetQuestion(dns.Fqdn("winterasiatours.com"), dns.TypeA)


for _, server := range servers {
   fmt.Printf("Scanning %s", server)


   response, _, err := client.Exchange(&message, net.JoinHostPort(server, "53"))
   if err != nil {
       fmt.Printf("\r")
       fmt.Printf("%s -> %v\n", server, err)
       continue
   }


   fmt.Printf("\r")


   if len(response.Answer) > 0 {
       fmt.Printf("%s -> An open resolver\n", server)
   } else {
       fmt.Printf("%s -> Not an open resolver\n", server)
   }
}</code></pre>
                <p class="mb-0">If you run this code, you'll see that none of them is an open resolver. You can scan for more open DNS ports in different IP addresses. I've covered this point, and from now on, it's up to you to experiment on your own.</p>
                <p class="mb-0">So this will be the end of this article. You can find all the examples I used in this article at the following link: <a href="https://github.com/enindu/examples-for-blog/tree/master/playing-with-dns-clients" class="text-decoration-none" target="_blank">https://github.com/enindu/examples-for-blog/tree/master/playing-with-dns-clients</a>.</p>
            </div>
        </div>
    </div>
@endsection
