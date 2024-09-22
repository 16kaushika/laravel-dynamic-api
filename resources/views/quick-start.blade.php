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
<meta property="og:title" content="Dynamic API - Empowering Frontend Developers" />
<meta property="og:type" content="documentation" />
<meta property="og:url" content="https://dynamic-api.kaushikavaghela.com/getting-started/" />
<meta property="og:locale" content="en" />
<meta property="og:description"
  content="Learn how to build, update, and manage APIs without backend or DevOps dependencies using Dynamic API." />
<meta property="og:site_name" content="Dynamic API" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="description"
  content="Dynamic API enables frontend developers to create and manage APIs independently, reducing dependency on backend teams." />
<meta property="og:image" content="https://dynamic-api.kaushikavaghela.com/og.jpg?v=1" />
<meta property="og:image:alt" content="Create APIs effortlessly with Dynamic API" />

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
  <div class="page sl-flex astro-25lioaeu">
    <header class="header astro-25lioaeu">
      <div class="header sl-flex astro-xj7phax6">
        <div class="title-wrapper sl-flex astro-xj7phax6">
          <a href="{{ route('getting-started') }}" class="site-title sl-flex astro-3gjrqrfo">
            <!-- <img class="dark:sl-hidden" alt="" src="favicon.png" width="50"/> -->
            <img class="light:sl-hidden" alt="" src="image/Dynamic_API_Logo.png" width="200" />
            <img class="dark:sl-hidden" alt="" src="image/Dynamic_API_Logo.png" width="200" />
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
                      <a href="{{ route('getting-started') }}" class="astro-hru4x5a3"> <span class="astro-hru4x5a3">Getting Started</span>
                      </a>
                    </li>
                    <li class="astro-hru4x5a3">
                      <a href="index2.html" aria-current="page" class="astro-hru4x5a3"> <span
                          class="astro-hru4x5a3">Quick Start</span> </a>
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
          <div class="md:sl-hidden">
            <div class="mobile-preferences sl-flex astro-7qzeucr6">
              <div class="sl-flex social-icons astro-7qzeucr6">
                <a href="https://github.com/withastro/starlight" rel="me" class="sl-flex astro-tfgvj2mv"><span
                    class="sr-only astro-tfgvj2mv">GitHub</span><svg aria-hidden="true"
                    class="astro-tfgvj2mv astro-lq7oo3uf" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                    style="--sl-icon-size: 1em">
                    <path
                      d="M12 .3a12 12 0 0 0-3.8 23.38c.6.12.83-.26.83-.57L9 21.07c-3.34.72-4.04-1.61-4.04-1.61-.55-1.39-1.34-1.76-1.34-1.76-1.08-.74.09-.73.09-.73 1.2.09 1.83 1.24 1.83 1.24 1.08 1.83 2.81 1.3 3.5 1 .1-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1-.32 3.3 1.23a11.5 11.5 0 0 1 6 0c2.28-1.55 3.29-1.23 3.29-1.23.64 1.66.24 2.88.12 3.18a4.65 4.65 0 0 1 1.23 3.22c0 4.61-2.8 5.63-5.48 5.92.42.36.81 1.1.81 2.22l-.01 3.29c0 .31.2.69.82.57A12 12 0 0 0 12 .3Z" />
                  </svg> </a><a href="https://astro.build/chat" rel="me" class="sl-flex astro-tfgvj2mv"><span
                    class="sr-only astro-tfgvj2mv">Discord</span><svg aria-hidden="true"
                    class="astro-tfgvj2mv astro-lq7oo3uf" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                    style="--sl-icon-size: 1em">
                    <path
                      d="M20.32 4.37a19.8 19.8 0 0 0-4.93-1.51 13.78 13.78 0 0 0-.64 1.28 18.27 18.27 0 0 0-5.5 0 12.64 12.64 0 0 0-.64-1.28h-.05A19.74 19.74 0 0 0 3.64 4.4 20.26 20.26 0 0 0 .11 18.09l.02.02a19.9 19.9 0 0 0 6.04 3.03l.04-.02a14.24 14.24 0 0 0 1.23-2.03.08.08 0 0 0-.05-.07 13.1 13.1 0 0 1-1.9-.92.08.08 0 0 1 .02-.1 10.2 10.2 0 0 0 .41-.31h.04a14.2 14.2 0 0 0 12.1 0l.04.01a9.63 9.63 0 0 0 .4.32.08.08 0 0 1-.03.1 12.29 12.29 0 0 1-1.9.91.08.08 0 0 0-.02.1 15.97 15.97 0 0 0 1.27 2.01h.04a19.84 19.84 0 0 0 6.03-3.05v-.03a20.12 20.12 0 0 0-3.57-13.69ZM8.02 15.33c-1.18 0-2.16-1.08-2.16-2.42 0-1.33.96-2.42 2.16-2.42 1.21 0 2.18 1.1 2.16 2.42 0 1.34-.96 2.42-2.16 2.42Zm7.97 0c-1.18 0-2.15-1.08-2.15-2.42 0-1.33.95-2.42 2.15-2.42 1.22 0 2.18 1.1 2.16 2.42 0 1.34-.94 2.42-2.16 2.42Z" />
                  </svg>
                </a>
              </div>
              <starlight-theme-select>
                <label style="--sl-select-width: 6.25em" class="astro-fbnjesqx">
                  <span class="sr-only astro-fbnjesqx">Select theme</span>
                  <svg aria-hidden="true" class="icon label-icon astro-fbnjesqx astro-lq7oo3uf" width="16" height="16"
                    viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1em">
                    <path
                      d="M21 14h-1V7a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v7H3a1 1 0 0 0-1 1v2a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-2a1 1 0 0 0-1-1ZM6 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7H6V7Zm14 10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1h16v1Z" />
                  </svg>
                  <select value="auto" class="astro-fbnjesqx">
                    <option value="dark" class="astro-fbnjesqx">Dark</option>
                    <option value="light" class="astro-fbnjesqx">Light</option>
                    <option value="auto" selected="true" class="astro-fbnjesqx">Auto</option>
                  </select>
                  <svg aria-hidden="true" class="icon caret astro-fbnjesqx astro-lq7oo3uf" width="16" height="16"
                    viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1em">
                    <path
                      d="M17 9.17a1 1 0 0 0-1.41 0L12 12.71 8.46 9.17a1 1 0 1 0-1.41 1.42l4.24 4.24a1.002 1.002 0 0 0 1.42 0L17 10.59a1.002 1.002 0 0 0 0-1.42Z" />
                  </svg>
                </label>
              </starlight-theme-select>
              <script>
                StarlightThemeProvider.updatePickers();
              </script>
              <starlight-lang-select><label style="--sl-select-width: 7em" class="astro-fbnjesqx">
                  <span class="sr-only astro-fbnjesqx">Select language</span>
                  <svg aria-hidden="true" class="icon label-icon astro-fbnjesqx astro-lq7oo3uf" width="16" height="16"
                    viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1em">
                    <path fill-rule="evenodd"
                      d="M8.516 3a.94.94 0 0 0-.941.94v1.15H2.94a.94.94 0 1 0 0 1.882h7.362a7.422 7.422 0 0 1-1.787 3.958 7.42 7.42 0 0 1-1.422-2.425.94.94 0 1 0-1.774.627 9.303 9.303 0 0 0 1.785 3.043 7.422 7.422 0 0 1-4.164 1.278.94.94 0 1 0 0 1.881 9.303 9.303 0 0 0 5.575-1.855 9.303 9.303 0 0 0 4.11 1.74l-.763 1.525a.968.968 0 0 0-.016.034l-1.385 2.77a.94.94 0 1 0 1.683.841l1.133-2.267h5.806l1.134 2.267a.94.94 0 0 0 1.683-.841l-1.385-2.769a.95.95 0 0 0-.018-.036l-3.476-6.951a.94.94 0 0 0-1.682 0l-1.82 3.639a7.423 7.423 0 0 1-3.593-1.256 9.303 9.303 0 0 0 2.27-5.203h1.894a.94.94 0 0 0 0-1.881H9.456V3.94A.94.94 0 0 0 8.516 3Zm6.426 11.794a1.068 1.068 0 0 1-.02.039l-.703 1.407h3.924l-1.962-3.924-1.24 2.478Z"
                      clip-rule="evenodd" />
                  </svg>
                  <select value="/getting-started/" class="astro-fbnjesqx">
                    <option value="/getting-started/" class="astro-fbnjesqx">English</option>
                    <option value="/de/getting-started/" class="astro-fbnjesqx">Deutsch</option>
                    <option value="/es/getting-started/" class="astro-fbnjesqx">Español</option>
                    <option value="/ja/getting-started/" class="astro-fbnjesqx">日本語</option>
                    <option value="/fr/getting-started/" class="astro-fbnjesqx">Français</option>
                    <option value="/it/getting-started/" class="astro-fbnjesqx">Italiano</option>
                    <option value="/id/getting-started/" class="astro-fbnjesqx">Bahasa Indonesia</option>
                    <option value="/zh-cn/getting-started/" class="astro-fbnjesqx">简体中文</option>
                    <option value="/pt-br/getting-started/" class="astro-fbnjesqx">Português do Brasil</option>
                    <option value="/pt-pt/getting-started/" class="astro-fbnjesqx">Português</option>
                    <option value="/ko/getting-started/" class="astro-fbnjesqx">한국어</option>
                    <option value="/tr/getting-started/" class="astro-fbnjesqx">Türkçe</option>
                    <option value="/ru/getting-started/" class="astro-fbnjesqx">Русский</option>
                    <option value="/hi/getting-started/" class="astro-fbnjesqx">हिंदी</option>
                    <option value="/da/getting-started/" class="astro-fbnjesqx">Dansk</option>
                    <option value="/uk/getting-started/" class="astro-fbnjesqx">Українська</option>
                  </select>
                  <svg aria-hidden="true" class="icon caret astro-fbnjesqx astro-lq7oo3uf" width="16" height="16"
                    viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1em">
                    <path
                      d="M17 9.17a1 1 0 0 0-1.41 0L12 12.71 8.46 9.17a1 1 0 1 0-1.41 1.42l4.24 4.24a1.002 1.002 0 0 0 1.42 0L17 10.59a1.002 1.002 0 0 0 0-1.42Z" />
                  </svg>
                </label>
              </starlight-lang-select>
            </div>
          </div>
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
                          <a href="#quick-start" class="astro-zu3ccwit" style="--depth: 0">
                            <span class="astro-zu3ccwit" style="--depth: 0">Quick Start</span>
                          </a>
                          <ul class="isMobile astro-zu3ccwit" style="--depth: 1">
                            <li class="astro-zu3ccwit" style="--depth: 1">
                              <a href="#base-url" class="astro-zu3ccwit" style="--depth: 1">
                                <span class="astro-zu3ccwit" style="--depth: 1">Base URL</span>
                              </a>
                            </li>
                            <li class="astro-zu3ccwit" style="--depth: 1">
                              <a href="#add-data" class="astro-zu3ccwit" style="--depth: 1">
                                <span class="astro-zu3ccwit" style="--depth: 1">1. Add Data</span>
                              </a>
                            </li>
                            <li class="astro-zu3ccwit" style="--depth: 1">
                              <a href="#update-data" class="astro-zu3ccwit" style="--depth: 1">
                                <span class="astro-zu3ccwit" style="--depth: 1">2. Update Data</span>
                              </a>
                            </li>
                            <li class="astro-zu3ccwit" style="--depth: 1">
                              <a href="#patch-data" class="astro-zu3ccwit" style="--depth: 1">
                                <span class="astro-zu3ccwit" style="--depth: 1">3. Patch Data</span>
                              </a>
                            </li>
                            <li class="astro-zu3ccwit" style="--depth: 1">
                              <a href="#get-data" class="astro-zu3ccwit" style="--depth: 1">
                                <span class="astro-zu3ccwit" style="--depth: 1">4. Get List</span>
                              </a>
                            </li>
                            <li class="astro-zu3ccwit" style="--depth: 1">
                              <a href="#get-detail" class="astro-zu3ccwit" style="--depth: 1">
                                <span class="astro-zu3ccwit" style="--depth: 1">5. Get Detail</span>
                              </a>
                            </li>
                            <li class="astro-zu3ccwit" style="--depth: 1">
                              <a href="#delete-data" class="astro-zu3ccwit" style="--depth: 1">
                                <span class="astro-zu3ccwit" style="--depth: 1">6. Delete Data</span>
                              </a>
                            </li>
                          </ul>
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
                        <a href="#quick-start" class="astro-zu3ccwit" style="--depth: 0">
                          <span class="astro-zu3ccwit" style="--depth: 0">Quick Start</span>
                        </a>
                        <ul class="astro-zu3ccwit" style="--depth: 1">
                          <li class="astro-zu3ccwit" style="--depth: 1">
                            <a href="#base-url" class="astro-zu3ccwit" style="--depth: 1">
                              <span class="astro-zu3ccwit" style="--depth: 1">Base URL</span>
                            </a>
                          </li>
                          <li class="astro-zu3ccwit" style="--depth: 1">
                            <a href="#add-data" class="astro-zu3ccwit" style="--depth: 1">
                              <span class="astro-zu3ccwit" style="--depth: 1">1. Add Data</span>
                            </a>
                          </li>
                          <li class="astro-zu3ccwit" style="--depth: 1">
                            <a href="#update-data" class="astro-zu3ccwit" style="--depth: 1">
                              <span class="astro-zu3ccwit" style="--depth: 1">2. Update Data</span>
                            </a>
                          </li>
                          <li class="astro-zu3ccwit" style="--depth: 1">
                            <a href="#patch-data" class="astro-zu3ccwit" style="--depth: 1">
                              <span class="astro-zu3ccwit" style="--depth: 1">3. Patch Data</span>
                            </a>
                          </li>
                          <li class="astro-zu3ccwit" style="--depth: 1">
                            <a href="#get-data" class="astro-zu3ccwit" style="--depth: 1">
                              <span class="astro-zu3ccwit" style="--depth: 1">4. Get List</span>
                            </a>
                          </li>
                          <li class="astro-zu3ccwit" style="--depth: 1">
                            <a href="#get-detail" class="astro-zu3ccwit" style="--depth: 1">
                              <span class="astro-zu3ccwit" style="--depth: 1">5. Get Detail</span>
                            </a>
                          </li>
                          <li class="astro-zu3ccwit" style="--depth: 1">
                            <a href="#delete-data" class="astro-zu3ccwit" style="--depth: 1">
                              <span class="astro-zu3ccwit" style="--depth: 1">6. Delete Data</span>
                            </a>
                          </li>
                        </ul>
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
                <div class="sl-markdown-content">

                  <h2 id="quick-start">Quick Start</h2>
                  <h3 id="base-url">Base URL</h3>
                  <p> <a href="javascript:void(0)">https://www.dynamic-api.kaushikavaghela.com/api</a> </p>
                  <script>
                    (() => {
                      class StarlightTabsRestore extends HTMLElement {
                        connectedCallback() {
                          const starlightTabs = this.closest("starlight-tabs");
                          if (!(starlightTabs instanceof HTMLElement) || typeof localStorage === "undefined") return;
                          const syncKey = starlightTabs.dataset.syncKey;
                          if (!syncKey) return;
                          const label = localStorage.getItem(`starlight-synced-tabs__${syncKey}`);
                          if (!label) return;
                          const tabs = [...starlightTabs?.querySelectorAll('[role="tab"]')];
                          const tabIndexToRestore = tabs.findIndex((tab) => tab instanceof HTMLAnchorElement && tab.textContent?.trim() === label);
                          const panels = starlightTabs?.querySelectorAll(':scope > [role="tabpanel"]');
                          const newTab = tabs[tabIndexToRestore];
                          const newPanel = panels[tabIndexToRestore];
                          if (tabIndexToRestore < 1 || !newTab || !newPanel) return;
                          tabs[0]?.setAttribute("aria-selected", "false");
                          tabs[0]?.setAttribute("tabindex", "-1");
                          panels?.[0]?.setAttribute("hidden", "true");
                          newTab.removeAttribute("tabindex");
                          newTab.setAttribute("aria-selected", "true");
                          newPanel.removeAttribute("hidden");
                        }
                      }
                      customElements.define("starlight-tabs-restore", StarlightTabsRestore);
                    })();
                  </script>
                  <h3 id="add-data">1. Add Data</h3>
                  <div><strong>Endpoint :</strong> <span>/electronic-devices/inventory</span> </div>
                  <div><strong>Method :</strong> <span>POST</span> </div>
                  <div><strong></strong></div>
                  <starlight-tabs data-sync-key="pkg" class="astro-jdrv5pdc">

                    <section id="tab-panel-237" aria-labelledby="tab-237" role="tabpanel">
                      <div class="expressive-code">
                        <link rel="stylesheet" href="css/ec.j8ofn.css" />
                        <script type="module" src="js/ec.8zarh.js"></script>
                        <figure class="frame is-terminal not-content">
                          <figcaption class="header"><span class="title"></span><span class="sr-only">Terminal
                              window</span></figcaption>
                              <pre data-language="sh"><code><div class="ec-line"><div class="code"><span style="--0:#82AAFF;--1:#3C63B3">curl</span><span style="--0:#82AAFF;--1:#3C63B3"> -X POST </span><span style="--0:#ECC48D;--1:#3C63B3">https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory</span><span style="--0:#D6DEEB;--1:#403F53"> </span><span style="--0:#82AAFF;--1:#3C63B3">-H </span><span style="--0:#82AAFF;--1:#3C63B3">'Content-Type: application/json'</span><span style="--0:#82AAFF;--1:#3C63B3"> </span><span style="--0:#82AAFF;--1:#3C63B3">-d </span><span style="--0:#ECC48D;--1:#3C63B3">'{"device_name":"Smartphone X200","brand":"TechBrand","price":799,"stock_quantity":50,"features":{"screen_size":"6.5 inches","battery":"4000 mAh","processor":"Octa-core"}}'</span></div></div></code></pre>
                              
                              
                              <div class="copy">
                                <button title="Copy to clipboard" data-copied="Copied!"
                                    data-code="curl -X POST https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory -H 'Content-Type: application/json' -d '{&quot;device_name&quot;:&quot;Smartphone X200&quot;,&quot;brand&quot;:&quot;TechBrand&quot;,&quot;price&quot;:799,&quot;stock_quantity&quot;:50,&quot;features&quot;:{&quot;screen_size&quot;:&quot;6.5 inches&quot;,&quot;battery&quot;:&quot;4000 mAh&quot;,&quot;processor&quot;:&quot;Octa-core&quot;}}'">
                                </button>
                            </div>
                            
                        </figure>
                      </div>
                    </section>
                  </starlight-tabs>

                  <h3 id="update-data">2. Update Data</h3>
<div><strong>Endpoint :</strong> <span>/electronic-devices/inventory/{id}</span></div>
<div><strong>Method :</strong> <span>PUT</span></div>
<div><strong></strong></div>
<starlight-tabs data-sync-key="pkg" class="astro-jdrv5pdc">

  <section id="tab-panel-238" aria-labelledby="tab-238" role="tabpanel">
    <div class="expressive-code">
      <link rel="stylesheet" href="css/ec.j8ofn.css" />
      <script type="module" src="js/ec.8zarh.js"></script>
      <figure class="frame is-terminal not-content">
        <figcaption class="header"><span class="title"></span><span class="sr-only">Terminal window</span></figcaption>
        <pre data-language="sh"><code><div class="ec-line"><div class="code"><span style="--0:#82AAFF;--1:#3C63B3">curl</span><span style="--0:#82AAFF;--1:#3C63B3"> -X PUT </span><span style="--0:#ECC48D;--1:#3C63B3">https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1</span><span style="--0:#D6DEEB;--1:#403F53"> </span><span style="--0:#82AAFF;--1:#3C63B3">-H </span><span style="--0:#82AAFF;--1:#3C63B3">'Content-Type: application/json'</span><span style="--0:#82AAFF;--1:#3C63B3"> </span><span style="--0:#82AAFF;--1:#3C63B3">-d </span><span style="--0:#ECC48D;--1:#3C63B3">'{"device_name":"Smartphone X200 Pro","brand":"TechBrand","price":899,"stock_quantity":30,"features":{"screen_size":"6.7 inches","battery":"4500 mAh","processor":"Octa-core"}}'</span></div></div></code></pre>
        <div class="copy">
          <button title="Copy to clipboard" data-copied="Copied!" data-code="curl -X PUT https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1 -H 'Content-Type: application/json' -d '{&quot;device_name&quot;:&quot;Smartphone X200 Pro&quot;,&quot;brand&quot;:&quot;TechBrand&quot;,&quot;price&quot;:899,&quot;stock_quantity&quot;:30,&quot;features&quot;:{&quot;screen_size&quot;:&quot;6.7 inches&quot;,&quot;battery&quot;:&quot;4500 mAh&quot;,&quot;processor&quot;:&quot;Octa-core&quot;}}'">
          </button>
        </div>
      </figure>
    </div>
  </section>
</starlight-tabs>

<h3 id="patch-data">3. Patch Data</h3>
<div><strong>Endpoint :</strong> <span>/electronic-devices/inventory/{id}</span></div>
<div><strong>Method :</strong> <span>PATCH</span></div>
<div><strong></strong></div>
<starlight-tabs data-sync-key="pkg" class="astro-jdrv5pdc">

  <section id="tab-panel-239" aria-labelledby="tab-239" role="tabpanel">
    <div class="expressive-code">
      <link rel="stylesheet" href="css/ec.j8ofn.css" />
      <script type="module" src="js/ec.8zarh.js"></script>
      <figure class="frame is-terminal not-content">
        <figcaption class="header"><span class="title"></span><span class="sr-only">Terminal window</span></figcaption>
        <pre data-language="sh"><code><div class="ec-line"><div class="code"><span style="--0:#82AAFF;--1:#3C63B3">curl</span><span style="--0:#82AAFF;--1:#3C63B3"> -X PATCH </span><span style="--0:#ECC48D;--1:#3C63B3">https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1</span><span style="--0:#D6DEEB;--1:#403F53"> </span><span style="--0:#82AAFF;--1:#3C63B3">-H </span><span style="--0:#82AAFF;--1:#3C63B3">'Content-Type: application/json'</span><span style="--0:#82AAFF;--1:#3C63B3"> </span><span style="--0:#82AAFF;--1:#3C63B3">-d </span><span style="--0:#ECC48D;--1:#3C63B3">'{"price":850,"stock_quantity":25}'</span></div></div></code></pre>
        <div class="copy">
          <button title="Copy to clipboard" data-copied="Copied!" data-code="curl -X PATCH https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1 -H 'Content-Type: application/json' -d '{&quot;price&quot;:850,&quot;stock_quantity&quot;:25}'">
          </button>
        </div>
      </figure>
    </div>
  </section>
</starlight-tabs>

<h3 id="get-data">4. Get List</h3>
<div><strong>Endpoint :</strong> <span>/electronic-devices/inventory?limit=10&page=1</span></div>
<div><strong>Method :</strong> <span>GET</span></div>
<div><strong></strong></div>
<starlight-tabs data-sync-key="pkg" class="astro-jdrv5pdc">

  <section id="tab-panel-240" aria-labelledby="tab-240" role="tabpanel">
    <div class="expressive-code">
      <link rel="stylesheet" href="css/ec.j8ofn.css" />
      <script type="module" src="js/ec.8zarh.js"></script>
      <figure class="frame is-terminal not-content">
        <figcaption class="header"><span class="title"></span><span class="sr-only">Terminal window</span></figcaption>
        <pre data-language="sh"><code><div class="ec-line"><div class="code"><span style="--0:#82AAFF;--1:#3C63B3">curl</span><span style="--0:#82AAFF;--1:#3C63B3"> -X GET </span><span style="--0:#ECC48D;--1:#3C63B3">https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory?limit=10&page=1</span></div></div></code></pre>
        <div class="copy">
          <button title="Copy to clipboard" data-copied="Copied!" data-code="curl -X GET https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory?limit=10&page=1">
          </button>
        </div>
      </figure>
    </div>
  </section>
</starlight-tabs>

<h3 id="get-detail">5. Get Detail by ID</h3>
<div><strong>Endpoint :</strong> <span>/electronic-devices/inventory/{id}</span></div>
<div><strong>Method :</strong> <span>GET</span></div>
<div><strong></strong></div>
<starlight-tabs data-sync-key="pkg" class="astro-jdrv5pdc">

  <section id="tab-panel-241" aria-labelledby="tab-241" role="tabpanel">
    <div class="expressive-code">
      <link rel="stylesheet" href="css/ec.j8ofn.css" />
      <script type="module" src="js/ec.8zarh.js"></script>
      <figure class="frame is-terminal not-content">
        <figcaption class="header"><span class="title"></span><span class="sr-only">Terminal window</span></figcaption>
        <pre data-language="sh"><code><div class="ec-line"><div class="code"><span style="--0:#82AAFF;--1:#3C63B3">curl</span><span style="--0:#82AAFF;--1:#3C63B3"> -X GET </span><span style="--0:#ECC48D;--1:#3C63B3">https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1</span></div></div></code></pre>
        <div class="copy">
          <button title="Copy to clipboard" data-copied="Copied!" data-code="curl -X GET https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1">
          </button>
        </div>
      </figure>
    </div>
  </section>
</starlight-tabs>

<h3 id="delete-data">6. Delete Data</h3>
<div><strong>Endpoint :</strong> <span>/electronic-devices/inventory/{id}</span></div>
<div><strong>Method :</strong> <span>DELETE</span></div>
<div><strong></strong></div>
<starlight-tabs data-sync-key="pkg" class="astro-jdrv5pdc">

  <section id="tab-panel-242" aria-labelledby="tab-242" role="tabpanel">
    <div class="expressive-code">
      <link rel="stylesheet" href="css/ec.j8ofn.css" />
      <script type="module" src="js/ec.8zarh.js"></script>
      <figure class="frame is-terminal not-content">
        <figcaption class="header"><span class="title"></span><span class="sr-only">Terminal window</span></figcaption>
        <pre data-language="sh"><code><div class="ec-line"><div class="code"><span style="--0:#82AAFF;--1:#3C63B3">curl</span><span style="--0:#82AAFF;--1:#3C63B3"> -X DELETE </span><span style="--0:#ECC48D;--1:#3C63B3">https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1</span></div></div></code></pre>
        <div class="copy">
          <button title="Copy to clipboard" data-copied="Copied!" data-code="curl -X DELETE https://www.dynamic-api.kaushikavaghela.com/api/electronic-devices/inventory/1">
          </button>
        </div>
      </figure>
    </div>
  </section>
</starlight-tabs>
<br>
                </div>

                <footer class="sl-flex astro-flxlqajp">

                  <div class="pagination-links astro-tvzk3bq5" dir="ltr">
                    <a href="{{ route('getting-started') }}" rel="previous" class="astro-tvzk3bq5">
                      <svg aria-hidden="true" class="astro-tvzk3bq5 astro-lq7oo3uf" width="16" height="16"
                        viewBox="0 0 24 24" fill="currentColor" style="--sl-icon-size: 1.5rem">
                        <path
                          d="M6.08 11.62c.076-.121.172-.23.29-.33l5-5a1.003 1.003 0 0 1 1.42 1.42l-3.3 3.29H17a1 1 0 1 1 0 2H9.41l3.3 3.29a1.002 1.002 0 0 1-.325 1.639 1 1 0 0 1-1.095-.219l-5-5a1 1 0 0 1-.21-.33 1 1 0 0 1 0-.76Z" />
                      </svg>
                      <span class="astro-tvzk3bq5">
                        Back <br class="astro-tvzk3bq5" />
                        <span class="link-title astro-tvzk3bq5">Getting Started Setup</span>
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