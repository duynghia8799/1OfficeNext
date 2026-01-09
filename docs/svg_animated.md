process_hero ( url(#filter34_d_427_4795) )

## SVG Animation Guidelines

### File Structure
- **SVG File**: `assets/images/for-animated/process_hero.svg`
- **JS Handler**: `assets/js/svg.js`
- **LESS Styles**: `less/process.less` (or specific component less file)

### Workflow
1.  **Identify Elements**: Use unique IDs or classes within the SVG to target specific elements (e.g., `#phone-frame`, `.app-content`).
2.  **JS Logic**: Place all JS logic for SVG manipulation and complex animations in `assets/js/svg.js`.
    *   Ensure the script is enqueued in `functions.php`.
    *   Use `jQuery(document).ready()` to ensure DOM is loaded.
3.  **CSS Animations**: Simple animations (hover, fade-in) can be handled directly in LESS/CSS.
4.  **Complex Interactions**: use GSAP or custom JS in `svg.js` if CSS is insufficient.

### Specific Animations
- **Phone Scroll**: Content within the phone frame should scroll vertically.
    *   Target the content group inside the phone mask.
    *   Animate `transform: translateY()` or `y` attribute.
    *   Ensure infinite loop for continuous scrolling effect.
