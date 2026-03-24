# Design System Specification: Kinetic Fluidity

## 1. Overview & Creative North Star
The Creative North Star for this design system is **"Liquid Neon."** 

We are moving away from the rigid, jagged "cyberpunk" tropes of the past and embracing a sophisticated, high-end gaming aesthetic that feels both hyper-fast and organic. By merging the aggressive, high-contrast palette of a neon-drenched night with ultra-soft, high-radius geometry (`16px` to `24px`), we create a "tactile liquid" feel. The layout should never feel like a static grid; it should feel like a series of interconnected, glowing pods floating in a deep-space void. 

This system breaks the "template" look through intentional asymmetry: use the **Spacing Scale** to create staggered layouts where elements overlap slightly, utilizing the `24px` (6rem) and `20px` (5rem) gaps to give the bold typography room to breathe.

---

## 2. Colors & Surface Architecture
The palette is built on a foundation of "absolute depth" (`#0e0e13`) punctuated by electric "kinetic accents."

### The "No-Line" Rule
**Strict Mandate:** Designers are prohibited from using 1px solid borders to define sections or cards. Boundaries must be established exclusively through:
*   **Background Shifts:** Use `surface_container_low` for sections sitting on the base `background`.
*   **Tonal Transitions:** A `surface_container_high` card nested within a `surface_container` section.

### Surface Hierarchy & Nesting
Treat the UI as a physical stack of semi-translucent materials. 
*   **Base:** `background` (#0e0e13)
*   **Level 1 (Sections):** `surface_container_low` (#131318)
*   **Level 2 (Interactive Cards):** `surface_container` (#19191f)
*   **Level 3 (Modals/Popovers):** `surface_container_highest` (#25252c)

### The "Glass & Gradient" Rule
To elevate the "Liquid Neon" vibe, main CTAs and hero elements must utilize linear gradients. 
*   **Signature Gradient:** Transition from `primary` (#aaffdc) to `primary_container` (#00fdc1) at a 135-degree angle.
*   **Glassmorphism:** For floating navigation or tooltips, use `surface_bright` at 60% opacity with a `20px` backdrop blur. This allows the neon accents beneath to bleed through, creating a sense of environmental lighting.

---

## 3. Typography
The typography is the "engine" of the system—bold, wide, and kinetic.

*   **Display & Headlines (Space Grotesk):** These are your architectural anchors. Use `display-lg` (3.5rem) for hero moments. The wide apertures of Space Grotesk complement the high-roundness of the containers. 
*   **Body & Titles (Manrope):** Manrope provides a functional, geometric counter-balance. Use `body-lg` (1rem) for high-readability gaming stats and `title-lg` (1.375rem) for card headers.
*   **Kinetic Energy:** In headers, feel free to use "all-caps" for `label-md` to create a technical, HUD-like feel, but maintain generous letter-spacing (0.05em).

---

## 4. Elevation & Depth: Tonal Layering
Traditional drop shadows are too "dirty" for this neon aesthetic. We achieve lift through light and tone.

*   **The Layering Principle:** Instead of shadows, use the "Step-Up" method. If a card sits on `surface_container_low`, the card itself should be `surface_container`. The contrast is subtle but premium.
*   **Ambient Glow (Shadow Replacement):** When a floating state is required, use a shadow with a `40px` blur, `0px` offset, and `4%` opacity, using the `primary` color (#aaffdc) as the shadow tint. This mimics the glow of a neon tube against a dark wall.
*   **The Ghost Border Fallback:** If high-density data requires containment, use the `outline_variant` token at **15% opacity**. Anything higher is too aggressive for the "Liquid" aesthetic.

---

## 5. Components

### Buttons
*   **Primary:** Background: `primary` to `primary_container` gradient. Color: `on_primary`. Radius: `full` (9999px) for that pill-shape fluidity.
*   **Secondary:** Background: `secondary_container`. Color: `on_secondary_container`. Radius: `md` (1.5rem / 24px).
*   **State:** On hover, increase the "Ambient Glow" rather than changing the background color.

### Cards
*   **Standard:** Use `surface_container`. Radius: `lg` (2rem / 32px) for large layout blocks; `md` (1.5rem / 24px) for standard feed items.
*   **Interaction:** No dividers. Use `8` (2rem) vertical spacing to separate header, body, and footer content within the card.

### Inputs
*   **Style:** Background: `surface_container_highest`. Radius: `md` (1.5rem). 
*   **Focus State:** A 2px "Ghost Border" using `primary` at 50% opacity. No solid 100% borders.

### Progress Bars (Gaming Specific)
*   **Track:** `surface_variant`. 
*   **Indicator:** A gradient from `tertiary` (#ff6e81) to `secondary` (#d674ff). The rounded ends must match the container's `full` radius.

---

## 6. Do's and Don'ts

### Do
*   **Do** use asymmetrical margins (e.g., `10` on the left, `12` on the right) to create a dynamic editorial feel.
*   **Do** nest rounded corners correctly: If an outer container is `24px`, an inner element should be `16px` to maintain concentricity.
*   **Do** use `primary_dim` and `secondary_dim` for disabled states to keep the "vibe" alive even when elements are inactive.

### Don't
*   **Don't** use 1px solid lines. Ever. Use white space (`8` or `10`) to create separation.
*   **Don't** use pure white (#ffffff). Always use `on_background` (#f8f5fd) to prevent "retina burn" against the dark background.
*   **Don't** use sharp corners (`none` or `sm`). This system lives and breathes through the `md` (24px) and `lg` (32px) tokens.