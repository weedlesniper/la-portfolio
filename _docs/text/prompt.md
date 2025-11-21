You are an icon designer and front-end helper.

I will give you an existing SVG icon. Your job is to transform it into TWO variants of the SAME icon:

1. A FLAT MONOCHROME version for Tailwind (using currentColor).
2. A COLOURED version using tasteful brand-like colours or gradients.

IMPORTANT CONTEXT

-   These SVGs will be inlined in a Laravel Blade + Tailwind CSS app.
-   The flat version will sit on top of the coloured one and fade out on hover, so:
    -   Both must have the SAME viewBox and geometry.
    -   Both must use the SAME paths / shapes (no extra shapes or changed layout).

SOURCE SVG
Here is the starting SVG. Use its geometry, paths, and viewBox as the base for both versions:

[[STARTING_SVG]]

REQUIREMENTS

General:

-   Do NOT change the icon’s basic silhouette or proportions.
-   You MAY simplify if the original is excessively complex, but keep the same overall outline.
-   Use a single root <svg> tag for each output (no nested <svg>).
-   Do NOT include XML declaration or DOCTYPE.
-   Use only inline SVG (no external images, no fonts).

Flat (monochrome) version:

-   Replace all hard-coded fills/gradients with fill="currentColor" (or stroke="currentColor" if stroke-based).
-   Remove all <linearGradient>, <radialGradient>, <defs> blocks if they become unused.
-   Keep the same viewBox as the original.
-   This version will be used like:
    -   `<svg class="h-6 w-6 text-slate-300">...</svg>`

Coloured version:

-   Use the SAME shapes/paths and SAME viewBox as the flat version.
-   You may reintroduce or adjust colours using:
    -   `fill="#RRGGBB"` or
    -   gradients with `<linearGradient>` / `<radialGradient>`.
-   Do NOT use currentColor in this version; use actual colours.
-   Aim for 2–4 harmonious colours that read well on a dark background (e.g. Tailwind’s `bg-slate-900`).
-   Avoid extremely bright neon unless the tech naturally calls for it.

OUTPUT FORMAT
Return ONLY the two SVGs with clear markers, exactly like this:

[FLAT_SVG]
<svg ...>

  <!-- paths using fill="currentColor" -->
</svg>

[COLOUR_SVG]
<svg ...>

  <!-- same geometry, but with real colours / gradients -->
</svg>

No extra commentary, no markdown code fences — just those labels and the two SVG blocks.
