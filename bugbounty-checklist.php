<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Bug Bounty Checklist - Green & Red Text</title>
<style>
  body {
    background-color: #0d1117;
    font-family: 'Consolas', monospace, monospace;
    margin: 2rem;
    color: #c9d1d9;
  }
  h1 {
    color: #ff5555; /* Toxic red */
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }
  h2 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: #58ff58; /* bright green */
  }
  ul {
    list-style: none;
    padding-left: 0;
  }
  li {
    margin-bottom: 0.8rem;
    padding-left: 2rem;
    position: relative;
    font-weight: 600;
  }
  /* Symbols for teams */
  .red-team::before {
    content: "🔴";
    position: absolute;
    left: 0;
  }
  .blue-team::before {
    content: "🔵";
    position: absolute;
    left: 0;
  }
  /* Text colors */
  .red-team {
    color: #ff4444; /* red text */
  }
  .blue-team {
    color: #58ff58; /* green text */
  }
  /* Warning style */
  .toxic-warning {
    color: #ff5555;
    font-weight: 700;
  }
  .toxic-warning::before {
    content: "☠️";
    margin-right: 0.5rem;
  }
</style>
</head>
<body>

<h1>Bug Bounty HackTricks per Step</h1>

<section>
    <h2>Target Information Collection</h2>
    <ul>
        <li>🧠 Use <code>assetfinder</code>, <code>amass</code>, and <code>subfinder</code> together for better subdomain coverage.</li>
        <li>🛰️ Map ASN ranges with <code>asnmap</code> and resolve them using <code>massdns</code>.</li>
        <li>🔍 Detect technologies using <code>whatweb</code>, <code>wappalyzer</code>, and <code>nmap -sV</code>.</li>
        <li>📂 Search for exposed files (.git, .env, .bak) using <code>gau</code>, <code>waybackurls</code>, and directory brute force.</li>
        <li>☁️ Identify cloud services via headers like <code>x-amz</code>, <code>x-ms</code>, or <code>x-gcp</code>.</li>
    </ul>
</section>

<section>
    <h2>Reconnaissance - Passive Recon</h2>
    <ul>
        <li>🔎 Google Dorking (e.g., <code>site:target.com ext:env</code>).</li>
        <li>🧠 GitHub secrets search with tools like <code>truffleHog</code>, <code>gitleaks</code>, or custom dorks.</li>
        <li>🗂️ Use <code>waybackurls</code>, <code>gau</code>, <code>hakrawler</code> to collect archived endpoints.</li>
        <li>🛰️ Search with <code>Shodan</code>, <code>Censys</code>, <code>ZoomEye</code> for open services or devices.</li>
        <li>📜 Extract and analyze JS files using <code>LinkFinder</code>, <code>JSParser</code>, or <code>SecretFinder</code>.</li>
    </ul>
</section>

<section>
    <h2>Reconnaissance - Active Recon</h2>
    <ul>
        <li>📁 Use <code>ffuf</code>, <code>dirsearch</code>, or <code>gobuster</code> for directory enumeration.</li>
        <li>🕵️ Use <code>Arjun</code> or <code>ParamSpider</code> to find hidden parameters.</li>
        <li>🔍 Discover undocumented APIs with <code>gau</code>, <code>waybackurls</code>, and Swagger analysis.</li>
        <li>🔄 Fuzz API and input fields with <code>ffuf</code>, <code>wfuzz</code>, or Burp Intruder.</li>
        <li>🛡️ Identify exposed admin panels via <code>/admin</code>, <code>/dashboard</code>, or JS references.</li>
    </ul>
</section>

<section>
    <h2>Reconnaissance - Information Disclosure</h2>
    <ul>
        <li>❗ Trigger error messages to leak stack traces or DB info.</li>
        <li>🔍 Check for <code>/debug</code>, <code>/status</code>, <code>/logs</code> endpoints.</li>
        <li>📂 Access <code>robots.txt</code>, <code>.env</code>, or versioned backups like <code>index.php~</code>.</li>
        <li>🔑 Search for API keys in JS using regex or tools like <code>SecretFinder</code>.</li>
        <li>☁️ Identify open S3 buckets via bucket enumeration tools or DNS brute-forcing.</li>
    </ul>
</section>

<section>
    <h2>Vulnerability Analysis - Authentication & Authorization</h2>
    <ul>
        <li>🔐 Check for username enumeration via login or password reset responses.</li>
        <li>🔑 Test for weak passwords with <code>hydra</code>, <code>patator</code>, or <code>cewl</code> + Burp combo.</li>
        <li>🧾 Test MFA bypass using token re-use or social engineering.</li>
        <li>🧪 Check session flaws (JWT tampering, session fixation).</li>
        <li>🚪 Look for IDOR and BOLA by modifying user/account IDs in requests.</li>
    </ul>
</section>

<section>
    <h2>Vulnerability Analysis - Input Validation</h2>
    <ul>
        <li>💉 SQLi testing via <code>sqlmap</code>, ' OR 1=1--, and time-based blind SQLi.</li>
        <li>💀 XSS testing using common payloads: <code>&lt;script&gt;lert(1)&lt;/script&gt;</code>, <code>"&gt;&lt;svg/onload=alert(1)&gt;</code>.</li>
        <li>🌐 SSRF testing by pointing parameters to <code>Burp Collaborator</code>.</li>
        <li>⚙️ XXE payload injection like <code>&lt;!DOCTYPE root [&lt;!ENTITY xxe SYSTEM 'file:///etc/passwd'&gt;]&gt;</code>.</li>
        <li>💣 Test file uploads with polyglot files, bypass content-type filters.</li>
    </ul>
</section>

<section>
    <h2>Vulnerability Analysis - Business Logic & API Security</h2>
    <ul>
        <li>🔄 Test for BOLA by changing object IDs in APIs.</li>
        <li>🔐 Look for weak or missing API authentication headers.</li>
        <li>🚧 Mass assignment: try sending unexpected fields in JSON bodies.</li>
        <li>⏱️ Test rate limits with <code>ffuf</code>, Intruder, or bash scripts.</li>
        <li>🔓 Test GraphQL for introspection, BFLA (Broken Function Level Auth).</li>
    </ul>
</section>

<section>
    <h2>Exploitation & PoC</h2>
    <ul>
        <li>🧪 Save raw requests from Burp as PoC material.</li>
        <li>📸 Use screen/video recorders to demo impact.</li>
        <li>🔗 Chain bugs (e.g., IDOR → account takeover).</li>
        <li>⚡ Use curl scripts or Postman collections for PoC reproduction.</li>
        <li>📂 Upload payloads to platforms like <code>requestbin</code>, <code>ngrok</code>, or custom server for callback-based bugs.</li>
    </ul>
</section>

<section>
    <h2>Reporting</h2>
    <ul>
        <li>📝 Follow markdown structure: Summary → Steps → PoC → Impact → Fix.</li>
        <li>📷 Attach full Burp requests and screenshot/video PoCs.</li>
        <li>🧠 Add CVSS scores to justify severity.</li>
        <li>📚 Reference OWASP Top 10, CVEs, or CWE entries for context.</li>
        <li>🔁 Provide exact mitigation steps (e.g., input validation, auth checks).</li>
    </ul>
</section>

<section>
    <h2>Post-Engagement</h2>
    <ul>
        <li>🧹 Clean test data: remove accounts, payloads, or test content.</li>
        <li>📘 Document what worked well and what didn’t in <code>lessons_learned.txt</code>.</li>
        <li>📡 Set up continuous monitoring on targets (e.g., GitHub leaks, DNS changes).</li>
        <li>🔄 Revisit old targets regularly for new attack surfaces.</li>
        <li>📬 Establish disclosure channel for future coordinated reports.</li>
    </ul>
</section>

<section>
    <h2>Expanded Vulnerability Analysis - Authentication & Authorization</h2>
    <ul>
        <li>🔍 Test login forms for user enumeration via response differences.</li>
        <li>🔁 Attempt brute-force on login, 2FA, and password reset endpoints.</li>
        <li>🔐 Try default credentials like admin/admin or test/test.</li>
        <li>🧪 Test for weak/missing password policies (e.g., short passwords).</li>
        <li>🧬 Try session fixation by setting session cookie before login.</li>
        <li>🔄 Replay stolen session tokens (check for expiration, rotation).</li>
        <li>🔓 Test password reset tokens for predictability or reuse.</li>
        <li>🕵️ Bypass MFA using recovery flows or by stealing tokens.</li>
        <li>🔁 Check for re-auth bypass on critical actions (e.g., changing email).</li>
        <li>⚙️ Try forcing OAuth redirects to attacker-controlled domains.</li>
        <li>🧠 Bruteforce token-based auth (JWT, API keys, session IDs).</li>
        <li>🔄 Modify JWT alg to 'none' or switch to symmetric key guessing.</li>
        <li>💥 Test refresh token reuse or abuse for long-term access.</li>
        <li>🔄 Modify OAuth scopes in intercepted requests.</li>
        <li>🧪 Fuzz OpenID <code>state</code>, <code>nonce</code>, and redirect parameters.</li>
        <li>🧬 Try logging in via social logins with spoofed emails.</li>
        <li>🔓 Misconfigured SSO/SAML endpoints (try signature stripping).</li>
        <li>🛑 Test logout endpoint for token invalidation (or lack thereof).</li>
        <li>🔁 Check if changing email/password auto-validates the session.</li>
        <li>🔄 Use auth tokens from one user/account on another.</li>
    </ul>
</section>

<section>
    <h2>Expanded Vulnerability Analysis - Input Validation</h2>
    <ul>
        <li>🛠️ Use <code>' OR '1'='1</code> and other SQLi payloads in input fields.</li>
        <li>🧪 Inject <code>"><script>alert(1)</script></code> for XSS (stored/reflected/DOM).</li>
        <li>🌍 SSRF via image URL uploads or XML parsers (use <code>burpcollaborator</code>).</li>
        <li>📦 XXE using <code>&lt;!ENTITY xxe SYSTEM "file:///etc/passwd"&gt;</code> in XML input.</li>
        <li>🧬 Send forged requests for CSRF via <code>&lt;img src=...&gt;</code> tricks.</li>
        <li>💣 Command injection with <code>; whoami</code> or <code>&& curl attacker.com</code>.</li>
        <li>🧠 Upload <code>.php</code>, <code>.jsp</code>, or <code>.aspx</code> disguised as <code>.jpg</code> (check server-side validation).</li>
        <li>🧾 GraphQL introspection queries to map types and operations.</li>
        <li>📉 Input number when string is expected (type confusion).</li>
        <li>🚪 Upload zip bombs, large files (test DoS conditions).</li>
        <li>🔍 Use obfuscated XSS payloads (e.g., <code>\\x3cscript\\x3e</code>).</li>
        <li>🔗 Inject links/scripts in markdown, BBCode, or rich text editors.</li>
        <li>📚 Inject in HTTP headers (User-Agent, Referer) and reflect in error logs.</li>
        <li>🧬 Input overflows (long strings) in fields for buffer overflows.</li>
        <li>🔐 Fuzz for path traversal: <code>../../../../etc/passwd</code>.</li>
        <li>🛠️ Insert unicode characters or null bytes in parameters.</li>
        <li>🧪 SQLi in JSON body payloads or nested parameters.</li>
        <li>🧬 Try JSON injection or NoSQL injection (e.g., MongoDB).</li>
        <li>🛠️ XPath Injection if XML queries are used internally.</li>
        <li>📄 Test for HTTP parameter pollution (multiple same params).</li>
    </ul>
</section>

<section>
    <h2>Expanded Vulnerability Analysis - API & Business Logic</h2>
    <ul>
        <li>🔄 Test API endpoints for lack of authorization (BOLA).</li>
        <li>🧪 Test all HTTP methods: GET, POST, PUT, DELETE, PATCH.</li>
        <li>🚧 Check if JSON schema validation is weak or missing.</li>
        <li>🧬 Mass assignment: add fields like <code>isAdmin:true</code> in payloads.</li>
        <li>🔍 Test for race conditions by sending multiple requests rapidly.</li>
        <li>⏱️ Abuse rate limits using bursts or distributed requests.</li>
        <li>🔐 Check token scopes and permission elevation.</li>
        <li>🧠 Try to reuse expired tokens or replay requests.</li>
        <li>🧪 Test API versioning for legacy bugs.</li>
        <li>📦 Try HTTP request smuggling via ambiguous Content-Length and Transfer-Encoding headers.</li>
        <li>🔓 Use parameter pollution to bypass filters.</li>
        <li>🚪 Check for undocumented or hidden API endpoints via fuzzing.</li>
        <li>🛡️ Test for CORS misconfigurations by changing Origin headers.</li>
        <li>🌐 In GraphQL, test complex nested queries to cause DoS or extract data.</li>
        <li>🧬 Use GraphQL introspection to identify all queries and mutations.</li>
        <li>🧠 Test broken function-level authorization in REST or GraphQL.</li>
        <li>🔐 Attempt to bypass MFA via API logic flaws.</li>
        <li>🧪 Test logout and session invalidation APIs.</li>
    </ul>
</section>

</body>
</html>
