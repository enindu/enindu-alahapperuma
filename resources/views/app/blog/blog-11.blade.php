@php
    $id = 'blog.blog-11';
    $title = 'Do people still care about security? | My blog';
    $description = 'This research highlights a troubling pattern I repeatedly encounter while assessing real-world web applications in Sri Lanka: security is often treated as an...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">Do people still care about security?</h1>
                        <p>This research highlights a troubling pattern I repeatedly encounter while assessing real-world web applications in Sri Lanka: security is often treated as an afterthought. Based on manual security assessments of 22 websites, this article examines the vulnerabilities I discovered, why they existed, how organizations responded, and what those findings reveal about the current state of application security.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <a href="{{ route('blog.index') }}">Blog</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Do people still care about security?</span>
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
                    <p>The majority of small-to-medium business owners and decision-makers care about nothing. They have a website for the sake of having one. A large portion of the remainder care about how their website looks, while another small portion care about how well it solves their business problems. Only a tiny fraction care about security while solving those business problems through their websites. This is the bitter truth, and I say it based on my own experience.</p>
                    <p>A few weeks ago, I conducted several security assessments on randomly selected websites across Sri Lanka. All of these assessments were performed manually at the application level without relying on automated vulnerability scanners. Although manual testing isn't the fastest approach, I always prefer it because it gives me complete flexibility. I use automated tools only to help discover potential issues, while manual testing often makes it easier to identify vulnerabilities that automated tools either overlook or cannot reliably detect.</p>
                    <p>Here are the statistics from the assessments.</p>
                    <ul>
                        <li>22 websites scanned</li>
                        <li>9 websites (41%) had vulnerabilities of any severity</li>
                        <li>8 websites (36%) had high-severity vulnerabilities</li>
                        <li>1 website (5%) had low-severity vulnerabilities</li>
                    </ul>
                    <p>Those numbers are pretty impressive, aren't they? I won't discuss every vulnerable website here, but let's look at a few examples.</p>
                    <strong>Website 1: An e-commerce website</strong>
                    <p>This website was built with CodeIgniter and hosted on HostGator. It had two vulnerabilities.</p>
                    <ul>
                        <li>CWE-552: Files or directories accessible to external parties</li>
                        <li>CWE-306: Missing authentication for a critical function</li>
                    </ul>
                    <p>Because of these vulnerabilities, an attacker could download almost the entire source code and gain access to the administrative interface. This happened because the administrator didn't properly configure the server, and the developer failed to secure the administrative routes.</p>
                    <strong>Website 2: A classified advertisement website</strong>
                    <p>This website was built with Next.js, uses Firebase services, and is hosted on Vercel. It had one vulnerability.</p>
                    <ul>
                        <li>CWE-639: Authorization bypass through user-controlled key</li>
                    </ul>
                    <p>Because of this vulnerability, an attacker could gain read and write access to other users' data using their own authenticated token. This happened because the developer failed to properly enforce authorization on the server side.</p>
                    <strong>Website 3: A classified advertisement website</strong>
                    <p>This website was built with Laravel and hosted on Hostinger. It had one vulnerability.</p>
                    <ul>
                        <li>CWE-287: Improper authentication</li>
                    </ul>
                    <p>Because of this vulnerability, an attacker could gain full access to other users' dashboards simply by using their user IDs. This happened because the developer didn't use the correct techniques to verify users' email addresses.</p>
                    <strong>Website 4: A government website</strong>
                    <p>This website was built with PHP and hosted on SLT. It had one vulnerability.</p>
                    <ul>
                        <li>CWE-639: Authorization bypass through user-controlled key</li>
                    </ul>
                    <p>Because of this vulnerability, an attacker could view sensitive information belonging to government employees using only their NIC numbers. This happened because the developer failed to properly isolate users' data.</p>
                    <strong>Website 5: An e-commerce website</strong>
                    <p>This website was built with PHP and proxied through Imperva Incapsula. It had one vulnerability.</p>
                    <ul>
                        <li>CWE-384: Session fixation</li>
                    </ul>
                    <p>Because of this vulnerability, an attacker could create payment sessions with malicious amounts for future orders. This happened because the developer didn't correctly implement the order creation process.</p>
                    <p>Every one of these vulnerabilities existed because of mistakes made by either the administrator or the developer. It also doesn't matter which technology they use; the underlying vulnerability remains the same. This is a perfect example of why technology alone won't protect you from application logic vulnerabilities. The logic is written by the developer, and if the developer gets it wrong, the logic fails—and when the logic fails, the website and ultimately the business can fail as well.</p>
                    <p>Looking at these examples, two out of the five websites were SaaS applications, while the other three were built by third-party development companies. The SaaS applications managed data belonging to their own organizations, whereas the other three managed data on behalf of third parties. I deliberately chose these five websites because they demonstrate that the problem isn't limited to one type of organization, one hosting provider, one programming language, or one development model. Regardless of who owned the application or who developed it, none of them had adequately protected the data they were responsible for.</p>
                    <p>As a responsible security researcher, I reported every vulnerability to its respective owner or developer. Here are the results of those disclosures.</p>
                    <ul>
                        <li>22 incidents reported</li>
                        <li>5 (23%) responded</li>
                        <li>4 (18%) were not interested</li>
                        <li>1 (5%) fixed the reported vulnerability</li>
                    </ul>
                    <p>Despite those reports, 21 of the affected websites continued to operate without fixing the reported issues. The SaaS applications I mentioned earlier are still actively promoting their platforms. There is also a possibility that you are using one of them without even realizing the risks.</p>
                    <p>I prefer to speak with evidence rather than assumptions, and the numbers speak for themselves. People simply don't care much about security. I'd even say that Sri Lanka has become a fairly good playground for inexperienced attackers to learn hacking. I'm not even referring to sophisticated exploitation techniques or advanced attacks. These were straightforward application-level vulnerabilities introduced by administrators or developers through poor implementation and configuration.</p>
                    <p>Small companies don't care much about security. I know that because I've seen it repeatedly. Many of them don't even understand what security actually means or what qualifies as sensitive data. If their website gets compromised, they simply build another one with a different company. If their SaaS application gets compromised, their users may never even know about it. To them, it's just another technical issue. They restore a previous backup, bring the platform back online, and continue operating as if nothing happened. The users remain unaware that their sensitive information may already be in someone else's possession. Even when users become aware of an incident, many simply don't care. If they fall victim to a phishing email, they ignore it or create a new email address. It's as simple as that. Hardly anyone seems genuinely concerned about the security of their personal data.</p>
                    <p>That's the bitter truth. We still have a very long way to go. Computer literacy alone will not solve this problem because the issue isn't just about knowing how to use technology; it's about understanding the value of data and the importance of protecting it. With that in mind, I conclude this security research report.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
