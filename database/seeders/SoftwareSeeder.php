<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Software;

class SoftwareSeeder extends Seeder
{
    public function run()
    {
    
        $softwareData = [
     
                [
                    'name' => 'Microsoft Word',
                    'link' => 'https://www.microsoft.com/en-us/microsoft-365/word',
                    'description' => 'Microsoft Word is a word processor developed by Microsoft.',
                ],
                [
                    'name' => 'Adobe Photoshop',
                    'link' => 'https://www.adobe.com/products/photoshop.html',
                    'description' => 'Adobe Photoshop is a raster graphics editor developed by Adobe Inc.',
                ],
                [
                    'name' => 'Google Chrome',
                    'link' => 'https://www.google.com/chrome/',
                    'description' => 'Google Chrome is a web browser developed by Google.',
                ],
                [
                    'name' => 'Mozilla Firefox',
                    'link' => 'https://www.mozilla.org/en-US/firefox/',
                    'description' => 'Mozilla Firefox is a free and open-source web browser developed by the Mozilla Foundation.',
                ],
                [
                    'name' => 'Microsoft Excel',
                    'link' => 'https://www.microsoft.com/en-us/microsoft-365/excel',
                    'description' => 'Microsoft Excel is a spreadsheet program included in the Microsoft Office suite.',
                ],
                [
                    'name' => 'Visual Studio Code',
                    'link' => 'https://code.visualstudio.com/',
                    'description' => 'Visual Studio Code is a source-code editor developed by Microsoft.',
                ],
                [
                    'name' => 'Sublime Text',
                    'link' => 'https://www.sublimetext.com/',
                    'description' => 'Sublime Text is a proprietary cross-platform source code editor.',
                ],
                [
                    'name' => 'JetBrains IntelliJ IDEA',
                    'link' => 'https://www.jetbrains.com/idea/',
                    'description' => 'IntelliJ IDEA is an integrated development environment written in Java for developing computer software.',
                ],
                [
                    'name' => 'Slack',
                    'link' => 'https://slack.com/',
                    'description' => 'Slack is a messaging program designed for teams and workplaces.',
                ],
                [
                    'name' => 'Skype',
                    'link' => 'https://www.skype.com/',
                    'description' => 'Skype is a telecommunications application that specializes in providing video chat and voice calls.',
                ],
                [
                    'name' => 'Zoom',
                    'link' => 'https://zoom.us/',
                    'description' => 'Zoom is a cloud-based video conferencing service.',
                ],
                [
                    'name' => 'Microsoft Teams',
                    'link' => 'https://www.microsoft.com/en-us/microsoft-teams/group-chat-software',
                    'description' => 'Microsoft Teams is a collaboration app that helps your team stay organized and have conversations all in one place.',
                ],
                [
                    'name' => 'Notion',
                    'link' => 'https://www.notion.so/',
                    'description' => 'Notion is an application that provides components such as notes, databases, kanban boards, wikis, calendars and reminders.',
                ],
                [
                    'name' => 'Trello',
                    'link' => 'https://trello.com/',
                    'description' => 'Trello is a web-based Kanban-style list-making application.',
                ],
                [
                    'name' => 'Asana',
                    'link' => 'https://asana.com/',
                    'description' => 'Asana is a web and mobile application designed to help teams organize, track, and manage their work.',
                ],
                [
                    'name' => 'Evernote',
                    'link' => 'https://evernote.com/',
                    'description' => 'Evernote is an app designed for note taking, organizing, task management, and archiving.',
                ],
                [
                    'name' => 'Dropbox',
                    'link' => 'https://www.dropbox.com/',
                    'description' => 'Dropbox is a file hosting service that offers cloud storage, file synchronization, personal cloud, and client software.',
                ],
                [
                    'name' => 'Google Drive',
                    'link' => 'https://www.google.com/drive/',
                    'description' => 'Google Drive is a file storage and synchronization service developed by Google.',
                ],
                [
                    'name' => 'OneDrive',
                    'link' => 'https://www.microsoft.com/en-us/microsoft-365/onedrive/online-cloud-storage',
                    'description' => 'OneDrive is a file hosting service and synchronization service operated by Microsoft as part of its suite of Office Online services.',
                ],
                [
                    'name' => 'GitHub',
                    'link' => 'https://github.com/',
                    'description' => 'GitHub is a provider of Internet hosting for software development and version control using Git.',
                ],
                [
                    'name' => 'Bitbucket',
                    'link' => 'https://bitbucket.org/',
                    'description' => 'Bitbucket is a Git repository management solution designed for professional teams.',
                ],
                [
                    'name' => 'GitLab',
                    'link' => 'https://about.gitlab.com/',
                    'description' => 'GitLab is a web-based DevOps lifecycle tool that provides a Git repository manager providing wiki, issue-tracking, and CI/CD pipeline features.',
                ],
                [
                    'name' => 'Jira',
                    'link' => 'https://www.atlassian.com/software/jira',
                    'description' => 'Jira is a proprietary issue tracking product developed by Atlassian that allows bug tracking and agile project management.',
                ],
                [
                    'name' => 'Basecamp',
                    'link' => 'https://basecamp.com/',
                    'description' => 'Basecamp is a web-based project management tool developed by Basecamp.',
                ],
                [
                    'name' => 'Confluence',
                    'link' => 'https://www.atlassian.com/software/confluence',
                    'description' => 'Confluence is a web-based corporate wiki developed by Atlassian.',
                ],
                [
                    'name' => 'Salesforce',
                    'link' => 'https://www.salesforce.com/',
                    'description' => 'Salesforce is a cloud-based software company that provides customer relationship management services.',
                ],
                [
                    'name' => 'HubSpot',
                    'link' => 'https://www.hubspot.com/',
                    'description' => 'HubSpot is a developer and marketer of software products for inbound marketing, sales, and customer service.',
                ],
                [
                    'name' => 'Zendesk',
                    'link' => 'https://www.zendesk.com/',
                    'description' => 'Zendesk is a customer service software company that provides a platform for customer service and engagement.',
                ],
                [
                    'name' => 'Mailchimp',
                    'link' => 'https://mailchimp.com/',
                    'description' => 'Mailchimp is a marketing automation platform and an email marketing service.',
                ],
                [
                    'name' => 'Hootsuite',
                    'link' => 'https://hootsuite.com/',
                    'description' => 'Hootsuite is a social media management platform.',
                ],
                [
                    'name' => 'Buffer',
                    'link' => 'https://buffer.com/',
                    'description' => 'Buffer is a software application for the web and mobile, designed to manage accounts in social networks.',
                ],
                [
                    'name' => 'Canva',
                    'link' => 'https://www.canva.com/',
                    'description' => 'Canva is a graphic design platform that allows users to create social media graphics, presentations, posters and other visual content.',
                ],
                [
                    'name' => 'Figma',
                    'link' => 'https://www.figma.com/',
                    'description' => 'Figma is a vector graphics editor and prototyping tool which is primarily web-based.',
                ],
                [
                    'name' => 'Sketch',
                    'link' => 'https://www.sketch.com/',
                    'description' => 'Sketch is a vector graphics editor for macOS.',
                ],
                [
                    'name' => 'InVision',
                    'link' => 'https://www.invisionapp.com/',
                    'description' => 'InVision is a digital product design platform that helps design teams create, collaborate, and manage prototypes and designs.',
                ],
                [
                    'name' => 'Adobe XD',
                    'link' => 'https://www.adobe.com/products/xd.html',
                    'description' => 'Adobe XD is a vector-based user experience design tool for web apps and mobile apps.',
                ],
                [
                    'name' => 'Microsoft PowerPoint',
                    'link' => 'https://www.microsoft.com/en-us/microsoft-365/powerpoint',
                    'description' => 'Microsoft PowerPoint is a presentation program included in the Microsoft Office suite.',
                ],
                [
                    'name' => 'LibreOffice',
                    'link' => 'https://www.libreoffice.org/',
                    'description' => 'LibreOffice is a free and open-source office suite, a project of The Document Foundation.',
                ],
                [
                    'name' => 'OpenOffice',
                    'link' => 'https://www.openoffice.org/',
                    'description' => 'Apache OpenOffice is an open-source office productivity software suite.',
                ],
                [
                    'name' => 'VLC Media Player',
                    'link' => 'https://www.videolan.org/vlc/',
                    'description' => 'VLC Media Player is a free and open-source, portable, cross-platform media player software and streaming media server.',
                ],
                [
                    'name' => 'Spotify',
                    'link' => 'https://www
            
            .spotify.com/',
                    'description' => 'Spotify is a digital music service that gives you access to millions of songs.',
                ],
                [
                    'name' => 'iTunes',
                    'link' => 'https://www.apple.com/itunes/',
                    'description' => 'iTunes is a media player, media library, Internet radio broadcaster, and mobile device management application.',
                ],
                [
                    'name' => 'Amazon Music',
                    'link' => 'https://music.amazon.com/',
                    'description' => 'Amazon Music is a music streaming platform and online music store.',
                ],
                [
                    'name' => 'Google Play Music',
                    'link' => 'https://play.google.com/music/',
                    'description' => 'Google Play Music was a music and podcast streaming service and online music locker operated by Google.',
                ],
                [
                    'name' => 'YouTube Music',
                    'link' => 'https://music.youtube.com/',
                    'description' => 'YouTube Music is a music streaming service developed by YouTube, a subsidiary of Google.',
                ],
                [
                    'name' => 'Audacity',
                    'link' => 'https://www.audacityteam.org/',
                    'description' => 'Audacity is a free and open-source digital audio editor and recording application software.',
                ],
                [
                    'name' => 'GarageBand',
                    'link' => 'https://www.apple.com/mac/garageband/',
                    'description' => 'GarageBand is a line of digital audio workstations for macOS and iOS that allows users to create music or podcasts.',
                ],
                [
                    'name' => 'Ableton Live',
                    'link' => 'https://www.ableton.com/en/live/',
                    'description' => 'Ableton Live is a digital audio workstation developed by Ableton for macOS and Windows.',
                ],
                [
                    'name' => 'FL Studio',
                    'link' => 'https://www.image-line.com/flstudio/',
                    'description' => 'FL Studio is a complete software music production environment or Digital Audio Workstation (DAW).',
                ],
                [
                    'name' => 'Pro Tools',
                    'link' => 'https://www.avid.com/pro-tools',
                    'description' => 'Pro Tools is a digital audio workstation developed and released by Avid Technology.',
                ],
                [
                    'name' => 'Adobe Premiere Pro',
                    'link' => 'https://www.adobe.com/products/premiere.html',
                    'description' => 'Adobe Premiere Pro is a timeline-based video editing software application developed by Adobe Inc.',
                ],
                [
                    'name' => 'Final Cut Pro',
                    'link' => 'https://www.apple.com/final-cut-pro/',
                    'description' => 'Final Cut Pro is a series of non-linear video editing software programs developed by Macromedia Inc. and later Apple Inc.',
                ],
                [
                    'name' => 'DaVinci Resolve',
                    'link' => 'https://www.blackmagicdesign.com/products/davinciresolve/',
                    'description' => 'DaVinci Resolve is a color correction and non-linear video editing (NLE) application for macOS, Windows, and Linux.',
                ],
                [
                    'name' => 'Sony Vegas Pro',
                    'link' => 'https://www.vegascreativesoftware.com/us/vegas-pro/',
                    'description' => 'Vegas Pro is a video editing software package for non-linear editing (NLE).',
                ],
                [
                    'name' => 'Lightworks',
                    'link' => 'https://www.lwks.com/',
                    'description' => 'Lightworks is a professional non-linear editing system for editing and mastering digital video.',
                ],
                [
                    'name' => 'Avid Media Composer',
                    'link' => 'https://www.avid.com/media-composer',
                    'description' => 'Avid Media Composer is a film and video non-linear editing system.',
                ],
                [
                    'name' => 'HandBrake',
                    'link' => 'https://handbrake.fr/',
                    'description' => 'HandBrake is a free and open-source transcoder for digital video files.',
                ],
                [
                    'name' => 'Adobe After Effects',
                    'link' => 'https://www.adobe.com/products/aftereffects.html',
                    'description' => 'Adobe After Effects is a digital visual effects, motion graphics, and compositing application.',
                ],
                [
                    'name' => 'Blender',
                    'link' => 'https://www.blender.org/',
                    'description' => 'Blender is a free and open-source 3D computer graphics software toolset used for creating animated films, visual effects, art, 3D printed models, motion graphics, interactive 3D applications, virtual reality, and computer games.',
                ],
                [
                    'name' => 'Autodesk Maya',
                    'link' => 'https://www.autodesk.com/products/maya/overview',
                    'description' => 'Autodesk Maya is a 3D computer graphics application that runs on Windows, macOS and Linux, originally developed by Alias Systems Corporation and currently owned and developed by Autodesk.',
                ],
                [
                    'name' => '3ds Max',
                    'link' => 'https://www.autodesk.com/products/3ds-max/overview',
                    'description' => '3ds Max is a professional 3D computer graphics program for making 3D animations, models, games and images.',
                ],
                [
                    'name' => 'Unity',
                    'link' => 'https://unity.com/',
                    'description' => 'Unity is a cross-platform game engine developed by Unity Technologies.',
                ],
                [
                    'name' => 'Unreal Engine',
                    'link' => 'https://www.unrealengine.com/',
                    'description' => 'Unreal Engine is a game engine developed by Epic Games.',
                ],
                [
                    'name' => 'CryEngine',
                    'link' => 'https://www.cryengine.com/',
                    'description' => 'CryEngine is a game engine designed by the German game developer Crytek.',
                ],
                [
                    'name' => 'Godot',
                    'link' => 'https://godotengine.org/',
                    'description' => 'Godot is a cross-platform, free and open-source game engine.',
                ],
                [
                    'name' => 'Xcode',
                    'link' => 'https://developer.apple.com/xcode/',
                    'description' => 'Xcode is an integrated development environment (IDE) for macOS containing a suite of software development tools developed by Apple.',
                ],
                [
                    'name' => 'Android Studio',
                    'link' => 'https://developer.android.com/studio',
                    'description' => 'Android Studio is the official integrated development environment (IDE) for Google\'s Android operating system.',
                ],
                [
                    'name' => 'Eclipse',
                    'link' => 'https://www.eclipse.org/',
                    'description' => 'Eclipse is an integrated development environment (IDE) used in computer programming.',
                ],
                [
                    'name' => 'NetBeans',
                    'link' => 'https://netbeans.apache.org/',
                    'description' => 'NetBeans is an integrated development environment (IDE) for Java.',
                ],
                [
                    'name' => 'PyCharm',
                    'link' => 'https://www.jetbrains.com/pycharm/',
                    'description' => 'PyCharm is an integrated development environment (IDE) used in computer programming, specifically for the Python language.',
                ],
                [
                    'name' => 'RubyMine',
                    'link' => 'https://www.jetbrains.com/ruby/',
                    'description' => 'RubyMine is a commercial IDE for Ruby and Ruby on Rails developed by JetBrains.',
                ],
                [
                    'name' => 'PHPStorm',
                    'link' => 'https://www.jetbrains.com/phpstorm/',
                    'description' => 'PHPStorm is a commercial, cross-platform IDE for PHP, built by the Czech company JetBrains.',
                ],
                [
                    'name' => 'WebStorm',
                    'link' => 'https://www.jetbrains.com/webstorm/',
                    'description' => 'WebStorm is a powerful IDE for modern JavaScript development, by JetBrains.',
                ],
                [
                    'name' => 'AppCode',
                    'link' => 'https://www.jetbrains.com/objc/',
                    'description' => 'AppCode is an integrated development environment (IDE) for Swift, Objective-C, C, C++, and JavaScript development built on JetBrains\' IntelliJ IDEA platform.',
                ],
                [
                    'name' => 'CLion',
                    'link' => 'https://www.jetbrains.com/clion/',
                    'description' => 'CLion is a cross-platform C and C++ IDE for macOS, Linux, and Windows integrated with the CMake build system.',
                ],
                [
                    'name' => 'Rider',
                    'link' => 'https://www.jetbrains.com/rider/',
                    'description' => 'Rider is a cross-platform .NET IDE by JetBrains.',
                ],
                [
                    'name' => 'DataGrip',
                    'link' => 'https://www.jetbrains.com/datagrip/',
                    'description' => 'DataGrip is a database management environment for Windows, Linux, and macOS.',
                ],
                [
                    'name' => 'MySQL Workbench',
                    'link' => 'https://www.mysql.com/products/workbench/',
                    'description' => 'MySQL Workbench is a unified visual tool for database architects, developers, and DBAs.',
                ],
                [
                    'name' => 'Postman',
                    'link' => 'https://www.postman.com/',
                    'description' => 'Post
            
            man is a collaboration platform for API development.',
                ],
                [
                    'name' => 'Tableau',
                    'link' => 'https://www.tableau.com/',
                    'description' => 'Tableau is a visual analytics platform transforming the way we use data to solve problems.',
                ],
                [
                    'name' => 'Power BI',
                    'link' => 'https://powerbi.microsoft.com/',
                    'description' => 'Power BI is a business analytics service by Microsoft.',
                ],
                [
                    'name' => 'QlikView',
                    'link' => 'https://www.qlik.com/us/products/qlikview',
                    'description' => 'QlikView is a business discovery platform that provides self-service BI for business users in organizations.',
                ],
                [
                    'name' => 'SAS',
                    'link' => 'https://www.sas.com/',
                    'description' => 'SAS is a software suite developed by SAS Institute for advanced analytics, multivariate analysis, business intelligence, criminal investigation, data management, and predictive analytics.',
                ],
                [
                    'name' => 'SPSS',
                    'link' => 'https://www.ibm.com/products/spss-statistics',
                    'description' => 'SPSS is a software package used for interactive, or batched, statistical analysis.',
                ],
                [
                    'name' => 'RStudio',
                    'link' => 'https://rstudio.com/',
                    'description' => 'RStudio is an integrated development environment for R, a programming language for statistical computing and graphics.',
                ],
                [
                    'name' => 'MATLAB',
                    'link' => 'https://www.mathworks.com/products/matlab.html',
                    'description' => 'MATLAB is a programming platform designed specifically for engineers and scientists.',
                ],
                [
                    'name' => 'Wolfram Mathematica',
                    'link' => 'https://www.wolfram.com/mathematica/',
                    'description' => 'Wolfram Mathematica is a modern technical computing system spanning most areas of technical computing.',
                ],
                [
                    'name' => 'Jupyter',
                    'link' => 'https://jupyter.org/',
                    'description' => 'Project Jupyter is a project to develop open-source software, open-standards, and services for interactive computing across dozens of programming languages.',
                ],
                [
                    'name' => 'Anaconda',
                    'link' => 'https://www.anaconda.com/',
                    'description' => 'Anaconda is a distribution of the Python and R programming languages for scientific computing.',
                ],
                [
                    'name' => 'PyCharm',
                    'link' => 'https://www.jetbrains.com/pycharm/',
                    'description' => 'PyCharm is an integrated development environment (IDE) used in computer programming, specifically for the Python language.',
                ],
                [
                    'name' => 'Docker',
                    'link' => 'https://www.docker.com/',
                    'description' => 'Docker is a set of platform as a service products that use OS-level virtualization to deliver software in packages called containers.',
                ],
                [
                    'name' => 'Kubernetes',
                    'link' => 'https://kubernetes.io/',
                    'description' => 'Kubernetes is an open-source container-orchestration system for automating computer application deployment, scaling, and management.',
                ],
                [
                    'name' => 'VMware',
                    'link' => 'https://www.vmware.com/',
                    'description' => 'VMware is a subsidiary of Dell Technologies that provides cloud computing and virtualization software and services.',
                ],
                [
                    'name' => 'VirtualBox',
                    'link' => 'https://www.virtualbox.org/',
                    'description' => 'VirtualBox is a free and open-source hosted hypervisor for x86 virtualization, developed by Oracle Corporation.',
                ],
                [
                    'name' => 'Vagrant',
                    'link' => 'https://www.vagrantup.com/',
                    'description' => 'Vagrant is an open-source software product for building and maintaining portable virtual software development environments.',
                ],
                [
                    'name' => 'Terraform',
                    'link' => 'https://www.terraform.io/',
                    'description' => 'Terraform is an open-source infrastructure as code software tool that provides a consistent CLI workflow to manage hundreds of cloud services.',
                ],
             
        ];

 
        foreach ($softwareData as $data) {
            Software::create($data);
        }
    }
}
