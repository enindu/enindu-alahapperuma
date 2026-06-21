@php
    $id = 'projects.index';
    $title = 'My projects';
    $description = 'I enjoy coding in my spare time and often work on personal projects to learn, experiment, and solve real-world problems. Here, you can find some of the open-...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">My projects.</h1>
                        <p>I enjoy coding in my spare time and often work on personal projects to learn, experiment, and solve real-world problems. Here, you can find some of the open-source projects I have built, along with repositories I share with the community, such as my dotfiles and other useful resources. All of these projects are available on GitHub. You are free to use, modify, and distribute them according to their respective licenses. Feel free to explore the repositories and make use of anything that helps you.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects-list-section">
        <div class="container">
            <div class="list">
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">dotfiles</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill css"></i>
                                    <span>CSS</span>
                                </div>
                                <div class="technology">
                                    <i class="ri-circle-fill scss"></i>
                                    <span>SCSS</span>
                                </div>
                                <div class="technology">
                                    <i class="ri-circle-fill shell"></i>
                                    <span>Shell</span>
                                </div>
                            </div>
                        </div>
                        <p>My personal configuration files.</p>
                        <a class="button" href="https://github.com/enindu/dotfiles" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">mirrorlist</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>mirrorlist is a simple command line tool to generate pacman mirrorlist.</p>
                        <a class="button" href="https://github.com/enindu/mirrorlist" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Scrawl</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>Scrawl is a simple command line tool to scrape links from a website.</p>
                        <a class="button" href="https://github.com/enindu/scrawl" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">typeof</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>typeof is a simple command line tool to view type of local or remote files.</p>
                        <a class="button" href="https://github.com/enindu/typeof" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">sizeof</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>sizeof is a simple command line tool to view size of local or remote files.</p>
                        <a class="button" href="https://github.com/enindu/sizeof" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">genimg</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>genimg is a simple command line tool to generate random images at specific sizes.</p>
                        <a class="button" href="https://github.com/enindu/genimg" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Threshold</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>Threshold is a simple command line tool to monitor network usage and disable network interface automatically when specified threshold is exeeded.</p>
                        <a class="button" href="https://github.com/enindu/threshold" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">rcat</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>rcat is a simple command line tool to concatenate files in real-time.</p>
                        <a class="button" href="https://github.com/enindu/rcat" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">nusage</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>nusage is a simple command line tool to display network usage in real-time, since last system boot.</p>
                        <a class="button" href="https://github.com/enindu/nusage" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Examples For Blog</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                                <div class="technology">
                                    <i class="ri-circle-fill php"></i>
                                    <span>PHP</span>
                                </div>
                            </div>
                        </div>
                        <p>Example code snippets mentioned in my personal blog.</p>
                        <a class="button" href="https://github.com/enindu/examples-for-blog" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Crop</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>Crop is a simple command line tool to crop images.</p>
                        <a class="button" href="https://github.com/enindu/crop" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Monitor Services</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill shell"></i>
                                    <span>Shell</span>
                                </div>
                            </div>
                        </div>
                        <p>Monitor systemd services, try to recover failed services, and send email alerts.</p>
                        <a class="button" href="https://github.com/enindu/monitor-services" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Palette</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>Palette is a simple library to add ANSI colors to command line output.</p>
                        <a class="button" href="https://github.com/enindu/palette" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">ipcam</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill go"></i>
                                    <span>Go</span>
                                </div>
                            </div>
                        </div>
                        <p>Turn webcam into an IP cam.</p>
                        <a class="button" href="https://github.com/enindu/ipcam" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Enindu Alahapperuma</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill blade"></i>
                                    <span>Blade</span>
                                </div>
                                <div class="technology">
                                    <i class="ri-circle-fill php"></i>
                                    <span>PHP</span>
                                </div>
                                <div class="technology">
                                    <i class="ri-circle-fill scss"></i>
                                    <span>SCSS</span>
                                </div>
                            </div>
                        </div>
                        <p>Source code of my personal website.</p>
                        <a class="button" href="https://github.com/enindu/enindu-alahapperuma" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h1">Common Tools</h2>
                            <div class="technologies">
                                <div class="technology">
                                    <i class="ri-circle-fill shell"></i>
                                    <span>Shell</span>
                                </div>
                            </div>
                        </div>
                        <p>Common shell scripts I use day-to-day tasks.</p>
                        <a class="button" href="https://github.com/enindu/common-tools" target="_blank">
                            <span>View repository</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
