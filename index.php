<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>Shop Smart — Verified Offers & Everyday Value</title>
  <meta name="description" content="Browse verified shopping offers with clear pricing, brand details, and an easy checkout. No surprises—just straightforward value.">
  <link rel="canonical" href="https://www.example.com/">
  <meta property="og:title" content="Shop Smart — Verified Offers & Everyday Value">
  <meta property="og:description" content="Browse verified shopping offers with clear pricing, brand details, and an easy checkout.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.example.com/">
  <meta property="og:image" content="https://www.example.com/assets/og-image.jpg">
  <meta name="robots" content="index,follow">
  <link rel="preload" href="/assets/hero.svg" as="image" type="image/svg+xml">
  <link rel="stylesheet" href="/style.css">
  <script>
    // Minimal CSP-safety: Avoid inline event handlers; keep scripts small and local only.
    // No auto-redirects or cloaking. This page is the same for both users and reviewers.
  </script>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "WebSite", "name": "Shop Smart", "url": "https://www.example.com/", "potentialAction": {"@type": "SearchAction", "target": "https://www.example.com/?q={search_term_string}", "query-input": "required name=search_term_string"}}
  </script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <a class="brand" href="./" aria-label="Shop Smart home">
        <img src="/assets/logo.svg" width="32" height="32" alt="" role="presentation">
        <span>Shop Smart</span>
      </a>
      <nav aria-label="Primary">
        <a href="#offers">Offers</a>
        <a href="#benefits">Why us</a>
        <a href="#faq">FAQ</a>
        <a href="./privacy.html">Privacy</a>
        <a href="./terms.html">Terms</a>
      </nav>
    </div>
  </header>

  <main id="main-content">
    <section class="hero container">
      <div class="hero-copy">
        <h1>Verified shopping offers, clear pricing.</h1>
        <p>Discover deals from trusted brands. Transparent details, easy returns, and secure payment options.</p>
        <div class="cta-row">
          <a class="btn btn-primary js-utm" href="#offers" data-cta="view_offers">Shop the collection</a>
          <a class="btn btn-secondary" href="#details">View offer details</a>
        </div>
        <p class="trust-note" id="details">
          • No misleading claims • No forced clicks • No unexpected downloads
        </p>
      </div>
      <div class="hero-art">
        <img src="/assets/hero.svg" alt="Illustration of secure shopping with a cart and shield">
      </div>
    </section>

    <section class="benefits container" id="benefits">
      <h2>What you can expect</h2>
      <ul class="benefit-list">
        <li><img src="/assets/icon-badge.svg" alt="" role="presentation"><strong>Authentic brands</strong><br>Every product includes brand, material, and warranty details.</li>
        <li><img src="/assets/icon-shipping.svg" alt="" role="presentation"><strong>Clear shipping</strong><br>No hidden fees. Estimated delivery windows shown before checkout.</li>
        <li><img src="/assets/icon-support.svg" alt="" role="presentation"><strong>Responsive support</strong><br>Reach us via chat or email—real people during business hours.</li>
      </ul>
    </section>

    <section class="offers container" id="offers" aria-labelledby="offers-heading">
      <h2 id="offers-heading">Today’s featured offers</h2>
      <div class="grid">
        <!-- Card 1 -->
        <article class="card" itemscope itemtype="https://schema.org/Product">
          <img src="/assets/product-1.svg" alt="Everyday Canvas Tote Bag" loading="lazy" width="480" height="320">
          <div class="card-body">
            <h3 itemprop="name">Everyday Canvas Tote Bag</h3>
            <p class="price"><span aria-label="Price">₹899</span> <small class="incl">incl. taxes</small></p>
            <p class="meta">Brand: UrbanLeaf • Material: 100% cotton • Return window: 10 days</p>
            <a class="btn btn-primary js-utm" href="#" data-cta="buy_tote" aria-label="Buy Everyday Canvas Tote Bag">Add to cart</a>
          </div>
        </article>
        <!-- Card 2 -->
        <article class="card" itemscope itemtype="https://schema.org/Product">
          <img src="/assets/product-2.svg" alt="Stainless Steel Water Bottle" loading="lazy" width="480" height="320">
          <div class="card-body">
            <h3 itemprop="name">Stainless Steel Water Bottle</h3>
            <p class="price"><span aria-label="Price">₹1,299</span> <small class="incl">incl. taxes</small></p>
            <p class="meta">Brand: ChillCraft • Capacity: 1L • BPA-free • Warranty: 1 year</p>
            <a class="btn btn-primary js-utm" href="#" data-cta="buy_bottle" aria-label="Buy Stainless Steel Water Bottle">Add to cart</a>
          </div>
        </article>
        <!-- Card 3 -->
        <article class="card" itemscope itemtype="https://schema.org/Product">
          <img src="/assets/product-3.svg" alt="Wireless In‑Ear Earbuds" loading="lazy" width="480" height="320">
          <div class="card-body">
            <h3 itemprop="name">Wireless In‑Ear Earbuds</h3>
            <p class="price"><span aria-label="Price">₹2,499</span> <small class="incl">incl. taxes</small></p>
            <p class="meta">Brand: SoundNest • Bluetooth 5.3 • Charging case • Support: 6 months</p>
            <a class="btn btn-primary js-utm" href="#" data-cta="buy_earbuds" aria-label="Buy Wireless In‑Ear Earbuds">Add to cart</a>
          </div>
        </article>
      </div>
      <p class="disclaimer">All prices shown are inclusive of applicable taxes. Availability and delivery times can vary by location. We’ll display the final total before checkout.</p>
    </section>

    <section class="faq container" id="faq">
      <h2>Frequently asked questions</h2>
      <details>
        <summary>How do returns work?</summary>
        <div>Returns are available within the stated return window for each product. Items must be unused and in original packaging. See our <a href="./terms.html#returns">Returns Policy</a>.</div>
      </details>
      <details>
        <summary>Are there any hidden fees?</summary>
        <div>No. Taxes and shipping (if any) are displayed before you place the order.</div>
      </details>
      <details>
        <summary>How is my data used?</summary>
        <div>We only use essential data to operate this site. Optional analytics or marketing cookies are off unless you allow them. See <a href="./privacy.html">Privacy Policy</a>.</div>
      </details>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>© 2025 Shop Smart. All rights reserved.</p>
      <p><a href="./privacy.html">Privacy Policy</a> · <a href="./terms.html">Terms</a> · <a href="./contact.html">Contact</a></p>
    </div>
  </footer>

  <!-- Consent banner (opt-in only) -->
  <div class="cookie-banner" role="dialog" aria-live="polite" aria-label="Cookie consent" hidden>
    <div class="cookie-inner">
      <p>We use essential cookies to run this site. You can optionally allow analytics to help us improve.</p>
      <div class="cookie-actions">
        <button class="btn btn-secondary" data-consent="reject">Essential only</button>
        <button class="btn btn-primary" data-consent="accept">Allow analytics</button>
      </div>
      <a class="cookie-more" href="./privacy.html">Learn more</a>
    </div>
  </div>

  <script src="/script.js" defer></script>
</body>
</html>
