# Terminal: Elf Code Python

## Moving the Elf

> From: Ribb Bonbowford

You can move the elf with commands like ```elf.moveLeft(5), elf.moveTo({"x":2,"y":2})```, or ```elf.moveTo(lever0.position)```.

## Bumping into Walls

> From: Ribb Bonbowford

Looping through long movements? Don't be afraid to ```moveUp(99)``` or whatever. You elf will stop at any obstacle.

## Lever Requirements

> From: Ribb Bonbowford

Not sure what a lever requires? Click it in the ```Current Level Objectives``` panel.

# Terminal: Frostavator

## Logic Gate Iconography

> From: Grody Goiterson

[This](https://www.geeksforgeeks.org/introduction-of-logic-gates/).

# Terminal: Grepping for Gold

## Grep Cheat Sheet

> From: Greasy GopherGuts

Check [this](https://ryanstutorials.net/linuxtutorial/cheatsheetgrep.php) out if you need a ```grep``` refresher.

# Terminal: IPv6 Sandbox

## IPv6 Reference

> From: Jewel Loggins

Check out [this Github Gist](https://gist.github.com/chriselgee/c1c69756e527f649d0a95b6f20337c2f) with common tools used in an IPv6 context.

# Terminal: Bonus! Blue Log4Jack

## Log4j Search Script

> From: Bow Ninecandle

Josh Wright's [simple checker script](https://gist.github.com/joswr1ght/a6badf9b0b148efadfccbf967fcc2b41) uses the power of regex to find vulnerable Log4j libraries!

## Log4j Talk

> From: Bow Ninecandle

Prof. Qwerty Petabyte is giving [a lesson](https://youtu.be/OuYMPU3-0p4) about Apache Log4j.

## Log4J at Apache

> From: Bow Ninecandle

Software by the [Apache Foundation](https://logging.apache.org/log4j/2.x/manual/lookups.html) runs on devices all over the internet

# Terminal: Logic Munchers

## AND, OR, NOT, XOR

> From: Noel Boetie

[This](http://www.natna.info/English/Teaching/CSI30-materials/Chapter1-cheat-sheet.pdf) might be a handy reference too.

## Boolean Logic

> From: Noel Boetie

There are lots of special symbols for logic and set notation. [This one](http://notes.imt-decal.org/sets/cheat-sheet.html) covers AND, NOT, and OR at the bottom.

# Objective: 2) Where in the World is Caramel Santaigo?

## Flask Cookies

> From: Piney Sappington

While Flask cookies can't generally be forged without the secret, they can often be [decoded and read](https://gist.github.com/chriselgee/b9f1861dd9b99a8c1ed30066b25ff80b).

## Coordinate Systems

> From: Piney Sappington

Don't forget coordinate systems other than lat/long like [MGRS](https://en.wikipedia.org/wiki/Military_Grid_Reference_System) and [what3words](https://what3words.com/).

## OSINT Talk

> From: Piney Sappington

Clay Moody is giving [a talk](https://www.youtube.com/watch?v=tAot_mcBT9c) about OSINT techniques right now!

# Objective: 3) Thaw Frost Tower's Entrance

## Linux Wi-Fi Commands

> From: Greasy GopherGuts

The [iwlist](https://linux.die.net/man/8/iwlist) and [iwconfig](https://linux.die.net/man/8/iwconfig) utilities are key for managing Wi-Fi from the Linux command line.

## Adding Data to cURL requests

> From: Greasy GopherGuts

When sending a [POST request with data](https://www.educative.io/edpresso/how-to-perform-a-post-request-using-curl), add ```--data-binary``` to your ```curl``` command followed by the data you want to send.

## Web Browsing with cURL

> From: Greasy GopherGuts

[cURL](https://linux.die.net/man/1/curl) makes HTTP requests from a terminal - in Mac, Linux, and modern Windows!

# Objective: 4) Slot Machine Investigation

## Intercepting Proxies

> From: Noel Boetie

Web application testers can use tools like [Burp Suite](https://portswigger.net/burp/communitydownload) or even right in the browser with Firefox's [Edit and Resend](https://itectec.com/superuser/how-to-edit-parameters-sent-through-a-form-on-the-firebug-console/) feature.

## Parameter Tampering

> From: Noel Boetie

It seems they're susceptible to [parameter tampering](https://owasp.org/www-community/attacks/Web_Parameter_Tampering).

# Objective: 5) Strange USB Device

## Ducky RE with Mallard

> From: Jewel Loggins

It's also possible the reverse engineer encoded Ducky Script using [Mallard](https://github.com/dagonis/Mallard).

## Mitre ATT&CK™ and Ducky

> From: Jewel Loggins

The [MITRE ATT&CK™ tactic T1098.004](https://attack.mitre.org/techniques/T1098/004/) describes SSH persistence techniques through authorized keys files.

## Ducky Script

> From: Jewel Loggins

[Ducky Script](https://docs.hak5.org/hc/en-us/articles/360010555153-Ducky-Script-the-USB-Rubber-Ducky-language) is the language for the USB Rubber Ducky

## Duck Encoder

> From: Jewel Loggins

Attackers can encode Ducky Script using a [duck encoder](https://docs.hak5.org/hc/en-us/articles/360010471234-Writing-your-first-USB-Rubber-Ducky-Payload) for delivery as ```inject.bin```.

# Objective: 6) Shellcode Primer

## Shellcode Primer Primer

> From: Chimney Scissorsticks

If you run into any shellcode primers at the North Pole, be sure to read the directions and the comments in the shellcode source!

## Debugging Shellcode

> From: Chimney Scissorsticks

Also, troubleshooting shellcode can be difficult. Use the debugger step-by-step feature to watch values.

## Register Stomping

> From: Chimney Scissorsticks

Lastly, be careful not to overwrite any register values you need to reference later on in your shellcode.

# Objective: 7) Printer Exploitation

## Dropping Files

> From: Ruby Cyster

Files placed in ```/app/lib/public/incoming``` will be accessible under https://printer.kringlecastle.com/incoming/.

## Printer Firmware

> From: Ruby Cyster

When analyzing a device, it's always a good idea to pick apart the firmware. Sometimes these things come down Base64-encoded.

## Hash Extension Attacks

> From: Ruby Cyster

[Hash Extension Attacks](https://blog.skullsecurity.org/2012/everything-you-need-to-know-about-hash-length-extension-attacks) can be super handy when there's some type of validation to be circumvented.

# Objective: 8) Kerberoasting on an Open Fire

## Finding Domain Controllers

> From: Eve Snowshoes

There will be some ```10.X.X.X``` networks in your routing tables that may be interesting. Also, consider adding ```-PS22,445``` to your ```nmap``` scans to "fix" default probing for unprivileged scans.

## Active Directory Interrogation

> From: Eve Snowshoes

Investigating Active Directory errors is harder without [Bloodhound](https://github.com/BloodHoundAD/BloodHound), but there are [native](https://social.technet.microsoft.com/Forums/en-US/df3bfd33-c070-4a9c-be98-c4da6e591a0a/forum-faq-using-powershell-to-assign-permissions-on-active-directory-objects?forum=winserverpowershell) [methods](https://www.specterops.io/assets/resources/an_ace_up_the_sleeve.pdf). 

## Kerberoast and AD Abuse Talk

> From: Eve Snowshoes

Check out [Chris Davis' talk](https://www.youtube.com/watch?v=iMh8FTzepU4) and [scripts](https://github.com/chrisjd20/hhc21_powershell_snippets) on Kerberoasting and Active Directory permissions abuse.

## Stored Credentials

> From: Eve Snowshoes

Administrators often store credentials in scripts. These can be coopted by an attacker for other purposes!

## Kerberoasting and Hashcat Syntax

> From: Eve Snowshoes

Learn about [Kerberoasting](https://gist.github.com/TarlogicSecurity/2f221924fef8c14a1d8e29f3cb5c5c4a) to leverage domain credentials to get usernames and crackable hashes for service accounts.

## CeWL for Wordlist Creation

> From: Eve Snowshoes

[CeWL](https://github.com/digininja/CeWL) can generate some great wordlists from website, but it will ignore digits in terms by default.

## Hashcat Mangling Rules
> From: Eve Snowshoes

[OneRuleToRuleThemAll.rule](https://github.com/NotSoSecure/password_cracking_rules) is great for mangling when a password dictionary isn't enough.

# Objective: 9) Splunk!

## Sysmon Monitoring in Splunk

> From: Fitzy Shortstack

Sysmon network events don't reveal the process parent ID for example. Fortunately, we can pivot with a query to investigate process creation events once you get a process ID.

## GitHub Monitoring in Splunk

> From: Fitzy Shortstack

Between GitHub audit log and webhook event recording, you can monitor all activity in a repository, including common ```git``` commands such as ```git add```, ```git status```, and ```git commit```.

## Malicious NetCat??

> From: Fitzy Shortstack

Did you know there are multiple versions of the Netcat command that can be used maliciously? ```nc.openbsd```, for example.

# Objective: 10) Now Hiring!

## AWS IMDS Documentation

> From: Noxious O. D'or

The [AWS documentation for IMDS](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/instancedata-data-retrieval.html) is interesting reading.

# Objective: 11) Customer Complaint Analysis

## Evil Bit RFC

> From: Tinsel Upatree

[RFC3514](https://datatracker.ietf.org/doc/html/rfc3514) defines the usage of the "Evil Bit" in IPv4 headers.

## Wireshark Display Filters

> From: Tinsel Upatree

Different from BPF capture filters, Wireshark's [display filters](https://wiki.wireshark.org/DisplayFilters) can find text with the ```contains``` keyword - and evil bits with ```ip.flags.rb```.

# Objective: 12) Frost Tower Website Checkup

## SQL Injection with Source

> From: Ribb Bonbowford

When you have the source code, API documentation becomes [tremendously](https://www.npmjs.com/package/express-session) [valuable](https://github.com/mysqljs/mysql).

# Objective: 13) FPGA Programming

## FPGA Talk

> From: Grody Goiterson

Prof. Qwerty Petabyte is giving [a lesson](https://www.youtube.com/watch?v=GFdG1PJ4QjA) about Field Programmable Gate Arrays (FPGAs).

## FPGA for Fun

> From: Grody Goiterson

There are [FPGA enthusiast sites](https://www.fpga4fun.com/MusicBox.html).