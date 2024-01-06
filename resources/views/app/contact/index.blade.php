@php
    $id = 'contact';
    $title = 'Need to get in touch with me?';
    $description = 'Experience spam-free communication through email. Your privacy is my priority. A warm welcome to clients, developers, and all seeking genuine connections!';
    $keywords = 'enindu, enindu alahapperuma, back-end developer, back-end developer sri lanka, freelancing back-end developer, web developer, web developer sri lanka, freelancing web developer, php developer, php developer sri lanka, freelancing php developer, go developer, go developer sri lanka, freelancing go developer, system administrator, system administrator sri lanka, freelancing system administrator, logo designer, logo designer sri lanka, freelancing logo designer, software engineer, software engineer sri lanka, freelancer, freelancer sri lanka';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="card-title mb-0" id="web-developer-from-sri-lanka">{{ $title }}</h1>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <p>Should you ever need to reach out to me for any reason, feel free to drop me an email at <a href="mailto:enindu@gmail.com">enindu@gmail.com</a>. Simply click on the provided link, and it will seamlessly open your preferred <a href="https://en.wikipedia.org/wiki/Email_client" target="_blank">email client</a>. In the event that you don't have an email client installed on your system, worry not; just head over to your web-based email service, be it <a href="https://mail.google.com" target="_blank">Gmail</a>, <a href="https://outlook.live.com" target="_blank">Outlook</a>, <a href="https://mail.yahoo.com" target="_blank">Yahoo Mail</a>, or any other you prefer, and shoot me a message at the aforementioned email address. Rest assured, this is my private email, and I have absolutely no intention of engaging in <a href="https://en.wikipedia.org/wiki/Email_spam" target="_blank">spam</a> or selling your email addresses for any purpose.</p>
                        <p>I've chosen not to employ traditional contact forms for various reasons, and here's why:</p>
                        <h2 id="avoiding-spams">Avoiding spams</h2>
                        <p>Traditional contact forms have the potential to expose you to spam. They may inadvertently leak your email address, resulting in unsolicited messages cluttering your inbox. Spam can be not only annoying but also pose security risks, compromising your online experience. By using the provided email address, we can maintain a direct and secure communication channel, minimizing the risk of unwanted intrusions.</p>
                        <h2 id="privacy-concerns">Privacy concerns</h2>
                        <p>Despite appearing user-friendly, traditional contact forms might be deceiving. <a href="https://en.wikipedia.org/wiki/Code_injection" target="_blank">Malicious code can be injected</a> into these forms, compromising your privacy and exposing you to unforeseen <a href="https://en.wikipedia.org/wiki/Computer_security" target="_blank">security threats</a>. The transparency of using email communication helps you maintain control over your personal information. By avoiding the unknown functionalities of contact forms, you can ensure a safer interaction and protect your digital privacy.</p>
                        <h2 id="preventing-spam-influx">Preventing spam influx</h2>
                        <p>The use of traditional contact forms may subject me to an influx of spam, which is something I strive to avoid. I value genuine communication and prefer not to sift through unwanted messages on a daily basis. Genuine emails are not only more appreciated but also foster a more meaningful and productive exchange. By using email as the primary mode of contact, we can filter out the noise and focus on authentic interactions.</p>
                        <h2 id="clarity-in-communication">Clarity in communication</h2>
                        <p>When utilizing a contact form, you may not always be aware of the destination email address. This lack of transparency can lead to uncertainties about where your message is headed. By encouraging direct email communication, I aim to maintain transparency and build trust. You know exactly where your message is going, ensuring a straightforward and reliable means of contact.</p>
                        <p class="mb-0">In embracing this approach, I extend a warm welcome to everyone, be it clients, fellow developers, or anyone else. Your freedom and convenience are of utmost importance, and I appreciate the genuine and direct connections that can be established through email communication. Whether you're reaching out for professional collaboration or simply to share thoughts, you're all welcome!</p>
                    </div>
                </div>
                <x-includes.footer />
            </div>
        </div>
    </div>
</x-layouts.base>
