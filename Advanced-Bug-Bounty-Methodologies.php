<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Advanced Bug Bounty Methodologies - masanja7</title>
  <style>
    body {
      background-color: #0d1117;
      color: #c9d1d9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    h1 {
      color: #ff5555;
      text-align: center;
      padding: 1rem;
    }

    .container-wrapper {
      position: relative;
    }

    .container {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
      scroll-behavior: smooth;
    }

    section {
      flex: 0 0 50%;
      scroll-snap-align: start;
      padding: 2rem;
      box-sizing: border-box;
      border-right: 1px solid #21262d;
      min-height: 100vh;
    }

    h2 {
      color: #58a6ff;
      border-bottom: 1px solid #30363d;
      padding-bottom: 0.5rem;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }

    li {
      margin-bottom: 0.6rem;
    }

    a {
      color: #79c0ff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
      color: #ff7b72;
    }

    small {
      color: #8b949e;
      font-style: italic;
    }

    .nav-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #161b22;
      color: #58a6ff;
      border: none;
      font-size: 2rem;
      padding: 0.5rem 1rem;
      cursor: pointer;
      z-index: 10;
      opacity: 0.8;
      transition: opacity 0.2s;
    }

    .nav-button:hover {
      opacity: 1;
    }

    .nav-left {
      left: 0;
    }

    .nav-right {
      right: 0;
    }

    .container::-webkit-scrollbar {
      height: 8px;
    }

    .container::-webkit-scrollbar-thumb {
      background-color: #30363d;
      border-radius: 10px;
    }

    .container::-webkit-scrollbar-track {
      background: #161b22;
    }
  </style>
<body>

  <div class="terminal-prompt">asoft@company:~$ cat index.php</div>

  <h1>Advanced Bug Bounty Methodologies</h1>
  <p>A <code>comprehensive</code> collection of tools, frameworks, articles, and methodologies for advanced bug bounty hunters. Covers all phases from reconnaissance to reporting.</p>

  <section>
    <h2>1. Reconnaissance & Information Gathering</h2>
    <ul>
      <li><a href="https://github.com/s0md3v/Photon" target="_blank">Photon</a></li>
      <li><a href="https://github.com/projectdiscovery/subfinder" target="_blank">Subfinder</a></li>
      <li><a href="https://github.com/OWASP/Amass" target="_blank">Amass</a></li>
      <li><a href="https://github.com/devanshbatham/ParamSpider" target="_blank">ParamSpider</a></li>
      <li><a href="https://github.com/1ndianl33t/Gf-Patterns" target="_blank">Gf-Patterns</a></li>
      <li><a href="https://github.com/tomnomnom/assetfinder" target="_blank">Assetfinder</a></li>
      <li><a href="https://github.com/tomnomnom/waybackurls" target="_blank">Waybackurls</a></li>
      <li><a href="https://github.com/tomnomnom/qsreplace" target="_blank">Qsreplace</a></li>
      <li><a href="https://crt.sh/" target="_blank">crt.sh</a></li>
      <li><a href="https://github.com/six2dez/reconftw" target="_blank">reconFTW</a></li>
      <li><a href="https://dnsdumpster.com/" target="_blank">DNSDumpster</a></li>
      <li><a href="https://github.com/d3mondev/puredns" target="_blank">puredns</a></li>
      <li><a href="https://github.com/epi052/feroxbuster" target="_blank">Feroxbuster</a></li>
      <li><a href="https://github.com/m4ll0k/SecretFinder" target="_blank">SecretFinder</a></li>
      <li><a href="https://securitytrails.com/" target="_blank">SecurityTrails</a></li>
      <li><a href="https://hunter.io/" target="_blank">Hunter.io</a></li>
      <li><a href="https://github.com/michenriksen/aquatone" target="_blank">Aquatone</a></li>
      <li><a href="https://github.com/lc/gau" target="_blank">gau</a></li>
      <li><a href="https://github.com/projectdiscovery/httpx" target="_blank">httpx</a></li>
      <li><a href="https://github.com/dwisiswant0/dorks-hunter" target="_blank">DorksHunter</a></li>
    </ul>
  </section>

  <section>
    <h2>2. Vulnerability Discovery</h2>
    <ul>
      <li><a href="https://portswigger.net/burp" target="_blank">Burp Suite</a></li>
      <li><a href="https://owasp.org/www-project-zap/" target="_blank">OWASP ZAP</a></li>
      <li><a href="https://github.com/projectdiscovery/nuclei" target="_blank">Nuclei Templates</a></li>
      <li><a href="https://github.com/PortSwigger/CORS-test" target="_blank">CORS Testing</a></li>
      <li><a href="https://github.com/google/tamperchrome" target="_blank">Tamper Chrome</a></li>
      <li><a href="https://github.com/arthaud/git-dumper" target="_blank">Git-Dumper</a></li>
      <li><a href="https://github.com/w9w/JSAF" target="_blank">JSAF - JavaScript Analysis</a></li>
      <li><a href="https://github.com/dwisiswant0/apkleaks" target="_blank">APKLeaks</a></li>
      <li><a href="https://github.com/s0md3v/Arjun" target="_blank">Arjun - Param Testing</a></li>
      <li><a href="https://github.com/nahamsec/JSParser" target="_blank">JSParser</a></li>
      <li><a href="https://github.com/projectdiscovery/dnsx" target="_blank">dnsx</a></li>
      <li><a href="https://github.com/devanshbatham/ParamSpider" target="_blank">ParamSpider</a></li>
      <li><a href="https://github.com/EnableSecurity/wafw00f" target="_blank">wafw00f</a></li>
      <li><a href="https://github.com/hahwul/dalfox" target="_blank">Dalfox - XSS</a></li>
      <li><a href="https://github.com/sqlmapproject/sqlmap" target="_blank">SQLMap</a></li>
      <li><a href="https://github.com/GerbenJavado/LinkFinder" target="_blank">LinkFinder</a></li>
      <li><a href="https://github.com/devanshbatham/PortScanner" target="_blank">Fast PortScanner</a></li>
      <li><a href="https://github.com/Bo0oM/fuzz.txt" target="_blank">Fuzz List (Bo0oM)</a></li>
      <li><a href="https://github.com/payloadbox/xss-payload-list" target="_blank">XSS Payload List</a></li>
      <li><a href="https://github.com/danielmiessler/SecLists" target="_blank">SecLists</a></li>
    </ul>
  </section>

  <!-- More sections can follow the same style -->
  <section>
    <h2>3. Exploitation Techniques</h2>
    <ul>
      <li><a href="https://github.com/swisskyrepo/PayloadsAllTheThings" target="_blank">PayloadsAllTheThings</a></li>
      <li><a href="https://github.com/carlospolop/PEASS-ng" target="_blank">PEASS-ng</a></li>
      <li><a href="https://book.hacktricks.xyz/" target="_blank">HackTricks Book</a></li>
      <li><a href="https://gtfobins.github.io/" target="_blank">GTFOBins</a></li>
      <li><a href="https://lolbas-project.github.io/" target="_blank">LOLBAS</a></li>
      <li><a href="https://www.revshells.com/" target="_blank">Reverse Shell Generator</a></li>
      <li><a href="https://highon.coffee/blog/reverse-shell-cheat-sheet/" target="_blank">Reverse Shell Cheat Sheet</a></li>
      <li><a href="https://netcat.sourceforge.net/" target="_blank">Netcat</a></li>
      <li><a href="https://github.com/bettercap/bettercap" target="_blank">Bettercap</a></li>
      <li><a href="https://www.exploit-db.com/" target="_blank">Exploit Database</a></li>
      <li><a href="https://www.rapid7.com/db/modules/" target="_blank">Metasploit Modules</a></li>
      <li><a href="https://github.com/PowerShellMafia/PowerSploit" target="_blank">PowerSploit</a></li>
      <li><a href="https://github.com/AlessandroZ/LaZagne" target="_blank">LaZagne</a></li>
      <li><a href="https://github.com/insidetrust/statistically-likely-usernames" target="_blank">Username Prediction</a></li>
      <li><a href="https://github.com/danielmiessler/SecLists" target="_blank">SecLists Exploits</a></li>
      <li><a href="https://www.hackthebox.com/" target="_blank">Hack The Box Labs</a></li>
      <li><a href="https://tryhackme.com/" target="_blank">TryHackMe Rooms</a></li>
      <li><a href="https://book.hacktricks.xyz/pentesting-web/file-upload" target="_blank">File Upload Exploits</a></li>
      <li><a href="https://github.com/s0md3v/AwesomeXSS" target="_blank">Awesome XSS</a></li>
      <li><a href="https://portswigger.net/web-security/all-materials" target="_blank">PortSwigger All Web Exploits</a></li>
    </ul>
  </section>

  <section>
    <h2>4. Post-Exploitation & Privilege Escalation</h2>
    <ul>
      <li><a href="https://github.com/carlospolop/PEASS-ng" target="_blank">PEASS-ng</a></li>
      <li><a href="https://gtfobins.github.io/" target="_blank">GTFOBins</a></li>
      <li><a href="https://lolbas-project.github.io/" target="_blank">LOLBAS</a></li>
      <li><a href="https://www.hackingarticles.in/windows-privilege-escalation-methods/" target="_blank">Windows PrivEsc Methods</a></li>
      <li><a href="https://book.hacktricks.xyz/windows-hardening/windows-local-privilege-escalation" target="_blank">HackTricks - Windows PrivEsc</a></li>
      <li><a href="https://book.hacktricks.xyz/linux-hardening/privilege-escalation" target="_blank">HackTricks - Linux PrivEsc</a></li>
      <li><a href="https://github.com/SecWiki/windows-kernel-exploits" target="_blank">Windows Kernel Exploits</a></li>
      <li><a href="https://github.com/rebootuser/LinEnum" target="_blank">LinEnum</a></li>
      <li><a href="https://github.com/diego-treitos/linux-smart-enumeration" target="_blank">Linux Smart Enum</a></li>
      <li><a href="https://github.com/Ignitetechnologies/PrivescCheck" target="_blank">PrivEsc Check</a></li>
      <li><a href="https://www.revshells.com/" target="_blank">Reverse Shell Generator</a></li>
      <li><a href="https://github.com/GhostPack" target="_blank">GhostPack Tools</a></li>
      <li><a href="https://www.fuzzysecurity.com/tutorials.html" target="_blank">FuzzySecurity Tutorials</a></li>
      <li><a href="https://github.com/initstring/uptux" target="_blank">uptux - Linux PrivEsc</a></li>
      <li><a href="https://www.abatchy.com/2017/05/windows-privilege-escalation-methods-for.html" target="_blank">Abatchy PrivEsc Notes</a></li>
      <li><a href="https://lolbas-project.github.io/" target="_blank">LOLBAS Project</a></li>
      <li><a href="https://github.com/mzet-/linux-exploit-suggester" target="_blank">Linux Exploit Suggester</a></li>
      <li><a href="https://github.com/AonCyberLabs/Windows-Exploit-Suggester" target="_blank">Windows Exploit Suggester</a></li>
      <li><a href="https://book.hacktricks.xyz/pentesting-web/post-exploitation" target="_blank">Post Exploitation Guide</a></li>
      <li><a href="https://www.hackthebox.com/" target="_blank">Hack The Box - Post Exploitation</a></li>
    </ul>
  </section>

  <section>
    <h2>5. Reporting & Disclosure</h2>
    <ul>
      <li><a href="https://hackerone.com/hacktivity" target="_blank">HackerOne Hacktivity</a></li>
      <li><a href="https://www.bugcrowd.com/hall-of-fame/" target="_blank">Bugcrowd Reports</a></li>
      <li><a href="https://docs.hackerone.com/hackers/writing-good-reports.html" target="_blank">H1: Writing Good Reports</a></li>
      <li><a href="https://www.youtube.com/watch?v=jwW7Rn2zhtc" target="_blank">Bug Bounty Report Templates</a></li>
      <li><a href="https://github.com/EdOverflow/bugbounty-cheatsheet" target="_blank">Bug Bounty Cheatsheet</a></li>
      <li><a href="https://github.com/jhaddix/bugbountyguide" target="_blank">Bug Bounty Guide</a></li>
      <li><a href="https://pentester.land/writeups/" target="_blank">Pentester Land Writeups</a></li>
      <li><a href="https://google.github.io/bug-hunting-book/" target="_blank">Google Bug Hunter's Guide</a></li>
      <li><a href="https://github.com/ngalongc/bug-bounty-reference" target="_blank">Bug Bounty Reference</a></li>
      <li><a href="https://www.bugbountyhunter.com/" target="_blank">Bug Bounty Hunter Training</a></li>
      <li><a href="https://github.com/nahamsec/Resources-for-Beginner-Bug-Bounty-Hunters" target="_blank">Nahamsec Resources</a></li>
      <li><a href="https://infosecwriteups.com/" target="_blank">Infosec Writeups</a></li>
      <li><a href="https://medium.com/bugbountywriteup" target="_blank">Bug Bounty Writeups Medium</a></li>
      <li><a href="https://github.com/samyqni/bug-bounty-writeups" target="_blank">Bug Bounty Writeup Repo</a></li>
      <li><a href="https://docs.bugcrowd.com/disclosure-guidelines/" target="_blank">Bugcrowd Disclosure Guide</a></li>
      <li><a href="https://hackerone.com/disclosure-guidelines" target="_blank">HackerOne Disclosure Policy</a></li>
      <li><a href="https://github.com/EdOverflow/disclose.io" target="_blank">disclose.io</a></li>
      <li><a href="https://github.com/bugcrowd/bugcrowd_researcher_docs" target="_blank">Bugcrowd Docs</a></li>
      <li><a href="https://www.synack.com/blog/" target="_blank">Synack Blog</a></li>
      <li><a href="https://github.com/swisskyrepo/Documenting-Bugs" target="_blank">Bug Documentation Framework</a></li>
    </ul>
  </section>

 <section>
  <h2>6. Bonus: Methodologies & Playbooks</h2>
  <ul>
    <li><a href="https://github.com/swisskyrepo/PayloadsAllTheThings" target="_blank">PayloadsAllTheThings</a></li>
    <li><a href="https://github.com/1ndianl33t/Gf-Patterns" target="_blank">GF Patterns</a></li>
    <li><a href="https://github.com/KathanP19/JSFScan.sh" target="_blank">JSFScan.sh - JavaScript Recon</a></li>
    <li><a href="https://github.com/cujanovic/Open-Source-Intelligence-Resources" target="_blank">OSINT Resources Collection</a></li>
    <li><a href="https://github.com/jhaddix/domain" target="_blank">Jhaddix’s Subdomain Enumeration Guide</a></li>
    <li><a href="https://github.com/six2dez/reconftw" target="_blank">ReconFTW - Automated recon</a></li>
    <li><a href="https://github.com/techgaun/github-dorks" target="_blank">GitHub Dorks</a></li>
    <li><a href="https://github.com/devanshbatham/ParamSpider" target="_blank">ParamSpider - URL parameter mining</a></li>
    <li><a href="https://github.com/nahamsec/Resources-for-Beginner-Bug-Bounty-Hunters" target="_blank">Nahamsec Resources</a></li>
    <li><a href="https://github.com/r3motecontrol/Ghost-OSINT" target="_blank">Ghost OSINT Framework</a></li>
    <li><a href="https://github.com/mxrch/GHunt" target="_blank">GHunt - Google OSINT</a></li>
    <li><a href="https://github.com/RedTeamOperations/RedTeamOps" target="_blank">Red Team Ops - Offensive Guide</a></li>
    <li><a href="https://github.com/hahwul/WebHackersWeapons" target="_blank">Web Hackers Weapons</a></li>
    <li><a href="https://github.com/Srinivas11789/bug-bounty-reference" target="_blank">Bug Bounty Reference</a></li>
    <li><a href="https://github.com/EdOverflow/bugbounty-cheatsheet" target="_blank">Bug Bounty Cheatsheet</a></li>
    <li><a href="https://github.com/infosecn1nja/Red-Teaming-Toolkit" target="_blank">Red Teaming Toolkit</a></li>
    <li><a href="https://github.com/The-Art-of-Hacking/h4cker" target="_blank">The Art of Hacking</a></li>
    <li><a href="https://github.com/carlospolop/PEASS-ng" target="_blank">PEASS - Privilege Escalation Awesome Scripts</a></li>
    <li><a href="https://github.com/0x4D31/RTOC" target="_blank">Red Team Ops Compendium</a></li>
    <li><a href="https://github.com/snovvcrash/LOLBAS" target="_blank">LOLBAS Project - Living Off the Land Binaries</a></li>
  </ul>
</section>

</body>
</html>

