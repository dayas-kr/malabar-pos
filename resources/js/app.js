import "./bootstrap";

import Alpine from "alpinejs";
import anchor from "@alpinejs/anchor";
import focus from "@alpinejs/focus";
import theme from "./theme";
import popover from "./components/ui/popover";

Alpine.plugin(focus);
Alpine.plugin(anchor);
window.Alpine = Alpine;

Alpine.store("theme", theme);

// Alpine components
Alpine.data("popover", popover);

Alpine.start();
