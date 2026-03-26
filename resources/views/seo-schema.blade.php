{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Globetrotters Ocean Freight Services — SEO & Schema Reference</title>
--}}

@extends('layouts.app')

@section('content')

<style>
  :root{
    --blue:#1a4aab;--blue-dark:#0f2f7a;--blue-mid:#1e5bc6;--blue-light:#4a7fd4;
    --blue-pale:#e8f0fb;--blue-faint:#f0f5ff;
    --gray-dark:#2c3a4a;--gray-mid:#5a6a7a;--gray-light:#8a9aaa;
    --gray-border:#d4dce6;--gray-bg:#f4f6f9;
    --white:#ffffff;
    --green:#16a34a;--green-bg:#f0fdf4;--green-border:#bbf7d0;
    --amber:#d97706;--amber-bg:#fffbeb;--amber-border:#fde68a;
    --purple:#7c3aed;--purple-bg:#f5f3ff;--purple-border:#ddd6fe;
    --teal:#0d9488;--teal-bg:#f0fdfa;--teal-border:#99f6e4;
    --shadow-sm:0 2px 12px rgba(26,74,171,0.08);
    --shadow-md:0 8px 32px rgba(26,74,171,0.14);
    --shadow-blue:0 8px 32px rgba(26,74,171,0.3);
    --font-d:'Cormorant Garamond',serif;
    --font-b:'Jost',sans-serif;
    --font-mono:'JetBrains Mono',monospace;
    --expo:cubic-bezier(0.16,1,0.3,1);
    --bounce:cubic-bezier(0.34,1.56,0.64,1);
  }
  *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{font-family:var(--font-b);background:var(--gray-bg);color:var(--gray-dark);}
  ::-webkit-scrollbar{width:5px;}
  ::-webkit-scrollbar-thumb{background:var(--blue);border-radius:4px;}

  @keyframes fadeUp{from{opacity:0;transform:translateY(24px);}to{opacity:1;transform:translateY(0);}}
  @keyframes bgSlide{0%{background-position:0% 50%;}50%{background-position:100% 50%;}100%{background-position:0% 50%;}}
  @keyframes shimmer{0%{background-position:-200% center;}100%{background-position:200% center;}}
  @keyframes pulseDot{0%,100%{box-shadow:0 0 0 0 rgba(26,74,171,0.4);}50%{box-shadow:0 0 0 8px rgba(26,74,171,0);}}

  /* NAV */
  #navbar{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);backdrop-filter:blur(16px);box-shadow:0 1px 0 var(--gray-border),var(--shadow-sm);padding:0 48px;}
  .nav-inner{max-width:1280px;margin:0 auto;height:72px;display:flex;align-items:center;justify-content:space-between;}
  .nav-logo img{height:48px;object-fit:contain;}
  .nav-back{display:inline-flex;align-items:center;gap:8px;color:var(--gray-mid);text-decoration:none;font-size:13px;font-weight:500;transition:color .3s;}
  .nav-back:hover{color:var(--blue);}
  .nav-phone{color:var(--blue);font-weight:600;font-size:13px;text-decoration:none;}

  /* PAGE HEADER */
  .page-hero{background:linear-gradient(135deg,var(--blue-dark),var(--blue-mid),var(--blue-light));background-size:200% auto;animation:bgSlide 8s ease infinite;padding:150px 48px 60px;text-align:center;position:relative;overflow:hidden;}
  .page-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 2px 2px,rgba(255,255,255,.07) 1px,transparent 0);background-size:28px 28px;}
  .ph-inner{position:relative;z-index:2;max-width:760px;margin:0 auto;}
  .hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);border-radius:40px;padding:5px 16px;font-size:10px;font-weight:700;letter-spacing:2.5px;color:rgba(255,255,255,.9);text-transform:uppercase;margin-bottom:18px;}
  .badge-dot{width:6px;height:6px;background:#fff;border-radius:50%;animation:pulseDot 2s infinite;}
  .hero-title{font-family:var(--font-d);font-size:clamp(34px,5vw,56px);font-weight:700;color:#fff;line-height:1.08;margin-bottom:14px;}
  .hero-title em{font-style:italic;color:rgba(255,255,255,.8);}
  .hero-sub{font-size:14px;font-weight:300;color:rgba(255,255,255,.7);line-height:1.8;}

  /* MAIN LAYOUT */
  .main {
    max-width:1280px;
    margin:0 auto;
    padding:48px 20px 80px;
    display:grid;
    grid-template-columns:260px minmax(0, 1fr);
    gap:32px;
    align-items: start;
  }
  /* SIDEBAR NAV */
  .sidebar {
    position: sticky;
    top: 88px;
    align-self: start;
  }
  .sidebar-card{background:var(--white);border:1.5px solid var(--gray-border);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);}
  .sc-header{padding:16px 20px;background:var(--blue-faint);border-bottom:1px solid var(--gray-border);}
  .sc-header p{font-size:10px;font-weight:700;letter-spacing:2.5px;color:var(--blue);text-transform:uppercase;}
  .sc-nav{list-style:none;padding:8px 0;}
  .sc-nav a{display:flex;align-items:center;gap:10px;padding:10px 20px;font-size:12px;font-weight:600;color:var(--gray-mid);text-decoration:none;transition:color .2s,background .2s;}
  .sc-nav a:hover{color:var(--blue);background:var(--blue-faint);}
  .sc-nav a.active{color:var(--blue);background:var(--blue-faint);border-right:3px solid var(--blue);}
  .sc-nav .dot{width:8px;height:8px;border-radius:50%;flex-shrink:0;}

  /* CONTENT SECTIONS */
  .content{display:flex;flex-direction:column;gap:32px;}
  .section{background:var(--white);border:1.5px solid var(--gray-border);border-radius:20px;overflow:hidden;box-shadow:var(--shadow-sm);}

  /* SECTION HEADER */
  .sec-head{padding:24px 32px;border-bottom:1px solid var(--gray-border);display:flex;align-items:center;gap:14px;}
  .sec-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:18px;}
  .sec-title{font-family:var(--font-d);font-size:20px;font-weight:700;color:var(--blue-dark);}
  .sec-sub{font-size:11px;color:var(--gray-light);margin-top:2px;}
  .sec-body{padding:28px 32px;}

  /* COPY BUTTON */
  .copy-btn{display:inline-flex;align-items:center;gap:6px;padding:6px 14px;border-radius:8px;border:1.5px solid var(--gray-border);background:var(--white);color:var(--gray-mid);font-family:var(--font-b);font-size:11px;font-weight:600;cursor:pointer;transition:border-color .2s,color .2s,background .2s;}
  .copy-btn:hover{border-color:var(--blue);color:var(--blue);background:var(--blue-faint);}
  .copy-btn.copied{border-color:var(--green);color:var(--green);background:var(--green-bg);}

  /* CODE BLOCK */
  .code-wrap{position:relative;margin-top:12px;}
  .code-head{display:flex;align-items:center;justify-content:space-between;background:#1e293b;border-radius:10px 10px 0 0;padding:10px 16px;}
  .code-head span{font-size:11px;font-weight:600;color:#64748b;font-family:var(--font-mono);}
  .code-block{background:#0f172a;border-radius:0 0 10px 10px;padding:20px;overflow-x:auto;font-family:var(--font-mono);font-size:12px;line-height:1.7;color:#e2e8f0;max-height:360px;overflow-y:auto;}
  .code-block::-webkit-scrollbar{width:4px;height:4px;}
  .code-block::-webkit-scrollbar-thumb{background:#334155;border-radius:4px;}
  .t-tag{color:#7dd3fc;}
  .t-attr{color:#a5f3fc;}
  .t-val{color:#fde68a;}
  .t-str{color:#86efac;}
  .t-key{color:#c4b5fd;}
  .t-num{color:#fb923c;}
  .t-bool{color:#f472b6;}
  .t-comment{color:#475569;font-style:italic;}
  .t-bracket{color:#60a5fa;}
  .t-comma{color:#64748b;}
  .t-url{color:#6ee7b7;}

  /* META TAGS GRID */
  .meta-grid{display:grid;gap:10px;}
  .meta-row{display:grid;grid-template-columns:200px 1fr;gap:12px;align-items:start;padding:12px 16px;background:var(--gray-bg);border-radius:10px;border:1px solid var(--gray-border);transition:background .2s;}
  .meta-row:hover{background:var(--blue-faint);border-color:rgba(26,74,171,.2);}
  .meta-key{font-size:11px;font-weight:700;color:var(--blue-dark);font-family:var(--font-mono);}
  .meta-val{font-size:12px;color:var(--gray-mid);line-height:1.6;word-break:break-word;}
  .meta-badge{display:inline-block;padding:2px 8px;border-radius:20px;font-size:9px;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-left:6px;}
  .mb-req{background:#fee2e2;color:#dc2626;}
  .mb-og{background:#fef3c7;color:#92400e;}
  .mb-tw{background:#e0f2fe;color:#075985;}
  .mb-schema{background:var(--purple-bg);color:var(--purple);}

  /* STATUS INDICATORS */
  .status-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:20px;}
  .status-item{padding:16px 18px;border-radius:12px;border:1.5px solid;display:flex;align-items:center;gap:12px;}
  .status-item.good{background:var(--green-bg);border-color:var(--green-border);}
  .status-item.warn{background:var(--amber-bg);border-color:var(--amber-border);}
  .si-icon{font-size:20px;}
  .si-label{font-size:11px;font-weight:700;color:var(--gray-dark);margin-bottom:2px;}
  .si-val{font-size:12px;color:var(--gray-mid);}

  /* SCHEMA TYPE PILLS */
  .schema-types{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:20px;}
  .schema-pill{display:flex;align-items:center;gap:7px;padding:8px 16px;border-radius:30px;border:1.5px solid;font-size:12px;font-weight:600;cursor:pointer;transition:all .2s;}
  .sp-org{background:var(--blue-faint);border-color:rgba(26,74,171,.25);color:var(--blue);}
  .sp-org.active{background:var(--blue);border-color:var(--blue);color:#fff;}
  .sp-local{background:var(--green-bg);border-color:var(--green-border);color:var(--green);}
  .sp-local.active{background:var(--green);border-color:var(--green);color:#fff;}
  .sp-service{background:var(--purple-bg);border-color:var(--purple-border);color:var(--purple);}
  .sp-service.active{background:var(--purple);border-color:var(--purple);color:#fff;}
  .sp-faq{background:var(--amber-bg);border-color:var(--amber-border);color:var(--amber);}
  .sp-faq.active{background:var(--amber);border-color:var(--amber);color:#fff;}
  .sp-bread{background:var(--teal-bg);border-color:var(--teal-border);color:var(--teal);}
  .sp-bread.active{background:var(--teal);border-color:var(--teal);color:#fff;}

  .schema-block{display:none;}
  .schema-block.active{display:block;}

  /* ROBOTS & SITEMAP TABLE */
  .info-table{width:100%;border-collapse:collapse;font-size:13px;}
  .info-table th{text-align:left;padding:10px 16px;font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gray-light);background:var(--gray-bg);border-bottom:1px solid var(--gray-border);}
  .info-table td{padding:12px 16px;border-bottom:1px solid var(--gray-border);color:var(--gray-mid);vertical-align:top;}
  .info-table tr:last-child td{border-bottom:none;}
  .info-table tr:hover td{background:var(--blue-faint);}
  .info-table td:first-child{font-weight:600;color:var(--gray-dark);font-family:var(--font-mono);font-size:12px;}

  /* PREVIEW CARD */
  .serp-preview{background:var(--white);border:1.5px solid var(--gray-border);border-radius:12px;padding:20px 24px;margin-bottom:20px;}
  .serp-url{font-size:12px;color:var(--green);margin-bottom:4px;font-family:var(--font-mono);}
  .serp-title{font-size:18px;color:#1a0dab;font-weight:400;margin-bottom:4px;text-decoration:underline;cursor:pointer;}
  .serp-desc{font-size:13px;color:#4d5156;line-height:1.5;}
  .serp-label{font-size:10px;font-weight:700;letter-spacing:2px;color:var(--gray-light);text-transform:uppercase;margin-bottom:12px;}

  @media(max-width:1000px){.main{grid-template-columns:1fr;}.sidebar{position:static;}}
  @media(max-width:640px){.main{padding:24px 16px 60px;}.page-hero{padding:60px 20px 44px;}.sec-body{padding:20px;}.sec-head{padding:18px 20px;}.status-grid{grid-template-columns:1fr;}}
</style>

<!-- HERO -->
<div class="page-hero">
  <div class="ph-inner">
    <div class="hero-badge"><span class="badge-dot"></span>SEO · Schema · Structured Data</div>
    <h1 class="hero-title">SEO &amp; <em>JSON-LD Schema</em></h1>
    <p class="hero-sub">All meta tags, Open Graph, Twitter Cards, robots.txt, sitemap and JSON-LD structured data for Globetrotters Ocean Freight Services — ready to copy and paste.</p>
  </div>
</div>

<div class="main">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-card">
      <div class="sc-header"><p>Quick Navigation</p></div>
      <ul class="sc-nav">
        <li><a href="#serp-preview" class="active"><span class="dot" style="background:#1a0dab;"></span>SERP Preview</a></li>
        <li><a href="#meta-tags"><span class="dot" style="background:var(--blue);"></span>Meta Tags</a></li>
        <li><a href="#open-graph"><span class="dot" style="background:var(--amber);"></span>Open Graph</a></li>
        <li><a href="#twitter-cards"><span class="dot" style="background:#1da1f2;"></span>Twitter Cards</a></li>
        <li><a href="#json-ld"><span class="dot" style="background:var(--purple);"></span>JSON-LD Schema</a></li>
        <li><a href="#robots"><span class="dot" style="background:var(--green);"></span>robots.txt</a></li>
        <li><a href="#sitemap"><span class="dot" style="background:var(--teal);"></span>Sitemap</a></li>
        <li><a href="#canonical"><span class="dot" style="background:#ec4899;"></span>Canonical &amp; hreflang</a></li>
      </ul>
    </div>
  </aside>

  <!-- CONTENT -->
  <div class="content">

    <!-- ═══════════════════════════════
         SERP PREVIEW
    ════════════════════════════════ -->
    <div class="section" id="serp-preview">
      <div class="sec-head">
        <div class="sec-icon" style="background:#e8f0fe;">🔍</div>
        <div><p class="sec-title">Google SERP Preview</p><p class="sec-sub">How Globetrotters Ocean Freight Services will appear in search results</p></div>
      </div>
      <div class="sec-body">
        <p class="serp-label">Desktop Preview</p>
        <div class="serp-preview">
          <p class="serp-url">https://globetrottersfreight.com &rsaquo; ocean-freight</p>
          <p class="serp-title">Globetrotters Ocean Freight — Global Shipping & Logistics Experts</p>
          <p class="serp-desc">Reliable ocean freight, air cargo, and logistics solutions worldwide. Fast, secure and cost-effective international shipping with global coverage. FCL & LCL shipping. Get a quote today.</p>
        </div>
        <div class="status-grid">
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Title Length</p><p class="si-val">60 chars · Ideal 50–60</p></div></div>
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Description Length</p><p class="si-val">157 chars · Ideal 150–160</p></div></div>
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Structured Data</p><p class="si-val">5 schema types defined</p></div></div>
          <div class="status-item good"><span class="si-icon">✅</span><div><p class="si-label">Mobile Friendly</p><p class="si-val">Viewport meta set</p></div></div>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         META TAGS
    ════════════════════════════════ -->
    <div class="section" id="meta-tags">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--blue-pale);">🏷️</div>
        <div><p class="sec-title">Essential Meta Tags</p><p class="sec-sub">Paste inside &lt;head&gt; of every page</p></div>
      </div>
      <div class="sec-body">
        <div class="meta-grid">
          <div class="meta-row"><span class="meta-key">charset</span><span class="meta-val">UTF-8</span></div>
          <div class="meta-row"><span class="meta-key">viewport</span><span class="meta-val">width=device-width, initial-scale=1.0</span></div>
          <div class="meta-row"><span class="meta-key">title <span class="meta-badge mb-req">Required</span></span><span class="meta-val">Globetrotters Ocean Freight — Global Shipping & Logistics Experts</span></div>
          <div class="meta-row"><span class="meta-key">description <span class="meta-badge mb-req">Required</span></span><span class="meta-val">Reliable ocean freight, air cargo, and logistics solutions worldwide. Fast, secure and cost-effective international shipping with global coverage. FCL & LCL shipping available.</span></div>
          <div class="meta-row"><span class="meta-key">keywords</span><span class="meta-val">ocean freight services, air freight logistics, shipping company, freight forwarding, international cargo services, FCL shipping, LCL shipping, globetrotters logistics, global freight</span></div>
          <div class="meta-row"><span class="meta-key">author</span><span class="meta-val">Globetrotters Ocean Freight Services</span></div>
          <div class="meta-row"><span class="meta-key">robots</span><span class="meta-val">index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1</span></div>
          <div class="meta-row"><span class="meta-key">theme-color</span><span class="meta-val">#0f2f7a</span></div>
          <div class="meta-row"><span class="meta-key">geo.region</span><span class="meta-val">GB-ENG</span></div>
          <div class="meta-row"><span class="meta-key">geo.placename</span><span class="meta-val">London, United Kingdom</span></div>
          <div class="meta-row"><span class="meta-key">language</span><span class="meta-val">English</span></div>
          <div class="meta-row"><span class="meta-key">revisit-after</span><span class="meta-val">7 days</span></div>
        </div>

        <div class="code-wrap" style="margin-top:24px;">
          <div class="code-head">
            <span>HTML — Paste into &lt;head&gt;</span>
            <button class="copy-btn" onclick="copyCode('meta-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="meta-code"><span class="t-comment">&lt;!-- ═══ ESSENTIAL META TAGS — GLOBETROTTERS OCEAN FREIGHT SERVICES ═══ --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">charset</span>=<span class="t-val">"UTF-8"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"viewport"</span> <span class="t-attr">content</span>=<span class="t-val">"width=device-width, initial-scale=1.0"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- PRIMARY META --&gt;</span>
<span class="t-tag">&lt;title&gt;</span>Globetrotters Ocean Freight — Global Shipping &amp; Logistics Experts<span class="t-tag">&lt;/title&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"description"</span> <span class="t-attr">content</span>=<span class="t-val">"Reliable ocean freight, air cargo, and logistics solutions worldwide. Fast, secure and cost-effective international shipping with global coverage. FCL &amp; LCL shipping available."</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"keywords"</span> <span class="t-attr">content</span>=<span class="t-val">"ocean freight services, air freight logistics, shipping company, freight forwarding, international cargo services, FCL shipping, LCL shipping, globetrotters logistics, global freight"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"author"</span> <span class="t-attr">content</span>=<span class="t-val">"Globetrotters Ocean Freight Services"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"robots"</span> <span class="t-attr">content</span>=<span class="t-val">"index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"theme-color"</span> <span class="t-attr">content</span>=<span class="t-val">"#0f2f7a"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- GEO --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"geo.region"</span> <span class="t-attr">content</span>=<span class="t-val">"GB-ENG"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"geo.placename"</span> <span class="t-attr">content</span>=<span class="t-val">"London, United Kingdom"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"geo.position"</span> <span class="t-attr">content</span>=<span class="t-val">"51.5074;-0.1278"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"ICBM"</span> <span class="t-attr">content</span>=<span class="t-val">"51.5074, -0.1278"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- CANONICAL --&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"canonical"</span> <span class="t-attr">href</span>=<span class="t-val">"https://globetrottersfreight.com/"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"en-gb"</span> <span class="t-attr">href</span>=<span class="t-val">"https://globetrottersfreight.com/"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"x-default"</span> <span class="t-attr">href</span>=<span class="t-val">"https://globetrottersfreight.com/"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         OPEN GRAPH
    ════════════════════════════════ -->
    <div class="section" id="open-graph">
      <div class="sec-head">
        <div class="sec-icon" style="background:#fef3c7;">📘</div>
        <div><p class="sec-title">Open Graph Tags</p><p class="sec-sub">Controls appearance when shared on Facebook, LinkedIn, WhatsApp</p></div>
      </div>
      <div class="sec-body">
        <div class="meta-grid">
          <div class="meta-row"><span class="meta-key">og:type <span class="meta-badge mb-og">OG</span></span><span class="meta-val">website</span></div>
          <div class="meta-row"><span class="meta-key">og:url <span class="meta-badge mb-og">OG</span></span><span class="meta-val">https://globetrottersfreight.com/</span></div>
          <div class="meta-row"><span class="meta-key">og:title <span class="meta-badge mb-og">OG</span></span><span class="meta-val">Globetrotters Ocean Freight — Global Shipping & Logistics Experts</span></div>
          <div class="meta-row"><span class="meta-key">og:description <span class="meta-badge mb-og">OG</span></span><span class="meta-val">Reliable ocean freight, air cargo and logistics solutions worldwide. Fast, secure and cost-effective international shipping. FCL & LCL available.</span></div>
          <div class="meta-row"><span class="meta-key">og:image <span class="meta-badge mb-og">OG</span></span><span class="meta-val">https://globetrottersfreight.com/og-image.jpg (1200×630px)</span></div>
          <div class="meta-row"><span class="meta-key">og:image:alt <span class="meta-badge mb-og">OG</span></span><span class="meta-val">Globetrotters Ocean Freight Services — Global Shipping & Logistics</span></div>
          <div class="meta-row"><span class="meta-key">og:site_name <span class="meta-badge mb-og">OG</span></span><span class="meta-val">Globetrotters Ocean Freight Services</span></div>
          <div class="meta-row"><span class="meta-key">og:locale <span class="meta-badge mb-og">OG</span></span><span class="meta-val">en_GB</span></div>
        </div>
        <div class="code-wrap" style="margin-top:24px;">
          <div class="code-head">
            <span>HTML — Open Graph</span>
            <button class="copy-btn" onclick="copyCode('og-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="og-code"><span class="t-comment">&lt;!-- ═══ OPEN GRAPH — GLOBETROTTERS OCEAN FREIGHT SERVICES ═══ --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:type"</span> <span class="t-attr">content</span>=<span class="t-val">"website"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:url"</span> <span class="t-attr">content</span>=<span class="t-val">"https://globetrottersfreight.com/"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:title"</span> <span class="t-attr">content</span>=<span class="t-val">"Globetrotters Ocean Freight — Global Shipping &amp; Logistics Experts"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:description"</span> <span class="t-attr">content</span>=<span class="t-val">"Reliable ocean freight, air cargo and logistics solutions worldwide. Fast, secure and cost-effective international shipping. FCL &amp; LCL available."</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image"</span> <span class="t-attr">content</span>=<span class="t-val">"https://globetrottersfreight.com/og-image.jpg"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image:width"</span> <span class="t-attr">content</span>=<span class="t-val">"1200"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image:height"</span> <span class="t-attr">content</span>=<span class="t-val">"630"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:image:alt"</span> <span class="t-attr">content</span>=<span class="t-val">"Globetrotters Ocean Freight Services — Global Shipping &amp; Logistics"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:site_name"</span> <span class="t-attr">content</span>=<span class="t-val">"Globetrotters Ocean Freight Services"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:locale"</span> <span class="t-attr">content</span>=<span class="t-val">"en_GB"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         TWITTER CARDS
    ════════════════════════════════ -->
    <div class="section" id="twitter-cards">
      <div class="sec-head">
        <div class="sec-icon" style="background:#e0f2fe;">🐦</div>
        <div><p class="sec-title">Twitter / X Cards</p><p class="sec-sub">Controls appearance when shared on Twitter / X</p></div>
      </div>
      <div class="sec-body">
        <div class="meta-grid">
          <div class="meta-row"><span class="meta-key">twitter:card <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">summary_large_image</span></div>
          <div class="meta-row"><span class="meta-key">twitter:site <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">@globetrottersfreight</span></div>
          <div class="meta-row"><span class="meta-key">twitter:creator <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">@globetrottersfreight</span></div>
          <div class="meta-row"><span class="meta-key">twitter:title <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">Globetrotters Ocean Freight — Global Shipping & Logistics Experts</span></div>
          <div class="meta-row"><span class="meta-key">twitter:description <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">Reliable ocean freight, air cargo and logistics worldwide. FCL & LCL shipping. Fast, secure and cost-effective. Get a quote today.</span></div>
          <div class="meta-row"><span class="meta-key">twitter:image <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">https://globetrottersfreight.com/og-image.jpg</span></div>
          <div class="meta-row"><span class="meta-key">twitter:image:alt <span class="meta-badge mb-tw">TW</span></span><span class="meta-val">Globetrotters Ocean Freight Services</span></div>
        </div>
        <div class="code-wrap" style="margin-top:24px;">
          <div class="code-head">
            <span>HTML — Twitter Cards</span>
            <button class="copy-btn" onclick="copyCode('tw-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="tw-code"><span class="t-comment">&lt;!-- ═══ TWITTER CARDS — GLOBETROTTERS OCEAN FREIGHT SERVICES ═══ --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:card"</span> <span class="t-attr">content</span>=<span class="t-val">"summary_large_image"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:site"</span> <span class="t-attr">content</span>=<span class="t-val">"@globetrottersfreight"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:creator"</span> <span class="t-attr">content</span>=<span class="t-val">"@globetrottersfreight"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:title"</span> <span class="t-attr">content</span>=<span class="t-val">"Globetrotters Ocean Freight — Global Shipping &amp; Logistics Experts"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:description"</span> <span class="t-attr">content</span>=<span class="t-val">"Reliable ocean freight, air cargo and logistics worldwide. FCL &amp; LCL shipping. Fast, secure and cost-effective. Get a quote today."</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:image"</span> <span class="t-attr">content</span>=<span class="t-val">"https://globetrottersfreight.com/og-image.jpg"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:image:alt"</span> <span class="t-attr">content</span>=<span class="t-val">"Globetrotters Ocean Freight Services"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         JSON-LD SCHEMA
    ════════════════════════════════ -->
    <div class="section" id="json-ld">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--purple-bg);">{}</div>
        <div><p class="sec-title">JSON-LD Structured Data</p><p class="sec-sub">5 schema types — click to view each one</p></div>
      </div>
      <div class="sec-body">

        <div class="schema-types">
          <button class="schema-pill sp-org active" onclick="showSchema('org',this)">🏢 Organization</button>
          <button class="schema-pill sp-local" onclick="showSchema('local',this)">📍 LocalBusiness</button>
          <button class="schema-pill sp-service" onclick="showSchema('service',this)">⚡ Service</button>
          <button class="schema-pill sp-faq" onclick="showSchema('faq',this)">❓ FAQPage</button>
          <button class="schema-pill sp-bread" onclick="showSchema('bread',this)">🍞 BreadcrumbList</button>
        </div>

        <!-- ORGANIZATION -->
        <div class="schema-block active" id="schema-org">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — Organization Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-org',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-org"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Organization"</span><span class="t-comma">,</span>
  <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/#organization"</span><span class="t-comma">,</span>
  <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Globetrotters Ocean Freight Services"</span><span class="t-comma">,</span>
  <span class="t-key">"legalName"</span><span class="t-comma">:</span> <span class="t-str">"Globetrotters Ocean Freight Services Ltd"</span><span class="t-comma">,</span>
  <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com"</span><span class="t-comma">,</span>
  <span class="t-key">"logo"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ImageObject"</span><span class="t-comma">,</span>
    <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/logo.png"</span><span class="t-comma">,</span>
    <span class="t-key">"width"</span><span class="t-comma">:</span> <span class="t-num">200</span><span class="t-comma">,</span>
    <span class="t-key">"height"</span><span class="t-comma">:</span> <span class="t-num">100</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"image"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/og-image.jpg"</span><span class="t-comma">,</span>
  <span class="t-key">"description"</span><span class="t-comma">:</span> <span class="t-str">"Reliable ocean freight, air cargo, and logistics solutions worldwide. Fast, secure and cost-effective international shipping with global coverage."</span><span class="t-comma">,</span>
  <span class="t-key">"areaServed"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"GB"</span><span class="t-comma">,</span> <span class="t-str">"Worldwide"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"address"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"PostalAddress"</span><span class="t-comma">,</span>
    <span class="t-key">"addressLocality"</span><span class="t-comma">:</span> <span class="t-str">"London"</span><span class="t-comma">,</span>
    <span class="t-key">"addressRegion"</span><span class="t-comma">:</span> <span class="t-str">"England"</span><span class="t-comma">,</span>
    <span class="t-key">"addressCountry"</span><span class="t-comma">:</span> <span class="t-str">"GB"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"contactPoint"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ContactPoint"</span><span class="t-comma">,</span>
      <span class="t-key">"telephone"</span><span class="t-comma">:</span> <span class="t-str">"+44-XXXX-XXXXXX"</span><span class="t-comma">,</span>
      <span class="t-key">"contactType"</span><span class="t-comma">:</span> <span class="t-str">"customer service"</span><span class="t-comma">,</span>
      <span class="t-key">"areaServed"</span><span class="t-comma">:</span> <span class="t-str">"GB"</span><span class="t-comma">,</span>
      <span class="t-key">"availableLanguage"</span><span class="t-comma">:</span> <span class="t-str">"English"</span><span class="t-comma">,</span>
      <span class="t-key">"hoursAvailable"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"OpeningHoursSpecification"</span><span class="t-comma">,</span>
        <span class="t-key">"dayOfWeek"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"Monday"</span><span class="t-comma">,</span><span class="t-str">"Tuesday"</span><span class="t-comma">,</span><span class="t-str">"Wednesday"</span><span class="t-comma">,</span><span class="t-str">"Thursday"</span><span class="t-comma">,</span><span class="t-str">"Friday"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
        <span class="t-key">"opens"</span><span class="t-comma">:</span> <span class="t-str">"09:00"</span><span class="t-comma">,</span>
        <span class="t-key">"closes"</span><span class="t-comma">:</span> <span class="t-str">"18:00"</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"sameAs"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-str">"https://www.facebook.com/globetrottersfreight"</span><span class="t-comma">,</span>
    <span class="t-str">"https://www.linkedin.com/company/globetrottersfreight"</span><span class="t-comma">,</span>
    <span class="t-str">"https://www.instagram.com/globetrottersfreight"</span>
  <span class="t-bracket">]</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- LOCAL BUSINESS -->
        <div class="schema-block" id="schema-local">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — LocalBusiness Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-local',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-local"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"LocalBusiness"</span><span class="t-comma">,</span> <span class="t-str">"MovingCompany"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/#localbusiness"</span><span class="t-comma">,</span>
  <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Globetrotters Ocean Freight Services"</span><span class="t-comma">,</span>
  <span class="t-key">"image"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/og-image.jpg"</span><span class="t-comma">,</span>
  <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com"</span><span class="t-comma">,</span>
  <span class="t-key">"telephone"</span><span class="t-comma">:</span> <span class="t-str">"+44-XXXX-XXXXXX"</span><span class="t-comma">,</span>
  <span class="t-key">"priceRange"</span><span class="t-comma">:</span> <span class="t-str">"££"</span><span class="t-comma">,</span>
  <span class="t-key">"currenciesAccepted"</span><span class="t-comma">:</span> <span class="t-str">"GBP, USD"</span><span class="t-comma">,</span>
  <span class="t-key">"paymentAccepted"</span><span class="t-comma">:</span> <span class="t-str">"Bank Transfer, Card"</span><span class="t-comma">,</span>
  <span class="t-key">"address"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"PostalAddress"</span><span class="t-comma">,</span>
    <span class="t-key">"streetAddress"</span><span class="t-comma">:</span> <span class="t-str">"London"</span><span class="t-comma">,</span>
    <span class="t-key">"addressLocality"</span><span class="t-comma">:</span> <span class="t-str">"London"</span><span class="t-comma">,</span>
    <span class="t-key">"addressRegion"</span><span class="t-comma">:</span> <span class="t-str">"England"</span><span class="t-comma">,</span>
    <span class="t-key">"addressCountry"</span><span class="t-comma">:</span> <span class="t-str">"GB"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"geo"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"GeoCoordinates"</span><span class="t-comma">,</span>
    <span class="t-key">"latitude"</span><span class="t-comma">:</span> <span class="t-num">51.5074</span><span class="t-comma">,</span>
    <span class="t-key">"longitude"</span><span class="t-comma">:</span> <span class="t-num">-0.1278</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"openingHoursSpecification"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"OpeningHoursSpecification"</span><span class="t-comma">,</span>
      <span class="t-key">"dayOfWeek"</span><span class="t-comma">:</span> <span class="t-bracket">[</span><span class="t-str">"Monday"</span><span class="t-comma">,</span><span class="t-str">"Tuesday"</span><span class="t-comma">,</span><span class="t-str">"Wednesday"</span><span class="t-comma">,</span><span class="t-str">"Thursday"</span><span class="t-comma">,</span><span class="t-str">"Friday"</span><span class="t-bracket">]</span><span class="t-comma">,</span>
      <span class="t-key">"opens"</span><span class="t-comma">:</span> <span class="t-str">"09:00"</span><span class="t-comma">,</span>
      <span class="t-key">"closes"</span><span class="t-comma">:</span> <span class="t-str">"18:00"</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span><span class="t-comma">,</span>
  <span class="t-key">"hasMap"</span><span class="t-comma">:</span> <span class="t-str">"https://maps.google.com/?q=Globetrotters+Ocean+Freight+London"</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- SERVICE -->
        <div class="schema-block" id="schema-service">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — Service Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-service',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-service"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Service"</span><span class="t-comma">,</span>
  <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/#service"</span><span class="t-comma">,</span>
  <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"International Ocean Freight &amp; Logistics Services"</span><span class="t-comma">,</span>
  <span class="t-key">"provider"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@id"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/#organization"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"serviceType"</span><span class="t-comma">:</span> <span class="t-str">"Freight Forwarding &amp; Logistics"</span><span class="t-comma">,</span>
  <span class="t-key">"description"</span><span class="t-comma">:</span> <span class="t-str">"Comprehensive ocean freight, air cargo and logistics solutions. FCL and LCL ocean freight, air freight, road freight, customs clearance, warehousing and door-to-door delivery worldwide."</span><span class="t-comma">,</span>
  <span class="t-key">"areaServed"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Place"</span><span class="t-comma">,</span>
    <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Worldwide"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"availableChannel"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
    <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ServiceChannel"</span><span class="t-comma">,</span>
    <span class="t-key">"serviceUrl"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com"</span><span class="t-comma">,</span>
    <span class="t-key">"servicePhone"</span><span class="t-comma">:</span> <span class="t-str">"+44-XXXX-XXXXXX"</span>
  <span class="t-bracket">}</span><span class="t-comma">,</span>
  <span class="t-key">"offers"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"FCL Ocean Freight"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/ocean-freight-fcl"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"LCL Ocean Freight"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/ocean-freight-lcl"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Air Freight"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/air-freight"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Customs Clearance"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/customs-clearance"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Warehousing &amp; Distribution"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/warehousing"</span> <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span> <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Offer"</span><span class="t-comma">,</span> <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Road Freight"</span><span class="t-comma">,</span> <span class="t-key">"priceCurrency"</span><span class="t-comma">:</span> <span class="t-str">"GBP"</span><span class="t-comma">,</span> <span class="t-key">"url"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/road-freight"</span> <span class="t-bracket">}</span>
  <span class="t-bracket">]</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- FAQ -->
        <div class="schema-block" id="schema-faq">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — FAQPage Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-faq',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-faq"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"FAQPage"</span><span class="t-comma">,</span>
  <span class="t-key">"mainEntity"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"What shipping services does Globetrotters Ocean Freight offer?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"Globetrotters Ocean Freight Services offers FCL and LCL ocean freight, air freight, road freight, customs clearance, warehousing and door-to-door delivery solutions worldwide."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"What is the difference between FCL and LCL shipping?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"FCL (Full Container Load) means you rent the entire container exclusively for your cargo. LCL (Less than Container Load) means your cargo shares container space with other shippers, making it more cost-effective for smaller shipments."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"How long does ocean freight shipping take?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"Transit times vary by route. Europe: 5–10 days. USA/Canada: 10–20 days. Asia (China, India): 20–35 days. Australia: 25–40 days. We provide estimated transit times when you request a quote."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Do you handle customs clearance?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"Yes, Globetrotters Ocean Freight Services provides full customs clearance and brokerage services for both imports and exports, ensuring your shipments comply with all regulations."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Question"</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Can I track my shipment?"</span><span class="t-comma">,</span>
      <span class="t-key">"acceptedAnswer"</span><span class="t-comma">:</span> <span class="t-bracket">{</span>
        <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"Answer"</span><span class="t-comma">,</span>
        <span class="t-key">"text"</span><span class="t-comma">:</span> <span class="t-str">"Yes, we provide real-time shipment tracking for all ocean freight, air freight and road freight consignments via our online portal and dedicated customer service team."</span>
      <span class="t-bracket">}</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

        <!-- BREADCRUMB -->
        <div class="schema-block" id="schema-bread">
          <div class="code-wrap">
            <div class="code-head">
              <span>JSON-LD — BreadcrumbList Schema</span>
              <button class="copy-btn" onclick="copyCode('jld-bread',this)">Copy</button>
            </div>
            <pre class="code-block" id="jld-bread"><span class="t-tag">&lt;script</span> <span class="t-attr">type</span>=<span class="t-val">"application/ld+json"</span><span class="t-tag">&gt;</span>
<span class="t-bracket">{</span>
  <span class="t-key">"@context"</span><span class="t-comma">:</span> <span class="t-str">"https://schema.org"</span><span class="t-comma">,</span>
  <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"BreadcrumbList"</span><span class="t-comma">,</span>
  <span class="t-key">"itemListElement"</span><span class="t-comma">:</span> <span class="t-bracket">[</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ListItem"</span><span class="t-comma">,</span>
      <span class="t-key">"position"</span><span class="t-comma">:</span> <span class="t-num">1</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Home"</span><span class="t-comma">,</span>
      <span class="t-key">"item"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com"</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ListItem"</span><span class="t-comma">,</span>
      <span class="t-key">"position"</span><span class="t-comma">:</span> <span class="t-num">2</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Services"</span><span class="t-comma">,</span>
      <span class="t-key">"item"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/services"</span>
    <span class="t-bracket">}</span><span class="t-comma">,</span>
    <span class="t-bracket">{</span>
      <span class="t-key">"@type"</span><span class="t-comma">:</span> <span class="t-str">"ListItem"</span><span class="t-comma">,</span>
      <span class="t-key">"position"</span><span class="t-comma">:</span> <span class="t-num">3</span><span class="t-comma">,</span>
      <span class="t-key">"name"</span><span class="t-comma">:</span> <span class="t-str">"Ocean Freight"</span><span class="t-comma">,</span>
      <span class="t-key">"item"</span><span class="t-comma">:</span> <span class="t-str">"https://globetrottersfreight.com/ocean-freight"</span>
    <span class="t-bracket">}</span>
  <span class="t-bracket">]</span>
<span class="t-bracket">}</span>
<span class="t-tag">&lt;/script&gt;</span></pre>
          </div>
        </div>

      </div>
    </div>

    <!-- ═══════════════════════════════
         ROBOTS.TXT
    ════════════════════════════════ -->
    <div class="section" id="robots">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--green-bg);">🤖</div>
        <div><p class="sec-title">robots.txt</p><p class="sec-sub">Place at https://globetrottersfreight.com/robots.txt</p></div>
      </div>
      <div class="sec-body">
        <div class="code-wrap" style="margin-top:0;">
          <div class="code-head">
            <span>robots.txt — Root file</span>
            <button class="copy-btn" onclick="copyCode('robots-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="robots-code"><span class="t-comment"># robots.txt — Globetrotters Ocean Freight Services</span>
<span class="t-comment"># https://globetrottersfreight.com/robots.txt</span>

<span class="t-key">User-agent:</span> *
<span class="t-key">Allow:</span> /

<span class="t-comment"># Block admin, private and internal paths</span>
<span class="t-key">Disallow:</span> /wp-admin/
<span class="t-key">Disallow:</span> /wp-includes/
<span class="t-key">Disallow:</span> /admin/
<span class="t-key">Disallow:</span> /dashboard/
<span class="t-key">Disallow:</span> /api/
<span class="t-key">Disallow:</span> /?s=
<span class="t-key">Disallow:</span> /search/
<span class="t-key">Disallow:</span> /login
<span class="t-key">Disallow:</span> /register
<span class="t-key">Disallow:</span> /thankyou
<span class="t-key">Disallow:</span> /quote-confirmation

<span class="t-comment"># Allow specific bots with priority</span>
<span class="t-key">User-agent:</span> Googlebot
<span class="t-key">Allow:</span> /

<span class="t-key">User-agent:</span> Bingbot
<span class="t-key">Allow:</span> /

<span class="t-comment"># Sitemap location</span>
<span class="t-key">Sitemap:</span> <span class="t-url">https://globetrottersfreight.com/sitemap.xml</span>

<span class="t-comment"># Crawl delay (optional, for shared hosting)</span>
<span class="t-key">Crawl-delay:</span> 1</pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         SITEMAP
    ════════════════════════════════ -->
    <div class="section" id="sitemap">
      <div class="sec-head">
        <div class="sec-icon" style="background:var(--teal-bg);">🗺️</div>
        <div><p class="sec-title">XML Sitemap</p><p class="sec-sub">Place at https://globetrottersfreight.com/sitemap.xml</p></div>
      </div>
      <div class="sec-body">
        <table class="info-table" style="margin-bottom:20px;">
          <thead><tr><th>URL</th><th>Priority</th><th>Change Freq</th><th>Notes</th></tr></thead>
          <tbody>
            <tr><td>globetrottersfreight.com/</td><td>1.0</td><td>weekly</td><td>Homepage</td></tr>
            <tr><td>globetrottersfreight.com/services</td><td>0.9</td><td>monthly</td><td>All services</td></tr>
            <tr><td>globetrottersfreight.com/ocean-freight</td><td>0.9</td><td>monthly</td><td>Ocean freight overview</td></tr>
            <tr><td>globetrottersfreight.com/ocean-freight-fcl</td><td>0.9</td><td>monthly</td><td>FCL shipping</td></tr>
            <tr><td>globetrottersfreight.com/ocean-freight-lcl</td><td>0.9</td><td>monthly</td><td>LCL shipping</td></tr>
            <tr><td>globetrottersfreight.com/air-freight</td><td>0.8</td><td>monthly</td><td>Air cargo services</td></tr>
            <tr><td>globetrottersfreight.com/customs-clearance</td><td>0.8</td><td>monthly</td><td>Customs brokerage</td></tr>
            <tr><td>globetrottersfreight.com/warehousing</td><td>0.8</td><td>monthly</td><td>Warehousing & distribution</td></tr>
            <tr><td>globetrottersfreight.com/road-freight</td><td>0.8</td><td>monthly</td><td>Road transport</td></tr>
            <tr><td>globetrottersfreight.com/get-a-quote</td><td>0.9</td><td>weekly</td><td>Quote request page</td></tr>
            <tr><td>globetrottersfreight.com/contact</td><td>0.7</td><td>monthly</td><td>Contact page</td></tr>
          </tbody>
        </table>
        <div class="code-wrap">
          <div class="code-head">
            <span>XML — sitemap.xml</span>
            <button class="copy-btn" onclick="copyCode('sitemap-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="sitemap-code"><span class="t-comment">&lt;?xml version="1.0" encoding="UTF-8"?&gt;</span>
<span class="t-tag">&lt;urlset</span> <span class="t-attr">xmlns</span>=<span class="t-val">"http://www.sitemaps.org/schemas/sitemap/0.9"</span>
        <span class="t-attr">xmlns:xsi</span>=<span class="t-val">"http://www.w3.org/2001/XMLSchema-instance"</span>
        <span class="t-attr">xsi:schemaLocation</span>=<span class="t-val">"http://www.sitemaps.org/schemas/sitemap/0.9
          http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"</span><span class="t-tag">&gt;</span>

  <span class="t-comment">&lt;!-- Homepage --&gt;</span>
  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>weekly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>1.0<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-comment">&lt;!-- Services --&gt;</span>
  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/services</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-comment">&lt;!-- Ocean Freight Pages --&gt;</span>
  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/ocean-freight</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/ocean-freight-fcl</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/ocean-freight-lcl</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-comment">&lt;!-- Other Service Pages --&gt;</span>
  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/air-freight</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.8<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/customs-clearance</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.8<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/warehousing</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.8<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/road-freight</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.8<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/get-a-quote</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>weekly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.9<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

  <span class="t-tag">&lt;url&gt;</span>
    <span class="t-tag">&lt;loc&gt;</span><span class="t-url">https://globetrottersfreight.com/contact</span><span class="t-tag">&lt;/loc&gt;</span>
    <span class="t-tag">&lt;lastmod&gt;</span>2025-06-01<span class="t-tag">&lt;/lastmod&gt;</span>
    <span class="t-tag">&lt;changefreq&gt;</span>monthly<span class="t-tag">&lt;/changefreq&gt;</span>
    <span class="t-tag">&lt;priority&gt;</span>0.7<span class="t-tag">&lt;/priority&gt;</span>
  <span class="t-tag">&lt;/url&gt;</span>

<span class="t-tag">&lt;/urlset&gt;</span></pre>
        </div>
      </div>
    </div>

    <!-- ═══════════════════════════════
         CANONICAL & HREFLANG
    ════════════════════════════════ -->
    <div class="section" id="canonical">
      <div class="sec-head">
        <div class="sec-icon" style="background:#fdf2f8;">🔗</div>
        <div><p class="sec-title">Canonical &amp; Per-Page SEO</p><p class="sec-sub">Use these templates for each service page individually</p></div>
      </div>
      <div class="sec-body">
        <table class="info-table" style="margin-bottom:24px;">
          <thead><tr><th>Page</th><th>Recommended Title Tag</th><th>Priority Keyword</th></tr></thead>
          <tbody>
            <tr><td>/ (Home)</td><td>Globetrotters Ocean Freight — Global Shipping & Logistics Experts</td><td>ocean freight services UK</td></tr>
            <tr><td>/ocean-freight</td><td>Ocean Freight Services — FCL & LCL Shipping | Globetrotters</td><td>ocean freight UK</td></tr>
            <tr><td>/ocean-freight-fcl</td><td>FCL Full Container Load Shipping | Globetrotters Freight</td><td>FCL shipping UK</td></tr>
            <tr><td>/ocean-freight-lcl</td><td>LCL Less Container Load Shipping | Globetrotters Freight</td><td>LCL shipping UK</td></tr>
            <tr><td>/air-freight</td><td>Air Freight Services Worldwide | Globetrotters Freight</td><td>air freight services UK</td></tr>
            <tr><td>/customs-clearance</td><td>Customs Clearance & Brokerage UK | Globetrotters Freight</td><td>customs clearance UK</td></tr>
            <tr><td>/warehousing</td><td>Warehousing & Distribution UK | Globetrotters Freight</td><td>warehousing logistics UK</td></tr>
            <tr><td>/road-freight</td><td>Road Freight Transport UK & Europe | Globetrotters</td><td>road freight UK</td></tr>
            <tr><td>/get-a-quote</td><td>Get a Freight Quote — Fast & Free | Globetrotters Freight</td><td>freight quote online UK</td></tr>
          </tbody>
        </table>

        <div class="code-wrap">
          <div class="code-head">
            <span>HTML — Per-page canonical template</span>
            <button class="copy-btn" onclick="copyCode('canon-code',this)">Copy</button>
          </div>
          <pre class="code-block" id="canon-code"><span class="t-comment">&lt;!-- Replace {PAGE_URL}, {PAGE_TITLE} and {PAGE_DESCRIPTION} for each page --&gt;</span>

<span class="t-tag">&lt;title&gt;</span>{PAGE_TITLE}<span class="t-tag">&lt;/title&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"description"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_DESCRIPTION}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"canonical"</span> <span class="t-attr">href</span>=<span class="t-val">"https://globetrottersfreight.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"en-gb"</span> <span class="t-attr">href</span>=<span class="t-val">"https://globetrottersfreight.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;link</span> <span class="t-attr">rel</span>=<span class="t-val">"alternate"</span> <span class="t-attr">hreflang</span>=<span class="t-val">"x-default"</span> <span class="t-attr">href</span>=<span class="t-val">"https://globetrottersfreight.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- Page-specific OG --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:title"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_TITLE}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:description"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_DESCRIPTION}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">property</span>=<span class="t-val">"og:url"</span> <span class="t-attr">content</span>=<span class="t-val">"https://globetrottersfreight.com/{PAGE_URL}"</span><span class="t-tag">/&gt;</span>

<span class="t-comment">&lt;!-- Page-specific Twitter --&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:title"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_TITLE}"</span><span class="t-tag">/&gt;</span>
<span class="t-tag">&lt;meta</span> <span class="t-attr">name</span>=<span class="t-val">"twitter:description"</span> <span class="t-attr">content</span>=<span class="t-val">"{PAGE_DESCRIPTION}"</span><span class="t-tag">/&gt;</span></pre>
        </div>
      </div>
    </div>

  </div><!-- /content -->
</div><!-- /main -->

<script>
window.addEventListener('scroll', () => {
  const nb = document.getElementById('navbar');
  if (nb) nb.classList.toggle('scrolled', window.scrollY > 40);
}, {passive:true});

function showSchema(id, btn) {
  document.querySelectorAll('.schema-block').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.schema-pill').forEach(p => p.classList.remove('active'));
  document.getElementById('schema-' + id)?.classList.add('active');
  btn.classList.add('active');
}

function copyCode(id, btn) {
  const el = document.getElementById(id);
  if (!el) return;
  const text = el.innerText || el.textContent;
  navigator.clipboard.writeText(text).then(() => {
    const orig = btn.textContent;
    btn.textContent = '✓ Copied!';
    btn.classList.add('copied');
    setTimeout(() => { btn.textContent = orig; btn.classList.remove('copied'); }, 2000);
  }).catch(() => {
    const ta = document.createElement('textarea');
    ta.value = text;
    ta.style.position = 'fixed';
    ta.style.opacity = '0';
    document.body.appendChild(ta);
    ta.select();
    document.execCommand('copy');
    document.body.removeChild(ta);
    const orig = btn.textContent;
    btn.textContent = '✓ Copied!';
    btn.classList.add('copied');
    setTimeout(() => { btn.textContent = orig; btn.classList.remove('copied'); }, 2000);
  });
}

// Active sidebar link on scroll
const sections = document.querySelectorAll('.section');
const navLinks = document.querySelectorAll('.sc-nav a');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      const id = e.target.id;
      navLinks.forEach(a => {
        a.classList.toggle('active', a.getAttribute('href') === '#' + id);
      });
    }
  });
}, {threshold: 0.3, rootMargin: '-80px 0px -40% 0px'});
sections.forEach(s => observer.observe(s));
</script>

@endsection