<!DOCTYPE html>
<html lang="en" dir="ltr" data-has-toc data-has-sidebar data-theme="dark" class="astro-fvnwdohb">
<!-- Mirrored from starlight.astro.build/getting-started/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 06:44:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Getting Started | Dynamic API</title>


  <link rel="sitemap" href="../sitemap-index.xml" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/svg+xml" />
  <meta name="generator" content="Dynamic API v1.0" />
  <meta property="og:title" content="Dynamic API - Get Started" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="{{ env('APP_URL') }}/getting-started/" />
  <meta property="og:locale" content="en" />
  <meta property="og:description"
    content="Learn how to quickly start building APIs without backend dependencies using Dynamic API." />
  <meta property="og:site_name" content="Dynamic API" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="description"
    content="Learn how Dynamic API enables frontend developers to create and manage APIs with ease." />
  <meta property="og:image" content="{{ env('APP_URL') }}/og.jpg?v=1" />
  <meta property="og:image:alt" content="Easily manage APIs with Dynamic API" />

  <script>
    window.StarlightThemeProvider = (() => {
      const storedTheme = typeof localStorage !== "undefined" && localStorage.getItem("starlight-theme");
      const theme = storedTheme || (window.matchMedia("(prefers-color-scheme: light)").matches ? "light" : "dark");
      document.documentElement.dataset.theme = theme === "light" ? "light" : "dark";
      return {
        updatePickers(theme = storedTheme || "auto") {
          document.querySelectorAll("starlight-theme-select").forEach((picker) => {
            const select = picker.querySelector("select");
            if (select) select.value = theme;
            /** @type {HTMLTemplateElement | null} */
            const tmpl = document.querySelector(`#theme-icons`);
            const newIcon = tmpl && tmpl.content.querySelector("." + theme);
            if (newIcon) {
              const oldIcon = picker.querySelector("svg.label-icon");
              if (oldIcon) {
                oldIcon.replaceChildren(...newIcon.cloneNode(true).childNodes);
              }
            }
          });
        },
      };
    })();
  </script>
  <template id="theme-icons"><svg aria-hidden="true" class="light astro-lq7oo3uf" width="16" height="16"
      viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1em">
      <path
        d="M5 12a1 1 0 0 0-1-1H3a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1Zm.64 5-.71.71a1 1 0 0 0 0 1.41 1 1 0 0 0 1.41 0l.71-.71A1 1 0 0 0 5.64 17ZM12 5a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1Zm5.66 2.34a1 1 0 0 0 .7-.29l.71-.71a1 1 0 1 0-1.41-1.41l-.66.71a1 1 0 0 0 0 1.41 1 1 0 0 0 .66.29Zm-12-.29a1 1 0 0 0 1.41 0 1 1 0 0 0 0-1.41l-.71-.71a1.004 1.004 0 1 0-1.43 1.41l.73.71ZM21 11h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2Zm-2.64 6A1 1 0 0 0 17 18.36l.71.71a1 1 0 0 0 1.41 0 1 1 0 0 0 0-1.41l-.76-.66ZM12 6.5a5.5 5.5 0 1 0 5.5 5.5A5.51 5.51 0 0 0 12 6.5Zm0 9a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Zm0 3.5a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0v-1a1 1 0 0 0-1-1Z" />
    </svg>
    <svg aria-hidden="true" class="dark astro-lq7oo3uf" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
      style="--sl-icon-size: 1em">
      <path
        d="M21.64 13a1 1 0 0 0-1.05-.14 8.049 8.049 0 0 1-3.37.73 8.15 8.15 0 0 1-8.14-8.1 8.59 8.59 0 0 1 .25-2A1 1 0 0 0 8 2.36a10.14 10.14 0 1 0 14 11.69 1 1 0 0 0-.36-1.05Zm-9.5 6.69A8.14 8.14 0 0 1 7.08 5.22v.27a10.15 10.15 0 0 0 10.14 10.14 9.784 9.784 0 0 0 2.1-.22 8.11 8.11 0 0 1-7.18 4.32v-.04Z" />
    </svg>
    <svg aria-hidden="true" class="auto astro-lq7oo3uf" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
      style="--sl-icon-size: 1em">
      <path
        d="M21 14h-1V7a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v7H3a1 1 0 0 0-1 1v2a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-2a1 1 0 0 0-1-1ZM6 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7H6V7Zm14 10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1h16v1Z" />
    </svg>
  </template>
  <link rel="stylesheet" href="css/app.css" />
  <style>
    :root {
      --sl-badge-default-border: var(--sl-color-accent);
      --sl-badge-default-bg: var(--sl-color-accent-low);
      --sl-badge-default-text: #fff;
      --sl-badge-note-border: var(--sl-color-blue);
      --sl-badge-note-bg: var(--sl-color-blue-low);
      --sl-badge-note-text: #fff;
      --sl-badge-danger-border: var(--sl-color-red);
      --sl-badge-danger-bg: var(--sl-color-red-low);
      --sl-badge-danger-text: #fff;
      --sl-badge-success-border: var(--sl-color-green);
      --sl-badge-success-bg: var(--sl-color-green-low);
      --sl-badge-success-text: #fff;
      --sl-badge-caution-border: var(--sl-color-orange);
      --sl-badge-caution-bg: var(--sl-color-orange-low);
      --sl-badge-caution-text: #fff;
      --sl-badge-tip-border: var(--sl-color-purple);
      --sl-badge-tip-bg: var(--sl-color-purple-low);
      --sl-badge-tip-text: #fff;
    }

    [data-theme="light"]:root {
      --sl-badge-default-bg: var(--sl-color-accent-high);
      --sl-badge-note-bg: var(--sl-color-blue-high);
      --sl-badge-danger-bg: var(--sl-color-red-high);
      --sl-badge-success-bg: var(--sl-color-green-high);
      --sl-badge-caution-bg: var(--sl-color-orange-high);
      --sl-badge-tip-bg: var(--sl-color-purple-high);
    }

    .sl-badge:where(.astro-5njhjrwf) {
      display: inline-block;
      border: 1px solid var(--sl-color-border-badge);
      border-radius: 0.25rem;
      font-family: var(--sl-font-system-mono);
      line-height: normal;
      color: var(--sl-color-text-badge);
      background-color: var(--sl-color-bg-badge);
      overflow-wrap: anywhere;
    }

    .sidebar-content .sl-badge:where(.astro-5njhjrwf) {
      line-height: 1;
      font-size: var(--sl-text-xs);
      padding: 0.125rem 0.375rem;
    }

    .sidebar-content a[aria-current="page"]>.sl-badge:where(.astro-5njhjrwf) {
      --sl-color-bg-badge: transparent;
      --sl-color-border-badge: currentColor;
      color: inherit;
    }

    .default:where(.astro-5njhjrwf) {
      --sl-color-bg-badge: var(--sl-badge-default-bg);
      --sl-color-border-badge: var(--sl-badge-default-border);
      --sl-color-text-badge: var(--sl-badge-default-text);
    }

    .note:where(.astro-5njhjrwf) {
      --sl-color-bg-badge: var(--sl-badge-note-bg);
      --sl-color-border-badge: var(--sl-badge-note-border);
      --sl-color-text-badge: var(--sl-badge-note-text);
    }

    .danger:where(.astro-5njhjrwf) {
      --sl-color-bg-badge: var(--sl-badge-danger-bg);
      --sl-color-border-badge: var(--sl-badge-danger-border);
      --sl-color-text-badge: var(--sl-badge-danger-text);
    }

    .success:where(.astro-5njhjrwf) {
      --sl-color-bg-badge: var(--sl-badge-success-bg);
      --sl-color-border-badge: var(--sl-badge-success-border);
      --sl-color-text-badge: var(--sl-badge-success-text);
    }

    .tip:where(.astro-5njhjrwf) {
      --sl-color-bg-badge: var(--sl-badge-tip-bg);
      --sl-color-border-badge: var(--sl-badge-tip-border);
      --sl-color-text-badge: var(--sl-badge-tip-text);
    }

    .caution:where(.astro-5njhjrwf) {
      --sl-color-bg-badge: var(--sl-badge-caution-bg);
      --sl-color-border-badge: var(--sl-badge-caution-border);
      --sl-color-text-badge: var(--sl-badge-caution-text);
    }

    .small:where(.astro-5njhjrwf) {
      font-size: var(--sl-text-xs);
      padding: 0.125rem 0.25rem;
    }

    .medium:where(.astro-5njhjrwf) {
      font-size: var(--sl-text-sm);
      padding: 0.175rem 0.35rem;
    }

    .large:where(.astro-5njhjrwf) {
      font-size: var(--sl-text-base);
      padding: 0.225rem 0.45rem;
    }

    .sl-markdown-content :is(h1, h2, h3, h4, h5, h6) .sl-badge:where(.astro-5njhjrwf) {
      vertical-align: middle;
    }

    .card-grid:where(.astro-b7rtoeqt) {
      display: grid;
      gap: 1rem;
    }

    .card-grid:where(.astro-b7rtoeqt)>* {
      margin-top: 0 !important;
    }

    @media (min-width: 50rem) {
      .card-grid:where(.astro-b7rtoeqt) {
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
      }

      .stagger:where(.astro-b7rtoeqt) {
        --stagger-height: 5rem;
        padding-bottom: var(--stagger-height);
      }

      .stagger:where(.astro-b7rtoeqt)>*:nth-child(2n) {
        transform: translateY(var(--stagger-height));
      }
    }

    .card:where(.astro-gsnu44lu) {
      --sl-card-border: var(--sl-color-purple);
      --sl-card-bg: var(--sl-color-purple-low);
      border: 1px solid var(--sl-color-gray-5);
      background-color: var(--sl-color-black);
      padding: clamp(1rem, calc(0.125rem + 3vw), 2.5rem);
      flex-direction: column;
      gap: clamp(0.5rem, calc(0.125rem + 1vw), 1rem);
    }

    .card:where(.astro-gsnu44lu):nth-child(4n + 1) {
      --sl-card-border: var(--sl-color-orange);
      --sl-card-bg: var(--sl-color-orange-low);
    }

    .card:where(.astro-gsnu44lu):nth-child(4n + 3) {
      --sl-card-border: var(--sl-color-green);
      --sl-card-bg: var(--sl-color-green-low);
    }

    .card:where(.astro-gsnu44lu):nth-child(4n + 4) {
      --sl-card-border: var(--sl-color-red);
      --sl-card-bg: var(--sl-color-red-low);
    }

    .card:where(.astro-gsnu44lu):nth-child(4n + 5) {
      --sl-card-border: var(--sl-color-blue);
      --sl-card-bg: var(--sl-color-blue-low);
    }

    .title:where(.astro-gsnu44lu) {
      font-weight: 600;
      font-size: var(--sl-text-h4);
      color: var(--sl-color-white);
      line-height: var(--sl-line-height-headings);
      gap: 1rem;
      align-items: center;
    }

    .card:where(.astro-gsnu44lu) .icon:where(.astro-gsnu44lu) {
      border: 1px solid var(--sl-card-border);
      background-color: var(--sl-card-bg);
      padding: 0.2em;
      border-radius: 0.25rem;
    }

    .card:where(.astro-gsnu44lu) .body:where(.astro-gsnu44lu) {
      margin: 0;
      font-size: clamp(var(--sl-text-sm), calc(0.5rem + 1vw), var(--sl-text-body));
    }

    svg:where(.astro-lq7oo3uf) {
      color: var(--sl-icon-color);
      font-size: var(--sl-icon-size, 1em);
      width: 1em;
      height: 1em;
    }

    starlight-tabs:where(.astro-jdrv5pdc) {
      display: block;
    }

    .tablist-wrapper:where(.astro-jdrv5pdc) {
      overflow-x: auto;
    }

    :where(.astro-jdrv5pdc)[role="tablist"] {
      display: flex;
      list-style: none;
      border-bottom: 2px solid var(--sl-color-gray-5);
      padding: 0;
    }

    .tab:where(.astro-jdrv5pdc) {
      margin-bottom: -2px;
    }

    .tab:where(.astro-jdrv5pdc)> :where(.astro-jdrv5pdc)[role="tab"] {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0 1.25rem;
      text-decoration: none;
      border-bottom: 2px solid var(--sl-color-gray-5);
      color: var(--sl-color-gray-3);
      outline-offset: var(--sl-outline-offset-inside);
      overflow-wrap: initial;
    }

    .tab:where(.astro-jdrv5pdc) :where(.astro-jdrv5pdc)[role="tab"][aria-selected="true"] {
      color: var(--sl-color-white);
      border-color: var(--sl-color-text-accent);
      font-weight: 600;
    }

    .tablist-wrapper:where(.astro-jdrv5pdc)~[role="tabpanel"] {
      margin-top: 1rem;
    }

    .sl-link-card:where(.astro-oufvgxlc) {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 0.5rem;
      border: 1px solid var(--sl-color-gray-5);
      border-radius: 0.5rem;
      padding: 1rem;
      box-shadow: var(--sl-shadow-sm);
      position: relative;
    }

    a:where(.astro-oufvgxlc) {
      text-decoration: none;
      line-height: var(--sl-line-height-headings);
    }

    a:where(.astro-oufvgxlc):before {
      content: "";
      position: absolute;
      inset: 0;
    }

    .stack:where(.astro-oufvgxlc) {
      flex-direction: column;
      gap: 0.5rem;
    }

    .title:where(.astro-oufvgxlc) {
      color: var(--sl-color-white);
      font-weight: 600;
      font-size: var(--sl-text-lg);
    }

    .description:where(.astro-oufvgxlc) {
      color: var(--sl-color-gray-3);
      line-height: 1.5;
    }

    .icon:where(.astro-oufvgxlc) {
      color: var(--sl-color-gray-3);
    }

    .sl-link-card:where(.astro-oufvgxlc):hover {
      background: var(--sl-color-gray-7, var(--sl-color-gray-6));
      border-color: var(--sl-color-gray-2);
    }

    .sl-link-card:where(.astro-oufvgxlc):hover .icon:where(.astro-oufvgxlc) {
      color: var(--sl-color-white);
    }

    .sl-steps {
      --bullet-size: calc(var(--sl-line-height) * 1rem);
      --bullet-margin: 0.375rem;
      list-style: none;
      counter-reset: steps-counter var(--sl-steps-start, 0);
      padding-inline-start: 0;
    }

    .sl-steps>li {
      counter-increment: steps-counter;
      position: relative;
      padding-inline-start: calc(var(--bullet-size) + 1rem);
      padding-bottom: 1px;
      min-height: calc(var(--bullet-size) + var(--bullet-margin));
    }

    .sl-steps>li+li {
      margin-top: 0;
    }

    .sl-steps>li:before {
      content: counter(steps-counter);
      position: absolute;
      top: 0;
      inset-inline-start: 0;
      width: var(--bullet-size);
      height: var(--bullet-size);
      line-height: var(--bullet-size);
      font-size: var(--sl-text-xs);
      font-weight: 600;
      text-align: center;
      color: var(--sl-color-white);
      background-color: var(--sl-color-gray-6);
      border-radius: 99rem;
      box-shadow: inset 0 0 0 1px var(--sl-color-gray-5);
    }

    .sl-steps>li:after {
      --guide-width: 1px;
      content: "";
      position: absolute;
      top: calc(var(--bullet-size) + var(--bullet-margin));
      bottom: var(--bullet-margin);
      inset-inline-start: calc((var(--bullet-size) - var(--guide-width)) / 2);
      width: var(--guide-width);
      background-color: var(--sl-color-hairline-light);
    }

    .sl-steps>li> :first-child {
      --lh: calc(1em * var(--sl-line-height));
      --shift-y: calc(0.5 * (var(--bullet-size) - var(--lh)));
      transform: translateY(var(--shift-y));
      margin-bottom: var(--shift-y);
    }

    .sl-steps>li> :first-child:where(h1, h2, h3, h4, h5, h6) {
      --lh: calc(1em * var(--sl-line-height-headings));
    }

    @supports (--prop: 1lh) {
      .sl-steps>li> :first-child {
        --lh: 1lh;
      }
    }

    ul:where(.astro-hru4x5a3) {
      --sl-sidebar-item-padding-inline: 0.5rem;
      list-style: none;
      padding: 0;
    }

    li:where(.astro-hru4x5a3) {
      overflow-wrap: anywhere;
    }

    ul:where(.astro-hru4x5a3) ul:where(.astro-hru4x5a3) li:where(.astro-hru4x5a3) {
      margin-inline-start: var(--sl-sidebar-item-padding-inline);
      border-inline-start: 1px solid var(--sl-color-hairline-light);
      padding-inline-start: var(--sl-sidebar-item-padding-inline);
    }

    .large:where(.astro-hru4x5a3) {
      font-size: var(--sl-text-lg);
      font-weight: 600;
      color: var(--sl-color-white);
    }

    .top-level:where(.astro-hru4x5a3)>li:where(.astro-hru4x5a3)+li:where(.astro-hru4x5a3) {
      margin-top: 0.75rem;
    }

    summary:where(.astro-hru4x5a3) {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.2em var(--sl-sidebar-item-padding-inline);
      line-height: 1.4;
      cursor: pointer;
      user-select: none;
    }

    summary:where(.astro-hru4x5a3)::marker,
    summary:where(.astro-hru4x5a3)::-webkit-details-marker {
      display: none;
    }

    .caret:where(.astro-hru4x5a3) {
      transition: transform 0.2s ease-in-out;
      flex-shrink: 0;
    }

    [dir="rtl"] .caret:where(.astro-hru4x5a3) {
      transform: rotate(180deg);
    }

    :where(.astro-hru4x5a3)[open]>summary:where(.astro-hru4x5a3) .caret:where(.astro-hru4x5a3) {
      transform: rotate(90deg);
    }

    a:where(.astro-hru4x5a3) {
      display: block;
      border-radius: 0.25rem;
      text-decoration: none;
      color: var(--sl-color-gray-2);
      padding: 0.3em var(--sl-sidebar-item-padding-inline);
      line-height: 1.4;
    }

    a:where(.astro-hru4x5a3):hover,
    a:where(.astro-hru4x5a3):focus {
      color: var(--sl-color-white);
    }

    :where(.astro-hru4x5a3)[aria-current="page"],
    :where(.astro-hru4x5a3)[aria-current="page"]:hover,
    :where(.astro-hru4x5a3)[aria-current="page"]:focus {
      font-weight: 600;
      color: var(--sl-color-text-invert);
      background-color: var(--sl-color-text-accent);
    }

    a:where(.astro-hru4x5a3)> :where(.astro-hru4x5a3):not(:last-child),
    .group-label:where(.astro-hru4x5a3)> :where(.astro-hru4x5a3):not(:last-child) {
      margin-inline-end: 0.25em;
    }

    @media (min-width: 50rem) {
      .top-level:where(.astro-hru4x5a3)>li:where(.astro-hru4x5a3)+li:where(.astro-hru4x5a3) {
        margin-top: 0.5rem;
      }

      .large:where(.astro-hru4x5a3) {
        font-size: var(--sl-text-base);
      }

      a:where(.astro-hru4x5a3) {
        font-size: var(--sl-text-sm);
      }
    }

    .sl-link-button:where(.astro-it3xjlx7) {
      align-items: center;
      border: 1px solid transparent;
      border-radius: 999rem;
      display: inline-flex;
      font-size: var(--sl-text-sm);
      gap: 0.5em;
      line-height: 1.1875;
      outline-offset: 0.25rem;
      padding: 0.4375rem 1.125rem;
      text-decoration: none;
    }

    .sl-link-button:where(.astro-it3xjlx7).primary {
      background: var(--sl-color-text-accent);
      border-color: var(--sl-color-text-accent);
      color: var(--sl-color-black);
    }

    .sl-link-button:where(.astro-it3xjlx7).primary:hover {
      color: var(--sl-color-black);
    }

    .sl-link-button:where(.astro-it3xjlx7).secondary {
      border-color: inherit;
      color: var(--sl-color-white);
    }

    .sl-link-button:where(.astro-it3xjlx7).minimal {
      color: var(--sl-color-white);
      padding-inline: 0;
    }

    .sl-link-button:where(.astro-it3xjlx7) svg {
      flex-shrink: 0;
    }

    @media (min-width: 50rem) {
      .sl-link-button:where(.astro-it3xjlx7) {
        font-size: var(--sl-text-base);
        padding: 0.9375rem 1.25rem;
      }
    }

    .sl-markdown-content .sl-link-button:where(.astro-it3xjlx7) {
      margin-inline-end: 1rem;
    }

    .sl-markdown-content .sl-link-button:where(.astro-it3xjlx7):not(:where(p *)) {
      margin-block: 1rem;
    }

    starlight-file-tree:where(.astro-ijheulpz) {
      --x-space: 1.5rem;
      --y-space: 0.125rem;
      --y-pad: 0;
      display: block;
      border: 1px solid var(--sl-color-gray-5);
      padding: 1rem;
      background-color: var(--sl-color-gray-6);
      font-size: var(--sl-text-xs);
      font-family: var(--__sl-font-mono);
      overflow-x: auto;
    }

    starlight-file-tree:where(.astro-ijheulpz) .directory>details {
      border: 0;
      padding: 0;
      padding-inline-start: var(--x-space);
      background: transparent;
    }

    starlight-file-tree:where(.astro-ijheulpz) .directory>details>summary {
      margin-inline-start: calc(-1 * var(--x-space));
      border: 0;
      padding: var(--y-pad) 0.625rem;
      font-weight: 400;
      color: var(--sl-color-white);
      max-width: 100%;
    }

    starlight-file-tree:where(.astro-ijheulpz) .directory>details>summary::marker,
    starlight-file-tree:where(.astro-ijheulpz) .directory>details>summary::-webkit-details-marker {
      color: var(--sl-color-gray-3);
    }

    starlight-file-tree:where(.astro-ijheulpz) .directory>details>summary:hover,
    starlight-file-tree:where(.astro-ijheulpz) .directory>details>summary:hover .tree-icon {
      cursor: pointer;
      color: var(--sl-color-text-accent);
      fill: var(--sl-color-text-accent);
    }

    starlight-file-tree:where(.astro-ijheulpz) .directory>details>summary:hover~ul {
      border-color: var(--sl-color-gray-4);
    }

    starlight-file-tree:where(.astro-ijheulpz) .directory>details>summary:hover .highlight .tree-icon {
      fill: var(--sl-color-text-invert);
    }

    starlight-file-tree:where(.astro-ijheulpz) ul {
      margin-inline-start: 0.5rem;
      border-inline-start: 1px solid var(--sl-color-gray-5);
      padding: 0;
      padding-inline-start: 0.125rem;
      list-style: none;
    }

    starlight-file-tree:where(.astro-ijheulpz)>ul {
      margin: 0;
      border: 0;
      padding: 0;
    }

    starlight-file-tree:where(.astro-ijheulpz) li {
      margin: var(--y-space) 0;
      padding: var(--y-pad) 0;
    }

    starlight-file-tree:where(.astro-ijheulpz) .file {
      margin-inline-start: calc(var(--x-space) - 0.125rem);
      color: var(--sl-color-white);
    }

    starlight-file-tree:where(.astro-ijheulpz) .tree-entry {
      display: inline-flex;
      align-items: flex-start;
      flex-wrap: wrap;
      max-width: calc(100% - 1rem);
    }

    @media (min-width: 30em) {
      starlight-file-tree:where(.astro-ijheulpz) .tree-entry {
        flex-wrap: nowrap;
      }
    }

    starlight-file-tree:where(.astro-ijheulpz) .tree-entry> :first-child {
      flex-shrink: 0;
    }

    starlight-file-tree:where(.astro-ijheulpz) .empty {
      color: var(--sl-color-gray-3);
      padding-inline-start: 0.375rem;
    }

    starlight-file-tree:where(.astro-ijheulpz) .comment {
      color: var(--sl-color-gray-3);
      padding-inline-start: 1.625rem;
      max-width: 24rem;
      min-width: 12rem;
    }

    starlight-file-tree:where(.astro-ijheulpz) .highlight {
      display: inline-block;
      border-radius: 0.25rem;
      padding-inline-end: 0.5rem;
      color: var(--sl-color-text-invert);
      background-color: var(--sl-color-text-accent);
    }

    starlight-file-tree:where(.astro-ijheulpz) svg {
      display: inline;
      fill: var(--sl-color-gray-3);
      vertical-align: middle;
      margin-inline: 0.25rem 0.375rem;
      width: 0.875rem;
      height: 0.875rem;
    }

    starlight-file-tree:where(.astro-ijheulpz) .highlight svg.tree-icon {
      fill: var(--sl-color-text-invert);
    }
  </style>
  <script type="module" src="js/app.js"></script>
  <script type="module" src="js/page.js"></script>
  <script src="js/Tabs.astro_astro_type_script_index_0_lang.DafKkU7W.js" type="module"></script>
</head>

<body class="astro-fvnwdohb">
  <a href="#_top" class="astro-2jzb3vpe">Skip to content</a>
  <div class="page sl-flex astro-25lioaeu">
    <header class="header astro-25lioaeu">
      <div class="header sl-flex astro-xj7phax6">
        <div class="title-wrapper sl-flex astro-xj7phax6">
          <a href="{{ route('getting-started') }}" class="site-title sl-flex astro-3gjrqrfo">
            <img class="light:sl-hidden" alt="" src="image/Dynamic_API_Logo.png" width="200" />
            <img class="dark:sl-hidden" alt="" src="image/Dynamic_API_Logo.png" width="200" />
            <!-- <img class="dark:sl-hidden" alt="" src="logo.png" width="161"/> -->
            <span class="sr-only astro-3gjrqrfo"> Dynamic API </span>
          </a>
        </div>
      </div>
    </header>
    <nav class="sidebar astro-25lioaeu" aria-label="Main">
      <starlight-menu-button class="astro-m5ypedgg">
        <button aria-expanded="false" aria-label="Menu" aria-controls="starlight__sidebar"
          class="sl-flex md:sl-hidden astro-m5ypedgg">
          <svg aria-hidden="true" class="astro-m5ypedgg astro-lq7oo3uf" width="16" height="16" viewBox="0 0 24 24"
            fill="currentColor" style="--sl-icon-size: 1em">
            <path
              d="M3 8h18a1 1 0 1 0 0-2H3a1 1 0 0 0 0 2Zm18 8H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2Zm0-5H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2Z" />
          </svg>
        </button>
      </starlight-menu-button>
      <div id="starlight__sidebar" class="sidebar-pane astro-25lioaeu">
        <div class="sidebar-content sl-flex astro-25lioaeu">
          <sl-sidebar-state-persist data-hash="1t9did5" class="astro-34vqokvu">
            <script>
              (() => {
                try {
                  if (!matchMedia("(min-width: 50em)").matches) return;
                  /** @type {HTMLElement | null} */
                  const target = document.querySelector("sl-sidebar-state-persist");
                  const state = JSON.parse(sessionStorage.getItem("sl-sidebar-state") || "0");
                  if (!target || !state || target.dataset.hash !== state.hash) return;
                  window._starlightScrollRestore = state.scroll;
                  customElements.define(
                    "sl-sidebar-restore",
                    class SidebarRestore extends HTMLElement {
                      connectedCallback() {
                        try {
                          const idx = parseInt(this.dataset.index || "");
                          const details = this.closest("details");
                          if (details && typeof state.open[idx] === "boolean") details.open = state.open[idx];
                        } catch { }
                      }
                    }
                  );
                } catch { }
              })();
            </script>
            <ul class="top-level astro-hru4x5a3">
              <li class="astro-hru4x5a3">
                <details open class="astro-hru4x5a3">
                  <sl-sidebar-restore data-index="0"></sl-sidebar-restore>
                  <summary class="astro-hru4x5a3">
                    <div class="group-label astro-hru4x5a3"><span class="large astro-hru4x5a3">Start Here</span></div>
                    <svg aria-hidden="true" class="caret astro-hru4x5a3 astro-lq7oo3uf" width="16" height="16"
                      viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1.25rem">
                      <path
                        d="m14.83 11.29-4.24-4.24a1 1 0 1 0-1.42 1.41L12.71 12l-3.54 3.54a1 1 0 0 0 0 1.41 1 1 0 0 0 .71.29 1 1 0 0 0 .71-.29l4.24-4.24a1.002 1.002 0 0 0 0-1.42Z" />
                    </svg>
                  </summary>
                  <ul class="astro-hru4x5a3">
                    <li class="astro-hru4x5a3">
                      <a href="{{ route('getting-started') }}" aria-current="page" class="astro-hru4x5a3"> <span
                          class="astro-hru4x5a3">Getting Started</span> </a>
                    </li>
                    <li class="astro-hru4x5a3">
                      <a href="{{ route('quick-start') }}" class="astro-hru4x5a3"> <span class="astro-hru4x5a3">Quick Start</span> </a>
                    </li>

                  </ul>
                </details>
              </li>
            </ul>
            <script>
              (() => {
                const scroller = document.getElementById("starlight__sidebar");
                if (!window._starlightScrollRestore || !scroller) return;
                scroller.scrollTop = window._starlightScrollRestore;
                delete window._starlightScrollRestore;
              })();
            </script>
          </sl-sidebar-state-persist>

        </div>
      </div>
    </nav>
    <div class="main-frame astro-25lioaeu">
      <div class="lg:sl-flex astro-yl67c4br">
        
        <aside class="right-sidebar-container astro-yl67c4br">
          <div class="right-sidebar astro-yl67c4br">
            <div class="lg:sl-hidden astro-3ue6hxa3">
              <mobile-starlight-toc data-min-h="2" data-max-h="3" class="astro-2p65tdbr">
                <nav aria-labelledby="starlight__on-this-page--mobile" class="astro-2p65tdbr">
                  <details id="starlight__mobile-toc" class="astro-2p65tdbr">
                    <summary id="starlight__on-this-page--mobile" class="sl-flex astro-2p65tdbr">
                      <div class="toggle sl-flex astro-2p65tdbr">
                        On this page<svg aria-hidden="true" class="caret astro-2p65tdbr astro-lq7oo3uf" width="16"
                          height="16" viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1rem">
                          <path
                            d="m14.83 11.29-4.24-4.24a1 1 0 1 0-1.42 1.41L12.71 12l-3.54 3.54a1 1 0 0 0 0 1.41 1 1 0 0 0 .71.29 1 1 0 0 0 .71-.29l4.24-4.24a1.002 1.002 0 0 0 0-1.42Z" />
                        </svg>
                      </div>
                      <span class="display-current astro-2p65tdbr"></span>
                    </summary>
                    <div class="dropdown astro-2p65tdbr">
                      <ul class="isMobile astro-zu3ccwit" style="--depth: 0">
                        <li class="astro-zu3ccwit" style="--depth: 0">
                          <a href="#_top" class="astro-zu3ccwit" style="--depth: 0">
                            <span class="astro-zu3ccwit" style="--depth: 0">Overview</span>
                          </a>
                        </li>
                        <li class="astro-zu3ccwit" style="--depth: 0">
                          <a href="#problem" class="astro-zu3ccwit" style="--depth: 0">
                            <span class="astro-zu3ccwit" style="--depth: 0">Problem</span>
                          </a>
                        </li>
                        <li class="astro-zu3ccwit" style="--depth: 0">
                          <a href="#solution" class="astro-zu3ccwit" style="--depth: 0">
                            <span class="astro-zu3ccwit" style="--depth: 0">Solution</span>
                          </a>
                        </li>
                        <li class="astro-zu3ccwit" style="--depth: 0"></li>
                          <a href="#why-dynamic-api" class="astro-zu3ccwit" style="--depth: 0">
                            <span class="astro-zu3ccwit" style="--depth: 0">Why Dynamic API</span>
                          </a>
                        </li>
                        <li class="astro-zu3ccwit" style="--depth: 0">
                          <a href="#features-usage" class="astro-zu3ccwit" style="--depth: 0">
                            <span class="astro-zu3ccwit" style="--depth: 0">Features & Usage</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </details>
                </nav>
              </mobile-starlight-toc>
            </div>
            <div class="right-sidebar-panel sl-hidden lg:sl-block astro-3ue6hxa3">
              <div class="sl-container astro-3ue6hxa3">
                <starlight-toc data-min-h="2" data-max-h="3">
                  <nav aria-labelledby="starlight__on-this-page">
                    <h2 id="starlight__on-this-page">On this page</h2>
                    <ul class="astro-zu3ccwit" style="--depth: 0">
                      <li class="astro-zu3ccwit" style="--depth: 0">
                        <a href="#_top" class="astro-zu3ccwit" style="--depth: 0">
                          <span class="astro-zu3ccwit" style="--depth: 0">Overview</span>
                        </a>
                      </li>
                      <li class="astro-zu3ccwit" style="--depth: 0">
                        <a href="#problem" class="astro-zu3ccwit" style="--depth: 0">
                          <span class="astro-zu3ccwit" style="--depth: 0">Problem</span>
                        </a>
                      </li>
                      <li class="astro-zu3ccwit" style="--depth: 0">
                        <a href="#solution" class="astro-zu3ccwit" style="--depth: 0">
                          <span class="astro-zu3ccwit" style="--depth: 0">Solution</span>
                        </a>
                      </li>
                      <li class="astro-zu3ccwit" style="--depth: 0"></li>
                        <a href="#why-dynamic-api" class="astro-zu3ccwit" style="--depth: 0">
                          <span class="astro-zu3ccwit" style="--depth: 0">Why Dynamic API</span>
                        </a>
                      </li>
                      
                      <li class="astro-zu3ccwit" style="--depth: 0">
                        <a href="#features-usage" class="astro-zu3ccwit" style="--depth: 0">
                          <span class="astro-zu3ccwit" style="--depth: 0">Features & Usage</span>
                        </a>
                      </li>
                     
                    </ul>
                  </nav>
                </starlight-toc>
              </div>
            </div>
          </div>
        </aside>
        <div class="main-pane astro-yl67c4br">
          <main data-pagefind-body lang="en" dir="ltr" class="astro-fvnwdohb">
            <div class="content-panel astro-qhy5epp2">
              <div class="sl-container astro-qhy5epp2">
                <h1 id="_top" class="astro-eon5qwnk">Getting Started</h1>
              </div>
            </div>
            <div class="content-panel astro-qhy5epp2">
              <div class="sl-container astro-qhy5epp2">
                <div class="sl-markdown-content">
                  <p>
                    Dynamic API offers frontend developers the freedom to manage APIs with ease, enabling them to
                    create, update, and retrieve data dynamically. The flexible API structure allows seamless
                    integration with popular platforms that supports HTTP requests, including Android, iOS, Flutter,
                    React Native, Angular, React and more. By reducing the dependency on backend teams, Dynamic API
                    fosters quick development cycles and ensures that frontend developers can adjust the API logic as
                    per their evolving requirements. This makes it a valuable tool for modern development workflows.
                  </p>
                  <h3 id="problem">Problem</h3>
                  <p>
                    Frontend developers often face delays in development cycles due to dependencies on backend teams for API management. This creates bottlenecks, where frontend teams must wait for backend teams to create, update, or modify APIs. Additionally, managing infrastructure changes or API deployments often requires coordination with DevOps teams, leading to further delays. These dependencies on both backend and DevOps teams can slow down the process of making necessary changes, limiting flexibility and agility in development.
                  </p>
                  <h3 id="solution">Solution</h3>
                  <p>
                    Dynamic API provides a flexible solution by empowering frontend developers to manage APIs independently, reducing the dependency on both backend and DevOps teams. Frontend developers can dynamically create, update, retrieve, and delete data through structured HTTP requests, without waiting for backend or DevOps support. This decouples frontend teams from the need for backend API changes or infrastructure management, enabling quicker adjustments to API logic. As a result, it streamlines the development process by allowing developers to work autonomously, ensuring faster iterations and a more efficient workflow.
                  </p>
                  <h3 id="why-dynamic-api">Why Dynamic API</h3>
                  <ul>
                    <li>
                      <strong>Flexibility: </strong> Frontend developers can adjust API logic without waiting for backend or DevOps teams, accelerating the development process.
                    </li>
                    <li>
                      <strong>Platform Compatibility: </strong> Supports integration with popular platforms such as Android, iOS, Flutter, React Native, Angular, and React, making it widely usable.
                    </li>
                    <li>
                      <strong>Efficient Development: </strong> Reduces dependencies, enabling frontend developers to manage APIs independently, fostering quicker development cycles.
                    </li>
                    <li>
                      <strong>Comprehensive CRUD Operations: </strong> Offers complete control over data with POST, PUT, PATCH, GET, and DELETE requests for easy management of resources.
                    </li>
                    <li>
                      <strong>Reduced DevOps Dependency: </strong> Minimizes the need for DevOps intervention in API infrastructure management, allowing for smoother and faster deployments.
                    </li>
                    <li>
                      <strong>Scalability: </strong> Adapts to evolving project requirements, making it an ideal tool for fast-paced and modern development environments.
                    </li>
                  </ul>
                  <h3 id="features-usage">Features & Usage</h3>
                  <ul>
                    <li>
                      <strong>Add Data (POST): </strong> Easily add new project data by sending structured JSON
                      requests.

                    </li>
                    <li>
                      <strong>Update Data (PUT):</strong> Replace an entire object with new values.
                    </li>
                    <li>
                      <strong>Patch Data (PATCH):</strong> Modify specific fields in an object without replacing the
                      entire object.
                    </li>
                    <li>
                      <strong>Get Data (GET):</strong> Fetch a list of data or a specific item by its ID.
                    </li>
                    <li>
                      <strong>Delete Data (DELETE):</strong> Remove a specific object by ID.
                    </li>
                  </ul> 
                  <br>
                </div>
                <footer class="sl-flex astro-flxlqajp">

                  <div class="pagination-links astro-tvzk3bq5" dir="ltr">
                    <a href="{{ route('quick-start') }}" rel="next" class="astro-tvzk3bq5">
                      <svg aria-hidden="true" class="astro-tvzk3bq5 astro-lq7oo3uf" width="16" height="16"
                        viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1.5rem">
                        <path
                          d="M17.92 11.62a1.001 1.001 0 0 0-.21-.33l-5-5a1.003 1.003 0 1 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1.002 1.002 0 0 0 .325 1.639 1 1 0 0 0 1.095-.219l5-5a1 1 0 0 0 .21-.33 1 1 0 0 0 0-.76Z" />
                      </svg>
                      <span class="astro-tvzk3bq5">
                        Next <br class="astro-tvzk3bq5" />
                        <span class="link-title astro-tvzk3bq5">Quick Start</span>
                      </span>
                    </a>
                  </div>
                </footer>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- Mirrored from starlight.astro.build/getting-started/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 06:44:04 GMT -->

</html>