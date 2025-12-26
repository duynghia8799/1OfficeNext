# Documentation: Advanced Animation Logic for Tabs

## 1. Overview
This document describes the logic for a "Card Stack" style tab animation where:
- Moving **forward** (n -> n+1): The new tab slides up from the bottom, covering the current tab.
- Moving **backward** (n -> n-1): The current tab slides down, revealing the previous tab underneath.
- **Jumping** (n -> n+x where |x| > 1): A cross-fade effect occurs, while the stack is silently re-ordered in the background.

## 2. Core Concepts

### A. The Physical Stack
All tab panels must be physically stacked on top of each other using CSS.
- Container: `position: relative`
- Panels: `position: absolute; top: 0; left: 0; width: 100%; height: 100%;`
- Container: `position: relative`
- Panels: `position: absolute; top: 0; left: 0; width: 100%; height: 100%;`
- **Stacking Order**: Relies on natural DOM order. 
  - Since tabs are rendered sequentially (0, 1, 2...), later tabs naturally stack on top of earlier tabs.
  - No manual `z-index` is required.

### B. Positioning States
At any given time, a tab can be in one of two positions:
1.  **Active/Viewed** (or behind the active one): `translateY(0)`
2.  **Waiting** (queued below): `translateY(100%)`

## 3. Interaction Logic

### Scenario 1: Next Tab (Index + 1)
*   **Context**: User clicks the *immediate next* tab.
*   **Action**: 
    1.  Tab (n+1) is currently at `translateY(100%)`.
    2.  Animate Tab (n+1) to `translateY(0)`.
*   **Visual**: The new tab slides up covering the old one.

### Scenario 2: Previous Tab (Index - 1)
*   **Context**: User clicks the *immediate previous* tab.
*   **Action**:
    1.  Tab (n) is currently at `translateY(0)`.
    2.  Animate Tab (n) to `translateY(100%)`.
*   **Visual**: The current tab slides down, revealing the previous tab (which was already sitting at `translateY(0)` behind it).

### Scenario 3: Jump/Teleport (Distance > 1)
*   **Context**: User jumps effectively "breaking" the physical stack logic (e.g., from 1 to 3, or 3 to 0).
*   **Challenge**: If we just slide, we might see intermediate tabs unwantedly, or the z-index order might look wrong.
*   **Action (The "Magic Reset")**:
    1.  **Visual**: Use `opacity` to cross-fade between active `Tab_old` and `Tab_new`. Do **not** use slide transition for this action.
    2.  **Logic Reset**: While the fade happens (or instantly without transition on transform properties):
        - All tabs `index < new_index`: Set to `translateY(0)` (Place them behind).
        - All tabs `index > new_index`: Set to `translateY(100%)` (Place them below).
        - `Tab_new`: Set to `translateY(0)` (Active).

## 4. Implementation References

### File Structure
- **HTML Template**: `wp-content/themes/1OfficeNext/template-parts/tabs/animation_tab.php`
    - Renders the stack of panels.
- **Data Source**: `wp-content/themes/1OfficeNext/data/` (e.g., `work_tabs_data.php`)
    - Defines the order of tabs (implied index).
- **Logic Script**: `wp-content/themes/1OfficeNext/js/tabs.js`
    - **TODO**: Implement the `checkDelta` and `resetStack` logic here.
- **Styling**: `wp-content/themes/1OfficeNext/less/[page].less`
    - Define z-indexes and base active states.

### Key CSS Requirements Example
```css
.tab-pane {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    transition: transform 0.5s ease, opacity 0.3s ease;
    /* Default state for logic to work: usually handled by JS initialization */
}
/* Assign Z-Index based on child index */
.tab-pane:nth-child(1) { z-index: 10; }
.tab-pane:nth-child(2) { z-index: 20; }
.tab-pane:nth-child(3) { z-index: 30; }
.tab-pane:nth-child(4) { z-index: 40; }
```
