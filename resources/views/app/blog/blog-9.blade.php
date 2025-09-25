@php
    $id = 'blog.blog-9';
    $title = 'How Poor Development Skills Break Internet | My Blog';
    $description = 'The most important part of a website\'s lifecycle is probably the development skills, with infrastructure skills coming second. I often come across websites b...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base-1')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">How Poor Development Skills Break Internet</h1>
                <p class="mb-0">The most important part of a website's lifecycle is probably the development skills, with infrastructure skills coming second. I often come across websites built with poor development practices that are easy to hack. Seeing this so often has frustrated me and inspired me to write this article. So without wasting any more time, let's get straight to the point.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <p class="mb-0">Recently, I came across a website that is managed by the government. I believe it was either developed by a government-affiliated company or by a private company that won the project through a tender. According to the Wayback Machine, the website has likely been online since 2015. However, its current version has been in place since 2018. I won't reveal the name of the website because my goal is not to make it a target for hackers.</p>
                <p class="mb-0">I was able to gather a lot of information from this website, but I won't go into all the details here because my main goal is to explain how these issues can harm the internet. The biggest problem I found on the site is that it's vulnerable to cross-site scripting (XSS) attacks. For those who aren't familiar with XSS, it's one of the most common website vulnerabilities. Hackers can use it to inject different types of code into a website to steal information.</p>
                <p class="mb-0">This website led me to look into other government-related websites. In many of them, I found different vulnerabilities and security issues, which seem to be common in government websites. I won't go into detail about every issue I found in this article. What I want to highlight is that these websites were built without considering the basic principles of web development.</p>
                <p class="mb-0">We all know that the government's W&OP system was recently hacked. I can mention it here because it was widely reported in the news at the time. The government claimed there was nothing to worry about. However, sometime after the incident, once things had settled down, the government asked certain types of workers to submit the W&OP form again. I believe this happened because there was no proper backup or failsafe system in place. It seems that all the leaked data was lost forever. What's really concerning is that most of the leaked information was private, and it even included portrait photos of every government worker. Unfortunately, most people either don't know this or simply don't care.</p>
                <p class="mb-0">At the same time, the government plans to digitalize the national identity card (NIC), and with the current level of security they have, I can't even imagine what the consequences could be.</p>
                <p class="mb-0">As far as I know, when the government opens tenders to build websites like these, they ask for all kinds of project documents, including company profiles, tax documents, technical proposals, and software requirement specifications (SRS). They even require project teams to have more than five years of experience, and the team leader is often expected to hold a degree in system engineering or computer science. These requirements may vary depending on the project. What I'm trying to say is—if a team with such qualifications is involved, how could they fail to build a website with even basic security in place? I think you already know the answer to that.</p>
                <p class="mb-0">The most important thing is that this problem isn't limited to government websites. Recently, our company had an opportunity to take on a project. However, we didn't end up getting it because the client said they found a team of undergraduates who were willing to do the job for a lower price. So, we stepped aside and let them go ahead with that team.</p>
                <p class="mb-0">When it comes to private websites, the problem often comes from clients who think web development is easy and anyone with a little coding knowledge can do it. In reality, a website can have hundreds of security problems. Most developers don't even notice these issues at first. Sometimes, they miss the most common vulnerabilities while focusing only on the more advanced ones. That one mistake can cause serious damage to your website and business.</p>
                <p class="mb-0">The funny thing is, most clients don't even care about security. They take a risk and end up losing. After that, they start thinking all service providers are the same. These clients don't realize their mistake of choosing a provider just because it's cheap or physically closer to them. Yes! They believe that having the developer nearby or visiting their office every day will somehow guarantee a great website. That's how people think, but the sad truth is most developers don't like being watched or micromanaged by clients. This is why many companies use business analysts (BAs) to talk with clients, instead of letting clients deal directly with the developers.</p>
                <p class="mb-0">Let's stop going off-topic. My main point is this: this is how the internet gets broken. As a client, this is why it's so important to invest in good web development skills and strong website security. So next time you choose a developer, make sure you decide carefully.</p>
                <p class="mb-0">Web development isn't as simple as many people think. In today's world, building a proper website should be handled by highly skilled professionals—not just a group of coders or undergraduates who believe they know how to code. As a client, you also need to be aware of infrastructure skills, which are equally important. However, I won't go into that topic in this article—maybe I'll cover it another time.</p>
                <p class="mb-0">I'm sharing all of this with you because I'm a highly skilled and experienced back-end engineer, as well as a website security expert. These are purely my personal thoughts and are not meant to harm or mislead anyone in any way.</p>
            </div>
        </div>
    </div>
@endsection
